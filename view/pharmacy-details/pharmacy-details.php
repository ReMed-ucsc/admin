<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy List</title>
    <link rel="stylesheet" href="pharmacy-details.css">
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

<!-- Search Box Form -->
    <div class="search-container">
        <input type="text" id="searchInput" class="search-box" placeholder="Search here..." >
        <img src="../assest/search.png" alt="icon">
        <!-- <button class="search-button" onclick="performSearch()">Search</button> -->
    </div>


    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Pharmacy ID</th>
                    <th>Pharmacy Name</th>
                    <th>Pharmacist Name</th>
                    <th>Contact Number</th>
                    <th>License</th>
                    <th>Approved Date</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Sample data array for demonstration (replace with database fetching logic)
                $pharmacies = [
                    ['id' => '01', 'name' => 'Medico', 'pharmacist' => 'Mr. Saman', 'contact' => '+94 11 223 4455', 'license' => 'SL-12345-COLO', 'date' => '2024 August 03', 'email' => 'info@medicopharmacy.lk', 'address' => '45 Galle Road, Colombo 03, Colombo District', 'status' => 'Approved'],
                    ['id' => '02', 'name' => 'HealthPlus', 'pharmacist' => 'Mr. Nuwan', 'contact' => '+94 81 238 5523', 'license' => 'SL-67890-KAND', 'date' => '2024 August 03', 'email' => 'contact@healthplus.lk', 'address' => '12 Kandy Road, Peradeniya, Kandy District', 'status' => 'Approved'],
                    ['id' => '03', 'name' => 'HealthPlus', 'pharmacist' => 'Mr. Nuwan', 'contact' => '+94 81 238 5523', 'license' => 'SL-67890-KAND', 'date' => '2024 August 03', 'email' => 'contact@healthplus.lk', 'address' => '12 Kandy Road, Peradeniya, Kandy District', 'status' => 'Approved'],
                    ['id' => '04', 'name' => 'HealthPlus', 'pharmacist' => 'Mr. Nuwan', 'contact' => '+94 81 238 5523', 'license' => 'SL-67890-KAND', 'date' => '2024 August 03', 'email' => 'contact@healthplus.lk', 'address' => '12 Kandy Road, Peradeniya, Kandy District', 'status' => 'Approved'],
                    ['id' => '05', 'name' => 'HealthPlus', 'pharmacist' => 'Mr. Nuwan', 'contact' => '+94 81 238 5523', 'license' => 'SL-67890-KAND', 'date' => '2024 August 03', 'email' => 'contact@healthplus.lk', 'address' => '12 Kandy Road, Peradeniya, Kandy District', 'status' => 'Approved'],

                    // Add more data here...
                ];

                foreach ($pharmacies as $pharmacy) {
                    echo "<tr>";
                    echo "<td>{$pharmacy['id']}</td>";
                    echo "<td>{$pharmacy['name']}</td>";
                    echo "<td>{$pharmacy['pharmacist']}</td>";
                    echo "<td>{$pharmacy['contact']}</td>";
                    echo "<td>{$pharmacy['license']}</td>";
                    echo "<td>{$pharmacy['date']}</td>";
                    echo "<td>{$pharmacy['email']}</td>";
                    echo "<td>{$pharmacy['address']}</td>";
                    echo "<td><span class='status {$pharmacy['status']}'>{$pharmacy['status']}</span></td>";
                    echo "<td><a href='#?id={$pharmacy['id']}'><img class=\"action\" src='../assest/pencil.png'/></a>  <a href='#?id={$pharmacy['id']}'><img class=\"action\" src='../assest/bin.png'/></a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
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
    </script>

</body>
</html>
