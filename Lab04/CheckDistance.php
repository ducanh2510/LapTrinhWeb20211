<html>
    <head>
        <title>Distance and Time Calculations</title>
    </head>
    <body>
        <?php
            $cities = array("Boston" => 100,"Dallas"=>200,"Miami"=>300,"Las Vegas"=>400);
            $des = $_GET['destination'];
            // print("$des");
            foreach ($des as $destination){
                print("---------------------------<br>");
                print("$destination<br>");
                if(isset($cities[$destination])){
                    $distance = $cities[$destination];
                    $time = round(($distance/60),2);
                    $walktime = round($distance/5,2);
                    print("Distance between Chicago and <I>$destination</I> is $distance miles<br>");
                    print("Driving at 60 miles per hour it would take $time hours<br>");
                    print("Walking at 5 miles per hour it would take $walktime hours<br>");
                }else{
                    print("Sorry, do not have destination info for $destination");
                }
    
            }
        ?>
    </body>
</html>