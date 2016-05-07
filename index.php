<?PHP
header("Content-Type: text/plain");
//echo $_SERVER["HTTP_USER_AGENT"];
if(strpos($_SERVER["HTTP_USER_AGENT"],"curl")!==false){
echo $_SERVER["HTTP_X_FORWARDED_FOR"];
}
?>
