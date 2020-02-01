<form action="PHP_Calender.php" method="POST">
     <input type="number" name="month" placeholder="Enter Month"/><br><br>
     <input type="number" name="year" placeholder="Enter Year"/><br><br>
     <input type="submit" name="submit" value="SUBMIT"/>
</form>
<?php
    if(isset($_POST['month']) && !empty($_POST['month']) && isset($_POST['year']) && !empty($_POST['year'])) {
        $month = (int) $_POST['month'];
        $year = (int) $_POST['year'];
        $month_character = DateTime::createFromFormat('!m', $month)->format('F');
        echo "<h1 align=center> $month_character $year </h1>";
        $day_arr = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
        $dates = array();
        $days = array();
        for ($i = 0; $i <= 31; $i++) {
            $time = mktime(12, 0, 0, $month, $i, $year);
            if (date('m', $time) == $month) 
                $dates[] = date('d', $time);
            if (date('m', $time) == $month) 
                $days[] = date('D', $time);
        }
        echo "<table border=1 align=center>";
        echo "<tr>";
        for ($i = 0; $i < count($day_arr); $i++) {
            echo "<th> $day_arr[$i] </th>";
            if ($day_arr[$i] == 'Sat') {
                echo "</tr>";
            }
        }
        echo "<tr>";
        for ($i = 0; $i < count($dates); $i++) {
            echo "<td> $dates[$i] </td>";
        } 
    }
    else 
        echo "Calender Doesnt Exits...Please enter valid month and year";
?>