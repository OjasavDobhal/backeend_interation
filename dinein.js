function submitBooking() {
    var name = document.getElementById('name').value;
    var people = document.getElementById('people').value;
    var time = document.getElementById('time').value;

    // Add a default date (you may want to customize this based on your needs)
    var currentDate = new Date().toISOString().slice(0, 10);
    var dateTimeValue = currentDate + ' ' + time;

    // Create a FormData object to send the data
    var formData = new FormData();
    formData.append('name', name);
    formData.append('people', people);
    formData.append('time', dateTimeValue);

    // Send data to the server for insertion
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "dinein.php", true);

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                // Display the booking confirmation dynamically
                displayConfirmation(name, people, time);
            } else {
                console.error("Error: " + xhr.statusText);
            }
        }
    };

    // Send the FormData object
    xhr.send(formData);
}

function displayConfirmation(name, people, time) {
    // Create and append HTML elements for the confirmation message
    var confirmationDiv = document.getElementById('confirmation');
    confirmationDiv.innerHTML = `
        <h2>Booking Confirmation</h2>
        <p><strong>Name:</strong> ${name}</p>
        <p><strong>Number of People:</strong> ${people}</p>
        <p><strong>Time of Booking:</strong> ${time}</p>
        <p>Thank you for booking with us!</p>
    `;
}
