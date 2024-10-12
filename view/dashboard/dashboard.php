<?php
// Start the session
session_start();

// Check if the user is logged in, if not redirect to login page
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit;
}

// Dummy data for the dashboard
$registeredPharmacies = 123;
$onlineUsers = 45;
$requestedPharmacies = 10;

$recentActivities = [
    ["time" => "05:38am", "activity" => "Update pharmacy details - Amarasinghe pharmacy"],
    ["time" => "06:03am", "activity" => "Verify pharmacy - Nilmini Pharmacy"],
    ["time" => "06:10am", "activity" => "Verify pharmacy - Sujatha Pharmacy"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - ReMed</title>
    <link rel="stylesheet" href="dashboard.css">
</head>

<body>
    <header class="navbar">
        <div class="navbar-left">
            <img class="menu" src="../assest/hamburger.png" alt="menu">
            <img class="logo" src="../assest/ReMeD.png" alt="logo">
        </div>

        <div class="navbar-right">
            <img class="bell" src="../assest/bell-icon.png" alt="notification">
            <img class="user" src="../assest/Test Account.png" alt="user">
    </header>

    <!-- Dropdown menu that appears after clicking hamburger -->
    <div id="dropdown-menu" class="dropdown-menu">
        <div class="tab">
            <img src="../assest/home.png" alt="">
            <a href="#"> Home</a>
        </div>
        

        <div class="dropdown-item">
            <div class="tab">
                <img src="../assest/drugs.png" alt="pharmacy">
                <a href="#" id="pharmacy-menu"> Pharmacy</a>
                <img class="arrow" src="../assest/Arrow.png" alt="">
            </div>
            
            <!-- Submenu -->
            <div id="pharmacy-submenu" class="submenu">
                <div class="tab">
                    <img src="../assest/Vector.png" alt="add">
                    <a href="#"> Add Pharmacy</a>  
                </div>
                
            </div>
        </div>
        <div class="tab">
            <img src="../assest/user.png" alt="user">
            <a href="#">User</a>
        </div>
        

        <div class="dropdown-item">
            <div class="tab">
                <img src="../assest/setting.png" alt="setting">
                <a href="#" id="settings-menu">  Settings </a>
                <img class="arrow" src="../assest/Arrow.png" alt="">
            </div>
            <!-- Submenu -->
            <div id="settings-submenu" class="submenu">
                <div class="tab">
                    <img src="../assest/settings.png" alt=""> 
                    <a href="#">General Settings</a>
                </div>
                <div class="tab">
                    <img src="../assest/User Management.png" alt="">
                    <a href="#"> User Management</a>
                </div>
                <div class="tab">
                    <img src="../assest/policy.png" alt="">
                    <a href="#"> Legal & Compliance</a>
                </div>
            </div>
        </div>

    </div>

    <div class="dashboard">
        <div class="card green">
            <img src="../assest/statistics.png" alt="">
            <p>Registered Pharmacy</p>
            <h2><?= $registeredPharmacies ?></h2>
        </div>
        <div class="card blue">
            <img src="../assest/computer.png" alt="">
            <p>Online Users</p>
            <h2><?= $onlineUsers ?></h2>
        </div>
        <div class="card red">
            <img src="../assest/time-left.png" alt="">
            <p>Requested Pharmacy</p>
            <h2><?= $requestedPharmacies ?></h2>
        </div>
    </div>

    <div class="recent-activity">
        <h3>Recent Activity</h3>
        <?php foreach ($recentActivities as $activity): ?>
            <div class="activity-item">
                <span class="time"><?= $activity['time'] ?></span>
                <span class="details"><?= $activity['activity'] ?></span>
            </div>
        <?php endforeach; ?>
    </div>
    <script>
        // JavaScript to toggle the dropdown menu visibility
        document.querySelector('.menu').addEventListener('click', function() {
            var dropdown = document.getElementById('dropdown-menu');
            if (dropdown.style.display === 'none' || dropdown.style.display === '') {
                dropdown.style.display = 'block';
            } else {
                dropdown.style.display = 'none';
            }
        });

        document.getElementById('pharmacy-menu').addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default anchor click behavior
            var submenu = document.getElementById('pharmacy-submenu');
            if (submenu.style.display === 'none' || submenu.style.display === '') {
                submenu.style.display = 'block';
            } else {
                submenu.style.display = 'none';
            }
        });
        document.getElementById('settings-menu').addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default anchor click behavior
            var submenu = document.getElementById('settings-submenu');
            if (submenu.style.display === 'none' || submenu.style.display === '') {
                submenu.style.display = 'block';
            } else {
                submenu.style.display = 'none';
            }
        });
    </script>
</body>

</html>