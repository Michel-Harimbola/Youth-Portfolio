const path = require('path');

module.exports = {
    mode: 'development',
    entry: './src/index.js',
    outpout: {
        filename: 'bundle.js',
        path: path.resolve(__dirname, 'dist')
    }
};