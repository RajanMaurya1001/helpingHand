<?php
include('layout/header.php');
?>

<!-- Main Content -->
<div id="content">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="d-flex align-items-center">
                        <button class="btn btn-outline-secondary me-3 d-md-none" id="sidebarToggle">
                            <i class="bi bi-list"></i>
                        </button>


                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <div class="d-flex align-items-center">
                        <!-- <div class="position-relative me-4">
                                <i class="bi bi-bell fs-5"></i>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    5
                                </span>
                            </div> -->
                        <div class="d-flex align-items-center user-info">
                            <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Admin">
                            <div>
                                <div class="fw-bold">Sarah Johnson</div>
                                <div class="text-muted small">Admin</div>
                            </div>
                        </div>
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
                <div class="card dashboard-card card-1">
                    <div class="card-body">
                        <i class="bi bi-cash-coin card-icon"></i>
                        <h5 class="card-title">Total </h5>
                        <h2 class="card-text">$42,580</h2>
                        <p class="small">+12% from last month</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card dashboard-card card-2">
                    <div class="card-body">
                        <i class="bi bi-people card-icon"></i>
                        <h5 class="card-title">Beneficiaries</h5>
                        <h2 class="card-text">2,458</h2>
                        <p class="small">+8% from last month</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card dashboard-card card-3">
                    <div class="card-body">
                        <i class="bi bi-person-badge card-icon"></i>
                        <h5 class="card-title">Volunteers</h5>
                        <h2 class="card-text">184</h2>
                        <p class="small">+15 new this month</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card dashboard-card card-4">
                    <div class="card-body">
                        <i class="bi bi-calendar-check card-icon"></i>
                        <h5 class="card-title">Upcoming Events</h5>
                        <h2 class="card-text">7</h2>
                        <p class="small">2 happening this week</p>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>


<?php
include('layout/footer.php');
?>