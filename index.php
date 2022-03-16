<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>FAQ Tool</title>
        <link rel="stylesheet" type="text/css" href="css/homepage.css" />
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons" />

        <!--initiating framework-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

        <!--settings for the background image on the webpage-->
        <style>
            html {
                height: 100%;
                margin: 0;
            }

            .bg {
                height: 100%;
                background-image: url("https://www.supermicro.com/sites/default/files/2021-01/datacenter-report-banner-2021_2000w.jpg");
                background-position: center center; /*centers the image horizontally and vertically*/
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed; /*allows image to stay fixed even when scrolling*/
                opacity: 0.3; /*makes image more opaque to allow clarity for text above the image*/
            }
        </style>

    </head>


    <body style="background-color:#B3F1A1"> <!--sets background color if there is no background image-->
        <div id="topHeader">
            <!--navbar-->
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <div class="container">
                    <a href="index.php" class="navbar-brand">
                        <img src="https://www.supermicro.com/sites/default/files/Super_Micro_Computer_Logo.svg" height="50"
                            width="100" />
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
                        <!--Adds search functionality onto the navbar next to the buttons-->
                        <form action="search_result.php" method="get">
                            <input name="search_string" type="search"/> 
                            <input type="submit"/>
                        </form>
                    </div>
                </div>
            </nav>
        </div>

        <!--Adds the background image below the navbar-->
        <div class="bg"> </div>


        <div id="middle">
            <!--Page Introduction under Navigation Bar-->
            <div id="Webpagename">
                <!--center aligns the text, sets the font size, and the font color-->
                <div id="text" style ="text-align:center; font-size: 50px; color:#1B0C41;">
                    Welcome to the Internal FAQ Tool for the Supermicro Command Center Team
                </h1>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
            </script>
    </body>

</html>