<html>
    <head>
        <title>Distance from Chcago!</title>
    </head>
    <body>
        <font size=4 color="blue"></font>
        <br>Page calculates the distances from Chicago
        <br>Select a destination:
        <form action="CheckDistance.php" method="GET">
            <select name="destination[]" size=5 multiple>
                <option >Boston</option>
                <option >Dallas</option>
                <option >Miami</option>
                <option >Las Vegas</option>
            </select>
            <br>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </form>
        
    </body>
</html>