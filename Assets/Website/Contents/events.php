
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa; /* Light background for contrast */
            margin: 0;
        }

        .events {
            max-width: 1400px; /* Max width for the events section */
            width: 100%;
            height: 500px; /* Set a fixed height for the events section */
            margin: 20px auto; /* Center align */
            padding: 20px; /* Padding for events */
            background-color: #fff; /* White background for the events section */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Shadow for depth */
            border-radius: 10px; /* Rounded corners */
            position: relative; /* Position for absolute children */
            overflow: hidden; /* Hide overflow for smooth transitions */
        }

        .events h2 {
            text-align: center; /* Center align heading */
            margin-bottom: 20px; /* Space below heading */
            font-size: 2.5em; /* Font size for heading */
            color: #333; /* Dark text color */
        }

        .event-slide {
            display: flex; /* Flex display for horizontal alignment */
            position: absolute; /* Position to enable smooth transitions */
            width: 100%;
            opacity: 0; /* Initially hidden */
            transition: opacity 0.5s ease; /* Smooth transition for opacity */
        }

        .event-slide.active {
            opacity: 1; /* Fully visible when active */
            animation: changeEvent 10s infinite; /* Animate change every 10 seconds */
        }

        .event-image {
            flex: 1; /* Allow the image to take up space */
            max-width: 400px; /* Limit max width for images */
            border-radius: 10px; /* Rounded corners for image */
            overflow: hidden; /* Hide overflow for image */
        }

        .event-image img {
            width: 100%; /* Full width of the container */
            height: auto; /* Maintain aspect ratio */
            border-radius: 10px; /* Rounded corners for image */
        }

        .event-details {
            flex: 2; /* Allow details to take more space */
            padding-left: 20px; /* Space between image and details */
            display: flex;
            flex-direction: column; /* Stack elements vertically */
            justify-content: center; /* Center align vertically */
        }

        .event-name {
            font-size: 2em; /* Big font size for event name */
            color: #333; /* Dark text color */
            margin: 0; /* No margin */
        }

        .event-description {
            font-size: 1.2em; /* Big font size for description */
            color: #555; /* Darker grey for description */
            margin: 10px 0; /* Margin for description */
        }

        .event-big-description {
            font-size: 1em; /* Font size for big description */
            color: #666; /* Grey for big description */
            margin: 10px 0; /* Margin for big description */
            width: 60%;
        }

        .event-date {
            color: #777; /* Grey for date */
            font-size: 1em; /* Font size for date */
            font-style: italic; /* Italic for date */
            margin: 5px 0; /* Margin for date */
        }

        .learn-more {
            display: inline-block; /* Block for button styling */
            background-color: #fff; /* White background for button */
            width: fit-content;
            color: #333; /* Dark text color */
            padding: 10px 15px; /* Padding for button */
            border: 2px solid #333; /* Black border */
            border-radius: 5px; /* Rounded corners for button */
            text-decoration: none; /* Remove underline */
            font-size: 1em; /* Font size for button */
            transition: background-color 0.3s ease, color 0.3s ease; /* Smooth transition */
        }

        .learn-more:hover {
            background-color: #333; /* Dark background on hover */
            color: #fff; /* White text on hover */
        }

        @keyframes changeEvent {
            0% { opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { opacity: 0; }
        }

        @media (max-width: 768px) {
            .events {
                padding: 10px; /* Reduced padding on mobile */
                height: auto; /* Auto height for mobile */
            }

            .event-name {
                font-size: 1.5em; /* Smaller font size for mobile */
            }

            .event-description,
            .event-big-description {
                font-size: 1em; /* Smaller font size for mobile */
            }

            .learn-more {
                font-size: 0.9em; /* Smaller font size for mobile */
            }
        }
    </style>
</head>

    <div class="events">
        <h2>Events</h2> <!-- Added heading for the events section -->
        <div class="event-slide active">
            <div class="event-image">
                <img src="https://via.placeholder.com/400x300?text=Tech+Talk" alt="Tech Talk">
            </div>
            <div class="event-details">
                <h3 class="event-name">Tech Talk: AI Innovations</h3>
                <p class="event-description">Join us for a discussion on the latest advancements in AI.</p>
                <p class="event-big-description">This talk will cover various AI technologies, their applications in real-world scenarios, and the future potential of AI in various industries.</p>
                <p class="event-date">Date: October 10, 2024 | Time: 4:00 PM</p>
                <a href="#" class="learn-more">Learn More</a>
            </div>
        </div>
        <div class="event-slide">
            <div class="event-image">
                <img src="https://via.placeholder.com/400x300?text=Web+Development" alt="Web Development Workshop">
            </div>
            <div class="event-details">
                <h3 class="event-name">Workshop: Web Development</h3>
                <p class="event-description">Learn to build modern websites using HTML, CSS, and JavaScript.</p>
                <p class="event-big-description">This workshop is hands-on and designed for beginners and intermediates looking to improve their web development skills. You'll work on practical projects and get guidance from experienced instructors.</p>
                <p class="event-date">Date: October 15, 2024 | Time: 10:00 AM</p>
                <a href="#" class="learn-more">Learn More</a>
            </div>
        </div>
        <div class="event-slide">
            <div class="event-image">
                <img src="https://via.placeholder.com/400x300?text=Hackathon" alt="Hackathon 2024">
            </div>
            <div class="event-details">
                <h3 class="event-name">Hackathon 2024</h3>
                <p class="event-description">Compete with teams to create innovative software solutions.</p>
                <p class="event-big-description">Join like-minded individuals for a weekend of coding, collaboration, and competition. Form teams, tackle real-world problems, and showcase your skills to industry leaders.</p>
                <p class="event-date">Date: October 20, 2024 | Time: 9:00 AM</p>
                <a href="#" class="learn-more">Learn More</a>
            </div>
        </div>
        <div class="event-slide">
            <div class="event-image">
                <img src="https://via.placeholder.com/400x300?text=Cybersecurity" alt="Cybersecurity Awareness Seminar">
            </div>
            <div class="event-details">
                <h3 class="event-name">Seminar: Cybersecurity Awareness</h3>
                <p class="event-description">Discover the importance of cybersecurity in today's world.</p>
                <p class="event-big-description">This seminar will cover key concepts in cybersecurity, best practices for protecting personal information, and how to identify and mitigate cyber threats.</p>
                <p class="event-date">Date: October 25, 2024 | Time: 1:00 PM</p>
                <a href="#" class="learn-more">Learn More</a>
            </div>
        </div>
        <div class="event-slide">
            <div class="event-image">
                <img src="https://via.placeholder.com/400x300?text=Career+Fair" alt="Career Fair">
            </div>
            <div class="event-details">
                <h3 class="event-name">Career Fair</h3>
                <p class="event-description">Meet with top companies and explore job opportunities.</p>
                <p class="event-big-description">This is your chance to network with recruiters from leading companies. Bring your resume and be prepared for on-the-spot interviews!</p>
                <p class="event-date">Date: October 30, 2024 | Time: 11:00 AM</p>
                <a href="#" class="learn-more">Learn More</a>
            </div>
        </div>
    </div>

    <script>
        const slides = document.querySelectorAll('.event-slide');
        let currentSlide = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('active'); // Remove active class from all slides
                if (i === index) {
                    slide.classList.add('active'); // Add active class to current slide
                }
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length; // Cycle through slides
            showSlide(currentSlide);
        }

        setInterval(nextSlide, 10000); // Change slide every 10 seconds
    </script>
