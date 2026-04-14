<?php ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>División de Negocios</title>
    <meta name="description" content="Division de Negocios">
    <link rel="icon" href="https://www.uic.mx/licenciaturas/wp-content/uploads/favicon_uic.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --program-color: #f5a623;
        }
    </style>
    <link rel="stylesheet" href="css/aside_menu.css">
    <link rel="stylesheet" href="css/content.css">
    <script>
        document.write('<link rel="stylesheet" href="css/movil_negocios.css?v=' + Date.now() + '">');
    </script>

    <!-- ══ OPEN GRAPH ══ -->
    <link rel="canonical" href="https://www.uic.edu.mx/programas/psicologia/">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Psicología y Psicoanálisis · UIC México">
    <meta property="og:description" content="Licenciatura, Maestría, Doctorado y Postdoctorado en Psicología y Psicoanálisis en la UIC.">
    <meta property="og:image" content="https://www.uic.mx/ia-html/UIC2/imagenes/Psicologiaypsicoanalisis.jpg">
    <meta property="og:url" content="https://www.uic.edu.mx/programas/psicologia/">
    <meta property="og:locale" content="es_MX">

    <!-- ══ SCHEMA.ORG JSON-LD ══ -->

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [{
                    "@type": ["CollegeOrUniversity", "EducationalOrganization"],
                    "@id": "https://uic.mx/ia-html/UIC2/#org",
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
                        "@id": "https://uic.mx/ia-html/UIC2/#org"
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
                        "@id": "https://uic.mx/ia-html/UIC2/#org"
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
                        "@id": "https://uic.mx/ia-html/UIC2/#org"
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
                        "@id": "https://uic.mx/ia-html/UIC2/#org"
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
                        "@id": "https://uic.mx/ia-html/UIC2/#docentes"
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
                            "name": "¿Cuánto gana un egresado del Doctorado en Psicoanálisis de la UIC?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "En roles formales iniciales: $8,000–$15,000 mensuales. Con experiencia: $18,000–$35,000 mensuales. Con clínica privada consolidada: $30,000–$60,000 mensuales. Fuente: Indeed México y Computrabajo, 2025–2026."
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
                        },
                        {
                            "@type": "Question",
                            "name": "¿Cuánto gana un egresado de la Maestría en Psicoterapia Psicoanalítica?",
                            "acceptedAnswer": {
                                "@type": "Answer",
                                "text": "El ingreso de un egresado depende del modelo de trabajo que elija, destacando dos escenarios principales:Roles institucionales: Puedes iniciar con ingresos de $12,000 a $20,000 mensuales. Práctica privada consolidada: Los ingresos pueden superar los $30,000 a $50,000 mensuales. El retorno de inversión dependerá directamente del volumen de pacientes y el perfil de tu propia práctica clínica."
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
                            "item": "https://uic.mx/ia-html/UIC2"
                        },
                        {
                            "@type": "ListItem",
                            "position": 2,
                            "name": "Programas",
                            "item": "https://uic.mx/ia-html/UIC2/#programas"
                        },
                        {
                            "@type": "ListItem",
                            "position": 3,
                            "name": "Psicología y Psicoanálisis",
                            "item": "https://uic.mx/ia-html/UIC2/#programas"
                        }
                    ]
                }

            ]
        }
    </script>

</head>

