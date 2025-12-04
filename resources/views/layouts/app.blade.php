<!DOCTYPE html>
<html lang="es">

<head>
   <!-- SEO Básico -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Juan Carlos Mejías | Analista Funcional & Desarrollador Web</title>

<meta name="description" content="Portafolio profesional de Juan Carlos Mejías: Analista Funcional, documentación UML, SQL, Laravel, APIs REST, BPMN, QA Testing y más.">

<meta name="keywords" content="analista funcional, portafolio, UML, SQL, Laravel, documentación, APIs REST, BPMN, QA, sistemas, TI, proyectos">

<meta name="author" content="Juan Carlos Mejías">

<!-- SEO Social Media (Open Graph) -->
<meta property="og:title" content="Juan Carlos Mejías | Analista Funcional & Desarrollador Web">
<meta property="og:description" content="Portafolio profesional con proyectos, tecnologías y experiencia real.">
<meta property="og:image" content="https://TU-DOMINIO.com/images/logoJC.png">
<meta property="og:type" content="website">
<meta property="og:url" content="https://TU-DOMINIO.com">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Juan Carlos Mejías | Portafolio Profesional">
<meta name="twitter:description" content="Analista Funcional + Desarrollo web. Proyectos, documentación y herramientas.">
<meta name="twitter:image" content="https://TU-DOMINIO.com/images/Logojcm.png">

@vite(['resources/css/app.css', 'resources/js/app.js'])
<!-- Favicon -->

 <link rel="icon" href="{{ asset('images/Logojcm.png') }}">
 <meta property="og:image" content="{{ asset('images/Logojcm.png') }}">

    <!-- BOOTSTRAP 5 (CDN) -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- TU CSS (solo UNO y al final) -->
    


    <!--<link rel="stylesheet" href="{{ asset('css/app.css') }}?v=4"> -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon.png') }}">

</head>

<body>

    <!-- NAVBAR -->
    

<nav class="navbar navbar-expand-lg navbar-custom glass shadow-sm"
    style="background: rgba(13,27,42,0.65); backdrop-filter: blur(10px);">

    <div class="container d-flex align-items-center">

        <!-- LOGO -->
        <a class="navbar-brand d-flex align-items-center fw-bold text-white"
            href="/"
            style="font-size: 1.25rem; letter-spacing: .5px;">

             
            <img src="{{ asset('images/Logojcm.png') }}" 
                alt="Logo Juan"
                style="
                    height: 52px; 
                    width:52px; 
                    border-radius: 50%; 
                    object-fit: cover; 
                    margin-right: 10px;
                    border: 2px solid rgba(255,255,255,0.25);
                    backdrop-filter: blur(6px);
                    box-shadow: 0 4px 10px rgba(0,0,0,0.35);
                ">
        </a>

        <!-- HAMBURGUESA -->
        <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
            style="border: none;">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- CONTENIDO -->
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">

            <!-- LINKS IZQUIERDA -->
            <ul class="navbar-nav d-flex align-items-center text-center">

                <li class="nav-item">
                    <a class="nav-link nav-link-custom" href="/">
                        <i class="bi bi-house-door-fill me-1"></i> Inicio
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-link-custom" href="/sobre-mi">
                        <i class="bi bi-person-fill me-1"></i> Sobre mí
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-link-custom" href="/proyectos">
                        <i class="bi bi-kanban-fill me-1"></i> Proyectos
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-link-custom" href="/contacto">
                        <i class="bi bi-envelope-fill me-1"></i> Contacto
                    </a>
                </li>

            </ul>

            <!-- ICONOS DERECHA -->
            <div class="d-flex align-items-center gap-3">

                <!-- LINKEDIN -->
                <a href="https://www.linkedin.com/in/juan-carlos-mejias"
                    target="_blank"
                    class="text-white fs-5">
                    <i class="bi bi-linkedin"></i>
                </a>

                <!-- MAIL -->
                <a href="mailto:juancarlosmejias.it@outlook.com"
                    class="text-white fs-5">
                    <i class="bi bi-envelope-fill"></i>
                </a>

                <!-- WHATSAPP -->
                <a href="https://wa.me/5491164369138"
                    target="_blank"
                    class="text-white fs-5">
                    <i class="bi bi-whatsapp"></i>
                </a>

            </div>

        </div>
    </div>
