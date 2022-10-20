module.exports = {
  variants: {
    extend: {
      backgroundColor: ['active'],
      textColor: ['active'],
      display:['group-hover']
    }
  },
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  content: [],
  theme: {
    inset: {
      '220px': '220px',
      '0': '0px',
      '4': '1rem',
      '6': '1.25rem',
      '1/50': '2%',
      '2/5': '40%',
    },
    borderRadius: {
      '60': '60px',
      'none': '0',
      'sm': '0.125rem',
      DEFAULT: '0.25rem',
      DEFAULT: '4px',
      'md': '0.375rem',
      'lg': '0.5rem',
      'full': '9999px',
      'large': '12px',
    },
    boxShadow: {
      sm: '0 1px 2px 0 rgba(0, 0, 0, 0.05)',
      DEFAULT: '0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)',
      md: '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
      bash: '0 0 8px rgb(14 5 9 / 22%),0 0 8px rgba(14,5,9,.22)',
      lg: ' 0 0 15px rgba(250, 206, 206,.8),0 0 15px rgba(250, 206, 206,.8)',
      xl: '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)',
      '2xl': '0 25px 50px -12px rgba(0, 0, 0, 0.25)',
      '3xl': '0 35px 60px -15px rgba(0, 0, 0, 0.3)',
      inner: 'inset 0 2px 4px 0 rgba(0, 0, 0, 0.06)',
      "right": '0px 2px 2px rgb(44 71 146 / 17%)',
      none: 'none',
      project: '0 0 8px rgb(235 235 235 / 80%),0 0 8px rgb(235 235 235 / 80%)',
    },
    extend: {
      lineHeight: {
        '11.5': '2.75rem',
        '58px': '58px',
        '22px': '22px',
        '27px': '27px',
        '28px': '28px',
        '12': '3rem',
        '48px': '48px',
        '70px': '70px',
        '54px': '54px',
        '30px': '30px',
        '60px': '60px',
      },
      colors: {
        'newBashColor': '#b494e4',
        'headbg': '#e0e0e0',
        'headBor': '#dedede',
        'doctor': '#ff9d00',
        'bashColor': '#ff5959',
        '999': '#999',
        '666': '#666',
        '333': '#333',
        'dt': '#7bc1d9',
        'question': '#ff8686',
        'question-zx': '#ffea61',
        'question-top': '#e75b4f',
        'question-border': '#e4e4e4',
        'question-inde': '#5ac5e5',
        'newsListBG': '#f4f4f4',
        'newsListHover': '#e1e1e1',
        '808080': '#808080',
        'faf7e3': '#faf7e3',
        'ccc': '#ccc',
        '5ea3f0': '#5ea3f0',
        'f5f5f5': '#f5f5f5',
        'cacaca': '#cacaca',
        'ec6909': '#ec6909',
        'bbf3f7': '#bbf3f7',
        'FF8080': '#FF8080',
        'eee': '#eee',
        'edf0f7': '#edf0f7',
        'f0f0f0': '#f0f0f0',
        'fafafa': '#fafafa',
        'f9f9f9': '#f9f9f9',
        'e6e9f1': '#e6e9f1',
      },
      minHeight: {
        '155': '155px',
        '56px': '56px',
      },
      spacing: {
        'newCen': '1270px',
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
        '24.5': '6.125rem',
        '27': '6.75rem',
        '19': '4.75rem',
        '6/10': '61%',
        '27-5': '104px',
        '390': '390px',
        '4.5': '1.125rem',
        '7.5': '27px',
        '17': '4.25rem',
        'zslist': '146px',
        'qsw': '770px',
        'p30': '30px',
        'p40': '40px',
        '61': '15.375rem',
        '50.5': '12.625rem',
        '170': '170px',
        '5.5': '1.375rem',
        '1/10': '10%',
        '9/10': '90%',
        '175': '175px',
        '49': '49px',
        '200': '200px',
        '150': '150px',
        '155': '155px',
        '710': '710px',
        '700': '700px',
        '180': '180px',
        '560': '560px',
        '50': '50px',
        '300': '300px',
        '545': '545px',
        '380': '380px',
        '579': '579px',
        '36px': '36px',
        '141px': '141px',
        '91px': '91px',
        '350px': '350px',
        '38px': '38px',
        '630px': '630px',
        '290px': '290px',
        '176px': '176px',
        '471px': '471px',
        '420px': '420px',
        '580px': '580px',
        '190px': '190px',
        '850px': '850px',
        '79px': '79px',
        '59px': '59px',
        '220px': '220px',
        '45px': '45px',
        '415px': '415px',
        '566px': '566px',
        '660px': '660px',
        '587px': '58,7px',
        '288px': '288px',
        "m1.1": '1.1rem',
        '892': '892px',
        '70%': '70%',
        '25px': '25px',
        '540px': '540px',
        '94px': '94px',
        '649px': '649px',
        '405px': '405px',
        '158px': '158px',
        '370px': '370px',
        '192px': '192px',
        '214px': '214px',
        '630': '630px',
        '239': '239px',
        '70': '70px',
        '54': '54px',
        '960': '960px',
        '472': '472px',
        '138': '138px',
        '265': '265px',
        '35': '35px',
        '58': '58px',
        '29%': '29%',
        '182': '182px',


      },
    },
    fontSize: {
      'xs1': '13px',
      'xs': '.75rem',
      'sm': '.875rem',
      'base': '1rem',
      'lg': '1.125rem',
      'xl': '1.25rem',
      'xll': '1.375rem',
      '2xl': '1.5rem',
      '3xl': '1.875rem',
      '4xl': '2.25rem',
      '5xl': '3rem',
      '6xl': '4rem',
      '7xl': '5rem',
    },
    maxWidth: {
      'mobie': '750px',
    }
  },
  plugins: [],
}
