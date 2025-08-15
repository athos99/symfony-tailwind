module.exports = {
    content: [
        './templates/**/*-html.twig/',
        "./assets/**/*.js",
        './vendor/symfony/twig-bridge/Resources/views/Form/tailwind_2_layout.html.twig',
        './node_modules/@material-tailwind/html/**/*.{js,jsx,ts,tsx}'
    ], // Add Material Tailwind paths
    theme: {
        extend: {},
    },
    plugins: [],
};
