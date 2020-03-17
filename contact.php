<?php
  $current = "contact";
  $title="Contact Us :: Manatharam";
  require 'templates/header.php';
 ?>
      <main class="container-fluid pt-0 bg-white single-page contactUs">
        <div class="row page-title">
          <div class="container">
            <div class="row py-5">
              <h1 class="col-12 text-center">CONTACT US</h1>
            </div>
          </div>
        </div>
        <div class="row py-5">
          <div class="col-12 col-md-8 px-5">
            <form class="container" action="uploader.php" method="post">
              <div class="row">
                <div class="col-4">
                  <input class="" type="text" name="name" value="" placeholder="Name*" required>
                </div>
                <div class="col-4">
                  <input class="" type="text" name="email" value="" placeholder="Email*" required>
                </div>
                <div class="col-4">
                  <input class="" type="text" name="subject" value="" placeholder="Subject" required>
                </div>
              </div>
              <div class="row">
                <div class="col-12 my-3">
                  <textarea name="message" placeholder="Your Message"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-12 my-3 text-center">
                  <button class="btn" type="submit" name="ContactUs">Send Message</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-12 col-md-4 office">
            <h2>Main Office</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12 py-5 px-2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3819.712354586074!2d80.8208157!3d16.7909806!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3675e53fa3b4fb%3A0xfd1e193c90e4643!2sRajiv%20Gandhi%20University%20of%20Knowledge%20and%20Technology%20%2C%20Nuzvid!5e0!3m2!1sen!2sin!4v1582996129985!5m2!1sen!2sin" width="100%" height="500px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>
      </main>


<?php

  require 'templates/footer.php';

 ?>
