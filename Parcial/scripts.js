document.getElementById('contactForm').addEventListener('submit', function(event) {
    var nameField = document.getElementById('name').value;
    var regex = /^[a-zA-Z\s]+$/;

    if (!regex.test(nameField)) {
        alert('El nombre no puede contener números.');
        event.preventDefault();
    }
});
