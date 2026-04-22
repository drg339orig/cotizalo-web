<?php
/**
 * Cotizalo Theme Functions
 */

if ( ! function_exists( 'cotizalo_theme_setup' ) ) {
    function cotizalo_theme_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'custom-logo' );
    }
}
add_action( 'after_setup_theme', 'cotizalo_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function cotizalo_scripts() {
    wp_enqueue_style( 'cotizalo-style', get_template_directory_uri() . '/assets/assets/css/styles.css', array(), '1.0.3' );
    wp_enqueue_style( 'google-fonts-montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap', array(), null );
}
add_action( 'wp_enqueue_scripts', 'cotizalo_scripts' );

/**
 * Register Customizer Settings
 */
function cotizalo_customize_register( $wp_customize ) {
    // ---------------------------------------------
    // PANEL: Hero Section
    // ---------------------------------------------
    $wp_customize->add_section('cotizalo_hero_section', array(
        'title' => __('Hero Section', 'cotizalo'),
        'priority' => 30,
    ));

    // Hero Title
    $wp_customize->add_setting('hero_title', array('default' => 'Tu portal web para cotizaciones.'));
    $wp_customize->add_control('hero_title', array(
        'label' => __('Título Principal', 'cotizalo'),
        'section' => 'cotizalo_hero_section',
        'type' => 'textarea',
    ));
    // Hero Subtitle
    $wp_customize->add_setting('hero_subtitle', array('default' => 'Olvida el Excel. Una identidad técnica, segura y seria, ideal para microempresas.'));
    $wp_customize->add_control('hero_subtitle', array(
        'label' => __('Subtítulo', 'cotizalo'),
        'section' => 'cotizalo_hero_section',
        'type' => 'textarea',
    ));

    // Hero Button Text
    $wp_customize->add_setting('hero_btn_text', array('default' => 'Crear tu primera cotización'));
    $wp_customize->add_control('hero_btn_text', array(
        'label' => __('Texto del Botón', 'cotizalo'),
        'section' => 'cotizalo_hero_section',
        'type' => 'text',
    ));

    // Hero Button Link
    $wp_customize->add_setting('hero_btn_link', array('default' => '/signup'));
    $wp_customize->add_control('hero_btn_link', array(
        'label' => __('Enlace del Botón', 'cotizalo'),
        'section' => 'cotizalo_hero_section',
        'type' => 'url',
    ));

    // ---------------------------------------------
    // PANEL: Features Section
    // ---------------------------------------------
    $wp_customize->add_section('cotizalo_features_section', array(
        'title' => __('Sección de Características', 'cotizalo'),
        'priority' => 31,
    ));

    $wp_customize->add_setting('features_title', array('default' => 'Interfaz limpia, segura y profesional.'));
    $wp_customize->add_control('features_title', array(
        'label' => __('Título Principal', 'cotizalo'),
        'section' => 'cotizalo_features_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('features_subtitle', array('default' => 'Diseñado para equipos que requieren rapidez y precisión, eliminando la frialdad de Excel en cada presupuesto.'));
    $wp_customize->add_control('features_subtitle', array(
        'label' => __('Subtítulo Principal', 'cotizalo'),
        'section' => 'cotizalo_features_section',
        'type' => 'textarea',
    ));

    // Feature 1
    $wp_customize->add_setting('feat_1_title', array('default' => 'Cotizando hechos y retornos!'));
    $wp_customize->add_control('feat_1_title', array('label' => __('F1 Título', 'cotizalo'), 'section' => 'cotizalo_features_section', 'type' => 'text'));
    $wp_customize->add_setting('feat_1_desc', array('default' => 'Genera cotizaciones completas reutilizando plantillas dinámicas y tu catálogo de productos guardados.'));
    $wp_customize->add_control('feat_1_desc', array('label' => __('F1 Descripción', 'cotizalo'), 'section' => 'cotizalo_features_section', 'type' => 'textarea'));

    // Feature 2
    $wp_customize->add_setting('feat_2_title', array('default' => 'Seriedad Técnica'));
    $wp_customize->add_control('feat_2_title', array('label' => __('F2 Título', 'cotizalo'), 'section' => 'cotizalo_features_section', 'type' => 'text'));
    $wp_customize->add_setting('feat_2_desc', array('default' => 'Toda tu información de ventas viaja asegurada. Tus datos y los de tus clientes están a salvo en una plataforma estable.'));
    $wp_customize->add_control('feat_2_desc', array('label' => __('F2 Descripción', 'cotizalo'), 'section' => 'cotizalo_features_section', 'type' => 'textarea'));

    // Feature 3
    $wp_customize->add_setting('feat_3_title', array('default' => 'Presupuesto Organizado'));
    $wp_customize->add_control('feat_3_title', array('label' => __('F3 Título', 'cotizalo'), 'section' => 'cotizalo_features_section', 'type' => 'text'));
    $wp_customize->add_setting('feat_3_desc', array('default' => 'Diseño web y móvil integrado que permite llevar el control de todo tu negocio desde la palma de tu mano.'));
    $wp_customize->add_control('feat_3_desc', array('label' => __('F3 Descripción', 'cotizalo'), 'section' => 'cotizalo_features_section', 'type' => 'textarea'));

    // ---------------------------------------------
    // PANEL: CTA Section
    // ---------------------------------------------
    $wp_customize->add_section('cotizalo_cta_section', array(
        'title' => __('Llamado a la Acción (CTA)', 'cotizalo'),
        'priority' => 32,
    ));

    $wp_customize->add_setting('cta_title', array('default' => '¿Listo para digitalizar tus ventas?'));
    $wp_customize->add_control('cta_title', array('label' => __('Título CTA', 'cotizalo'), 'section' => 'cotizalo_cta_section', 'type' => 'text'));

    $wp_customize->add_setting('cta_desc', array('default' => 'Únete a la revolución de las ventas digitales y asombra a tus clientes con propuestas modernas.'));
    $wp_customize->add_control('cta_desc', array('label' => __('Descripción CTA', 'cotizalo'), 'section' => 'cotizalo_cta_section', 'type' => 'textarea'));
}
add_action('customize_register', 'cotizalo_customize_register');
