<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name         = filter_input(INPUT_POST, 'name');
    $surname      = filter_input(INPUT_POST, 'surname');
    $telephone    = filter_input(INPUT_POST, 'telephone');
    $email        = filter_input(INPUT_POST, 'email');
    $message      = filter_input(INPUT_POST, 'message');
    $stanowisko   = filter_input(INPUT_POST, 'stanowisko');

    $ip           = filter_input(INPUT_POST, 'ipcheck');
    $ipD          = explode(".", $ip);
    $ipDomain     = "$ipD[0].$ipD[1].$ipD[2]";
    $auth         = filter_input(INPUT_POST, 'subject');
    $surnameCheck = substr_replace($surname, "", -2);

    if($auth == "" &&
       $surname !== $name &&
       $surnameCheck !== $name) {

        require_once('PHPMailer/PHPMailerAutoload.php');
        $mail = new PHPMailer(true);

        $mail->IsSMTP();
        $mail->CharSet = 'UTF-8';
        $mail->IsHTML(true);
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host = "";
        $mail->Port = 465;
        $mail->Username = "";
        $mail->Password = "";

        $zalacznik = "Do maila nie załączono plików.";

        $valid_formats = array("jpg", "jpeg", "png", "gif", "zip", "7z", "rar", "pdf", "dwg", "doc", "docx", "txt");

        foreach ($_FILES['file']['name'] as $f => $namef) {

            if  ($_FILES['file']['error'][$f] == 4) { continue; }
            if  ($_FILES['file']['error'][$f] == 0) {
                $mail->addAttachment($_FILES["file"]["tmp_name"][$f], $namef);
                $zalacznik = "<b>Do maila załączono pliki</b>";
            }
        }

        $msg = "<img src='../../wp-content/uploads/2018/04/cropped-naima_logo.png'>
                <table>";

        if($stanowisko) {
            $subject = "NAIMA.PL - aplikacja na stanowisko: $stanowisko";
            $msg .= "<tr><td><b>Aplikacja na stanowisko</b></td><td>$stanowisko</td></tr>";
        } else {
            $subject = "NAIMA.PL - wiadomość";
        }

        $msg .= "
        <tr><td><b>Imię i nazwisko</b></td><td>$name $surname</td></tr>
        <tr><td><b>Adres e-mail</b></td><td>$email</td></tr>
        <tr><td><b>Nr telefonu</b></td><td>$telephone</td></tr>
        <tr><td colspan='2'>$message</td></tr>
        </table>

        <p><i>$zalacznik</i></p>
        <p style='font-size: 8px; color: #999999;'><i>Wiadomość wysłano z adresu: $ip</i></p>

        <style>
            p { margin: 30px 0; }

            table {
                border-collapse: collapse;
                width: 600px;
            }

            td {
                border: solid 1px #CCCCCC;
                padding: 10px;
            }

            img {
                margin-bottom: 30px;
                margin-left: 150px;
                width: 300px;
                backrgound-color: #FFFFFF;
            }
        </style>
        ";
        
        $mail->AddAddress("", "NAIMA");
        $mail->SetFrom("", "NAIMA");
        $mail->Subject = $subject;
        $mail->IsHTML(true);
        $mail->Body = $msg;

        try {
            $mail->Send();
            $_SESSION['is_sent'] = "yes";
        }
        catch (Exception $e) {
            echo $e->getMessage();
            $_SESSION['is_sent'] = "no";
            $_SESSION['reason'] = "Błąd autoryzacji. Prosimy o kontakt pisząc bezpośrednio <br>na nasz adres email: <a href='mailto: job@naima.pl'>job@naima.pl</a>";
        }
    } else {
        $_SESSION['is_sent'] = "no";
        $_SESSION['reason'] = "Wiadomość nie przeszła pozytywnie walidacji <br>przez <i id='spam-filters'>filtry antyspamowe</i>. Popraw błędy i spróbuj ponownie,<br>lub napisz do nas na: <a href='mailto: job@naima.pl'>job@naima.pl</a>";
    }
} else {
    $_SESSION['is_sent'] = "no";
    $_SESSION['reason'] = "Błąd techniczny. Prosimy o kontakt pisząc bezpośrednio <br>na nasz adres email: <a href='mailto: job@naima.pl'>job@naima.pl</a>";
}

ob_start();
while (ob_get_status()) { ob_end_clean(); }
header("Location: localhost:9000");
?>


















