<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helping Hand - NGO Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        :root {
            --primary: #3498db;
            --secondary: #2ecc71;
            --accent: #e74c3c;
            --dark: #2c3e50;
            --light: #ecf0f1;
            --sidebar: #1a252f;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            overflow-x: hidden;
        }

        /* Sidebar Styling */
        #sidebar {
            background-color: var(--sidebar);
            color: white;
            height: 100vh;
            position: fixed;
            transition: all 0.3s;
            z-index: 1000;
        }

        .sidebar-header {
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.2);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar-header h3 i {
            color: var(--secondary);
        }

        .sidebar-menu {
            padding: 20px 0;
        }

        .sidebar-menu .nav-link {
            color: rgba(255, 255, 255, 0.7);
            padding: 12px 20px;
            margin: 5px 0;
            border-radius: 0;
            transition: all 0.2s;
        }

        .sidebar-menu .nav-link:hover,
        .sidebar-menu .nav-link.active {
            color: white;
            background-color: rgba(0, 0, 0, 0.3);
            border-left: 4px solid var(--primary);
        }

        .sidebar-menu .nav-link i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }

        /* Main Content */
        #content {
            margin-left: 250px;
            transition: all 0.3s;
            padding: 20px;
            min-height: 100vh;
        }

        /* Topbar */
        .topbar {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
            margin-bottom: 30px;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .search-bar {
            background-color: #f1f3f5;
            border-radius: 20px;
            padding: 8px 15px;
        }

        .search-bar input {
            background: transparent;
            border: none;
            outline: none;
            width: 200px;
        }

        .user-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 10px;
        }

        /* Dashboard Cards */
        .dashboard-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 25px;
            border: none;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .dashboard-card .card-icon {
            font-size: 2.5rem;
            position: absolute;
            right: 20px;
            top: 20px;
            opacity: 0.2;
        }

        .card-1 {
            background: linear-gradient(135deg, #3498db, #2c3e50);
            color: white;
        }

        .card-2 {
            background: linear-gradient(135deg, #2ecc71, #27ae60);
            color: white;
        }

        .card-3 {
            background: linear-gradient(135deg, #e74c3c, #c0392b);
            color: white;
        }

        .card-4 {
            background: linear-gradient(135deg, #9b59b6, #8e44ad);
            color: white;
        }

        /* Chart Containers */
        .chart-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            padding: 20px;
            margin-bottom: 25px;
        }

        .chart-container h5 {
            color: var(--dark);
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        /* Recent Activities */
        .activity-item {
            display: flex;
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }

        .activity-item:last-child {
            border-bottom: none;
        }

        .activity-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .activity-details {
            flex-grow: 1;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            #sidebar {
                width: 80px;
                text-align: center;
            }

            #sidebar .nav-link span {
                display: none;
            }

            #sidebar .nav-link i {
                margin-right: 0;
                font-size: 1.2rem;
            }

            #content {
                margin-left: 80px;
            }
        }

        @media (max-width: 576px) {
            #sidebar {
                width: 0;
                overflow: hidden;
            }

            #content {
                margin-left: 0;
            }

            .topbar .col-md-6 {
                margin-bottom: 10px;
            }
        }

        .progress {
            height: 8px;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div id="sidebar" class="col-md-3 col-lg-2 d-md-block">
        <div class="sidebar-header">
            <h3><i class="bi bi-hand-index-thumb"></i> Helping Hand</h3>
        </div>
        <div class="sidebar-menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="dashboard.php">
                        <i class="bi bi-speedometer2"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view.php">
                        <i class="bi bi-people"></i> <span>View</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="password.php">
                        <i class="bi bi-cash-coin"></i> <span>Change Password</span>
                    </a>
                </li>



                <li class="nav-item ">
                    <a class="nav-link" href="logout.php">
                        <i class="bi bi-box-arrow-left"></i> <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>