<?php include ('fx.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <!-- Data table css start -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <!-- data table css end -->
    <title>Data Table</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php">DataTable</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./list.php">Data List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./search.php">Search Data</a>
        </li>
      </ul>
      <form class="d-flex">
        <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button name="submit" class="btn btn-outline-success" type="submit">Search</button>   
      </form>
    </div>
  </div>
</nav>
<?php 
// $result = "";
// $rowCount = "";
        if(isset($_GET['submit'])){
          $searchData = $_GET['search'];
          // $arrSearch = implode(" ", $searchData);
          $objSearch = new Search();
          $result = $objSearch->searchData("data_table",$searchData);
          // $res = filter_array($searchData, $result);
          // print_r($res);
          $data = "";
          while($row = $result->fetch_assoc()){
              $data .= $row['id']."_";            
          }
          header("location:search.php?q=".substr($data, 0, -1)."");
          }
        ?>
