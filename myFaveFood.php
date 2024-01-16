<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Fave Food</title>
    <style type="text/css">
        p{font-family: "Comic Sans MS",sans-serif;font-size:16px}
    </style>
    <script src="https://https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/fullpage.js/dist/fullpage.min.css"
    <script src="https://unpkg.com/fullpage.js/dist/fullpage.min.js"></script>
    <style>
        p{
            opacity: 0;
        }
        img{
            opacity: 0;
        }
    </style>
</head>
<?php include "heading.php" ?>
<body>
<img src="2887-photo-2335313956.jpg" height="400" alt="A small guy, with weird brown hair, he has a thumbs up close to teh viewer" style="
display: block;
margin-left: auto;
margin-right: auto;
">
<p>My favourite food is <span style="color: crimson">Chicken Baked Rice</span></p>
<p>
    I love chicken baked rice because it has a delicious white sauce and delectable chicken in itm, the baked cheese top is so gooey and tasty. It feels like heaven that bursts into my house and kisses me passionately on teh mouth. yes, i want to kiss this dish and consume it in my mouth immediately
</p>
<p>Please god I want to make out with it...</p>


<script>
    anime({
        targets: 'p, img',
        opacity: 1,
        translateY: [-30, 0],
        delay: anime.stagger(100, {start: 500})
    });
    anime({
        targets: '.topnav a',
        translateY: [-100, 0],
        delay: anime.stagger(100, {start: 500})
    });
</script>
</body>
</html>

