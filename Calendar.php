<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Calendar</title>
<style>
    input,select,button{
        border-radius:25px;padding:20px 15px ;
    }
    </style>
</head>
<body>
  <?php
      if(isset($_POST['Send']))
  {
   echo '<h3> You select :</h3>';
   echo "{$_POST['day']} / {$_POST['month']} / {$_POST['year']}";
  }  
  else
  {
    ?>
<form action="calendar.php" method="post">
<?php
$months = array(1=> 'January',
'Frbruarary','march','April','May',
'June','July','August','September',
'October','November','December');

echo 'Day: <select name="day">';
for ($day=1; $day<=31; $day++)
{
    echo"<option value=\"$day\">$day</option>\n";
}
echo'</select>';
echo ' Month: <select name="month">';
foreach($months as $key => $value)
{
    echo "<option value=\"$key\">$value</option>\n";
}
echo'</select>';
echo' year: <select name="year">';
for($year=2020; $year<=2030; $year++)
{
    echo "<option value=\"$year\">$year</option>\n";
}
echo'</select>';
?>
 <button type="submit" name="Send">Send</button>
</form>
<?php
    }
  ?>
</body>
</html>