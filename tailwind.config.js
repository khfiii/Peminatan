/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                coklat: '#5B5252',
                kuning: '#DEA206',
                abu: '#D9D9D9',
                boga: '#2E9CE1',
                busana: '#009755',
                kecantikan: '#C10925',
                rpl: '#DE4537',
                wisata: '#896B65',
                musik: '#8259A1',
                perhotelan: '#DDBA38'
            }
        },
    },
    plugins: [
        require('daisyui'),
    ],
    daisyui: {
        themes: ["light"], // false: only light + dark | true: all themes | array: specific themes like this ["light", "dark", "cupcake"]
        darkTheme: "dark", // name of one of the included themes for dark mode
        base: true, // applies background color and foreground color for root element by default
        styled: true, // include daisyUI colors and design decisions for all components
        utils: true, // adds responsive and modifier utility classes
        prefix: "", // prefix for daisyUI classnames (components, modifiers and responsive class names. Not colors)
        logs: true, // Shows info about daisyUI version and used config in the console when building your CSS
        themeRoot: ":root", // The element that receives theme color CSS variables
    },
}

