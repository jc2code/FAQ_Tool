
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!--link href="stylesheet" href = "style.css"-->
    <title>Common Questions</title>
    <!--***requires fixes or can omit***-->
    <style>
        .accordian-button {
            background-color: #85C1E9;
        }

        .accordian-body {
            background-color: #fff;
        }
    </style>
    <!--********************************-->
</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a href="index.html" class="navbar-brand">
                <img src="https://www.supermicro.com/sites/default/files/Super_Micro_Computer_Logo.svg" height="50"
                    width="100" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a href="componentStrap.html" class="nav-link">Components</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active" aria-current="page"> Common Questions</a>
                    </li>
                    <li class="nav-item">
                        <a href="productFamilyStrap.html" class="nav-link">Product Family</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    <?php
                        // get db details
                        include($_SERVER['DOCUMENT_ROOT'].'/../includes/dbHandler.php');

                        // search term needs to be parsed for relevant values
                        
                        // Grab search_string from submitted form
                        $search_string = $_REQUEST['search_string'];

                        // removing any possible punctation from the search string except hyphens
                        $search_string = preg_replace('/(?![-])[[:punct:]]/', '', $search_string); 

                        // removing any short words (less than 3 letter length)
                        $search_string = preg_replace('~\b[a-z]{1,2}\b\~', '', $search_string);

                        // split remaining words into an array
                        $search_terms = explode(" ", $search_string);

                        // Get number of remaining search terms
                        $search_term_length = count($search_terms);

                        // Create list for SQL query
                        // Example list: ('add', 'card', 'missing')
                        $search_list = "(";
                        for( $i=0; $i<count($search_terms)-1; $i++){
                            if($i==0){
                                $search_list .= "\'" . $search_terms[i] . "\'";
                            } else {
                                $search_list .= ", \'" . $search_terms[i] . "\'";
                            }
                        }
                        $search_list .= ")";
                        

                         // Create SQL query 
                         // CAUTION: Not entirely sure if SQL injection can occur at this point given that all punctation has been stripped
                         // However, using a prepared statement for a variable length list would be unwieldy
                         // Checks description, answer, and subject for any of the search terms and returns results that match
                         $sql = "SELECT * FROM table WHERE description IN {$search_list} OR answer IN {$search_list} OR subject IN {$search_list}";

                         // Get Results from query
                        $result = $conn->query($sql);
                         
                        if($result->num_rows > 0){
                             while($row = $result->fetch_assoc()) {
                                //However you want to retrieve rows and display them
                                // Placeholder
                                // var_dump($row);
                             }
                        } else {
                           // No results
                           echo 'No Results';
                        }
                        

                          // Close connection
                        $conn->close();

                    >
                </form>
            </div>
        </div>
    </nav>
    
    <!--Accordion for Common Questions-->
    <div class="container col-sm-8">
        <div class="accordion mt-3 mb-3" id="commonQuestions">
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="questionOne">
                    <!--Accordion header and answer section-->
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Is JBOD going to be added to the configurator?
                    </button>/
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="questionOne"
                    data-bs-parent="#commonQuestions">
                    <div class="accordion-body">
                        Currently there are no plans to add JBOD to the configurator. Please submit manually through
                        IBOM.
                        https://my.livechatinc.com/tickets/V9KMQ
                    </div>
                </div>
            </div>
            echo "test";
            
        </div>
    </div>
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
        </script>
</body>

</html>