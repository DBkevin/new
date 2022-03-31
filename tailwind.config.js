const colors = require('tailwindcss/colors');
module.exports = {
  content: [],
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],

  theme: {
    container: {
      center: true,
    },
    boxShadow: {
     '3xl': '0 0 10px 5px  rgb(0 0 0 / 10%)',
    },
    colors: {
      'baseColor': '#7e3c92',
      'baseGray': '#E8E8E8',
      gray: colors.coolGray,
      blue: colors.lightBlue,
      red: colors.rose,
      pink: colors.fuchsia,
      white: colors.white,
      black:colors.black,
    },
    extend: {
      spacing: {
        '100': '100px',
        '10': '10px',
        '50': '50px',
        '1240': '1240px',
        'items': '480px',
        'fifty':'50px',
      },
      margin: {
        'sm': '10px',
      },
      inset: {
        '1': '20%',
      },

    },
  },
  plugins: [],
}
