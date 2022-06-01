<?php

$failMessage = 'All Fields are requred.';
$successMsg = 'Your email has been sent! ';

class ContactForm
{
    public $fname;
    public $lname;
    public $email;
    public $message;
    public $headers;

    public function SendMail()
    {
        $failMessage = 'All Fields are requred! Please try again.' . '&nbsp' .  "	&#128542; " ; 
        $successMsg = "Your email has been sent! I'll be in touch soon! Thank you! " . '&nbsp' . "&#128522;" ;
       

        // If a button is set
        if(isset($_POST['send-mail']))
        {
            // Declare all variables
            $fname = htmlspecialchars($_POST['fname'], FILTER_SANITIZE_SPECIAL_CHARS);
            $lname = htmlspecialchars( $_POST['lname'], FILTER_SANITIZE_SPECIAL_CHARS);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message'], FILTER_SANITIZE_SPECIAL_CHARS);            

            // If fields are not empty
            if(!empty($lname) && !empty($fname) && !empty($email) && !empty($message) )
            {
                if(filter_var($email, FILTER_VALIDATE_EMAIL) === false )
                {
                  echo '<p class="success-message center" style=" color:white; " >'. $successMsg . '</p>';
                }

                else
                {
                // My email
                    $mailTo = "ngemakwanele1@gmail.com"; 
                    $headers = $message;  //Body of the email
                    $emailSubject ='Website contact from :'. $fname. $email;              
                }


                // mail($mailTo, $emailSubject, $headers);
                if(mail ($mailTo, $emailSubject, $headers) )
                {
                 echo '<p class="success-message center" style=" color:white; " >'. $successMsg . '</p>';
                }

             }

            //  Empty Fields

             if (empty($lname) || empty($fname) || empty($email) || empty($message) ) 
             {
               echo '<p class="fail-message center" style="background-color:red; color:white; border-radius: 20px; padding:10px; margin-right:auto; margin-left:auto " >'. $failMessage . '</p>';
                 
             } 
        }
    }

}

$sendEmail = new ContactForm;
