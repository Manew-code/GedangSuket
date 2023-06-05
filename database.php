<!DOCTYPE html>
<html>
    <head>
        <title>Data konsumen</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="database.css">
    </head>
    <body style="margin : 50px;">
    <a href="input.php"><button class="buton"><h3>+</h3></button></a>
    <h1>Pencarian</h1>
    <br>
    <div class="card-body">
        <div class="row">
            <div class="col-md-7">
                <form action="" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" name="search"value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" class="form-control" placeholder="Search data">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div> 
                </form>
            </div>
        </div>
    </div>            
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Pencarian</th>
                </tr>
            </thead>

            <tbody>
              <?php
                 $conn = new mysqli('localhost','root','','laundry');
                 if($conn->connect_error){
                 die('Connection Failed : ' .$conn->connect_error);
                  } 
                  if(isset($_GET['search'])) {
                       $filtervalues = $_GET['search'];
                       $query ="SELECT * FROM pelanggan WHERE CONCAT(Nama,Tanggal,Alamat,Hp,Jumlah,Harga,Pelayanan) LIKE '%$filtervalues%' ";
                       $query_run = mysqli_query($conn, $query);

                       if(mysqli_num_rows($query_run) > 0)
                       {
                           foreach($query_run as $items)
                           {
                               ?>
                               <tr>
                                   <td><?=$items['Nama'];?></td>
                                   <td><?=$items['Tanggal'];?></td>
                                   <td><?=$items['Alamat'];?></td>
                                   <td><?=$items['Hp'];?></td>
                                   <td><?=$items['Jumlah'];?></td>
                                   <td><?=$items['Harga'];?></td>
                                   <td><?=$items['Pelayanan'];?></td>
                               </tr>
                               <?php
                           }
                       }
                       else
                       {
                           ?>
                           <tr>
                               <td colspan="4">No record found</td>
                           </tr>
                           <?php
                       }
                   }
                   ?>
                   
            </tbody>
            
            
        </table>
        <table class="table">
        <div class="scroll">
            <thead class="table-primary">
                <tr>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Jumlah(kg)</th>
                    <th>Harga</th>
                    <th>Layanan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $conn = new mysqli('localhost','root','','laundry');
                    if($conn->connect_error){
                    die('Connection Failed : ' .$conn->connect_error);
                     } 
                    $sql = "SELECT * FROM pelanggan";
                    $result = $conn->query($sql);
                    if (!$result) {
                        die("invalid query: " . $conn->error);
                    }
                   

                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>". $row["Nama"]."</td>
                                <td>". $row["Tanggal"]."</td>
                                <td>". $row["Alamat"]."</td>
                                <td>". $row["Hp"]."</td>
                                <td>". $row["Jumlah"]."</td>
                                <td>". $row["Harga"]."</td>
                                <td>". $row["Pelayanan"]."</td>
                            </tr>";

                    }
                    ?>
            </tbody>
        </div>
        </table>

    </body>
    
</html>