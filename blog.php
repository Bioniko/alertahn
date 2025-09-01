<!doctype html>
<html class="no-js" lang="en">
<head>
    <?php include "head.php";?> 
</head>
<body>
    <!--====== PRELOADER PART START ======-->
    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== PRELOADER PART ENDS ======-->
    <!--====== HEADER PART START ======-->
    <header class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <?php include "menu.php";?> 
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
        <div id="home" class="header-hero bg_cover d-lg-flex align-items-center" style="background: linear-gradient(rgb(0 0 0 / 33%), rgba(0, 0, 0, 0.6)), url(img/9.png); 
            background-size: cover; 
            background-position: center;">
            <div class="container">
                <div class="header-hero-content" style="text-align: center">
                    <h1 class="header-title wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.2s" style="color: #fff;font-size: 60px;">Blogs de Seguridad Integral con Alerta Security Group</h1>
                    <h4 class="text wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.6s" style="color: #fff">Manténgase al día de las últimas tendencias, mejores prácticas y consejos para optimizar sus estrategias de seguridad.</h4>
                </div> <!-- header hero content -->
            </div> <!-- container -->
        </div> <!-- header hero -->
    </header>
    <!--====== HEADER PART ENDS ======-->
    <!--====== SERVICES PART START ======-->
    <section id="why" class="services-area pt-110 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center pb-25">
                        <h1 style="color: #51a1bc"></h1>
                        <p class="text" style="font-size: 130%;"></p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-services services-color-4 text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="services-content">
                            <h5 class="services-title" style="text-align: left"><a href="la-importancia-de-contratar-servicios-de-seguridad-privada.php">La Importancia de Contratar Servicios de Seguridad Privada</a></h5>
                            <p class="text" style="text-align: left"><a href="la-importancia-de-contratar-servicios-de-seguridad-privada.php">leer más</a></p>
                        </div>
                    </div> <!-- single services -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <?php include "footer.php";?>
</body>
</html>
