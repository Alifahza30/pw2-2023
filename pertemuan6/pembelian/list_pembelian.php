<?php 
    // include database connection
    require_once '../dbkoneksi.php';
?>

<?php 
    // select all data from table "produk"
    $sql = "SELECT * FROM pembelian";
    // execute the query
    $rs = $dbh->query($sql);
?>

<a class="btn btn-success" href="form_pembelian.php" role="button">Create Produk</a>

<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tanggal</th>
            <th>Nomor</th>
            <th>Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Vendor</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            // initialize counter
            $nomor = 1;
            // loop through the result set
            foreach($rs as $row) {
        ?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$row['tanggal']?></td>
            <td><?=$row['nomor']?></td>
            <td><?=$row['produk_id']?></td>
            <td><?=$row['jumlah']?></td>
            <td><?=$row['harga']?></td>
            <td><?=$row['vendor_id']?></td>
            <td>
                <!-- buttons to view, edit, and delete a product -->
                <a class="btn btn-primary" href="view_pembelian.php?id=<?=$row['id']?>">View</a>
                <a class="btn btn-primary" href="form_pembelian.php?id=<?=$row['id']?>">Edit</a>
                <a class="btn btn-primary" href="delete_pembelian.php?id=<?=$row['id']?>"
                onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['id']?>?')) {return false}"
                >Delete</a>
            </td>
        </tr>
        <?php 
            // increment counter
            $nomor++;   
            } 
        ?>
    </tbody>
</table>
