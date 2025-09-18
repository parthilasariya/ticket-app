/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./app/**/*.php",
  ],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Instrument Sans', 'sans-serif'],
      },
    },
  },
  plugins: [],
  darkMode: 'class',
}
