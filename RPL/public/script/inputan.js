document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const pemakaianInput = document.querySelector('#pemakaian');
    const budgetInput = document.querySelector('#budget');

    // Handle form submit
    form.addEventListener('submit', function(event) {
        if (pemakaianInput.value.trim() === '') {
            alert('Pemakaian tidak boleh kosong.');
            event.preventDefault();
            pemakaianInput.focus();
        }

        if (budgetInput.value <= 0) {
            alert('Budget harus lebih besar dari 0.');
            event.preventDefault();
            budgetInput.focus();
        }
    });

    // Visual feedback when fields are filled correctly
    pemakaianInput.addEventListener('input', function() {
        if (pemakaianInput.value.trim() !== '') {
            pemakaianInput.style.borderColor = '#4CAF50';
        }
    });

    budgetInput.addEventListener('input', function() {
        if (budgetInput.value > 0) {
            budgetInput.style.borderColor = '#4CAF50';
        }
    });
});
