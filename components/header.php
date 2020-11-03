<?php
// Replace with db query
include("data.php");

session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    // Delete these 2 lines and uncomment the next 2
    $_SESSION["loggedin"] = true;
    $_SESSION["username"] = "admin";

    // header("location: login.php");
    // exit;
}

$pages = [
    array(
        "name" => "Problems",
        "link" => "index.php",
        "users" => ["admin", "analyst", "operator", "specialist"]
    ),
    array(
        "name" => "Specialists",
        "link" => "specialists.php",
        "users" => ["admin", "analyst", "operator"]
    ),
    array(
        "name" => "Analytics",
        "link" => "analytics.php",
        "users" => ["admin", "analyst"]
    ),
    array(
        "name" => "Settings",
        "link" => "settings.php",
        "users" => ["admin"]
    )
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title ? $title : "Make-It-All Helpdesk" ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="primary-nav">
        <div class="container">
            <div class="navbar">
                <div>
                    <a href="index.php" class="logo">
                        Make-It-All
                        <span>Helpdesk</span>
                    </a>
                </div>
                <div>
                    <span class="text-gray-300" style="font-size: .875rem">Signed in as <?php echo $_SESSION["username"]; ?></span>
                    <a href="php/logout.php" class="nav-link">Sign Out</a>
                </div>
            </div>
            <nav>
                <?php
                foreach ($pages as $page) {
                    if (in_array(strtolower($_SESSION["username"]), $page["users"])) {
                        if ($page["name"] == $title)
                            echo '<a href="' . $page["link"] . '" class="nav-link active">' . $page["name"] . '</a>';
                        else
                            echo '<a href="' . $page["link"] . '" class="nav-link">' . $page["name"] . '</a>';
                    }
                }
                ?>
            </nav>
        </div>
    </div>