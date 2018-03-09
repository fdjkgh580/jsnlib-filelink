<?
session_start();
require_once '../vendor/autoload.php';

$Filelink = new Jsnlib\Filelink;

//驗證
$realfile = $Filelink->check($_GET['name'], $_GET['hash']);
if (empty($realfile)) die;

header("Content-Type: application/octec-stream");
header("Content-Disposition: attachment; filename=".$realfile);
readfile($realfile);
?>