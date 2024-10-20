<?php
// Sample data (replace with your actual database or data source)
$pharmacies = [
    ["name" => "Medico", "pharmacist" => "Mr.Saman", "contact" => "+94 11 223 4455", "license" => "SL-12345-COLO", "email" => "info@medicopharmacy.lk", "address" => "45 Galle Road, Colombo 03, Colombo District", "status" => "pending", "onboard" => "Onboard"],
    ["name" => "HealthPlus", "pharmacist" => "Mr.Nuwan", "contact" => "+94 81 238 5523", "license" => "SL-67890-KAND", "email" => "contact@healthplus.lk", "address" => "12 Kandy Road, Peradeniya, Kandy District", "status" => "pending", "onboard" => "Onboard"],
    ["name" => "WellMed", "pharmacist" => "Mr.Srimal", "contact" => "+94 21 221 3344", "license" => "SL-44556-JAFF", "email" => "support@wellmed.lk", "address" => "25 Station Road, Jaffna, Jaffna District", "status" => "pending", "onboard" => "Onboard"],
    ["name" => "LifeCare", "pharmacist" => "Miss. Nilmini", "contact" => "+94 91 224 5566", "license" => "SL-78901-GALL", "email" => "citymed@galle.lk", "address" => "34 Matara Road, Galle, Galle District", "status" => "pending", "onboard" => "Onboard"],
    ["name" => "CityMed", "pharmacist" => "Miss. Mayuri", "contact" => "+94 52 222 1188", "license" => "SL-11223-NUWA", "email" => "lifecare@pharmacy.lk", "address" => "89 Main Street, Nuwara Eliya, Nuwara Eliya District", "status" => "pending", "onboard" => "Onboard"]
];

$search = $_GET['search'] ?? '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy List</title>
    <link rel="stylesheet" href="pending-pharmacy.css">
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
                    <a href="http://localhost/php/view/new-pharmacy/new-pharmacy.php"> Add Pharmacy</a>  
                </div>
                
            </div>
            <!-- Submenu start-->

        </div>


        <div class="tab">
            <img src="../assest/user.png" alt="user"/>
            <a href="http://localhost/php/view/users/users.php">User</a>
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
                    <a href="http://localhost/php/view/setting/genaral/genaral.php">General Settings</a>
                </div>
                <div class="tab">
                    <img src="../assest/User Management.png" alt=""/>
                    <a href="http://localhost/php/view/setting/account-manage/acount.php"> User Management</a>
                </div>
                <div class="tab">
                    <img src="../assest/policy.png" alt=""/>
                    <a href="http://localhost/php/view/setting/legal/legal.php"> Legal & Compliance</a>
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
                <a href="../genaral/genaral.php">Setting</a>
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


     <!-- Search Box Form -->
    <div class="search-container">
        <input type="text" id="searchInput" class="search-box" placeholder="Search here..." >
        <img src="../assest/search.png" alt="icon">
        <!-- <button class="search-button" onclick="performSearch()">Search</button> -->
    </div>


<!-- Table Structure -->
<table class="pharmacy-table">
    <thead>
        <tr>
            <th>Pharmacy Name</th>
            <th>Pharmacist Name</th>
            <th>Contact Number</th>
            <th>License</th>
            <th>Email</th>
            <th>Address</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pharmacies as $pharmacy): ?>
            <?php if (stripos($pharmacy['name'], $search) !== false): ?>
            <tr>
                <td><?= $pharmacy['name'] ?></td>
                <td><?= $pharmacy['pharmacist'] ?></td>
                <td><?= $pharmacy['contact'] ?></td>
                <td><?= $pharmacy['license'] ?></td>
                <td><?= $pharmacy['email'] ?></td>
                <td><?= $pharmacy['address'] ?></td>
                <td>
                    <span class="status <?= $pharmacy['status'] ?>"><?= ucfirst($pharmacy['status']) ?></span>
                    <span class="onboard"><?= $pharmacy['onboard'] ?></span>
                </td>
            </tr>
            <?php endif; ?>
        <?php endforeach; ?>
    </tbody>
</table>



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
            // Function to handle search logic
        function performSearch() {
            // Get the search input value
            var query = document.getElementById('searchInput').value;

            // Basic validation for empty input
            if (query.trim() === "") {
                alert("Please enter a search query.");
                return;
            }

            // Simulating search (you can replace this part with actual search logic)
            var results = "You searched for: " + query;
            
            // Display the search results
            document.getElementById('searchResults').innerText = results;

            
        }
        document.querySelector('.onboard').addEventListener('click',function() {
            window.location.href='../new-pharmacy/new-pharmacy.php'
        });
    </script>
</body>
</html>
