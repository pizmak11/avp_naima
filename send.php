<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //NO FILTER
    /*$name = $_POST['name'];
    $companyname = $_POST['companyname'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $message = $_POST['message'];*/

    //FILTER
    $name = filter_input(INPUT_POST, 'name');
    $companyname = filter_input(INPUT_POST, 'companyname');
    $telephone = filter_input(INPUT_POST, 'telephone');
    $email = filter_input(INPUT_POST, 'email');
    $message = filter_input(INPUT_POST, 'message');
    $name = htmlspecialchars($name);
    $companyname = htmlspecialchars($companyname);
    $telephone = htmlspecialchars($telephone);
    $email = htmlspecialchars($email);
    $message = htmlspecialchars($message);


    require_once('PHPMailer/PHPMailerAutoload.php');
    $mail = new PHPMailer(true);

    if($send_using_gmail) {
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;
        $mail->Username = "przemek.naima@gmail.com";
        $mail->Password = "pizmaktozul11";
    }
    else {
        $_SESSION['issended'] = "no";
    }

    $mailto = Array(
        "przemek.naima@gmail.com",
        "przemek@atelier-vert-pomme.com"
    );

    foreach($mailto as $mt) {
        $mail->AddAddress($mt, "Atelier Vert Pomme");
        $mail->SetFrom($email, $name);
        $mail->Subject = "From: " . $name . $companyname;
        $mail->Body = "Telephone: " . $telephone . "\n\n" . $message;

        try{
            $mail->Send();
            $_SESSION['issended'] = "yes";
        } catch(Exception $e) {
            //echo "Fail - " . $mail->ErrorInfo;
            $_SESSION['issended'] = "no";
        }
        $_SESSION['issended'] = "yes";
    }
}
else {
    $_SESSION['issended'] = "no";
}

ob_start();
$url = 'http://avp-communications.com/naima_new/index.php';
while (ob_get_status()) {
    ob_end_clean();
}
header("Location: $url");
?>

