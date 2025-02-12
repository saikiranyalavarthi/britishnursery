<?php require_once("app/views/components/header.php") ?>

 <!-- Hero Start -->
 <div class="container-fluid bg-primary mb-5" style="margin-top: 10%">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 250px"
      >
        <h3 class="display-3 font-weight-bold text-white">Contact Us</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">Contact Us</p>
        </div>
      </div>
    </div>
    <!-- Hero End -->

    <!-- Contact Start -->
    <div class="container-fluid">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Get In Touch</span>
          </p>
          <h1 class="mb-4">Contact Us For Any Query</h1>
        </div>
        <div class="row">
          <div class="col-lg-7 mb-5">
            <div class="contact-form">
              <div id="success"></div>
              <form name="sentMessage" id="contactForm" novalidate="novalidate">
                <div class="control-group">
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder="Your Name"
                    required="required"
                    data-validation-required-message="Please enter your name"
                  />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    placeholder="Your Email"
                    required="required"
                    data-validation-required-message="Please enter your email"
                  />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <input
                    type="tel"
                    class="form-control"
                    id="phone"
                    name="phone"
                    required="required"
                    placeholder="Your Phone Number"
                    data-validation-required-message="Please enter a phone number."
                  />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <input
                    type="hidden"
                    class="form-control"
                    id="form"
                    name="form"
                    required="required"
                    value="contact"
                    data-validation-required-message="500: Server Error."
                  />
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                  <textarea
                    class="form-control"
                    rows="6"
                    id="message"
                    placeholder="Message"
                    required="required"
                    data-validation-required-message="Please enter your message"
                  ></textarea>
                  <p class="help-block text-danger"></p>
                </div>
                <div>
                  <button
                    class="btn btn-primary py-2 px-4"
                    type="submit"
                    id="sendMessageButton"
                  >
                    Send Message
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-5 mb-5">
            <p>
            Thank you for your interest in British Islamic Nursery.
We value your feedback, inquiries, and suggestions. Please feel free to reach out to us using the contact information provided below.
            </p>
            <div class="d-flex">
              <i
                class="fa fa-map-marker-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Address</h5>
                <p><a href="https://maps.app.goo.gl/517FN8HxRGq4aBbF6" target="_blank">Villa No. 10, Street No. 66, Al Khalidiya, Sharjah, United Arab Emirates</a></p>

              </div>
            </div>
            <div class="d-flex">
              <i
                class="fa fa-envelope d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Email</h5>
                <p><a href="mailto:bin.admin@alarafah.org">bin.admin@alarafah.org</a></p>
              </div>
            </div>
            <div class="d-flex">
              <i
                class="fa fa-phone-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Phone</h5>
                <p><a href="tel:+971509881237">+971 50 988 1237</a></p>
              </div>
            </div>
            <div class="d-flex">
              <i
                class="far fa-clock d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
                style="width: 45px; height: 45px"
              ></i>
              <div class="pl-3">
                <h5>Opening Hours</h5>
                <strong>Monday - Friday</strong>
                <p class="m-0">08:00 AM - 05:00 PM</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->

<?php require_once("app/views/components/footer.php") ?>