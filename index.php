<?php
$title = "Problems";
include("components/header.php");
?>
<main>
    <div class="container">
        <div class="card">
            <div class="card-header flex ">
                <h2><?php echo $title ?></h2>
                <div>
                    <a href="report-problem.php" class="btn">Report Problem</a>
                </div>
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
                            <input id="search" type="text" placeholder="Search problems by description, problem type or assigned specialist" onkeyup="searchList()">
                        </div>
                        <button onclick="searchList()">Search</button>
                    </div>
                </div>
                <div id="filter-count"></div>
                <div class="table-wrapper">
                    <table id="filter-container">
                        <thead>
                            <tr>
                                <th>Problem</th>
                                <th>Type</th>
                                <th>Specialist</th>
                                <th>Last Update</th>
                                <th>Status</th>
                                <th>Priority</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $statuses = array(
                                "Solved",
                                "Solution Suggested",
                                "Unsolved"
                            );
                            foreach ($problems as $problem) {
                                echo '<tr class="filter-item">
                                    <td>
                                    <a href="problem.php?problemNumber=' . $problem["problemNumber"] . '" class="text-primary-600">
                                    ' . $problem["description"] . '
                                    <span>Problem ' . $problem["problemNumber"] . '</span>
                                    </a>
                                    </td>
                                    <td>' . $problem["type"] . '</td>
                                    <td> ' . ($problem["specialist"] ? $problem["specialist"] : "-") . '</td>
                                    <td>' . $problem["date"] . '</td>
                                    <td>' . $statuses[$problem["status"]] . '</td>
                                    <td><div class="pill">' . (strtoLower($problem["problem-priority"]) === "high" ? '<span class="red">High</span>' : '<span class="green">Low</span>') . '</div></td>
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