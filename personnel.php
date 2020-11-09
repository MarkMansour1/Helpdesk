<?php
$title = "Personnel";
include("components/header.php");
?>
<main>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2><?php echo $title ?></h2>
            </div>
            <div class="card-body">
                <div class="input-group-wrapper">
                    <label for="search">Search</label>
                    <div class="input-group">
                        <div class="input-group-main">
                            <div class="input-group-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input id="search" placeholder="Search by name, department or role" onkeyup="searchList()">
                        </div>
                        <button onclick="searchList()">Search</button>
                    </div>
                </div>
                <div id="filter-count"></div>
                <div class="table-wrapper">
                    <table id="filter-container">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Job Title</th>
                                <th>Branch Location</th>
                                <th>Role</th>
                                <th>Availability</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $statuses = array(
                                '<span class="green">Active</span>',
                                '<span class="orange">Inactive</span>',
                                '<span class="red">Unavailable</span>'
                            );
                            foreach ($personnel as $person) {
                                echo '<tr class="filter-item">
                                    <td class="text-gray-900">
                                        <div class="flex align-center">                   
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 184.9 184.9" width="2rem" height="2rem">
                                                <style type="text/css">  
                                                    .st0{fill:#d2d6dc;}
                                                    .st1{fill:#f4f5f7;}
                                                    .st2{fill:#d2d6dc;}
                                                </style>
                                                <circle class="st0" cx="92.5" cy="92.5" r="92.5"/><path class="st1" d="M92.5 109.4c31.2 0 59.1 12.9 77.7 33.3 9.4-14.4 14.8-31.7 14.8-50.2C184.9 41.4 143.5 0 92.5 0 41.4 0 0 41.4 0 92.5c0 18.5 5.4 35.7 14.8 50.2C33.4 122.3 61.3 109.4 92.5 109.4z"/><circle class="st2" cx="92.5" cy="63.5" r="31.8"/>
                                            </svg>
                                            <div class="name" style="margin-left: 1.5rem">
                                            ' . (strToLower($_SESSION["username"]) === "admin" ? '<a href="employee.php?id=' . $person["id"] . '" class="text-primary-600">' . $person["name"] . '</a>' : ' . $person["name"] . ') . '
                                            <span>ID: ' . $person["id"] . '</span></div>
                                        </div>
                                    </td>
                                    <td>' . $person["phone"] . '</td>
                                    <td>' . $person["email"] . '</td>
                                    <td>' . $person["job title"] . '<span>in ' . $person["department"] . '</span></td>
                                    <td>' . $person["branch country"] . '<span>' . $person["branch postcode"] . '</span></td>
                                    <td>' . $person["role"] . '</td>
                                    <td>
                                        <div class="pill">' . (isset($person["available"]) ? $statuses[$person["available"]] : '-') . '</div>
                                    </td>
                                </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include("components/footer.php");
?>