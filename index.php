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
</head>

<body>
    <!-- Header Section with Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-hands-helping"></i>
                <h1>Helping <span>Hand</span></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link donate-btn" href="login.php" style="background-color: #2ecc71;">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <!-- <section>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/ChatGPT Image Jun 11, 2025, 06_06_55 PM.png" class="d-block w-100" alt="..." height="500px">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/pic03.jpg" class="d-block w-100" alt="..." height="500px">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/pic04.jpg" class="d-block w-100" alt="..." height="500px">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section> -->

    <section>
        <?php include('slider.php') ?>
    </section>
    <!-- About Section -->
    <section class="about">
        <div class="container">
            <div class="section-title">
                <h2>About Helping Hand</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-text">
                        <h2>We are committed to making the world a better place</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>Our approach focuses on sustainable development and empowering communities to become self-sufficient. We work closely with local partners to ensure our programs are culturally appropriate and address real needs.</p>

                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?ixlib=rb-4.0.3&auto=format&fit=crop&w=1050&q=80" alt="Helping Hand Team" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>We Volunteear</h2>
            </div>
            <div class="row">
                <div class="container my-5">
                    <div class="card shadow">
                        <div class="card-body">
                            <h4 class="mb-4">Registration Form</h4>
                            <form action="submit.php" method="POST">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="9876543210" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Create password" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="Write your message here..." required></textarea>
                                </div>

                                <button type="submit" class="btn w-100 text-white" style="background-color: #2ecc71;">Register</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <div class="footer-column">
                        <h3>Helping Hand</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <div class="footer-column">
                        <h3>Quick Links</h3>
                        <ul class="footer-links">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Causes</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <div class="footer-column">
                        <h3>Our Causes</h3>
                        <ul class="footer-links">
                            <li><a href="#">Education for Children</a></li>
                            <li><a href="#">Clean Water Access</a></li>
                            <li><a href="#">Food Security</a></li>
                            <li><a href="#">Healthcare Initiatives</a></li>
                            <li><a href="#">Women Empowerment</a></li>
                            <li><a href="#">Disaster Relief</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-column">
                        <h3>Contact Us</h3>
                        <ul class="contact-info">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>123 Charity Street, New York, NY 10001, USA</span>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                <span>+1 (212) 555-1234</span>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <span>info@helpinghand.org</span>
                            </li>
                            <li>
                                <i class="fas fa-clock"></i>
                                <span>Mon-Fri: 9AM - 5PM</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2023 Helping Hand NGO. All Rights Reserved. | Designed with <i class="fas fa-heart" style="color:#e74c3c;"></i> for a Better World</p>
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