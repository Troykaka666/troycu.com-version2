const path = require('path');
const webpack = require('webpack');
// const HtmlWebpackPlugin = require('html-webpack-plugin');

module.exports = {
    entry: ['@babel/polyfill', './temp/js/index.js'],
    output: {
        path: path.resolve(__dirname, 'scripts'),
        filename: 'bundle.js'
    },
    devServer: {
       contentBase: "./scripts" 
    },
    module:{
        rules: [
            {
                test: /\.js$/,
                exclude: '/node_modules/',
                use: {
                    loader: 'babel-loader'
                }
            }
        ]
    }
}