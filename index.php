<!DOCTYPE html>
<html lang="zxx">
   <?php
session_start();
require 'functions.php';
 // if( !isset($_SESSION["login"])){
 //     header("location: index.php");
 //     exit;  
 // } 
require_once('./header.php');?>  
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
      <div class="hero__slider owl-carousel">
        <div class="hero__items set-bg" data-setbg="img/hero/hero-1.jpg">
          <div class="container">
            <div class="row">
              <div class="col-xl-5 col-lg-7 col-md-8">
                <div class="hero__text">
                  <h6>Summer Collection</h6>
                  <h2>Fall - Winter Collections 2030</h2>
                  <p>
                    A specialist label creating luxury essentials. Ethically
                    crafted with an unwavering commitment to exceptional
                    quality.
                  </p>
                  <a href="./shop.php" class="primary-btn"
                    >Shop now <span class="arrow_right"></span
                  ></a>
                  <div class="hero__social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="hero__items set-bg" data-setbg="img/hero/hero-2.jpg">
          <div class="container">
            <div class="row">
              <div class="col-xl-5 col-lg-7 col-md-8">
                <div class="hero__text">
                  <h6>Summer Collection</h6>
                  <h2>Fall - Winter Collections 2030</h2>
                  <p>
                    A specialist label creating luxury essentials. Ethically
                    crafted with an unwavering commitment to exceptional
                    quality.
                  </p>
                  <a href="./shop.php" class="primary-btn"
                    >Shop now <span class="arrow_right"></span
                  ></a>
                  <div class="hero__social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <section class="banner spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 offset-lg-4">
            <div class="banner__item">
              <div class="banner__item__pic">
                <img src="img/banner/banner-1.jpg" alt="" />
              </div>
              <div class="banner__item__text">
                <h2>Clothing Collections 2030</h2>
                <a href="./shop.php">Shop now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="banner__item banner__item--middle">
              <div class="banner__item__pic">
                <img src="img/banner/banner-2.jpg" alt="" />
              </div>
              <div class="banner__item__text">
                <h2>Accessories</h2>
                <a href="./shop.php">Shop now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="banner__item banner__item--last">
              <div class="banner__item__pic">
                <img src="img/banner/banner-3.jpg" alt="" />
              </div>
              <div class="banner__item__text">
                <h2>Shoes Spring 2030</h2>
                <a href="./shop.php">Shop now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Banner Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="filter__controls">
              <li class="active" data-filter="*">Best Sellers</li>
              <li data-filter=".new-arrivals">New Arrivals</li>
              <li data-filter=".hot-sales">Hot Sales</li>
            </ul>
          </div>
        </div>
        <div class="row product__filter">
          <div
            class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals"
          >
            <div class="product__item">
              <div
                class="product__item__pic set-bg"
                data-setbg="img/product/product-1.jpg"
              >
                <span class="label">New</span>
                <ul class="product__hover">
                  <li>
                    <a href="#"><img src="img/icon/heart.png" alt="" /></a>
                  </li>
                  <li>
                    <a href="#"
                      ><img src="img/icon/compare.png" alt="" />
                      <span>Compare</span></a
                    >
                  </li>
                  <li>
                    <a href="#"><img src="img/icon/search.png" alt="" /></a>
                  </li>
                </ul>
              </div>
              <div class="product__item__text">
                <h6>Pique shoes</h6>
                <a href="./shop.php" class="add-cart">Beli ini</a>
                <div class="rating">
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                </div>
                <h5>30.000</h5>
                <div class="product__color__select">
                  <label for="pc-1">
                    <input type="radio" id="pc-1" />
                  </label>
                  <label class="active black" for="pc-2">
                    <input type="radio" id="pc-2" />
                  </label>
                  <label class="grey" for="pc-3">
                    <input type="radio" id="pc-3" />
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales"
          >
            <div class="product__item">
              <div
                class="product__item__pic set-bg"
                data-setbg="img/product/product-2.jpg"
              >
                <ul class="product__hover">
                  <li>
                    <a href="#"><img src="img/icon/heart.png" alt="" /></a>
                  </li>
                  <li>
                    <a href="#"
                      ><img src="img/icon/compare.png" alt="" />
                      <span>Compare</span></a
                    >
                  </li>
                  <li>
                    <a href="#"><img src="img/icon/search.png" alt="" /></a>
                  </li>
                </ul>
              </div>
              <div class="product__item__text">
                <h6>Dengklok jacket</h6>
                <a href="./shop.php" class="add-cart">Beli ini</a>
                <div class="rating">
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                </div>
                <h5>130.000</h5>
                <div class="product__color__select">
                  <label for="pc-4">
                    <input type="radio" id="pc-4" />
                  </label>
                  <label class="active black" for="pc-5">
                    <input type="radio" id="pc-5" />
                  </label>
                  <label class="grey" for="pc-6">
                    <input type="radio" id="pc-6" />
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals"
          >
            <div class="product__item sale">
              <div
                class="product__item__pic set-bg"
                data-setbg="img/product/product-3.jpg"
              >
                <span class="label">Sale</span>
                <ul class="product__hover">
                  <li>
                    <a href="#"><img src="img/icon/heart.png" alt="" /></a>
                  </li>
                  <li>
                    <a href="#"
                      ><img src="img/icon/compare.png" alt="" />
                      <span>Compare</span></a
                    >
                  </li>
                  <li>
                    <a href="#"><img src="img/icon/search.png" alt="" /></a>
                  </li>
                </ul>
              </div>
              <div class="product__item__text">
                <h6>Logic shoes</h6>
                <a href="./shop.php" class="add-cart">Beli ini</a>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                </div>
                <h5>330.000</h5>
                <div class="product__color__select">
                  <label for="pc-7">
                    <input type="radio" id="pc-7" />
                  </label>
                  <label class="active black" for="pc-8">
                    <input type="radio" id="pc-8" />
                  </label>
                  <label class="grey" for="pc-9">
                    <input type="radio" id="pc-9" />
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales"
          >
            <div class="product__item">
              <div
                class="product__item__pic set-bg"
                data-setbg="img/product/product-4.jpg"
              >
                <ul class="product__hover">
                  <li>
                    <a href="#"><img src="img/icon/heart.png" alt="" /></a>
                  </li>
                  <li>
                    <a href="#"
                      ><img src="img/icon/compare.png" alt="" />
                      <span>Compare</span></a
                    >
                  </li>
                  <li>
                    <a href="#"><img src="img/icon/search.png" alt="" /></a>
                  </li>
                </ul>
              </div>
              <div class="product__item__text">
                <h6>Mayers jacket</h6>
                <a href="./shop.php" class="add-cart">Beli ini</a>
                <div class="rating">
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                </div>
                <h5>99.000</h5>
                <div class="product__color__select">
                  <label for="pc-10">
                    <input type="radio" id="pc-10" />
                  </label>
                  <label class="active black" for="pc-11">
                    <input type="radio" id="pc-11" />
                  </label>
                  <label class="grey" for="pc-12">
                    <input type="radio" id="pc-12" />
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals"
          >
            <div class="product__item">
              <div
                class="product__item__pic set-bg"
                data-setbg="img/product/product-5.jpg"
              >
                <ul class="product__hover">
                  <li>
                    <a href="#"><img src="img/icon/heart.png" alt="" /></a>
                  </li>
                  <li>
                    <a href="#"
                      ><img src="img/icon/compare.png" alt="" />
                      <span>Compare</span></a
                    >
                  </li>
                  <li>
                    <a href="#"><img src="img/icon/search.png" alt="" /></a>
                  </li>
                </ul>
              </div>
              <div class="product__item__text">
                <h6>Shape shirt</h6>
                <a href="./shop.php" class="add-cart">Beli ini</a>
                <div class="rating">
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                </div>
                <h5>230.000</h5>
                <div class="product__color__select">
                  <label for="pc-13">
                    <input type="radio" id="pc-13" />
                  </label>
                  <label class="active black" for="pc-14">
                    <input type="radio" id="pc-14" />
                  </label>
                  <label class="grey" for="pc-15">
                    <input type="radio" id="pc-15" />
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales"
          >
            <div class="product__item sale">
              <div
                class="product__item__pic set-bg"
                data-setbg="img/product/product-6.jpg"
              >
                <span class="label">Sale</span>
                <ul class="product__hover">
                  <li>
                    <a href="#"><img src="img/icon/heart.png" alt="" /></a>
                  </li>
                  <li>
                    <a href="#"
                      ><img src="img/icon/compare.png" alt="" />
                      <span>Compare</span></a
                    >
                  </li>
                  <li>
                    <a href="#"><img src="img/icon/search.png" alt="" /></a>
                  </li>
                </ul>
              </div>
              <div class="product__item__text">
                <h6>Ankle Boots</h6>
                <a href="./shop.php" class="add-cart">Beli ini</a>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                </div>
                <h5>77.000</h5>
                <div class="product__color__select">
                  <label for="pc-16">
                    <input type="radio" id="pc-16" />
                  </label>
                  <label class="active black" for="pc-17">
                    <input type="radio" id="pc-17" />
                  </label>
                  <label class="grey" for="pc-18">
                    <input type="radio" id="pc-18" />
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals"
          >
            <div class="product__item">
              <div
                class="product__item__pic set-bg"
                data-setbg="img/product/product-7.jpg"
              >
                <ul class="product__hover">
                  <li>
                    <a href="#"><img src="img/icon/heart.png" alt="" /></a>
                  </li>
                  <li>
                    <a href="#"
                      ><img src="img/icon/compare.png" alt="" />
                      <span>Compare</span></a
                    >
                  </li>
                  <li>
                    <a href="#"><img src="img/icon/search.png" alt="" /></a>
                  </li>
                </ul>
              </div>
              <div class="product__item__text">
                <h6>Wood Bag</h6>
                <a href="./shop.php" class="add-cart">Beli ini</a>
                <div class="rating">
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                </div>
                <h5>299.000</h5>
                <div class="product__color__select">
                  <label for="pc-19">
                    <input type="radio" id="pc-19" />
                  </label>
                  <label class="active black" for="pc-20">
                    <input type="radio" id="pc-20" />
                  </label>
                  <label class="grey" for="pc-21">
                    <input type="radio" id="pc-21" />
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales"
          >
            <div class="product__item">
              <div
                class="product__item__pic set-bg"
                data-setbg="img/product/product-8.jpg"
              >
                <ul class="product__hover">
                  <li>
                    <a href="#"><img src="img/icon/heart.png" alt="" /></a>
                  </li>
                  <li>
                    <a href="#"
                      ><img src="img/icon/compare.png" alt="" />
                      <span>Compare</span></a
                    >
                  </li>
                  <li>
                    <a href="#"><img src="img/icon/search.png" alt="" /></a>
                  </li>
                </ul>
              </div>
              <div class="product__item__text">
                <h6>Polo shirt</h6>
                <a href="./shop.php" class="add-cart">Beli ini</a>
                <div class="rating">
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                </div>
                <h5>77.000</h5>
                <div class="product__color__select">
                  <label for="pc-22">
                    <input type="radio" id="pc-22" />
                  </label>
                  <label class="active black" for="pc-23">
                    <input type="radio" id="pc-23" />
                  </label>
                  <label class="grey" for="pc-24">
                    <input type="radio" id="pc-24" />
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Product Section End -->

 
    <?php require_once('./footer.php');?>
  </body>
</html>
