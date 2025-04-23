/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#4B410E", // Warna utama
                secondary: "#826D18", // Warna sekunder
                accent: "#DDBA29", // Warna aksen
            },
            fontFamily: {
                poppins: ["Poppins", "sans-serif"], // Font Poppins
                dmsans: ["DM Sans", "sans-serif"], // Font DM Sans
                montserrat: ["Montserrat", "sans-serif"], // Font DM Sans
            },
            animation: {
                marquee: "marquee 15s linear infinite",
            },
            keyframes: {
                marquee: {
                    "0%": { transform: "translateX(0%)" },
                    "100%": { transform: "translateX(-100%)" },
                },
            },
        },
    },
    plugins: [],
};
