<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SimPro
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="SHORTCUT ICON" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
  <link href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?><!-- bodyタグの直後に何かを挿入したい場合bodyタグ直下に設置して用いる（scriptタグなど）。wp_head等と同じ -->
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="site-branding container">
		    <?php
						// 現在のサイトに登録されているカスタムロゴを表示する。
          the_custom_logo(); 
        ?>
				<?php
					// サイトの説明が設定されていれば表示する
					$sample_theme_description = get_bloginfo( 'description', 'display' );
					if ( $sample_theme_description || is_customize_preview() ) :
				?>
				  <!-- サイトの説明文 -->
				  <p class="site-description"><?php echo $sample_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			  <?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="true"><?php esc_html_e( 'Primary Menu', 'sample-theme' ); ?></button>
				<?php
				wp_nav_menu(
					array(
            // 囲うdiv要素に指定するclass
            'menu_class' => 'container',
            // 管理画面のメニュー名
            'theme_location' => 'header-navigation',
            // メニューアイテムリストのulに指定するclass
						'menu_id'        => 'header-navigation',
					)
				);
				?>
			</ul>
		</nav><!-- #site-navigation -->


	</header><!-- #masthead -->
