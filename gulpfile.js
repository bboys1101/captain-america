// require the packages
var gulp = require('gulp'),               
    connect = require('gulp-connect-php'),
    gulpUglify = require('gulp-uglify'),  
    rename = require('gulp-rename'),  
    gulpSass = require('gulp-sass'),      
    gulpPlumber = require('gulp-plumber'),
    gulpLivereload = require('gulp-livereload'),
    browserSync = require('browser-sync');


//php-server
gulp.task('connect-sync', function() {
    connect.server({port: 3000}, function (){
        browserSync({
            proxy: 'localhost:3000'
        });
    });
 
    gulp.watch('**/*.php').on('change', function () {
        browserSync.reload();
    });
});


// watch the changes of
gulp.task('watch', function () {
    gulpLivereload.listen();

    gulp.watch('./js/original/*.js', ['script']).on('change', browserSync.reload);
    gulp.watch('./scss/*.scss', ['styles']).on('change', browserSync.reload);
});


//minify the js
gulp.task('script', function () {
    gulp.src('js/original/*.js')        
        .pipe(gulpPlumber())            
        .pipe(gulpUglify())             
        .pipe(rename({
          suffix: '.min'
        }))
        .pipe(gulp.dest('js/minify'))  
            
});


//compile scss into css and compress file
gulp.task('styles', function () {
    gulp.src('scss/*.scss')    
        .pipe(gulpPlumber())      
        .pipe(gulpSass({          
            outputStyle: 'compressed'
        }))
        .pipe(gulp.dest('css'))  
});



gulp.task('default', ['connect-sync', 'watch', 'styles', 'script']);
