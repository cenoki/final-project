<!DOCTYPE html>
<html lang="en">
    <head>
        <title>International Students</title>

        <meta charset="utf-8">
        <meta name="author" content="Cristine Enoki and Maharani Rustam">
        <meta name="description" content="Website made by two international students that study at The University of Vermont. Information about homecountries of some international students (Brazil, France, Indonesia, South Korea, Spain, Sweden and United Kingdom).">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        

        
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        
        <script type="text/javascript">
            var flexsliderStylesLocation = "../css/flexslider.css";
            $('<link rel="stylesheet" type="text/css" href="'+flexsliderStylesLocation+'" >').appendTo("head");
            $(window).load(function() {

                $('.flexslider').flexslider({
                    animation: "fade",
                    slideshowSpeed: 3000,
                    animationSpeed: 1000
                });

            });
        </script>
        
        <link rel="icon" href="../final-project/images/logo.png" type="image/png" sizes="17x17">

        <link rel="stylesheet" href="../css/custom-finalproject.css" type="text/css" media="screen">
        
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
 
            <?php
        $debug = false;
        if (isset($_GET["debug"])) {
            $debug = true;
        }
        $domain = "//";
        $server = htmlentities($_SERVER['SERVER_NAME'], ENT_QUOTES, "UTF-8");
        $domain .= $server; 
        $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");
        $path_parts = pathinfo($phpSelf);
        if ($debug) {
            print"<p>Domain: " . $domain;
            print'<p>php Self: ' . $phpSelf;
            print'<p>Path Parts<pre>';
            print_r($path_parts);
            print'</pre></p>';
        }
        print "\n" . '<!-- include libraries -->' . "\n";
        require_once('lib/security.php');
        if ($path_parts['filename'] == "form"){
            print"\n<!-- include form libraries -->\n";
            include "lib/validation-functions.php";
            include "lib/mail-message.php";
        }
        
        print "\n" . '<!-- finished including libraries -->' . "\n";
        ?>

    </head>


    <?php
    print '<body id="' . $path_parts['filename'] . '">';
    
    include 'header.php';

    
    if ($debug) {
        print'<p> DEBUG MODE IS ON</p';
    }
    ?>