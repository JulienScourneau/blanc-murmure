/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            greenDuck: "#40826D",
            green: "#92CDB9",
            orange: "#E88746",
            darkOrange: "#CE7E48",
            white: "#ffffff",
            black: "#000000",
            primaryText: "#313131",
            placeHolderText: "#616161",
            secondaryText: "#919191",
            disableText: "#C2C2C2",
            separator: "#E4E4E4",
            incativeElement: "#ECECEC",
            placeHolder: "#F5F5F7",
        },
        extend: {},
    },
    plugins: [],
};
