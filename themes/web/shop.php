

<!DOCTYPE html>
<html lang="en">
  <head>
 
  </head>
  <body>
    <?php
    $this->layout("_theme");
    ?>  
<!-- End mainmenu area -->
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Catálogo de produtos</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <?php
                foreach ($products as $product) {
                    ?>
                    <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="assets/web/img/product-2.jpg" alt="">
                        </div>
                        <h2><a href=""><?= $product->name ;?></a></h2>
                        <div class="product-carousel-price">
                            <ins><?= $product->price; ?></ins> <del><?= $product->oldprice; ?></del>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add ao carrinho</a>
                        </div>                       
                    </div>
                </div>
                <?php
            }
            ?>
                
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="assets/web/img/product-1.jpg" alt="">
                        </div>
                        <h2><a href="">LG - Smart TV OLED</a></h2>
                        <div class="product-carousel-price">
                            <ins>R$3400,00</ins> <del>R$4296,00</del>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add ao carrinho</a>
                        </div>                       
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="assets/web/img/product-3.jpg" alt="">
                        </div>
                        <h2><a href="">iPhone 6s</a></h2>
                        <div class="product-carousel-price">
                            <ins>R$399,00</ins> <del>R$499,00</del>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add ao carrinho</a>
                        </div>                       
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="assets/web/img/product-4.jpg" alt="">
                        </div>
                        <h2><a href="">Playstation 4</a></h2>
                        <div class="product-carousel-price">
                            <ins>R$1400,99</ins> <del>R$2560,00</del>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add ao carrinho</a>
                        </div>                       
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="assets/web/img/product-2.jpg" alt="">
                        </div>
                        <h2><a href="">Notebook Asus</a></h2>
                        <div class="product-carousel-price">
                            <ins>R$2300,00</ins> <del>R$3000,00</del>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add ao carrinho</a>
                        </div>                       
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="assets/web/img/product-1.jpg" alt="">
                        </div>
                        <h2><a href="">LG - Smart TV OLED</a></h2>
                        <div class="product-carousel-price">
                            <ins>R$3400,00</ins> <del>R$4296,00</del>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add ao carrinho</a>
                        </div>                       
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="assets/web/img/product-3.jpg" alt="">
                        </div>
                        <h2><a href="">iPhone 6s</a></h2>
                        <div class="product-carousel-price">
                            <ins>R$399,00</ins> <del>R$499,00</del>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add ao carrinho</a>
                        </div>                       
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="assets/web/img/product-4.jpg" alt="">
                        </div>
                        <h2><a href="">Playstation 4</a></h2>
                        <div class="product-carousel-price">
                            <ins>R$1400,99</ins> <del>R$2560,00</del>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add ao carrinho</a>
                        </div>                       
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="assets/web/img/product-2.jpg" alt="">
                        </div>
                        <h2><a href="">Notebook Asus</a></h2>
                        <div class="product-carousel-price">
                            <ins>R$2300,00</ins> <del>R$3000,00</del>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add ao carrinho</a>
                        </div>                       
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="assets/web/img/product-1.jpg" alt="">
                        </div>
                        <h2><a href="">LG - Smart TV OLED</a></h2>
                        <div class="product-carousel-price">
                            <ins>R$3400,00</ins> <del>R$4296,00</del>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add ao carrinho</a>
                        </div>                       
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="assets/web/img/product-3.jpg" alt="">
                        </div>
                        <h2><a href="">iPhone 6s</a></h2>
                        <div class="product-carousel-price">
                            <ins>R$399,00</ins> <del>R$499,00</del>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add ao carrinho</a>
                        </div>                       
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="assets/web/img/product-4.jpg" alt="">
                        </div>
                        <h2><a href="">Playstation 4</a></h2>
                        <div class="product-carousel-price">
                            <ins>R$1400,99</ins> <del>R$2560,00</del>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add ao carrinho</a>
                        </div>                       
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>                        
                    </div>
                </div>
            </div>
        </div>
    </div>


   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="<?= url("assets/web/js/owl.carousel.min.js");?>"></script>
    <script src="<?= url("assets/web/js/jquery.sticky.js");?>"></script>
    
    <!-- jQuery easing -->
    <script src="<?= url("assets/web/js/jquery.easing.1.3.min.js");?>"></script>
    
    <!-- Main Script -->
    <script src="<?= url("assets/web/js/main.js");?>"></script>
  </body>
</html>
