<?php
set_time_limit(0);
    function post_data($site,$data,$ref,$ajax){
$datapost = curl_init();
if($ajax == true){
$headers = array("X-Requested-With: XMLHttpRequest");
}else{
$headers = array('Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8',
'Accept-Language: vi-VN,vi;q=0.9',
'Content-Type: application/x-www-form-urlencoded
');
}
curl_setopt($datapost, CURLOPT_URL, $site);
curl_setopt($datapost, CURLOPT_TIMEOUT, 40000);
curl_setopt($datapost, CURLOPT_HEADER, TRUE);
curl_setopt($datapost, CURLOPT_HTTPHEADER, $headers);
curl_setopt($datapost, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36');
curl_setopt($datapost, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($datapost, CURLOPT_SSL_VERIFYPEER, TRUE);
curl_setopt($datapost, CURLOPT_REFERER, $ref);
curl_setopt($datapost, CURLOPT_COOKIEJAR, __DIR__ .'/cookie.txt');
curl_setopt($datapost, CURLOPT_COOKIEFILE, __DIR__ .'/cookie.txt');
if($data){
curl_setopt($datapost, CURLOPT_POST, TRUE);
curl_setopt($datapost, CURLOPT_POSTFIELDS, $data);
}
curl_setopt($datapost, CURLOPT_RETURNTRANSFER, true);
return curl_exec ($datapost);
  }
   
  $token = 'EAAAAAYsX7TsBAExWDDCBtDpUaBaPNiujL1ZCiyVsLbj5BQdGTLaKcBUabV7ZCZASSeWStd9EkFu5ZAKMrXTh5p3PUDuHYTPDpyWdpCuqHJdZCR17oSEROAIlmYny4kNn4evlRztZBfqgLqXekWUpj6DfYHmvdcvwZCoLP93GhCQl1cqfgTZBGuVXlIhGZA2tsGLkUqOHDsGjLzLmeNbeF7TU7'; // thay token vào Đây
  $id = '2226476754294768'; // id Fanpage  bỏ vô đây
 
  post_data('http://www.kpliker.net/ajax/auth/session.json','session_token={"session_key":"5.pR-D0MlGFzvAkQ.1527037523.40-100025500258804","uid":100025500258804,"secret":"dfa634d19fa69eee6c828723b5eab935","access_token":"'.$token.'","machine_id":"U74EWzd1zuyuw4FKKYcKIfP3","session_cookies":[{"name":"c_user","value":"100025500258804","expires":"Thu, 23 May 2019 01:05:23 GMT","expires_timestamp":1558573523,"domain":".facebook.com","path":"\/","secure":true},{"name":"xs","value":"40:pR-D0MlGFzvAkQ:2:1527037523:-1:-1","expires":"Thu, 23 May 2019 01:05:23 GMT","expires_timestamp":1558573523,"domain":".facebook.com","path":"\/","secure":true,"httponly":true},{"name":"fr","value":"0WgSDqZbu0Qjx7gEv.AWUT7LAuqZOuh4jLAf9JiK1dXug.Ba9ERE.Gk.AAA.0.0.BbBL5T.AWXDtB47","expires":"Thu, 23 May 2019 01:05:23 GMT","expires_timestamp":1558573523,"domain":".facebook.com","path":"\/","secure":true,"httponly":true},{"name":"datr","value":"U74EWzd1zuyuw4FKKYcKIfP3","expires":"Fri, 22 May 2020 01:05:23 GMT","expires_timestamp":1590109523,"domain":".facebook.com","path":"\/","secure":true,"httponly":true}],"confirmed":true,"identifier":"fch34705\u0040miauj.com","user_storage_key":"85f0ad1d40407fc297000d15b22519da79bd0992771683ee5e2554aa6d899f74"}','http://www.kpliker.net/',true);
  post_data('http://www.kpliker.net/ajax/send_likes/','post_id='.$id.'&limit=200','http://www.kpliker.net/',true);
   
   
  post_data('http://botboss.top/login.php','access_token='.$token,'http://botboss.top/',false);
  post_data('http://auto.botboss.top/m-likes.php?postid='.$id.'&accesstoken='.$token,'','http://botboss.top/',false);
   
   
  post_data('https://www.allautoliker.com/auth/facebook/login','access_token={"session_key":"5.pR-D0MlGFzvAkQ.1527037523.40-100025500258804","uid":100025500258804,"secret":"dfa634d19fa69eee6c828723b5eab935","access_token":"'.$token.'","machine_id":"U74EWzd1zuyuw4FKKYcKIfP3","session_cookies":[{"name":"c_user","value":"100025500258804","expires":"Thu, 23 May 2019 01:05:23 GMT","expires_timestamp":1558573523,"domain":".facebook.com","path":"\/","secure":true},{"name":"xs","value":"40:pR-D0MlGFzvAkQ:2:1527037523:-1:-1","expires":"Thu, 23 May 2019 01:05:23 GMT","expires_timestamp":1558573523,"domain":".facebook.com","path":"\/","secure":true,"httponly":true},{"name":"fr","value":"0WgSDqZbu0Qjx7gEv.AWUT7LAuqZOuh4jLAf9JiK1dXug.Ba9ERE.Gk.AAA.0.0.BbBL5T.AWXDtB47","expires":"Thu, 23 May 2019 01:05:23 GMT","expires_timestamp":1558573523,"domain":".facebook.com","path":"\/","secure":true,"httponly":true},{"name":"datr","value":"U74EWzd1zuyuw4FKKYcKIfP3","expires":"Fri, 22 May 2020 01:05:23 GMT","expires_timestamp":1590109523,"domain":".facebook.com","path":"\/","secure":true,"httponly":true}],"confirmed":true,"identifier":"fch34705\u0040miauj.com","user_storage_key":"85f0ad1d40407fc297000d15b22519da79bd0992771683ee5e2554aa6d899f74"}','https://www.allautoliker.com/',true);
  post_data('https://www.allautoliker.com/fb_panel/data/send_pagelikes.php','post_id='.$id.'&quantity=50&country=ANY','https://www.allautoliker.com/fb_panel/data/send_pagelikes.php',true);
   
   
  post_data('http://mg-likers.com/login_new.php?token='.$token,'','http://mg-likers.com/',false);
  post_data('http://mg-likers.com/like.php?type=feed','submit=Submit&id='.$id,'http://mg-likers.com/like.php?type=feed',false);
   
  $vuong = post_data('https://fanpage.vipfb.co/index.php','','',false);
  preg_match_all('/ff8b14;" name="(.*?)"/', $vuong, $vg);
      $name =  $vg[1][0];
  post_data('https://fanpage.vipfb.co/x_login.php',$name.'='.$token.'&submit=vương','https://fanpage.vipfb.co/x_login.php',false);
  $vuong = post_data('https://fanpage.vipfb.co/fanpage.php?type=myPageCustom','','',false);
  preg_match_all('/3b5998;" name="(.*?)"/', $vuong, $vg);
  $name =  $vg[1][0];
  post_data('https://fanpage.vipfb.co/fanpage.php?type=myPageCustom',$name.'='.$id.'&limit=25&submit=vương','https://fanpage.vipfb.co/fanpage.php?type=myPageCustom',false);
   
unlink('cookie.txt');
?>
