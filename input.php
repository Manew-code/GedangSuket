<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Input data</title>
        <link rel="stylesheet" href="input.css">
    </head>
    <body>
        <div class="header">
            <div class="content-header">
                <div class="inner-content-header-1">
                    <div class="logo-header">
    
                    </div>
                    <div class="text-header"><h2>Laundry Gedang Suket</h2></div>
                </div>
            </div>
        </div>
        <div class="container"> 
            <h1 class="text-title">
                Masukan input
            </h1>
            <form action="connect.php" method="post">
                <div>
                    <h1 class="text-nama">Nama :</h1>
                    <input class="textbox-nama" type="text" id="Nama" name="Nama">
                </div>
                <div>
                    <h1 class="text-tanggal">Tanggal :</h1>
                    <input class="textbox-tanggal" type="date" id="Tanggal" name="Tanggal">
                </div>
                <div>
                    <h1 class="text-alamat">Alamat :</h1>
                    <input class="textbox-alamat" type="text" id="Alamat" name="Alamat">
                </div>
                <div>
                    <h1 class="text-hp">No.Hp :</h1>
                    <input class ="textbox-hp" type="text" id="Hp" name="Hp">
                </div>
                <div>
                    <h1 class="text-jumlah">Jumlah per(kg)||per(satuan)</h1>
                    <input class="textbox-jumlah" type="text" id="Jumlah" name="Jumlah">
                </div>
                <div>
                    <h1 class="text-harga">Harga</h1>
                    <input class="textbox-harga" type="text" id="Harga" name="Harga">
                </div>
                <div>
                    <h1 class="text-layanan">Layanan</h1>
                    <div class="Opsi">
                   <input type="radio" value="Cuci" id="Cuci" name="Layanan">
                   <label for="Cuci">Cuci</label><br>
                   <input type="radio" value="Setrika" id="Setrika" name="Layanan">
                   <label for="Setrika">Setrika</label><br>
                   <input type="radio" value="Cuci & setrika" id="CuciSetrika" name="Layanan"> 
                   <label for="CuciSetrika">Cuci & Setrika</label><br>
                    </div>   
                </div>
                <div class="tombol">
                    <input type="submit" value="Submit">
                </div>
            </form>
            <div >
                
            </div>
        </div>
        <div class="footer">
        <div class="inner-content-footer">
            <div class="text-footer"><p>Team Gedang Suket</p><br><p>contact kita ke +62 857-4831-9388</p></div>
        </div>
    </div>
       
    </body>
</html>