# Front End Developer coding task

- [NPM](https://npmjs.com) dependancies and tools.
- [gulp](http://gulpjs.com/) for builds.
- [gulp-connect-php](https://www.npmjs.com/package/gulp-connect-php) launch the php server.
- [gulp-uglify](https://www.npmjs.com/package/gulp-uglify) for minifying files with UglifyJS.
- [gulp-rename](https://www.npmjs.com/package/gulp-rename) for renaming files.
- [gulp-sass](https://www.npmjs.com/package/gulp-sass) for compiling scss to css.
- [gulp-plumber](https://www.npmjs.com/package/gulp-plumber) prevents pipe breaking caused by errors from gulp plugins.
- [gulp-livereload](https://github.com/vohof/gulp-livereload) reloads pages when php, scss, and js files changed.



## Setup

For development tools and building:
1. Install the latest [Node.js and NPM](https://nodejs.org).
2. Run `npm install` within the project root directory in Terminal.
3. Run `npm gulp`.
4. Visit the site at http://localhost:3000



## Structure

- `/js/original` contains js files for editing.
- `/js/original` contains js which is minified b UglifyJS, should be included after website officially launched.
- `/scss` contains scss files for editing.


## Scripts

| Command                    | Purpose                                              |
|:---------------------------|:-----------------------------------------------------|
| `gulp`                     | Initial whole tasks and launch the website.          |
| `gulp script`              | Minify js file and rename, compile to `/js/original`.|
| `gulp styles`              | Compile and minify scss file to css in `/css`.       |
| `gulp watch`               | Watch the scss and js file for reloading page.       |

