<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['sub']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $number=$_POST['Number'];
  $text=$_POST['text'];
  $sql = "INSERT INTO `login`(`NAME`, `EMAIL`, `NUMBER`, `TEXT`) VALUES ('$name','$email','$number','$text' )";

  if (mysqli_query($conn, $sql)) {
    echo "your information submit successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

}


// mysqli_close($conn);


// if( !empty($_GET["sub"]) ){
// $username =$_GET[ "name"];
// $useremail =$_GET[ "email"];
// $userNumber =$_GET[ "Number"];
// $usermessage =$_GET[ "message"];
// $toEmail =$_GET[ "takr7127@gmail.com"];

// //  $mailheaders = "name: ". $username .
//  "\r\n email:" . $useremail .
//  "\r\n Number:" . $userNumber .
//  "\r\n message:" . $usermessage . "\r\n";

// if (mail($toEmail,$username,$mailheaders )){
// $message ="your informaiton is received successfully.";

// }


// }
if( isset($_GET['sub']))
  {
  $name=$_GET['name'];
  $email=$_GET['email'];
  $number=$_GET['Number'];
  $message=$_GET['message'];
  $FromName="rakesh saini";
  $FromEmail="takr7127@gmail.com";
 $ReplyTo=$email;
 $toemail="takr7127@gmail.com";
 $subject="Rakesh saini contact form";
 $message='Name:-'.$name.'<br>Email:-' .$email. '<br> Phone No:-'.$number. '<br>Message:-'.$message;
$headers = "MIME-Version:1.0\n";
      $headers .= "Contant-type: text/html; charset=iso-8859-1\n";
      $headers .= "From: ".$FromName." <".$FromEmail.">\n";
      $headers .= "Reply-to: ".$ReplyTo."\n";
      $headers .= "X-Sender:<".$Fromemail.">\n";
      $headers .= "X-Mailer: PHP\n";
      $headers .= "X-Priority: 1\n";
      $headers .= "Return-path: <".$FromEmail.">\n";
    if( mail($toemail, $subject, $message, $headers,$FromEmail)){
        $hide=1;
      
      echo '<div class="success"><center><span style="font-size:100px;">&#9989;</span></center>
       <br> Thank you <strong>'.$name.',</strong> Your message has been sent successfuly.We will reply 
       soon as possible. </div>';


    } else {
      echo "The server failed to send the message. please try again later or Make sure , you are
      using live server for email.";
    }



  }


if(!isset($hide))

?>