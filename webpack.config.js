const path = require('path');


module.exports = {
    entry: {
      style: './assets/sass/app.css',
      script: './assets/js/app.js',
    },
    output: {
        path:path.resolve(__dirname, "./public/assets/js"),
        filename: 'app.js'
    },
};