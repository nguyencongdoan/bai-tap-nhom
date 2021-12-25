<?php 
add_action( 'wp_enqueue_scripts', 'personalistio_blog_enqueue_styles' );
function personalistio_blog_enqueue_styles() {
	wp_enqueue_style( 'personalistio-blog-parent-style', get_template_directory_uri() . '/style.css' ); 
} 

function personalistio_blog_google_fonts() {
	wp_enqueue_style( 'personalistio-blog-google-fonts', '//fonts.googleapis.com/css?family=Lora:500,500i|Noto+Sans:400,400i', false ); 
}
add_action( 'wp_enqueue_scripts', 'personalistio_blog_google_fonts' );

function personalistio_blog_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'personalistio-blog' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'personalistio-blog' ),
		'before_widget' => '<section id="%1$s" class="fbox swidgets-wrap widget %2$s"><div class="sidebar-widget-outer">',
		'after_widget'  => '</div></section>',
		'before_title'  => '<div class="swidget"><div class="sidebar-title-border"><h3 class="widget-title">',
		'after_title'   => '</h3></div></div><div class="swidget-content-inner">',
	) );
}
add_action( 'widgets_init', 'personalistio_blog_widgets_init', 999 );


function personalistio_blog_customize_register( $wp_customize ) {
	
	$wp_customize->add_section( 'personalistio_blog_customization', array(
		'title'      => __('Personalistio Blog','personalistio-blog'),
		'priority'   => 1,
		'capability' => 'edit_theme_options',
	) );

	$wp_customize->add_setting( 'full_width_mode', array(
		'default' => 0,
		'sanitize_callback' => 'personalistio_blog_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'full_width_mode', array(
		'label'    => __( 'Full Width (Hide sidebar)', 'personalistio-blog' ),
		'section'  => 'personalistio_blog_customization',
		'priority' => 1,
		'settings' => 'full_width_mode',
		'type'     => 'checkbox',
	) );
	$wp_customize->add_setting( 'sidebar_headline_border_bottom_color', array(
		'default'           => '#f5eae5',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_headline_border_bottom_color', array(
		'label'       => __( 'Sidebar Headline Border Bottom Color', 'personalistio-blog' ),
		'section'     => 'personalistio_blog_customization',
		'priority'   => 1,
		'settings'    => 'sidebar_headline_border_bottom_color',
	) ) );
		$wp_customize->add_setting( 'blogfeed_continue_reading_button', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'blogfeed_continue_reading_button', array(
		'label'       => __( 'Post Feed Continue Reading Color', 'personalistio-blog' ),
		'section'     => 'personalistio_blog_customization',
		'priority'   => 1,
		'settings'    => 'blogfeed_continue_reading_button',
	) ) );
	$wp_customize->add_setting( 'header_logo_color', array(
		'default'           => '#000222',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_setting( 'header_background_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_setting( 'sidebar_headline_color', array(
		'default'           => '#2b2b2b',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_setting( 'sidebar_link_color', array(
		'default'           => '#2b2b2b',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_setting( 'sidebar_text_color', array(
		'default'           => '#2b2b2b',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_setting( 'sidebar_border_color', array(
		'default'           => '#f5eae5',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_setting( 'blogfeed_headline_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_setting( 'blogfeed_byline_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_setting( 'blogfeed_text_color', array(
		'default'           => '#656565',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_setting( 'blogfeed_buttonbg_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_setting( 'blogfeed_buttontext_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_setting( 'blogfeed_border_color', array(
		'default'           => '#f5eae5',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_setting( 'postpage_headline_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_setting( 'postpage_byline_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_setting( 'postpage_text_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_setting( 'postpage_link_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_setting( 'postpage_buttonbg_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_setting( 'postpage_buttontext_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );

	$wp_customize->add_setting( 'postpage_border_color', array(
		'default'           => '#f5eae5',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	
	function personalistio_blog_sanitize_checkbox( $input ) {
		return ( ( isset( $input ) && true == $input ) ? true : false );
	}
}
add_action( 'customize_register', 'personalistio_blog_customize_register', 999 );


if(! function_exists('personalistio_blog_customizer_css_final_output' ) ):
	function personalistio_blog_customizer_css_final_output(){
		?>

		<style type="text/css">
			<?php if ( get_theme_mod( 'full_width_mode' ) == '1' ) : ?>
				aside#secondary { display:none; }
				.featured-content { width:100%; margin-right:0px; }
			<?php endif; ?>
			.excerpt-read-more-link {  color: <?php echo esc_attr(get_theme_mod( 'blogfeed_continue_reading_button')); ?>; }
			.swidgets-wrap .sidebar-title-border {  border-bottom-color: <?php echo esc_attr(get_theme_mod( 'sidebar_headline_border_bottom_color')); ?>; }
			body, .site, .swidgets-wrap h3, .post-data-text { background: <?php echo esc_attr(get_theme_mod( 'website_background_color')); ?>; }
			.site-title a, .site-description { color: <?php echo esc_attr(get_theme_mod( 'header_logo_color')); ?>; }
			.sheader { background-color: <?php echo esc_attr(get_theme_mod( 'header_background_color')); ?>; }
			.super-menu, #smobile-menu, .primary-menu, .primary-menu ul li ul.children, .primary-menu ul li ul.sub-menu { background-color: <?php echo esc_attr(get_theme_mod( 'navigation_background_color')); ?>; }
			.main-navigation ul li a, .main-navigation ul li .sub-arrow, .super-menu .toggle-mobile-menu, .mobile-menu-active .smenu-hide { color: <?php echo esc_attr(get_theme_mod( 'navigation_text_color')); ?>; }
			#smobile-menu.show .main-navigation ul ul.children.active, #smobile-menu.show .main-navigation ul ul.sub-menu.active, #smobile-menu.show .main-navigation ul li, .smenu-hide.toggle-mobile-menu.menu-toggle, #smobile-menu.show .main-navigation ul li, .primary-menu ul li ul.children li, .primary-menu ul li ul.sub-menu li { border-color: <?php echo esc_attr(get_theme_mod( 'navigation_border_color')); ?>; border-bottom-color: <?php echo esc_attr(get_theme_mod( 'navigation_border_color')); ?>; }
			#secondary .widget h3, #secondary .widget h3 a, #secondary .widget h4, #secondary .widget h1, #secondary .widget h2, #secondary .widget h5, #secondary .widget h6 { color: <?php echo esc_attr(get_theme_mod( 'sidebar_headline_color')); ?>; }
			#secondary .widget a, #secondary a, #secondary .widget li a , #secondary span.sub-arrow{ color: <?php echo esc_attr(get_theme_mod( 'sidebar_link_color')); ?>; }
			#secondary, #secondary .widget, #secondary .widget p, #secondary .widget li, .widget time.rpwe-time.published { color: <?php echo esc_attr(get_theme_mod( 'sidebar_text_color')); ?>; }
			#secondary .swidgets-wrap, #secondary .widget ul li, .featured-sidebar .search-field { border-color: <?php echo esc_attr(get_theme_mod( 'sidebar_border_color')); ?>; }
			.site-info, .footer-column-three input.search-submit, .footer-column-three p, .footer-column-three li, .footer-column-three td, .footer-column-three th, .footer-column-three caption { color: <?php echo esc_attr(get_theme_mod( 'footer_text_color')); ?>; }
			.footer-column-three h3, .footer-column-three h4, .footer-column-three h5, .footer-column-three h6, .footer-column-three h1, .footer-column-three h2, .footer-column-three h4, .footer-column-three h3 a { color: <?php echo esc_attr(get_theme_mod( 'footer_headline_color')); ?>; }
			.footer-column-three a, .footer-column-three li a, .footer-column-three .widget a, .footer-column-three .sub-arrow { color: <?php echo esc_attr(get_theme_mod( 'footer_link_color')); ?>; }
			.footer-column-three h3:after { background: <?php echo esc_attr(get_theme_mod( 'footer_border_color')); ?>; }
			.site-info, .widget ul li, .footer-column-three input.search-field, .footer-column-three input.search-submit { border-color: <?php echo esc_attr(get_theme_mod( 'footer_border_color')); ?>; }
			.site-footer { background-color: <?php echo esc_attr(get_theme_mod( 'footer_background_color')); ?>; }
			.archive .page-header h1, .blogposts-list h2 a, .blogposts-list h2 a:hover, .blogposts-list h2 a:active, .search-results h1.page-title { color: <?php echo esc_attr(get_theme_mod( 'blogfeed_headline_color')); ?>; }
			.blogposts-list .post-data-text, .blogposts-list .post-data-text a{ color: <?php echo esc_attr(get_theme_mod( 'blogfeed_byline_color')); ?>; }
			.blogposts-list p { color: <?php echo esc_attr(get_theme_mod( 'blogfeed_text_color')); ?>; }
			.page-numbers li a, .blogposts-list .blogpost-button { background: <?php echo esc_attr(get_theme_mod( 'blogfeed_buttonbg_color')); ?>; }
			.page-numbers li a, .blogposts-list .blogpost-button, span.page-numbers.dots, .page-numbers.current, .page-numbers li a:hover { color: <?php echo esc_attr(get_theme_mod( 'blogfeed_buttontext_color')); ?>; }
			.archive .page-header h1, .search-results h1.page-title, .blogposts-list.fbox, span.page-numbers.dots, .page-numbers li a, .page-numbers.current { border-color: <?php echo esc_attr(get_theme_mod( 'blogfeed_border_color')); ?>; }
			.blogposts-list .post-data-divider { background: <?php echo esc_attr(get_theme_mod( 'blogfeed_border_color')); ?>; }
			.page .comments-area .comment-author, .page .comments-area .comment-author a, .page .comments-area .comments-title, .page .content-area h1, .page .content-area h2, .page .content-area h3, .page .content-area h4, .page .content-area h5, .page .content-area h6, .page .content-area th, .single  .comments-area .comment-author, .single .comments-area .comment-author a, .single .comments-area .comments-title, .single .content-area h1, .single .content-area h2, .single .content-area h3, .single .content-area h4, .single .content-area h5, .single .content-area h6, .single .content-area th, .search-no-results h1, .error404 h1 { color: <?php echo esc_attr(get_theme_mod( 'postpage_headline_color')); ?>; }
			.single .post-data-text, .page .post-data-text, .page .post-data-text a, .single .post-data-text a, .comments-area .comment-meta .comment-metadata a { color: <?php echo esc_attr(get_theme_mod( 'postpage_byline_color')); ?>; }
			.page .content-area p, .page article, .page .content-area table, .page .content-area dd, .page .content-area dt, .page .content-area address, .page .content-area .entry-content, .page .content-area li, .page .content-area ol, .single .content-area p, .single article, .single .content-area table, .single .content-area dd, .single .content-area dt, .single .content-area address, .single .entry-content, .single .content-area li, .single .content-area ol, .search-no-results .page-content p { color: <?php echo esc_attr(get_theme_mod( 'postpage_text_color')); ?>; }
			.single .entry-content a, .page .entry-content a, .comment-content a, .comments-area .reply a, .logged-in-as a, .comments-area .comment-respond a { color: <?php echo esc_attr(get_theme_mod( 'postpage_link_color')); ?>; }
			.comments-area p.form-submit input { background: <?php echo esc_attr(get_theme_mod( 'postpage_buttonbg_color')); ?>; }
			.error404 .page-content p, .error404 input.search-submit, .search-no-results input.search-submit { color: <?php echo esc_attr(get_theme_mod( 'postpage_text_color')); ?>; }
			.page .comments-area, .page article.fbox, .page article tr, .page .comments-area ol.comment-list ol.children li, .page .comments-area ol.comment-list .comment, .single .comments-area, .single article.fbox, .single article tr, .comments-area ol.comment-list ol.children li, .comments-area ol.comment-list .comment, .error404 main#main, .error404 .search-form label, .search-no-results .search-form label, .error404 input.search-submit, .search-no-results input.search-submit, .error404 main#main, .search-no-results section.fbox.no-results.not-found{ border-color: <?php echo esc_attr(get_theme_mod( 'postpage_border_color')); ?>; }
			.single .post-data-divider, .page .post-data-divider { background: <?php echo esc_attr(get_theme_mod( 'postpage_border_color')); ?>; }
			.single .comments-area p.form-submit input, .page .comments-area p.form-submit input { color: <?php echo esc_attr(get_theme_mod( 'postpage_buttontext_color')); ?>; }
		</style>
	<?php }
	add_action( 'wp_head', 'personalistio_blog_customizer_css_final_output' );
endif;


function personalistio_blog_more($more) {
	global $post;
	return '… <a href="'. get_permalink($post->ID) . '" class="excerpt-read-more-link">' . 'Continue reading' . '</a>';
}
add_filter('excerpt_more', 'personalistio_blog_more', 999);


function personalistio_blog_customize_preview_js() {
	wp_enqueue_script( 'personalistio-blog-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'personalistio_blog_customize_preview_js' );
