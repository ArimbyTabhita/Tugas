<form action="" method="post">
    Nama Pelanggan
    <input type="text" nama="namapelanggan" placeholder="nama pelanggan">
    <br>
    Alamat :
    <input type="text" name="alamat" placeholder="alamat pelanggan">
    <br>
    Telepon
    <input type="number" name="telepon" placeholder="Nomor telepon">
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
    $NamaPelanggan=$_POST["NamaPelanggan"];
    $Alamat=$_POS["Alamat"];
    $NoTlp=$_POS["NoTlp"];

    $sql="INSERT INTO pelanggan (NamaPelanggan,Alamat,NoTlp) VALUES ('$NamaPelanggan','$Alamat',$NoTlp)";
    $hasil=mysqli_query($koneksi,$sql);
}
$sql= "SELECT * FROM pelanggan";
$hasil=mysqli_query($koneksi, $sql);
echo "<table border=2px>
<thead>
<th>
id
</th>
    <th>
    namapelanggan
    </th>
    <th>
     alamat
    </th>
    <th>
    telepon
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