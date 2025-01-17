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
                primary: "#F96D1E", // Warna utama
                secondary: "#FEAE01", // Warna sekunder
                accent: "#F9F51A", // Warna aksen
            },
            fontFamily: {
                poppins: ["Poppins", "sans-serif"], // Font Poppins
                dmsans: ["DM Sans", "sans-serif"], // Font DM Sans
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
