module.exports = {
    entry: "./assets/scripts/App.js",
    output: {
        path: __dirname + "/includes/scripts",
        filename: "all.js"
    },
    module: {
        loaders: [
            {
                loader: 'babel-loader',
                query: {
                    presets: ['es2015']
                },
                test: /\.js$/,
                exclude: /node_modules/
            }
        ]
    }
}