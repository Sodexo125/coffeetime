var
    gulp = require('gulp'), 
    sass = require('gulp-sass'), 
    concat = require('gulp-concat'), 
    uglify = require('gulp-uglify'), 
    rename = require('gulp-rename'), 
    livereload = require('gulp-livereload');
    
gulp.task('sass', function () { 
    return gulp.src('./style.scss')
                .pipe(sass.sync({outputStyle: 'compressed'}).on('error', sass.logError)) 
            .pipe(livereload()) 
            .pipe(gulp.dest('./')); 
}); 

gulp.task('watch', function () { 
    livereload.listen(35729);
    gulp.watch('**/*.php').on('change', function(file) {
    livereload.changed(file.path);
    });

    gulp.watch('./*.scss', ['sass']); 
}); 