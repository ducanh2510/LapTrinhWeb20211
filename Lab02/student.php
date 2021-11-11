<html>
    <head>
        <title>Student Information</title>
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h2> Student Information </h2>
        <?php
            $name = $_POST["name"];
            $gender = $_POST["gender"];
            $class = $_POST["class"];
            $university = $_POST["university"];
            $study_process = $_POST["process"];
            $hobbies = $_POST["hobby"];
            print ("<br> Name: $name");
            print ("<br> Gender: $gender");
            print ("<br> Class: $class");
            print ("<br> University: $university");
            print ("<br> Study process: $study_process");
            print ("<br> Hobbies:");
            foreach($hobbies as $selected){
                print ("<br> $selected");
            }
        ?>
        </form>
    </body>

</html>