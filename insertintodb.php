<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  define('LOCALHOST', 'localhost');
  define('USERNAME', 'root');
  define('PASSWORD', '');
  define('DBNAME', 'internship');
  $conn = mysqli_connect(LOCALHOST, USERNAME, PASSWORD, DBNAME);   //connecting to database
  //  $selectdb = mysqli_select_db($conn, DBNAME);

  $data = file_get_contents("https://datausa.io/api/data?drilldowns=State&measures=Population&year=2020"); // Reading the json file
  $jsondata = json_decode($data, true); // converting json object to php associative array
  //$jsondata['data'][0]['ID Year'];
  $num_of_rows = count($jsondata['data']);
  for ($row = 0; $row < $num_of_rows; $row++) {
    $ID_State = $jsondata['data'][$row]['ID State'];
    $State = $jsondata['data'][$row]['State'];
    $ID_Year = $jsondata['data'][$row]['ID Year'];
    $Year = $jsondata['data'][$row]['Year'];
    $Population = $jsondata['data'][$row]['Population'];
    $Slug_State = $jsondata['data'][$row]['Slug State'];
    echo "<br>";

    //sql querry to insert data into the database
    $sql = " INSERT INTO practical SET 
                    col1 = '$ID_State',     
                    col2 = '$State',  
                    col3 = '$ID_Year',
                    col4 = '$Year',
                    col5 = '2019',
                    col6 = '2018',
                    col7 = '$Population',
                    col8 = '$Slug_State'   
               ";
    $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if ($res == true) {
      echo "data inserted";
    }                          //checking if data is inserted into the database
    else {
      echo "failed to insert";
    }
  }


  ?>

</body>

</html>