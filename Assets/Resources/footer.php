
<head>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>

        footer {
            background-color: #343a40; /* Dark background for footer */
            color: #ffffff; /* White text for contrast */
            padding: 40px 20px; /* Padding around footer content */
            display: flex; /* Flexbox layout */
            flex-direction: column; /* Stack items vertically */
            align-items: center; /* Center items horizontally */
            position: relative; /* Position for the trademark */
            border-top: 4px solid gray; /* Top border for visual separation */
        }

        .footer-container {
            max-width: 1800px; /* Max width for footer content */
            width: 100%; /* Full width */
            display: flex; /* Flexbox for layout */
            flex-wrap: wrap; /* Wrap items to the next line */
            justify-content: space-between; /* Space between items */
            align-items: flex-start; /* Align items to the top */
        }

        .footer-section {
            flex: 1; /* Each section takes equal space */
            min-width: 220px; /* Minimum width for sections */
            margin: 20px; /* Space between sections */
        }

        .footer-section h3 {
            font-size: 1.5em; /* Heading size */
            color: #007bff; /* Primary color for headings */
            margin-bottom: 15px; /* Space below heading */
        }

        .footer-section p {
            font-size: 0.9em; /* Font size for description */
            line-height: 1.6; /* Line height for readability */
            color: #dcdcdc; /* Lighter text for descriptions */
        }

        .footer-links {
            list-style-type: none; /* Remove bullet points */
            padding: 0; /* Remove padding */
        }

        .footer-links li {
            margin: 10px 0; /* Space between links */
        }

        .footer-links a {
            color: #ffffff; /* White text for links */
            text-decoration: none; /* Remove underline */
            transition: color 0.3s ease; /* Smooth color transition */
        }

        .footer-links a:hover {
            color: #007bff; /* Change color on hover */
        }

        .trademark {
            position: absolute; /* Position at the bottom */
            bottom: 10px; /* Space from the bottom */
            font-size: 0.8em; /* Smaller font size for trademark */
            color: #dcdcdc; /* Light color for trademark */
        }

        @media (max-width: 768px) {
            .footer-container {
                flex-direction: column; /* Stack sections vertically on smaller screens */
                align-items: center; /* Center align sections */
            }

            .footer-section {
                min-width: 100%; /* Full width for each section */
                margin: 10px 0; /* Adjust margin for smaller screens */
            }
        }
    </style>
</head>
<body>
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h3>Xolvira</h3>
                <p>College Management Website</p>
                <p>Your one-stop solution for managing college operations efficiently and effectively.</p>
            </div>
            <div class="footer-section">
                <h3>Contact Info</h3>
                <p>Developed by: Mayank Chawdhari</p>
                <p>Email: mayank@example.com</p>
                <p>Phone: +91 123 456 7890</p>
            </div>
            <div class="footer-section">
                <h3>Navigation Links</h3>
                <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="#">Admissions</a></li>
                    <li><a href="#">Courses</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Campus Life</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Important Links</h3>
                <ul class="footer-links">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Support</a></li>
                </ul>
            </div>
        </div>
        <div class="trademark">
            &copy; 2024 Xolvira. Developed by Mayank Chawdhari.
        </div>
    </footer>
