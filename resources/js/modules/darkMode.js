export default () => ({
    darkMode: localStorage.getItem('darkMode') === 'true',
    init() {
        let darkMode = localStorage.getItem('darkMode');

        if (darkMode) {
            this.darkMode = darkMode === 'true';
        }

        this.$watch('darkMode', () => localStorage.setItem('darkMode', this.darkMode));
    }
});