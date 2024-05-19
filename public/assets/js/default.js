document.addEventListener('DOMContentLoaded', () => {
    const accountLink = document.getElementById('account-link');
    const accountDropdown = document.getElementById('account-dropdown');

    accountLink.addEventListener('click', (e) => {
        e.preventDefault();
        accountDropdown.style.display = accountDropdown.style.display === 'block' ? 'none' : 'block';
    });

    // Close the dropdown if clicked outside
    document.addEventListener('click', (e) => {
        if (!accountLink.contains(e.target) && !accountDropdown.contains(e.target)) {
            accountDropdown.style.display = 'none';
        }
    });
});