<?php
$w = stream_get_wrappers();
echo 'openssl: ',  extension_loaded  ('openssl') ? 'yes':'no', "\n";
echo 'http wrapper: ', in_array('http', $w) ? 'yes':'no', "\n";
echo 'https wrapper: ', in_array('https', $w) ? 'yes':'no', "\n";
echo 'wrappers: ', var_dump($w);

if(isset($_GET['login'])&&(isset($_GET['key']))) {
    echo $_GET['login'];
    echo ' ';
    echo $_GET['key'];
    echo ' ';
    Send_Mail("{$_GET['login']}", $_GET['key']);
}

function Send_Mail($to, $key)
 {
include 'phpmailer/class.phpmailer.php';
include 'phpmailer/class.smtp.php';
 $link = 'http://www.BelaSono/activation.php?login='.$to.'&activate_code='.$key;
 $body = "Your account has been registered to your email. In order to confirm that it was you, please follow the link. <br> <br> Activation link: ".$link."  <br> <br> If you were not going to register on our website, then please ignore this letter and delete it.";
 $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Host = 'smtp.yandex.ru';
    $mail->SMTPAuth = true;
    $mail->Username = 'foskarrrr';
    $mail->Password = 'zx1cv2bn3m,4'; // Ваш пароль
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 587;
    $mail->setFrom('foskarrrr@yandex.ru'); // Ваш Email
    $mail->addAddress($to); // Email получателя
    $mail->isHTML(true);
    $mail->Subject = 'try'; // Заголовок письма
    $mail->Body = $body; // Текст письма
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
 if(!$mail->Send()){
  echo "Ошибка отправки письма:".$mail->ErrorInfo;
}else{
  echo "Письмо отправленно!";
}
 }
 ?>
