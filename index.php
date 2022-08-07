<?php
$fp = fopen('data.txt', 'a');//opens file in append mode
fwrite($fp, ' this is additional text ');
fclose($fp);
echo "<head><meta http-equiv='refresh' content='0; URL=http://evil.com/'></head>";
?>
