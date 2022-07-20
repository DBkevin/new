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
        'bashColor': '#ff5959',
        '999': '#999',
        '666': '#666',
        '333': '#333',
        'dt': '#7bc1d9',

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
        '6/10': '61%',
        '27-5': '104px',
        '390': '390px',
        '4.5': '1.125rem',
        '7.5': '27px',
        'zslist':'146px',
      }
    },
    fontSize: {
      'xs1': '13px',
      'xs': '.75rem',
      'sm': '.875rem',
      'base': '1rem',
      'lg': '1.125rem',
      'xl': '1.25rem',
      '2xl': '1.5rem',
      '3xl': '1.875rem',
      '4xl': '2.25rem',
      '5xl': '3rem',
      '6xl': '4rem',
      '7xl': '5rem',
    }
  },
  plugins: [],
}
