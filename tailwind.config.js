const plugin = require('tailwindcss/plugin');

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./views/**/*.{php,html}", "./components/**/*.{php,html}", "index.php"],
  theme: {
    buttonSize: {
      160: "160px",
      200: "200px",
    },
    extend: {
      backgroundImage: {
        "primary-radial": ["radial-gradient(circle, rgba(245,197,122,1) 0%, rgba(252,84,12,1) 100%)"],
        "primary-linear": ["linear-gradient(circle, rgba(245,197,122,1) 0%, rgba(252,84,12,1) 100%)"],
        "box-blob": "url('/static/blob.png')",
        "main-blob": "url('/static/mainblob.png')",
        "mouse-blob": "url('/static/mouseBlob.png')",
        "mouse-blob-black": "url('/static/mouseBlobBlack.png')",
      },
      animation: {
        "blur-pulse": "blur-pulse 3s infinite alternate",
      },
      keyframes: {
        "blur-pulse": {
          "from": { filter: "blur(15px)" },
          "to": { filter: "blur(20px)" }
        },
      },
    },
  },
  plugins: [
    plugin(function({ matchUtilities, theme, variants }) {
      matchUtilities(
        {
          'animate-move-gradient': (value) => {
            const keyframes = {
              [`from`]: { 'background-position': `-${value}` },
              [`to`]: { 'background-position': '0px' },
            };
            return {
              '@keyframes move-gradient': keyframes,
              animation: `move-gradient .5s forwards`,
            };
          },
        },
        { values: theme('buttonSize'), variants: variants('animation') }
      );
    }),
  ],
}

