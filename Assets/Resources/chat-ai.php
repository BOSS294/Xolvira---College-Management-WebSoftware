<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Assistance</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            position: relative; /* Allow absolute positioning of chat icon */
            height: 100vh; /* Full height for background reference */
            background-color: #f8f9fa; /* Light background for contrast */
        }

        .notification-icon {
            position: fixed; /* Fixed position for icon */
            bottom: 20px; /* Space from the bottom */
            right: 20px; /* Space from the right */
            width: 60px; /* Size of the icon */
            height: 60px; /* Size of the icon */
            border-radius: 50%; /* Circle shape */
            background-color: #007bff; /* Primary color */
            display: flex; /* Center icon */
            justify-content: center; /* Center icon */
            align-items: center; /* Center icon */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); /* Shadow for depth */
            cursor: pointer; /* Pointer on hover */
            transition: background-color 0.3s ease; /* Smooth background transition */
        }

        .notification-icon:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }

        .chat-box {
            position: fixed; /* Fixed position for chat box */
            bottom: 100px; /* Space from the bottom */
            right: 20px; /* Space from the right */
            width: 300px; /* Width of chat box */
            background-color: #ffffff; /* White background */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Shadow for depth */
            display: none; /* Hidden by default */
            flex-direction: column; /* Stack items vertically */
            z-index: 10; /* Ensure it's on top of other elements */
        }

        .chat-header {
            background-color: #007bff; /* Header color */
            color: #ffffff; /* White text */
            padding: 10px; /* Padding inside header */
            border-radius: 8px 8px 0 0; /* Rounded corners for top */
            font-weight: 600; /* Bold text */
        }

        .chat-body {
            padding: 15px; /* Padding inside chat body */
            max-height: 200px; /* Max height for scrollable area */
            overflow-y: auto; /* Scroll when overflow */
        }

        .chat-message {
            margin: 10px 0; /* Space between messages */
        }

        .chat-input {
            display: flex; /* Flex layout for input */
            margin: 10px; /* Margin around input */
        }

        .chat-input input {
            flex: 1; /* Take available space */
            padding: 10px; /* Padding inside input */
            border: 1px solid #cccccc; /* Light border */
            border-radius: 5px; /* Rounded corners */
        }

        .chat-input button {
            padding: 10px; /* Padding inside button */
            background-color: #007bff; /* Button color */
            color: #ffffff; /* White text */
            border: none; /* No border */
            border-radius: 5px; /* Rounded corners */
            cursor: pointer; /* Pointer on hover */
            transition: background-color 0.3s ease; /* Smooth transition */
        }

        .chat-input button:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }
    </style>
</head>
<body>

    <!-- Notification Icon -->
    <div class="notification-icon" id="notificationIcon">
        <span>💬</span> <!-- Chat icon -->
    </div>

    <!-- Chat Box -->
    <div class="chat-box" id="chatBox">
        <div class="chat-header">
            PP ( MaSh )<br>
            Virtual Assistant<br>
            <span style="font-size: 0.8em;">Active ( ONLINE )</span>
        </div>
        <div class="chat-body" id="chatBody">
            <div class="chat-message">Sorry, I am under development. I will be here soon! 😊🚀</div>
        </div>
        <div class="chat-input">
            <input type="text" id="userInput" placeholder="Type your message..." />
            <button id="sendMessage">Send</button>
        </div>
    </div>

    <script>
        // Get DOM elements
        const notificationIcon = document.getElementById('notificationIcon');
        const chatBox = document.getElementById('chatBox');
        const sendMessageButton = document.getElementById('sendMessage');
        const userInput = document.getElementById('userInput');
        const chatBody = document.getElementById('chatBody');

        // Toggle chat box visibility
        notificationIcon.addEventListener('click', () => {
            chatBox.style.display = chatBox.style.display === 'none' || chatBox.style.display === '' ? 'flex' : 'none';
            userInput.focus(); // Focus on input when chat box opens
        });

        // Send message function
        sendMessageButton.addEventListener('click', () => {
            const message = userInput.value;
            if (message) {
                const userMessage = document.createElement('div');
                userMessage.classList.add('chat-message');
                userMessage.textContent = message;
                chatBody.appendChild(userMessage);
                userInput.value = ''; // Clear input

                // Simulate AI response
                const aiMessage = document.createElement('div');
                aiMessage.classList.add('chat-message');
                aiMessage.textContent = 'Sorry, I am under development. I will be here soon! 😊🚀';
                chatBody.appendChild(aiMessage);
                chatBody.scrollTop = chatBody.scrollHeight; // Scroll to bottom
            }
        });
    </script>
</body>
</html>
