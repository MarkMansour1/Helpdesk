<?php
$title = "Specialists";
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
                                <th>Department</th>
                                <th>Availability</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($personnel as $specialist) {
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
                                            <div class="name" style="margin-left: 1.5rem">' . $specialist["name"] . '<span>' . $specialist["email"] . '</span></div>
                                        </div>
                                    </td>
                                    <td>' . $specialist["phone"] . '</td>
                                    <td>' . $specialist["type"] . '</td>
                                    <td>
                                        <div class="pill">' . ($specialist["available"] ? '<span class="green">Available</span>' : '<span class="red">Unavailable</span>') . '</div>
                                    </td>
                                    <td>' . $specialist["role"] . '</td>
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