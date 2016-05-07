<?PHP
//echo $_SERVER["HTTP_USER_AGENT"];
if(strpos($_SERVER["HTTP_USER_AGENT"],"curl")!==false){
echo $_SERVER["REMOTE_ADDR"];
}
?>
