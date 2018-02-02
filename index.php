<?

require('vendor/autoload.php');

php header( 'Location: /index.html' ) ;

$name = test_input($_POST["contact-name"]);
$email = test_input($_POST["contact-email"]);
$message = test_input($_POST["contact-message"]);


if(isset($_POST['submit'])){
    $to = "alemv18@gmail.com";
    $from = $_POST['contact-email'];
    $name = $_POST['contact-name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $contact_name . " " . " wrote the following:" . "\n\n" . $_POST['contact-message'];
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
}

 ?>