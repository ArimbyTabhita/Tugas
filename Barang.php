<form action="" method="post">
    Nama Barang :
    <input type="text" nama="namaBarang" placeholder="nama Barang">
    <br>
    Harga :
    <input type="text" name="Harga" placeholder="Harga Barang">
    <br>
    Stock :
    <input type="number" name="Stock" placeholder="Stock Barang">
    <br>
    <input type="submit" name="simpan" value="simpan">
</form>

<?php
$host="127.0.0.1";
$user="root";
$password="";
$bb="bbtoko";
$koneksi=new mysqli($host, $user, $password, $bb);
if(isset($_POST["simpan"])){
    $barang=$_POST["barang"];
    $harga=$_POST["harga"];
    $stock=$_POST["stock"];

    $sql="INSERT INTO barang (barang,harga,stock) VALUES ('$barang',$harga,$stock)";
    $hasil=mysqli_query($koneksi,$sql);
}
$sql= "SELECT * FROM barang";
$hasil=mysqli_query($koneksi, $sql);
echo "<table border=2px>
<thead>
<th>
id
</th>
    <th>
    barang
    </th>
    <th>
     harga
    </th>
    <th>
    stock
    </th>
</thead>
<tbody>";
$i = 1;
while($row=mysqli_fetch_array($hasil)){
    echo"<tr>";
    echo "<td>" . $i++ . "</td>";
    echo "<td>" . $row[1]. "</td>";
    echo "<td>" . $row[2]. "</td>";
    echo "<td>" . $row[3]. "</td>";
    echo"</tr>";
}
echo "</tbody></table>";

?>