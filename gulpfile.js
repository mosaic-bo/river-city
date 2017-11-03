var gulp = require('gulp'),
	sass = require('gulp-sass'),
	browserSync = require('browser-sync');

gulp.task('sass', function() {
	return gulp.src('template/sass/*.sass')
	.pipe(sass())
	.pipe(gulp.dest('template/css'))
	.pipe(browserSync.reload({stream: true}));
});

gulp.task('browser-sync', function() {
	browserSync({
		server: {
			baseDir: 'template'
		},
		notify: false
	});
});

gulp.task('watch', ['browser-sync', 'sass'], function() {
	gulp.watch('template/sass/*.sass', ['sass']);
});