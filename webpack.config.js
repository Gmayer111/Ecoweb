const path = require('path');


module.exports = {
    mode: 'development',
    watch: true,
    entry: {
      default: './assets/sass/default.css',
      home: './assets/sass/home.css',
      script: './assets/js/app.js',
    },
    output: {
        path:path.resolve(__dirname, "./public/dist"),
        filename: "[name].js"
    },
    module: {
        rules: [
            {   
                test: /\.(scss|css)$/,
                use: ['style-loader', 'css-loader', 'sass-loader'],
            },
            {
                test: /\.(png|jp(e*)g|svg|gif)$/,
                use: ['file-loader'],
            },
            {
                test: /\.svg$/,
                use: ['@svgr/webpack'],
            },
        ]
    },
    devServer: {
        static: path.join(__dirname, "/")
    }
};