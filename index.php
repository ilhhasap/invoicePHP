<?php
    require('data.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ZHIDO LARIZ - TOKO AKSESORIS & HARDWARE KOMPUTER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
    * {
        font-family: 'SF Pro Display' !important;
    }

    body {
        background-color: #1e1e1e;
    }

    .alert .title {
        font-weight: 600;
        color: #333;
    }

    .alert .sub-title {
        font-weight: normal;
        color: #9F8F8F;
        font-size: 18px;
        letter-spacing: 1px;
    }

    .text {
        font-size: 18px;
    }

    table {
        border-radius: 10px;
    }
    </style>
</head>

<body>


    <div class=" mt-5" style="margin: 100px;padding: 60px;background-color: #ffffff; border-radius: 18px;">
        <div class="d-flex flex-row justify-content-between pt-1 align-items-center">
            <div class="d-flex flex-column text-start">
                <div class="mb-3">
                    <h2 class="fw-bold" style="color: #333333">Invoice #10</h2>
                </div>
                <div class="">
                    <h5 class="fw-bold mb-1 align-middle" style="color: #1e1e1e"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-geo-alt-fill text-danger me-2" viewBox="0 0 16 16"> <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" /> </svg></span>Zhido Lariz - Surakarta</h5>
                </div>
                <div class="">
                    <p class="" style="color: #333333">TOKO AKSESORIS & HARDWARE KOMPUTER</p>
                </div>
            </div>

            <div class="d-flex flex-column text-start">
                <div class="">
                    <pre class="text"><b>Nama Pembeli</b>   :  <?= $nama;?></pre>
                </div>
                <div class="">
                    <pre class="text"><b>Alamat</b>                  :  <?= $alamat;?></pre>
                </div>
            </div>
        </div>

        <hr style="border: 2px dashed #68717D; letter-spacing: 6px;">

        <table class="table table-light table-bordered table-striped" style="margin-top: 40px;">
            <thead>
                <tr class="table-dark">
                    <th scope="col" class="px-4 py-3">Nama Barang</th>
                    <th scope="col" class="px-4 py-3">Harga Satuan</th>
                    <th scope="col" class="px-4 py-3 text-center">Jumlah</th>
                    <th scope="col" class="px-4 py-3 text-end">Total bayar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($datas as $data) : ?>
                <?php $total = $data['jumlah'] * $data['hargaSatuan'];?>
                <tr>
                    <td scope="row" class="px-4 py-3"><?= $data['namaBarang']?></td>
                    <td class="px-4 py-3">Rp <?= number_format($data['hargaSatuan'])?></td>
                    <td class="px-4 py-3 text-center"><?= number_format($data['jumlah'])?></td>
                    <td class="px-4 py-3 text-end">Rp <?= number_format($total);?></td>
                </tr>
                <?php $totalAll[] = $total; $totals = array_sum($totalAll);?>
                <?php endforeach;?>

                <tr>
                    <td class="px-4 py-3"> </td>
                    <td class="px-4 py-3"> </td>
                    <td class="px-4 py-3"> </td>
                    <td class="px-4 py-3"> </td>
                </tr>

            </tbody>
            <tfoot>
                <tr>
                    <th scope="row" colspan="3" class="px-4 py-3">Total : </th>
                    <th class="px-4 py-3 table-warning text-end">Rp <?= number_format($totals);?></th>
                </tr>
            </tfoot>
        </table>

        <div class="row text-white pt-4">
            <h4 style="color: #68717D">"Terimakasih atas kunjungan Anda, dan semoga pelayanan kami memuaskan Anda"👋🏼
            </h4>
        </div>

        <div class="row text-end my-4 mb-5">
            <h5>Surakarta, 5 Oktober 2022</h5>
            <h5>Kasir,</h5>
        </div>
        <div class="row text-end mb-3">
            <h5><i>Drupadi</i></h5>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>