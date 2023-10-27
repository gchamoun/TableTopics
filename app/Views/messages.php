<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Messages</title>
</head>
<body>
    <div id="message-content">
        <!-- This is where the selected values will be displayed -->
    </div>

    <!-- Your other content goes here -->
</body>
</html>
<script>
    // Function to parse query parameters from the URL
    function getQueryVariable(variable) {
        const query = window.location.search.substring(1);
        const vars = query.split('&');
        for (let i = 0; i < vars.length; i++) {
            const pair = vars[i].split('=');
            if (decodeURIComponent(pair[0]) === variable) {
                return decodeURIComponent(pair[1]);
            }
        }
        return null;
    }

    // Get the selected time and purpose from the query parameters
    const selectedTime = getQueryVariable('time');
    const selectedPurpose = getQueryVariable('purpose');

    // Display the selected values in the "message-content" div
    const messageContent = document.getElementById('message-content');
    messageContent.innerHTML = `You selected Time: ${selectedTime} and Purpose: ${selectedPurpose}.`;

    // You can style the displayed message as needed.
</script>
