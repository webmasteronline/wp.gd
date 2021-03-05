// VARIABLES & PATHS

let preprocessor = 'sass', // Preprocessor (sass, scss, less, styl)
    fileswatch   = 'php,html,htm,txt,json,md,woff2', // List of files extensions for watching & hard reload (comma separated)
    imageswatch  = 'jpg,jpeg,png,webp,svg', // List of images extensions for watching & compression (comma separated)
    baseDir      = 'app/wp-content/themes/portfolio', // Base directory path without «/» at the end
    online       = true; // If «false» - Browsersync will work offline without internet connection

let paths = {

	scripts: {
		src: [
			// 'node_modules/jquery/dist/jquery.min.js', // npm vendor example (npm i --save-dev jquery)
			'app/wp-content/themes/portfolio/assets/libs/jquery/jquery-2.1.3.min.js',
			'app/wp-content/themes/portfolio/assets/libs/parallax/parallax.min.js',
			'app/wp-content/themes/portfolio/assets/libs/magnific-popup/jquery.magnific-popup.min.js',
			'app/wp-content/themes/portfolio/assets/libs/mixitup/mixitup.min.js',
			'app/wp-content/themes/portfolio/assets/libs/PageScroll2id/PageScroll2id.min.js',
			'app/wp-content/themes/portfolio/assets/libs/waypoints/waypoints.min.js',		
			'app/wp-content/themes/portfolio/assets/libs/animate/animate-css.js',
			'app/wp-content/themes/portfolio/assets/libs/jqBootstrapValidation/jqBootstrapValidation.js',
			'app/wp-content/themes/portfolio/assets/libs/imagesloaded/imagesloaded.pkgd.min.js',
			'app/wp-content/themes/portfolio/assets/libs/imagefill/jquery-imagefill.js',
			'app/wp-content/themes/portfolio/assets/libs/font-awesome/js/all.min.js',
			'app/wp-content/themes/portfolio/assets/libs/masonry/masonry.pkgd.min.js',
			'app/wp-content/themes/portfolio/assets/libs/slick/slick.js',
			baseDir + '/assets/js/common.js' // app.js. Always at the end

		],
		dest: baseDir + '/assets/js',
	},

	styles: {
		src: [
			'app/wp-content/themes/portfolio/assets/libs/bootstrap/dist/css/bootstrap-reboot.min.css',
			'app/wp-content/themes/portfolio/assets/libs/bootstrap/dist/css/bootstrap-grid.min.css',
			'app/wp-content/themes/portfolio/assets/libs/bootstrap/dist/css/bootstrap.min.css',
			'app/wp-content/themes/portfolio/assets/libs/font-awesome/css/all.min.css',
			'app/wp-content/themes/portfolio/assets/libs/font-awesome/css/font-awesome.min.css',
			'app/wp-content/themes/portfolio/assets/libs/linea/styles.css',
			'app/wp-content/themes/portfolio/assets/libs/magnific-popup/magnific-popup.css',			//'app/wp-content/themes/portfolio/assets/libs/bootstrap/scss/bootstrap-reboot.scss',
			//'app/wp-content/themes/portfolio/assets/libs/bootstrap/scss/bootstrap.scss',
			baseDir + '/assets/' + preprocessor + '/main.*',
		] ,
		dest: baseDir + '/assets/css',
	},

	images: {
		src:  baseDir + '/assets/img/**/*',
		dest: baseDir + '/assets/img/dest',
	},



	cssOutputName: 'app.min.css',
	jsOutputName:  'app.min.js',

}

// LOGIC

const { src, dest, parallel, series, watch } = require('gulp');
const sass         = require('gulp-sass');
const scss         = require('gulp-sass');
const less         = require('gulp-less');
const styl         = require('gulp-stylus');
const cleancss     = require('gulp-clean-css');
const concat       = require('gulp-concat');
const browserSync  = require('browser-sync').create();
const uglify       = require('gulp-uglify-es').default;
const autoprefixer = require('gulp-autoprefixer');
const imagemin     = require('gulp-imagemin');
const newer        = require('gulp-newer');
const rsync        = require('gulp-rsync');
const del          = require('del');
const	ftp          = require('vinyl-ftp');

function browsersync() {
	browserSync.init({
		//server: { baseDir: baseDir + '/' },
		proxy: "wp.gd",
		notify: false,
		online: online
	})
}

function scripts() {
	return src(paths.scripts.src)
	.pipe(concat(paths.jsOutputName))
	.pipe(uglify())
	.pipe(dest(paths.scripts.dest))
	.pipe(browserSync.stream())
}

function styles() {
	return src(paths.styles.src)
	.pipe(eval(preprocessor)())
	.pipe(concat(paths.cssOutputName))
	.pipe(autoprefixer({ overrideBrowserslist: ['last 10 versions'], grid: true }))
	.pipe(cleancss( {level: { 1: { specialComments: 0 } }, format: 'beautify'  }))
	.pipe(dest(paths.styles.dest))
	.pipe(browserSync.stream())
}

function images() {
	return src(paths.images.src)
	.pipe(newer(paths.images.dest))
	.pipe(imagemin())
	.pipe(dest(paths.images.dest))
}

function cleanimg() {
	return del('' + paths.images.dest + '/**/*', { force: true })
}

const deploy = () => {
    let conn = ftp.create( {
        host:     'ftp4.hostland.ru',
        user:     'host1310602',
        password: '26ad7cf5',
        parallel: 10,
        log: gutil.log
    } );

    let globs = [
		'app/wp-content/themes/portfolio/**'
		];

		return src(globs,{
			base: 'app/wp-content/themes/portfolio',
			buffer: true
		})
		.pipe( conn.dest( '/webmasteronline.ru/htdocs/www/wp-content/themes/portfolio' ));

};



function startwatch() {
	watch(baseDir  + '/assets/' + preprocessor + '/**/*', {usePolling: true}, styles);
	watch(baseDir  + '/assets/images/src/**/*.{' + imageswatch + '}', {usePolling: true}, images);
	watch(baseDir  + '/**/*.{' + fileswatch + '}', {usePolling: true}).on('change', browserSync.reload);
	watch([baseDir + '/assets/js/**/*.js', '!' + paths.scripts.dest + '/*.min.js'], {usePolling: true}, scripts);
}

exports.browsersync = browsersync;
exports.assets      = series(cleanimg, styles, scripts, images);
exports.styles      = styles;
exports.scripts     = scripts;
exports.images      = images;
exports.cleanimg    = cleanimg;
exports.deploy      = deploy;
exports.default     = parallel(images, styles, scripts, browsersync, startwatch);
