
<?php 
include_once "dbhandler.inc.php";
?>
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
                <form class="d-flex" action="<? echo $_SERVER['PHP_SELF']?>">
                    <input class="form-control me-2" name="search_string" id="ticket_search_submit" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <p>ECHOOO</p>
                    <?php
                        // get db details
                        include($_SERVER['DOCUMENT_ROOT'].'/../includes/dbHandler.php');
                        echo "PHP entered.";
                        // search term needs to be parsed for relevant values
                        
                        // Grab search_string from submitted form
                        if(isset($_POST['search_string'])){
                            echo "POST is set";
                            $search_string = $_REQUEST['search_string'];

                            // removing any possible punctation from the search string except hyphens
                            $search_string = preg_replace('/(?![-])[[:punct:]]/', '', $search_string); 

                            // removing any short words (less than 3 letter length)
                            $search_string = preg_replace('/\s+\S{1,2}(?!\S)|(?<!\S)\S{1,2}\s+/', '', $search_string);

                            // split remaining words into an array
                            $search_terms = explode(" ", $search_string);

                            // Get number of remaining search terms
                            $search_term_length = count($search_terms);

                            // Create base statement for SQL query 
                            // Concat all three columns so the where statement can search on all three simultaneously
                            $columns = "CONCAT_WS(\" \", description, answer, subject) LIKE ";
                            

                            // Create SQL query 
                            // CAUTION: Not entirely sure if SQL injection can occur at this point given that all punctation has been stripped
                            // However, using a prepared statement for a variable length list would be unwieldy
                            // Checks description, answer, and subject for any of the search terms and returns results that match
                            $sql = "SELECT * FROM table WHERE ";
                            for( $i = 0; $i < count($search_terms ); $i++){
                                $sql .= $columns . "\"%" . $search_terms[$i] . "%\"";
                                if ($i != count($search_terms)-1){
                                    $sql .= " OR "; 
                                }
                            }
                            $sql .= ";";

                            // Get Results from query
                            $result = $conn->query($sql);
                            
                        
                            while($row = mysqli_fetch_assoc($result)) {
                                $subject = $row['subject'];
                                $answer = $row['answer'];
                                $url = $row['url'];
                                $description = $row['description'];
                                $message = <<<RES
                                <div class="container col-sm-8">
                                    <div class="accordion mt-3 mb-3" id="commonQuestions">
                                        <div class="accordion-item mb-3">
                                            <h2 class="accordion-header" id="questionOne">
                                                <!--Accordion header and answer section-->
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> 
                                                    $subject
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="questionOne"
                                                data-bs-parent="#commonQuestions">
                                                <div class="accordion-body">
                                                    Question:  $description
                                                    <br>
                                                    <br>
                                                    Answer:  $answer
                                                    <br>
                                                    <br>
                                                    $url
                                                </div>
        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                RES;
                                echo $message;
                            
                                //However you want to retrieve rows and display them
                                // Placeholder
                                // var_dump($row);
                            }
                       
                            

                            // Close connection
                            $conn->close();
                        }   
                    ?>
            </div>
        </div>
    </nav>
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
        </script>
</body>

</html>