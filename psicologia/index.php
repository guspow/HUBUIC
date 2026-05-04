<?php ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psicología y Psicoanálisis</title>
    <meta name="description" content="PSICOLOGÍA Y PSICOÁNALISIS">
    <link rel="icon" href="https://www.uic.mx/licenciaturas/wp-content/uploads/favicon_uic.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --program-color: #83bc41;
        }
    </style>
    <link rel="stylesheet" href="../css/aside_menu.css">
    <link rel="stylesheet" href="../css/content.css">
    <script>
        document.write('<link rel="stylesheet" href="../css/movil.css?v=' + Date.now() + '">');
    </script>

    <!-- ══ OPEN GRAPH ══ -->
    <link rel="canonical" href="https://www.uic.mx/psicologia">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Psicología y Psicoanálisis · UIC México">
    <meta property="og:description" content="Licenciatura, Maestría, Doctorado y Postdoctorado en Psicología y Psicoanálisis en la UIC.">
    <meta property="og:image" content="https://www.uic.mx/psicologia/imagenes/Psicologiaypsicoanalisis.jpg">
    <meta property="og:url" content="https://www.uic.mx/psicologia">
    <meta property="og:locale" content="es_MX">

    <!-- ══ SCHEMA.ORG JSON-LD ══ -->

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [{
                    "@type": ["CollegeOrUniversity", "EducationalOrganization"],
                    "@id": "https://www.uic.mx/psicologia/#org",
                    "name": "Universidad Intercontinental",
                    "alternateName": "UIC",
                    "url": "https://www.uic.edu.mx",
                    "logo": "https://www.uic.mx/licenciaturas/wp-content/uploads/2024/05/Logo-50-Universidad-Intercontinental-horizontal-blanco-scaled.png",
                    "image": "https://www.uic.mx/ia-html/UIC2/imagenes/Psicologiaypsicoanalisis.jpg",
                    "address": {
                        "@type": "PostalAddress",
                        "addressLocality": "Ciudad de México",
                        "addressCountry": "MX",
                        "streetAddress": "Avenida Insurgentes Sur 4303, Colonia Santa Úrsula Xitla, Alcaldía Tlalpan",
                        "postalCode": "14420"
                    },
                    "sameAs": ["https://www.facebook.com/UICMexico", "https://www.instagram.com/uic_mexico", "https://www.youtube.com/@UICeduMx2014", "https://twitter.com/uicmx?lang=es", "https://mx.linkedin.com/school/universidad-intercontinental", "https://www.tiktok.com/@uic.mx"]
                },
                {
                    "@type": "Course",
                    "@id": "#lic",
                    "name": "Licenciatura en Psicología",
                    "description": "Programa de licenciatura que forma psicólogos con competencias clínicas, educativas, neuropsicológicas y de investigación. Disponible en modalidad escolarizada (4 años), a distancia (2 años 8 meses) y en línea (2 años 3 meses).",
                    "provider": {
                        "@id": "https://www.uic.mx/psicologia/#org"
                    },
                    "teaches": ["Psicología clínica", "Evaluación psicológica", "Neuropsicología", "Psicopatología", "Intervención psicoeducativa", "Psicología de la salud"],
                    "courseMode": ["onsite", "online", "blended"],
                    "hasCourseInstance": [{
                            "@type": "CourseInstance",
                            "courseMode": "onsite",
                            "name": "Modalidad Escolarizada",
                            "duration": "P4Y"
                        },
                        {
                            "@type": "CourseInstance",
                            "courseMode": "online",
                            "name": "Modalidad a Distancia",
                            "duration": "P2Y8M"
                        },
                        {
                            "@type": "CourseInstance",
                            "courseMode": "blended",
                            "name": "Modalidad en Línea",
                            "duration": "P2Y3M"
                        }
                    ],
                    "instructor": {
                        "@type": "Person",
                        "name": "Mtra. Alejandra López Valenzuela",
                        "jobTitle": "Directora de la Licenciatura en Psicología",
                        "worksFor": {
                            "@id": "https://www.uic.edu.mx/#org"
                        }
                    }
                },
                {
                    "@type": "Course",
                    "@id": "#mst",
                    "name": "Maestría en Psicoterapia Psicoanalítica",
                    "description": "Posgrado de especialización clínica para psicólogos titulados. Forma psicoterapeutas en la práctica psicoanalítica contemporánea y relacional. Modalidad mixta, 5 semestres.",
                    "provider": {
                        "@id": "https://www.uic.mx/psicologia/#org"
                    },
                    "educationalLevel": "Maestría",
                    "teaches": ["Psicoterapia psicoanalítica", "Psicoanálisis relacional", "Supervisión clínica", "Neuropsicoanálisis", "Metodología cualitativa", "Diagnóstico psicodinámico"],
                    "courseMode": "blended",
                    "hasCourseInstance": [{
                        "@type": "CourseInstance",
                        "courseMode": "blended",
                        "name": "Modalidad Mixta",
                        "duration": "P2Y6M"
                    }],
                    "instructor": {
                        "@type": "Person",
                        "@id": "#dr-rva"
                    }
                },
                {
                    "@type": "Course",
                    "@id": "#doc",
                    "name": "Doctorado en Psicoanálisis",
                    "description": "Programa doctoral de alta especialización para formar investigadores y clínicos avanzados. Produce conocimiento psicoanalítico original. Modalidad mixta, 3 semestres y un verano. 4 áreas de acentuación.",
                    "provider": {
                        "@id": "https://www.uic.mx/psicologia/#org"
                    },
                    "educationalLevel": "Doctorado",
                    "teaches": ["Investigación psicoanalítica", "Clínica avanzada", "Psicoanálisis contemporáneo", "Didáctica psicoanalítica", "Neuropsicoanálisis", "Ética psicoanalítica"],
                    "courseMode": "blended",
                    "hasCourseInstance": [{
                        "@type": "CourseInstance",
                        "courseMode": "blended",
                        "name": "Modalidad Mixta",
                        "duration": "P1Y6M"
                    }],
                    "instructor": {
                        "@type": "Person",
                        "@id": "#dr-rva"
                    }
                },
                {
                    "@type": "Course",
                    "@id": "#post",
                    "name": "Postdoctorado en Psicoanálisis Contemporáneo",
                    "description": "Programa postdoctoral para doctores en ejercicio. Actualización en psicoanálisis relacional, intersubjetivo y las fronteras actuales del campo. 100% a distancia, 3 semestres. Cuerpo docente internacional.",
                    "provider": {
                        "@id": "https://www.uic.mx/psicologia/#org"
                    },
                    "educationalLevel": "Postdoctorado",
                    "teaches": ["Psicoanálisis relacional", "Psicoanálisis intersubjetivo", "Modelos del inconsciente", "Investigación postdoctoral", "Neuropsicoanálisis avanzado"],
                    "courseMode": "online",
                    "hasCourseInstance": [{
                        "@type": "CourseInstance",
                        "courseMode": "online",
                        "name": "Modalidad a Distancia",
                        "duration": "P1Y6M"
                    }],
                    "instructor": {
                        "@type": "Person",
                        "@id": "#dr-rva"
                    }
                },
                {
                    "@type": "Person",
                    "@id": "#dr-rva",
                    "name": "Dr. Roberto Vargas Arreola",
                    "jobTitle": "Director de Posgrados en Psicoanálisis",
                    "worksFor": {
                        "@id": "https://www.uic.mx/psicologia/#docentes"
                    },
                    "knowsAbout": ["Psicoanálisis relacional", "Parejas y familia contemporáneas", "Psicoanálisis en contextos actuales", "Intervención clínica psicoanalítica"],
                    "description": "Director de los programas de posgrado en psicoanálisis de la UIC. Doctor en Psicoanálisis con área en Pareja y familia. Analista y supervisor didáctico. Miembro IARPP, vocal AMPPR, secretario suplente CNPC. Director de Dasein: Espacio de Psicoterapia.",
                    "hasCredential": {
                        "@type": "EducationalOccupationalCredential",
                        "credentialCategory": "Doctor en Psicoanálisis"
                    },
                    "author": [{
                            "@type": "Book",
                            "name": "La piel del mundo: Una mirada del Psicoanálisis Relacional a las familias contemporáneas"
                        },
                        {
                            "@type": "Book",
                            "name": "La Dignidad Compartida: Ética desde el Psicoanálisis Relacional frente a la violencia y la cosificación"
                        },
                        {
                            "@type": "CreativeWork",
                            "name": "PRAD – Perfil Relacional para Adolescentes (instrumento clínico)"
                        }
                    ]
                },
                {
                    "@type": "FAQPage",
                    "mainEntity": [{
                            "@type": "Question",
                            "name": "¿Qué programas de psicología ofrece la Universidad Intercontinental?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "La UIC ofrece cuatro programas: Licenciatura en Psicología (escolarizada, distancia y en línea), Maestría en Psicoterapia Psicoanalítica (mixta, 5 semestres), Doctorado en Psicoanálisis (mixta, 3 semestres + verano) y Postdoctorado en Psicoanálisis Contemporáneo (a distancia, 3 semestres)."
                            }
                        },
                        {
                            "@type": "Question",
                            "name": "¿Cuál es la diferencia entre la Maestría en Psicoterapia Psicoanalítica y el Doctorado en Psicoanálisis de la UIC?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "La Maestría privilegia la formación clínica aplicada: el alumno desarrolla habilidades para atender pacientes. El Doctorado se orienta a la producción original de conocimiento psicoanalítico: el doctorando investiga, teoriza y genera aportes al campo. En el doctorado, el caso clínico es fuente epistemológica, no solo práctica."
                            }
                        },
                        {
                            "@type": "Question",
                            "name": "¿La Licenciatura en Psicología de la UIC está disponible en línea?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "Sí. La Licenciatura en Psicología se ofrece en modalidad escolarizada (4 años), a distancia (aprox. 2 años 8 meses) y en línea (aprox. 2 años 3 meses). Todas las modalidades tienen el mismo plan de estudios y respaldo académico."
                            }
                        },
                        {
                            "@type": "Question",
                            "name": "¿A quién va dirigido el Postdoctorado en Psicoanálisis Contemporáneo de la UIC?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "A doctores en ejercicio que buscan actualización en las corrientes más recientes del psicoanálisis relacional e intersubjetivo. El programa es 100% a distancia, con docentes internacionales de España, Chile y Argentina."
                            }
                        },
                        {
                            "@type": "Question",
                            "name": "¿Qué perfil de ingreso se requiere para el Doctorado en Psicoanálisis de la UIC?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "Título de maestría en psicología, psicoterapia, salud mental, pedagogía o humanidades con componente clínico. Expediente sobresaliente, conocimientos sólidos de las escuelas psicoanalíticas, psicopatología dinámica y técnica psicoanalítica."
                            }
                        },
                        {
                            "@type": "Question",
                            "name": "¿Qué diferencia a la Licenciatura en Psicología de la UIC de otras universidades?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "La UIC destaca por integrar una perspectiva humanista y psicoanalítica que complementa los enfoques empíricos tradicionales. Además, te formarás con un cuerpo docente de alto nivel que incluye: Clínicos activos en el campo.Investigadores pertenecientes al SNI (Sistema Nacional de Investigadores). Docentes con certificaciones internacionales en TCC, DBT y neuropsicología."
                            }
                        }
                    ]
                },
                {
                    "@type": "BreadcrumbList",
                    "itemListElement": [{
                            "@type": "ListItem",
                            "position": 1,
                            "name": "Inicio",
                            "item": "https://www.uic.mx/psicologia"
                        },
                        {
                            "@type": "ListItem",
                            "position": 2,
                            "name": "Programas",
                            "item": "https://www.uic.mx/psicologia/#programas"
                        },
                        {
                            "@type": "ListItem",
                            "position": 3,
                            "name": "Psicología y Psicoanálisis",
                            "item": "https://www.uic.mx/psicologia/#programas"
                        }
                    ]
                }

            ]
        }
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NFSZ7BH');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GTM-NFSZ7BHb"></script>
    <script>
        sessionStorage.clear();
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'G-L9RCMVPSV1']);
        _gaq.push(['_trackPageview']);
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Fin Analytics G4 por codigo-->
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NFSZ7BH"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- ==================== HEADER COMPLETO ==================== -->
    <!-- ================= HEADER ================= -->
    <div class="site-wrapper">
        <header class="site-header">
            <div class="header-main">
                <div class="header-inner">
                    <!-- izquierda -->
                    <div class="header-left">
                        <button class="mobile-menu-toggle open-side-menu" aria-label="Menú">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="logo">
                            <a href="https://uic.mx/">
                                <img src="https://www.uic.mx/licenciaturas/wp-content/uploads/2024/05/Logo-50-Universidad-Intercontinental-horizontal-blanco-scaled.png"
                                    alt="Universidad Intercontinental">
                            </a>
                        </div>
                    </div>

                    <!-- buscador -->
                    <div class="search-bar">
                        <input type="text">
                        <button type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>

                    <!-- botones derecha -->
                    <div class="header-buttons">
                        <a href="https://servicios2.uic.edu.mx/Estudiantes/Paginas/Login.aspx" class="btn btn-outline"> Estudiantes </a>
                        <a href="https://www.uic.mx/contacto/" class="btn btn-primary"> Admisión </a>
                    </div>

                </div>

                <div class="header-subnav">
                    <div class="subnav-inner">
                        <a href="#todos"> Todos los programas</a>
                        <a href="#programas" class="menu-link L" data-program="licenciatura"> Licenciatura</a>
                        <a href="#programas" class="menu-link M" data-program="maestria"> Maestría</a>
                        <a href="#programas" class="menu-link D" data-program="doctorado"> Doctorado</a>
                        <a href="#programas" class="menu-link P" data-program="postdoctorado"> Postdoctorado</a>
                        <a href="#docentes"> Cuerpo docente</a>
                        <!-- <a href="#testimonios"> Testimonios</a> -->
                        <a href="#clinicas"> Clínicas</a>
                        <a href="#reconocimientos"> Reconocimientos</a>
                    </div>
                </div>
            </div>

        </header>

        <!-- CONTENIDO -->
        <main class="main-content">
            <!-- HERO SECTION -->
            <section class="hero-section">
                <!-- Imagen de fondo fija -->
                <div class="hero-image-container">
                    <img src="../imagenes/Psicologiaypsicoanalisis.jpg" alt="Fondo UIC" class="hero-image">
                    <!-- "https://www.uic.mx/licenciaturas/wp-content/uploads/back_row01-licenciaturas.jpg"  -->
                </div>

                <!-- Overlay (capa azul) -->
                <div class="hero-overlay"></div>

                <!-- Contenido HERO-->
                <div class="container hero-inner">
                    <!-- Lado Izquierdo -->
                    <div class="hero-content">
                        <h1 class="hero-title">Psicología y <span style="color: #fdcb70;">Psicoanálisis</span></h1>
                        <p class="hero-description">
                            <strong style="font-weight: bold;">Fórmate con pacientes reales: Tu carrera en Psicología y Psicoanálisis comienza aquí.<br><br>
                                En la UIC no simulamos la clínica, la vives. Desarrolla la seguridad para ejercer y construir un consultorio exitoso desde la licenciatura hasta el postdoctorado.
                                Regístrate ahora y descarga los planes de estudio completos.<br><br>
                        </p>
                        <!-- <p class="hero-subtitle">SÍ. EN LA UIC ES POSIBLE</p> -->
                    </div>

                    <!-- LADO DERECHO -->
                    <div class="hero-stats">

                        <div class="stats-grid">

                            <div class="stat-card">
                                <div class="stat-number">4</div>
                                <div class="stat-text">
                                    Programas de formación especializados
                                </div>
                            </div>

                            <div class="stat-card">
                                <div class="stat-number">3</div>
                                <div class="stat-text">
                                    Modalidades de estudio disponibles
                                </div>
                            </div>

                            <div class="stat-card">
                                <div class="stat-number">+25</div>
                                <div class="stat-text">
                                    Docentes activos con práctica clínica
                                </div>
                            </div>

                            <div class="stat-card">
                                <div class="stat-number">IARPP</div>
                                <div class="stat-text">
                                    Afiliación internacional activa
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="hero-line">

                </div>

            </section>
            <!-- OFERTA SECTION -->
            <section class="oferta-section" id="todos">
                <div class="container">

                    <span class="oferta-label">OFERTA ACADÉMICA COMPLETA</span>

                    <h2 class="oferta-title">
                        Elige tu nivel de formación<br>en psicología
                    </h2>

                    <p class="oferta-desc">
                        Un itinerario académico completo en ciencias de la mente: desde la formación profesional inicial hasta la investigación postdoctoral de vanguardia.
                    </p>

                    <div class="oferta-grid">

                        <!-- CARD 1 -->
                        <div class="oferta-card lic">
                            <span class="tag">LICENCIATURA</span>
                            <h3>Psicología</h3>
                            <p>Formación integral en evaluación, intervención clínica, salud y neuropsicología.</p>

                            <div class="badges">
                                <span>Escolarizada</span>
                                <span>A distancia</span>
                                <span>En línea</span>
                            </div>
                            <hr class="program-divider">
                            <a href="#detalle-programa" class="link ver-programa" data-program="licenciatura"> Ver programa → </a>
                        </div>

                        <!-- CARD 2 -->
                        <div class="oferta-card mae">
                            <span class="tag">MAESTRÍA</span>
                            <h3>Psicoterapia Psicoanalítica</h3>
                            <p>Especialización clínica psicoanalítica relacional para psicólogos titulados. 5 semestres.</p>

                            <div class="badges">
                                <span>Modalidad mixta</span>
                                <span>Clínica real</span>
                            </div>
                            <hr class="program-divider">
                            <a href="#detalle-programa" class="link ver-programa" data-program="maestria"> Ver programa → </a>
                        </div>

                        <!-- CARD 3 -->
                        <div class="oferta-card doc">
                            <span class="tag">DOCTORADO</span>
                            <h3>Psicoanálisis</h3>
                            <p>Alta especialización para producir conocimiento psicoanalítico original. 4 acentuaciones.</p>

                            <div class="badges">
                                <span>Modalidad mixta</span>
                                <span>3 sem + verano</span>
                            </div>
                            <hr class="program-divider">
                            <a href="#detalle-programa" class="link ver-programa" data-program="doctorado"> Ver programa → </a>
                        </div>

                        <!-- CARD 4 -->
                        <div class="oferta-card post">
                            <span class="tag">POSTDOCTORADO</span>
                            <h3>Psicoanálisis Contemporáneo</h3>
                            <p>Actualización de alto nivel para doctores. Docentes internacionales. 100% en línea.</p>

                            <div class="badges">
                                <span>Internacional</span>
                            </div>
                            <hr class="program-divider">
                            <a href="#detalle-programa" class="link ver-programa" data-program="postdoctorado"> Ver programa → </a>
                        </div>

                    </div>

                </div>
            </section>

            <!-- PROGRAMA TABS -->
            <section class="programas-section" id="programas">

                <!-- <div clas="conoce-mas">Conoce más sobre nuestros progrmas</div> -->
                <div class="container">
                    <h2 class="oferta-title">
                        Conoce más sobre nuestros programas
                    </h2>
                    <div class="program-tabs">

                        <button class="tab-btn active" data-program="licenciatura">Licenciatura en <br> <strong>PSICOLOGÍA</strong> </button>
                        <button class="tab-btn" data-program="maestria">Maestría en <br> <strong>PSICOTERAPIA PSICOANALÍTICA</strong></button>
                        <button class="tab-btn" data-program="doctorado">Doctorado en <br> <strong>PSICOANÁLISIS</strong></button>
                        <button class="tab-btn" data-program="postdoctorado">Postdoctorado en <br> <strong>PSICOANÁLISIS CONTEMPORÁNEO</strong></button>

                    </div>

                    <section class="detalle-content" id="detalle-programa">
                        <!-- CONTENIDOS -->
                        <div class="program-content">

                            <!-- LICENCIATURA -->

                            <div class="program-panel active" data-program="licenciatura">
                                <div class="program-detail">

                                    <!-- TOP: info + tabla -->
                                    <div class="program-top">

                                        <!-- LEFT -->
                                        <div class="program-info">
                                            <span class="program-label">LICENCIATURA EN</span>
                                            <h2>Psicología</h2>

                                            <p>
                                                Formación integral para comprender el comportamiento humano y acompañar personas en contextos clínicos, educativos, organizacionales y comunitarios.
                                            </p>

                                            <p class="program-highlight">
                                                ➜ <span style="font-weight: bold;"> Tres modalidades para adaptarse a tu vida.</span>
                                            </p>
                                        </div>

                                        <!-- RIGHT -->
                                        <div class="program-box">
                                            <h3>Datos del programa</h3>

                                            <ul>
                                                <li><span>Nivel</span><strong>Licenciatura</strong></li>
                                                <li><span>Modalidades</span><strong>Escolarizada | A distancia | En línea</strong></li>
                                                <li><span>Duración</span><strong>4 años | 2a 8m | 2a 3m</strong></li>
                                                <li><span>Área</span><strong>Ciencias de la Salud</strong></li>
                                                <li><span>Directora</span><strong>Mtra. Alejandra López Valenzuela</strong></li>
                                            </ul>
                                        </div>

                                    </div>

                                    <!-- CARDS -->
                                    <div class="program-cards">

                                        <div class="program-card">
                                            <h4>¿QUÉ APRENDERÁS?</h4>
                                            <ul>
                                                <li>Evaluación e intervención psicológica</li>
                                                <li>Psicopatología y diagnóstico clínico</li>
                                                <li>Neuropsicología y biología del comportamiento</li>
                                                <li>Teorías de la personalidad y del desarrollo</li>
                                                <li>Psicología de la salud y medicina conductual</li>
                                                <li>Metodología e investigación científica</li>
                                            </ul>
                                        </div>

                                        <div class="program-card">
                                            <h4>CAMPO LABORAL</h4>
                                            <ul>
                                                <li>Consulta clínica privada y hospitalaria</li>
                                                <li>Instituciones de salud pública y privada</li>
                                                <li>Centros educativos y psicopedagógicos</li>
                                                <li>Recursos humanos y desarrollo organizacional</li>
                                                <li>Intervención comunitaria</li>
                                                <li>Investigación y docencia universitaria</li>
                                            </ul>
                                        </div>

                                        <div class="program-card">
                                            <h4>PERFIL DE INGRESO IDEAL</h4>
                                            <ul>
                                                <li>Interés genuino en el comportamiento humano</li>
                                                <li>Habilidades para la escucha empática</li>
                                                <li>Apertura a la reflexión crítica</li>
                                                <li>Disposición para práctica clínica supervisada</li>
                                                <li>Bachillerato terminado (cualquier área)</li>
                                            </ul>
                                        </div>

                                    </div>
                                    <!-- PREGUNTAS FRECUENTES -->
                                    <div class="faq-section">

                                        <h3 class="faq-title">Preguntas frecuentes</h3>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿En qué modalidades se imparte la Licenciatura en Psicología de la UIC?
                                            </button>
                                            <div class="faq-answer">
                                                <p>
                                                    La Licenciatura en Psicología de la UIC se imparte en <strong>tres modalidades distintas</strong>
                                                    que comparten el mismo plan de estudios y calidad académica:</p>
                                                <ul class="lista-fa">
                                                    <li><strong> Escolarizada (Presencial):</strong> Clases en campus con una duración de 4 años.</li>
                                                    <li><strong> A distancia:</strong> Uso de plataforma virtual con sesiones online; duración de 2 años y 8 meses (idealmente).<br></li>
                                                    <li><strong> En línea:</strong> Formato 100% en línea, tú decides cuándo estudiar, optimizado para una duración de 2 años
                                                        y 3 meses (llevando 2 materias de forma continua y sin interrupciones).</li>
                                                </ul>

                                            </div>
                                        </div>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿Cuál es el campo laboral de un egresado de la Licenciatura en Psicología de la UIC?
                                            </button>
                                            <div class="faq-answer">
                                                <p>
                                                    El campo laboral de un psicólogo egresado de la UIC es extenso debido a una formación integral que abarca las perspectivas clínica,
                                                    psicoanalítica, cognitivo-conductual y neuropsicológica. Podrás desempeñarte como:</p>
                                                <ul class="lista-fa">
                                                    <li> <strong>Psicólogo Clínico:</strong> En instituciones de salud o consulta privada.</li>
                                                    <li> <strong>Evaluador Psicológico:</strong> Especialista en diagnóstico y psicometría.</li>
                                                    <li> <strong>Interventor Psicoeducativo:</strong> Apoyo y desarrollo en entornos escolares.</li>
                                                    <li> <strong>Especialista en Capital Humano:</strong> Reclutamiento, selección y desarrollo organizacional.</li>
                                                    <li> <strong>Investigador:</strong> Generación de conocimiento científico en salud mental.</li>
                                                </ul>

                                            </div>
                                        </div>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿La Licenciatura en Psicología de la UIC tiene práctica clínica con pacientes reales?
                                            </button>
                                            <div class="faq-answer">
                                                <p>
                                                    Sí, la práctica clínica con pacientes reales es un pilar fundamental de nuestra licenciatura.
                                                    Los estudiantes realizan sus prácticas bajo supervisión directa de profesores
                                                    clínicos activos en instalaciones universitarias propias como:
                                                </p>
                                                <ul class="lista-fa">
                                                    <li> <strong>Centro de Atención a la Salud Integral "ASI":</strong> Enfoque en salud general y comunitaria.</li>
                                                    <li> <strong>Centro Universitario de Atención a la Infancia:</strong> Especializado en intervención infantil.</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿Qué diferencia a la Licenciatura en Psicología de la UIC de otras universidades?
                                            </button>
                                            <div class="faq-answer">
                                                <p>
                                                    El principal diferenciador de la UIC es la <strong>integración de una perspectiva humanista y
                                                        psicoanalítica</strong> que complementa los enfoques empíricos y científicos tradicionales.
                                                    Además, la excelencia académica está respaldada por un cuerpo docente de élite que incluye:
                                                </p>
                                                <ul class="lista-fa">
                                                    <li> <strong>Clínicos activos</strong> con experiencia directa en pacientes.</li>
                                                    <li> <strong>Investigadores del SNI </strong>(Sistema Nacional de Investigadores).</li>
                                                    <li> <strong>Especialistas certificados </strong> internacionalmente en TCC, DBT y neuropsicología.</strong></li>
                                                </ul>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <!-- MAESTRIA -->
                            <div class="program-panel" data-program="maestria">
                                <div class="program-detail">

                                    <!-- TOP: info + tabla -->
                                    <div class="program-top">

                                        <!-- LEFT -->
                                        <div class="program-info">
                                            <span class="program-label">MAESTRÍA EN</span>
                                            <h2>Psicoterapia Psicoanalítica</h2>

                                            <p>
                                                Especialización clínica para psicólogos titulados que buscan competencias
                                                profundas en la práctica psicoterapéutica desde una perspectiva psicoanalítica contemporánea y relacional.
                                            </p>

                                            <p class="program-highlight">
                                                ➜ <span style="font-weight: bold;"> Cinco semestres con clínica supervisada real.</span>
                                            </p>
                                        </div>

                                        <!-- RIGHT -->
                                        <div class="program-box">
                                            <h3>Datos del programa</h3>

                                            <ul>
                                                <li><span>Nivel</span><strong>Maestría</strong></li>
                                                <li><span>Modalidades</span><strong>Mixta (presencial + en línea)</strong></li>
                                                <li><span>Duración</span><strong>5 semestres (16 semanas c/u)</strong></li>
                                                <li><span>Área</span><strong>Posgrados en Psicoanálisis</strong></li>
                                                <li><span>Director</span><strong>Dr. Roberto Vargas Arreola</strong></li>
                                            </ul>
                                        </div>

                                    </div>

                                    <!-- CARDS -->
                                    <div class="program-cards">

                                        <div class="program-card">
                                            <h4>COMPETENCIAS QUE DESARROLLAS</h4>
                                            <ul>
                                                <li>Técnica psicoanalítica y psicoterapéutica</li>
                                                <li>Supervisión y diagnóstico psicodinámico</li>
                                                <li>Metodología cualitativa aplicada</li>
                                                <li>Psicosomática y corporalidad</li>
                                                <li>Neuropsicoanálisis introductorio</li>
                                                <li>Organizaciones de la personalidad</li>
                                            </ul>
                                        </div>

                                        <div class="program-card">
                                            <h4>¿A QUIÉN ESTÁ DIRIGIDA?</h4>
                                            <ul>
                                                <li>Psicólogos titulados con vocación clínica</li>
                                                <li>Clínicos que buscan especialización psicoanalítica</li>
                                                <li>Profesionales en consulta privada</li>
                                                <li>Docentes de psicología clínica</li>
                                                <li>Quienes proyectan continuar al doctorado</li>
                                            </ul>
                                        </div>

                                        <div class="program-card">
                                            <h4>SALIDAS PROFESIONALES</h4>
                                            <ul>
                                                <li>Consulta privada de psicoterapia</li>
                                                <li>Clínicas e instituciones de salud mental</li>
                                                <li>Supervisión clínica de equipos</li>
                                                <li>Docencia en posgrados</li>
                                                <li>Clínicas universitarias y hospitalarias</li>
                                            </ul>
                                        </div>

                                    </div>
                                    <!-- PREGUNTAS FRECUENTES -->
                                    <div class="faq-section">

                                        <h3 class="faq-title">Preguntas frecuentes</h3>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿En qué se diferencia la Maestría en Psicoterapia Psicoanalítica del Doctorado en Psicoanálisis?
                                            </button>
                                            <div class="faq-answer">
                                                <p>
                                                    La diferencia fundamental radica en el enfoque: la <strong>Maestría es de carácter profesionalizante (práctica clínica)</strong>,
                                                    mientras que el <strong>Doctorado es de carácter investigativo (teoría y conocimiento)</strong>.
                                                </p>
                                                <ul class="lista-fa">
                                                    <li> <strong> Maestría:</strong> Su núcleo es el desarrollo de habilidades clínicas para ejercer como psicoterapeuta y atender pacientes directamente</li>
                                                    <li> <strong> Doctorado:</strong> Se orienta a la producción de conocimiento original, utilizando la clínica como fuente de investigación y teorización.</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿La maestría incluye supervisión de casos con pacientes reales?
                                            </button>
                                            <div class="faq-answer">
                                                <p>
                                                    Sí, la supervisión clínica de casos reales es el eje central de esta maestría.
                                                    La práctica se realiza a través de la <strong>Clínica Universitaria CUPPIE</strong> de la UIC, bajo la coordinación del Dr. Roberto Reyes,
                                                    destacado psiquiatra y doctor en psicoanálisis, garantizando un acompañamiento profesional de primer nivel.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿Qué perfil de ingreso se requiere para la Maestría en Psicoterapia Psicoanalítica?
                                            </button>
                                            <div class="faq-answer">
                                                <p>
                                                    Para ingresar a este posgrado, el aspirante debe cumplir con los siguientes requisitos profesionales y personales:
                                                </p>
                                                <ul class="lista-fa">
                                                    <li><strong>Título de licenciatura:</strong> En Psicología o áreas de la salud afines.</li>
                                                    <li><strong>Conocimientos técnicos:</strong> Bases sólidas en psicopatología y técnica de entrevista clínica.</li>
                                                    <li><strong>Motivación ética:</strong> Compromiso genuino con la práctica psicoterapéutica y disposición para mantener un proceso de análisis personal.</li>
                                                </ul>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <!-- DOCTORADO -->
                            <div class="program-panel" data-program="doctorado">
                                <div class="program-detail">

                                    <!-- TOP: info + tabla -->
                                    <div class="program-top">

                                        <!-- LEFT -->
                                        <div class="program-info">
                                            <span class="program-label">DOCTORADO EN</span>
                                            <h2>Psicoanálisis</h2>
                                            <p>
                                                Alta especialización para formar investigadores y pensadores del psicoanálisis
                                                capaces de producir conocimiento que transforme la realidad clínica y social.
                                            </p>
                                            <p class="program-highlight">
                                                ➜ <span style="font-weight: bold;"> Cuatro áreas de acentuación optativas para <br>
                                                    personalizar la formación doctoral.</span>
                                            </p>
                                        </div>

                                        <!-- RIGHT -->
                                        <div class="program-box">
                                            <h3>Datos del programa</h3>

                                            <ul>
                                                <li><span>Nivel</span><strong>Doctorado</strong></li>
                                                <li><span>Modalidades</span><strong>Mixta</strong></li>
                                                <li><span>Duración</span><strong>3 semestres + verano</strong></li>
                                                <li><span>Acentuaciones</span><strong>Niños · Parejas · Neuropsi · Grupos</strong></li>
                                                <li><span>Director</span><strong>Dr. Roberto Vargas Arreola</strong></li>
                                            </ul>
                                        </div>

                                    </div>

                                    <!-- CARDS -->
                                    <div class="program-cards">

                                        <div class="program-card">
                                            <h4>¿QUÉ SE APRENDE EN EL DOCTORADO?</h4>
                                            <ul>
                                                <li>Producción de investigación psicoanalítica original</li>
                                                <li>Psicoanálisis freudiano y contemporáneo avanzado</li>
                                                <li>Clínica con casos complejos y de larga data</li>
                                                <li>Didáctica psicoanalítica y formación de terapeutas</li>
                                                <li>Ética y epistemología del psicoanálisis</li>
                                                <li>Intervención según área de acentuación</li>
                                            </ul>
                                        </div>

                                        <div class="program-card">
                                            <h4>SALIDAS DEL DOCTOR EN PSICOANÁLISIS</h4>
                                            <ul>
                                                <li>Práctica clínica psicoanalítica de nivel avanzado</li>
                                                <li>Docencia en posgrados y doctorados</li>
                                                <li>Dirección de tesis y formación de analistas</li>
                                                <li>Investigación académica y publicación científica</li>
                                                <li>Intervención institucional y psicosocial</li>
                                                <li>Consultoría organizacional y análisis cultural</li>
                                            </ul>
                                        </div>

                                        <div class="program-card">
                                            <h4>ÁREAS DE ACENTUACIÓN</h4>
                                            <ul>
                                                <li>Niños y adolescentes — clínica infantil y del desarrollo</li>
                                                <li>Parejas y familias — vínculos contemporáneos e intersubjetividad</li>
                                                <li>Neuropsicoanálisis — articulación con neurociencias</li>
                                                <li>Grupos e instituciones — dinámica grupal y organizacional</li>
                                            </ul>
                                        </div>

                                        <!-- <div class="program-card full">
                                            <h4>INGRESOS ESTIMADOS (INDEED MX / COMPUTRABAJO 2025–26)</h4>
                                            <ul>
                                                <li>Inicio — docencia institucional: $8,000–$15,000 / mes</li>
                                                <li>Con experiencia consolidada: $18,000–$35,000 / mes</li>
                                                <li>Clínica privada madura: $30,000–$60,000 / mes</li>
                                            </ul>
                                        </div> -->

                                    </div>
                                    <!-- PREGUNTAS FRECUENTES -->
                                    <div class="faq-section">

                                        <h3 class="faq-title">Preguntas frecuentes</h3>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿A quién le conviene estudiar el Doctorado en Psicoanálisis de la UIC?
                                            </button>
                                            <div class="faq-answer">
                                                <p>
                                                    Este doctorado es ideal para <strong>psicoterapeutas y psicoanalistas activos</strong> que desean profundizar en su técnica ante casos
                                                    complejos que los manuales estandarizados no alcanzan a cubrir.
                                                    Es el programa indicado para quienes buscan ir más allá de los enfoques tradicionales y enfrentar la singularidad clínica
                                                    con mayor rigor teórico.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿Qué hace diferente al Doctorado en Psicoanálisis frente a un Doctorado en Psicología?
                                            </button>
                                            <div class="faq-answer">
                                                <p>
                                                    La diferencia clave es la metodología de generación de conocimiento: el Doctorado en Psicología suele ser cuantitativo y empírico,
                                                    mientras que el <strong>Doctorado en Psicoanálisis de la UIC</strong> utiliza el caso clínico como el núcleo generador de teoría .
                                                    Aquí, la implicación del analista y la ética profesional son partes esenciales del trabajo de investigación doctoral.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿El Doctorado en Psicoanálisis habilita para ejercer clínica?
                                            </button>
                                            <div class="faq-answer">
                                                <p>
                                                    No por sí mismo; el proceso de clínica inicial proviene de la licenciatura y la maestría.
                                                    Sin embargo, este doctorado actúa como un <strong>catalizador profesional</strong> que te permite:
                                                </p>
                                                <ul class="lista-fa">
                                                    <li><strong>Atender casos de alta complejidad</strong> con mayor profundidad.</li>
                                                    <li>Incrementar significativamente tu <strong>posicionamiento y prestigio</strong> en el sector.</li>
                                                    <li>Convertirte en un <strong>referente académico</strong> a través de publicaciones especializadas.</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿Cuál es el futuro profesional de un Doctor en Psicoanálisis?
                                            </button>
                                            <div class="faq-answer">
                                                <p>
                                                    El egresado proyecta su carrera hacia la alta dirección académica, la formación de nuevos especialistas y el análisis cultural.
                                                    Las salidas profesionales incluyen:
                                                </p>
                                                <ul class="lista-fa">
                                                    <li><strong>Docencia y Supervisión:</strong> Profesor de posgrado y director de tesis avanzadas.</li>
                                                    <li><strong>Impacto Social:</strong> Consultoría en proyectos comunitarios sobre violencia, migración y trauma.</li>
                                                    <li><strong>Análisis Interdisciplinario:</strong> Diálogo con la filosofía, políticas públicas y humanidades.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- POSTDOC -->
                            <div class="program-panel" data-program="postdoctorado">
                                <div class="program-detail">

                                    <!-- TOP: info + tabla -->
                                    <div class="program-top">

                                        <!-- LEFT -->
                                        <div class="program-info">
                                            <span class="program-label">POSTDOCTORADO EN</span>
                                            <h2>Psicoanálisis Contemporáneo</h2>

                                            <p>
                                                El nivel más alto de formación en psicoanálisis disponible en México:
                                                para doctores en ejercicio que buscan las corrientes más recientes del campo.
                                            </p>

                                            <p class="program-highlight">
                                                ➜ <span style="font-weight: bold;"> Cuerpo docente internacional de España, Chile y Argentina. 100% a distancia.</span>
                                            </p>
                                        </div>

                                        <!-- RIGHT -->
                                        <div class="program-box">
                                            <h3>Datos del programa</h3>

                                            <ul>
                                                <li><span>Nivel</span><strong>Postdoctorado</strong></li>
                                                <li><span>Modalidad</span><strong>100% a distancia</strong></li>
                                                <li><span>Duración</span><strong>3 semestres</strong></li>
                                                <li><span>Requisito</span><strong>Grado de Doctor en área afín</strong></li>
                                                <li><span>Director</span><strong>Dr. Roberto Vargas Arreola</strong></li>
                                            </ul>
                                        </div>

                                    </div>

                                    <!-- CARDS -->
                                    <div class="program-cards">

                                        <div class="program-card">
                                            <h4>EJES DE FORMACIÓN POSTDOCTORAL</h4>
                                            <ul>
                                                <li>Psicoanálisis relacional contemporáneo</li>
                                                <li>Teorías intersubjetivas del self</li>
                                                <li>Modelos del inconsciente actuales</li>
                                                <li>Fronteras con las neurociencias</li>
                                                <li>Investigación postdoctoral avanzada</li>
                                            </ul>
                                        </div>

                                        <div class="program-card">
                                            <h4>PERFIL DEL PARTICIPANTE</h4>
                                            <ul>
                                                <li>Doctor en Psicoanálisis, Psicología o afines</li>
                                                <li>Clínico activo con práctica consolidada</li>
                                                <li>Interés en las vanguardias del campo</li>
                                                <li>Académicos en búsqueda de actualización internacional</li>
                                                <li>Investigadores del psicoanálisis</li>
                                            </ul>
                                        </div>

                                        <div class="program-card">
                                            <h4>VENTAJAS DEL PROGRAMA</h4>
                                            <ul>
                                                <li>Docentes de España, Argentina y Chile</li>
                                                <li>Modalidad 100% a distancia</li>
                                                <li>Vinculación con IARPP y redes internacionales</li>
                                                <li>Máximo nivel académico del campo en México</li>
                                                <li>Proyección hacia publicación internacional</li>
                                            </ul>
                                        </div>

                                    </div>
                                    <!-- PREGUNTAS FRECUENTES -->
                                    <div class="faq-section">

                                        <h3 class="faq-title">Preguntas frecuentes</h3>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿Qué es un Postdoctorado en Psicoanálisis y para qué sirve?
                                            </button>
                                            <div class="faq-answer">
                                                <p>
                                                    Es el <strong>máximo nivel de formación académica</strong> en este campo.
                                                    Su propósito es permitir que los doctores alcancen tres objetivos estratégicos:
                                                </p>
                                                <ul class="lista-fa">
                                                    <li><strong>Actualización de vanguardia:</strong> Especialización en psicoanálisis relacional, intersubjetivo y neuropsicoanálisis.</li>
                                                    <li><strong>Investigación de alto impacto:</strong> Desarrollo de proyectos científicos avanzados.</li>
                                                    <li><strong>Liderazgo académico: </strong> Consolidación como autoridad internacional en su especialidad.</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿El Postdoctorado en Psicoanálisis de la UIC tiene docentes internacionales?
                                            </button>
                                            <div class="faq-answer">
                                                <p>
                                                    Sí, el cuerpo docente cuenta con autoridades internacionales de renombre. Entre ellos destacan:
                                                </p>
                                                <ul class="lista-fa">
                                                    <li><strong>Dra. Laura Molet Estaper (España):</strong> Experta en trastornos de la conducta alimentaria.</li>
                                                    <li><strong>Dr. André Sassenfeld (Chile):</strong> Autor referente en psicoanálisis relacional.</li>
                                                    <li><strong>Dra. Eva Rotenberg (Argentina):</strong> Especialista en clínica de niños, adolescentes y familias.</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿Se puede estudiar el Postdoctorado sin dejar de trabajar?
                                            </button>
                                            <div class="faq-answer">
                                                <p>
                                                    Sí, el programa está diseñado específicamente para profesionales con agendas de alta exigencia.
                                                    Ofrece una estructura que facilita la conciliación laboral:
                                                </p>
                                                <ul class="lista-fa">
                                                    <li> <strong>Modalidad 100% a distancia:</strong> Sin traslados necesarios.</li>
                                                    <li> <strong>Duración estructurada:</strong> Tres semestres de formación intensiva.</li>
                                                    <li> <strong>Flexibilidad: Permite mantener activa la práctica clínica y la actividad académica simultáneamente.</li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>

            <!-- SECCION DOCENTES-->
            <section class="docentes-section" id="docentes">

                <div class="container">

                    <span class="docentes-label">AUTORIDAD ACADÉMICA</span>
                    <h2 class="docentes-title">Cuerpo docente</h2>
                    <p class="docentes-desc">
                        Profesores-investigadores activos con práctica clínica vigente y producción académica reconocida a nivel nacional e internacional.
                    </p>

                    <!-- DESTACADO -->
                    <div class="docente-destacado">
                        <div class="docente-img">
                            <img src="../imagenes/Midelvia.jpg" alt="" width="100%">
                        </div>

                        <div class="docente-info">
                            <h3>Dra. Midelvia Argelia Viveros Paulín</h3>
                            <span class="docente-cargo">
                                Directora Divisional de Ciencias de la Salud · Universidad Intercontinental
                            </span>

                            <p>
                                Doctora en Psicología y directora de la División de Ciencias de la Salud de la UIC,
                                área que agrupa la Licenciatura en Psicología y los posgrados en psicoanálisis.
                                <br>
                                Con amplia trayectoria en docencia, dirección académica e investigación,
                                ha encabezado iniciativas institucionales de salud universitaria y coordinado los centros de práctica clínica de la división.
                                Referente en psicología clínica, vínculo afectivo y salud mental dentro de la comunidad UIC.
                            </p>
                        </div>
                    </div>

                    <!-- GRID DOCENTES -->
                    <div class="docentes-grid">

                        <div class="docente-card">
                            <h4>Mtra. Alejandra López Valenzuela</h4>
                            <span>Directora · Licenciatura en Psicología</span>
                            <p>
                                Evaluación e intervención psicoeducativa.
                                Coordinadora clínica del Centro ASI — 5 años de trabajo
                                especializado con personas con condición autista y +19 años de docencia.
                                Coautora de Autismo, subjetividad e intervención psicoanalítica.
                            </p>
                        </div>

                        <div class="docente-card">
                            <h4>Dr. Roberto Vargas Arreola</h4>
                            <span>Director · Posgrados en Psicoanálisis</span>
                            <p>
                                Psicoanálisis relacional, pareja y familia contemporáneas.
                                Miembro IARPP, vocal AMPPR, secretario suplente CNPC.
                                Autor del instrumento PRAD y los libros La piel del mundo y La Dignidad Compartida.
                                Director de Dasein: Espacio de Psicoterapia.
                            </p>
                        </div>

                        <div class="docente-card">
                            <h4>Dra. Daniela Flores Mosri</h4>
                            <span>Doctorado en Psicoanálisis Contemporáneo</span>
                            <p>
                                Neuropsicoanálisis. Editora en jefe del Journal Neuropsychoanalysis (2021).
                                Coordinadora regional IARPP México. Ex-SNI.
                            </p>
                        </div>

                        <div class="docente-card">
                            <h4>Dr. José Ángel Aguilar Gil</h4>
                            <span>Doctorado en Psicoanálisis</span>
                            <p>
                                Psicoanálisis grupal y relacional, sexualidad humana.
                                Fundador del Capítulo Mexicano de la IARPP. Presidente de la AMPPR.
                            </p>
                        </div>

                        <div class="docente-card">
                            <h4>Dr. André Sassenfeld</h4>
                            <span>Doctor en Psicoanálisis (Chile)</span>
                            <p>
                                Trauma, corporalidad, psicoanálisis relacional. Autor de 9 libros.
                                Past president IARPP Chile. Director CETERE.
                            </p>
                        </div>

                        <div class="docente-card">
                            <h4>Dra. Laura Molet Estaper</h4>
                            <span>Postdoctorado en Psicoanálisis (España)</span>
                            <p>
                                Trastornos alimentarios, psicoanálisis contemporáneo.
                                Autora de El dolor es sordo, traducido al inglés.
                            </p>
                        </div>

                        <div class="docente-card">
                            <h4>Dra. Liliana Rivera Fong</h4>
                            <span>Doctorado en Psicología y Salud (UNAM)</span>
                            <p>
                                Psicooncología, TCC, medicina conductual.
                                Miembro del SNI Nivel 1 (2025–2029).
                                Tutora de maestría y doctorado UNAM.
                            </p>
                        </div>

                        <div class="docente-card">
                            <h4>Dra. Leonor García Gómez</h4>
                            <span>Doctorado en Ciencias Biológicas y de la Salud</span>
                            <p>
                                Neuropsicología, tabaquismo, conducta alimentaria.
                                SNI Nivel 1. Locutora " Chill Pill" en Ibero 90.9 FM. 31 artículos científicos.
                            </p>
                        </div>

                        <div class="docente-card">
                            <h4>Dr. Gerardo Mora</h4>
                            <span>Doctor en Psicoanálisis — Grupos e Instituciones</span>
                            <p>
                                Patologías graves, dispositivos grupales.
                                Colaborador en Canal 11, RadioFórmula y Radio UNAM. Coautor 2023.
                            </p>
                        </div>

                        <div class="docente-card">
                            <h4>Dr. William Alves de Oliveira</h4>
                            <span>Doctorado — Director Centro Medicina Conductual</span>
                            <p>
                                Trastornos alimentarios, psicoanálisis contemporáneo.
                                Autora de El dolor es sordo, traducido al inglés.
                            </p>
                        </div>

                    </div>

                </div>

            </section>

            <!-- SECCION TESTIMONIOS-->
            <section class="testimonios-section" id="testimonios" style="display:none">
                <div class="container">

                    <span class="section-label">VOCES DE EGRESADOS</span>
                    <h2 class="section-title">Quienes ya lo vivieron</h2>
                    <p class="section-description quienes">
                        Psicólogos y psicoanalistas formados en la UIC que hoy ejercen en consulta privada, instituciones y academia.
                    </p>

                    <div class="testimonios-slider">

                        <div class="testimonio active">
                            <p class="testimonio-text">
                                "La práctica clínica desde el primer año no es un slogan, es real.
                                Llegué al internado con herramientas que muchos egresados de otras universidades no tienen ni en quinto semestre."
                            </p>
                            <p class="testimonio-author">
                                <strong>Mariana G.</strong> | <span>Licenciatura en Psicología</span>
                            </p>
                            <span class="testimonio-tag">CONSULTORIO PRIVADO · CDMX</span>
                        </div>

                        <div class="testimonio">
                            <p class="testimonio-text">
                                "La Maestría me dio el marco teórico y la supervisión clínica que necesitaba para abrir consultorio con confianza.
                                Hoy tengo lista de espera. El enfoque psicoanalítico relacional cambió mi forma de escuchar."
                            </p>
                            <p class="testimonio-author">
                                <strong>Carlos T.</strong> | <span>Maestría en Psicoterapia Psicoanalítica</span>
                            </p>
                            <span class="testimonio-tag">18 PACIENTES ACTIVOS</span>
                        </div>

                        <div class="testimonio">
                            <p class="testimonio-text">
                                "Vengo de Monterrey. La modalidad mixta lo hizo posible sin dejar mi práctica.
                                Terminé el Doctorado con una tesis publicada en revista indexada y hoy dirijo un seminario de posgrado."
                            </p>
                            <p class="testimonio-author">
                                <strong>Roberto S.</strong> | <span>Egresado · Doctorado en Psicoanálisis</span>
                            </p>
                            <span class="testimonio-tag">Publicación indexada + docencia de posgrado</span>
                        </div>

                        <div class="testimonio">
                            <p class="testimonio-text">
                                "El Postdoctorado fue lo que me faltaba. Los docentes de España,
                                Chile y Argentina trajeron perspectivas que no encontré en ningún otro programa en México.
                                El psicoanálisis relacional abrió dimensiones completamente nuevas en mi trabajo."
                            </p>
                            <p class="testimonio-author">
                                <strong>Ana L.</strong> | <span>Egresada · Postdoctorado en Psicoanálisis Contemporáneo</span>
                            </p>
                            <span class="testimonio-tag">Docente internacional invitada</span>
                        </div>

                    </div>

                    <!-- DOTS -->
                    <div class="slider-dots">
                        <span class="dot active" data-index="0"></span>
                        <span class="dot" data-index="1"></span>
                        <span class="dot" data-index="2"></span>
                        <span class="dot" data-index="3"></span>
                    </div>

                </div>
            </section>

            <!-- SECCION CLINICAS -->
            <section class="clinicas-section" id="clinicas">
                <div class="container">
                    <span class="section-label">DONDE SUCEDE LA PRÁCTICA</span>
                    <div class="imagen-box">

                        <h2 class="section-title">Clínicas universitarias<br>de práctica real</h2>

                        <p class="section-description clinic">
                            La UIC no simula la clínica: la ofrece. Los estudiantes atienden población real desde los primeros semestres,
                            con supervisión directa de profesores clínicos activos.
                        </p>
                    </div>
                    <!-- GRID -->
                    <div class="clinicas-grid">

                        <!-- CARD 1 -->
                        <div class="clinica-card">
                            <div class="clinica-header">
                                <i class="fas fa-city header-icon"></i>
                                <div class="header-text">
                                    <h3>Centro de Atención a la Salud Integral <br> <span>ASI · UIC</span></h3>

                                </div>
                            </div>

                            <div class="clinica-body">
                                <p>
                                    Centro de práctica clínica supervisada coordinado por la Mtra. Alejandra López Valenzuela,
                                    donde estudiantes de la Licenciatura en Psicología atienden a personas con condición autista,
                                    niños y adolescentes con situaciones de maltrato físico y emocional, y población general.
                                    Incluye el Área de Evaluación Psicológica y seguimiento a estudiantes de la propia universidad..
                                </p>
                                <hr>
                                <div class="clinica-tags">
                                    <span>Condición autista</span>
                                    <span>Niños y adolescentes</span>
                                    <span>Evaluación psicológica</span>
                                    <span>Coord. Mtra. Alejandra López</span>
                                </div>
                            </div>
                        </div>

                        <!-- CARD 2 -->
                        <div class="clinica-card">
                            <div class="clinica-header">
                                <i class="fas fa-city header-icon"></i>
                                <div class="header-text">
                                    <h3>Centro Universitario de Atención a la Infancia <span> CUAI · UIC</span></h3>

                                </div>
                            </div>

                            <div class="clinica-body">
                                <p>
                                    Centro especializado en atención psicológica y educativa a niños y jóvenes con condición autista y psicótica.
                                    Es la primera clínica de autismo dentro de una institución educativa en México, con más de 33 años de operación.
                                    Su director clínico académico es el Mtro. Fernando Fernández Castro.
                                </p>
                                <br>
                                <hr>
                                <div class="clinica-tags">
                                    <span>Condición autista y psicótica</span>
                                    <span>+33 años de operación</span>
                                    <span>Primera en México</span>
                                    <span>Dir. Mtro. Fernández Castro</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- CARD FULL -->
                    <div class="clinica-card full">

                        <div class="clinica-header">
                            <i class="fas fa-city header-icon"></i>
                            <div class="header-text">
                                <h3>Clínica Universitaria de Psicoterapia Psicoanalítica <br><span>CUPPIE · UIC</span></h3>

                            </div>
                        </div>

                        <div class="clinica-body">
                            <p>
                                Espacio de práctica clínica supervisada en psicoterapia psicoanalítica donde alumnos de la Maestría
                                atienden pacientes reales bajo la coordinación del Dr. Roberto Reyes,
                                Psiquiatra y Doctor en Psicoanálisis Contemporáneo. Ofrece atención comunitaria accesible con encuadre psicoanalítico riguroso.
                            </p>
                            <br>
                            <hr>
                            <div class="clinica-tags">
                                <span>Psicoterapia psicoanalítica</span>
                                <span>Supervisión didáctica</span>
                                <span>Atención comunitaria</span>
                                <span>Coord. Dr. Roberto Reyes</span>
                            </div>
                        </div>
                    </div>

                    <!-- TEXTO FINAL -->
                    <div class="clinica-footer">
                        <h3>¿Por qué importa la clínica real?</h3>
                        <p>
                            La UIC opera tres centros de práctica con población real: el Centro ASI para evaluación y psicoterapia general,
                            el CUAI especializado en infancia con condición autista — primera clínica de este tipo dentro de una universidad en México,
                            con más de 33 años — y la CUPPIE donde los alumnos de la Maestría hacen psicoterapia psicoanalítica supervisada.
                            No simulaciones: casos reales desde los primeros semestres.
                        </p>
                    </div>

                </div>
            </section>

            <!-- SECCION RECONOCIMIENTOS-->
            <section class="reconocimientos-section" id="reconocimientos">

                <div class="container">

                    <span class="reconocimientos-label">RECONOCIMIENTOS Y MEMBRESÍAS</span>
                    <h2 class="reconocimientos-title">Respaldo institucional y académico</h2>
                    <p class="reconocimientos-desc">
                        La UIC forma parte de redes académicas internacionales de primer nivel.
                        Para el estudiante, esto significa acceso a comunidades de práctica, congresos, publicaciones y formación de talla mundial.
                    </p>

                    <!-- GRID reconocimientos -->
                    <div class="reconocimientos-grid">

                        <div class="reconocimiento-card">
                            <h4>IARPP</h4>
                            <span>International Association for Relational Psychoanalysis and Psychotherapy</span>
                            <p>
                                Organización internacional de referencia en psicoanálisis relacional.
                                La UIC es la única institución mexicana con afiliación activa y capítulo propio.
                            </p>
                        </div>

                        <div class="reconocimiento-card">
                            <h4>DAMPPR</h4>
                            <span>Asociación Mexicana de Psicoterapia Psicoanalítica Relacional</span>
                            <p>
                                Asociación nacional que nuclea a los principales formadores en psicoterapia psicoanalítica de México.
                                Docentes UIC son miembros fundadores y directivos.
                            </p>
                        </div>

                        <div class="reconocimiento-card">
                            <h4>CNPC</h4>
                            <span>Colegio Nacional de Psicoanalistas Clínicos</span>
                            <p>
                                Organismo de certificación y ética para psicoanalistas clínicos en México.
                                El Dr. Vargas Arreola funge como secretario suplente; varios docentes UIC son miembros activos.
                            </p>
                        </div>

                        <div class="reconocimiento-card">
                            <h4>SNI</h4>
                            <span>Sistema Nacional de Investigadores CONAHCyT</span>
                            <p>
                                Varios docentes del cuerpo académico UIC son miembros del SNI Nivel 1,
                                el máximo reconocimiento a investigadores activos en México.
                            </p>
                        </div>

                        <div class="reconocimiento-card">
                            <h4>SEP</h4>
                            <span>Reconocimiento de Validez Oficial de Estudios</span>
                            <p>
                                Todos los programas de la UIC cuentan con RVOE otorgado por la Secretaría de Educación Pública.
                                Tus estudios tienen plena validez oficial en México.
                            </p>
                        </div>

                        <div class="reconocimiento-card">
                            <h4>+45</h4>
                            <span>Años formando psicólogos y psicoanalistas en México</span>
                            <p>
                                Trayectoria que respalda la solidez académica y la red de egresados activos en todo el país y Latinoamérica.
                            </p>
                        </div>
                    </div>
                    <br>
                    <!-- DESTACADO -->
                    <div class="reconocimiento-destacado">
                        <div class="reconocimiento-info">
                            <h3>Programas con RVOE:</h3>
                            <!-- <span class="reconocimiento-cargo">
                                Validez oficial SEP en todos los programas
                            </span> -->

                            <p>
                                La Licenciatura en Psicología, la Maestría en Psicoterapia Psicoanalítica y el Doctorado en Psicoanálisis
                                cuentan con Reconocimiento de Validez Oficial de Estudios de la SEP.
                                El Postdoctorado en Psicoanálisis Contemporáneo es un programa académico avalado por la UIC, con validez en todo México.
                                <br>
                                <br>
                                <!-- <span class="reconocimiento-cargo" style="color: #fdcb70;">
                                    Tus estudios son reconocidos en todo México.
                                </span> -->
                            </p>
                        </div>
                    </div>

                </div>

            </section>

        </main>

        <!-- FOOTER -->
        <?php include '../layout/footer.php'; ?>

        <!-- ==================== FLOATING COMPONENTS ==================== -->
        <div class="floating-components">
            <!-- <button class="scroll-to-top" aria-label="Volver arriba">
            <i class="fas fa-chevron-up"></i>
            </button>
            
            <div class="whatsapp-widget">
                <button class="whatsapp-toggle" aria-label="Abrir chat de WhatsApp">
                    <i class="fab fa-whatsapp"></i>
                </button>
                <div class="whatsapp-popup hidden">
                    <div class="popup-header">
                        <i class="fas fa-comment-alt"></i>
                        <span>Atención a clientes</span>
                        <button class="close-popup"><i class="fas fa-times"></i></button>
                    </div>
                    <div class="popup-content">
                        <p>Envíanos un mensaje y nos pondremos en contacto contigo lo antes posible.</p>
                        <textarea placeholder="Escribe tu mensaje..."></textarea>
                        <a href="https://wa.me/5544398846" class="send-button" target="_blank">
                            <i class="fas fa-paper-plane"></i>
                            <span>Iniciar conversación</span>
                        </a>
                    </div>
                </div>
            </div> -->

            <a href="#" id="openFormBtn" class="btn-calendly">
                <!-- onclick="Calendly.initPopupWidget({url: 'https://calendly.com/universidad-intercontinental/sesion-informativa-licenciaturas'});return false;"> -->
                Agenda una sesión informativa
            </a>

        </div>

        <div class="form-modal" id="formModal">
            <script src='https://www.google.com/recaptcha/api.js?render=6LekquUoAAAAAGMnfbnWFjD7VfrLHLjvNOfIP-Ae'> </script>
            <script>
                grecaptcha.ready(function() {
                    grecaptcha.execute('6LekquUoAAAAAGMnfbnWFjD7VfrLHLjvNOfIP-Ae', {
                            action: 'formulario'
                        })
                        .then(function(token) {
                            var recaptchaResponse = document.getElementById('recaptchaResponse');
                            recaptchaResponse.value = token;
                        });
                });
            </script>
            <script>
                window.onload = function() {
                    var $recaptcha = document.querySelector('#g-recaptcha-response');

                    if ($recaptcha) {
                        $recaptcha.setAttribute("required", "required");
                    }
                };
            </script>


            <!-- overlay -->
            <div class="form-overlay" id="formOverlay"></div>

            <!-- contenido -->
            <div class="form-content">

                <button class="close-form" id="closeForm">&times;</button>

                <div class="form-header">
                    <h2>Agenda una sesión informativa</h2>
                    <p>Déjanos tus datos y uno de nuestros asesores te contactará</p>
                </div>

                <form id="WebToLeadForm" action="https://hook.us1.make.com/2mk3ouv2dc515gqufsd4hlmnf2atnnfg" method="POST" name="WebToLeadForm">
                    <div class="form__group">
                        <select id="tipo_info">
                            <option value="" selected disabled>Oferta Académica</option>
                            <option value="Lic">Licenciatura</option>
                            <option value="Mae">Maestría</option>
                            <option value="Doc">Doctorado</option>
                            <option value="Pos">Postdoctorado</option>
                        </select>
                    </div>
                    <div class="form__group">
                        <input name="first_name" id="first_name" type="text" required="required" placeholder="Nombre(s)">
                    </div>
                    <div class="form__group">
                        <input name="last_name" id="last_name" type="text" required="required" placeholder="Apellido">
                    </div>
                    <div class="form__group">
                        <input name="last_name2_c" id="last_name2_c" type="hidden" placeholder="Apellido Materno">
                    </div>
                    <div class="form__group">
                        <input name="email1" id="email1" type="email" required="required" placeholder="Correo Electrónico" autocomplete="off">
                    </div>
                    <div class="form__group">
                        <input name="digescprocede_txt_c" id="digescprocede_txt_c" type="text" placeholder="Escuela de procedencia" required="required">
                    </div>
                    <div class="form-row">
                        <div class="form__group">
                            <input name="phone_work" id="phone_work" type="tel" required placeholder="Teléfono (10 dígitos)" title="Teléfono (10 dígitos)" minlength="10" maxlength="10">
                        </div>
                        <input type="checkbox" name="contact_me_by_watsapp_only" value="1" style="display:none !important" tabindex="-1" autocomplete="off">
                        <div class="form__group">
                            <select name="forma" id="forma" required>
                                <option value="" selected disabled>Forma de contacto</option>
                                <option value="Whatsapp">Whatsapp</option>
                                <option value="Videoconferencia">Videoconferencia</option>
                                <option value="Llamada telefónica">Llamada telefónica</option>
                            </select>
                        </div>
                    </div>

                    <!--/* Ocultos */-->

                    <!-- Oferta -->
                    <input name="digofertaint_txt_c" id="digofertaint_txt_c" type="hidden" placeholder="Oferta de interés" value="Psicología">

                    <!-- Forma de contacto -->
                    <input name="digformacont_txt_c" id="digformacont_txt_c" type="hidden" placeholder="Forma de contacto">

                    <!-- Campus de interés -->
                    <input name="digcampusint_txt_c" id="digcampusint_txt_c" type="hidden" placeholder="Campus de interés" value="Campus Sur">

                    <!-- Turno de interés -->
                    <input name="digturnoint_txt_c" id="digturnoint_txt_c" type="hidden" placeholder="Turno de interés">

                    <!-- URL -->
                    <input name="url" id="url-result" type="hidden">
                    <!-- OTROS DATOS -->
                    <input type="hidden" name="utm_term" id="utm_term" value="">
                    <input type="hidden" name="utm_keyword" id="utm_keyword" value="">
                    <input type="hidden" name="utm_clientid" id="utm_clientid" value="utm_clientid">
                    <input type="hidden" name="utm_referrer" id="utm_referrer" value="uic.mx">
                    <input type="hidden" name="utm_source" id="utm_source" value="uic.mx">
                    <input type="hidden" name="utm_medium" id="utm_medium" value="referral">
                    <input type="hidden" name="utm_campaign" id="utm_campaign" value="(direct)">
                    <input type="hidden" name="utm_id" id="utm_id" value="">
                    <input type="hidden" name="utm_content" id="utm_content" value="(none)">
                    <input type="hidden" name="utm_url" id="utm_url" value="utm_url">
                    <input type="hidden" name="utm_page" id="utm_page" value="/licenciaturas/psicologia/">

                    <!-- Oferta de interés UTM -->
                    <input name="utmoferinteres_txt_c" id="utmoferinteres_txt_c" type="hidden" placeholder="Oferta de interés UTM">

                    <!-- Estatus nuevo -->
                    <input name="estadodigital_list_c" id="estadodigital_list_c" type="hidden" value="Nuevo">

                    <!-- Medio -->
                    <input name="medio_gen_list_c" id="medio_gen_list_c" type="hidden" value="Medios Digitales">

                    <!-- Periodo -->
                    <input name="periodoingreso_list_c" id="periodoingreso_list_c" type="hidden" value="">

                    <!--////// Hidden //////-->
                    <div class="form__group" style="background-image: url(https://www.uic.mx/wp-content/uploads/2022/07/spiner2.gif); background-position: center; background-repeat: no-repeat; height: 30px">
                        <input class="form-button" name="Submit" id="send" type="submit" value="Solicitar Información">
                    </div>
                    <input name="redirect_url" id="redirect_url" type="hidden" value="https://www.uic.mx/gracias-psicologia/">
                    <input name="assigned_user_id" id="assigned_user_id" type="hidden" value="42620787-cb5b-bfde-e36e-5dd39646fc60">
                    <input name="moduleDir" id="moduleDir" type="hidden" value="Contacts">
                    <input type="hidden" name="recaptcha_response" id="recaptchaResponse">

                </form>

            </div>

        </div>


        <?php include '../layout/menu.php'; ?>

        <!-- Google Tag Manager  (script)-->
        <script src="https://www.uic.mx/wp-content/themes/hello-theme-child/js/uicUTM.js" id="uic-utm-js-js"></script>
        <!-- End Google Tag Manager  (script)-->


</body>
<script src="../js/aside_menu.js"></script>
<script src="../js/script_all.js"></script>

<script>
    //Script para cambiar valores del formualrio dependiendo de la oferta académica seleccionada con jquery
    $("#tipo_info").change(function() {
        var oferta = $(this).val();

        let arregloOfertas = {
            "Lic": {
                "digofertaint_txt_c": "Licenciatura en Psicología"
            },
            "Mae": {
                "digofertaint_txt_c": "Maestría en Psicoterapia Psicoanalítica"
            },
            "Doc": {
                "digofertaint_txt_c": "Doctorado en Psicoanálisis"
            },
            "Pos": {
                "digofertaint_txt_c": "Postdoctorado en Psicoanálisis Contemporáneo"
            }
        };

        $("#digofertaint_txt_c").val(oferta);
        $("#utmoferinteres_txt_c").val(oferta);
    });
</script>

</html>