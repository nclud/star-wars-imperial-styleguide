/**
 * Configuration.
 *
 * Project Configuration for gulp tasks.
 *
 * In paths you can add <<glob or array of globs>>. Edit the variables as per your project requirements.
 */

module.exports = {

	// START Editing Project Variables.
	// Project options.
	project: 'Imperial Styleguide', // Project Name.
	projectURL: '', // Local project URL of your already running WordPress site. Could be something like wpgulp.local or localhost:8888.
	productURL: './', // Theme/Plugin URL. Leave it like it is, since our gulpfile.js lives in the root folder.
	browserAutoOpen: false,
	injectChanges: true,

	// Style options.
	styleSRC: './scss/**/*.scss', // Path to main .scss file.
	styleDestination: './css/', // Path to place the compiled CSS file. Default set to root folder.
	outputStyle: 'compressed', // Available options → 'compact' or 'compressed' or 'nested' or 'expanded'
	errLogToConsole: true,
	precision: 5,

	// JS Custom options.
	jsCustomSRC: './js/**/*.src.js', // Path to JS custom scripts folder.
	jsCustomDestination: './js/', // Path to place the compiled JS custom scripts file.
	jsCustomFile: 'custom', // Compiled JS custom file name. Default set to custom i.e. custom.js.

	// Images options.
	// imagesSRC: './assets/img/raw/**.{png,jpg,gif,svg}', // Source folder of images which should be optimized.
	imgSRC: './img/raw/*', // Source folder of images which should be optimized and watched.
	imgDST: './img/', // Destination folder of optimized images. Must be different from the imagesSRC folder.

	// Watch files paths.
	styleWatchFiles: './scss/**/*.scss', // Path to all *.scss files inside css folder and inside them.
	customJSWatchFiles: './js/**/*.src.js', // Path to all custom JS files.
	projectPHPWatchFiles: './**/*.php', // Path to all PHP files.

	// Dependencies to move into place
	// NOTE: rename is object of options to pass to gulp-rename
	filesToMove: [],

	// Browsers you care about for autoprefixing. Browserlist https://github.com/ai/browserslist
	BROWSERS_LIST: [
		'last 10 versions',
		'ie >= 6',
		'Android >= 2.3'
	]
};
