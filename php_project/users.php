<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Users information</title>
    <style>
       #users
        { 
border-collapse: collapse;
width: 100%;
       }
       #users td, #users th
        {
           border: 1px solid add;
           padding: 8px; 
       }
       #users tr:nth-child(even){background-color:#f2f2f2 ;}
       #users tr:hover {background-color: add;}
       #users th 
       {
         padding: 12px;
         padding-bottom:12px;
         text-align: left;
         background-color: #4CAF50;
         color: white;
       }
    </style>
</head>
<body>
    <h1> Users information</h1>
    <?php
      $con = mysqli_connect('localhost','root','','classicmodels') or die ('Can\'t connect to mysql server ') ;
      $query = 'SELECT `user_id`, `first_name`, `last_name`, `email`, `registration_date` FROM `users` ';
      $result = mysqli_query($con,$query) or die ( 'There is an error in the query') ;
      if (mysqli_num_rows($result) > 0)
      {
          echo '<table id="users">';
          echo '<tr><th>First Name </th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Registration Data</th>
                    <th>Action</th></tr>';
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr><td>$row[first_name]</td>
                                  <td>$row[last_name]</td>
                                  <td>$row[email]</td>
                                  <td>$row[registration_date]</td>
                                  <td><a href='updateUser.php?id={$row['user_id']}'title='Update'>&#9998;</a> | <a href='services_insert_Delete.php?id={$row['user_id']}' title='Delet'>&#10006</a></td></tr> ";
                    }
                echo '</table>';
      }
      else 
      {
       echo 'There is no information to display!!!';
      }
      mysqli_free_result($result);
      mysqli_close($con);
    ?>
</body>
</html>