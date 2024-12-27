// Ensure the script runs only once
if (!window.darkModeInitialized) {
    window.darkModeInitialized = true;

    // Immediately apply dark mode based on localStorage
    const isDarkModeEnabled = localStorage.getItem('dark_mode') === 'enabled';
    if (isDarkModeEnabled) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }

    document.addEventListener('DOMContentLoaded', function () {
        const toggleDarkMode = document.getElementById('toggle-dark-mode');

        // Initialize the toggle state
        function initializeToggle() {
            console.log("initializeToggle");
            
            const isEnabled = localStorage.getItem('dark_mode') === 'enabled';
            if (toggleDarkMode) {
                toggleDarkMode.checked = isEnabled;
            }
        }

        // Update dark mode and localStorage
        function updateDarkMode(isEnabled) {
            if (isEnabled) {
                document.documentElement.classList.add('dark');
                localStorage.setItem('dark_mode', 'enabled');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('dark_mode', 'disabled');
            }
        }

        // Add event listener to the toggle
        if (toggleDarkMode) {
            console.log("is clicked");
            
            toggleDarkMode.addEventListener('change', function () {
                updateDarkMode(this.checked);
            });
        }

        // Initialize the toggle state
        initializeToggle();
    });
}
