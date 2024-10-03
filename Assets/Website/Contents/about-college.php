<head>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa; /* Light background for better contrast */
            margin: 0;
        }

        .container {
            max-width: 1200px; /* Max width for the section */
            margin: auto; /* Center align */
            padding: 20px;
        }

        .about-heading {
            text-align: center; /* Center align heading */
            margin-bottom: 20px; /* Space below heading */
        }

        .about-heading h1 {
            font-size: 2.5em; /* Font size for the heading */
            color: #333; /* Dark text color */
            position: relative; /* For underlining effect */
            margin: 0; /* Remove default margin */
            animation: fadeIn 0.5s ease; /* Animation on load */
        }

        .about-heading h1::after {
            content: ""; /* Create an underline */
            display: block; /* Make it a block element */

            position: absolute; /* Position relative to the heading */
            bottom: -5px; /* Position below the text */
            transform: scaleX(0); /* Start from 0 width */
            animation: underlineAnimation 0.5s ease forwards; /* Animation for underline */
        }

        @keyframes underlineAnimation {
            to {
                transform: scaleX(1); /* Scale to full width */
            }
        }

        .about-college {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between; /* Space between cards */
            margin-top: 20px; /* Space above cards */
        }

        .card {
            background-color: #fff; /* White background for cards */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Shadow for depth */
            margin: 15px; /* Margin between cards */
            padding: 20px; /* Padding inside the card */
            flex: 1 1 calc(30% - 30px); /* Responsive card width */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transitions */
            animation: fadeIn 0.5s ease; /* Animation on load */
        }

        .card img {
            width: 100%; /* Responsive image */
            height: 150px; /* Fixed height for consistency */
            border-radius: 10px; /* Rounded corners for images */
            object-fit: cover; /* Cover the card area */
        }

        .card:hover {
            transform: translateY(-5px); /* Lift effect on hover */
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); /* Deeper shadow on hover */
        }

        .card h3 {
            margin: 10px 0; /* Margin for title */
            font-size: 1.5em; /* Title font size */
            color: #333; /* Dark text color */
        }

        .card p {
            color: #555; /* Darker grey for content text */
            line-height: 1.5; /* Line height for readability */
        }

        @keyframes fadeIn {
            from {
                opacity: 0; /* Start invisible */
                transform: translateY(20px); /* Start from below */
            }
            to {
                opacity: 1; /* End visible */
                transform: translateY(0); /* End at original position */
            }
        }

        /* Responsive styling */
        @media (max-width: 768px) {
            .card {
                flex: 1 1 calc(45% - 30px); /* Adjust card width for smaller screens */
            }
        }

        @media (max-width: 480px) {
            .card {
                flex: 1 1 100%; /* Full width for mobile devices */
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="about-heading">
            <h1>About Us</h1>
        </div>
        <div class="about-college">
            <div class="card">
                <img src="https://via.placeholder.com/300x150?text=Our+Vision" alt="Our Vision">
                <h3>Our Vision</h3>
                <p>To be a leading institution in education, fostering innovation and research.</p>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/300x150?text=Our+Mission" alt="Our Mission">
                <h3>Our Mission</h3>
                <p>To provide quality education and equip students with essential skills for their future careers.</p>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/300x150?text=History" alt="History">
                <h3>History</h3>
                <p>Established in 1990, our college has a rich history of excellence and achievement.</p>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/300x150?text=Campus+Life" alt="Campus Life">
                <h3>Campus Life</h3>
                <p>A vibrant campus life with various clubs, sports, and cultural activities to engage students.</p>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/300x150?text=Achievements" alt="Achievements">
                <h3>Achievements</h3>
                <p>Numerous awards and recognitions in academics, research, and community service.</p>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/300x150?text=Alumni+Network" alt="Alumni Network">
                <h3>Alumni Network</h3>
                <p>Join a strong network of alumni who are making a difference in various fields worldwide.</p>
            </div>
        </div>
    </div>
</body>
