<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Regular CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Loyalty Webcrawler</title>
  </head>
  <body>

    <div class="container-fluid">
      <div class="">
        <div class="">
          <!-- Left Sidebar navigation -->
          <div class="left-sidenav">
            <!-- LOGO -->
            <a href="#" class="logo text-center">
              <span class="logo-lg">
                <img src="assets/images/AutoCAD-Student-Version-Logo-1.3.png" alt="insert logo here" height="72">
              </span>
              <!--
              <span class="logo-sm">
                <img src="assets/images/logo_sm.png" alt="insert logo here" height="16">
              </span>
            -->
            </a>
            <h2> File Tree </h2>
            <!--
            <i class="dripicons-meter">
              ::before
            </i>
            -->
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>

            <!-- File Tree Menu -->
            <ul id="myULleft">
              <li><span class="caret">Beverages</span>
                <ul class="nested">
                  <li><a href="#">Water </a></li>
                  <li><a href="#">Coffee </a></li>
                  <li><span class="caret">Tea</span>
                    <ul class="nested">
                      <li><a href="#">Black Tea</a></li>
                      <li><a href="#">White Tea</a></li>
                      <li><span class="caret">Green Tea</span>
                        <ul class="nested">
                          <li><a href="#">Sencha</a></li>
                          <li><a href="#">Gyokuro</a></li>
                          <li><a href="#">Matcha</a></li>
                          <li><a href="#">Pi Lo Chun</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><span class="caret">Dogs</span>
                <ul class="nested">
                  <li><a href="#">Water </a></li>
                  <li><span class="caret">Grooming</span>
                    <ul class="nested">
                      <li><span class="caret">Hair Type</span>
                        <ul class="nested">
                          <li><a href="#">Straight Hair</a></li>
                          <li><a href="#">Curly Hair</a></li>
                          <li><a href="#">Wire Hair</a></li>
                        </ul>
                      </li>
                      <li><span class="caret">Hair Length</span>
                        <ul class="nested">
                          <li><a href="#">Short Hair</a></li>
                          <li><a href="#">Medium Hair</a></li>
                          <li><a href="#">Long Hair</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><span class="caret">Food</span>
                    <ul class="nested">
                      <li><span class="caret">Breed Size</span>
                        <ul class="nested">
                          <li><a href="#">Small</a></li>
                          <li><a href="#">Medium</a></li>
                          <li><a href="#">Large</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </div>

        </div> <!-- End of left side bar -->

        <div class="clearfix"></div>

        <!-- WorkSpace page content in the middle of webpage -->
        <div class="main-content">
          <h2> Workspace </h2>
        <div class="ui-box col-md-8 content-page">
          <div class="content">
            <h2>Work Space Subcontent 1</h2>
            <div class="query-search-bar">
              <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Query Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>

            <div class="navbar-custom">
              <div class="container">
                <h2>Table Location</h2>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <a class="navbar-brand" href="#">Table Navbar</a>
                </nav>
              </div>
            </div>

          </div>

        </div>

        <div class="clearfix"></div>

        <div class="ui-box col-md-8 content-page">
          <div class="content">
            <h2>Work Space Subcontent 2</h2>
            <div class="navbar-custom">
              <div class="container">
                <h2>Table Location</h2>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <a class="navbar-brand" href="#">Navbar</a>
                </nav>
              </div>
            </div>

          </div>

        </div>
        </div>

        <!-- Session View -->
        <div class="">
          <!-- Side navigation -->
          <div class="right-sidenav">

            <h2> Session View </h2>
            <div style="padding-bottom: 0.5em;">
              <h5 style="color: #cedce4;">Start a new session</h5>
              <button class="btn btn-sm" type="submit">New Session</button>
            </div>

            <div class="">
              <h5 style="color: #cedce4;">Select session</h5>
              <div class="select-dropdown-element">
                <select>
                  <option value="1">Session 1</option>
                  <option value="2">Session 2</option>
                  <option value="3">Session 3</option>
                </select>
              </div>
            </div>

            <!-- Smaller subsection that displays current session info -->
            <div class="info-box">
              <a href="#">About Session</a>
              <h6> Date: </h6>
              <h6> Time Started: </h6>
              <h6> Time Ended: </h6>
            </div>


          </div>
        </div>


      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
    var toggler = document.getElementsByClassName("caret");
    var i;

    for (i = 0; i < toggler.length; i++) {
      toggler[i].addEventListener("click", function() {
        this.parentElement.querySelector(".nested").classList.toggle("active");
        this.classList.toggle("caret-down");
      });
    }
    </script>
  </body>
</html>
