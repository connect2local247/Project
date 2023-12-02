// script.js
function requestNotificationPermission() {
    var title = document.getElementById("notification-title")
    var message = document.getElementById("notification-message");

    Notification.requestPermission().then(permission => {
        if (permission === 'granted') {
            showNotification(title.innerHTML,message.innerHTML);
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
    fetch('/connect2local/includes/notification-permission.php')
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showNotification('Server Notification', data.message);
            }
        })
        .catch(error => console.error('Error:', error));
}
