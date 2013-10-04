<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_Us extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Medix - Contact Us';
        $data['body'] = $this->load->view('contact_us', $data, true);
        $data['header'] = $this->load->view('homepage/header', '', true);
        $data['identifier'] = true;
        $data['contact'] = true;
        $this->load->view('homepage', $data);
    }
    
    public function send()
    {
        $myemail = 'info@medix.ph';//<-----Put Your email address here.
    
        $full_name = $_POST['full_name'];
        $QuestionComment = $_POST['message'];

        $subject = "Medix Inquiry";
        $email_address = $_POST['email']; 
        $message = "Full Name: ".$full_name. "\nEmail: ".$email_address. "\nMessage: ". $QuestionComment;

        $to = $myemail; 
        $email_subject = "$subject";
        $email_body = "$message"; 

        $headers = "From: $full_name <$email_address>\n"; 
        $headers .= "Reply-To: $email_address";


        //redirect to the 'thank you' page
        if(mail($to,$email_subject,$email_body,$headers)){
                echo "mail successful send";
        }else{ 
                echo "Could not send you mail, Please try again later";
        }


        $message2 = "Your message below has been sent:\n" . $QuestionComment . "\n\n www.mydentistpal.com";

        $to2 = $email_address; 
        $email_subject2 = "Medix Inquiry";
        $email_body2 = "$message2"; 

        $headers2 = "From: Medix <$myemail>\n"; 
        $headers2 .= "Reply-To: $myemail";


        //redirect to the 'thank you' page
        if(mail($to2,$email_subject2,$email_body2,$headers2)){
                echo "mail successful send";
        }else{ 
                echo "Could not send you mail, Please try again later";
        }
    }
}

/* End of file contact_us.php */
/* Location: ./application/controllers/contact_us.php */