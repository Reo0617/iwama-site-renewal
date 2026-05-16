<?php
/**
 * 肉のいわま Renewal — functions.php
 *
 * 読み込み順:
 *   1. cocoon-master (親テーマ) の style.css
 *   2. nikunoiwama (旧子テーマ) の bootstrap + base.min.css を継承
 *   3. 本子テーマの style.css (テーマヘッダのみ)
 *   4. assets/css/overlay.css (デザイン刷新の本体)
 *   5. assets/js/cta-bar.js (スマホ固定CTAバー)
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'wp_enqueue_scripts', function () {

	// 1. 親テーマ (cocoon-master) CSS
	wp_enqueue_style(
		'cocoon-parent',
		get_template_directory_uri() . '/style.css'
	);

	// 2. 旧子テーマ nikunoiwama の CSS を継承
	//    デプロイ後、同サーバーに nikunoiwama フォルダが残る前提
	$old_child_base = get_template_directory_uri();
	$old_child_base = str_replace( '/cocoon-master', '/nikunoiwama', $old_child_base );

	wp_enqueue_style(
		'nikunoiwama-bootstrap',
		$old_child_base . '/css/bootstrap.min.css',
		array( 'cocoon-parent' )
	);

	wp_enqueue_style(
		'nikunoiwama-base',
		$old_child_base . '/css/base.min.css',
		array( 'nikunoiwama-bootstrap' )
	);

	// 3. 本子テーマ style.css
	wp_enqueue_style(
		'iwama-renewal-style',
		get_stylesheet_uri(),
		array( 'nikunoiwama-base' )
	);

	// 4. overlay.css (デザイン刷新の本体)
	$overlay_file = get_stylesheet_directory() . '/assets/css/overlay.css';
	if ( file_exists( $overlay_file ) ) {
		wp_enqueue_style(
			'iwama-overlay',
			get_stylesheet_directory_uri() . '/assets/css/overlay.css',
			array( 'iwama-renewal-style' ),
			filemtime( $overlay_file )
		);
	}

	// 5. スマホ固定CTAバー JS
	$cta_file = get_stylesheet_directory() . '/assets/js/cta-bar.js';
	if ( file_exists( $cta_file ) ) {
		wp_enqueue_script(
			'iwama-cta-bar',
			get_stylesheet_directory_uri() . '/assets/js/cta-bar.js',
			array(),
			filemtime( $cta_file ),
			true // フッターで読み込む
		);
	}

}, 20 );
