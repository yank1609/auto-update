<?php 
$date = strftime('%c');
file_put_contents('log.txt', PHP_EOL.trim($date).PHP_EOL, FILE_APPEND);
try
{
  $payload = json_decode(stripslashes($_REQUEST['payload']));
}
catch(Exception $e)
{
  exit(0);
}

//LOG THE POST REQUEST
file_put_contents('log.txt', print_r($payload, TRUE), FILE_APPEND);

//EXECUTE A SCRIPT WHEN THE POST REQUEST IS INITIALIZED
//if ($payload->ref === 'refs/heads/master')
//{
//  exec('deploy.sh >> log.txt');
//}

?>
