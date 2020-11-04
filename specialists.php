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
                <div class="table-wrapper">
                    <table class="divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Type</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php

                            foreach ($specialists as $specialist) {
                                echo '<tr>
                                   <td class="text-primary-600">' . $specialist["id"] . '</td>
                                    <td>' . $specialist["name"] . '</td>
                                    <td>' . $specialist["email"] . '</td>
                                    <td>' . $specialist["type"] . '</td>
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