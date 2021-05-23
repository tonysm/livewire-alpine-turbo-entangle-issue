require('./bootstrap');

require('alpine-turbo-drive-adapter');
require('alpinejs');

window.Turbo = require('@hotwired/turbo');

window.Turbo.start();
