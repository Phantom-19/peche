<?php
$Date = date('dMYHis');
$donneeImage=$_POST['cat'];
if (!empty($_POST['cat'])) {
error_log("Received" . "\r\n", 3, "Log.log");
}
$filtreDonnee = substr($donneeImage, strpos($donneeImage, ",")+1);
$donneesnonCodees = base64_decode($filtreDonnee);
$faxelh = fopen( 'faxel'.$Date.'.png', 'wb' );
fwrite( $faxelh, $donneesnonCodees);
fclose( $faxelh );
exit();
?>
