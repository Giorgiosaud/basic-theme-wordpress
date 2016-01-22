<?php 
namespace WordpressBase;

use WordpressBase\Menus\Menus;
use WordpressBase\Sizes\Sizes;
use WordpressBase\Styles\Styles;
use WordpressBase\Scripts\Scripts;
use WordpressBase\ThemeSupport\Logo;
use WordpressBase\CustomPosts\Equipo;
use WordpressBase\Plugins\RequestedPlugins;
use WordpressBase\ThemeSupport\PostFormats;
use WordpressBase\ThemeSupport\PostThumbnails;
use WordpressBase\ThemeSupport\CustomBackground;
class Initializer{
	private $clasesAInicializar=array(
		// Equipo::class=>array(),
		RequestedPlugins::class=>array(),
		Logo::class=>array(
			'default-image'          => '/img/logo.png',
			// 'width'                  => 0,
			// 'height'                 => 0,
			// 'flex-height'            => true,
			// 'flex-width'             => false,
			// 'uploads'                => true,
			// 'random-default'         => false,
			// 'header-text'            => true,
			// 'default-text-color'     => '',
			// 'wp-head-callback'       => '',
			// 'admin-head-callback'    => '',
			// 'admin-preview-callback' => '',
			),
		// PostFormats:class=>array(
			// 'aside', 
			// 'gallery',
			// 'link',
			// 'image',
			// 'quote',
			// 'status',
			// 'video',
			// 'audio',
			// 'chat',
		// ),
		// PostThumbnails::class=>array(),
		CustomBackground::class=>array(
			// 'default-color'          => '',
			// 'default-image'          => '',
			// 'wp-head-callback'       => '_custom_background_cb',
			// 'admin-head-callback'    => '',
			// 'admin-preview-callback' => ''
			),
		Menus::class=>array(
			'header-menu'=>'Menu Cabecera',
			),
		Scripts::class=>array(
            array(
                'tagName'=>'alljs', 
                'src'=>'/compiled/js/all.js', 
                'deps'=>array(), 
                'ver'=>'1.0',
                'cdn'=>false,
                ),
            ),
        Styles::class=>array(
            array(
                'tagName'=>'allcss', 
                'src'=>'/compiled/css/all.css', 
                'deps'=>array(), 
                'ver'=>'1.0',
                'media'=>null,
                'cdn'=>false,
                ),
            array(
            	'tagName'=>'socicon',
            	'src'=>'https://file.myfontastic.com/n6vo44Re5QaWo8oCKShBs7/icons.css',
            	'cdn'=>true
            	),
            ),
        Sizes::class=>array(
        	array(
        		'name'=>'slider',
        		'XWidth'=>1900,
        		'YWidth'=>400,
        		'crop'=>array('center','center')
        		),
        	array(
        		'name'=>'services',
        		'XWidth'=>200,
        		'YWidth'=>200,
        		'crop'=>array('center','center')
        		)

        	)


		);

public function __construct()
{
	$this->clasesinitializer();
}
private function clasesinitializer(){
	foreach ($this->clasesAInicializar as $clase=>$arreglo) {
		if(count($arreglo)==0){
			new $clase;
		}
		else{
			new $clase($arreglo);
		}
	}
	$company= new \WordpressBase\CustomPosts\OurCompany();
	$Service= new \WordpressBase\CustomPosts\Service();
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	add_theme_support( 'title-tag' );
}

}