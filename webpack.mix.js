const mix = require('laravel-mix');
const local = require('./local');
const glob = require('glob-all');
require('laravel-mix-versionhash');
require('laravel-mix-tailwind');
require('laravel-mix-purgecss');

mix.setPublicPath('./build');

mix.webpackConfig({
    externals: {
        "jquery": "jQuery",
    }
});

if (local.proxy) {
    mix.browserSync({
        proxy: local.proxy,
        injectChanges: true,
        open: false,
        files: [
            'build/**/*.{css,js,svg}' 
        ]
    });
}

mix.tailwind();

mix.js('assets/js/app.js', 'js');
mix.sass('assets/scss/app.scss', 'css');
mix.copy('assets/svg/*', 'build/svg'); 

// The package internally limits running to production builds so we don't need
// to wrap this up with a condition.
mix.purgeCss({
    paths: () => glob.sync([
        path.join(__dirname, '*.php'), 
        path.join(__dirname, 'templates/**/*.php'),
        path.join(__dirname, 'inc/*.php'),
        path.join(__dirname, 'build/js/**/*.js'),
        path.join(__dirname, 'build/*.svg'),
    ]),
    whitelistPatternsChildren: [/^search-/,/^rslides_nav/,/^wp-block/]
});

if (mix.inProduction()) {
    // mix.versionHash();
    // mix.sourceMaps();
}
