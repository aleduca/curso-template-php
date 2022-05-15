const path = require('path');

module.exports = {
     mode: 'development',
     devtool: process.env.NODE_ENV == 'development' ? 'source-map' : '',
     entry: {
          app: ['./public/assets/js/app.js'],
     },
     output: {
          path: path.resolve(__dirname, 'public'),
          filename: '[name].js',
     },
     module: {
          rules: [
               {
                    test: /\.js$/,
                    exclude: /node_modules/,
                    loader: 'babel-loader',
               },
          ],
     },
};