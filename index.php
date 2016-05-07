<?PHP
if(strpos($_SERVER["HTTP_USER_AGENT"],"Curl")!==false){
echo $_SERVER["REMOTE_ADDR"];
}
?>
