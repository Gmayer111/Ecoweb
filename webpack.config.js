const path = require('path');

module.exports = {
    entry: ["./assets/sass/app.scss"],
    output: {
        path:path.resolve(__dirname, "./public/assets/js"),
        filename: 'app.js'
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
}