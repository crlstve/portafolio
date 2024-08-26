/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: 'jit',
  purge: {
    content: [
      './assets/js/*.js',
      './assets/js/**/*.js',
      './views/*.php',
      './views/**/*.php',
      './*.php',
    ],
  },
  darkMode: 'selector',
  theme: {
    extend: {},
    fontFamily: {
      'sans': ['Albert Sans','Helvetica', 'Arial', 'sans-serif'],
    },
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
        lg: '4rem',
        xl: '5rem',
        '2xl': '6rem',
      },
    },
  },
  variants: {},
  plugins: [],
}