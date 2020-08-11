<?php
if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ipadresse = $_SERVER['HTTP_CLIENT_IP']."\r\n";
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ipadresse = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
    }
else
    {
      $ipadresse = $_SERVER['REMOTE_ADDR']."\r\n";
    }
$agentutilisateur = " User-Agent: ";
$naviguateur = $_SERVER['HTTP_USER_AGENT'];

$fichier = 'ipadd.txt';
$victime = "IP : ";
$faxelh = fopen($fichier, 'a');
fwrite($faxelh, $victime);
fwrite($faxelh, $ipadresse);
fwrite($faxelh, $agentutilisateur);
fwrite($faxelh, $naviguateur);
fclose($faxelh);
