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
      },
    },
  },
  plugins: [],
}