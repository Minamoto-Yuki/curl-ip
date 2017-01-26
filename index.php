<?PHP
header("Content-Type: text/plain");
if(strpos($_SERVER["HTTP_USER_AGENT"],"curl")!==false){
  echo "-------------------------------------\n";
  echo "--> Your IP is ";
  echo $_SERVER["HTTP_X_FORWARDED_FOR"];
  echo " ##\n";
  echo "--> powerted by https://curl-ip.herokuapp.com/ :) <--";
  echo "-------------------------------------";
}else{
 echo "curl https://curl-ip.herokuapp.com/";
}
?>
