
<?php
    $this->section("content");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eElectronics - eCommerce</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?=url("assets/web/css/owl.carousel.css"); ?>">
    <link rel="stylesheet" href="<?=url("assets/web/css/style.css"); ?>">
    <link rel="stylesheet" href="<?=url("asstes/web/css/responsive.css"); ?>">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    
  </head>
  <body>
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="#"><i class="fa fa-user"></i> Minha conta</a></li>
                            <li><a href="#"><i class="fa fa-heart"></i> Lista de desejos</a></li>
                            <li><a href="<?= url("/carrinho");?>"><i class="fa fa-user"></i> Meu Carinho</a></li>
                            <li><a href="<?= url("/checkout");?>"><i class="fa fa-user"></i> Checkout</a></li>
                            <li><a href="#"><i class="fa fa-user"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">Moeda :</span><span class="value"> BRL </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">BRL</a></li>
                                    <li><a href="#">INR</a></li>
                                    <li><a href="#">USD</a></li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">Linguagem :</span><span class="value"> Português BR </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Português BR</a></li>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Français</a></li>
                                    <li><a href="#">Español</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="<?= url("/inicio");?>">e<span>Electronics</span></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="<?= url("/carrinho");?>">Carrinho - <span class="cart-amunt">R$800</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Mudar a navegação</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?= url("/inicio");?>">início</a></li>
                        <li><a href="<?= url("/loja");?>">Catálogo de produtos</a></li>
                        <li><a href="<?= url("/produto");?>">Produto</a></li>
                        <li><a href="<?= url("/carrinho");?>">Meu carrinho</a></li>
                        <li><a href="<?= url("/checkout");?>">Checkout</a></li>
                        <li><a href="#">Categoria</a></li>
                        <li><a href="#">Outros</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <?php
    echo $this->section("content");
    ?>

    <!-- End product widget area -->
    
    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>e<span>Electronics</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Navegação do usuário </h2>
                        <ul>
                            <li><a href="#">Minha conta</a></li>
                            <li><a href="#">Histórico de compra</a></li>
                            <li><a href="#">Lista de desejos</a></li>
                            <li><a href="#">Contato do vendedor</a></li>
                            <li><a href="#">Página inicial</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categorias</h2>
                        <ul>
                            <li><a href="#">Celular</a></li>
                            <li><a href="#">Acessórios domésticos</a></li>
                            <li><a href="#">TV LED</a></li>
                            <li><a href="#">Compututadores</a></li>
                            <li><a href="#">Acessórios</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Assine a nossa newsletter e ganhe descontos exclusivos que você não vai achar em nenhum outro local, a não ser na sua caixa de email</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Digite seu email">
                                <input type="submit" value="Inscreva-se">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2015 eElectronics. Todos os direitos reservados. Codado com <i class="fa fa-heart"></i> por <a href="http://wpexpand.com" target="_blank">Alexandre Achilles</a></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="<?=url("assets/web/js/owl.carousel.min.js"); ?>"></script>
    <script src="<?=url("assets/web/js/jquery.sticky.js"); ?>"></script>
    
    <!-- jQuery easing -->
    <script src="<?=url("assets/web/js/jquery.easing.1.3.min.js"); ?>"></script>
    
    <!-- Main Script -->
    <script src="<?=url("assets/web/js/main.js");?>"></script>
  </body>
</html>
