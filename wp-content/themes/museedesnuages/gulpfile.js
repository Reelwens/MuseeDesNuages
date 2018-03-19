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




// JS task
gulp.task( 'js', function()
{
    return gulp.src( ['./src/js/*.js'] )
        .pipe( concat( 'app.min.js' ) )
        //.pipe( uglify() )
        .pipe( gulp.dest( './assets/js/' ) );
} );





// Img task
gulp.task( 'img', function()
{
    return gulp.src('src/img/*.{jpg,png,gif}')
        .pipe( imagemin() )
        .pipe( srcset([{
            width:  [1, 1920, 1280, 720, 560, 320],
        }]) )
        .pipe( gulp.dest( './assets/img' ) );
} );





// Watch task
gulp.task( 'watch', function()
{
    gulp.watch( './src/scss/**/**', [ 'sass' ] );
    gulp.watch( './src/js/**/**', [ 'js' ] );
    gulp.watch( './src/img/**/**', [ 'img' ] );
} );

gulp.task( 'default', [ 'sass', 'js', 'img', 'watch' ] );
gulp.task( 'noimg', [ 'sass', 'js', 'watch' ] );
