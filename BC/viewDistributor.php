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
                            <li><a class="dropdown-item" href="profile.php"><i class="fas fa-user me-2"></i> My Profile</a></li>
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

    <div class="container mt-5">
        <div style="display: flex; justify-content: end;">

            <a href="addDistributor.php" class="btn btn-sm btn-primary mb-3">+ Add</a>
        </div>
        <div class="card shadow rounded">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0">Distibutors Table</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Father/Husband Name</th>
                                <th>Email</th>
                                <th>Phone 1, 2, 3</th>
                                <th>Address</th>
                                <th>Blood Group</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Rajan Kushwaha</td>
                                <td>Father</td>
                                <td>rajan@example.com</td>
                                <td>9876543210</td>
                                <td>Hello</td>
                                <td>B+</td>

                                <td>

                                    <a href="updateClient.php" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="updateClient.php" class="btn btn-sm btn-danger">Delete</a>
                                    <a href="id.php" class="btn btn-sm btn-success">Download</a>


                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Priya Singh</td>
                                <td>xyz</td>
                                <td>priya@example.com</td>
                                <td>9123456789</td>
                                <td>Hii,</td>
                                <td>B+</td>

                                <td>

                                    <a href="updateClient.php" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="updateClient.php" class="btn btn-sm btn-danger">Delete</a>
                                    <a href="id.php" class="btn btn-sm btn-success">Download</a>

                                </td>
                            </tr>
                            <!-- More rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>


<?php
include('layout/footer.php')
?>