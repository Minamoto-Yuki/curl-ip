<?PHP
header("Content-Type: text/plain");
if(strpos($_SERVER["HTTP_USER_AGENT"],"curl")!==false){
  echo $_SERVER["HTTP_X_FORWARDED_FOR"];
}else{
 echo "curl http://curl-ip.herokuapp.com/";
}
?>
