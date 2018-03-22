/**
 * Includes jQuery, popper.js umd and Bootstrap javascripts
 * into the application script.
 */

try {
    window.$ = window.jQuery = require('jquery');
    window.Popper = require('popper.js');

    require('bootstrap');
} catch (e) { }

/**
 * Application scripts will be placed here.
 */
