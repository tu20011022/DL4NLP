if(isset($_REQUEST['hub_challenge']))
{
  $challenge=$_REQUEST('hub_challenge');
  $token="test";
}

if($token=="test")
{

 echo $challenge; 

}
