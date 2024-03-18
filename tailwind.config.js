/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/views/*.{html,js,php}", "./public/index.php"],
  theme: {
    extend: {
      colors: {
        /* Colores principales */
        red_pantone: '#e63946ff',
        honeydew: '#f1faeeff',
        non_photo_blue: '#a8dadcff',
        cerulean: '#457b9dff',
        berkeley_blue: '#1d3557ff',
        /* Colores de texto */
        /* Colores de fondo */

      }
    },
  },
  plugins: [],
}

