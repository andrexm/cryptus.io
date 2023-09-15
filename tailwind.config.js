/** @type {import('tailwindcss').Config} */

const colors = require('tailwindcss/colors')

module.exports = {
  content: ["./src/**/*.{html,php,js}"],
  theme: {
    extend: {
      colors: {
        'primary': colors.blue,
        'secondary': colors.indigo,
        'dark': colors.neutral,
        ...colors
      },
    },
  },
  plugins: [],
}
