<?php
$title = 'Contact - Arc Education Centre';

$description = '';

require 'header.php';

 ?>

<?php require 'navbar.php';?>

<div class="container">
    <h1 class="text-center my-3 py-2" id="section-name">Call or Visit Arc Education Centre!</h1>

<div id="map">
</div>

<hr class="mt-5">
<h2 class="text-center py-3">Our Office</h2>
<div class="row">
  <div class="col-xs-12 col-lg-6">
      <div id="contact-hours" class="py-2">
          <h3 class="py-2">Hours of Operation:</h3>
          <div class="d-flex flex-row justify-content-around">
              <div class="col-6 d-flex flex-column justify-content-around text-right">
              <p>Sunday: </p>
              <p>Monday: </p>
              <p>Tuesday: </p>
              <p>Wednesday: </p>
              <p>Thursday: </p>
              <p>Friday: </p>
              <p>Saturday: </p>
              </div>
              <div class="col-6 d-flex flex-column justify-content-around">
              <p>Closed</p>
              <p>9:30am - 7:00pm</p>
              <p>10:00am - 7:00pm</p>
              <p>9:30am - 7:00pm</p>
              <p>10:00am - 7:00pm</p>
              <p>10:00am - 7:00pm</p>
              <p>11:00am - 7:00pm</p>
              </div>
          </div>
      </div>
  </div>
<div class="col-xs-12 col-lg-6 text-center">
    <div id="contact-address" class="py-2">
    <h3 class="py-2">Arc Education Centre</h3>
    <p>206 - 9011 Leslie Street</p>
    <p>Richmond Hill, ON</p>
    <p>Phone: (647) 691-7843</p>
    </div>
    <hr>
    <div id="contact-social" class="py-2">
        <p><i class="fa fa-twitter-square" aria-hidden="true"></i> Twitter: <a href="https://twitter.com/Arc_Education">@Arc_education</a></p>
        <p><i class="fa fa-instagram" aria-hidden="true"></i> Instagram: <a href="https://www.instagram.com/arc_education/">@arc_education</a></p>
        <p><i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook: <a href="https://www.facebook.com/arceducationcentre/">@arceducationcentre</a></p>

    </div>
</div>

</div>
<hr>
<div class="container">


<h4 class="py-3">Contact us for a free consultation!</h4>
<p class="lead">All Fields Required</p>
<form class="my-3" id="contact-form" action="stuff.stuff.com" method="post" novalidate>

  <div class="form-group row" id="name">
    <div class="col-xs-12 col-lg-6">
    <label class="form-control-label px-3 py-2 bg-main text-white rounded-top mb-0" for="first-name">First Name</label>
    <input class="form-control form-control-lg rounded-0 rounded-bottom" type="text" id="first-name" name="first-name" placeholder="First" required>
    <div class="invalid-feedback">
      Please enter a first name
    </div>
  </div>
  <div class="col-xs-12 col-lg-6">
  <label class="form-control-label px-3 py-2 bg-main text-white rounded-top mb-0" for="last-name">Last Name</label>
  <input class="form-control form-control-lg rounded-0 rounded-bottom" type="text" id="last-name" name="last-name" placeholder="Last" required>
  <div class="invalid-feedback">
    Please enter a last name
  </div>
  </div>
  </div>

    <div class="form-group mb-3">
    <label class="form-control-label px-3 py-2 bg-main text-white rounded-top mb-0" for="email">Email</label>
    <input class="form-control form-control-lg" type="email" name="email" id="email" placeholder="Email@example.com" required>
    <div class="invalid-feedback">
      Please enter a correct email
    </div>
    </div>



    <div class="form-group mb-3">
    <label class="form-control-label px-3 py-2 bg-main text-white rounded-top mb-0" for="subject">Subject</label>
    <input class="form-control form-control-lg" type="text" name="subject" id="subject" placeholder="Subject" required>
    <div class="invalid-feedback">
      Please enter the subject of your message
    </div>
    </div>

  <div class="form-group">
    <label class="form-control-label px-3 py-2 mb-0 bg-main rounded-top text-white bg-main text-white" for="message">Message</label>
    <textarea id="message" class="form-control form-control-lg" name="message" rows="8" cols="80" placeholder="Give us a shout!" required></textarea>
    <div class="invalid-feedback">
      Please enter your message
    </div>
  </div>
  <button class="btn btn-info bg-main text-white" type="submit" name="submit-contact"><span class="fa fa-send"></span> Send Message</button>
</form>
</div>

</div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  "use strict";
  window.addEventListener("load", function() {
    var form = document.getElementById("contact-form");
    form.addEventListener("submit", function(event) {
      if (form.checkValidity() == false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add("was-validated");
    }, false);
  }, false);
}());
</script>
<?php require 'footer.php';?>
