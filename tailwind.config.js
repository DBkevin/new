module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  content: [],
  theme: {
    extend: {
      colors: {
        'headbg': '#dfdfdf',
      },
      spacing: {
        'cen': '75rem',
        'input':'424px',
      }
    },
  },
  plugins: [],
}
