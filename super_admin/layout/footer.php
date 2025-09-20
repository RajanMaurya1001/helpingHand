<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Toggle sidebar on mobile
    // document.getElementById('sidebarToggle').addEventListener('click', function() {
    //     const sidebar = document.getElementById('sidebar');
    //     const content = document.getElementById('content');

    //     if (sidebar.style.width === '0px' || sidebar.style.width === '') {
    //         sidebar.style.width = '250px';
    //         content.style.marginLeft = '250px';
    //     } else {
    //         sidebar.style.width = '0';
    //         content.style.marginLeft = '0';
    //     }
    // });

    document.addEventListener("DOMContentLoaded", function() {
        const toggleBtn = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('sidebar');
        const content = document.getElementById('content');

        toggleBtn.addEventListener('click', function() {
            sidebar.classList.toggle('collapsed');
            content.classList.toggle('expanded');
        });
    });


    // Initialize charts
    document.addEventListener('DOMContentLoaded', function() {
        // Donation Trends Chart
        const donationCtx = document.getElementById('donationChart').getContext('2d');
        const donationChart = new Chart(donationCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Monthly Donations ($)',
                    data: [8500, 9200, 7800, 11200, 13500, 15800],
                    backgroundColor: 'rgba(52, 152, 219, 0.1)',
                    borderColor: '#3498db',
                    borderWidth: 3,
                    tension: 0.3,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(0,0,0,0.05)'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });

        // Program Distribution Chart
        const programCtx = document.getElementById('programChart').getContext('2d');
        const programChart = new Chart(programCtx, {
            type: 'doughnut',
            data: {
                labels: ['Education', 'Healthcare', 'Food Aid', 'Water Projects', 'Disaster Relief'],
                datasets: [{
                    data: [25, 20, 30, 15, 10],
                    backgroundColor: [
                        '#3498db',
                        '#2ecc71',
                        '#e74c3c',
                        '#9b59b6',
                        '#f39c12'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                cutout: '70%',
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });
    });
</script>
</body>

</html>