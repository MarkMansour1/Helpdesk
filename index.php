<?php
$title = "Problems";
include("components/header.php");
?>
<main>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2><?php echo $title ?></h2>
                <div>
                    <a href="newproblem.php" class="btn">New Problem</a>
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
                            <input id="search" placeholder="Search for problems in the log">
                        </div>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                            <span>Search</span>
                        </button>
                    </div>
                </div>
                <div class="stacked-list">
                    <ul>
                        <?php
                        foreach ($problems as $problem) {
                            echo '
                            <li>
                                <a href="problem.php?id=' . $problem["id"] . '">
                                    <div class="flex justify-between align-center">
                                        <div class="item-title">
                                        ' . $problem["description"] . '
                                            <span>
                                                in ' . $problem["category"] . '
                                            </span>
                                        </div>
                                        <div class="item-tag">
                                            ' . ($problem["open"] ? '<span class="open">Case Open</span>' : '<span class="closed">Case Closed</span>') . '
                                        </div>
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="item-info">
                                            ' . ($problem["specialist"] ? "Assigned to " . $problem["specialist"] : "Unassigned") . '
                                        </div>
                                        <div class="item-info">
                                            <span>
                                                Last update
                                                <time datetime="">
                                                        ' . $problem["date"] . '
                                                </time>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            ';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include("components/footer.php");
?>