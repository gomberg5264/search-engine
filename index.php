<?php require "header.php"; ?>
 "<center>";
    <title>Smarter engine</title>
    </head>
    <body>
        <form class="search-container" action="search.php" method="get" autocomplete="off">
                <font color='yellow'> <h1>Smarter search engine</span></h1>
                <input type="text" name="q" autofocus/>
                <input type="hidden" name="p" value="0"/>
                <input type="hidden" name="t" value="0"/>
                <input type="submit" class="hide"/>
                <div class="search-button-wrapper">
                  
                    <button name="t" value="0" type="submit">Search with the smarter engine</button>
               
                </div>
        </form>

<?php require "footer.php"; ?>
<body style="background-image: url('image/matrix.jpg');">
 <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
"</center>";
?>


<?php
echo "<font color='yellow'>";
$today = date("l");
echo $today;
?>

<?php

echo "<font color='yellow'>";


date_default_timezone_set('America/New_York');
echo date('h:i:s a');
?>



  


<?php
echo "<font color='yellow'>";
echo "Your lucky number is " . rand(1,100);
?>

