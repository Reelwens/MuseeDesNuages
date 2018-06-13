// Dependencies
var gulp          = require( 'gulp' ),
    rename        = require( 'gulp-rename' ),
    sass          = require( 'gulp-sass' ),
    autoprefixer  = require( 'gulp-autoprefixer' ),
    concat        = require( 'gulp-concat' ),
    uglify        = require( 'gulp-uglify' );
    imagemin      = require( 'gulp-imagemin' );
    srcset        = require( 'gulp-srcset' );


// Configurations
var config = {
    'root': 'dist/',
    'src' : 'src/',
    'dist': 'dist/'
}




// Connect
gulp.task('connect', function() {
    connect.server({
        root: 'dist',
        livereload: true
    });
});




// Sass
gulp.task( 'sass', function()
{
    return gulp.src( './src/scss/*.scss' )
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(rename(function (path) {
            path.basename += '.min';
        }))
        .pipe(gulp.dest('./assets/css'))
} );




// Sass mobile
gulp.task( 'sassMobile', function()
{
    return gulp.src( './src/mobileScss/*.scss' )
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(rename(function (path) {
            path.basename += '.min';
        }))
        .pipe(gulp.dest('./assets/css'))
} );




// JS task
gulp.task( 'js', function()
{
    return gulp.src( ['./src/js/*.js'] )
        .pipe( concat( 'app.min.js' ) )
        //.pipe( uglify() )
        .pipe( gulp.dest( './assets/js/' ) );
} );




// Font task
gulp.task( 'font', function()
{
    return gulp.src( ['./src/font/**'] )
        .pipe( gulp.dest( './assets/font/' ) );
} );



// Sound task
gulp.task( 'sound', function()
{
    return gulp.src( ['./src/sound/**'] )
        .pipe( gulp.dest( './assets/sound/' ) );
} );




// Img task
gulp.task( 'img', function()
{
    return gulp.src('./src/img/*.{jpg,png,gif}')
        .pipe( imagemin() )
        // .pipe( srcset([{
        //     match:  '(min-width: 100px)',
        //     width:  [1, 1920, 1280, 720, 560, 320],
        // }]) )
        .pipe( gulp.dest( './assets/img' ) );
} );


// Svg task
gulp.task( 'svg', function()
{
    return gulp.src('./src/img/*.svg')
        .pipe( gulp.dest( './assets/img' ) );
} );




// Watch task
gulp.task( 'watch', function()
{
    gulp.watch( './src/scss/**/**', [ 'sass', 'sassMobile' ] );
    gulp.watch( './src/mobileScss/**/**', [ 'sassMobile' ] );
    gulp.watch( './src/js/**/**', [ 'js' ] );
    gulp.watch( './src/img/**/**', [ 'img', 'svg' ] );
    gulp.watch( './src/font/**', [ 'font' ] );
    gulp.watch( './src/sound/**', [ 'sound' ] );
} );

gulp.task( 'default', [ 'sass', 'sassMobile', 'js', 'font', 'sound', 'img', 'svg', 'watch' ] );
gulp.task( 'noimg', [ 'sass', 'sassMobile', 'js', 'font', 'sound', 'svg', 'watch' ] );
