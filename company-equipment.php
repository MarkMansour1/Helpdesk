<?php
$title = "Company Equipment";
include("components/header.php");
?>
<main>
    <div class="container">
        <div class="card">
            <div class="card-header" style="padding-bottom: 0">
                <h2><?php echo $title ?></h2>
                <nav class="tabs">
                    <a class="tablink active" onclick="changeTab(event, 'software')">
                        Software
                    </a>
                    <a class="tablink" onclick="changeTab(event, 'hardware')">
                        Hardware
                    </a>
                </nav>
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
                            <input id="search" type="text" placeholder="Search company equipment" onkeyup="searchList()">
                        </div>
                        <button onclick="searchList()">Search</button>
                    </div>
                </div>
                <div id="filter-count"></div>
                <div class="table-wrapper" id="filter-container">
                    <div class="tab" id="software">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Author</th>
                                    <th>Name</th>
                                    <th>Version</th>
                                    <th>Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($software as $sw) {
                                    echo '<tr class="filter-item">
                                    <td class="text-primary-600">' . $sw["id"] . '</td>
                                    <td>' . $sw["author"] . '</td>
                                    <td>' . $sw["name"] . '</td>
                                    <td>' . $sw["version"] . '</td>
                                    <td>' . $sw["type"] . '</td>
                                </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab" id="hardware" style="display: none">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Manufacturer</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($hardware as $hw) {
                                    echo '<tr class="filter-item">
                                    <td class="text-primary-600">' . $hw["id"] . '</td>
                                    <td>' . $hw["manufacturer"] . '</td>
                                    <td>' . $hw["name"] . '</td>
                                    <td>' . $hw["type"] . '</td>
                                </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include("components/footer.php");
?>