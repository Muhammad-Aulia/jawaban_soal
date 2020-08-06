<?php
include 'koneksi.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

    <title>Soal 5</title>
</head>

<body>





    <hr>

    <div class="container">
        <div class="row mt-3 justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center">Search </h1>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="serach name..." id="search">
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No Tlpn</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody id="tampil">
                    <?php
                    require_once 'koneksi.php';
                    $no = 1;
                    $query = mysqli_query($conn, "SELECT * FROM tb_user");
                    while ($row = mysqli_fetch_object($query)) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row->nama_user; ?></td>
                            <td><?= $row->email_user; ?></td>
                            <td><?= $row->no_tlpn; ?></td>
                            <td><?= $row->status; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</body>

<script type="text/javascript">
    $(document).ready(function() {
        $('#search').on('keyup', function() {
            $.ajax({
                type: 'POST',
                url: 'search.php',
                data: {
                    search: $(this).val()
                },
                cache: false,
                success: function(data) {
                    $('#tampil').html(data);
                }
            });
        });
    });
</script>

</html>