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
        'headBor': '#dedede',
        'doctor': '#ff9d00',
        'bashColor':'#ff5959',
      },
      spacing: {
        'cen': '75rem',
        'input': '424px',
        'tcleft': '890px',
        'tcright': '280px',
        'tc-pic': '387px',
        'doctor-ban': '17rem',
        '15': '3.75rem',
        'doctor-item-h': '323px',
        'doctor-item-w': '280px',
        'article': '850px',
        '25': "6.25rem",
      }
    },
  },
  plugins: [],
}
