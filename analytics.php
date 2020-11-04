<?php
$title = "Analytics";
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

            </div>
        </header>
        <div class="grid">
            <div class="card col-3">
                <div class="card-body">
                    <dl>
                        <dt>
                            Problems Created
                        </dt>
                        <dd>
                            <div>
                                319
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="card col-3">
                <div class="card-body">
                    <dl>
                        <dt>
                            Open Problems
                        </dt>
                        <dd>
                            <div>
                                56
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="card col-3">
                <div class="card-body">
                    <dl>
                        <dt>
                            Closed Problems
                        </dt>
                        <dd>
                            <div>
                                197
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="card col-3">
                <div class="card-body">
                    <dl>
                        <dt>
                            Failed Problems
                        </dt>
                        <dd>
                            <div>
                                0
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include("components/footer.php");
?>