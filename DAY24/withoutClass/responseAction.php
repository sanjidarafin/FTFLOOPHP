<html>
<body>

<?php
    require_once("connect.php");

    $sql = "SELECT * FROM  contacts";
    $result = $conn->query($sql);
    echo "<pre>";
    print_r($result);
    echo "</pre>";

/*
    if($result->num_rows>0) {
        while ($row = $result->fetch_assoc()) {
            echo "id: ".$row["id"]."- Name:".$row["name"]."- Email: ".$row["email"] . "- Country: " . $row["country"] ."- Message: " . $row["message"] "<br>";
        }
    }
    else {
        echo "0 results";
    }
*/
?>
<h1> My database information </h1>
<table border="2">
    <thead>
    <tr>
        <th>Id</th>
        <th>Email</th>
        <th>Name</th>
        <th>Country</th>
    </tr>
    </thead>
    <tbody>

    <?php
         if($result->num_rows>0) {
             //echo '<tr><td colspan="4">No Rows Returned</td></tr>';
             // }else{
             while ($row = $result->fetch_assoc()) {
                 echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['country']}</td></tr>\n";
             }
         }

        ?>

    </tbody>
    </table>


  </body>
    </html>