</nav>






    <!-- CONTENIDO PRINCIPAL -->
    <main class="container py-5 fade-in" style="background: transparent;padding-top: 60px;">

        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="custom-footer">
        <div class="footer-container">

            <!-- Columna izquierda: Logo -->
            <div class="footer-col">
                <img src="{{ asset('images/Logojcm.png') }}" alt="Logo" class="footer-logo">


                <div class="footer-social">
                    <a href="https://www.linkedin.com/in/juan-carlos-mejias" target="_blank"><i class="bi bi-linkedin"></i></a>
                    <a href="mailto:juancarlosmejias.it@outlook.com?subject=Contacto%20Laboral&body=Hola%20Juan%2C%20te%20escribo%20por%20tu%20perfil."><i class="bi bi-envelope-fill"></i></a>

                    <a href="https://wa.me/5491164369138" target="_blank" class="contact-item">

                        <i class="bi bi-whatsapp"></i>
                    </a>
                </div>
            </div>

            <!-- Columna del medio: Navegación -->
            <div class="footer-col">
                <ul class="footer-nav">
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/sobre-mi">Sobre mí</a></li>
                    <li><a href="/proyectos">Proyectos</a></li>
                    <li><a href="/contacto">Contacto</a></li>
                </ul>
            </div>

            <!-- Columna derecha: Contacto -->
            <div class="footer-nav footer-contact">
                <p><i class="bi bi-envelope"></i>juancarlosmejias.it@outlook.com</p>
                <p><i class="bi bi-telephone"></i> +54 9 11 6436 9138</p>
            </div>

        </div>

        <hr class="footer-divider">
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const form = document.getElementById('contactForm');
            const nameInput = document.getElementById('name');
            const emailInput = document.getElementById('email');
            const messageInput = document.getElementById('message');

            // helpers
            const findWrapper = el => el.closest('.input-wrapper');
            const setValid = (el, msgText = '') => {
                const w = findWrapper(el);
                w.classList.remove('invalid');
                w.classList.add('valid');
                el.classList.remove('is-invalid');
                el.classList.add('is-valid');
                const msg = w.querySelector('.validation-msg');
                msg.textContent = msgText;
                msg.className = 'validation-msg success';
            };
            const setInvalid = (el, msgText = '') => {
                const w = findWrapper(el);
                w.classList.remove('valid');
                w.classList.add('invalid');
                el.classList.remove('is-valid');
                el.classList.add('is-invalid');
                const msg = w.querySelector('.validation-msg');
                msg.textContent = msgText;
                msg.className = 'validation-msg error';
            };

            // validation rules
            const nameRegex = /^[A-Za-zÁÉÍÓÚÜÑáéíóúüñ\s]+$/;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            function validateName() {
                const v = nameInput.value.trim();
                if (v === '') {
                    setInvalid(nameInput, 'El nombre es obligatorio.');
                    return false;
                }
                if (!nameRegex.test(v)) {
                    setInvalid(nameInput, 'Solo se permiten letras y espacios.');
                    return false;
                }
                setValid(nameInput, '✓ Nombre válido');
                return true;
            }

            function validateEmail() {
                const v = emailInput.value.trim();
                if (v === '') {
                    setInvalid(emailInput, 'El correo es obligatorio.');
                    return false;
                }
                if (!emailRegex.test(v)) {
                    setInvalid(emailInput, 'Formato de correo no válido.');
                    return false;
                }
                setValid(emailInput, '✓ Email válido');
                return true;
            }

            function validateMessage() {
                const v = messageInput.value.trim();
                if (v.length < 10) {
                    setInvalid(messageInput, 'El mensaje debe tener al menos 10 caracteres.');
                    return false;
                }
                setValid(messageInput, '✓ Mensaje válido');
                return true;
            }

            // live events
            nameInput.addEventListener('input', validateName);
            emailInput.addEventListener('input', validateEmail);
            messageInput.addEventListener('input', validateMessage);

            // on blur validate too
            [nameInput, emailInput, messageInput].forEach(el => el.addEventListener('blur', () => {
                if (el === nameInput) validateName();
                if (el === emailInput) validateEmail();
                if (el === messageInput) validateMessage();
            }));

            // Prevent paste numbers into name (helpful)
            nameInput.addEventListener('paste', (e) => {
                const pasted = (e.clipboardData || window.clipboardData).getData('text');
                if (!nameRegex.test(pasted)) {
                    e.preventDefault();
                }
            });

            // Final submit: block if invalid
            form.addEventListener('submit', (e) => {
                const v1 = validateName();
                const v2 = validateEmail();
                const v3 = validateMessage();
                if (!(v1 && v2 && v3)) {
                    e.preventDefault();
                    // small shake animation if you like (optional)
                    const firstInvalid = form.querySelector('.is-invalid') || form.querySelector('.invalid');
                    if (firstInvalid) {
                        firstInvalid.scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });
                    }
                } else {
                    // allow submit: you can show loading state on button here if wanted
                }
            });
        });
    </script>



</body>

</html>