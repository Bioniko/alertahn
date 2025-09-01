    <style>
        /* ===== FOOTER CUSTOM ===== */
        .custom-footer {
        background: #fff;   /* Fondo blanco */
        color: #222;        /* Texto oscuro */
        padding: 50px 20px 20px;
        font-family: Arial, sans-serif;
        border-top: 3px solid #51a0bb; /* Línea superior decorativa */
        }

        .footer-top {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        justify-content: space-between;
        max-width: 1200px;
        margin: 0 auto;
        }

        /* Columna */
        .footer-col {
        flex: 1 1 220px;
        min-width: 200px;
        }

        .footer-col h3 {
        font-size: 1.1rem;
        margin-bottom: 12px;
        color: #111; /* Títulos más fuertes */
        }

        .footer-col p {
        margin-bottom: 8px;
        font-size: 0.95rem;
        }

        .footer-col a {
        color: #444; /* Enlaces gris oscuro */
        text-decoration: none;
        transition: color 0.3s ease;
        }

        .footer-col a:hover {
        color: #0073e6; /* Azul al pasar el mouse */
        }

        /* Logo */
        .footer-logo {
        max-width: 180px;
        margin-bottom: 15px;
        }

        /* Redes sociales */
        .footer-socials {
        display: flex;
        gap: 12px;
        }

        .social-link {
        display: inline-block;
        padding: 8px 12px;
        border-radius: 6px;
        font-size: 0.9rem;
        background: #f1f1f1;
        color: #222;
        transition: all 0.3s ease;
        }

        .social-link:hover {
        background: #0073e6;
        color: #fff;
        }

        /* Colores de cada red */
        .social-link.linkedin { background: #e5f1f8; color: #0077b5; }
        .social-link.facebook { background: #eef2fa; color: #3b5998; }
        .social-link.instagram { background: #fae6ee; color: #e1306c; }

        .social-link.linkedin:hover,
        .social-link.facebook:hover,
        .social-link.instagram:hover {
        background: #0073e6;
        color: #fff;
        }

        /* Footer bottom */
        .footer-bottom {
        background-color: #51a0bb;
        margin-top: 40px;
        border-top: 1px solid #ddd;
        text-align: center;
        padding-top: 15px;
        padding-bottom: 15px;
        font-size: 0.9rem;
        color: #fff;
        }

        /* ===== Responsivo ===== */
        @media (max-width: 900px) {
        .footer-top {
            justify-content: center;
            text-align: center;
        }

        .footer-socials {
            justify-content: center;
        }
        }

        @media (max-width: 600px) {
        .footer-top {
            flex-direction: column;
            align-items: center;
        }

        .footer-col {
            text-align: center;
        }
        }
        /* Redes sociales con íconos */
        .footer-socials {
        display: flex;
        gap: 12px;
        }

        .social-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        font-size: 1.2rem;
        transition: all 0.3s ease;
        color: #fff;
        }

        /* Colores base de cada red */
        .social-link.linkedin { background: #0077b5; }
        .social-link.facebook { background: #3b5998; }
        .social-link.instagram { background: #e1306c; }

        /* Hover efecto */
        .social-link:hover {
        opacity: 0.8;
        transform: scale(1.1);
        }
    </style>
    <footer class="custom-footer">
    <div class="footer-top">
        <div class="footer-col">
        <a href="https://alertahn.com/">
            <img src="img/logo.png" alt="Logo Alerta" class="footer-logo">
        </a>
        <div class="footer-socials">
        <a href="http://www.linkedin.com/in/alerta-security-group-hn-479a6a2b2" target="_blank" class="social-link linkedin" aria-label="LinkedIn">
            <i class="fab fa-linkedin-in" style="color: #fff;"></i>
        </a>
        <a href="https://web.facebook.com/people/Alerta-security-group/61554317891112/?mibextid=ZbWKwL" target="_blank" class="social-link facebook" aria-label="Facebook">
            <i class="fab fa-facebook-f" style="color: #fff;"></i>
        </a>
        <a href="https://www.instagram.com/alertasecuritygroup/" target="_blank" class="social-link instagram" aria-label="Instagram">
            <i class="fab fa-instagram" style="color: #fff;"></i>
        </a>
        </div>

        </div>

        <div class="footer-col">
        <h3>Información de contacto:</h3>
        <p>Cel: (+504) 9985 2029</p>
        <p>Mail: info@alertahn.com</p>
        </div>

        <div class="footer-col">
        <h3>Nuestros Servicios:</h3>
        <p><a href="soluciones-y-servicios.php#s1">Guardias de Seguridad</a></p>
        <p><a href="soluciones-y-servicios.php#s2">Instalación Profesional de Cámaras CCTV</a></p>
        <p><a href="soluciones-y-servicios.php#s3">Custodia a Transporte</a></p>
        <p><a href="soluciones-y-servicios.php#s4">Patrullaje al Comercio e Industria</a></p>
        <p><a href="soluciones-y-servicios.php#s5">Rastreo y Monitoreo</a></p>
        <p><a href="soluciones-y-servicios.php#s6">Instalación de Cercas Electrificadas</a></p>
        </div>

        <div class="footer-col">
        <h3>Compañía</h3>
        <p><a href="soluciones-y-servicios.php">Soluciones y Servicios</a></p>
        <p><a href="blog.php">Blog</a></p>
        <p><a href="cotiza-con-nosotros.php">Cotiza con Nosotros</a></p>
        </div>
    </div>

    
    </footer>
    <div class="footer-bottom">
        <p style="color: #fff;">© Copyright Alerta Security Group 2024</p>
    </div>
    <!--====== PART ENDS ======-->
    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!--====== WOW js ======-->
    <script src="assets/js/wow.min.js"></script>
    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>