<?php
$title = "New Software";
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
                <a href="company-equipment.php" class="text-gray-500"><?php echo "<-" ?> Back to all software</a>
            </div>
        </header>
        <div class="grid cols-4">
            <div style="max-width: 80%">
                <nav class="secondary-nav">
                    <a href="#"><?php echo $title ?></a>
                    <a href="#details">New Software Details</a>
                </nav>
            </div>
            <div class="col-3">
                <div class="card scroll-target" id="details">
                    <div class="card-header">
                        <h3>New Software Details</h3>
                    </div>
                    <div class="card-body">
                        <form action="#" class="form-cols">
                            <div class="form-group">
                                <label for="id">Serial Number</label>
                                <input type="text" name="id">
                            </div>
                            <div class="form-group">
                                <label for="type">Type</label>
                                <input type="text" name="type">
                            </div>
                            <div class="form-group">
                                <label for="make">Make</label>
                                <input type="text" name="make">
                            </div>
                            <div class="form-group">
                                <label for="model">Model</label>
                                <input type="text" name="model">
                            </div>
                            <div class="form-group">
                                <label for="version">Version</label>
                                <input type="text" name="version">
                            </div>
                            <div class="form-group">
                                <label for="licensestart">License start date</label>
                                <input type="text" name="licensestart">
                            </div>
                            <div class="form-group">
                                <label for="licenseend">License end date</label>
                                <input type="text" name="licenseend">
                            </div>
                            <div class="form-group">
                                <label for="role">Development Location</label>
                                <select id="role" name="role">
                                    <option value="in-house">In House</option>
                                    <option value="out-of-house">Out of House</option>
                                </select>
                            </div>
                            <button type="submit" class="btn">
                                Save New Hardware
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