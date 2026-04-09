<?php
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
print_r($_SERVER) . "<br>";
/* dividir ruta */
$segments = explode('/', trim($request, '/'));

/* tomar solo el último segmento */
$current = end($segments);

/* fallback */
if ($current === '' || $current === false) {
    $current = 'index';
}

// echo $current
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$uri = $_SERVER['REQUEST_URI'];

$fullUrl = $scheme . '://' . $host . $uri;

$parts = explode('/', rtrim($fullUrl, '/'));
array_pop($parts);

$base = implode('/', $parts) . '/';

?>
<!-- ==================== MENÚ LATERAL IZQUIERDO (SIDE MENU) ==================== -->
<div class="side-menu-container" id="sideMenu">
    <!-- Overlay (fondo oscuro al abrir menú) -->
    <div class="side-menu-overlay" id="menuOverlay"></div>

    <!-- Panel del menú lateral -->
    <div class="side-menu-panel menu-left-close" id="menuPanel">
        <!-- Botón cerrar -->
        <button class="close-side-menu" id="closeMenu">
            <i class="fas fa-times"></i>
        </button>

        <div class="side-menu-content">
            <!-- Logo en el menú -->
            <div class="menu-logo">
                <img src="https://www.uic.mx/licenciaturas/wp-content/uploads/logotipo_universidad_intercontinental.png"
                    alt="Universidad Intercontinental"
                    width="253"
                    height="51">
            </div>

            <!-- Botones de acción rápida -->
            <div class="menu-action-buttons">
                <a href="tel:5554871300" class="menu-action-btn" target="_blank" rel="nofollow">
                    <span class="menu-action-icon"><i class="fas fa-phone-volume fa-2xl"></i></span>
                    Teléfono
                </a>
                <a href="https://www.google.com/maps/place/Universidad+Intercontinental/@19.279785,-99.1761497,17z/data=!4m15!1m8!3m7!1s0x85ce008e74942c8d:0x3d4c3259e61c999f!2sAv.+Insurgentes+Sur+4303,+Sta+%C3%9Arsula+Xitla,+Tlalpan,+14420+Ciudad+de+M%C3%A9xico,+CDMX!3b1!8m2!3d19.279785!4d-99.1735748!16s%2Fg%2F11c0zjfbj3!3m5!1s0x85ce008e162c1259:0xabd0af4ac89a7960!8m2!3d19.279785!4d-99.1735748!16s%2Fm%2F06w20q2?entry=ttu"
                    class="menu-action-btn" target="_blank" rel="nofollow">
                    <span class="menu-action-icon"><i class="fas fa-map-marker-alt fa-xl"></i></span>
                    Ubicación
                </a>
                <a href="https://wa.me/525565770263" class="menu-action-btn" target="_blank" rel="nofollow">
                    <span class="menu-action-icon"><i class="fab fa-whatsapp fa-2xl"></i></span>
                    WhatsApp
                </a>
            </div>

            <!-- Menú de navegación principal -->
            <nav class="menu-navigation">
                <ul class="main-menu">
                    <li class="menu-item"><a href="https://uic.mx/">Inicio</a></li>
                    <li class="menu-item"><a href="https://www.uic.mx/reglamentos/modelo-educativo-2026/MODELO-EDUCATIVO-2026.pdf">Modelo Educativo 2026</a></li>

                    <li class="menu-item menu-item-has-children">
                        <a href="#">Menú para Comunidad UIC</a>
                        <span class="submenu-toggle"><i class="fas fa-angle-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="https://servicios2.uic.edu.mx/Docentes/">Catedráticos</a></li>
                            <li><a href="https://login.microsoftonline.com/?whr=universidad-uic.edu.mx">Correo UIC</a></li>
                        </ul>
                    </li>

                    <li class="menu-item menu-item-has-children">
                        <a href="#">Nosotros</a>
                        <span class="submenu-toggle"><i class="fas fa-angle-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="https://www.uic.mx/nosotros/">Conócenos</a></li>
                            <li><a href="https://www.uic.mx/nosotros/historia/">Historia</a></li>
                            <li><a href="https://www.uic.mx/nosotros/colegio-estudios-guadalupanos/">Colegio de Estudios Guadalupanos</a></li>
                            <li><a href="https://www.uic.mx/nosotros/ideario/">Ideario</a></li>
                            <li><a href="https://www.uic.mx/nosotros/politica/">Política</a></li>
                            <li><a href="https://www.uic.mx/investigacion/en-los-medios/">UIC en los medios</a></li>
                            <li><a href="https://www.uic.mx/coordinacion-de-impulso-social-y-empresarial/empleabilidad-y-egresados/">Inserción Laboral</a></li>
                            <li><a href="https://www.uic.mx/investigacion/">Investigación UIC</a></li>
                            <li><a href="https://www.uic.mx/reglamentos/">Reglamentos</a></li>
                            <li><a href="https://www.uic.mx/protocolo-de-actuacion-ante-fumadores/">Protocolo de actuación ante fumadores</a></li>
                        </ul>
                    </li>

                    <li class="menu-item"><a href="https://www.uic.mx/bachillerato">Bachillerato</a></li>
                    <li class="menu-item current-menu-item"><a href="https://www.uic.mx/licenciaturas/">Licenciaturas</a></li>

                    <li class="menu-item menu-item-has-children <?= in_array($current, ['psicologia', 'negocios']) ? 'active' : '' ?>">
                        <a href="#">Hub</a>
                        <span class="submenu-toggle <?= in_array($current, ['psicologia', 'negocios']) ? 'active' : '' ?>"><i class="fas fa-angle-down"></i></span>
                        <ul class="sub-menu <?= in_array($current, ['psicologia', 'negocios']) ? 'active' : '' ?>">
                            <li class="<?= ($current == 'psicologia') ? 'active' : '' ?>"><a href="<?= $base . "psicologia" ?>">Psicología y Psicoanálisis</a></li>
                            <!-- <li class="<?= ($current == 'negocios') ? 'active' : '' ?>"><a href="<?= $base . "negocios" ?>">Negocios</a></li> -->
                        </ul>
                    </li>

                    <li class="menu-item"><a href="https://educacionenlinea.uic.mx/licenciaturas-en-linea/">Licenciaturas en Línea</a></li>
                    <li class="menu-item"><a href="https://www.uic.mx/posgrados/">Posgrados</a></li>

                    <li class="menu-item menu-item-has-children">
                        <a href="#">Postdoctorados</a>
                        <span class="submenu-toggle"><i class="fas fa-angle-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="https://educacionenlinea.uic.mx/postdoctorados-a-distancia/programas/postdoctorado-en-innovacion-educativa.html">Innovación Educativa en Escenarios Emergentes</a></li>
                            <li><a href="https://educacionenlinea.uic.mx/postdoctorados-a-distancia/programas/postdoctorado-en-psicoanalisis-contemporaneo.html">Psicoanálisis Contemporáneo</a></li>
                        </ul>
                    </li>

                    <li class="menu-item"><a href="https://www.uic.mx/educacion-continua/">Educación Continua</a></li>
                    <li class="menu-item"><a href="https://www.uic.mx/idiomas/">Lenguas Extranjeras</a></li>

                    <li class="menu-item menu-item-has-children">
                        <a href="#">Formación Integral</a>
                        <span class="submenu-toggle"><i class="fas fa-angle-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="https://www.uic.mx/formacion-integral/">Información General</a></li>
                            <li><a href="https://www.uic.mx/formacion-integral/coordinacion-de-formacion-humanista/">Coordinación de Formación Humanista y Bien Común</a></li>
                            <li><a href="https://www.uic.mx/formacion-integral/deportes/">Dirección de Actividades Deportivas</a></li>
                            <li><a href="https://www.uic.mx/formacion-integral/difusion-cultural/">Coordinación de Difusión Cultural</a></li>
                            <li><a href="https://www.uic.mx/formacion-integral/pastoral/">Coordinación de Pastoral UIC</a></li>
                            <li><a href="https://www.uic.mx/formacion-integral/coordinacion-responsabilidad-social-universitaria/">Coordinación Responsabilidad Social Universitaria</a></li>
                            <li><a href="https://www.uic.mx/formacion-integral/coordinacion-de-desarrollo-academico-estudiantil/">Coordinación de Desarrollo Académico Estudiantil</a></li>
                        </ul>
                    </li>

                    <li class="menu-item"><a href="https://www.uic.mx/internacionalizacion/">Internacionalización</a></li>
                    <li class="menu-item"><a href="https://servicios.uic.edu.mx/adjuntos/eval/">Evaluación Institucional</a></li>

                    <li class="menu-item menu-item-has-children">
                        <a href="#">Estudiantes</a>
                        <span class="submenu-toggle"><i class="fas fa-angle-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="https://servicios2.uic.edu.mx/Estudiantes/Paginas/Login.aspx">Consulta de Calificaciones</a></li>
                            <li><a href="https://login.microsoftonline.com/?whr=universidad-uic.edu.mx">Correo UIC</a></li>
                            <li><a href="https://www.uic.mx/calendarios/">Calendario Actividades</a></li>
                            <li><a href="https://www.uic.mx/lenguas-extranjeras/">Lenguas Extranjeras</a></li>
                            <li><a href="https://www.uic.mx/sistema-de-integridad-uic/">Sistema de Integridad UIC</a></li>
                        </ul>
                    </li>

                    <li class="menu-item menu-item-has-children">
                        <a href="#">Docentes</a>
                        <span class="submenu-toggle"><i class="fas fa-angle-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="https://servicios2.uic.edu.mx/Docentes/">Captura de Calificaciones</a></li>
                            <li><a href="https://login.microsoftonline.com/?whr=universidad-uic.edu.mx">Correo UIC</a></li>
                            <li><a href="https://servicios2.uic.edu.mx/PortalServicios/">Portal Servicios</a></li>
                        </ul>
                    </li>

                    <li class="menu-item"><a href="https://www.uic.mx/egresados/">Egresados / ExaUIC</a></li>
                    <li class="menu-item"><a href="https://www.uic.mx/internacionalizacion/becas-y-cursos">Becas y Cursos de Verano</a></li>

                    <li class="menu-item menu-item-has-children">
                        <a href="#">Servicios</a>
                        <span class="submenu-toggle"><i class="fas fa-angle-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="https://www.uic.mx/coordinacion-de-impulso-social-y-empresarial/">Coordinación de Impulso Social y Empresarial</a></li>
                            <li><a href="https://www.uic.mx/servicios/clinicas-de-salud/">Clínicas de la Salud</a></li>
                            <li><a href="https://www.uic.mx/construyendo-puentes/">Construyendo Puentes</a></li>
                            <li><a href="https://www.uic.mx/editorial-uic/">Editorial UIC</a></li>
                            <li><a href="https://biblioteca.uic.edu.mx/">Biblioteca</a></li>
                            <li><a href="https://servicios2.uic.edu.mx/Estudiantes/Paginas/Login.aspx">Pago en Línea</a></li>
                            <li><a href="https://www.uic.mx/coordinacion-de-impulso-social-y-empresarial/servicio-social/">Servicio Social</a></li>
                            <li><a href="https://www.uic.mx/departamento-de-finanzas/">Departamento de Finanzas</a></li>
                            <li><a href="https://www.uic.mx/direccion-de-tecnologias-de-informacion/">Dirección de Tecnologías de la Información</a></li>
                            <li><a href="https://uic.mx/reglamentos/Codigo-de-etica-UIC.pdf">Código de Ética</a></li>
                            <li><a href="https://www.uic.mx/circuito-saludable-uic/">Circuito Saludable</a></li>
                        </ul>
                    </li>

                    <li class="menu-item"><a href="https://www.uic.mx/coordinacion-de-psicopedagogico/">Coordinación de Psicopedagógico</a></li>
                    <li class="menu-item"><a href="https://www.uic.mx/protocolo-de-actuacion-ante-fumadores/">Protocolo de actuación ante fumadores</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>