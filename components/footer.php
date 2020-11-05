  </section>
  <footer>
    <div class="container">
      <div class="flex justify-between align-center">
        &copy; Make-It-All 2020
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
  </footer>
  <script>
    function searchList() {
      var input = document.getElementById('search');
      var filter = input.value.toUpperCase();
      var container = document.getElementById("filter-container");
      var items = container.getElementsByClassName('filter-item');

      var total = 0;
      for (var i = 0; i < items.length; i++) {
        var value = items[i].textContent || items[i].innerText;
        if (value.toUpperCase().indexOf(filter) > -1) {
          items[i].style.display = "";
          total++;
        } else {
          items[i].style.display = "none";
        }
      }

      if (filter.length > 0) {
        document.getElementById("filter-count").innerHTML = "Showing " + total + " search result(s)";
      } else {
        document.getElementById("filter-count").innerHTML = "";
      }
    }
  </script>
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  </body>

  </html>