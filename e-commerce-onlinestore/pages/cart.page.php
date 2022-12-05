<?php
include '../component/navbar.php'
?>

<!-- Hero section start -->
<section id="page-header" class="about-header">
    <h2>#checkout</h2>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
</section>
<!-- Hero section end -->

<!-- Cart section start -->
<section id="cart" class="section-p1">
    <table width=100%>
        <thead>
            <tr>
                <td>Remove</td>
                <td>Image</td>
                <td>Product</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Subtotal</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#"><i class="fa-solid fa-circle-xmark"></i></a></td>
                <td><img src="../assets/products/sunglasses1.jpg" alt=""></td>
                <td>Ray-Ban Sunglasses</td>
                <td>R2800</td>
                <td><input type="number" value="1"></td>
                <td>R2800</td>
            </tr>
            <tr>
                <td><a href="#"><i class="fa-solid fa-circle-xmark"></i></a></td>
                <td><img src="../assets/products/sunglasses2.jpg" alt=""></td>
                <td>Ray-Ban Sunglasses</td>
                <td>R2800</td>
                <td><input type="number" value="1"></td>
                <td>R2800</td>
            </tr>
            <tr>
                <td><a href="#"><i class="fa-solid fa-circle-xmark"></i></a></td>
                <td><img src="../assets/products/sunglasses3.jpg" alt=""></td>
                <td>Ray-Ban Sunglasses</td>
                <td>R2800</td>
                <td><input type="number" value="1"></td>
                <td>R2800</td>
            </tr>
        </tbody>
    </table>
</section>
<!-- Cart section end -->

<!-- Cart gift card/coupon section start -->
<section id="cart-add" class="section-p1">
    <div id="coupon">
        <h3>Add Gift Voucher or Coupon Code</h3>
        <div>
            <input type="text" placeholder="Enter Code">
            <button class="normal">Apply</button>
        </div>
    </div>

    <div id="subtotal">
        <h3>Cart Total</h3>
        <table>
            <tr>
                <td>Cart Subtotal</td>
                <td>R 6350.00</td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td>Free</td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td><strong>R 6350.00</strong></td>
            </tr>
        </table>
        <button class="normal">Proceed to checkout</button>
    </div>
</section>
<!-- Cart gift card/coupon section end -->

<!-- Footer section -->
<?php
include '../component/footer.php'
?>