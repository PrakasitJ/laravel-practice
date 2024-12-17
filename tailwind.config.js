import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                inter: ["Inter", ...defaultTheme.fontFamily.sans],
                roboto: ["Roboto", ...defaultTheme.fontFamily.sans],
                playwrite: ["Playwrite", ...defaultTheme.fontFamily.sans],
                helvetica: ["Helvetica", ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                fadeIn: {
                    "0%": { opacity: "0" },
                    "100%": { opacity: "1" },
                },
                slideIn: {
                    "0%": { transform: "translateX(-100%)", opacity: "0" },
                    "40%": { transform: "translateX(-100%)", opacity: "0" },
                    "100%": { transform: "translateX(0)", opacity: "1" },
                },
                popOut: {
                    "0%": { transform: "scale(0)", opacity: "0" },
                    "60%": { transform: "scale(1.2)", opacity: "1" },
                    "100%": { transform: "scale(1)", opacity: "1" },
                },
                display: {
                    "0%": { transform: "scale(0)", display: "none" },
                    "100%": { transform: "scale(1)", display: "block" },
                },
                scaleIn: {
                    "0%": { transform: "scale(0)", opacity: "0" },
                    "100%": { transform: "scale(1)", opacity: "1" },
                },
                moveTop: {
                    "0%": { transform: "translateY(0)" },
                    "100%": { transform: "translateY(-500%)" },
                },
                moveLeft: {
                    "0%": { transform: "translateX(0)" },
                    "100%": { transform: "translateX(-20%)" },
                },
                moveRight100: {
                    "0%": { transform: "translateX(0)", opacity: "0" },
                    "100%": { transform: "translateX(120%)", opacity: "1" },
                },
                moveRight70: {
                    "0%": { transform: "translateX(0)", opacity: "0" },
                    "100%": { transform: "translateX(70%)", opacity: "1" },
                },
                moveRight50: {
                    "0%": { transform: "translateX(0)", opacity: "0" },
                    "100%": { transform: "translateX(50%)", opacity: "1" },
                },
            },
            animation: {
                fadeIn: "fadeIn 0.3s ease-out forwards",
                slideIn: "slideIn 0.6s ease-out forwards",
                display: "display 0.5s ease-out forwards",
                moveTop: "moveTop 0.5s ease-out 2s forwards",
                scaleIn: "scaleIn 0.5s ease-out 2s forwards",
                moveLeft: "moveLeft 0.5s ease-out 4s forwards",
                moveRight100: "moveRight100 0.5s ease-out 4.5s forwards",
                moveRight70: "moveRight70 0.5s ease-out 4.5s forwards",
                moveRight50: "moveRight50 0.5s ease-out 4.5s forwards",
                popOut1: "popOut 0.1s ease-out forwards",
                popOut2: "popOut 0.2s ease-out forwards",
                popOut3: "popOut 0.3s ease-out forwards",
                popOut4: "popOut 0.4s ease-out forwards",
                popOut5: "popOut 0.5s ease-out forwards",
                popOutSpecial: "popOut 0.5s ease-out 4.5s forwards",
            },
            colors: {
                grey: {
                    200: "#171717",
                },
            },
        },
    },

    plugins: [forms],
};
