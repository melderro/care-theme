'use strict';

/**
 * Imports SCSS for Webpack parsing and sets strict mode
 */
require('../../styles/src/index.scss');

/**
 * Vendor libraries and plugin settings
 */
require('./vendor/dialog-polyfill');
require('./vendor/lazysizes');
require('./vendor/smoothscroll-polyfill');
require('./vendor/pushbar');

/**
 * modules libraries and plugin settings
 */
require('./modules/site-wide');
require('./modules/programLanding');
require('./modules/homepage');
require('./modules/blog');
