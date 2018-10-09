            <header class="header-container">
                <div class="container">
                    <div class="top-row">
                        <div class="row">
                            <div class="col-md-2 col-sm-6 col-xs-6">
                                <div id="logo">
                                    <!--<a href="home.html"><img src="images/logo.png" alt="logo"></a>-->
                                    <a href="./produto/"><span>Patrono</span>t-shirts</a>
                                </div>                       
                            </div>
                            <div class="col-sm-6 visible-sm">
                            </div>
                            <div class="col-md-8 col-sm-12 col-xs-12 remove-padd">
                                <nav class="navbar navbar-default">
                                    <div class="navbar-header page-scroll">
                                        <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>

                                   </div>
                                    <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
                                        <ul class="list-unstyled nav1 cl-effect-10">
                                            <li><a  data-hover="Home" class="active" href="./produto/"><span>Home</span></a></li>
                                           
                                            <li><a data-hover="Produtos"  href="./produto/listar"><span>Produtos</span></a></li>
                                            <li><a data-hover="Categoria"  href="./categoria"><span>Categoria</span></a></li>

                                            <?php

    if(isset($_SESSION["auth"])){
        $registro= $_SESSION["auth"]["user"];

if($_SESSION["auth"]["user"]<>"admin"){
    echo "<li><a href='./cadastro/informacoes/$registro[idCliente]'>Olá, $registro[nmPessoa]</a></li>";
    echo "<li><a data-hover='Logout'  href='./login/logout'><span>Logout</span></a></li>";
}else{
        echo "<li><a data-hover='Logout'  href='./login/logout'><span>Logout</span></a></li>";

}
}else{
    echo "<li><a data-hover='Logar' href='./login/index'><span>Logar</span></a></li>";
}   
    ?>

                                            
                                            <li><form action="./produto/buscar" method="post"> <input type="text" name="produto" placeholder="Busque"> </form> </li>
                                        </ul>

                                    </div>
                                </nav>
                            </div>
                            <div class="col-md-2  col-sm-4 col-xs-12 hidden-sm">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="clearfix"></div>