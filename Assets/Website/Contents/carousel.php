<head>
    <style>
        /* General Styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        .carousel {
            background-color: #f8f9fa; /* Light background for white-themed design */
            width: 100%;
            height: 400px; /* Optimal height for both desktop and mobile */
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .carousel-content {
            position: absolute;
            text-align: center;
            color: #333;
            opacity: 0; /* Start hidden */
            transition: opacity 1s ease; /* Fade effect */
        }

        .carousel-content.active {
            opacity: 1; /* Show active content */
        }

        .carousel-title {
            font-size: 32px;
            font-weight: bold;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.2); /* 3D effect */
        }

        .carousel-description {
            font-size: 18px;
            margin: 15px 0;
        }


        .carousel-buttons {
             margin-top: 20px;
        }

        .carousel-buttons a {
            padding: 10px 20px;
            margin: 0 10px;
            text-decoration: none;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-color: white; /* White background */
            color: black; /* Blue text color */
            border: 2px solid black; /* Black border */
            border-radius: 15px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
            transition: transform 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease, color 0.3s ease; /* Added color transition */
        }

        .carousel-buttons a:hover {
            background-color: #007bff; /* Blue background on hover */
            color: white; /* White text on hover */
            transform: translateY(-3px) scale(1.05); /* Slight lift and scale for 3D effect */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); /* Enhanced shadow on hover */
        }



        /* Responsive Styling */
        @media (max-width: 768px) {
            .carousel {
                height: 300px;
            }

            .carousel-title {
                font-size: 24px;
            }

            .carousel-description {
                font-size: 16px;
            }

            .carousel-buttons a {
                padding: 8px 16px;
                margin: 0 5px;
            }
        }
    </style>
</head>

<body>
    <div class="carousel">
        <div class="carousel-content active">
            <div class="carousel-title">Welcome to Xolvira</div>
            <div class="carousel-description">A modern platform that powers your college management system.</div>
            <div class="carousel-buttons">
                <a href="#">Learn More</a>
                <a href="#">Get Started</a>
            </div>
        </div>

        <div class="carousel-content">
            <div class="carousel-title">Efficient Course Management</div>
            <div class="carousel-description">Handle courses, departments, and schedules effortlessly.</div>
            <div class="carousel-buttons">
                <a href="#">Explore Courses</a>
                <a href="#">Join Now</a>
            </div>
        </div>

        <div class="carousel-content">
            <div class="carousel-title">Seamless User Experience</div>
            <div class="carousel-description">Login, register, and manage your academic life with ease.</div>
            <div class="carousel-buttons">
                <a href="#">Student Login</a>
                <a href="#">Staff Login</a>
            </div>
        </div>
    </div>

    <script>
        let currentIndex = 0;
        const carouselItems = document.querySelectorAll('.carousel-content');
        const totalItems = carouselItems.length;

        function changeCarousel() {
            // Hide all items
            carouselItems.forEach(item => item.classList.remove('active'));

            // Update the index
            currentIndex = (currentIndex + 1) % totalItems;

            // Show the current item
            carouselItems[currentIndex].classList.add('active');
        }

        // Change carousel every 10 seconds
        setInterval(changeCarousel, 10000);
    </script>
</body>
