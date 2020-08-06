<?php
if (isset($_POST['search'])) {
    require_once 'koneksi.php';
    $no = 1;
    $search = $_POST['search'];
    $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE 
                            nama_user LIKE '%" . $search . "%' OR
                            email_user LIKE '%" . $search . "%' OR
                            no_tlpn LIKE '%" . $search . "%' OR
                            status LIKE '%" . $search . "%'");
    while ($row = mysqli_fetch_object($query)) {
?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row->nama_user; ?></td>
            <td><?= $row->email_user; ?></td>
            <td><?= $row->no_tlpn; ?></td>
            <td><?= $row->status; ?></td>
        </tr>
<?php }
} ?>