<html>
    <body>
        
        <?php
        $fname = $_GET['name'];
        $section = $_GET['section'];
        $year = $_GET['year'];

        echo $fname, " is a student under ", $section, " of year " ,$year;

        $numko = $_GET['numko'];
        $numniya = $_GET['numniya'];
        $numnamin = $numko + $numniya;
        ?>
            <h1> Total Num Namin <?php echo $numnamin ?></h1>


        
        </body>
        </html>
