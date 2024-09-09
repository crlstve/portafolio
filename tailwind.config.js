/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: 'jit',
  purge: {
    content: [
      './assets/js/*.js',
      './assets/js/**/*.js',
      './views/*.php',
      './views/**/*.php',
      './controllers/*.php',
      './*.php',
    ],
  },
  darkMode: 'selector',
  theme: {
    extend: {},
    fontFamily: {
      'sans': ['Source Code Pro','monospace','sans-serif'],
      'title': ['Jersey','fantasy','serif','system-ui','sans-serif'],
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
      screens: {
        sm: '600px',
        md: '728px',
        lg: '984px',
        xl: '1120px',
        '2xl': '1280px',
      },
    },
  },
  variants: {},
  plugins: [],
}