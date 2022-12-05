<?php
include '../component/navbar.php'
?>

<!-- Single product section start -->
<section id="pro-details" class="section-p1">
    <div class="single-pro-image">
        <img id="mainImg" src="../assets/products/sunglasses1.jpg" width=100% alt="">

        <div class="small-img-group">
            <div class="small-img-col">
                <img class="smallImg" src="../assets/products/sunglasses1.jpg" width=100% alt="">
            </div>
            <div class="small-img-col">
                <img class="smallImg" src="../assets/products/sunglasses2.jpg" width=100% alt="">
            </div>
            <div class="small-img-col">
                <img class="smallImg" src="../assets/products/sunglasses3.jpg" width=100% alt="">
            </div>
            <div class="small-img-col">
                <img class="smallImg" src="../assets/products/sunglasses4.jpg" width=100% alt="">
            </div>
        </div>
    </div>

    <div class="single-pro-details">
        <h6>Home / Catalogue</h6>
        <h4>Fashion Sunglasses</h4>
        <h2>R2953</h2>
        <select>
            <option>Select Size</option>
            <option>XLarge</option>
            <option>Large</option>
            <option>Medium</option>
            <option>Small</option>
        </select>
        <input type="number" value="1">
        <button class="normal">Add To Cart</button>
        <h4>Product Details</h4>
        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, maiores praesentium inventore perspiciatis dicta quos corporis reprehenderit assumenda amet delectus laboriosam nemo quod possimus ad! Asperiores repellat voluptas tempora? Delectus!
            Tenetur at facere pariatur, eaque eum asperiores eligendi, consectetur a libero dicta cupiditate similique possimus totam maxime repellendus repellat est!</span>
    </div>
</section>
<!-- Single product section start -->

<!-- New arrival product section start -->
<section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">
        <div class="pro">
            <img src="../assets/products/sunglasses9.jpg" alt="">
            <div class="description">
                <span>RB 5487</span>
                <h5>Ray-Ban</h5>
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h4>R2800</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>

        <div class="pro">
            <img src="../assets/products/sunglasses10.jpg" alt="">
            <div class="description">
                <span>RB 5487</span>
                <h5>Ray-Ban</h5>
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h4>R2800</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>

        <div class="pro">
            <img src="../assets/products/sunglasses11.jpg" alt="">
            <div class="description">
                <span>RB 5487</span>
                <h5>Ray-Ban</h5>
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h4>R2800</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>

        <div class="pro">
            <img src="../assets/products/sunglasses12.jpg" alt="">
            <div class="description">
                <span>RB 5487</span>
                <h5>Ray-Ban</h5>
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <h4>R2800</h4>
            </div>
            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
        </div>

    </div>
</section>
<!-- New arrival product section end -->

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

<?php
include '../component/footer.php'
?>