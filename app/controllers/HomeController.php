
<?php
// app/controllers/HomeController.php
require_once 'app/helpers/EmailHelper.php';
require_once 'app/helpers/GoogleSheetHelper.php';

class HomeController
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
    public function index()
    {
        // $learnMoreFormMessage
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form'])) {
            $form = $_POST['form'];
            $name = $this->db->escape($_POST['name']);
            $email = $this->db->escape($_POST['email']);
            $phone = $this->db->escape($_POST['phone']);
            $savedGSheetId = $this->db->fetchRow('settings', ["id" => 1])['google_sheet_id'] ?? null;
            $redirect_page = isset($_POST['redirect_uri']) ? ($_POST['redirect_uri'] == "/" ? '/home' : $_POST['redirect_uri']) : '/home';
            switch($form) {
                case ('learn-more' || 'call-back'):
                    $data = [
                        'name' => $name,
                        'form' => $form,
                        'email' => $email,
                        'phone' => $phone,
                        'message' => "-"
                    ];
                    
                    $result = $this->db->insert('enquires', $data);
                    if ($result && $savedGSheetId != null) {
                            if(send_email($form, $data) && save_to_gsheet($form, $data, $savedGSheetId)) {
                                $message = array("form" => $form, "status" => "ok", "message"=> "Request Submitted. We'll get back shortly.");
                                return require_once 'app/views/pages'.$redirect_page.'.php';
                            } else {
                                $message = array("form" => $form,"status" => "error", "message"=> "Unknown error occured! Please try again later.");
                                return require_once 'app/views/pages'.$redirect_page.'.php';
                            }
                    } else {
                        $message = array("form" => $form,"status" => "error", "message"=> "Unknown error occured! Please try again later.");
                        return require_once 'app/views/pages/home.php';
                    }
            }
        }
        // Load the corresponding view
        return require_once 'app/views/pages/home.php';
    }
}