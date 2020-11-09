<?php
$title = "Report Problem";
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
        <div class="grid cols-4">
            <div style="max-width: 80%">
                <nav class="secondary-nav">
                    <a href="#"><?php echo $title ?></a>
                    <a href="#details">Problem Details</a>
                </nav>
            </div>
            <div class="col-3">
                <div class="card scroll-target" id="details">
                    <div class="card-header">
                        <h3>Problem Details</h3>
                    </div>
                    <div class="card-body">
                        <form action="#" class="form-cols">
                            <div class="form-group">
                                <label for="call-code">Call Code</label>
                                <input type="text" name="call-code">
                            </div>
                            <div class="form-group">
                                <label for="problem-type">Problem Type</label>
                                <input type="text" name="problem-type">
                            </div>
                            <div class="form-group">
                                <label for="hardware">Hardware</label>
                                <input type="text" name="hardware">
                            </div>
                            <div class="form-group">
                                <label for="software">Software</label>
                                <input type="text" name="software">
                            </div>
                            <div class="form-group">
                                <label for="description">Problem description</label>
                                <textarea name="description" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="problem-priority">Problem Priority</label>
                                <select id="problem-priority" name="priorities">
                                    <option value="low">Low</option>
                                    <option value="high">High</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="local-specialist-needed">Is Local Specialist Needed</label>
                                <input type="checkbox" name="local-specialist-needed">
                            </div>
                            <div class="form-group">
                                <label for="notes">Notes</label>
                                <textarea name="notes" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="problem-state">Problem State</label>
                                <select id="problem-state" name="problem-states">
                                    <option value="unsolved">Unsolved</option>
                                    <option value="solution-suggested">Solution Suggested</option>
                                    <option value="solved">Solved</option>
                                </select>
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