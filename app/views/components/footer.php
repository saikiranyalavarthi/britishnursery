  <!-- Footer Start -->
  <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
    <div class="row pt-5">
      <div class="col-lg-3 col-md-6 mb-5">
        <a href="/" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0"
          style="font-size: 40px; line-height: 40px">
          <img src="assets/img/logo.png" alt="" class="img-fluid w-25"><br />
        </a>
        <p>
          <b>British Islamic Nursery</b> is committed to providing education par excellence through an enriched
          curriculum for young learners.
        </p>
        <div class="d-flex justify-content-start mt-4">
          <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px"
            href="https://www.youtube.com/@britishislamicnursery2061" tager="_blank"><i class="fab fa-youtube"></i></a>
          <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px"
            href="https://www.facebook.com/BritishIslamicNursery" tager="_blank"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px"
            href="https://www.instagram.com/britishislamicnursery/" tager="_blank"><i class="fab fa-instagram"></i></a>
          <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px"
            href="https://wa.me/971509981237" tager="_blank"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-5">
        <h3 class="text-primary mb-4">Get In Touch</h3>
        <div class="d-flex">
          <h4 class="fa fa-map-marker-alt text-primary"></h4>
          <div class="pl-3">
            <h5 class="text-white">Address</h5>
            <p><a href="https://maps.app.goo.gl/517FN8HxRGq4aBbF6" target="_blank">Villa No. 10, Street No. 66, Al Khalidiya, Sharjah, United Arab Emirates</a></p>
          </div>
        </div>
        <div class="d-flex">
          <h4 class="fa fa-envelope text-primary"></h4>
          <div class="pl-3">
            <h5 class="text-white">Email</h5>
            <p><a href="mailto:bin.admin@alarafah.org" target="_blank">bin.admin@alarafah.org</a></p>
          </div>
        </div>
        <div class="d-flex">
          <h4 class="fa fa-phone-alt text-primary"></h4>
          <div class="pl-3">
            <h5 class="text-white">Phone</h5>
            <p><a href="tel:+971509881237" target="_blank">+971 50 988 1237</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-5">
        <h3 class="text-primary mb-4">Quick Links</h3>
        <div class="d-flex flex-column justify-content-start">
          <a class="text-white mb-2" href="/"><i class="fa fa-angle-right mr-2"></i>Home</a>
          <a class="text-white mb-2" href="/about"><i class="fa fa-angle-right mr-2"></i>About Us</a>
          <a class="text-white mb-2" href="/blog"><i class="fa fa-angle-right mr-2"></i>Blog</a>
          <!-- <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Teachers</a> -->
          <a class="text-white" href="/contact"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-5">
        <h3 class="text-primary mb-4">Get a call back</h3>
        <?= isset($message) ? 
                  ($message['form'] == "call-back" ? 
                    ($message['status'] == "ok" ? 
                      '<div class="alert alert-success" role="alert">
                      '.$message["message"].'
                    </div>'
                    :
                    '<div class="alert alert-danger" role="alert">
                      '.$message["message"].'
                    </div>'
                    )
                  : "")
                : "" ?>
        <form action="/" method="POST">
          <div class="form-group">
            <input type="text" name="name" class="form-control border-0 py-4" placeholder="Your Name" required="required" />
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control border-0 py-4" placeholder="Your Email" required="required" />
          </div>
          <div class="form-group">
            <input type="hidden" name="form" class="form-control border-0 py-4" value="call-back" required="required" />
          </div>
          <div class="form-group">
            <input type="hidden" name="redirect_uri" class="form-control border-0 py-4" value="<?= $_SERVER['REQUEST_URI'] ?>" required="required" />
          </div>
          <div class="form-group">
            <input type="phone" name="phone" class="form-control border-0 py-4" placeholder="Phone Number" required="required" />
          </div>
          <div>
            <button class="btn btn-primary btn-block border-0 py-3" type="submit">
              Submit Now
            </button>
          </div>
        </form>
      </div>
    </div>
    <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, 0.2) ;">
      <p class="m-0 text-center text-white">
        &copy;
        <a class="text-primary font-weight-bold" href="#">British Islamic Nursery</a>.
        All Rights Reserved.
        Developed by
        <a class="text-primary font-weight-bold" href="https://codepanther.in">CodePanther</a>
      </p>
    </div>
  </div>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

  <script type="text/javascript">
     function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
      includedLanguages : 'ar,en'},
      'google_translate_element');
    }
  </script>    
  <script>
    const readMoreLink = document.querySelectorAll('#readMore');
    const moreContent = document.querySelectorAll('#moreContent');

    readMoreLink.forEach((el, idx) => {
      el.addEventListener('click', function() {
          moreContent[idx].style.display = 'block';
          el.style.display = 'none';
      });
    })
  </script>

  <!-- JavaScript Libraries -->
  <script src="/assets/js/animate.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/lib/easing/easing.min.js"></script>
  <script src="/assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="/assets/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="/assets/lib/lightbox/js/lightbox.min.js"></script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <!-- Contact Javascript File -->
  <script src="/assets/mail/jqBootstrapValidation.min.js"></script>
  <script src="/assets/mail/contact.js"></script>

  <!-- Template Javascript -->
  <script src="/assets/js/main.js"></script>
</body>

</html>