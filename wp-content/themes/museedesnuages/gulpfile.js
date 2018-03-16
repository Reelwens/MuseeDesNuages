// Configurations
var config = {
    'root': 'dist/',
    'src' : 'src/',
    'dist': 'dist/'
}




// Dependencies
var gulp          = require( 'gulp' ),
    rename        = require( 'gulp-rename' ),
    sass          = require( 'gulp-sass' ),
    autoprefixer  = require( 'gulp-autoprefixer' ),
    concat        = require( 'gulp-concat' ),
    uglify        = require( 'gulp-uglify' );

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
        .pipe( uglify() )
        .pipe( gulp.dest( './assets/js/' ) );
} );




// Watch task
gulp.task( 'watch', function()
{
    gulp.watch( './src/scss/**/**', [ 'sass' ] );
    gulp.watch( './src/js/**/**', [ 'js' ] );
} );

gulp.task( 'default', [ 'sass', 'js', 'watch' ] );