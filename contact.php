<!DOCTYPE html>
<html lang="zxx">
<?php
session_start();

?>
<?php require_once("./header.php");?>
<!-- header end -->

    <!-- Map Begin -->
    <div class="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.158992992582!2d106.80486727360217!3d-6.242766793745539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f16672fb86b1%3A0xb24320e63e93e038!2sSMK%20Negeri%206%20Jakarta!5e0!3m2!1sid!2sid!4v1697793890099!5m2!1sid!2sid"
        width="600"
        height="450"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </div>
    <!-- Map End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="contact__text">
              <div class="section-title">
                <span>Information</span>
                <h2>Contact Us</h2>
                <p>
                  As you might expect of a company that began as a high-end
                  interiors contractor, we pay strict attention.
                </p>
              </div>
              <ul>
                <li>
                  <h4>Indonesia</h4>
                  <p>
                    SMKN 6 Jakarta Jl. Prof. Joko Sutono SH No.1, RT.1/RW.2,
                    Melawai, Kebayoran Baru, South Jakarta City, Jakarta 12160
                    <br />+123 456-789
                  </p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="contact__form">
              <form action="#">
                <div class="row">
                  <div class="col-lg-6">
                    <input type="text" placeholder="Name" />
                  </div>
                  <div class="col-lg-6">
                    <input type="text" placeholder="Email" />
                  </div>
                  <div class="col-lg-12">
                    <textarea placeholder="Message"></textarea>
                    <button type="submit" class="site-btn">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Section End -->
<?php require_once("footer.php");?>
  </body>
</html>
