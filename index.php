<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>FAQ Tool</title>
    <link type="text/css" rel="stylesheet" href="css/homepage.css" />
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>


    <div id="topHeader">
        <!--navbar-->
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container">
                <a href="index.php" class="navbar-brand">
                    <img src="https://www.supermicro.com/sites/default/files/Super_Micro_Computer_Logo.svg" height="50"
                        width="100" />
                </a>
            </div>
        </nav>
    </div>


    <div id="middle">
        <div id="image">
            <img src="https://www.supermicro.com/sites/default/files/2021-01/datacenter-report-banner-2021_2000w.jpg" />
        </div>

        <!--Page Name under Company Logo-->
        <div id="Webpagename">
            Internal FAQ Tool
        </div>

        
        <!--Search bar properties-->
        <div id="searchbarcontainer">
            <div id="search">
                <span class="material-icons md-dark md-inactive"> search </span>
            </div>
            <input id="searchbar" type="text" />
        </div>
        <!--Creates and links buttons to separate pages-->
        <div id="buttons">
            <!--Adds spacing between buttons and change button text to black-->
            <div type="button" class="btn btn-light m-2"> <a href="componentStrap.php" class="text-decoration-none text-black">Components</a> </div>
            <div type="button" class="btn btn-light m-2"> <a href="commonqStrap.php" class="text-decoration-none text-black">Common Questions</a> </div>
            <div type="button" class="btn btn-light m-2"> <a href="productFamilyStrap.php" class="text-decoration-none text-black">Product Family</a> </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
        </script>
</body>

</html>