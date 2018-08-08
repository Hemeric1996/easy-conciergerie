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
        <div id="mainform">
          <h2>Simple jQuery Contact Form With Validation</h2>
          <!-- Required Div Starts Here -->
          <form id="form">
          <h3>Contact Form</h3>
          <p id="returnmessage"></p>
          <label>Name: <span>*</span></label>
          <input type="text" id="name" placeholder="Name"/>
          <label>Email: <span>*</span></label>
          <input type="text" id="email" placeholder="Email"/>
          <label>Contact No: <span>*</span></label>
          <input type="text" id="contact" placeholder="10 digit Mobile no."/>
          <label>Message:</label>
          <textarea id="message" placeholder="Message......."></textarea>
          <input type="button" id="submit" value="Send Message"/>
          </form>
          </div>
      </div>


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
    <script type="text/javascript">
    $(document).ready(function() {
$("#submit").click(function() {
var name = $("#name").val();
var email = $("#email").val();
var message = $("#message").val();
var contact = $("#contact").val();
console.log(name);
$("#returnmessage").empty(); // To empty previous error/success message.
// Checking for blank fields.
if (name == '' || email == '' || contact == '') {
alert("Please Fill Required Fields");
} else {
// Returns successful data submission message when the entered information is stored in database.
$.post("contact_form.php", {
name1: name,
email1: email,
message1: message,
contact1: contact
}, function(data) {
$("#returnmessage").append(data); // Append returned message to message paragraph.
if (data == "Your Query has been received, We will contact you soon.") {
$("#form")[0].reset(); // To reset form fields on success.
}
});
}
});
});
    </script>
  </body>
</html>
