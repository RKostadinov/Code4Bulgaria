<?php
    require("sendgrid-php/sendgrid-php.php");
    function sendMail($form){
    if($form == "admin" || $form == "other") {
        if ($_POST) {
            if (!isset($_POST['first_name']) ||
                !isset($_POST['middle_name']) ||
                !isset($_POST['last_name']) ||
                !isset($_POST['phone']) ||
                !isset($_POST['email']) ||
                !isset($_POST['subject']) ||
                !isset($_POST['description'])
            ) {
                die("Има проблем с данните, които сте въвели.");
            }

            $first_name = $_POST['first_name'];
            $middle_name = $_POST['middle_name'];
            $last_name = $_POST['last_name'];
            $phone = $_POST['phone'];
            $email_value = $_POST['email'];
            $subject = $_POST['subject'];
            $description = $_POST['description'];

            $string_exp = "/^[A-Za-z .'-]+$/";
            if (!preg_match($string_exp, $first_name) || !preg_match($string_exp, $middle_name) || !preg_match($string_exp, $last_name)) {
                die("The First Name you entered does not appear to be valid");
            }

            $email_message = "First Name: " . $first_name . "\n";
            $email_message .= "Middle Name: " . $middle_name . "\n";
            $email_message .= "Last Name: " . $last_name . "\n";
            $email_message .= "Phone: " . $phone . "\n";
            $email_message .= "Description: " . $description . "\n";

            $sendgrid = new SendGrid('rkostadinov', 'me3eto123');
            $email = new SendGrid\Email();
            $email
                ->addTo('sayit.report@gmail.com')
                ->setFrom($email_value)
                ->setSubject($subject)
                ->setText($email_message);
            $sendgrid->send($email);

        }
    }
    if($form == "media") {
        if ($_POST) {
            if (!isset($_POST['first_name']) ||
                !isset($_POST['middle_name']) ||
                !isset($_POST['last_name']) ||
                !isset($_POST['phone']) ||
                !isset($_POST['email']) ||
                !isset($_POST['subject']) ||
                !isset($_POST['type']) ||
                !isset($_POST['media_name']) ||
                !isset($_POST['description'])
            ){
                die("Има проблем с данните, които сте въвели.");
            }

            $first_name = $_POST['first_name'];
            $middle_name = $_POST['middle_name'];
            $last_name = $_POST['last_name'];
            $phone = $_POST['phone'];
            $email_value = $_POST['email'];
            $subject = $_POST['subject'];
            $type = $_POST['type'];
            $media_name = $_POST['media_name'];
            $description = $_POST['description'];

            $string_exp = "/^[A-Za-z .'-]+$/";
            if (!preg_match($string_exp, $first_name) || !preg_match($string_exp, $middle_name) || !preg_match($string_exp, $last_name)) {
                die("The First Name you entered does not appear to be valid");
            }

            $email_message = "First Name: " . $first_name . "\n";
            $email_message .= "Middle Name: " . $middle_name . "\n";
            $email_message .= "Last Name: " . $last_name . "\n";
            $email_message .= "Phone: " . $phone . "\n";
            $email_message .= "Type: " . $type . "\n";
            $email_message .= "Media-Name: " . $media_name . "\n";
            $email_message .= "Description: " . $description . "\n";

            $sendgrid = new SendGrid('rkostadinov', 'me3eto123');
            $email = new SendGrid\Email();
            $email
                ->addTo('sayit.report@gmail.com')
                ->setFrom($email_value)
                ->setSubject($subject)
                ->setText($email_message);
            $sendgrid->send($email);

        }
    }
    if($form == "online") {
        if ($_POST) {
            if (!isset($_POST['first_name']) ||
                !isset($_POST['middle_name']) ||
                !isset($_POST['last_name']) ||
                !isset($_POST['phone']) ||
                !isset($_POST['link']) ||
                !isset($_POST['service']) ||
                !isset($_POST['email']) ||
                !isset($_POST['subject']) ||
                !isset($_POST['description'])
            ) {
                die("Има проблем с данните, които сте въвели.");
            }

            $first_name = $_POST['first_name'];
            $middle_name = $_POST['middle_name'];
            $last_name = $_POST['last_name'];
            $phone = $_POST['phone'];
            $email_value = $_POST['email'];
            $link = $_POST['link'];
            $service = $_POST['service'];
            $subject = $_POST['subject'];
            $description = $_POST['description'];

            $string_exp = "/^[A-Za-z .'-]+$/";
            if (!preg_match($string_exp, $first_name) || !preg_match($string_exp, $middle_name) || !preg_match($string_exp, $last_name)) {
                die("The First Name you entered does not appear to be valid");
            }

            $email_message = "First Name: " . $first_name . "\n";
            $email_message .= "Middle Name: " . $middle_name . "\n";
            $email_message .= "Last Name: " . $last_name . "\n";
            $email_message .= "Phone: " . $phone . "\n";
            $email_message .= "Link: " . $phone . "\n";
            $email_message .= "Service: " . $phone . "\n";
            $email_message .= "Description: " . $description . "\n";

            $sendgrid = new SendGrid('rkostadinov', 'me3eto123');
            $email = new SendGrid\Email();
            $email
                ->addTo('sayit.report@gmail.com')
                ->setFrom($email_value)
                ->setSubject($subject)
                ->setText($email_message);
            $sendgrid->send($email);

        }
    }
    if($form == "shop" || $form == "place") {
        if ($_POST) {
            if (!isset($_POST['first_name']) ||
                !isset($_POST['middle_name']) ||
                !isset($_POST['last_name']) ||
                !isset($_POST['phone']) ||
                !isset($_POST['email']) ||
                !isset($_POST['shop_name']) ||
                !isset($_POST['address']) ||
                !isset($_POST['subject']) ||
                !isset($_POST['description'])
            ) {
                die("Има проблем с данните, които сте въвели.");
            }

            $first_name = $_POST['first_name'];
            $middle_name = $_POST['middle_name'];
            $last_name = $_POST['last_name'];
            $phone = $_POST['phone'];
            $email_value = $_POST['email'];
            $shop_name = $_POST['shop_name'];
            $address = $_POST['address'];
            $subject = $_POST['subject'];
            $description = $_POST['description'];

            $string_exp = "/^[A-Za-z .'-]+$/";
            if (!preg_match($string_exp, $first_name) || !preg_match($string_exp, $middle_name) || !preg_match($string_exp, $last_name)) {
                die("The First Name you entered does not appear to be valid");
            }

            $email_message = "First Name: " . $first_name . "\n";
            $email_message .= "Middle Name: " . $middle_name . "\n";
            $email_message .= "Last Name: " . $last_name . "\n";
            $email_message .= "Phone: " . $phone . "\n";
            $email_message .= "Name of the shop: " . $shop_name . "\n";
            $email_message .= "Address: " . $address . "\n";
            $email_message .= "Description: " . $description . "\n";

            $sendgrid = new SendGrid('rkostadinov', 'me3eto123');
            $email = new SendGrid\Email();
            $email
                ->addTo('sayit.report@gmail.com')
                ->setFrom($email_value)
                ->setSubject($subject)
                ->setText($email_message);
            $sendgrid->send($email);

        }
    }
}
?>