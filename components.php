<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <link type="text/css" rel="stylesheet" href="css/components.css">
    <title>Components</title>
</head>

<body>

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
                        <a href="product_family.php" class="nav-link">Product Family</a>
                    </li>
                    <li class="nav-item active">
                        <a href="components.php" class="nav-link active" aria-current="page">Components</a>
                    </li>
                    <li class="nav-item">
                        <a href="common_questions.php" class="nav-link">Common Questions</a>
                    </li>
                </ul>
                <form action="search_result.php" method="get">
                        <input name="search_string" placeholder= "Search" type="search"/> 
                        <button type="submit" class="btn btn-primary">Go</button>
                </form>
            </div>
        </div>
    </nav>

    <!--Boxes-->
    <section class="p-5">
        <div class="container">
            <div class="row row-cols-3">

                <div class="col-s g-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">

                            <div class="h1">
                                <i class="bi bi-cpu"></i>
                            </div>

                            <h3 class="card-title mb-3">
                                CPU
                            </h3>
                            <a href="includes/component_results.inc.php?tag=CPU" onclick="post" class=" stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-s g-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">
                            <div class="h1">
                                <i class="bi bi-hdd"></i>
                            </div>
                            <h3 class="card-title mb-3">
                                Memory
                            </h3>
                        </div>
                        <a href="includes/component_results.inc.php?tag=Memory" onclick="post" class=" stretched-link"></a>
                    </div>
                </div>
                <div class="col-s g-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">
                            <div class="h1">
                                <i class="bi bi-hdd"></i>
                            </div>
                            <h3 class="card-title mb-3">
                                AOC
                            </h3>
                            <a href="includes/component_results.inc.php?tag=AOC" onclick="post" class=" stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-s g-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">
                            <div class="h1">
                                <i class="bi bi-hdd"></i>
                            </div>
                            <h3 class="card-title mb-3">
                                TPM
                            </h3>
                            <a href="includes/component_results.inc.php?tag=TPM" onclick="post" class=" stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-s g-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">
                            <div class="h1">
                                <i class="bi bi-hdd"></i>
                            </div>
                            <h3 class="card-title mb-3">
                                Drives
                            </h3>
                            <a href="includes/component_results.inc.php?tag=Storage" onclick="post" class=" stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-s g-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">
                            <div class="h1">
                                <i class="bi bi-hdd"></i>
                            </div>
                            <h3 class="card-title mb-3">
                                Motherboard
                            </h3>
                            <a href="includes/component_results.inc.php?tag=Motherboard" onclick="post" class=" stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-s g-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body text-center">
                            <div class="h1">
                                <i class="bi bi-hdd"></i>
                            </div>
                            <h3 class="card-title mb-3">
                                Add-on part$
                            </h3>
                            <a href="includes/component_results.inc.php?tag=Add-on Part" onclick="post" class=" stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item">
                    <a href="index.php" class="nav-link px-2 text-muted">Home</a>
                </li>
                <li class="nav-item">
                    <a href="product_family.php" class="nav-link px-2 text-muted">Product Family</a>
                </li>
                <li class="nav-item">
                    <a href="components.php" class="nav-link px-2 text-muted">Components</a>
                </li>
                <li class="nav-item">
                    <a href="common_questions.php" class="nav-link px-2 text-muted">Common Questions</a>
                </li>
            </ul>
            <p class="text-center text-muted">@ 2022 Supermicro</p>
        </footer>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
   
  </body>

</body>

</html>