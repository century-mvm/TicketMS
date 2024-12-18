import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    daisyui: {
        themes: ["garden", "dark", "cmyk"],
    },
    plugins: [require("@tailwindcss/typography"), require("daisyui")],
};
