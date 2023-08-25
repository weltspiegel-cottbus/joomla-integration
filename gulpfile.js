// Taskrunner: Gulp (https://gulpjs.com/)
const { src, dest, series } = require('gulp');

// Gulp Plugins
const zip  = require('gulp-zip');

// Tasks
function packageTemplate() {
  return src(['template/**/*'], {base: 'template/'})
    .pipe(zip('tpl_weltspiegel.zip'))
    .pipe(dest('.'));
}

exports.default = series(packageTemplate);
