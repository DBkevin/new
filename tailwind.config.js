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
        'headbg': '#f2f2f2',
        'headBor':'#dedede',
      },
      spacing: {
        'cen': '75rem',
        'input': '424px',
        'tcleft': '890px',
        'tcright': '280px',
        'tc-pic': '387px',
      }
    },
  },
  plugins: [],
}
