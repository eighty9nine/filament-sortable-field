const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/views/forms/components/**/*.blade.php", "./src/**/*.php"],
  darkMode: "class",
  theme: {
    extend: {
      colors: {
          danger: colors.rose,
          primary: colors.yellow,
          success: colors.green,
          warning: colors.amber,
      },
    },
  },
  corePlugins: {
    preflight: false,
  },
    plugins: []
};
