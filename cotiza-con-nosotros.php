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
        <div id="home" class="header-hero bg_cover d-lg-flex align-items-center" style="background: linear-gradient(rgb(0 0 0 / 33%), rgba(0, 0, 0, 0.6)), url(img/6.png); 
            background-size: cover; 
            background-position: center;">
            <div class="container">
                <div class="header-hero-content" style="text-align: center">
                    <h1 class="header-title wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.2s" style="color: #fff;font-size: 60px;">¡Cotiza con nosotros!</h1>
                    <h4 class="text wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.6s" style="color: #fff">Nuestro equipo comercial brindará soluciones personalizadas a tus necesidades de seguridad para salvaguardar lo que más te importa.</h4>
                </div> <!-- header hero content -->
            </div> <!-- container -->
        </div> <!-- header hero -->
    </header>
    <section id="download" class="download-area pt-70 pb-40">
        <div class="container">
            <?php include "formulario.php";?>
        </div> <!-- container -->
    </section>
    <section id="why" class="services-area pt-110 pb-120" style="padding: 5% 20%;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center pb-25">
                        <h2 style="color: #51a1bc">¡Síguenos en Redes Sociales!</h2>
                        <p class="text" style="font-size: 130%;"></p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-services services-color-4 text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="services-icon d-flex align-items-center justify-content-center">
                            <a href="http://www.linkedin.com/in/alerta-security-group-hn-479a6a2b2"><img src="img/LinkedIn.png" alt=""></a>
                        </div>
                        <div class="services-content">
                            <h4 class="services-title"><a href="http://www.linkedin.com/in/alerta-security-group-hn-479a6a2b2">LinkedIn</a></h4>
                            <p class="text"></p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-services services-color-4 text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="services-icon d-flex align-items-center justify-content-center">
                            <a href="https://web.facebook.com/people/Alerta-security-group/61554317891112/?mibextid=ZbWKwL"><img src="img/Facebook.png" alt=""></a>
                        </div>
                        <div class="services-content">
                            <h4 class="services-title"><a href="https://web.facebook.com/people/Alerta-security-group/61554317891112/?mibextid=ZbWKwL">Facebook</a></h4>
                            <p class="text"></p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-services services-color-4 text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="services-icon d-flex align-items-center justify-content-center">
                            <a href="https://www.instagram.com/alertasecuritygroup/"><img src="img/Instagram.png" alt=""></a>
                        </div>
                        <div class="services-content">
                            <h4 class="services-title"><a href="https://www.instagram.com/alertasecuritygroup/">Instagram</a></h4>
                            <p class="text"></p>
                        </div>
                    </div> <!-- single services -->
                </div>
            </div> <!-- row -->
    </section>
    <?php include "footer.php";?>
</body>
</html>
