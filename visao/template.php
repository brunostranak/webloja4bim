<!--Template Name: vacayhome
File Name: about.html
Author Name: ThemeVault
Author URI: http://www.themevault.net/
License URI: http://www.themevault.net/license/-->

<!DOCTYPE html>
<html lang="en">
    <head>
         <base href="<?= BASE_URL ?>">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/icons/favicon.png"/>
        <title>Patrono t-shirts</title>

        <!-- Bootstrap core CSS -->
        <link href="./publico/css/bootstrap.min.css" rel="stylesheet">
        <link href="./publico/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Custom styles for this template -->
        <link href="./publico/css/style.css" rel="stylesheet">
        <link href="fonts/antonio-exotic/stylesheet.css" rel="stylesheet">
        <link rel="stylesheet" href="./publico/css/lightbox.min.css">
        <link href="./publico/css/responsive.css" rel="stylesheet">
        <script src="./publico/js/jquery.min.js" type="text/javascript"></script>
        <script src="./publico/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="./publico/js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
        <script src="./publico/js/instafeed.min.js" type="text/javascript"></script>
        <script src="./publico/js/custom.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="page">
            <!---header top---->
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6"><div class="social-grid">
                                <ul class="list-unstyled text-right">
                                    <li><a><i class="fa fa-facebook"></i></a></li>
                                    <li><a><i class="fa fa-twitter"></i></a></li>
                                    <li><a><i class="fa fa-linkedin"></i></a></li>
                                    <li><a><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div></div>
                    </div>
                </div>
            </div>
            <!--header-->



        <?php require "visao/cabecalho.php"; ?>

        <?php alertComponentRender(); ?>

        <?php 
    $URL_ATUAL= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    

    if($URL_ATUAL=="http://localhost/noopmvc-master/produto/" || $URL_ATUAL== "http://localhost/noopmvc-master/"){
    require "visao/produto/carousel.visao.php";
}
?>

        
        <main class="container">
            <?php require $viewFilePath; ?>
        </main>


           <?php require "visao/rodape.php"; ?>
        
         



