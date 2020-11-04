<?php
$title = "Operator Activity";
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
        <div class="input-group-wrapper">
            <label for="search">Search</label>
            <div class="input-group">
                <div class="input-group-main">
                    <div class="input-group-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input id="search" placeholder="Search for operator in the log">
                </div>
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                    <span>Search</span>
                </button>
            </div>
        </div>

        <div class="grid">
            <div class="card col-3">
                <div class="card-body">
                    <dl>
                        <dt>
                            Calls Answered
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
                            Calls missed
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
                            calls per hour
                        </dt>
                        <dd>
                            <div>
                                17
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="card col-3">
                <div class="card-body">
                    <dl>
                        <dt>
                            Repeated calls
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

        //create bar chart.
    </div>
</main>
<?php
include("components/footer.php");
?>