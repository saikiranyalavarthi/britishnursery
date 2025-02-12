
<?php
// app/controllers/ContactController.php
require_once 'app/helpers/EmailHelper.php';

class ContactController
{
    private $db;

    public function __construct($db) {
        $this->db = $db;
    } 
    public function index()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form'])) {

            if(empty($_POST['name']) ||  empty($_POST['phone'] || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))) {
                http_response_code(500);
                exit();
              }

            $form = $_POST['form'];
            $name = $this->db->escape($_POST['name']);
            $email = $this->db->escape($_POST['email']);
            $phone = $this->db->escape($_POST['phone']);
            $message = $this->db->escape($_POST['message']);
            $savedGSheetId = $this->db->fetchRow('settings', ["id" => 1])['google_sheet_id'] ?? null;

            $data = array(
                "name" => $name,
                "email" => $email,
                "phone" => $phone,
                "message" => $message,
                "form" => $form
            );
            $result = $this->db->insert('enquires', $data);
            if($result && $savedGSheetId != null) {
                if(!send_email($form, $data) && !save_to_gsheet($form, $data, $savedGSheetId)) {
                    http_response_code(500);
                    exit();
                }
            } else {
                http_response_code(500);
                exit();
            }
        
        } else {
            // Load the corresponding view
            return require_once 'app/views/pages/contact.php';
        }
    }
}
