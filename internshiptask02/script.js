document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('employeeForm');
    form.classList.add('fade-in');

    const rows = document.querySelectorAll('#employeeTable tr');
    rows.forEach((row, index) => {
        row.style.animationDelay = `${index * 0.1}s`;
        row.classList.add('fade-in');
    });
});
