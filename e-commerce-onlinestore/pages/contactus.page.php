<?php
include '../component/navbar.php'
?>

<!-- Hero section start -->
<section id="page-header" class="about-header">
    <h2>#let'stalk</h2>
    <p>LEAVE A MESSAGE, We'd love to hear from you!</p>
</section>
<!-- Hero section end -->

<!-- Contact us section start -->
<section id="contact-details" class="section-p1">
    <div class="details">
        <span>GET IN TOUCH</span>
        <h2>Visit one of our locations or contact is today</h2>
        <h3>Head Office</h3>
        <div>
            <li>
                <i class="fa-solid fa-map"></i>
                <p>123 Lorem ipsum Avenue, 8000</p>
            </li>
            <li>
                <i class="fa-solid fa-envelope"></i>
                <p>contact#email.com</p>
            </li>
            <li>
                <i class="fa-solid fa-phone"></i>
                <p>0800 000 000</p>
            </li>
            <li>
                <i class="fa-solid fa-clock"></i>
                <p>Monday to Saturday: 9:00am to 18:00pm</p>
            </li>
        </div>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105939.02967813017!2d18.284374316406264!3d-33.92583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc6763296651a3%3A0xbb24ceb9324f3aa7!2sCentral%20Library%2C%20Cape%20Town!5e0!3m2!1sen!2sza!4v1670099541826!5m2!1sen!2sza" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<!-- Contact us section end -->

<!-- Contact us form section start -->
<section id="form-details">
    <form action="">
        <span>LEAVE A MESSAGE</span>
        <h2>We'd love to hear from you.</h2>
        <input type="text" placeholder="Your Name">
        <input type="email" placeholder="E-mail">
        <input type="text" placeholder="Subject">
        <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
        <button class="normal">Send Message</button>
    </form>

    <div class="people">
        <div>
            <img class="people-img" src="../assets/people/person1.jpg" alt="">
            <p><span>Jane Doe</span> Senior Marketing Manager <br> Phone: + 000 123 00 77 88 <br>Email: contact@email.com</p>
        </div>
        <div>
            <img class="people-img" src="../assets/people/person2.jpg" alt="">
            <p><span>Maggie Smith</span> Senior Finance Manager <br> Phone: + 000 123 00 77 88 <br>Email: contact@email.com</p>
        </div>
        <div>
            <img class="people-img" src="../assets/people/person3.jpg" alt="">
            <p><span>John Pines</span> Senior Design Manager <br> Phone: + 000 123 00 77 88 <br>Email: contact@email.com</p>
        </div>
    </div>
</section>

<!-- Contact us form section end -->

<!-- Newsletter section start -->
<section id="newsletter" class="section-p1 section-m1">
    <div class="news-text">
        <h4>Sign Up For Our Newsletter</h4>
        <p>Get E-mail updates about the latest brands and <span>special offers.</span></p>
    </div>
    <div class="form">
        <input type="text" placeholder="Your email address">
        <button class="normal">Sign Up</button>
    </div>
</section>
<!-- Newsletter section end -->

<!-- Footer section -->
<?php
include '../component/footer.php'
?>