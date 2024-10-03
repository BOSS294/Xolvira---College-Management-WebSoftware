<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa; /* Light background for better contrast */
            overflow-x: hidden; /* Hide horizontal overflow */
        }

        .notification-train {
            position: relative;
            width: 1800px;
            height: 50px; /* Adjust height based on your preference */
            overflow: hidden; /* Hide overflowing content */
            background-color: #ffeb3b; /* Yellow background for notifications */
            color: #333; /* Dark text color for better contrast */
            display: flex; /* Use flexbox for alignment */
            align-items: center; /* Center align vertically */
            border: 2px solid #ffc107; /* Border color that complements yellow */
            border-radius: 5px; /* Rounded corners for a modern look */
            padding: 0 15px; /* Padding inside the container */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Shadow for depth */
            margin-bottom: 20px; /* Space below notification */
        }

        .scroll-container {
            display: flex; /* Use flexbox for alignment */
            white-space: nowrap; /* Prevent line breaks */
            animation: scroll 30s linear infinite; /* Animation for scrolling */
        }

        .notification-message {
            padding: 0 30px; /* Horizontal padding for spacing */
            font-size: 18px; /* Font size */
            min-width: 250px; /* Adjust as needed for alignment */
            transition: color 0.3s ease; /* Smooth color change on hover */
        }

        .notification-message:hover {
            color: #007bff; /* Change color on hover */
            transform: scale(1.05); /* Slightly scale up on hover */
        }

        @keyframes scroll {
            0% {
                transform: translateX(100%); /* Start from right */
            }
            100% {
                transform: translateX(-100%); /* End at left */
            }
        }
    </style>
</head>

<body>
    <div class="notification-train">
        <div class="scroll-container" id="scrollContainer">
            <div class="notification-message">📅 Event 1: Upcoming meeting on Monday!</div>
            <div class="notification-message">🎉 Congratulations! You have a new message.</div>
            <div class="notification-message">🔔 Reminder: Submit your assignment by Friday.</div>
            <div class="notification-message">🛒 Alert: Your order has been shipped!</div>
            <div class="notification-message">⚙️ Update: System maintenance scheduled for tonight.</div>
            <!-- Repeat messages for a seamless effect -->
            <div class="notification-message">📅 Event 1: Upcoming meeting on Monday!</div>
            <div class="notification-message">🎉 Congratulations! You have a new message.</div>
            <div class="notification-message">🔔 Reminder: Submit your assignment by Friday.</div>
            <div class="notification-message">🛒 Alert: Your order has been shipped!</div>
            <div class="notification-message">⚙️ Update: System maintenance scheduled for tonight.</div>
        </div>
    </div>
</body>
</html>
