<?php
$title = "New Problem";
include("components/header.php");
?>
<main>
    <div class="container">
        <header class="card">
            <div class="card-header">
                <h2 class="text-gray-900">
                    <?php echo $title ?>
                </h2>
            </div>
            <div class="card-body">
                <a href="index.php" class="text-gray-500"><?php echo "<-" ?> Back to all problems</a>
            </div>
        </header>
        <div class="grid">
            <div class="col-3" style="max-width: 80%">
                <nav class="secondary-nav">
                    <a href="#"><?php echo $title ?></a>
                    <a href="#details">Problem Details</a>
                </nav>
            </div>
            <div class="col-9">
                <div class="card scroll-target" id="details">
                    <div class="card-header">
                        <h3>Problem Details</h3>
                    </div>
                    <div class="card-body">
                        <form action="#" class="form-cols">
                            <div class="form-group">
                                <label for="call">Date Time</label>
                                <input type="datetime-local" name="call">
                            </div>
                            <div class="form-group">
                                <label for="caller">Caller</label>
                                <select name="caller">
                                    <?php
                                    foreach ($personnel as $person) {
                                        echo '<option value=' . $person["id"] . '>' . $person["name"] . '</>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="software">Software</label>
                                <input type="text" name="software">
                            </div>
                            <div class="form-group">
                                <label for="hardware">Hardware</label>
                                <input type="text" name="hardware">
                            </div>
                            <div class="form-group">
                                <label for="description">Problem description</label>
                                <textarea name="description" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="notes">Notes</label>
                                <textarea name="notes" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-lg">
                                Add Problem
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
<?php
include("components/footer.php");
?>