<body>

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
                        <a href="#programas" class="menu-link M" data-program="administracion"> Administración</a>
                        <a href="#programas" class="menu-link L" data-program="contaduria"> Contaduría</a>
                        <a href="#programas" class="menu-link D" data-program="mercadotecnia"> Mercadotecnia</a>
                        <a href="#programas" class="menu-link P" data-program="rci"> RCI</a>
                        <a href="#programas" class="menu-link T" data-program="turismo"> Turismo</a>
                        <a href="#docentes"> Cuerpo docente</a>
                        <!-- <a href="#testimonios"> Testimonios</a> -->
                        <!-- <a href="#clinicas"> Clínicas</a>
                        <a href="#reconocimientos"> Reconocimientos</a>  -->
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
                    <img src="imagenes/negocios/header.jpeg" alt="Negocios" class="hero-image">
                    <!-- "https://www.uic.mx/licenciaturas/wp-content/uploads/back_row01-licenciaturas.jpg"  -->
                </div>

                <!-- Overlay (capa azul) -->
                <div class="hero-overlay"></div>

                <!-- Contenido HERO-->
                <div class="container hero-inner">
                    <!-- Lado Izquierdo -->
                    <div class="hero-content">
                        <h1 class="hero-title">División de <br><span style="color: #fdcb70;">Negocios</span></h1>
                        <p class="hero-description">
                            <strong style="font-weight: bold;">El mundo de los negocios no espera:<br>
                                Da el siguiente paso en tu trayectoria profesional</strong> <br><br>
                            Pasa de la teoría a la práctica corporativa. Conoce nuestras 5
                            licenciaturas especializadas y aprovecha <span style="font-weight: bold;"> más de 40 convenios
                                empresariales </span>para impulsar tu perfil desde el primer semestre.
                            Déjanos tus datos y descarga los planes de estudio.
                        </p>
                        <!-- <p class="hero-subtitle">SÍ. EN LA UIC ES POSIBLE</p> -->
                    </div>

                    <!-- LADO DERECHO -->
                    <div class="hero-stats">

                        <div class="stats-grid">

                            <div class="stat-card">
                                <div class="stat-number">5</div>
                                <div class="stat-text">
                                    Licenciaturas presenciales en negocios
                                </div>
                            </div>

                            <div class="stat-card">
                                <div class="stat-number">4</div>
                                <div class="stat-text">
                                    Años de duración · 8 semestres
                                </div>
                            </div>

                            <div class="stat-card">
                                <div class="stat-number">+30</div>
                                <div class="stat-text">
                                    Años de trayectoria del cuerpo docente
                                </div>
                            </div>

                            <div class="stat-card">
                                <div class="stat-number">Global</div>
                                <div class="stat-text">
                                    Práctica internacional y certificaciones
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
                        Elige tu carrera<br>en la División de Negocios
                    </h2>

                    <p class="oferta-desc">
                        Un itinerario académico completo para quienes quieren dirigir organizaciones, gestionar las finanzas, construir marcas, hacer negocios globales o liderar la industria del turismo y la hospitalidad.
                    </p>

                    <div class="oferta-grid-N">

                        <!-- CARD 1 -->
                        <div class="oferta-card mae">
                            <span class="tag">LICENCIATURA</span>
                            <h3>Administración y Dirección Estratégica</h3>
                            <p>Forma líderes con visión estrategica, simuladores de negocios y capacidad de dirección a nivel ejecutivo</p>

                            <div class="badges">
                                <span>Presencial</span>
                                <span>4 años</span>
                                <span>Alta dirección</span>
                            </div>
                            <hr class="program-divider">
                            <a href="#detalle-programa" class="link ver-programa" data-program="administracion"> Ver programa → </a>
                        </div>

                        <!-- CARD 2 -->
                        <div class="oferta-card lic">
                            <span class="tag">LICENCIATURA</span>
                            <h3>Contaduría y Finanzas</h3>
                            <p>Gestión financiera, fiscal y contable con enfoque estratégico. Alta empleabilidad en todos los sectores.</p>

                            <div class="badges">
                                <span>Presencial</span>
                                <span>4 años</span>
                                <span>Fiscal · Fintech</span>
                            </div>
                            <hr class="program-divider">
                            <a href="#detalle-programa" class="link ver-programa" data-program="contaduria"> Ver programa → </a>
                        </div>

                        <!-- CARD 3 -->
                        <div class="oferta-card doc">
                            <span class="tag">LICENCIATURA</span>
                            <h3>Mercadotecnia</h3>
                            <p>Equilibra análisis de datos con creatividad estratégica. Marketing digital, neuromarketing y branding.</p>

                            <div class="badges">
                                <span>Presencial</span>
                                <span>4 años</span>
                                <span>Digital · Marcas</span>
                            </div>
                            <hr class="program-divider">
                            <a href="#detalle-programa" class="link ver-programa" data-program="mercadotecnia"> Ver programa → </a>
                        </div>

                        <!-- CARD 4 -->
                        <div class="oferta-card post">
                            <span class="tag">LICENCIATURA</span>
                            <h3>Relaciones Comerciales Internacionales</h3>
                            <p>Negocios globales, logística, aduanas y negociación intercultural. Inserción laboral desde 7° semestre.</p>

                            <div class="badges">
                                <span>Presencial</span>
                                <span>4 años</span>
                                <span>Logística · Aduanas</span>
                            </div>
                            <hr class="program-divider">
                            <a href="#detalle-programa" class="link ver-programa" data-program="rci"> Ver programa → </a>
                        </div>

                        <!-- CARD 5 -->
                        <div class="oferta-card tur">
                            <span class="tag">LICENCIATURA</span>
                            <h3>Administración de Negocios Turísticos</h3>
                            <p>Hotelería, eventos MICE, gastronomía y turismo sostenible. 5 certificaciones y prácticas internacionales.</p>

                            <div class="badges">
                                <span>Presencial</span>
                                <span>4 años</span>
                                <span>MICE · Hospitalidad</span>
                            </div>
                            <hr class="program-divider">
                            <a href="#detalle-programa" class="link ver-programa" data-program="turismo"> Ver programa → </a>
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

                        <button class="tab-btn active" data-program="administracion">
                            <span class="short-text">Licenciatura en <br><strong>ADMÓN. Y DIR. ESTRATEGICA</strong></span>
                            <span class="full-text">Licenciatura en <br><strong>ADMINISTRACIÓN Y DIRECCIÓN ESTRATEGICA</strong></span>
                        </button>
                        <button class="tab-btn" data-program="contaduria" data-short="Licenciatura en CONTADURIA Y FINANZAS">
                            <span class="short-text">Licenciatura en <br> <strong>CONTADURIA Y FINIANZAS</strong></span>
                            <span class="full-text">Licenciatura en <br> <strong>CONTADURIA Y FINIANZAS</strong></span>
                        </button>
                        <button class="tab-btn" data-program="mercadotecnia" data-short="Licenciatura en MERCADOTECNIA">
                            <span class="short-text">Licenciatura en <br> <strong>MERCADOTECNIA</strong></span>
                            <span class="full-text">Licenciatura en <br> <strong>MERCADOTECNIA</strong></span>
                        </button>
                        <button class="tab-btn" data-program="rci" data-short="Licenciatura en RCI">
                            <span class="short-text">Licenciatura en <br> <strong>RCI</strong></span>
                            <span class="full-text">Licenciatura en <br> <strong>RELACIONES COMERCIALES INTERNACIONALES</strong></span>
                        </button>
                        <button class="tab-btn" data-program="turismo">
                            <span class="short-text">Licenciatura en <br> <strong>ADMON. NEGOCIOS TURISTICOS</strong></span>
                            <span class="full-text">Licenciatura en <br> <strong>ADMINISTRACION DE NEGOCIOS TURISTICOS</strong></span>
                        </button>

                    </div>

                    <section class="detalle-content" id="detalle-programa">
                        <!-- CONTENIDOS -->
                        <div class="program-content">

                            <!-- ADMINISATRCION -->

                            <div class="program-panel active" data-program="administracion">
                                <div class="program-detail">

                                    <!-- TOP: info + tabla -->
                                    <div class="program-top">

                                        <!-- LEFT -->
                                        <div class="program-info">
                                            <span class="program-label">LICENCIATURA EN</span>
                                            <h2>Administración y Dirección Estratégica</h2>

                                            <p>
                                                Forma tomadores de decisiones estratégicos con capacidad para dirigir empresas completas o áreas clave, implementar transformación digital, diseñar estrategias de internacionalización y brindar consultoría. Simuladores de negocios, casos reales y visión de alta dirección desde el primer año.
                                            </p>

                                            <!-- <p class="program-highlight">
                                                ➜ <span style="font-weight: bold;"> Tres modalidades para adaptarse a tu vida.</span>
                                            </p> -->
                                        </div>

                                        <!-- RIGHT -->
                                        <div class="program-box">
                                            <h3>Datos del programa</h3>

                                            <ul>
                                                <li><span>Nivel</span><strong>Licenciatura</strong></li>
                                                <li><span>Modalidades</span><strong>Presencial</strong></li>
                                                <li><span>Duración</span><strong>4 años - 8 semestres</strong></li>
                                                <li><span>Área</span><strong>División de Negocios</strong></li>
                                                <li><span>Directora</span><strong>Mtro. Jorge Arturo Amaya Luna</strong></li>
                                            </ul>
                                        </div>

                                    </div>

                                    <div class="prog-docente-card">

                                        <div class="prog-docente-header">
                                            <div class="prog-docente-avatar">JAA</div>
                                            <div>
                                                <h3>Mtro. Jorge Arturo Amaya Luna</h3>
                                                <p>Director Académico • Administración y Dirección Estratégica • UIC</p>
                                            </div>
                                        </div>

                                        <div class="prog-docente-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h4>FORMACIÓN ACADÉMICA</h4>
                                                    <ul>
                                                        <li>Licenciatura en Contaduría · UNAM</li>
                                                        <li>Maestría en Administración · UIC</li>
                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <h4>CERTIFICACIONES</h4>
                                                    <ul>
                                                        <li>Docente certificado por ANFECA</li>
                                                        <li>Acreditador de programas académicos, CACECA</li>
                                                        <li>Ponente en congresos nacionales de negocios</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <h4>TRAYECTORIA PROFESIONAL</h4>
                                                    <ul>
                                                        <li>Más de 35 años asesorando empresas de diversos sectores</li>
                                                        <li>Más de 30 años en docencia universitaria y posgrados</li>
                                                        <li>Consultor en planeación estratégica, finanzas corporativas, estrategias fiscales y desarrollo de negocios</li>
                                                        <li>Director académico de las licenciaturas en Administración y en Contaduría de la UIC</li>
                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <h4>MATERIAS QUE IMPARTE</h4>
                                                    <ul>
                                                        <li>Contabilidad Financiera e Información Financiera Empresarial</li>
                                                        <li>Finanzas Corporativas</li>
                                                        <li>Contabilidad Administrativa</li>
                                                        <li>Costos para la Toma de Decisiones</li>
                                                        <li>Marco Fiscal de la Empresa</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- CARDS -->
                                    <div class="program-cards">

                                        <div class="program-card">
                                            <h4>¿QUÉ APRENDERÁS?</h4>
                                            <ul>
                                                <li>Planeación y ejecución de planes estratégicos</li>
                                                <li>Dirección de capital humano y liderazgo organizacional</li>
                                                <li>Finanzas corporativas, bursátiles y presupuestos</li>
                                                <li>Administración de operaciones, logística y cadena de suministro</li>
                                                <li>Consultoría empresarial y diagnóstico organizacional</li>
                                                <li>Inteligencia de negocios y análisis de datos</li>
                                                <li>Emprendimiento y modelos de negocio (startups)</li>
                                            </ul>
                                        </div>

                                        <div class="program-card">
                                            <h4>CAMPO LABORAL</h4>
                                            <ul>
                                                <li>Alta dirección: CEO, Gerente General, Director de área</li>
                                                <li>Consultoría estratégica y reingeniería organizacional</li>
                                                <li>Emprendimiento y dirección de empresas propias</li>
                                                <li>Gestión de proyectos de inversión y nuevos mercados</li>
                                                <li>Dirección de operaciones, logística y calidad</li>
                                                <li>Transformación digital de organizaciones</li>
                                            </ul>
                                        </div>

                                        <div class="program-card">
                                            <h4>INGRESOS ESTIMADOS (2026)</h4>
                                            <ul>
                                                <li>Junior (inicio):$13,000 – $17,500 / mes </li>
                                                <li>3–5 años de experiencia: $30,000 – $50,000 / mes</li>
                                                <li>Directivo / Senior: +$70,000 / mes</li>
                                                <li>Inglés + certificación PMP o Data Analytics puede aumentar ingresos hasta 45%</li>
                                            </ul>
                                        </div>

                                    </div>
                                    <!-- PREGUNTAS FRECUENTES -->
                                    <div class="faq-section">

                                        <h3 class="faq-title">Preguntas frecuentes</h3>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿En qué se diferencia Administración y Dirección Estratégica de Administración de Empresas tradicional?
                                            </button>
                                            <div class="faq-answer">
                                                <p>
                                                    La diferencia principal es que la Dirección Estratégica va más allá de la gestión operativa diaria,
                                                    priorizando la <strong> visión de largo plazo y el liderazgo de alta dirección</strong>. El egresado está formado para:</p>
                                                <ul class="lista-fa">
                                                    <li><strong> Dirigir organizaciones completas</strong>, no solo administrarlas.</li>
                                                    <li><strong> Implementar la transformación digital </strong>dentro de la empresa.</li>
                                                    <li>Impulsar procesos de cambio y asegurar la <strong>competitividad internacional.</strong></li>
                                                </ul>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿Qué herramientas tecnológicas se utilizan en la carrera?
                                            </button>
                                            <div class="faq-answer">
                                                <p>
                                                    Se utilizan simuladores de negocios de última generación que replican mercados financieros y operativos reales,
                                                    herramientas de análisis de datos e inteligencia de negocios, software de gestión de proyectos y metodologías de consultoría
                                                    aplicadas a casos de empresas reales.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿A quién le conviene estudiar Administración y Dirección Estratégica en la UIC?
                                            </button>
                                            <div class="faq-answer">
                                                <p>
                                                    A personas con vocación de liderazgo, capacidad analítica, interés en los negocios internacionales y
                                                    visión para resolver problemas complejos.
                                                    También es ideal para quienes proyectan emprender, hacer consultoría o ascender a puestos directivos
                                                    en empresas nacionales o multinacionales.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿Cuánto gana un administrador de empresas recién egresado en México?
                                            </button>
                                            <div class="faq-answer">
                                                <p>
                                                    Un egresado de Administración puede ganar entre <strong>$13,000 y $17,500 mensuales</strong> al inicio.
                                                    Con 3–5 años de experiencia, el rango sube a <strong>$30,000–$50,000</strong>.
                                                    En puestos directivos o senior puede superar los <strong>$70,000 mensuales</strong>.
                                                    El dominio del inglés y certificaciones en PMP o Data Analytics pueden incrementar estos rangos hasta un 45%.
                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <!-- CONTADURIA -->
                            <div class="program-panel" data-program="contaduria">
                                <div class="program-detail">

                                    <!-- TOP: info + tabla -->
                                    <div class="program-top">

                                        <!-- LEFT -->
                                        <div class="program-info">
                                            <span class="program-label">LICENCIATURA EN </span>
                                            <h2>Contaduría y Finanzas</h2>

                                            <p>
                                                Forma profesionales capaces de gestionar, analizar e interpretar la información financiera para apoyar la toma de decisiones en las organizaciones.
                                                Integra contabilidad, finanzas corporativas, fiscalidad y auditoría con herramientas digitales y visión estratégica.
                                                Alta empleabilidad: todas las organizaciones requieren expertos financieros.
                                            </p>

                                            <!-- <p class="program-highlight">
                                                ➜ <span style="font-weight: bold;"> Cinco semestres con clínica supervisada real.</span>
                                            </p> -->
                                        </div>

                                        <!-- RIGHT -->
                                        <div class="program-box">
                                            <h3>Datos del programa</h3>

                                            <ul>
                                                <li><span>Nivel</span><strong>Licenciatura</strong></li>
                                                <li><span>Modalidades</span><strong>Prosencial</strong></li>
                                                <li><span>Duración</span><strong>4 años · 8 semestres</strong></li>
                                                <li><span>Área</span><strong>División de Negocios</strong></li>
                                                <li><span>Director</span><strong>Mtro. Jorge Arturo Amaya Luna</strong></li>
                                            </ul>
                                        </div>

                                    </div>

                                    <!-- CARDS -->
                                    <div class="program-cards">

                                        <div class="program-card">
                                            <h4>¿QUÉ APRENDERÁS?</h4>
                                            <ul>
                                                <li>Elaboración e interpretación de estados financieros</li>
                                                <li>Finanzas corporativas y evaluación de proyectos</li>
                                                <li>Derecho fiscal, tributación y cumplimiento regulatorio</li>
                                                <li>Auditoría interna y externa</li>
                                                <li>Presupuestos y planeación financiera</li>
                                                <li>Evaluación de riesgos financieros</li>
                                                <li>Herramientas digitales: análisis de datos y fintech</li>
                                            </ul>
                                        </div>

                                        <div class="program-card">
                                            <h4>CAMPO LABORAL</h4>
                                            <ul>
                                                <li>Contabilidad, contraloría, tesorería y finanzas corporativas</li>
                                                <li>Auditoría interna y externa en empresas privadas</li>
                                                <li>Sector público: SAT, Secretaría de Hacienda, organismos reguladores</li>
                                                <li>Consultoría financiera y despachos contables</li>
                                                <li>Instituciones bancarias, aseguradoras y fintech</li>
                                                <li>Emprendimiento, asesoría y gestión de startups</li>
                                            </ul>
                                        </div>

                                        <div class="program-card">
                                            <h4>Ingresos estimados (OCC / Indeed 2025)</h4>
                                            <ul>
                                                <li><strong>Inicio:</strong> $8,000 – $12,000 / mes</li>
                                                <li><strong>3–5 años de experiencia:</strong> $15,000 – $25,000 / mes</li>
                                                <li><strong>Con especialidad o puestos ejecutivos:</strong> +$40,000 / mes</li>
                                                <li>542 mil contadores y auditores activos en México en Q1 2025 · Informalidad del sector: solo 11.6%</li>
                                            </ul>
                                        </div>

                                    </div>
                                    <!-- PREGUNTAS FRECUENTES -->
                                    <div class="faq-section">

                                        <h3 class="faq-title">Preguntas frecuentes</h3>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿Qué hace un egresado de Contaduría y Finanzas de la UIC?
                                            </button>
                                            <div class="faq-answer">
                                                <p>
                                                    Gestiona y analiza la información financiera para apoyar la toma de decisiones, elabora estados financieros,
                                                    diseña estrategias fiscales, supervisa el cumplimiento de normativas contables y tributarias,
                                                    y participa en procesos de auditoría y control interno en empresas de cualquier sector.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿En qué se diferencia Contaduría y Finanzas de Administración?
                                            </button>
                                            <div class="faq-answer">
                                                <p>
                                                    Contaduría y Finanzas se enfoca en la precisión contable,
                                                    el cumplimiento fiscal y la gestión de la información financiera.
                                                    Administración y Dirección Estratégica prioriza la visión de largo plazo y el liderazgo organizacional.
                                                    Comparten bases de finanzas corporativas, pero el perfil de egreso y el campo laboral difieren.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿Qué tan demandada es la carrera de Contaduría y Finanzas?
                                            </button>
                                            <div class="faq-answer">
                                                <p>
                                                    Es una de las carreras con mayor demanda sostenida.
                                                    En el primer trimestre de 2025 había aproximadamente 542 mil personas trabajando como contadores,
                                                    auditores y especialistas financieros en México.
                                                    El sector financiero y de seguros registró más de 18,500 ofertas laborales entre enero y abril de 2025.
                                                    La informalidad del sector es de solo 11.6%, muy por debajo del promedio nacional.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿Cuánto gana un contador recién egresado en México?
                                            </button>
                                            <div class="faq-answer">
                                                <p>
                                                    Un contador recién egresado puede ganar entre <strong>$8,000 y $12,000 mensuales</strong>.
                                                    Con 3 a 5 años de experiencia, el rango sube a <strong>$15,000–$25,000</strong>.
                                                    Con especialidad o en puestos ejecutivos puede superar los <strong>$40,000 mensuales</strong>.
                                                    Fuente: OCC México e Indeed, 2025.
                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <!-- MERCADOTECNIA -->
                            <div class="program-panel" data-program="mercadotecnia">
                                <div class="program-detail">

                                    <!-- TOP: info + tabla -->
                                    <div class="program-top">

                                        <!-- LEFT -->
                                        <div class="program-info">
                                            <span class="program-label">LICENCIATURA EN</span>
                                            <h2>Mercadotecnia</h2>
                                            <p>
                                                La única carrera que equilibra análisis numérico con creatividad estratégica:
                                                el mercadólogo UIC sabe leer datos para tomar decisiones creativas, no solo hacer contenido.
                                                Desde el primer semestre, los estudiantes trabajan con PyMES y empresas reales.
                                            </p>
                                            <!-- <p class="program-highlight">
                                                ➜ <span style="font-weight: bold;"> Cuatro áreas de acentuación optativas para <br>
                                                    personalizar la formación doctoral.</span>
                                            </p> -->
                                        </div>

                                        <!-- RIGHT -->
                                        <div class="program-box">
                                            <h3>Datos del programa</h3>

                                            <ul>
                                                <li><span>Nivel</span><strong>Licenciatura</strong></li>
                                                <li><span>Modalidades</span><strong>Presencial</strong></li>
                                                <li><span>Duración</span><strong>4 años</strong></li>
                                                <li><span>Acentuaciones</span><strong>División de Negocios</strong></li>
                                                <li><span>Director</span><strong>Mtra. Lorena Morán Sámano</strong></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="prog-docente-card">

                                        <div class="prog-docente-header">
                                            <div class="prog-docente-avatar">LMS</div>
                                            <div>
                                                <h3>Mtra. Lorena Morán Sámano</h3>
                                                <p>Directora Académica · Licenciatura en Mercadotecnia · UIC</p>
                                            </div>
                                        </div>

                                        <div class="prog-docente-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h4>FORMACIÓN ACADÉMICA</h4>
                                                    <ul>
                                                        <li>Licenciatura en Comunicación Social</li>
                                                        <li>Licenciatura en Psicología</li>
                                                        <li>Maestría en Mercadotecnia</li>
                                                        <li>Especialidad en Publicidad en Medios Interactivos</li>
                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <h4>CERTIFICACIONES Y EVALUACIÓN</h4>
                                                    <ul>
                                                        <li>Docente certificada por ANFECA</li>
                                                        <li>Certificate in Event Production · Procesa Group</li>
                                                        <li>Par Evaluadora de programas académicos: CACECA, CIEES, CONAC</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <h4>TRAYECTORIA PROFESIONAL</h4>
                                                    <ul>
                                                        <li>Asesora activa en estrategias de marketing, innovación de productos y endomarketing para PyMES nacionales e internacionales</li>
                                                        <li>Experiencia en grandes empresas nacionales e internacionales como asesora de marketing y endomarketing</li>
                                                        <li>Coautora en publicaciones del área de mercadotecnia</li>
                                                    </ul>
                                                </div>
                                                <div class="col">
                                                    <h4>LINEAS DE ESPECIALIDAD Y MATERIAS</h4>
                                                    <ul>
                                                        <li>Marketing 360 para PyMES</li>
                                                        <li>Marketing en intangibles y psicología del consumidor</li>
                                                        <li>Endomarketing organizacional</li>
                                                        <li>Materias: Mercadotecnia · Comportamiento del Consumidor Final · Mercadotecnia Relacional</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- CARDS -->
                                    <div class="program-cards">

                                        <div class="program-card">
                                            <h4>¿QUÉ APRENDERÁS?</h4>
                                            <ul>
                                                <li>Análisis del comportamiento del consumidor</li>
                                                <li>Investigación de mercados cuantitativa y cualitativa</li>
                                                <li>Marketing digital: SEO, SEM y analítica web</li>
                                                <li>Gestión de marcas y posicionamiento (branding)</li>
                                                <li>Big Data aplicado a decisiones de marketing</li>
                                                <li>Neuromarketing e investigación de mercados</li>
                                                <li>E-commerce y marketing de contenidos</li>
                                            </ul>
                                        </div>

                                        <div class="program-card">
                                            <h4>CAMPO LABORAL</h4>
                                            <ul>
                                                <li>Agencias de publicidad, relaciones públicas y comunicación</li>
                                                <li>Marketing digital, redes sociales y e-commerce</li>
                                                <li>Brand management en empresas medianas, grandes y multinacionales</li>
                                                <li>Investigación de mercados y análisis del consumidor</li>
                                                <li>Consultoría comercial y estratégica</li>
                                                <li>Planeación de medios y experiencia de usuario</li>
                                            </ul>
                                        </div>

                                        <div class="program-card">
                                            <h4>Ingresos estimados (DataMéxico / Indeed 2025)</h4>
                                            <ul>
                                                <li><strong>Inicio:</strong> $7,500 – $12,000 / mes</li>
                                                <li><strong>Con experiencia:</strong> $26,000 – $80,000 / mes</li>
                                                <li>Depende del puesto, industria y si se trabaja en agencia, empresa o consultoría propia</li>
                                                <li>Fuente: Secretaría de Economía · Indeed MX · Michael Page 2025</li>
                                            </ul>
                                        </div>

                                    </div>
                                    <!-- PREGUNTAS FRECUENTES -->
                                    <div class="faq-section">

                                        <h3 class="faq-title">Preguntas frecuentes</h3>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿En qué se diferencia la Licenciatura en Mercadotecnia de la UIC de otras universidades?
                                            </button>
                                            <div class="faq-answer">
                                                <p>
                                                    La UIC forma mercadólogos que saben tomar decisiones creativas basadas en números, no solo hacer contenido o campañas.
                                                    La carrera equilibra la parte numérica con la creativa, y desde primeros semestres los alumnos trabajan con
                                                    PyMES y empresas reales para la aplicación directa de conceptos.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿Un mercadólogo necesita saber programar o ser muy matemático?
                                            </button>
                                            <div class="faq-answer">
                                                <p>
                                                    No necesariamente. La carrera integra estadística y analítica de datos de forma aplicada:
                                                    el objetivo es que el mercadólogo sepa interpretar y usar los datos, no ser analista de datos.
                                                    Se desarrolla habilidad para leer métricas, tomar decisiones con Big Data y comunicar resultados estratégicamente.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿A quién le conviene estudiar Mercadotecnia en la UIC?
                                            </button>
                                            <div class="faq-answer">
                                                <p>
                                                    A quienes les gusta combinar lo analítico con lo creativo, entender el comportamiento del consumidor,
                                                    manejar redes sociales para posicionamiento de marca —no solo contenido— y generar ideas sobre nuevos productos y servicios.
                                                    También para quienes les interesen las relaciones públicas, la organización de eventos o las ventas.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿Cuánto gana un mercadólogo egresado en México?
                                            </button>
                                            <div class="faq-answer">
                                                <p>
                                                    El salario inicial en Mercadotecnia se ubica entre <strong>$7,500 y $12,000 mensuales</strong>.
                                                    Con experiencia y dependiendo del puesto e industria, puede crecer a <strong>$26,000–$80,000 mensuales</strong>.
                                                    Fuentes: DataMéxico (Secretaría de Economía), Indeed MX y Michael Page 2025.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- RCI -->
                            <div class="program-panel" data-program="rci">
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
                                                    Es el nivel de formación más alto en el campo psicoanalítico. Sirve para que
                                                    doctores en ejercicio logren:
                                                </p>
                                                <ul class="lista-fa">
                                                    <li><strong>Actualizarse</strong> en corrientes recientes como el psicoanálisis relacional,
                                                        intersubjetivo y neuropsicoanálisis.</li>
                                                    <li><strong>Desarrollar proyectos</strong> de investigación de alto impacto.</li>
                                                    <li><strong>Posicionarse</strong> como una autoridad académica en su especialidad.</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿El Postdoctorado en Psicoanálisis de la UIC tiene docentes internacionales?
                                            </button>
                                            <div class="faq-answer">
                                                <p><strong>Sí</strong>. El cuerpo docente cuenta con expertos internacionales de primer nivel,
                                                    entre ellos:
                                                </p>
                                                <ul class="lista-fa">
                                                    <li><strong>Dra. Laura Molet Estaper (España):</strong> Especialista en trastornos
                                                        alimentarios.</li>
                                                    <li><strong>Dr. André Sassenfeld (Chile):</strong> Autor de nueve libros sobre psicoanálisis
                                                        relacional.</li>
                                                    <li><strong>Dra. Eva Rotenberg (Argentina):</strong> Psicoanalista especialista en niños,
                                                        adolescentes y familias.</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿Se puede estudiar el Postdoctorado sin dejar de trabajar?
                                            </button>
                                            <div class="faq-answer">
                                                <p>
                                                    <strong>Sí</strong>. El programa está diseñado para profesionales con agendas de alta
                                                    exigencia, ofreciendo:
                                                </p>
                                                <ul class="lista-fa">
                                                    <li> <strong>Modalidad 100% a distancia.</strong></li>
                                                    <li> Duración estructurada en <strong>tres semestres.</strong></li>
                                                    <li> Flexibilidad para mantener activa tanto la <strong>práctica clínica</strong> como la
                                                        <strong>actividad académica</strong>.
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- TURISMO -->
                            <div class="program-panel" data-program="turismo">
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
                                                    Es el nivel de formación más alto en el campo psicoanalítico. Sirve para que
                                                    doctores en ejercicio logren:
                                                </p>
                                                <ul class="lista-fa">
                                                    <li><strong>Actualizarse</strong> en corrientes recientes como el psicoanálisis relacional,
                                                        intersubjetivo y neuropsicoanálisis.</li>
                                                    <li><strong>Desarrollar proyectos</strong> de investigación de alto impacto.</li>
                                                    <li><strong>Posicionarse</strong> como una autoridad académica en su especialidad.</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿El Postdoctorado en Psicoanálisis de la UIC tiene docentes internacionales?
                                            </button>
                                            <div class="faq-answer">
                                                <p><strong>Sí</strong>. El cuerpo docente cuenta con expertos internacionales de primer nivel,
                                                    entre ellos:
                                                </p>
                                                <ul class="lista-fa">
                                                    <li><strong>Dra. Laura Molet Estaper (España):</strong> Especialista en trastornos
                                                        alimentarios.</li>
                                                    <li><strong>Dr. André Sassenfeld (Chile):</strong> Autor de nueve libros sobre psicoanálisis
                                                        relacional.</li>
                                                    <li><strong>Dra. Eva Rotenberg (Argentina):</strong> Psicoanalista especialista en niños,
                                                        adolescentes y familias.</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="faq-item">
                                            <button class="faq-question">
                                                ¿Se puede estudiar el Postdoctorado sin dejar de trabajar?
                                            </button>
                                            <div class="faq-answer">
                                                <p>
                                                    <strong>Sí</strong>. El programa está diseñado para profesionales con agendas de alta
                                                    exigencia, ofreciendo:
                                                </p>
                                                <ul class="lista-fa">
                                                    <li> <strong>Modalidad 100% a distancia.</strong></li>
                                                    <li> Duración estructurada en <strong>tres semestres.</strong></li>
                                                    <li> Flexibilidad para mantener activa tanto la <strong>práctica clínica</strong> como la
                                                        <strong>actividad académica</strong>.
                                                    </li>
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
                            <img src="./imagenes/Midelvia.jpg" alt="" width="100%">
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
                            <h3>RVOE</h3>
                            <span class="reconocimiento-cargo">
                                Validez oficial SEP en todos los programas
                            </span>

                            <p>
                                La Licenciatura en Psicología, la Maestría en Psicoterapia Psicoanalítica,
                                el Doctorado en Psicoanálisis y el Postdoctorado en Psicoanálisis Contemporáneo cuentan con
                                Reconocimiento de Validez Oficial de Estudios de la Secretaría de Educación Pública.
                                <br>
                                <br>
                                <span class="reconocimiento-cargo" style="color: #fdcb70;">
                                    Tus estudios son reconocidos en todo México.
                                </span>
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
                    <input name="redirect_url" id="redirect_url" type="hidden" value="https://uic.mx/licenciaturas/gracias-psicologia/">
                    <input name="assigned_user_id" id="assigned_user_id" type="hidden" value="42620787-cb5b-bfde-e36e-5dd39646fc60">
                    <input name="moduleDir" id="moduleDir" type="hidden" value="Contacts">
                    <input type="hidden" name="recaptcha_response" id="recaptchaResponse">

                </form>

            </div>

        </div>




        <!-- ==================== MENÚ LATERAL IZQUIERDO (SIDE MENU) ==================== -->
        <?php include '../layout/menu.php'; ?>
</body>
<script src="./js/aside_menu.js"></script>
<script src="./js/script_all.js"></script>

</html>