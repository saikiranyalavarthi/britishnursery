<?php
// app/controllers/AdminController.php
session_start();

class AdminController
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
    public function index()
    {
        if(isset($_SESSION['email']) && isset($_SESSION['id'])) {
            $userEmail = $_SESSION['email'];
            $userId = $_SESSION['id'];
            return require_once 'app/views/admin/dashboard.php';
        } else {
            header('Location: /admin/login');
        }

        // Load the corresponding view for the admin dashboard
    }

    public function login()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email']) && isset($_POST['password'])) {
            $email = $this->db->escape($_POST["email"]);
            $password = md5($_POST['password']);
            $conditions = ['email' => $email, 'password' => $password];
            $record = $this->db->fetchRow('users', $conditions);
            if($record != null) {
                $_SESSION['id'] = $record['id'];
                $_SESSION['email'] = $record['email'];
                header('Location: /admin');
            } else {
                $error = "Invalid Email or Password!";
                return require_once 'app/views/admin/login.php';
            }
        } else if(isset($_SESSION['email']) && isset($_SESSION['id'])) {
            header('Location: /admin');
        } 
        else {
            // Load the corresponding view for the admin login
            return require_once 'app/views/admin/login.php';
        }
    }

    public function logout() {
        session_destroy();
        header('Location: /admin/login');
    }

    public function settings() {

        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['newGSheetId'])) {
            $newGSheetId = $this->db->escape($_POST['newGSheetId']);
            $result = $this->db->update('settings', ["google_sheet_id" => $newGSheetId], ["id" => 1]);
               if($result) {
                $message = "Google sheet id changed!";
                return require_once 'app/views/admin/settings.php';
               } else {
                $error = "Could not change Google sheet id. Try again later!";
                return require_once 'app/views/admin/settings.php';
               }
        }
        return require_once 'app/views/admin/settings.php';
    }

    public function profile() {
        if($_SERVER['REQUEST_METHOD']  == 'POST' && isset($_POST['newpassword']) && isset($_POST['confirmpassword'])) {
            $newpassword = $this->db->escape($_POST['newpassword']);
            $confirmpassword = $this->db->escape($_POST['confirmpassword']);

            if($newpassword == $confirmpassword) {
               $result = $this->db->update('users', ["password" => md5($newpassword)], ["id" => $_SESSION['id']]);
               if($result) {
                $message = "Password changed successfully!";
                return require_once 'app/views/admin/profile.php';
               } else {
                $error = "Could not change password. Try again later!";
                return require_once 'app/views/admin/profile.php';
               }
            } else {
                $error = "Passwords did not match!";
                return require_once 'app/views/admin/profile.php';
            }
        }
        return require_once 'app/views/admin/profile.php';
    }
}
