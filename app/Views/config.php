<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How Long Will You Be?</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .form-container {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 8px;
            margin-top: 6px;
            box-sizing: border-box;
        }

        textarea {
            width: 100%;
            height: 100px;
            padding: 8px;
            margin-top: 6px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="radio"] {
            transform: scale(1.5); /* Increase the size of the radio button itself */
            margin-right: 10px;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #dddddd;
        }

    </style>
</head>
<body>

<div class="form-container">
    <center><h1>How Long Will You Be?</h1></center>
    <form action="/submit-appointment" method="post">
        <label for="time">Time:</label>
        <select id="time" name="time">
            <option value="">Select Time</option>
            <option value="30">30 minutes</option>
            <option value="60">1 hour</option>
            <option value="90">1 hour 30 minutes</option>
        </select>
    </form>
</div>
<div class="form-container">
    <center><h1>Choose a Purpose:</h1></center>
    <h1>
    <label for="purpose1">
    <center>
        <input type="radio" id="friends" name="radioPurpose" value="Friends">
        <i class="fa-solid fa-user-group" style="color: #f05984;"></i> Friends
    </center>
    </label>
    </h1>

    <h1>
    <label for="purpose2">
    <center>
        <input type="radio" id="networking" name="radioPurpose" value="Networking">
        <i class="fas fa-heart" style="color: #f05984;"></i> Networking
    </center>
    </label>
    </h1>
</div>


    <div class="form-container">
        <h1>Share Your Reading Experience</h1>
        <form action="/submit" method="post">
            <label for="message">What is the last book you read that you couldn't put down?</label>
            <input type="text" id="message" name="message" placeholder="Enter your response...">
            </br>
            <button type="submit">Submit</button>
        </form>
    </div>
<script>
    document.getElementById('nextButton').addEventListener('click', function () {
        // Get the selected time
        const time = document.getElementById('time').value;
        
        // Get the selected purpose
        const radioPurpose = document.querySelector('input[name="radioPurpose"]:checked');
        const selectedPurpose = radioPurpose ? radioPurpose.value : '';

        // Redirect to the "messages.html" page with the selected values as query parameters
        const nextURL = `/messages?time=${encodeURIComponent(time)}&purpose=${encodeURIComponent(selectedPurpose)}`;
        window.location.href = nextURL;
    });
</script>

</body>
</html>