<?php /*session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $ip2  = filter_input(INPUT_POST, 'adip');
    $auth = filter_input(INPUT_POST, 'title2');

    //FILTER
    $name       = filter_input(INPUT_POST, 'name');
    $surname    = filter_input(INPUT_POST, 'surname');
    $telephone  = filter_input(INPUT_POST, 'telephone');
    $email      = filter_input(INPUT_POST, 'email');
    $message    = filter_input(INPUT_POST, 'message');
    $stanow     = filter_input(INPUT_POST, 'stanow');
    //$validate   = filter_input(INPUT_POST, 'validate');

    $surnameCheck = substr_replace($surname, "", -2);

    if($name == $surnameCheck ||$name != $surname &&
       strpos($message, 'http') == false &&
       $ip2 != "5.188.210.6" &&
       $ip2 != "5.188.211.15" &&
       $ip2 != "45.94.233.122" &&
       $ip2 != "46.161.9.56" &&
       $ip2 != "46.161.9.3" &&
       $ip2 != "46.161.9.9" &&
       $ip2 != "46.165.228.100" &&
       $ip2 != "46.165.230.5" &&
       $ip2 != "62.210.103.20" &&
       $ip2 != "67.218.4.86" &&
       $ip2 != "89.249.65.21" &&
       $ip2 != "104.254.93.69" &&
       $ip2 != "107.150.23.219" && 
       $ip2 != "107.172.239.204" &&
       $ip2 != "154.126.105.181" &&
       $ip2 != "185.104.184.119" &&
       $ip2 != "185.104.184.123" &&
       $ip2 != "185.243.110.176" &&
       $ip2 != "192.69.253.87" &&
       $ip2 != "194.63.142.248" &&
       $ip2 != "195.154.170.194" &&
       $ip2 != "209.99.174.18") {
        $name       = htmlspecialchars($name);
        $surname    = htmlspecialchars($surname);
        $telephone  = htmlspecialchars($telephone);
        $email      = htmlspecialchars($email);
        $message    = htmlspecialchars($message);
        $stanow     = htmlspecialchars($stanow);
        //$validate   = filter_input(INPUT_POST, 'validate');

        if($stanow == "st1") { $stanow = "French Project Manager"; }
        if($stanow == "st2") { $stanow = "Manager 2D"; }
        if($stanow == "st3") { $stanow = "Manager 3D"; }
        if($stanow == "st4") { $stanow = "Grafik 2D"; }
        if($stanow == "st5") { $stanow = "Grafik 3D"; }
        if($stanow == "st6") { $stanow = "Web Developer"; }
        if($stanow == "st7") { $stanow = "Programista"; }
        if($stanow == "st8") { $stanow = "Pracownik biura"; }

        if($stanow) {
            $subject = "NAIMA.PL - aplikacja na stanowisko: $stanow";
        } else {
            $subject = "NAIMA.PL - wiadomość";
        }

        str_replace($chars1, $chars2, $subject);

        require_once('PHPMailer/PHPMailerAutoload.php');
        $mail = new PHPMailer(true);
        $mail->CharSet = 'UTF-8';

        if($send_using_gmail) {
            $mail->IsSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = "ssl";
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 465;
            $mail->Username = "przemek.naima@gmail.com";
            $mail->Password = "avpAVP11";
        }
        else { $_SESSION['is_sent'] = "no"; }

        //$mail->AddAddress("job@naima.pl", "NAIMA");
        $mail->AddAddress("przemek@naima.pl", "NAIMA");
        $mail->SetFrom($email, $name . " " . $surname);
        $mail->Subject = $subject;
        $mail->IsHTML(true);

        $zalacznik = "Do maila nie załączono plików.";

        $valid_formats = array("jpg", "jpeg", "png", "gif", "zip", "7z", "rar", "pdf", "dwg", "doc", "docx", "txt");

        foreach ($_FILES['file']['name'] as $f => $namef) {

            if  ($_FILES['file']['error'][$f] == 4) { continue; }
            if  ($_FILES['file']['error'][$f] == 0) {
                //if( !in_array(strtolower(pathinfo($namef, PATHINFO_EXTENSION)), $valid_formats) ) { continue; }
                //else {
                $mail->addAttachment($_FILES["file"]["tmp_name"][$f], $namef);
                $zalacznik = "Do maila załączono pliki";
                //}
            }
            //$mail->addAttachment($_FILES["file"]["tmp_name"][$f], $namef);
            //$zalacznik = "(Do maila zalaczono pliki)";
        }

        $msg = "<table>";

        if($stanow) {
            $msg .= "<tr><td><b>Aplikacja na stanowisko</b></td><td>$stanow</td></tr>";
        }

        $msg .= "
        <img src='http://naima.pl/wp-content/uploads/2018/04/cropped-naima_logo.png'>
        <tr><td><b>Imię i nazwisko</b></td><td>$name $surname</td></tr>
        <tr><td><b>Adres e-mail</b></td><td>$email</td></tr>
        <tr><td><b>Nr telefonu</b></td><td>$telephone</td></tr>
        <tr><td colspan='2'>$message</td></tr>
        </table>

        <p><i>$zal</i></p>

        <style>
            p { margin: 30px 0; }

            table {
                border-collapse: collapse;
                width: 600px;
            }

            td {
                border: solid 1px #CCCCCC;
                padding: 10px;
            }

            img {
                margin-bottom: 30px;
                margin-left: 150px;
                width: 300px;
                backrgound-color: #FFFFFF;
            }
        </style>
        ";

        $mail->Body = $msg;

        try {
            $mail->Send();
            $_SESSION['is_sent'] = "yes";
        } catch(Exception $e) { $_SESSION['is_sent'] = "no"; }
    } else { $_SESSION['is_sent'] = "no"; }
} else { $_SESSION['is_sent'] = "no"; }

ob_start();
while (ob_get_status()) { ob_end_clean(); }
header("Location: http://naima.pl/");*/
?>