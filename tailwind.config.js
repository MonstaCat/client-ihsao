module.exports = {
  purge: [
    './src/**/*.html',
    './src/**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      backgroundColor: theme => ({
        ...theme('colors'),
        'ihsao-primary': '#252730',
        'ihsao-yellow': '#deae42',
        'ihsao-green': '#61af93',
        'ihsao-purple': '#6761a9',
        'ihsao-pink': '#e1788e'
      }),
      textColor: theme => theme('colors'),
      textColor: {
        'ihsao-primary': '#252730',
        'ihsao-yellow': '#deae42',
        'ihsao-green': '#61af93',
        'ihsao-purple': '#6761a9',
        'ihsao-pink': '#e1788e'
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
