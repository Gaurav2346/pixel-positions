/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            "black": "#000000"
        },
        "hanken-grotesk":["Hanken Grotesk" , "sans-serif"],

        fontSize: {
            xs: "0.6rem",
        }



    },
    plugins: [],
}
