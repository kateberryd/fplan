module.exports = {
  content: [
    './resources/views/**/*.{html,php}'
  ],
  theme: {
    colors:{
      'primarycolor': '#13b18b',
      'textwhite': '#ffffff', 
      'textgray': '#808080',
      'headercolor': '#ebf7f2',
      'textblack': '#000',
      'fp-white': '#ffffff'
    },
    extend: {
      backgroundImage: {
        'testimony-bg': "url('../../public/assets/images/chat.png')",
        'footer-texture': "url('/img/footer-texture.png')",
      }
    },
  },
  plugins: [],
}
