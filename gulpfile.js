var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var minifyCss = require('gulp-minify-css');
var sourcemaps = require('gulp-sourcemaps');

var js_path = 'resources/assets/js/';
var css_path = 'resources/assets/css/';

gulp.task('sass', function () {
	gulp.src('resources/assets/sass/app.scss')
		.pipe(sass.sync().on('error', sass.logError))
		.pipe(gulp.dest('./resources/assets/css/'));
});

gulp.task('styles', function() {
	return gulp.src([
			css_path + 'normalize.css',
			css_path + 'bootstrap.min.css',
			css_path + 'swiper.css',
			css_path + 'timeline.css',
			css_path + 'owl.carousel.css',
			css_path + 'owl.theme.css',
			css_path + 'prettyPhoto.css',
			css_path + 'overlay.css',
			css_path + 'app.css'
		])
		.pipe(sourcemaps.init())
			.pipe(concat('all.css'))
			.pipe(minifyCss({compatibility: 'ie8'}))
		.pipe(sourcemaps.write('../sourcemaps'))
		.pipe(gulp.dest('./public/css/'));
});

gulp.task('scripts', function() {
  return gulp.src([
  		js_path + 'vendor/jquery.js',
  		js_path + 'vendor/bootstrap.min.js',
  		js_path + 'vendor/swiper.js',
  		js_path + 'vendor/owl.carousel.js',
  		js_path + 'vendor/timeline.js',
  		js_path + 'vendor/classie.js',
  		js_path + 'vendor/jquery.easing.min.js',
  		js_path + 'vendor/jquery.prettyPhoto.js',
  		js_path + 'vendor/overlay.js',
  		js_path + 'app.js' 
  	])
    .pipe(concat('all.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./public/js/'));
});

gulp.task('default', function() {
	gulp.watch('resources/assets/sass/*.scss', ['sass', 'styles']);
	gulp.watch('resources/assets/js/app.js', ['scripts']);
});