<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helping Hand - Making a Difference Together</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #3498db;
            --secondary: #2ecc71;
            --accent: #e74c3c;
            --dark: #2c3e50;
            --light: #ecf0f1;
            --text: #34495e;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        body {
            font-family: 'Open Sans', sans-serif;
            color: var(--text);
            background-color: #f9f9f9;
            line-height: 1.6;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }

        /* Header Styles */
        .navbar {
            background-color: white;
            box-shadow: var(--shadow);
            padding: 15px 0;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
        }

        .navbar-brand i {
            font-size: 2.2rem;
            color: var(--primary);
            margin-right: 10px;
        }

        .navbar-brand h1 {
            font-size: 1.8rem;
            color: var(--dark);
            margin: 0;
        }

        .navbar-brand span {
            color: var(--secondary);
        }

        .navbar-nav .nav-link {
            font-weight: 500;
            font-size: 1.1rem;
            color: var(--dark);
            padding: 8px 15px;
            transition: color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: var(--primary);
        }

        .donate-btn {
            background-color: var(--accent);
            color: white;
            padding: 4px 10px;
            border-radius: 30px;
            font-weight: 600;
            text-transform: uppercase;
            transition: background-color 0.3s;
        }

        .donate-btn:hover {
            background-color: #c0392b;
            color: white;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(44, 62, 80, 0.8), rgba(44, 62, 80, 0.9)), url('https://images.unsplash.com/photo-1504672281656-e4981d70414b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            text-align: center;
            color: white;
            margin-top: 80px;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h2 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.4rem;
            margin-bottom: 30px;
            font-weight: 300;
        }

        .hero-btns {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .btn {
            padding: 15px 35px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
            border: none;
        }

        .btn-primary:hover {
            background-color: #2980b9;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .btn-secondary {
            background-color: transparent;
            border: 2px solid white;
            color: white;
        }

        .btn-secondary:hover {
            background-color: white;
            color: var(--dark);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* Section Styling */
        section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--dark);
            position: relative;
            display: inline-block;
            padding-bottom: 15px;
        }

        .section-title h2:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--primary);
        }

        /* Causes Section */
        .causes {
            background-color: white;
        }

        .cause-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: transform 0.3s ease;
            height: 100%;
            margin-bottom: 30px;
        }

        .cause-card:hover {
            transform: translateY(-10px);
        }

        .cause-img {
            height: 200px;
            overflow: hidden;
        }

        .cause-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .cause-card:hover .cause-img img {
            transform: scale(1.1);
        }

        .cause-content {
            padding: 25px;
        }

        .cause-content h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--dark);
        }

        .progress {
            height: 8px;
            background-color: var(--light);
            border-radius: 4px;
            margin: 20px 0;
            overflow: hidden;
        }

        .progress-bar {
            background-color: var(--secondary);
        }

        .cause-stats {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
            font-size: 0.9rem;
            color: var(--dark);
        }

        /* About Section */
        .about {
            background-color: var(--light);
        }

        .about-text h2 {
            font-size: 2.2rem;
            margin-bottom: 20px;
            color: var(--dark);
        }

        .about-text p {
            margin-bottom: 20px;
        }

        .stat-box {
            background: white;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            box-shadow: var(--shadow);
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .stat-box:hover {
            transform: translateY(-5px);
        }

        .stat-box i {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 15px;
        }

        .stat-box .number {
            font-size: 2rem;
            font-weight: 700;
            color: var(--dark);
        }

        /* Testimonials */
        .testimonials {
            background-color: white;
        }

        .testimonial-card {
            background: var(--light);
            padding: 30px;
            border-radius: 10px;
            position: relative;
            box-shadow: var(--shadow);
            margin-bottom: 30px;
            height: 100%;
        }

        .testimonial-card:before {
            content: '"';
            position: absolute;
            top: 10px;
            left: 20px;
            font-size: 5rem;
            color: var(--primary);
            opacity: 0.2;
            font-family: Georgia, serif;
        }

        .testimonial-content {
            position: relative;
            z-index: 1;
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .author-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
        }

        .author-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 60px 0 20px;
        }

        .footer-column h3 {
            font-size: 1.5rem;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h3:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--primary);
        }

        .footer-links {
            list-style: none;
            padding-left: 0;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #bdc3c7;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: white;
        }

        .contact-info {
            list-style: none;
            padding-left: 0;
        }

        .contact-info li {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
        }

        .contact-info i {
            color: var(--primary);
            margin-right: 15px;
            font-size: 1.2rem;
            margin-top: 5px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border-radius: 50%;
            transition: all 0.3s;
        }

        .social-links a:hover {
            background: var(--primary);
            transform: translateY(-5px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            color: #bdc3c7;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .hero h2 {
                font-size: 3rem;
            }
        }

        @media (max-width: 768px) {
            .hero {
                margin-top: 130px;
            }

            .hero h2 {
                font-size: 2.2rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .hero-btns {
                flex-direction: column;
                align-items: center;
            }

            .section-title h2 {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .hero {
                height: auto;
                padding: 100px 0;
            }
        }
    </style>

    <style>
        .contact-section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .form-control:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
        }

        .btn-custom {
            background-color: #3498db;
            color: #fff;
            border-radius: 30px;
            padding: 10px 25px;
            transition: background 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #2980b9;
        }

        .contact-info i {
            color: #3498db;
            margin-right: 10px;
            font-size: 1.3rem;
        }

        .map-container {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
        }

        @media (max-width: 768px) {
            .map-container {
                margin-top: 30px;
            }
        }
    </style>
</head>

<body>
    <!-- Header Section with Bootstrap Navbar -->
    <!-- Header Section with Bootstrap Navbar + Offcanvas -->
    <!-- Responsive Navbar -->
    <nav class="navbar navbar-light fixed-top shadow-sm bg-white">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <i class="fas fa-hands-helping me-2"></i>
                <h1 class="m-0 fs-4">Helping <span>Hand</span></h1>
            </a>

            <!-- Desktop Menu -->
            <ul class="navbar-nav flex-row gap-3 d-none d-lg-flex mb-0">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            </ul>

            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler d-lg-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <!-- Mobile Offcanvas Menu -->
        <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="mobileMenu">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="section-title">
                <h2>Get in Touch</h2>
                <p>We'd love to hear from you. Fill out the form or contact us directly.</p>
            </div>
            <div class="row g-4 pb-3" style="background-color: #ecf0f1;">
                <!-- Contact Form -->
                <div class="col-lg-6">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required />
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required />
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-custom">Send Message</button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-6">
                    <div class="mb-4">
                        <h3>Contact Information</h3>
                        <p>You can also reach us via phone, email, or drop by our office.</p>
                        <ul class="list-unstyled contact-info">
                            <li class="mb-3"><i class="fas fa-map-marker-alt"></i> Gorakhpur, Uttar Preadesh (273001), India</li>
                            <li class="mb-3"><i class="fas fa-phone"></i> 011 69269 569</li>
                            <li class="mb-3"><i class="fas fa-envelope"></i> helpinghandqr@gmail.com</li>

                        </ul>
                    </div>
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3563.1873154094906!2d83.375029374889!3d26.738397967560978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399145651997fe19%3A0x93a58584274bf944!2sPurvi%20Hospital!5e0!3m2!1sen!2sin!4v1750678140599!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <div class="footer-column">
                        <h3>Helping Hand</h3>
                        <p>Because Every Life Deserves<br>
                            a Helping Hand.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <div class="footer-column">
                        <h3>Quick Links</h3>
                        <ul class="footer-links">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6">
                    <div class="footer-column">
                        <h3>Contact Us</h3>
                        <ul class="contact-info">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Gorakhpur, Uttar Preadesh (273001), India</span>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                <span> 011 69269 569</span>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <span>helpinghandqr@gmail.com</span>
                            </li>
                            <!-- <li>
                                <i class="fas fa-clock"></i>
                                <span>Mon-Fri: 9AM - 5PM</span>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2023 Helping Hand. All Rights Reserved. | Designed with <i class="fas fa-heart" style="color:#e74c3c;"></i> for a Better World</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Animation for progress bars
        document.addEventListener('DOMContentLoaded', function() {
            const progressBars = document.querySelectorAll('.progress-bar');

            progressBars.forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0';

                setTimeout(() => {
                    bar.style.transition = 'width 1.5s ease-in-out';
                    bar.style.width = width;
                }, 500);
            });
        });
    </script>
</body>

</html>