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
                    <li class="nav-item">
                        <a href="components.php" class="nav-link">Components</a>
                    </li>
                    <li class="nav-item active">
                        <a href="common_questions.php" class="nav-link active" aria-current="page"> Common Questions</a>
                    </li>
                </ul>
                <form action="search_result.php" method="get">
                        <input name="search_string" type="search"/> 
                        <input type="submit"/>
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
                    <button class="accordion-button" type="button" data-bs-toggle="collapse.show"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Is JBOD going to be added to the configurator?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="questionOne"
                    data-bs-parent="#commonQuestions">
                    <div class="accordion-body">
                        Currently there are no plans to add JBOD to the configurator. Please submit manually through
                        IBOM.
                        https://my.livechatinc.com/tickets/V9KMQ
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="questionTwo">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse.show"
                        data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        Configuration for (insert system name here) does not work
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="questionTwo"
                    data-bs-parent="#commonQuestions">
                    <div class="accordion-body">
                        Contact internal (configurator) team directly or send them an email. Let customer know they will
                        be updated once it is fixed.
                        https://my.livechatinc.com/tickets/7Y2UH
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="questionThree">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse.show"
                        data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        Parts not listed or are missing for configuration on the configurator
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="questionThree"
                    data-bs-parent="#commonQuestions">
                    <div class="accordion-body">
                        Check configurator and product page to confirm the issue and ensure the part missing should be
                        included in the system.
                        If issue is confirmed contact internal (configurator) team and inform the customer they will be
                        notified when it is fixed.
                        https://my.livechatinc.com/tickets/KFSRX
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="questionFour">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse.show"
                        data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseThree">
                        What is the difference between warranties for the systems
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="questionFour"
                    data-bs-parent="#commonQuestions">
                    <div class="accordion-body">
                        Please refer to the warranty documents provided by internal (configurator) team via email and
                        respond accordingly.
                        https://my.livechatinc.com/tickets/G82A3
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="questionFive">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse.show"
                        data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseThree">
                        When will a system be ready in the configurator?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="questionFive"
                    data-bs-parent="#commonQuestions">
                    <div class="accordion-body">
                        Check sharepoint excel sheet to see if it lists the specific system in question. Otherwise
                        contact the internal (configurator) team
                        as well as the PM if necessary.
                        https://my.livechatinc.com/tickets/OBIQJ
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
        </script>
</body>

</html>