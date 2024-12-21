/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './Admin/View/**/*.php',
    './Admin/View/**/*.html',
    './Admin/View/resources/css/**/*.css',
    './Admin/View/common/sideMenu.php',
    './Admin/View/resources/css/root.css',
    './output.css',
    './input.css',
    './User/View/resources/**/*.{html,js,php}',

  ],
  theme: {
    extend: {
      colors: {
        "primary": "var(--primary-color)",
        "secondary": "var(--secondary-color)",
        "accent": "var(--accent-color)",
        "accent2": "var(--accent-color2)",
        "footer": "var(--footer-color)",
        "dark-text": "var(--dark-text-color)",
        "light-text": "var(--light-text-color)",
        "danger": "var(--danger)",
        "success": "var(--success)",
        "form": "var(--form-bg-color)",

        //user colors
        "userPrimary": '#FF4655',
        "userPrimaryShade": '#e63f4d',
        "userPrimaryTint": '#ffedee',
        "userSecondary": '#FFD122'
        // "userPrimary": "var(--user-primary-color)",


      },
      fontSize: {
        "large": "var(--font-size-large)",
        "medium": "var(--font-size-medium)",
        "small": "var(--font-size-small)",
        "x-small": "var(--font-size-x-small)",
        "xx-small": "var(--font-size-xx-small)",
        "xxx-small": "var(--font-size-xxx-small)",
        "xxxx-small": "var(--font-size-xxxx-small)",
      },
      fontWeight: {
        "light": "var(--font-weight-light)",
        "normal": "var(--font-weight-normal)",
        "bold": "var(--font-weight-bold)",
        "black": "var(--font-weight-black)",
      },
      fontFamily: {
        "sans": "var(--font-family-sans)",
        "serif": "var(--font-family-serif)",
        "mono": "var(--font-family-mono)",
        roboto: ['Roboto', 'sans-serif'],
      },
    },
  },
  plugins: [],
}