<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $privacy_policy = $_POST['privacy_policy'] ?? '';
    $terms_conditions = $_POST['terms_conditions'] ?? '';

    // Here you'd save these to the database or a file.
    // Assuming you have a database or file structure to store these, use an update query here.
    echo "Legal documents have been updated.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legal & Compliance</title>
    <link rel="stylesheet" href="legal.css">
</head>
<body>

    <!-- Navbar start-->
    <header class="navbar">
        <div class="navbar-left">
            <img class="menu" src="../../assest/hamburger.png" alt="menu"/>
            <img class="logo" src="../../assest/ReMeD.png" alt="logo"/>
        </div>

        <div class="navbar-right">
            <img class="bell" src="../../assest/bell-icon.png" alt="notification"/>
            <img class="user" src="../../assest/Test Account.png" alt="user"/>
    </header>
    <!-- Navbar end-->

   <!-- Dropdown menu start-->
    <div id="dropdown-menu" class="dropdown-menu">

        <div class="tab">
            <img src="../../assest/home.png" alt=""/>
            <a href="http://localhost/php/view/dashboard/dashboard.php"> Home</a>
        </div>
        

        <div class="dropdown-item">
            <div class="tab">
                <img src="../../assest/drugs.png" alt="pharmacy"/>
                <a href="#" id="pharmacy-menu"> Pharmacy</a>
                <img class="arrow" src="../../assest/Arrow.png" alt=""/>
            </div>
            
            <!-- Submenu start-->
            <div id="pharmacy-submenu" class="submenu">
                <div class="tab">
                    <img src="../../assest/Vector.png" alt="add"/>
                    <a href="../../new-pharmacy/new-pharmacy.php"> Add Pharmacy</a>  
                </div>
                
            </div>
            <!-- Submenu start-->

        </div>


        <div class="tab">
            <img src="../../assest/user.png" alt="user"/>
            <a href="../../users/users.php">User</a>
        </div>
        

        <div class="dropdown-item">
            <div class="tab">
                <img src="../../assest/setting.png" alt="setting"/>
                <a href="#" id="settings-menu">  Settings </a>
                <img class="arrow" src="../../assest/Arrow.png" alt=""/>
            </div>
            <!-- Submenu start-->
            <div id="settings-submenu" class="submenu">
                <div class="tab">
                    <img src="../../assest/settings.png" alt=""/> 
                    <a href="../genaral/genaral.php">General Settings</a>
                </div>
                <div class="tab">
                    <img src="../../assest/User Management.png" alt=""/>
                    <a href="../account-manage/acount.php"> User Management</a>
                </div>
                <div class="tab">
                    <img src="../../assest/policy.png" alt=""/>
                    <a href="../legal/legal.php"> Legal & Compliance</a>
                </div>
            </div>
            <!-- Submenu end-->
        </div>

        <div class="bottom">
            <img src="../../assest/ReMeD.png" alt="">
            <a href="#">ONLINE PHARMACY LOCATOR AND MEDICINE  TRACKER</a>
        </div>
    </div>
    <!-- Dropdown menu end-->

     <div id="profile" class="profile">
        <div class="profile-item">
            <img src="../../assest/admin.png" alt=""/>
            <div class="details">
                <h3>ADMINISTRATOR</h3>
                <p>admin.remad@gmail.com</p>
            </div>
            <div class="tab">
                <img src="../../assest/setting.png" alt=""/>
                <a href="../genaral/genaral.php">Setting</a>
            </div>
            <div class="tab">
                <img src="../../assest/logout.png" alt=""/>
                <a href="../../signin/login.php">Logout</a>
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



<div class="container">
    <h2>Legal & Compliance</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="privacy_policy">Privacy Policy</label>
            <textarea id="privacy_policy" name="privacy_policy" rows="4" placeholder="Edit and update website's privacy policy" required></textarea>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn save">Save changes</button>
        </div>

        <div class="form-group">
            <label for="terms_conditions">Terms and Conditions</label>
            <textarea id="terms_conditions" name="terms_conditions" rows="4" placeholder="Manage the terms and conditions" required></textarea>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn save">Save changes</button>
        </div>
    </form>
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
