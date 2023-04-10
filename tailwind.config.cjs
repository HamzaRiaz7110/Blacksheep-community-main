// https://tailwindcss.com/docs/configuration
module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    screens: {
      'sm': '500px',
      'md': '768px',
      'lg': '1200px',
      'xl': '1440px',
    },
    extend: {
      bordercolor:{
        'checkbox-color':'#66C7C8'
      },
      colors: {
        'black03' : '#D1D1CB',
        'cyan' : '#66C7C8',
        'red': '#F26F5B',
        'yellow': '#FFC10D',
        'bgcolor': '#062D49',
        'lightbluecolor': '#66C7C8',
        'bglightcolr' : '#E7E7E7',
      },
      fontFamily: {
        ppeiko: ['PP Eiko'],
        Agrandir:['Agrandir'],
      },
      spacing: {
        180: '32rem',
      },
    },
  },
  plugins: [],
}
