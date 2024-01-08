/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./folder/**/*.{html,js}"],
  darkMode: 'class',
  theme: {
    extend: {
      gridTemplateColumns: {
        '16': 'repeat(16, minmax(0, 1fr))',
      },

    },
  },
  plugins: [],
}