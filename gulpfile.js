var elixir = require('laravel-elixir');
elixir.config.publicPath='compiled';

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

 elixir(function(mix) {
mix.copy('vendor/bower_components/jquery/dist/jquery.js','resources/assets/js')
	.copy('vendor/bower_components/bootstrap-sass/assets/javascripts/bootstrap.js','resources/assets/js')
	.sass('sass.scss', 'resources/assets/css',
		{
			includePaths:[
				__dirname + '/vendor/bower_components',
				__dirname + '/resources/assets/sass',
			]
		}
	)
	.styles(
		[
			'sass.css'
		]
		,null,
		'resources/assets/css'
	)
	.scripts([
		'jquery.js',
		'bootstrap.js',
		'main.js'
		],
		null,
		'resources/assets/js'
	)
	.browserSync({
		proxy:'http://tax.site'
	});
	
});