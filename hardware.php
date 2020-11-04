<?php
$title = "Hardware";
include("components/header.php");
?>
<main>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2><?php echo $title ?></h2>
            </div>
            <div class="card-body">
                <div class="table-wrapper">
                    <table class="divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Manufacturer</th>
                                <th>Name</th>
                                <th>Type</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php
                            foreach ($hardware as $hw) {
                                echo '<tr>
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
</main>
<?php
include("components/footer.php");
?>