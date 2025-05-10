/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/**/*.{html,js,php}",
    "./components/**/*.php"
  ],
  theme: {
    extend: {
      colors: {
        primary: '#2E7D32',
        secondary: '#1B5E20',
        accent: '#4CAF50'
      },
      fontFamily: {
        'montserrat': ['Montserrat', 'sans-serif'],
        'opensans': ['Open Sans', 'sans-serif']
      }
    },
  },
  plugins: [],
} 