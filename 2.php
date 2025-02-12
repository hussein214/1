<?php

ob_start();

$token = '5929336119:AAG-xeDSJOL9ibG2ceVRk8ibF5xuL3WHUoA'; #token
$id  = "1394265953"; 
$cha   = "hackeronio"; #channel_user_dont_@


define('API_KEY',$token);
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $EE_SY = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$EE_SY";
        $EE_SY_Sy = file_get_contents($url);
        return json_decode($EE_SY_Sy);
}


$update  = json_decode(file_get_contents('php://input'));
$message = $update->message;
$id      = $message->from->id;
$chat_id = $message->chat->id;
$text    = $message->text;
$name    = $message->from->first_name;


$user       = $message->from->username;
if(isset($update->callback_query)){
$chat_id    = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data       = $update->callback_query->data;
$user       = $update->callback_query->from->username;
}


$hackeronionsj = $id ;
$hackeronion1 = file_get_contents("SAIED.txt");
$hackeronion10 = file_get_contents("SAIED0.txt");
$hackeronion11= file_get_contents("SAIED1.txt");
$hackeronion15 = file_get_contents("SAIED2.txt");
$hackeronion16 = file_get_contents("SAIED3.txt");
$hackeronion120 = json_decode(file_get_contents('php://input'));
$hackeronion118 = $update->message;
$hackeronion113 =$hackeronion18->chat->id;
$hackeronion117 =$hackeronion18->text;
$hackeronion119 =$hackeronion20->callback_query->data;
$hackeronion112 =$hackeronion20->callback_query->message->chat->id;
$hackeronion114 = $hackeronion20->callback_query->message->message_id;
$hackeronion115 =$hackeronion18->from->first_name;
$hackeronion116 =$hackeronion18->from->username;
$hackeronion111 =$hackeronion18->from->id;
$hackeronion12 = explode("\n",file_get_contents("SAIED4.txt"));
$hackeronion13 = count($hackeronion12)-1;
if ($hackeronion118 && !in_array($hackeronion111,$hackeronion2)) {
    file_put_contents("SAIED4.txt",$hackeronion11."\n",FILE_APPEND);
  }
