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
        "userPrimary": "#FF4655", // Custom color with a name like 'primary'
        userPrimaryShade: '#e63f4d',
        primaryShade2: '#cc3844',
        primartTint: '#ffedee',
        primaryTint2: '#ffc8cc',
        secondary: '#FFD122',
      },
    },
  },
  plugins: [],
}