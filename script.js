// script.js
function requestNotificationPermission() {
    Notification.requestPermission().then(permission => {
        if (permission === 'granted') {
            showNotification('Local Notification', '<h1>This is a test notification!');
        }
    });
}

function showNotification(title, message) {
    new Notification(title, {
        body: message
    });
}

// script.js
function requestNotificationFromServer() {
    // Assuming you have a PHP file to handle the server-side logic
    fetch('notify.php')
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showNotification('Server Notification', data.message);
            }
        })
        .catch(error => console.error('Error:', error));
}
