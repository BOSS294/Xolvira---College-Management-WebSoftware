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

        nav {
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            position: relative;
            z-index: 100;
        }

        .logo-text {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .nav-links {
            display: flex;
            align-items: center;
        }

        .nav-links a {
            color: #333;
            font-size: 16px; /* Reduced font size for modern look */
            text-decoration: none;
            padding: 10px 15px; /* Adjusted padding */
            margin: 0 5px;
            position: relative;
            transition: all 0.3s ease;
            display: flex;
            align-items: center; /* Align icon and text vertically */
        }

        .nav-links a:hover {
            color: #007bff;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background-color: #007bff;
            transition: width 0.3s ease, left 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
            left: 0;
        }

        .nav-icons {
            font-size: 20px; /* Reduced icon size for better alignment */
            margin-right: 8px;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.1);
        }

        /* Responsive Menu */
        .menu-icon {
            display: none; /* Hidden on large screens */
            font-size: 28px;
            cursor: pointer;
            opacity: 0;
        }

        .nav-links {
            transition: all 0.5s ease;
        }

        .nav-links .active {
            opacity: 1;
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
                position: absolute;
                top: 60px;
                right: 0;
                background-color: white;
                width: 100%;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                flex-direction: column;
                align-items: flex-start;
                padding: 10px;
            }

            .nav-links.active {
                display: flex;
                opacity: 1;
            }

            .nav-links a {
                padding: 15px 20px;
                width: 100%;
                border-bottom: 1px solid #ddd;
            }

            .menu-icon {
                display: block; /* Shown only on smaller screens */
            }
        }

        /* Animations */
        nav {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <nav>
        <div class="logo-text">
            Xolvira
        </div>
        <span class="material-icons menu-icon" id="menu-icon">
            menu
        </span>
        <div class="nav-links" id="nav-links">
            <a href="#"><span class="material-icons nav-icons">home</span>Home</a>
            <a href="#"><span class="material-icons nav-icons">book</span>Courses</a>
            <a href="#"><span class="material-icons nav-icons">school</span>Departments</a>
            <a href="#"><span class="material-icons nav-icons">info</span>About us</a>
            <a href="#"><span class="material-icons nav-icons">login</span>Login</a>
        </div>
    </nav>

    <script>
        // Responsive Menu Toggle
        const menuIcon = document.getElementById('menu-icon');
        const navLinks = document.getElementById('nav-links');

        menuIcon.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    </script>

    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</body>
