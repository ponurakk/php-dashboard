/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./views/**/*.{php,html}", "./components/**/*.{php,html}", "index.php"],
  theme: {
    extend: {
      backgroundImage: {
        "primary-radial": ["radial-gradient(circle, rgba(245,197,122,1) 0%, rgba(252,84,12,1) 100%)"],
        "primary-linear": ["linear-gradient(90deg, rgba(245,197,122,1) 0%, rgba(252,84,12,1) 100%)"],
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
          "to": { filter: "blur(20px)" },
        },
      },
    },
  },
  plugins: [],
}
