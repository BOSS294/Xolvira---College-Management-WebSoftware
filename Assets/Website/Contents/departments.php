<head>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa; /* Light background for better contrast */
            margin: 0;
        }

        .departments {
            max-width: 1200px; /* Max width for the section */
            margin: auto; /* Center align */
            padding: 20px;
            display: flex; /* Flex container for header and cards */
            flex-direction: column; /* Vertical alignment */
            align-items: center; /* Center align */
        }

        .departments h1 {
            font-size: 2.5em; /* Font size for the heading */
            color: #333; /* Dark text color */
            position: relative; /* For underlining effect */
            margin-bottom: 30px; /* Space below the heading */
            animation: fadeIn 0.5s ease; /* Animation on load */
        }

        .departments-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between; /* Space between cards */
            width: 100%; /* Full width of the container */
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

        .card h3 {
            margin: 10px 0; /* Margin for title */
            font-size: 1.5em; /* Title font size */
            color: #333; /* Dark text color */
        }

        .card p {
            color: #555; /* Darker grey for content text */
            line-height: 1.5; /* Line height for readability */
        }

        .card button {
            background-color: #fff; /* White background for button */
            border: 2px solid #000; /* Black border */
            border-radius: 5px; /* Rounded corners for button */
            padding: 10px 15px; /* Padding inside button */
            cursor: pointer; /* Pointer cursor */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transitions */
            margin-top: 10px; /* Space above the button */
        }

        .card button:hover {
            transform: scale(1.05); /* Slight scale effect on hover */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); /* Deeper shadow on hover */
            background: rgba(255, 255, 255, 0.8); /* Polymorphism effect on hover */
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
    <div class="departments">
        <h1>Departments</h1>
        <div class="departments-container">
            <div class="card">
                <img src="https://via.placeholder.com/300x150?text=Commerce" alt="Commerce Department">
                <h3>Commerce</h3>
                <p>Explore various aspects of commerce, including finance, marketing, and entrepreneurship.</p>
                <button>Learn More</button>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/300x150?text=Management" alt="Management Department">
                <h3>Management</h3>
                <p>Gain insights into management theories and practices for effective leadership.</p>
                <button>Learn More</button>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/300x150?text=Computer+Science" alt="Computer Science Department">
                <h3>Computer Science</h3>
                <p>Dive into programming, algorithms, and cutting-edge technology innovations.</p>
                <button>Learn More</button>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/300x150?text=Engineering" alt="Engineering Department">
                <h3>Engineering</h3>
                <p>Discover the principles of engineering and their applications in real-world scenarios.</p>
                <button>Learn More</button>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/300x150?text=Arts" alt="Arts Department">
                <h3>Arts</h3>
                <p>Engage in creative expression through visual arts, music, and literature.</p>
                <button>Learn More</button>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/300x150?text=Health+Sciences" alt="Health Sciences Department">
                <h3>Health Sciences</h3>
                <p>Study health-related disciplines and contribute to the well-being of communities.</p>
                <button>Learn More</button>
            </div>
        </div>
    </div>
</body>
