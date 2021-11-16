<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link type= "text/css" rel="stylesheet" href = "css/productcomponent.css">
    <title>Product Family</title>
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto mt-2 gap-3 mt-lg-0 fw-bold">

                        <li class="nav-item">
                            <a href="componentStrap.php" class="nav-link">Components</a>
                        </li>

                        <li class="nav-item">
                            <a href="commonqStrap.php" class="nav-link">Common Questions</a>
                        </li>

                        <li class="nav-item active">
                            <a href="#" class="nav-link active" aria-current="page">Product Family</a>
                        </li>
                    </ul>
                    <form action="search_result.php" method="get">
                        <input name="search_string" type="search"/> 
                        <input type="submit"/>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <!--Tiles-->
    <section class="p-5">
        <div class="container">
            <div class="row row-cols-4">
                <div class="col-s g-4">
                    <div class="card bg-light text-dark">                     
                        <div class="card-body text-center">
                            <h3 class="card-title mb-3">
                            <a href="includes/family_results.inc.php?family=Ultra" onclick="post">Ultra</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-s g-4">
                    <div class="card bg-light text-dark">                      
                        <div class="card-body text-center">
                            <h3 class="card-title mb-3">
                            <a href="includes/family_results.inc.php?family=CloudDC" onclick="post">Cloud DC</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-s g-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">

                            <h3 class="card-title mb-3">
                            <a href="includes/family_results.inc.php?family=GPU" onclick="post">GPU</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-s g-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">

                            <h3 class="card-title mb-3">
                            <a href="includes/family_results.inc.php?family=Twin" onclick="post" class=" stretched-link">Twin</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-s g-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">

                            <h3 class="card-title mb-3">
                            <a href="includes/family_results.inc.php?family=Fat Twin" onclick="post" class=" stretched-link">Fat Twin</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-s g-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">

                            <h3 class="card-title mb-3">
                            <a href="includes/family_results.inc.php?family=Big Twin" onclick="post" class=" stretched-link">Big Twin</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-s g-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">

                            <h3 class="card-title mb-3">
                            <a href="includes/family_results.inc.php?family=Mainstream" onclick="post" class=" stretched-link">Mainstream</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-s g-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">

                            <h3 class="card-title mb-3">
                            <a href="includes/family_results.inc.php?family=Micro Cloud" onclick="post" class=" stretched-link">Micro Cloud</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-s g-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">

                            <h3 class="card-title mb-3">
                            <a href="includes/family_results.inc.php?family=IOT" onclick="post" class=" stretched-link">IOT</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-s g-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">

                            <h3 class="card-title mb-3">
                            <a href="includes/family_results.inc.php?family=up" onclick="post" class=" stretched-link">UP</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-s g-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">

                            <h3 class="card-title mb-3">
                            <a href="includes/family_results.inc.php?family=UP Storage" onclick="post" class=" stretched-link">UP Storage</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-s g-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">

                            <h3 class="card-title mb-3">
                            <a href="includes/family_results.inc.php?family=Up Workstation" onclick="post" class=" stretched-link">UP Workstation</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-s g-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">

                            <h3 class="card-title mb-3">
                            <a href="includes/family_results.inc.php?family=Hyper" onclick="post" class=" stretched-link">Hyper</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-s g-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">

                            <h3 class="card-title mb-3">
                            <a href="includes/family_results.inc.php?family=Super Workstation" onclick="post" class=" stretched-link">Super Workstation</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-s g-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">

                            <h3 class="card-title mb-3">
                            <a href="includes/family_results.inc.php?family=WIO" onclick="post" class=" stretched-link">WIO</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-s g-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">

                            <h3 class="card-title mb-3">
                            <a href="includes/family_results.inc.php?family=Storage" onclick="post" class=" stretched-link">Storage</a>
                            </h3>
                        </div>
                    </div>
                </div>
                
                <div class="col-s g-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">

                            <h3 class="card-title mb-3">
                            <a href="includes/family_results.inc.php?family=AMD Ultra" onclick="post" class=" stretched-link">AMD Ultra</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-s g-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">

                            <h3 class="card-title mb-3">
                            <a href="includes/family_results.inc.php?family=AMD WIO" onclick="post" class=" stretched-link">AMD WIO</a>
                            </h3>
                        </div>
                    </div>
                </div>

     
                <div class="col-s g-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">

                            <h3 class="card-title mb-3">
                            <a href="includes/family_results.inc.php?family=AMD GPU" onclick="post" class=" stretched-link">AMD GPU</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-s g-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">

                            <h3 class="card-title mb-3">
                            <a href="includes/family_results.inc.php?family=AMD Cloud DC" onclick="post" class=" stretched-link">AMD Cloud DC</a>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-s g-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">

                            <h3 class="card-title mb-3">
                            <a href="includes/family_results.inc.php?family=AMD Big Twin" onclick="post" class=" stretched-link">AMD Big Twin</a>
                            </h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
        </script>

</body>

</html>