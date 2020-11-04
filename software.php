<?php
$title = "Software";
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
                                <th>Author</th>
                                <th>Name</th>
                                <th>Version</th>
                                <th>Type</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php
                            foreach ($software as $sw) {
                                echo '<tr>
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
            </div>
        </div>
    </div>
</main>
<?php
include("components/footer.php");
?>