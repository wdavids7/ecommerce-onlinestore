
<!-- Footer section start -->
<footer class="section-p1">
        <div class="col">
            <img class="logo" src="../assets/stripe-logo.svg" alt="logo">
            <h4>Contact</h4>
            <p><strong>Address:</strong> 123 Lorem ipsum Avenue, Consectetur elit, 78952.</p>
            <p><strong>Phone:</strong> +01 2345 6789 / (+91) 01 2222 3456</p>
            <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-pinterest-p"></i>
                    <i class="fa-brands fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="../assets/pay/appstore-logo.svg" alt="">
                <img src="../assets/pay/playstore-logo.svg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img class="pay" src="../assets/pay/payment-logo.png" alt="">
        </div>

        <div class="copyright">
            <p>© 2022</p>
        </div>
    </footer>
    <!-- Footer section end -->

    <!-- Script for single image slider start -->
    <script>
        var mainImg = document.getElementById("mainImg");
        var smallImg = document.getElementsByClassName("smallImg");

        smallImg[0].onclick = function(){
            mainImg.src = smallImg[0].src;
        }
        smallImg[1].onclick = function(){
            mainImg.src = smallImg[1].src;
        }
        smallImg[2].onclick = function(){
            mainImg.src = smallImg[2].src;
        }
        smallImg[3].onclick = function(){
            mainImg.src = smallImg[3].src;
        }
    </script>
    <!-- Script for single image slider end -->

    <!-- Script for navbar hamburger button toggler -->
    <script src="../js/navbar.js"></script>

    <!-- Link to JS -->
    <script src="../js/shop.js"></script>
</body>

</html>