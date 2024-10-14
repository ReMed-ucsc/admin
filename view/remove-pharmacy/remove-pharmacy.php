<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pharmacyName = $_POST['pharmacyName'] ?? '';
    $pharmacistName = $_POST['pharmacistName'] ?? '';
    $licenseNumber = $_POST['licenseNumber'] ?? '';
    $reason = $_POST['reason'] ?? '';

    // Delete logic: Here, you'd implement the logic to delete the pharmacy from the system
    echo "Pharmacy {$pharmacyName} removed for the reason: {$reason}";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Pharmacy</title>
    <link rel="stylesheet" href="remove-pharmacy.css">
</head>
<body>


    <!-- Navbar start-->
    <header class="navbar">
        <div class="navbar-left">
            <img class="menu" src="../assest/hamburger.png" alt="menu"/>
            <img class="logo" src="../assest/ReMeD.png" alt="logo"/>
        </div>

        <div class="navbar-right">
            <img class="bell" src="../assest/bell-icon.png" alt="notification"/>
            <img class="user" src="../assest/Test Account.png" alt="user"/>
    </header>
    <!-- Navbar end-->

   <!-- Dropdown menu start-->
    <div id="dropdown-menu" class="dropdown-menu">

        <div class="tab">
            <img src="../assest/home.png" alt=""/>
            <a href="http://localhost/php/view/dashboard/dashboard.php"> Home</a>
        </div>
        

        <div class="dropdown-item">
            <div class="tab">
                <img src="../assest/drugs.png" alt="pharmacy"/>
                <a href="#" id="pharmacy-menu"> Pharmacy</a>
                <img class="arrow" src="../assest/Arrow.png" alt=""/>
            </div>
            
            <!-- Submenu start-->
            <div id="pharmacy-submenu" class="submenu">
                <div class="tab">
                    <img src="../assest/Vector.png" alt="add"/>
                    <a href="#"> Add Pharmacy</a>  
                </div>
                
            </div>
            <!-- Submenu start-->

        </div>


        <div class="tab">
            <img src="../assest/user.png" alt="user"/>
            <a href="#">User</a>
        </div>
        

        <div class="dropdown-item">
            <div class="tab">
                <img src="../assest/setting.png" alt="setting"/>
                <a href="#" id="settings-menu">  Settings </a>
                <img class="arrow" src="../assest/Arrow.png" alt=""/>
            </div>
            <!-- Submenu start-->
            <div id="settings-submenu" class="submenu">
                <div class="tab">
                    <img src="../assest/settings.png" alt=""/> 
                    <a href="#">General Settings</a>
                </div>
                <div class="tab">
                    <img src="../assest/User Management.png" alt=""/>
                    <a href="#"> User Management</a>
                </div>
                <div class="tab">
                    <img src="../assest/policy.png" alt=""/>
                    <a href="#"> Legal & Compliance</a>
                </div>
            </div>
            <!-- Submenu end-->
        </div>

        <div class="bottom">
            <img src="../assest/ReMeD.png" alt="">
            <a href="#">ONLINE PHARMACY LOCATOR AND MEDICINE  TRACKER</a>
        </div>
    </div>
    <!-- Dropdown menu end-->

     <div id="profile" class="profile">
        <div class="profile-item">
            <img src="../assest/admin.png" alt=""/>
            <div class="details">
                <h3>ADMINISTRATOR</h3>
                <p>admin.remad@gmail.com</p>
            </div>
            <div class="tab">
                <img src="../assest/setting.png" alt=""/>
                <a href="#">Setting</a>
            </div>
            <div class="tab">
                <img src="../assest/logout.png" alt=""/>
                <a href="../signin/login.php">Logout</a>
            </div>
        </div>
    </div>
    <!-- profile end -->

    <!-- notification start -->
    <div id="notification" class="notification">
        <div class="notifi-head">
            <h3>Notification</h3>
        </div>
        <div class="notifi-item">
            <p>Empty</p>
        </div>
    </div>
    <!-- notification end -->


    <h2>Remove Pharmacy on system</h2>

<div class="container">
    <form class="form" action="" method="POST">
        <div class="left section">
            <div class="form-group">
                <label for="pharmacyName">Pharmacy Name:</label>
                <input type="text" id="pharmacyName" name="pharmacyName" value="Medico" readonly>
            </div>

            <div class="form-group">
                <label for="pharmacistName">Pharmacist's Name:</label>
                <input type="text" id="pharmacistName" name="pharmacistName" value="Mr. Saman" readonly>
            </div>

            <div class="form-group">
                <label for="licenseNumber">License Number:</label>
                <input type="text" id="licenseNumber" name="licenseNumber" value="SL-12345-COLO" readonly>
            </div>
        </div>
        

        <div class="form-group section">
            <label for="reason">Reason for delete pharmacy in system:</label>
            <select id="reason" name="reason" required>
                <option value="">Choose the reason</option>
                <option value="Bad feedback from 10 users">Bad feedback from 10 users</option>
                <option value="Pharmacist’s request">Pharmacist’s request</option>
                <option value="Already pharmacy deleted their account">Already pharmacy deleted their account</option>
            </select>
        </div>


    </form>
    <div class="form-actions">
        <button type="submit" class="btn delete">Delete</button>
        <button type="button" class="btn cancel" onclick="window.history.back()">Cancel Delete</button>
    </div>
</div>

    <script>
                // JavaScript to toggle the dropdown menu visibility
        document.querySelector('.menu').addEventListener('mouseover', function() {
            var dropdown = document.getElementById('dropdown-menu');
            if (dropdown.style.display === 'none' || dropdown.style.display === '') {
                dropdown.style.display = 'block';
            } else {
                dropdown.style.display = 'none';
            }
        });

        document.getElementById('pharmacy-menu').addEventListener('mouseover', function(e) {
            e.preventDefault(); // Prevent default anchor click behavior
            var submenu = document.getElementById('pharmacy-submenu');
            if (submenu.style.display === 'none' || submenu.style.display === '') {
                submenu.style.display = 'block';
            } else {
                submenu.style.display = 'none';
            }
        });

        document.getElementById('settings-menu').addEventListener('mouseover', function(e) {
            e.preventDefault(); // Prevent default anchor click behavior
            var submenu = document.getElementById('settings-submenu');
            if (submenu.style.display === 'none' || submenu.style.display === '') {
                submenu.style.display = 'block';
            } else {
                submenu.style.display = 'none';
            }
        });

        /*  show profile */
        document.querySelector('.user').addEventListener('mouseover', function() {
            var dropdown = document.getElementById('profile');
            if (dropdown.style.display === 'none' || dropdown.style.display === '') {
                dropdown.style.display = 'block';
            } else {
                dropdown.style.display = 'none';
            }
        });

        /* show notification */
        document.querySelector('.bell').addEventListener('mouseover', function() {
            var dropdown = document.getElementById('notification');
            if (dropdown.style.display === 'none' || dropdown.style.display === '') {
                dropdown.style.display = 'block';
            } else {
                dropdown.style.display = 'none';
            }
        });
    </script>

</body>
</html>
