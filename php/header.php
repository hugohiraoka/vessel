<!--****************************************************************************
// Filename: Header.p]lh
// Author: Hugo Hiraoka  (c) Copyright
// Date: 2022 January
// Description: Header items for CSC Cruise Tracker
*****************************************************************************-->
<?PHP
session_start();
//include "vessels_companies.php";
//include "vesselDashCompany.php";
//$listOfVessels = $_SESSION['listVessels'];
//$arrayVesselNameDashCompany = $_SESSION['listVesselDashCompany'];
?>

<html>
<head>


<script src="js/autocomplete.js"></script>
<script src="//widget.time.is/en.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/mylocation.js"></script>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="ModalLabel">Vessel</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
           ...
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           <button type="button" class="btn btn-primary">Save changes</button>
</div></div></div></div>
</head>

<body>


<div class="fixed-top">
<div class="jumbotron jumbotron-fluid max-width: 100%">
<div class ="container-fluid p-0">

<img id = "topBanner" class="img-fluid" src="images/banners/tp_noon.png" alt="Miami Teleport">

<script>


    //var browserTime = locationTime();
    //console.log("Banner=" + banner);

    var alternateText;

    checkImage();

    //setInterval(checkImage, 90000);
    setInterval(checkImage, 5000);

    function checkImage() {

      browserTime = locationTime();
      //console.log(banner);

//night
    if (browserTime == 0)
    {
      document.getElementById("topBanner").src = "images/banners/tp_night.png";
      //imageBanner = document.getElementById("images/banners/banner_night.jpg";
      //alternateText = "Miami Teleport Night";

      //<img class="img-fluid" src="images/banners/banner_night.jpg" alt="Miami Teleport Night">;
    }
    else if (browserTime == 1)
    {

      document.getElementById("topBanner").src = "images/banners/tp_morning.png";
      //alternateText = "Miami Teleport Morning";

      //<img class="img-fluid" src="images/banners/banner_morning.jpg" alt="Miami Teleport Morning">;

    }
    else if (browserTime == 2)
    {

      document.getElementById("topBanner").src = "images/banners/tp_noon.png";
      //alternateText = "Miami Teleport Noon";

      //<img class="img-fluid" src="images/banners/banner_noon.jpg" alt="Miami Teleport Noon">;

    }
    else if (browserTime == 3)
    {

      document.getElementById("topBanner").src = "images/banners/tp_afternoon.png";
      //alternateText = "Miami Teleport Afternoon";

      //<img class="img-fluid" src="images/banners/banner_afternoon.jpg" alt="Miami Teleport Afternoon">;

    }

    else
    {
      document.getElementById("topBanner").src = "images/general/tp_noon.png";
      //alternateText = "Miami Teleport";
      //<img class="img-fluid" src="images/general/csc_miami_teleport_1920x40_banner_max.jpg" alt="Miami Teleport Night">; }
}


    //document.write('<img class="img-fluid" src='+ imageBanner +' alt=' + alternateText + '>');

    //<img id = "topBanner" class="img-fluid" src= document.write('"' + imageBanner + '" alt ="' + alternateText+'"')> ;

    //markerColorShadow(browserTime);
    }

  </script>



  </div>
  </div>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

    <div class="container-fluid">

      <a class="navbar-brand" href="#">  <img src="images/logos/csc_logo.jpg" alt="CSC Logo" style="width:40px;" class="rounded-pill"> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Vessels</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">All</a></li>
              <li><hr class="dropdown-divider"></hr></li>
              <li><a class="dropdown-item" href="#">By Company</a></li>
              <li><a class="dropdown-item" href="#">By First Letter</a></li>
              <li><a class="dropdown-item" href="#">By Flag</a></li>
              <li><a class="dropdown-item" href="#">By Year</a></li>
              <li><hr class="dropdown-divider"></hr></li>

              <li><a class="dropdown-item" href="#">Search"></a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Companies</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#" data-toggle="modal" data-target='#modal'>All</a></li>
              <li><hr class="dropdown-divider"></hr></li>
              <li><a class="dropdown-item" href="#">By First Letter</a></li>
              <li><hr class="dropdown-divider"></hr></li>
              <li><a class="dropdown-item" href="#">Search</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Ports</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">All</a></li>
              <li><hr class="dropdown-divider"></hr></li>
              <li><a class="dropdown-item" href="#">By Country</a></li>
              <li><a class="dropdown-item" href="#">By First Letter</a></li>
              <li><hr class="dropdown-divider"></hr></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Teleports</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">All</a></li>
              <li><hr class="dropdown-divider"></hr></li>
              <li><a class="dropdown-item" href="#">Another link</a></li>
              <li><a class="dropdown-item" href="#">A third link</a></li>
              <li><a class="dropdown-item" href="#">A third link</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Satellites</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">All</a></li>
              <li><hr class="dropdown-divider"></hr></li>
              <li><a class="dropdown-item" href="#myModal">Eutelsat 113W</a></li>
              <li><a class="dropdown-item" href="#">Anik F1R</a></li>
              <li><a class="dropdown-item" href="#">ABS-3A 3W</a></li>
              <li>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                  Open modal
                </button>

              </li>

            </ul>
          </li>

          <form autocomplete="off" method='get' class='ajaxform' action="php/cruiser.php">
          <div class="d-inline-flex align-items-center">
            <div class="autocomplete" style="width:200px">
              <input id="myCruise" type="text" name="ship" placeholder="Cruiseliner">
            </div>
            <div>
              <input type="submit" value="Search">
            </div>
          </div>
          </form>

          <li>

            <div class="row h-100 flex-nowrap">
              <div class="col w-100 p-3"></div>
              <div class="col w-100 p-3"></div>
              <div class="col w-100 p-3 bg-primary text-white flex-nowrap">time1</div>
              <div class="col w-100 p-3"></div>
              <div class="col w-100 p-3 bg-primary text-white flex-nowrap">time2</div>
              <div class="col w-100 p-3"></div>
              <div class="col w-100 p-3 bg-primary text-white flex-nowrap">time3</div>
              <div class="col w-100 p-3"></div>
              <div class="col w-100 p-3 bg-primary text-white flex-nowrap">time4</div>
          </div>


          </li>


          <script type="text/javascript">

          /*An array containing all the cruiseliners names in the database*/
          var vesselDashCompany = <?php echo json_encode($arrayVesselNameDashCompany); ?>;

          /*initiate the autocomplete function on the "myCruise" element, and pass along the vessels array as possible autocomplete values:*/
          autocomplete(document.getElementById("myCruise"), vesselDashCompany);
          </script>

          <!-- <a href="https://time.is/UTC" id="time_is_link" rel="nofollow" style="font-size:14px">UTC:</a> -->
          <!-- <span id="UTC_za00" style="font-size:20px; white-space:nowrap;"></span> -->

          <script>
        //time_is_widget.init({UTC_za00:{template:"TIME | DATE", date_format:"dname, mnum dnum, yy"}});
        </script>

        </ul>
    </div>



        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            <i class='fas fa-cog' style='font-size:24px; margin-top: 0.125em; vertical-align: middle; color:white;'></i>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">App Location</a></li>
            <li><a class="dropdown-item" href="#">Map</a></li>

            <li><a class="dropdown-item" href="#">Ship Config</a></li>
            <li><a class="dropdown-item" href="#">Companies</a></li>
            <li><a class="dropdown-item" href="#">Cruiselines</a></li>
            <li><a class="dropdown_item" href="#">Ports</a></li>
            <li><a class="dropdown_item" href="#">Teleports</a></li>
            <li><a class="dropdown_item" href="#">Satellites</a></li>

          </ul>
        </li>

    </div>
  </nav>
</div>

</body>
</html>