<?php
include('layout/header.php');
?>
<style>
    /* Password Form Styling */
    form {
        margin-top: 20px;
    }

    .card {
        border: none;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    }

    .card-header h5 {
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    .btn-primary {
        background-color: #3498db;
        border: none;
        font-weight: 600;
        letter-spacing: 0.5px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #2980b9;
    }

    /* Profile Dropdown Enhancements */
    .dropdown-menu {
        min-width: 200px;
        border-radius: 8px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .dropdown-item {
        padding: 10px 20px;
        font-size: 0.95rem;
    }

    .dropdown-item:hover {
        background-color: #f0f0f0;
        color: #333;
    }

    .text-danger {
        color: #e74c3c !important;
    }

    /* Optional: Avatar hover effect */
    #userDropdown:hover img {
        box-shadow: 0 0 10px rgba(52, 152, 219, 0.4);
        transition: box-shadow 0.3s ease;
    }
</style>

<!-- Main Content -->
<div id="content">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="d-flex align-items-center">
                        <button class="btn btn-outline-secondary me-3 d-md-none" id="sidebarToggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar">
                            <i class="bi bi-list"></i>
                        </button>
                    </div>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <div class="dropdown">
                        <a class="d-flex align-items-center text-decoration-none" href="#" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Admin" width="40" height="40" class="rounded-circle me-2">
                            <div class="d-none d-sm-block">
                                <div class="fw-bold">Sarah Johnson</div>
                                <div class="text-muted small">Super Admin</div>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i> My Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i> Settings</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-sign-out-alt me-2"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Dashboard Content -->
    <div class="container-fluid">
        <!-- Page Title -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0">Dashboard</h2>
            <!-- <div>
                    <button class="btn btn-primary">
                        <i class="bi bi-plus-circle"></i> New Campaign
                    </button>
                </div> -->
        </div>

        <!-- Stats Cards -->
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="card dashboard-card card-2">
                    <div class="card-body">
                        <i class="bi bi-people card-icon"></i>
                        <h5 class="card-title">Client</h5>
                        <h2 class="card-text">2,458</h2>
                        <p class="small">+8% from last month</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<?php
include('layout/footer.php');
?>