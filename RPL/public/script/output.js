document.addEventListener('DOMContentLoaded', function() {
    // Add event listener to each table row
    const rows = document.querySelectorAll('tbody tr');

    rows.forEach(row => {
        row.addEventListener('click', function() {
            const id = this.querySelector('td:first-child').textContent;
            alert('Anda mengklik riwayat dengan ID: ' + id);
        });
    });

    // Handle back button click
    const backButton = document.querySelector('button');
    backButton.addEventListener('click', function(event) {
        event.preventDefault();
        window.history.back();
    });
});
