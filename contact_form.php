<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact - Easy concierges</title>
    <link href="images/icon.png" type="image/x-icon" rel="shortcut icon" />
    <link rel="icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/morphext.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Francois+One|Questrial|Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

  </head>
  <body>
    <div id="pro">
      <div id="banier">
        <header class="back">
          <div class="container align-items-center">
            <nav class="navbar navbar-expand-lg navbar-light topNavBar">
              <a class="navbar-brand" href="index.html">
                <img src="images/logo.png" class="logo" alt="Logo" style="border-radius: 50%;">
              </a>
              <button style="background-color:#fff;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown" id="jeclique">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false">
                      Nos services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="apropos.html#easyp">Easy Particuliers</a>
                      <a class="dropdown-item" href="apropos.html#easye">Easy Entreprise</a>
                      <a class="dropdown-item" href="apropos.html#easyev">Easy Evènements</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="apropos.html">A propos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </header>
      </div>


      <div class="container ine">
        <h1 class="under_line mt-5 mb-5 text-center">Nous contacter</h1>
        <?php
// Fetching Values from URL.
$name = $_POST['name1'];
$email = $_POST['email1'];
$message = $_POST['message1'];
$contact = $_POST['contact1'];
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing E-mail.
// After sanitization Validation is performed
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
if (!preg_match("/^[0-9]{10}$/", $contact)) {
echo "<span>* Please Fill Valid Contact No. *</span>";
} else {
$subject = $name;
// To send HTML mail, the Content-type header must be set.
$headers = 'MIME-Version: 1.0' . "rn";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "rn";
$headers .= 'From:' . $email. "rn"; // Sender's Email
$headers .= 'Cc:' . $email. "rn"; // Carbon copy to Sender
$template = '<div style="padding:50px; color:white;">Hello ' . $name . ',<br/>'
. '<br/>Thank you...! For Contacting Us.<br/><br/>'
. 'Name:' . $name . '<br/>'
. 'Email:' . $email . '<br/>'
. 'Contact No:' . $contact . '<br/>'
. 'Message:' . $message . '<br/><br/>'
. 'This is a Contact Confirmation mail.'
. '<br/>'
. 'We Will contact You as soon as possible .</div>';
$sendmessage = "<div style="background-color:#7E7E7E; color:white;">" . $template . "</div>";
// Message lines should not exceed 70 characters (PHP rule), so wrap it.
$sendmessage = wordwrap($sendmessage, 70);
// Send mail by PHP Mail Function.
mail("hemeric.aissi@gmail.com", $subject, $sendmessage, $headers);
echo "Your Query has been received, We will contact you soon.";
}
} else {
echo "<span>* invalid email *</span>";
}
?>      </div>


    </div>


      <footer id="colophon" class="site-footer mt-5" role="contentinfo">
        <div class="site-info second">
          <div class="container">
            <div class="btt">
              <a class="back-top-top" data-easing="linear" href="#banier" title="Back To Top">
                <i class="fa fa-angle-double-up wow flash" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: flash;"></i>
              </a>
            </div>
            <div class="mt-2 mb-3">
              <a href="#" class="social">
                <i class="fab fa-2x fa-facebook-square"></i>
              </a>
              <a class="social" href="#">
                <i class="fab fa-2x fa-twitter-square"></i>
              </a>
              <a class="social" href="#">
                <i class="fab fa-2x fa-instagram"></i>
              </a>
              <a class="" href="https://api.whatsapp.com/send?phone=15551234567">
                <i class="fab fa-2x fa-whatsapp"></i>
              </a>
              <br>
              <a href="#" class="mt-5">
                <img src="images/googleplay.png" alt="" height="80" class="">
              </a>
            </div>
            Copyright © 2018
            <span class="sep"> – </span>
            <a href="#">Easy conciergerie</a>
          </div>
        </div>
      </footer>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- <script src="js/smooth-scroll.polyfills.js" charset="utf-8"></script> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/script.js" charset="utf-8"></script>

  </body>
</html>
