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
        'primary': '#301E18',
        'secondary': '#493628',
        'cream': '#E2B9AC',
        'light': '#FFF7F4',
        'gray': '#4A4A4A',
        'gold': '#FABC3F',
      },
      fontFamily: {
        'lato': ['Lato', 'sans-serif'],
        'playfair-display': ['Playfair Display', 'sans-serif'],
      },
    },
  },
  plugins: [],
}

