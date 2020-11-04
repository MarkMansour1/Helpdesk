<?php
// Gets the problem ID from the url
if (isset($_GET["id"]))
    $id = $_GET["id"];
else
    // header("location: index.php");
    $id = 1;

$title = "Problem " . $id;
include("components/header.php");

// Gets the correct problem using the id in the url. Replace this with a database query.
$key = array_search($id, array_column($problems, 'id'));
$problem = [];
foreach ($problems as $p) {
    if ($p["id"] == $id) {
        $problem = $p;
    }
}
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
                    <a href="#notes">Problem Notes</a>
                    <a href="#update">New Update</a>
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
                                <label for="id">Problem ID</label>
                                <input type="text" name="id" value="<?php echo $id ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="call">Call</label>
                                <input type="text" name="call" value="Oct 3 2016, 9.00am">
                            </div>
                            <div class="form-group">
                                <label for="caller">Caller</label>
                                <input type="text" name="caller" value="George Formby from Cleaning Dept., ext 23456">
                            </div>
                            <div class="form-group">
                                <label for="software">Software</label>
                                <input type="text" name="software" value="Windows 8">
                            </div>
                            <div class="form-group">
                                <label for="hardware">Hardware</label>
                                <input type="text" name="hardware" value="HP Laptop">
                            </div>
                            <div class="form-group">
                                <label for="description">Problem description</label>
                                <textarea name="description" rows="3">Laptop running very slowly</textarea>
                            </div>
                            <button type="submit" class="btn btn-lg">
                                Save Changes
                            </button>
                        </form>
                    </div>
                </div>
                <div class="card scroll-target" id="notes">
                    <div class="card-header">
                        <h3>Problem Notes</h3>
                    </div>
                    <div class="card-body">
                        <form action="#" class="form-cols">
                            <div class="form-group">
                                <label for="notes">Oct 3, 9.00am</label>
                                <textarea name="notes" rows="3" disabled>Initial suggestion to re-boot</textarea>
                            </div>
                            <div class="form-group">
                                <label for="notes">Oct 3, 9.30am</label>
                                <textarea name="notes" rows="3" disabled>Caller phoned back to say rebooting didn’t work. Clara assigned to problem.</textarea>
                            </div>
                            <div class="form-group">
                                <label for="notes">Oct 5, 4.00pm</label>
                                <textarea name="notes" rows="3" disabled>Clara called to say Windows CleanUp used to tidy up disc space and delete unused temporary files. User can access Windows more easily and speedily.</textarea>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card scroll-target" id="update">
                    <div class="card-header">
                        <h3>New Update</h3>
                    </div>
                    <div class="card-body">
                        <form action="#" class="form-cols">
                            <div class="form-group">
                                <label for="update">Notes</label>
                                <textarea name="update" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-lg">
                                Add Update
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