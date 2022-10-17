module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
      crimsonRed: "#CD0F0F",
      bastille: "#1E1825",
      red: {
        500: "#EF4444",
        700: "#E50F0F",
        danger: "#FF0028",
        buttons: "#CD0F0F",
        search: "#B72525",
      },
      gray: {
        50: "#F9FAFB",
        100: "#F3F4F6",
        400: "#9CA3AF",
        bgcolor: "#EBEBEB",
      },
      orange: {
        100: "#EE6D11",
      },
      green: {
        150: "#708d3a",
      },
      waterloo: "#35397B",
      balticsea: "#1C1720",
      warning: " #FE6B00",
      success: "#708D3A",
    },
    },
  },
  plugins: [],
  variants: {
    display: ['responsive', 'group-hover', 'group-focus'],
   },
}