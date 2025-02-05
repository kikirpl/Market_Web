<!DOCTYPE html>
<html lang="zxx">
<?php
session_start();


    include "functions.php";

if(isset($_GET['delete'])){
      $delete_id = $_GET['delete'];
      mysqli_query($db, "DELETE FROM `cart` WHERE id = '$delete_id'") or die('query failed');
      header('location:shopping-cart.php');
   }
?>
  <?php require_once("./header.php");?>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcrumb__text">
              <h4>Shopping Cart</h4>
              <div class="breadcrumb__links">
                <a href="./index.php">Home</a>
                <a href="./shop.php">Shop</a>
                <span>Shopping Cart</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="shopping__cart__table">
              <table>
                <thead>
                  <tr>
                    <th>Product</th>
                    <!-- <th>Quantity</th> -->
                    <th>Price</th>
                    <th></th>
                  </tr>
                </thead>
      <tbody>
      <?php
                $db = mysqli_connect("localhost", "root", "", "ukk");
          $grand_total = 0;
         $select_cart = mysqli_query($db, "SELECT * FROM `cart`") or die('query failed');
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){   
             ?>
         <tr>
            <td class="product__cart__item">
                      <div class="product__cart__item__pic">
                        <img src="<?= $fetch_cart['gambar']?>" alt=""/>
                      </div>  
                      <div class="product__cart__item__text">
                        <h6><?= $fetch_cart['nama']?></h6>
                      </div>
                    </td>
                    <!-- <td class="quantity__item">
                      <div class="quantity">
                        <div class="pro-qty-2">
                          <input type="text" value="1" />
                        </div>
                      </div>
                    </td> -->
                    <td class="cart__price"><?= $fetch_cart['harga']?></td>
                    <td method = "GET" href="hapus.php?id=<?= $fetch_cart['id']; ?>" onclick="return confirm('delete this from cart?');" class="cart__close"><i class="fa fa-close"></i></td>
                  </tr>
                  <?php }
            }?>
                </tbody>
              </table>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="continue__btn">
                  <a href="#">Continue Shopping</a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="continue__btn update__btn">
                  <a href="#"><i class="fa fa-spinner"></i> Update cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cart__discount">
              <h6>Discount codes</h6>
              <form action="#">
                <input type="text" placeholder="Coupon code" />
                <button type="submit">Apply</button>
              </form>
            </div>
            <div class="cart__total">
              <h6>Cart total</h6>
              <ul>
                <li>Subtotal <span>$ 169.50</span></li>
                <li>Total <span>$ 169.50</span></li>
              </ul>
              <a href="#" class="primary-btn">Proceed to checkout</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Shopping Cart Section End -->

    <!-- Footer Section Begin -->
    <?php require_once("footer.php");?>
  </body>
</html>
