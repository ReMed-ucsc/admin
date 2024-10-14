<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $pharmacyName = $_POST['pharmacyName'] ?? '';
    $contactNumber = $_POST['contactNumber'] ?? '';
    $pharmacistName = $_POST['pharmacistName'] ?? '';
    $licenseNumber = $_POST['licenseNumber'] ?? '';
    $pharmacyAddress = $_POST['pharmacyAddress'] ?? '';
    $document = $_FILES['document'] ?? null;

    // File upload logic (if file is uploaded)
    if ($document && $document['error'] === 0) {
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($document['name']);
        move_uploaded_file($document['tmp_name'], $uploadFile);
        echo "File uploaded successfully!";
    }

    // Save data to database or any other logic you want to implement here
    echo "Pharmacy details update successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onboard New Pharmacy</title>
    <link rel="stylesheet" href="edit-pharmacy.css">
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

    
<h2 class="title">Edit Pharmacy Details</h2>
<div class="container">
    
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="left section">
            <div class="form-group">
                <label for="pharmacyName">Pharmacy Name:</label>
                <input type="text" id="pharmacyName" name="pharmacyName" placeholder="Enter pharmacy name" required>
            </div>

            <div class="form-group">
                <label for="pharmacistName">Pharmacist's Name:</label>
                <input type="text" id="pharmacistName" name="pharmacistName" placeholder="Enter pharmacist's name" required>
            </div>

            <div class="form-group">
                <label for="licenseNumber">License Number:</label>
                <input type="text" id="licenseNumber" name="licenseNumber" placeholder="Enter license" required>
            </div>
        </div>

        <div class="middle section">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter email" required>
            </div>

            <div class="form-group">
                <label for="contactNumber">Contact Number:</label>
                <input type="text" id="contactNumber" name="contactNumber" placeholder="Enter contact number" required>
            </div>

            <div class="form-group">
                <label for="pharmacyAddress">Pharmacy Address:</label>
                <input type="text" id="pharmacyAddress" name="pharmacyAddress" placeholder="Enter address" required>
            </div>
        </div>
        
         <div class="right section">
            <div class="form-group">
                <label for="document">Document:</label>
                <input type="file" id="document" name="document">
            </div>
        </div>

    </form>
    <div class="form-actions">
        <button type="submit" class="btn save">Save Changes</button>
        <button type="button" class="btn cancel" onclick="window.history.back()">Discard Changes</button>
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
