var $ = require('jquery');
var styleguide = require('./modules/style-guide.js');
var accordions = require('./modules/accordions.js');
var cards = require('./modules/cards.js');
var lightbox = require('./modules/lightbox.js');
var menu = require('./modules/menu.js');
var sliders = require('./modules/sliders.js');
var svg = require('./modules/svg.js');

// Make sure that you init the styleguide first.
styleguide.init();
accordions.init();
cards.init();
lightbox.init();
menu.init();
sliders.init();
svg.init();