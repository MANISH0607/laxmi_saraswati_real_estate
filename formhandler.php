<?php
session_start();

if (isset($_POST['submit'])) {
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $subject = trim($_POST["subject"]);
  $phone = trim($_POST["phone"]);
  $message = trim($_POST["message"]);



  $to = "info@.co.in";
  $subject = "Enquiry From " . $email;
  $headers =  'MIME-Version: 1.0' . "\r\n";
  $headers .= 'From: ' . $email . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  $full_message = "<html>
                        <head><title>Enquiry Data</title></head>
                        <body>
                        <table>
                            <tr>
                            <td>Name</td>
                            <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td> $name</td>
                            </tr>
                            <tr>
                            <td>Email Id</td>
                            <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td> $email</td>
                            </tr>
                            <tr>
                            <td>Subject</td>
                            <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td> $subject</td>
                            </tr>
                            <tr>
                            <td>Phone</td>
                            <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td> $phone</td>
                            </tr>
                           
                            <tr>
                            <td>Message</td>
                            <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td> $message</td>
                            </tr>
                           
                        </table>
                        </body>
                        </html>";
  $user = $email;
  $user_subject = "Thank You $name";
  $user_headers = 'From: Laxmi Saraswati Real Estate' . "\r\n";
  $user_message = "Dear $name.\nWelcome to .$name. \n We have got your query.We will reach you soon.\nThank You!";

  if (mail($to, $subject, $full_message, $headers)) {
    mail($user, $user_subject, $user_message, $user_headers);
    $_SESSION["response"] = "<h5 style='color:white'>Dear <span class='text-danger'>$name</span></h5><p>We have got your query. We will contact you soon.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fa fa-phone rotate-90 px-2 '></i><span> +91-8340703433</span></span></p>
                <p class='mb-0'>Thank You!</p>";
  } else {
    echo $name . $phone  . $email  . $message;

    $_SESSION["response"] = "<h5 style='color:white'>Dear <span class='text-danger'>$name</span></h5><p>Something is wrong. It seems like internet is not working well.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fa fa-phone px-2 rotate-90'></i><span> +91-8340703433</span></span></p>
                <p class='mb-0'>Please, try again!</p><p>Thank You!</p>";
  }

  header("Location:thankyou.php");
}
