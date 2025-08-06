# symfony-tailwind


## creation
#### console
    symfony new --webapp my_project
    composer remove symfony/ux-turbo symfony/asset-mapper symfony/stimulus-bundle
    composer require symfony/apache-pack symfony/webpack-encore-bundle symfony/ux-turbo symfony/stimulus-bundle
    yarn install
    yarn add tailwindcss @tailwindcss/postcss postcss postcss-loader @material-tailwind/html

#### app.js file
    remove import './bootstrap.js';

#### optional file
    remove file asset\bootsrap.js

#### optionnal package.json file
    remove 
           @symfony/stimulus-bridge
           @symfony/ux-turbo
           @hotwired/stimulus
           @hotwired/turbo

>yarn install

#### webpack.config.js file
    Encore
    .enablePostCssLoader()
    ;

#### postcss.config.mjs file
    export default {
        plugins: {
        "@tailwindcss/postcss": {},
        },
    };
