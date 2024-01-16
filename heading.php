<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Heading</title>
    <style type="text/css">

        .topnav{
            overflow: hidden;
            font-family: "Comic Sans MS", sans-serif;
            background-color: #7fe8e8;
        }
        .topnav a {
            float: left;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Change the color of links on hover */
        .topnav a:hover {
            background-color: #ddd;

        }

        /* Add a color to the active/current link */
        .topnav a.main {
            background-color: #2871fa;
            color: white;
        }
        .topnav a.active {
        }
        .topnav a.disabled {
            opacity: 50%;
        }


    </style>
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>-->
</head>
<body>
<!--<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="aboutMe.php">About Me</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="myFaveFood.php">Fave Food</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled ="true">Fave Movie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled ="true">Funny Cats</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled ="true">How To Make A PipeBomb</a>
                </li>
            </ul>
        </div>



</nav>
-->
<div class="topnav">
    <a class="main" href="exercise1.html">Home</a>
    <a class="active" href="myFaveFood.php">Fave Food</a>
    <a class="disabled" href="#disabled">Fave Movie</a>
    <a class="disabled" href="#disabled">Funny Cats</a>
    <a class="disabled" href="#disabled">How To Make A PipeBomb</a>
</div>
</body>
</html>