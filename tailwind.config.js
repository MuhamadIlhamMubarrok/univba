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
                primary: "#078070", // Warna utama
                secondary: "#1D296D", // Warna sekunder
                accent: "#00FFDD", // Warna aksen
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
