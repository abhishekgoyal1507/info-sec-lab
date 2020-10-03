<!DOCTYPE html>
<html>
  <body>
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "test";
      $names = array('Ram', 'Deepak', 'Kailash');

      // Create connection
      $conn = new mysqli($servername, $username, $password, $database);

      // Check connection
      if ($conn->connect_error) 
      {
        die("Connection failed: " . $conn->connect_error);
      }

      // Deleting existing table
      $sql = "DROP TABLE Names";
      $conn->query($sql);

      // Creating table for queries
      $sql = "CREATE TABLE Names (
        name VARCHAR(30) NOT NULL
      )";

      if($conn->query($sql) == TRUE) 
      {
        echo "Table Names created successfully";
      }
      else 
      {
        echo "Error creating table : " . $conn->error;
      }

      echo "<br><br>";

      // Insert data
      foreach ($names as $name) 
      {   
        $sql = "INSERT INTO Names VALUES ('$name')";

        if($conn->query($sql) == TRUE) 
        {
          echo "New record created successfully";
        }
        else
        {
          echo "Error inserting record : " . $conn->error;
        }

        echo "<br>";
      }

      echo "<br><br>";

      // Updating data
      $sql = "UPDATE Names SET name='Shyam' WHERE name='Ram'";

      if(mysqli_query($conn, $sql)) 
      {
        echo "Record updated successfully";
      } 
      else 
      {
        echo "Error updating record: " . mysqli_error($conn);
      }

      echo "<br><br>";

      // Deleting data
      $sql = "DELETE FROM Names WHERE name='Shyam'";

      if(mysqli_query($conn, $sql)) 
      {
        echo "Record deleted successfully";
      } 
      else 
      {
        echo "Error deleting record: " . mysqli_error($conn);
      }

      echo "<br><br>";

      // Select data
      $sql = "SELECT * FROM Names";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) 
      {
          // output data of each row
          while($row = $result->fetch_assoc()) 
          {
            echo "<br>" . $row["name"] ."<br>";
          }
      } 
      else 
      {
        echo "0 results";
      }

      echo "<br><br>";

      $conn->close();
    ?>
    
  </body>
</html>