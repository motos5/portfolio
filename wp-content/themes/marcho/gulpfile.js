const gulp = require('gulp');
const { src, dest, watch, parallel, series } = require('gulp');
const scss = require('gulp-sass')(require('sass')); //  Конвертация из SCSS в CSS
const concat = require('gulp-concat');  //  Переименовывает и объединяет файлы в один
const autoprefixer = require('gulp-autoprefixer');  //  Добавляет вендорные префиксы в CSS
const uglify = require('gulp-uglify-es').default; //  Минифицирует JS айлы
const imagemin = require('gulp-imagemin');
const clean = require('gulp-clean');
// const browserSync = require('browser-sync').create();

function styles() {
	return src('app/scss/style.scss')
		.pipe(
			autoprefixer({
				overrideBrowserslist: ['last 10 versions'],
			})
		)
		.pipe(scss({ outputStyle: 'compressed' }))
		.pipe(concat('style.min.css'))
		.pipe(dest('assets/css/frontend'));
		// .pipe(browserSync.stream());
}

function scripts() {
	return src([
		'node_modules/slick-carousel/slick/slick.js',
		'node_modules/ion-rangeslider/js/ion.rangeSlider.js',
		'node_modules/rateyo/src/jquery.rateyo.js',
		'app/js/main.js',
	])
	.pipe(concat('main.min.js'))
		.pipe(uglify())
		.pipe(dest('assets/js/frontend'));
		// .pipe(browserSync.stream());
}

function images() {
	return src('app/images/**/*.*')
	.pipe(
		imagemin([
			imagemin.gifsicle({ interlaced: true }),
			imagemin.mozjpeg({ quality: 75, progressive: true }),
			imagemin.optipng({ optimizationLevel: 5 }),
			imagemin.svgo({
				plugins: [{ removeViewBox: true }, { cleanupIDs: false }],
			}),
		])
	)
	.pipe(dest('assets/img'));
}

function watching() {
	watch(['app/scss/**/*.scss'], styles);
	watch(['app/js/**/*.js', '!app/js/main.min.js'], scripts);
	// watch(['**/**/*.php']).on('change', browserSync.reload);
}


function build() {
	return src(['assets/css/frontend/style.min.css', 'assets/js/frontend/main.min.js'], {
		base: 'assets',
	}).pipe(dest('dist'));
}

function cleanDist() {
	return src('dist')
		.pipe(clean());
}


/*
function browsersync() {
	browserSync.init({
		server: {
			baseDir: 'app/',
		},
	});
}
*/


exports.styles = styles;
exports.scripts = scripts;
exports.images = images;
// exports.browsersync = browsersync;
exports.watching = watching;


exports.build = series(cleanDist, images, build);
exports.default = parallel(styles, scripts, watching);
