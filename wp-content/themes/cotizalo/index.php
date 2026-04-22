<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    
    <!-- Connecting custom styles dynamically to the Theme Folder -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    <!-- Nav Section -->
    <header>
        <div class="container nav-container">
            <div class="logo">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-primary" style="color: var(--primary-color);">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                </svg>
                Cotíza<span>lo</span>
            </div>
            <ul class="nav-links">
                <li><a href="#features">Características</a></li>
                <li><a href="#how-it-works">Aprender Más</a></li>
            </ul>
            <div class="nav-buttons">
                <a href="/login" class="btn btn-secondary btn-nav">Ingresar</a>
                <a href="/signup" class="btn btn-primary btn-nav" style="margin-left: 10px;">Crear Cuenta Free</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container relative">
            <div class="hero-content animate-on-scroll">
                <div class="hero-badge">⚡ Nuevo Sistema Automatizado</div>
                <h1 class="text-gradient">Transforma la forma en que cotizas tus servicios.</h1>
                <p>Olvida el Excel y el Word. Con Cotízalo, emite propuestas profesionales en segundos, controla tus ventas y asombra a tus clientes desde el primer momento.</p>
                <div class="hero-buttons">
                    <a href="/signup" class="btn btn-primary">Empieza Gratis Ahora</a>
                    <a href="#features" class="btn btn-secondary">Ver Características</a>
                </div>
            </div>

            <!-- Visualization Element (Mockup Placeholder for impact) -->
            <div class="hero-image-wrapper animate-on-scroll delay-200">
                <div style="background: rgba(15,23,42,0.8); border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; height: 350px; display: flex; flex-direction: column; padding: 20px;">
                    <div style="display: flex; gap: 10px; margin-bottom: 20px; align-items: center; border-bottom: 1px solid rgba(255,255,255,0.05); padding-bottom: 15px;">
                        <div style="width: 12px; height: 12px; border-radius: 50%; background: #ef4444;"></div>
                        <div style="width: 12px; height: 12px; border-radius: 50%; background: #eab308;"></div>
                        <div style="width: 12px; height: 12px; border-radius: 50%; background: #22c55e;"></div>
                        <div style="margin-left: 15px; color: rgba(255,255,255,0.4); font-size: 12px; font-family: monospace;">app.cotizalo.net/dashboard</div>
                    </div>
                    <div style="display: flex; gap: 20px; height: 100%;">
                        <div style="width: 200px; background: rgba(99,102,241,0.05); border-radius: 8px;"></div>
                        <div style="flex-grow: 1; display: flex; flex-direction: column; gap: 15px;">
                            <div style="height: 40px; background: linear-gradient(90deg, rgba(99,102,241,0.1), transparent); border-radius: 8px;"></div>
                            <div style="flex-grow: 1; background: rgba(255,255,255,0.02); border-radius: 8px; border: 1px dashed rgba(255,255,255,0.1); display:flex; align-items: center; justify-content: center;">
                                <span style="color: var(--primary-color);">Panel de Control en Vivo</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="container">
        <div style="text-align: center; max-width: 600px; margin: 0 auto 3rem;" class="animate-on-scroll">
            <h2 class="text-gradient">Todo lo que necesitas, en un solo lugar.</h2>
            <p>Diseñado para equipos agiles que requieren rapidez, elegancia y precisión en cada presupuesto que entregan.</p>
        </div>

        <div class="features-grid">
            <div class="feature-card animate-on-scroll delay-100">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                </div>
                <h3>Velocidad Extrema</h3>
                <p>Genera cotizaciones completas en menos de 1 minuto reutilizando plantillas y productos guardados.</p>
            </div>
            <div class="feature-card animate-on-scroll delay-200">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" /></svg>
                </div>
                <h3>Seguridad y Confianza</h3>
                <p>Toda tu información de ventas viaja asegurada mediante encriptación moderna. Nunca pierdas un dato.</p>
            </div>
            <div class="feature-card animate-on-scroll delay-300">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" /></svg>
                </div>
                <h3>Diseño Personalizado</h3>
                <p>Ajustamos colores, logo y tipografías para que cada presupueso lleve la esencia de tu marca.</p>
            </div>
        </div>
    </section>

    <!-- Bottom CTA -->
    <section class="cta-section">
        <div class="container animate-on-scroll">
            <div class="cta-box">
                <h2 style="margin-bottom: 1rem;">¿Listo para digitalizar tus ventas?</h2>
                <p style="max-width: 600px; margin: 0 auto 2rem; color: #fff; opacity: 0.8;">Únete a cientos de empresas que ya automatizan sus procesos de cotización y ahorran horas semanales administrando envíos.</p>
                <a href="/signup" class="btn btn-primary" style="background: white; color: var(--primary-color); box-shadow: none;">Crear cuenta Gratis</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="logo">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="text-primary" style="color: var(--primary-color);">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                    </svg>
                    Cotíza<span>lo</span>
                </div>
                <ul class="nav-links">
                    <li><a href="#">Términos</a></li>
                    <li><a href="#">Privacidad</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
            <div class="footer-bottom">
                &copy; <?php echo date("Y"); ?> Cotízalo Limitada. Todos los derechos reservados.
            </div>
        </div>
    </footer>

    <!-- Scripts dynamically linked -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
    <?php wp_footer(); ?>
</body>
</html>
