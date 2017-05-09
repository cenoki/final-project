<?php
include ("top.php");

?>
   
<?php

// Sample code to open a plain text file

$debug = false;

if(isset($_GET["debug"])){
    $debug = true;
}

$myFileName="data/sources";

$fileExt=".csv";

$filename = $myFileName . $fileExt;

if ($debug) print "\n\n<p>filename is " . $filename;

$file=fopen($filename, "r");

// the variable $file will be empty or false if the file does not open
if($file){
    if($debug) print "<p>File Opened</p>\n";
}

// the variable $file will be empty or false if the file does not open
if($file){
    
    if($debug) print "<p>Begin reading data into an array.</p>\n";

    // the while (similar to a for loop) loop keeps executing until we reach 
// the end of the file at which point it stops. the resulting variable 
// $records is an array with all our data.

    while(!feof($file)){
        $sources[]=fgetcsv($file);
    }
    
    //closes the file
    fclose($file);
    
    if($debug) {
        print "<p>Finished reading data. File closed.</p>\n";
        print "<p>My data array<p><pre> "; print_r($records); print "</pre></p>";
    }
} // ends if file was opened
?>

<article class="sources">
    <h1>Sources</h1>
    <h2>Articles</h2>
    
    <?php
    print '<ul>';
    
    foreach($sources as $source) {
    
    print "<li>". $source[0] . "</li>";
    
}
print"</ul>"
    
    
    ?>
    
    <h2>Images</h2>
    <p>Courtesy of the Internet</p>
    
    
    
</article>



<?php
include ("footer.php");
?>   

</body>
    
</html>