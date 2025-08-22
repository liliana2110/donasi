/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./pages/*.php",
    "./index.php",
    "./node_modules/flowbite/**/*.js"

  ],
  theme: {
    extend: {
      colors: {
        warna_text: '#090A0C',
        warna_bg: '#F8F9FB',
        warna_aksen: '#5592F2',
        warna_primary: '#507DC4',
        warna_secondary: '#88ADE8',
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

