<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
<?php

//$action = $_POST["action"];

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    $name = "";
    $email = "";
    $content = "";
}else{
    $name = htmlspecialchars($_POST["name"],ENT_QUOTES);
    $email = htmlspecialchars($_POST["email"],ENT_QUOTES);
    $content = htmlspecialchars($_POST["contentsform"],ENT_QUOTES);
    //ENT_QUOTES=特殊文字のうちシングルクォーテーションとダブルクォーテーションも変換対象に

    $to = "yukari_saitama@simaenaga.com";//送信先
    $subject = "【アジノヒラキ】問い合わせメール";//件名
    $from = "\r\n\r\n".$name;
    $address = "from:".$email;//送り主

    mb_language("Japanese");
    mb_internal_encoding("UTF-8");

    mb_send_mail($to,$subject,$content,$from,$address);
    
    //初期化
    $name = "";
    $email = "";
    $content = "";
}
?>

</body>
</html>