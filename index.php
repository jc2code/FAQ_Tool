<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>FAQ Tool</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide&effect=fire">
    <link rel="stylesheet" type="text/css" href="css/homepage.css" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons" />

    <!--initiating framework-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!--settings for the background image on the webpage-->
    <style>
        html {
            height: 100%;
            margin: 0;
        }

        .bg {
            height: 100%;
            background-image: url("https://www.supermicro.com/sites/default/files/2021-01/datacenter-report-banner-2021_2000w.jpg");
            background-position: center center;
            /*centers the image horizontally and vertically*/
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            /*allows image to stay fixed even when scrolling*/
            opacity: 0.3;
            /*makes image more opaque to allow clarity for text above the image*/
        }
    </style>

</head>


<body style="background-color:#B3F1A1">
    <!--sets background color if there is no background image-->
    <div id="topHeader">
        <!--navbar-->
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container">
                <a href="index.php" class="navbar-brand">
                    <img src="https://www.supermicro.com/sites/default/files/Super_Micro_Computer_Logo.svg" height="50" width="100" />
                </a>

                <!--added buttons in navbar, bolded words and added spacing for better clarity-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto mt-2 gap-3 mt-lg-0 fw-bold">
                        <li class="nav-item">
                            <a href="product_family.php" class="nav-link">Product Family</a>
                        </li>

                        <li class="nav-item">
                            <a href="components.php" class="nav-link">Components</a>
                        </li>

                        <li class="nav-item">
                            <a href="common_questions.php" class="nav-link">Common Questions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!--Adds the background image below the navbar-->
    <div class="bg"></div>

    <div id="middle">
        <!--Page Introduction under Navigation Bar-->
        <div id="Webpagename">
            <!--center aligns the text, sets the font size, and the font color-->
            <div class="font-effect-fire" id="text">
                Knowledge Base
            </div>

            <form class="searchBar" action="search_result.php" method="get">
                <input id= "Bar" class= "form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" name="search_string" type="search" />
                <button type="submit" class="btn btn-outline-primary">search</button>
                <!-- <input type="submit" class="btn btn-outline-primary"/>  -->
            </form>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>