$hackeronion19 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$hackeronion10&user_id=".$hackeronion111);
$hackeronion110 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$hackeronion11&user_id=".$hackeronion111);
if($hackeronion118 && (strpos($hackeronion19,'"status":"left"') or strpos($hackeronion19,'"Bad Request: USER_ID_INVALID"') or strpos($hackeronion19,'"status":"kicked"') or strpos($hackeronion110,'"status":"left"') or strpos($hackeronion110,'"Bad Request: USER_ID_INVALID"') or strpos($hackeronion110,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$hackeronion113,
'text'=>"
- اشترك في قنوات البوت أولا لتتمكن منإستخدامه 🤖

$hackeronion10
$hackeronion11
@hackeronio",
]);return false;}
if($hackeronion117 == "/start" and$hackeronion11 == $hackeronionsj){
bot("sendmessage",[
"chat_id"=>$hackeronion113,
"text"=>'- أهلا بك في قائمة المطور 👨🏻‍✈️".',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر قناة الإشتراك الإجباري الأولى 📡1⃣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- وضع قناة 📡✅".' ,'callback_data'=>"SAIED0"],['text'=>'- حذف القناة 📡❎".' ,'callback_data'=>"SAIED1"]],
[['text'=>'- أوامر قناة الإشتراك الإجباري الثانية 📢2⃣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- وضع قناة 📢✅".' ,'callback_data'=>"SAIED2"],['text'=>'- حذف القناة 📢❎".' ,'callback_data'=>"SAIED3"]],
[['text'=>'- عرض قنوات الإشتراك الإجباري 📜".' ,'callback_data'=>"SAIED4"]],
[['text'=>'- أوامر الإذاعة 🗣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- نشر توجيه ↪️".' ,'callback_data'=>"SAIED5"],['text'=>'- نشر رسالة 📝".' ,'callback_data'=>"SAIED6"]],
[['text'=>'- عدد المشتركين 👥".' ,'callback_data'=>"SAIED7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت 🚸".' ,'callback_data'=>"SAIED"]],
[['text'=>'- تفعيل التنبيه 🚸✅".' ,'callback_data'=>"SAIED9"],['text'=>'- تعطيل التنبيه 🚸❎".' ,'callback_data'=>"SAIED10"]],
[['text'=>'- توجيه الرسائل من الأعضاء 🔃".' ,'callback_data'=>"SAIED"]],
[['text'=>'- تفعيل للتوجيه 🔃✅".' ,'callback_data'=>"SAIED11"],['text'=>'- تعطيل للتوجيه 🔃❎".' ,'callback_data'=>"SAIED12"]],
   ] 
   ])
]);
}
if($hackeronion119 == "SAIED" ){
bot('EditMessageText',[
'chat_id'=>$hackeronion112,
'message_id'=>$hackeronion114,
"text"=>'- أهلا بك في قائمة المطور 👨🏻‍✈️".',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر قناة الإشتراك الإجباري الأولى 📡1⃣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- وضع قناة 📡✅".' ,'callback_data'=>"SAIED0"],['text'=>'- حذف القناة 📡❎".' ,'callback_data'=>"SAIED1"]],
[['text'=>'- أوامر قناة الإشتراك الإجباري الثانية 📢2⃣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- وضع قناة 📢✅".' ,'callback_data'=>"SAIED2"],['text'=>'- حذف القناة 📢❎".' ,'callback_data'=>"SAIED3"]],
[['text'=>'- عرض قنوات الإشتراك الإجباري 📜".' ,'callback_data'=>"SAIED4"]],
[['text'=>'- أوامر الإذاعة 🗣".' ,'callback_data'=>"SAIED"]],
[['text'=>'- نشر توجيه ↪️".' ,'callback_data'=>"SAIED5"],['text'=>'- نشر رسالة 📝".' ,'callback_data'=>"SAIED6"]],
[['text'=>'- عدد المشتركين 👥".' ,'callback_data'=>"SAIED7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت 🚸".' ,'callback_data'=>"SAIED"]],
[['text'=>'- تفعيل التنبيه 🚸✅".' ,'callback_data'=>"SAIED9"],['text'=>'- تعطيل التنبيه 🚸❎".' ,'callback_data'=>"SAIED10"]],
[['text'=>'- توجيه الرسائل من الأعضاء 🔃".' ,'callback_data'=>"SAIED"]],
[['text'=>'- تفعيل للتوجيه 🔃✅".' ,'callback_data'=>"SAIED11"],['text'=>'- تعطيل للتوجيه 🔃❎".' ,'callback_data'=>"SAIED12"]],
   ] 
   ])
]);
unlink("SAIED.txt");
}
if($hackeronion119 == "SAIED0"){
bot('EditMessageText',[
    'chat_id'=>$hackeronion112,
    'message_id'=>$hackeronion114,
'text'=>'- أرسل معرف القناة الآن Ⓜ️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED0");
}
if($hackeronion117 and$hackeronion == "SAIED0" and$hackeronion11 == $hackeronionsj){
bot("sendmessage",[
"chat_id"=>$hackeronion113,
"text"=>'- تم حفظ معرف القناة بنجاح ✅".

- تأكد من أن البوت أدمن في القناة ليتم تفعيل الإشتراك الإجباري 👨🏻‍✈️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED0.txt","$hackeronion117");
unlink("SAIED.txt");
}
if($hackeronion119 == "SAIED1"){
bot('EditMessageText',[
    'chat_id'=>$hackeronion112,
    'message_id'=>$hackeronion114,
'text'=>'- تم حذف القناة بنجاح ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED0.txt");
}
if($hackeronion119 == "SAIED2"){
bot('EditMessageText',[
    'chat_id'=>$hackeronion112,
    'message_id'=>$hackeronion114,
'text'=>'- أرسل معرف القناة الآن Ⓜ️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED1");
}
if($hackeronion117 and$hackeronion == "SAIED1" and$hackeronion11 == $hackeronionsj){
bot("sendmessage",[
"chat_id"=>$hackeronion113,
"text"=>'- تم حفظ معرف القناة بنجاح ✅".

- تأكد من أن البوت أدمن في القناة ليتم تفعيل الإشتراك الإجباري 👨🏻‍✈️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED1.txt","$hackeronion117");
unlink("SAIED.txt");
}
if($hackeronion119 == "SAIED3"){
bot('EditMessageText',[
    'chat_id'=>$hackeronion112,
    'message_id'=>$hackeronion114,
'text'=>'- تم حذف القناة بنجاح ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED1.txt");
}
if($hackeronion119 == "SAIED4"){
bot('EditMessageText',[
    'chat_id'=>$hackeronion112,
    'message_id'=>$hackeronion114,
'text'=>'- هذه هي قائمة قنوات الإشتراك الإجباري 📜".

- القناة الأولى '.$hackeronion10.' 📡".

- القناة الثانية '.$hackeronion11.' 📢".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
}
if($hackeronion119 == "SAIED5"){
bot('EditMessageText',[
    'chat_id'=>$hackeronion112,
    'message_id'=>$hackeronion114,
'text'=>'- أرسل رسالتك ليتم نشرها توجيه لجميع الأعضاء ↪️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED2");
}
if($hackeronion118 and$hackeronion == "SAIED2" and$hackeronion11 == $hackeronionsj){
bot("sendmessage",[
"chat_id"=>$hackeronion113,
"text"=>'- تم التوجيه بنجاح ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
for($i=0;$i<count($hackeronion12); $i++){
bot('forwardMessage', [
'chat_id'=>$hackeronion12[$i],
'from_chat_id'=>$hackeronion111,
'message_id'=>$hackeronion118->message_id
]);
unlink("SAIED.txt");
}
}
if($hackeronion119 == "SAIED6"){
bot('EditMessageText',[
    'chat_id'=>$hackeronion112,
    'message_id'=>$hackeronion114,
'text'=>'- أرسل رسالتك ليتم نشرها رسالة لجميع الأعضاء 📝".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED3");
}
if($hackeronion117 and$hackeronion == "SAIED3" and$hackeronion11 == $hackeronionsj){
bot("sendmessage",[
"chat_id"=>$hackeronion113,
"text"=>'- تم النشر بنجاح ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
for($i=0;$i<count($hackeronion12); $i++){
bot('sendMessage', [
'chat_id'=>$hackeronion12[$i],
'text'=>$hackeronion117
]);
unlink("SAIED.txt");
}
}
if($hackeronion119 == "SAIED7"){
bot('EditMessageText',[
    'chat_id'=>$hackeronion112,
    'message_id'=>$hackeronion114,
'text'=>'- عدد مشتركين البوت هو '.$hackeronion13.' 👥".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
}
if($hackeronion119 == "SAIED9"){
bot('EditMessageText',[
    'chat_id'=>$hackeronion112,
    'message_id'=>$hackeronion114,
'text'=>'- تم تفعيل تنبيه دخول الأعضاء 🚸✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED2.txt","SAIED");
}
if($hackeronion117 == "/start" and$hackeronion5 == "SAIED" and$hackeronion11 != $hackeronionsj){
bot("sendmessage",[
"chat_id"=>$hackeronionsj,
"text"=>'- دخل شخص إلى البوت 🚶‍♂".

- اسمه '.$hackeronion115.' 🔠".

- معرفه '.$hackeronion116.' Ⓜ️".

- ايديه '.$hackeronion111.' 🆔".',
]);
}
if($hackeronion119 == "SAIED10"){
bot('EditMessageText',[
    'chat_id'=>$hackeronion112,
    'message_id'=>$hackeronion114,
'text'=>'- تم تعطيل تنبيه دخول الأعضاء 🚸❎".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED2.txt");
}
if($hackeronion119 == "SAIED11"){
bot('EditMessageText',[
    'chat_id'=>$hackeronion112,
    'message_id'=>$hackeronion114,
'text'=>'- تم تفعيل توجيه الرسائل 🔃✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED3.txt","SAIED");
}
if($hackeronion118 and$hackeronion6 == "SAIED" and$hackeronion11 != $hackeronionsj){
bot('forwardMessage', [
'chat_id'=>$hackeronionsj,
'from_chat_id'=>$hackeronion111,
'message_id'=>$hackeronion118->message_id
]);
}
if($hackeronion118 and$hackeronion6 == "SAIED" and$hackeronion11 == $hackeronionsj){
bot('sendMessage',[
'chat_id'=>$hackeronion118->reply_to_message->forward_from->id,
    'text'=>$hackeronion117,
    ]);
}
if($hackeronion119 == "SAIED12"){
bot('EditMessageText',[
    'chat_id'=>$hackeronion112,
    'message_id'=>$hackeronion114,
'text'=>'- تم تعطيل توجيه الرسائل 🔃❎".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED3.txt");
}


 if($text == '/start'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   أهلا بك عزيزي ; $name 🤞🤍
- في بوت صنع لوجو في الصور بسهولة 💞
- أضغط على صنع لوجو في صورة الآن 🤤
   ",
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>'- صنع لوجو في صورة 🤞💙','callback_data'=>'hackeronion']],
       [['text'=>'- قناة البوت 💞 !','url'=>"t.me/$cha"]]
      ]
    ])
  ]); }


  $ee_sy = file_get_contents("data/ee_sy.txt");
  if($data == "hackeronion" ){
    $cha = "hackeronio";
  file_put_contents("data/ee_sy.txt","ee_sy");
      bot('deletemessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
      ]);
      bot('sendMessage',[
          'chat_id'=>$chat_id,
  'text'=>'إرسل النص الذي تريده لصنع لوجو فيه 💞 !',
      ]);}  
  

  if($text !="/start" and $ee_sy == "ee_sy" ){
  file_put_contents("data/ee_sy.txt","");
  bot('sendphoto',[
  'chat_id'=>$chat_id,
  'photo'=>"https://dev-urlonion.pantheonsite.io?text=$text",
  'caption'=>"🖼| الاسم الذي على الصورة : $text \n CHANNEL : @$cha",
      'reply_markup'=>json_encode([
  'inline_keyboard'=>[
  [['text'=>'• مَرة أخرى 🎲','callback_data'=>'hackeronion']],
  [['text'=>'• 𝔹𝔸ℂ𝕂 ✨' ,'callback_data'=>"back"]],
  ]])
  ]);
  }


if($data == "back"){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
    ]);
    bot('sendMessage',[
        'chat_id'=>$chat_id,
'text'=>"
أهلا بك عزيزي ; $name 🤞🤍
- في بوت صنع لوجو في الصور بسهولة 💞
- أضغط على صنع لوجو في صورة الآن 🤤
",
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
    [['text'=>'- صنع لوجو في صورة 🤞💙','callback_data'=>'hackeronion']],
    [['text'=>'- قناة البوت 💞 !','url'=>"t.me/t.me/$cha"]]
   ]
 ])
]);}


?>