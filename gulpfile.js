var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var del = require('del');
var requireDir = require('require-dir');
var runSequence = require('run-sequence');
var cache = require('gulp-cache');
var imagemin = require('gulp-imagemin');
var browserSync = require('browser-sync');
var concat = require('gulp-concat');
var autoprefixer = require('gulp-autoprefixer');
var autoprefixerOptions = {browsers: ['last 2 versions', '> 5%', 'Firefox ESR']};

var source = './source/';
var target = './plugins/Site/webroot/';

var mobile_source = './mobile_source/';
var mobile_target = './plugins/Site/webroot/mobile/';

var tasks = requireDir('./tasks');
var vendorPath = 'node_modules/';

var dest = 'default';

//gulp.task('default', ['clean:dist']);
gulp.task('default', function(callback) {
  runSequence(['images', 'sass', 'fonts', 'scripts', 'browserSync'], 'watch',
  callback
)
});

gulp.task('build', function(callback) {
  dest = 'default';
  runSequence(
    'clean:dist',
    ['sass', 'images', 'fonts', 'scripts'],
    callback
  )
});

gulp.task('mbuild', function(callback) {
  dest = 'mobile';
  runSequence(
    'clean:dist',
    ['sass', 'images', 'fonts', 'scripts'],
    callback
  )
});

// Watchers
gulp.task('watch', function() {
  gulp.watch(source + 'scss/**/*.scss', ['sass']);
  gulp.watch(source + '*.html', ['html']);
  gulp.watch('./plugins/Site/**/*.ctp', ['ctp']);
  gulp.watch(source + 'js/**/*.js', ['scripts']);
})

gulp.task('browserSync',[], function() {
  browserSync({
    proxy: 'http://localhost/ccrj-cake3',
  });
});

gulp.task('ctp', function() {
  return gulp.src('./plugins/Site/**/*.ctp')
  .pipe(browserSync.reload({ // Reloading with Browser Sync
    stream: true
  }));
});

gulp.task('sass', function () {
  if(dest == 'mobile'){
    source = mobile_source;
    target = mobile_target;
  }
	return gulp.src(source + 'scss/*.scss')
	.pipe(sourcemaps.init())
	.pipe(sass({outputStyle: 'compressed'}))
	.on('error', function(err){
		browserSync.notify(err.message, 3000);
		this.emit('end');
	})
	.pipe(autoprefixer(autoprefixerOptions))
	.pipe(sourcemaps.write())
	.pipe(gulp.dest(target + 'css'))
	.pipe(browserSync.stream());
});

gulp.task('images', function() {
  if(dest == 'mobile'){
    source = mobile_source;
    target = mobile_target;
  }
  return gulp.src(source + 'images/**/*.+(png|jpg|jpeg|gif|svg)')
  .pipe(cache(imagemin({
    interlaced: true,
  })))
  .pipe(gulp.dest(target + 'images'))
});

gulp.task('fonts', function() {
  if(dest == 'mobile'){
    source = mobile_source;
    target = mobile_target;
  }
  return gulp.src(source + 'fonts/**/*')
  .pipe(gulp.dest(target + 'fonts'))
});

gulp.task('sass:watch', function () {
  gulp.watch(source + 'sass/**/*.scss', ['sass']);
});

gulp.task('js', function() {
  return gulp.src(source + 'js/**/*.js')
  .pipe(gulp.dest(target + 'js/'))
  .pipe(browserSync.reload({ // Reloading with Browser Sync
    stream: true
  }));
});

gulp.task('scripts', function() {
  if(dest == 'mobile'){
    source = mobile_source;
    target = mobile_target;
  }
  return gulp.src(source + 'js/*.js')
    .pipe(sourcemaps.init())
      .pipe(concat('main.js'))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(target + 'js/'))
	.pipe(browserSync.stream());
});

gulp.task('clean:dist', function() {
  if(dest == 'mobile'){
    source = mobile_source;
    target = mobile_target;
  }
  return del.sync([target+'/**/*', '!'+target+'/images', '!'+target+'/images/**/*', '!'+target+'index.php']);
});
