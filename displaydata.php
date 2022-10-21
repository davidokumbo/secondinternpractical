<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .tbl {
      width: 50%;
    }

    .tbl tr th {
      border-bottom: 2px solid black;
      padding: 2px;
      width: 100%;
      text-align: left;
      text-align: center;

    }

    .tbl tr td {
      padding: 0 10px;
      border-bottom: 1px solid black;
      border-left: 2px solid black;
      justify-content: space-around;
    }
  </style>
</head>

<body>
  
  <?php
  define('LOCALHOST', 'localhost');
  define('USERNAME', 'root');
  define('PASSWORD', '');
  define('DBNAME', 'internship');
  $conn = mysqli_connect(LOCALHOST, USERNAME, PASSWORD, DBNAME);
  ?>

<div>
  <table class="tbl">
    <h2>2020 data</h2>
    <tr>
      <th>NO</th>
      <th>ID_State</th>
      <th>State</th>
      <th>ID_Year</th>
      <th>Year</th>
      <th>Population</th>
      <th>Slug_State</th>
    </tr>
    <?php
    $sqlfetch = "SELECT * FROM practical WHERE col4='2020' ";
    $result = mysqli_query($conn, $sqlfetch);
    if ($result == true) {
      $count = mysqli_num_rows($result);
      if ($count > 0) {
        while ($data = mysqli_fetch_assoc($result)) {
          $no = $data['no'];
          $col1 = $data['col1'];
          $col2 = $data['col2'];
          $col3 = $data['col3'];
          $col4 = $data['col4'];
          $col5 = $data['col7'];
          $col6 = $data['col8'];


    ?>
          <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $col1 ?></td>
            <td><?php echo $col2 ?></td>
            <td><?php echo $col3 ?></td>
            <td><?php echo $col4 ?></td>
            <td><?php echo $col5 ?></td>
            <td><?php echo $col6 ?></td>
          </tr>


    <?php
        }
      } else {
        echo "failed to fetch data from database";
      }
    }



    ?>

    <!-- data for 2019 -->
    </div>
<div>
   
    <table class="tbl">
    <h2>2019 data</h2>
      <tr>
        <th>NO</th>
        <th>ID_State</th>
        <th>State</th>
        <th>ID_Year</th>
        <th>Year</th>
        <th>Population</th>
        <th>Slug_State</th>
      </tr>

      <?php
      $sqlfetch = "SELECT * FROM practical WHERE col5='2019' ";
      $result = mysqli_query($conn, $sqlfetch);
      if ($result == true) {
        $count = mysqli_num_rows($result);
        if ($count > 0) {
          while ($data = mysqli_fetch_assoc($result)) {
            $no = $data['no'];
            $col1 = $data['col1'];
            $col2 = $data['col2'];
            $col3 = $data['col3'];
            $col4 = $data['col5'];
            $col5 = $data['col7'];
            $col6 = $data['col8'];


      ?>

            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $col1 ?></td>
              <td><?php echo $col2 ?></td>
              <td><?php echo $col3 ?></td>
              <td><?php echo $col4 ?></td>
              <td><?php echo $col5 ?></td>
              <td><?php echo $col6 ?></td>
            </tr>


      <?php
          }
        } else {
          echo "failed to fetch data from database";
        }
      }

      ?>

    </table>
    </div>

    <div>
    <table class="tbl">
    <h2>2018 data</h2>
      <tr>
        <th>NO</th>
        <th>ID_State</th>
        <th>State</th>
        <th>ID_Year</th>
        <th>Year</th>
        <th>Population</th>
        <th>Slug_State</th>
      </tr>

      <?php
      $sqlfetch = "SELECT * FROM practical WHERE col5='2019' ";
      $result = mysqli_query($conn, $sqlfetch);
      if ($result == true) {
        $count = mysqli_num_rows($result);
        if ($count > 0) {
          while ($data = mysqli_fetch_assoc($result)) {
            $no = $data['no'];
            $col1 = $data['col1'];
            $col2 = $data['col2'];
            $col3 = $data['col3'];
            $col4 = $data['col6'];
            $col5 = $data['col7'];
            $col6 = $data['col8'];


      ?>

            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $col1 ?></td>
              <td><?php echo $col2 ?></td>
              <td><?php echo $col3 ?></td>
              <td><?php echo $col4 ?></td>
              <td><?php echo $col5 ?></td>
              <td><?php echo $col6 ?></td>
            </tr>


      <?php
          }
        } else {
          echo "failed to fetch data from database";
        }
      }



      ?>



    </table>
    </div>
</body>

</html>