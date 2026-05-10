/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.ts",
  ],
  theme: {
    extend: {
      colors: {
        // You can define your project colors here if you want to use names
        'alabaster': '#EDE6E0',
        'ochre': '#B7A54F',
        'gold-custom': '#C8A35C',
      }
    },
  },
  plugins: [],
}