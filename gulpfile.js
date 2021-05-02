const { src, dest, watch, series, parallel } = require( "gulp" );
const sass = require( "gulp-sass" );
const plumber = require( "gulp-plumber" );
const notify = require( "gulp-notify" );
const postcss = require( "gulp-postcss" );
const cssnext = require( "postcss-cssnext")
const cleanCSS = require( "gulp-clean-css" );
const rename = require( "gulp-rename" );
const sourcemaps = require( "gulp-sourcemaps" );
const babel = require( "gulp-babel" );
const uglify = require( "gulp-uglify" );
const imagemin = require( "gulp-imagemin" );
const imageminMozjpeg = require( "imagemin-mozjpeg" );
const imageminPngquant = require( "imagemin-pngquant" );
const imageminSvgo = require( "imagemin-svgo" );
const browserSync = require("browser-sync");

const srcPath = {
   css: 'src/css/**.scss',
   js: 'src/js/*.js',
   img: 'src/images/**/*',
   html: './**/*.html',
}
const destPath = {
   css: 'dist/css/',
   js: 'dist/js/',
   img: 'dist/images/'
}
const browsers = [
   'last 2 versions',
   '> 5%',
   'ie = 11',
   'not ie <= 10',
   'ios >= 8',
   'and_chr >= 5',
   'Android >= 5',
]
const browserSyncOption = {
  proxy: 'localhost:8888/myprofile',
  open: true,
  watchOptions: {
    debounceDelay: 1000
  },
  reloadOnRestart: true,
}
const cssSass = () => {
   return src( srcPath.css )
       .pipe( sourcemaps.init() )
       .pipe(
           plumber(
               {
                   errorHandler: notify.onError( 'Error: <%= error.message %>' )
               }
           )
       )
       .pipe( sass() )
       .pipe( postcss( [cssnext(browsers)] ) )
       .pipe( sourcemaps.write( '/maps' ) )
       .pipe( dest( destPath.css ) )
       .pipe( cleanCSS() )
       .pipe(
           rename(
               { extname: '.min.css' }
           )
       )
       .pipe( sourcemaps.write( '/maps' ) )
       .pipe( dest( destPath.css ) )
}
const jsBabel = () => {
   return src( srcPath.js )
       .pipe(
           plumber(
               {
                   errorHandler: notify.onError( 'Error: <%= error.message %>' )
               }
           )
       )
       .pipe( babel( {
           presets: [ '@babel/preset-env' ]
       } ) )
       .pipe( dest( destPath.js ) )
       .pipe( uglify() )
       .pipe(
           rename(
               { extname: '.min.js' }
           )
       )
       .pipe( dest( destPath.js ) )
}
const imgImagemin = () => {
   return src( srcPath.img )
       .pipe(
           imagemin(
               [
                   imageminMozjpeg({
                       quality: 80
                   }),
                   imageminPngquant(),
                   imageminSvgo()
               ],
               {
                   verbose: true
               }
           )
       )
       .pipe( dest( destPath.img ) )
}
const browserSyncFunc = () => {
  browserSync.init( browserSyncOption );
}
// リロード処理
const browserSyncReload = ( done ) => {
  browserSync.reload();
  done();
}
// 自動監視
const watchFiles = () => {
  watch( srcPath.css, series( cssSass, browserSyncReload ))
  watch( srcPath.js, series( jsBabel, browserSyncReload ))
  watch( srcPath.img, series( imgImagemin, browserSyncReload ))
  watch( srcPath.html, series( browserSyncReload ))
}
exports.default = series( series(cssSass, jsBabel, imgImagemin ), parallel( watchFiles, browserSyncFunc ) );
exports.build = series( cssSass, jsBabel , imgImagemin );
