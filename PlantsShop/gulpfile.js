
let gulp = require('gulp');

let dartSass = require('sass');

let gulpSass = require('gulp-sass');

let gulpSourcemaps = require('gulp-sourcemaps');

let gulpConcat = require('gulp-concat');

let GulpCleanCss = require('gulp-clean-css');

let gulpAutoprefixer = require('gulp-autoprefixer');

const sass = gulpSass(dartSass);

let gulpUglify = require('gulp-uglify');

let gulpWebp = require('gulp-webp');

let gulpNewer = require('gulp-newer');



let paths = {
    js: {
        src: 'resources/js/**/*.js',
        dest: 'public/js'
    },
    styles: {
        src: 'resources/scss/**/*.scss',
        main: 'resources/scss/style.scss',
        dest: 'public/'
    },
    images: {
        src: 'resources/img/**/*',
        dest: 'public/img/'
    }
}

// Base functions (if you wan't to elimenate files that you don't need. In example: old files js and css)

async function js() {
    return gulp.src(paths.js.src)
        .pipe(gulpSourcemaps.init())
        .pipe(gulpSourcemaps.write())
        .pipe(gulp.dest(paths.js.dest))
}

async function styles() {
    return gulp.src(paths.styles.main)
        .pipe(gulpSourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(gulpAutoprefixer({
            cascade: false
        }))
        .pipe(gulpConcat('style.css'))
        .pipe(GulpCleanCss({
            level: 2
        }))
        .pipe(gulpSourcemaps.write())
        .pipe(gulp.dest(paths.styles.dest))
}

async function imagesToWebp() {
    return gulp.src(paths.images.src)
        .pipe(gulpNewer(paths.images.dest))
        .pipe(gulpWebp({
            quality: 80
        }))
        .pipe(gulp.dest(paths.images.dest))
}


async function watch() {
    gulp.watch(paths.js.src, js);
    gulp.watch(paths.styles.src, styles);
    gulp.watch(paths.images.src, imagesToWebp);
}

let build = gulp.series(gulp.parallel(js, styles, imagesToWebp), watch);

exports.default = build;

function someFunction(){
    console.log(sass);
}