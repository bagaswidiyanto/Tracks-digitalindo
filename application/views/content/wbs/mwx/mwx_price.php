<!doctype html>
<html lang="en">

<head>
    <title>MWX</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
    /* #line_top:before {
            position: absolute;
            width: 100%;
            left: 0px;
            top: 0px;
            bottom: 0px;
            background: #00297B;
            z-index: 0;
            content: '';
            height: 15%;
        } */

    .topmob {
        padding-left: 2%;
        width: 68%;
    }

    #line_top:after {
        position: fixed;
        width: 31%;
        right: 0px;
        top: 0;
        bottom: 0px;
        background: #00297B;
        z-index: 1;
        content: '';
    }

    .card_grey {
        background: #00297B;
        padding-top: 20px;
        padding-bottom: 20px;
        border: 3px solid #00297B;
        border-radius: 10px;
    }


    .hp {
        position: fixed;
        width: 16%;
        right: 7%;
        top: 30%;
        z-index: 1;
    }

    .gp {
        width: 15%;
        position: fixed;
        padding-left: 15px;
        right: 8%;
        top: 40px;
        z-index: 1;
    }

    table td {
        vertical-align: top;
    }

    .text_gp {
        position: absolute;
        color: #fff;
        text-align: center;
        right: 4%;
        top: 17%;
        font-size: 20px;
    }

    .asp {
        position: absolute;
        width: 13%;
        border: 1px solid #fff;
        border-radius: 10px;
        top: 1%;
        left: 29%;
        z-index: -1;
    }

    .tracks {
        position: absolute;
        color: #00297B;
        left: 22%;
        top: 36px;
        font-weight: 600;
    }


    .control-label {
        margin-bottom: 0;
    }

    div.scrollmenu {
        overflow: auto;
        white-space: nowrap;
    }

    .scrollmenu {
        padding-top: 20px;
    }

    /* .scrollmenu .track {
        text-align: center;
        padding: 10px;
        font-size: 14px !important;
        width: 100%;
        height: 99vh;
    } */

    .fetched-data legend {
        border-bottom: 1px solid #e5e5e5;
    }

    .text-white {
        color: #fff;
    }

    .footer_bottom {
        /* position: fixed; */
        /* bottom: 0; */
        background: #fff;
        width: 100%;
    }

    .footer_bottom .crp {
        margin-left: 12%;
    }

    .table-ongkir .header-ongkir {
        text-align: left;
        background: #f3f3f3;
        padding-left: 10px;
    }

    /* Responsive */
    @media only screen and (max-width: 768px) {
        .gp {
            width: 0 !important;
        }


        .hp {
            width: 0 !important;
        }

        .asp {
            width: 19% !important;
            top: -7px !important;
            left: 77% !important;
        }

        #line_top:after {
            position: relative !important;
        }

        .kirim {
            padding-top: 20px;
        }



        .tracks {
            left: 19% !important;
            top: 14px !important;
        }

        .scrollmenu {
            width: 100% !important;
            margin-left: 0 !important;
        }

        .footer_bottom {
            margin-left: 0 !important;
        }

        .footer_bottom .crp {
            margin-left: 0;
            font-size: 14px;
        }

        .table-modal {
            font-size: 12px !important;
        }

        .fetched-data h3 {
            font-size: 20px !important;
        }
    }

    @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 1) {
        .gp {
            width: 17%;
            right: 63px;
            top: 9%;
        }

        .hp {
            top: 13%;
        }

        .asp {
            width: 20%;
            top: -2%;
            left: 25%;
        }

        .section-padding .topmob .section-title {
            font-size: 24px;
        }

        .section-padding .topmob .kirim .line_note {
            font-size: 10px;
            line-height: 16px;
        }

        .ui-autocomplete {
            width: 197px !important;
            font-size: 10px !important;
        }

        .table-track {
            width: 61%;
            margin-left: 37px;
        }

        .table-track .track {
            font-size: 12px !important;
        }

        .table-track .track .btn {
            font-size: 12px !important;
        }


        .table-ongkir .ongkir {
            font-size: 12px !important;
        }

        .table-ongkir .ongkir .btn {
            font-size: 12px !important;
        }
    }

    @media (min-width: 1200px) {
        .modal-xl {
            max-width: 90%;
        }
    }

    @media (min-width: 768px) {
        .section-title {
            font-size: 26px;
        }

        .form-group {
            margin-bottom: 0px;
            position: relative;
            z-index: 1;
            height: 146px;
        }

        .line_note {
            font-size: 10px;
        }
    }

    @media (max-width: 767px) {
        .topmob {
            padding: 0px 4%;
            width: 100%;
        }
    }
    </style>
</head>

<body>


    <div id="line_top"></div>
    <div>
        <!-- <img src="https://tracks-app.com/assets/img/icon_track_new.png" class="icon_tracks">
        <h2 class="tracks">TRACKS</h2> -->
        <img src="https://mwx.tracks-app.com/modul/company/foto/foto_WhatsApp Image 2022-04-01 at 13.04.54.jpeg"
            class="asp">
    </div>

    <img src="<?= base_url(); ?>assets/img/handphone.png" style="" class="hp">
    <!-- <p class="text_gp">Get in Google PlayStore<br>Segera dapatkan Progi Platform dan nikmati<br> pengalaman anda bersama kami</p> -->

    <img src="<?= base_url(); ?>assets/img/google paly.png" alt="" class="gp">

    <section class="about-us-advantage-wrap section-padding " style="padding-top: 15%;margin-bottom: 10%;">
        <div class="topmob" style="">
            <div class="row">
                <!-- /.col -->
                <div class="col-md-6 col-sm-12 kirim">
                    <div class="card_grey container">
                        <div class="leftborder">

                            <div class="section-heading">
                                <h2 class="section-title text-white">Cek Ongkir</h2>
                            </div>
                            <form id="cekTarif" method="get" action="" role="form">
                                <div class="form-group">
                                    <div class="form-group2">
                                        <label class="control-label text-white">Asal:</label>
                                        <input type="text" id="hint" name="asal"
                                            class="form-control input ui-autocomplete-input" maxlength="100"
                                            data-msg-required="Masukan Kota Asal" placeholder="Asal" required>
                                        <input type="hidden" id="asal" name="dari" class="form-control">
                                    </div>
                                    <div class="form-group2">
                                        <label class="control-label text-white">Tujuan:</label>
                                        <input type="text" id="hint2" name="ke"
                                            class="form-control input ui-autocomplete-input" maxlength="100"
                                            data-msg-required="Masukan Kota Tujuan" placeholder="Tujuan" required>
                                        <input type="hidden" id="tujuan" name="tujuan" class="form-control ">
                                    </div>
                                </div>
                                <div class="row-button">
                                    <input type="submit" onclick="showLoaderOngkir()" id="loadingOngkir" name="ongkir"
                                        class="btn btn-primary btn-flat btn-sm" value="Cek Ongkir">
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- /.col -->

                <div class="col-md-6 col-sm-12 kirim">
                    <div class="card_grey container">
                        <div class="leftborder">
                            <div class="section-heading">
                                <h2 class="section-title text-white">Cek Pengiriman</h2>
                            </div>
                            <form method="GET">
                                <div class="form-group ">
                                    <label for=""></label>
                                    <textarea class="form-control" id="awb" name="awb" rows="10" cols="0"
                                        placeholder="Masukan No. AWB / No. DO" style="height:68px"></textarea>
                                    <div class="line_note">
                                        <i class="text-white note">*Lacak sampai dengan 10 airwaybill, gunakan 'Enter'
                                            untuk memisahkan masing-masing airwaybill</i>
                                    </div>
                                </div>
                                <div class="row-button">
                                    <input type="submit" onclick="showLoaderAwb()" id="loadingAWB"
                                        class="btn btn-primary btn-flat btn-sm" value="Cek Pengiriman">
                                </div>
                            </form>
                        </div><!-- /.advantage-left-content -->
                    </div>
                </div>
            </div><!-- /.row -->
            <?php
            // Cek Ongkir
            if (isset($_GET['ongkir'])) {

                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://mwx.tracks-app.com/restapi/prices/progi/?key=300dfaa09d3079dbf9af803a6ae42209&dari=' . $_GET['dari'] . '&tujuan=' . $_GET['tujuan'] . '',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                    CURLOPT_HTTPHEADER => array(
                        'Cookie: PHPSESSID=or5eaperl225is9ns40bb0quq6'
                    ),
                ));

                $response = curl_exec($curl);

                curl_close($curl);
                $isiOngkir = json_decode($response);

            ?>



            <div class="scrollmenu table-ongkir">
                <div class="header-ongkir">
                    <table>
                        <tbody>
                            <tr>
                                <td width="20%">Asal</td>
                                <td width="5%">:</td>
                                <td><?= $_GET['asal'] ?></td>
                            </tr>
                            <tr>
                                <td width="20%">Tujuan</td>
                                <td width="5%">:</td>
                                <td><?= $_GET['ke'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <table class="table table-bordered table-responsive ongkir" border="0" width="100%"
                    style="text-align: center;padding:10px;">
                    <thead>
                        <tr style="background-color:#056cda;color:#fff; font-weight: bold;">
                            <td width="30%">Layanan</td>
                            <td width="20%">Berat Min.</td>
                            <td width="20%">KGP</td>
                            <td width="30%">KGS</td>
                            <td width="20%">Estimasi</td>
                        </tr>
                    </thead>
                    <?php
                        foreach ($isiOngkir->data as $value) {

                        ?>
                    <tbody>
                        <?php if ($value->Origin != 0 && $value->Destination != 0) { ?>
                        <td><?= $value->Layanan; ?></td>
                        <td><?= $value->minKG; ?></td>
                        <td><?= $value->KGP == '' ? 0 : number_format($value->KGP); ?></td>
                        <td><?= $value->KGS == '' ? 0 : number_format($value->KGS); ?></td>
                        <td><?= $value->Estimasi == '' ? '-' : $value->Estimasi; ?></td>
                        <?php } else { ?>
                        <!-- <td colspan="5"> Tidak ada data yang ditemukan !!!</td> -->
                        <?php } ?>
                    </tbody>
                    <?php } ?>
                </table>
                <br>
            </div>
            <?php
            }






            // TRACKING
            if (isset($_GET['awb'])) {

                $arr_kon  = preg_split('/\r\n|[\r\n]/',  $_GET['awb']);
                if (isset($arr_kon)) {
                    $jmlAWB = count($arr_kon);
                    $i = 0;
                    $koray = "";
                    $ttl = 0;
                    foreach ($arr_kon as $row1) {

                        if ($row1 != '') {
                            if ($i == 0) {
                                $koray .= "'" . $row1 . "'";
                            } else {
                                $koray .= ",'" . $row1 . "'";
                            }
                            $ttl += 1;
                            $i++;
                        } else {
                            $koray .= '';
                            $ttl += 0;
                        }
                    }
                    $kon_array = $koray;
                    $jml = $ttl;
                }

                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://mwx.tracks-app.com/restapi/trackingweb/android/progi/?key=300dfaa09d3079dbf9af803a6ae42209&awb=' . $kon_array,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                    CURLOPT_HTTPHEADER => array(
                        'Cookie: PHPSESSID=or5eaperl225is9ns40bb0quq6'
                    ),
                ));

                $response = curl_exec($curl);

                curl_close($curl);
                $isi = json_decode($response);

            ?>
            <?php if ($_GET['awb'] != '') { ?>
            <div class="scrollmenu table-track">
                <table class="table table-bordered table-responsive track" border="0">
                    <thead>
                        <tr style="background-color:#056cda;color:#fff; font-weight: bold;">
                            <th>No.</th>
                            <th>AWB No.</th>
                            <th width="22%">Origin</th>
                            <th width="40%">Destination</th>
                            <th>Item</th>
                            <th>Weight</th>
                            <th>Status</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                $no = 1;
                                foreach ($isi->data as $key) {
                                ?>

                        <?php if ($no > 10) { ?>
                        <style>
                        .scrollmenu .track {
                            text-align: center;
                            padding: 10px;
                            font-size: 14px !important;
                            width: 100%;
                            height: 99vh;
                        }
                        </style>
                        <?php } else { ?>
                        <style>
                        .scrollmenu .track {
                            text-align: center;
                            padding: 10px;
                            font-size: 14px !important;
                            width: 100%;
                        }
                        </style>
                        <?php } ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $key->Konid; ?></td>
                            <td><?= $key->asal; ?></td>
                            <td><?= $key->tujuan; ?></td>
                            <td><?= $key->Koli; ?></td>
                            <td><?= $key->Kilo; ?></td>
                            <td><?= $key->statusDiterima == 0 ? 'On Proccess' : ($key->statusDiterima == 1 ? 'Back to Office' : 'Accepted'); ?>
                            </td>
                            <td>
                                <a href="" data-toggle='modal' data-target="#modal-tracking<?= $key->Konid; ?>"
                                    class="btn btn-warning btn-sm btn-flat detil"
                                    title="Detail <?= $key->Konid; ?>">Detail</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <br>
            </div>

            <?php
                    foreach ($isi->data as $modalKey) {

                    ?>
            <div class="modal fade" id="modal-tracking<?= $modalKey->Konid; ?>" role="dialog">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">TRACKING</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="fetched-data">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <center>
                                            <h3>Tracking AWB No: <?= $modalKey->Konid; ?></h3>
                                            <fieldset>
                                                <legend>Keterangan Pengirim</legend>
                                                <table class="table-modal">
                                                    <tbody>
                                                        <tr>
                                                            <td width="4%">No. Resi</td>
                                                            <td width="1%" align="center">:</td>
                                                            <td width="10%"><?= $modalKey->Konid; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="4%">Nama Pengirim</td>
                                                            <td width="1%" align="center">:</td>
                                                            <td width="10%"><?= $modalKey->namaPengirim; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="4%">Kota Asal</td>
                                                            <td width="1%" align="center">:</td>
                                                            <td width="10%"><?= $modalKey->asal; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="4%">No DO</td>
                                                            <td width="1%" align="center">:</td>
                                                            <td width="10%"><?= $modalKey->No_DO; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="4%">Instruksi Khusus</td>
                                                            <td width="1%" align="center">:</td>
                                                            <td width="10%">
                                                                <?= $modalKey->Keterangan == '' ? '' : $modalKey->Keterangan; ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </fieldset>
                                            <br>
                                            <fieldset>
                                                <legend>Keterangan Penerima</legend>
                                                <table class="table-modal">
                                                    <tbody>
                                                        <tr>
                                                            <td width="4%">Nama Penerima</td>
                                                            <td width="1%" align="center">:</td>
                                                            <td width="10%"><?= $modalKey->namaPenerima; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="4%">Kota Tujuan</td>
                                                            <td width="1%" align="center">:</td>
                                                            <td width="10%"><?= $modalKey->tujuan; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="4%">Jumlah Barang</td>
                                                            <td width="1%" align="center">:</td>
                                                            <td width="10%"><?= $modalKey->Koli; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="4%">Berat</td>
                                                            <td width="1%" align="center">:</td>
                                                            <td width="10%"><?= $modalKey->Kilo; ?> KG</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="4%">Volume</td>
                                                            <td width="1%" align="center">:</td>
                                                            <td width="10%"><?= $modalKey->Volume; ?></td>
                                                        </tr>

                                                        <?php

                                                                    $curlDimensi = curl_init();

                                                                    curl_setopt_array($curlDimensi, array(
                                                                        CURLOPT_URL => 'https://mwx.tracks-app.com/restapi/trackingweb/transaction/dimensi/?key=300dfaa09d3079dbf9af803a6ae42209&awb=' . $modalKey->Konid,
                                                                        CURLOPT_RETURNTRANSFER => true,
                                                                        CURLOPT_ENCODING => '',
                                                                        CURLOPT_MAXREDIRS => 10,
                                                                        CURLOPT_TIMEOUT => 0,
                                                                        CURLOPT_FOLLOWLOCATION => true,
                                                                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                                                        CURLOPT_CUSTOMREQUEST => 'GET',
                                                                        CURLOPT_HTTPHEADER => array(
                                                                            'Cookie: PHPSESSID=or5eaperl225is9ns40bb0quq6'
                                                                        ),
                                                                    ));

                                                                    $responseDimensi = curl_exec($curlDimensi);

                                                                    curl_close($curlDimensi);
                                                                    $isiDimensi = json_decode($responseDimensi);
                                                                    ?>
                                                        <tr>
                                                            <td width="4%">Perincian volume</td>
                                                            <td width="1%" align="center">:</td>
                                                            <td width="10%">
                                                                <?php
                                                                            $no = 1;
                                                                            foreach ($isiDimensi->data as $modalKeyDimensi) {
                                                                            ?>
                                                                Koli <?= $no++; ?> : P:
                                                                <?= number_format($modalKeyDimensi->Panjang); ?> L:
                                                                <?= number_format($modalKeyDimensi->Lebar); ?> T:
                                                                <?= number_format($modalKeyDimensi->Tinggi); ?> <br>
                                                                <?php } ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="4%">Terberat</td>
                                                            <td width="1%" align="center">:</td>
                                                            <td width="10%"><?= $modalKey->kgCharged; ?> KG</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="4%">Payment</td>
                                                            <td width="1%" align="center">:</td>
                                                            <td width="10%"><?= $modalKey->billingType; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="4%">service</td>
                                                            <td width="1%" align="center">:</td>
                                                            <td width="10%"><?= $modalKey->serviceName; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="4%">Total ongkir</td>
                                                            <td width="1%" align="center">:</td>
                                                            <td width="10%">Rp. <?= number_format($modalKey->Totbi); ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </fieldset>
                                            <br>
                                            <fieldset>
                                                <legend>Informasi Penerima Barang</legend>
                                                <table class="table-modal">
                                                    <tbody>
                                                        <tr>
                                                            <td width="4%">Status</td>
                                                            <td width="1%" align="center">:</td>
                                                            <td width="10%">
                                                                <?= $modalKey->statusDiterima == 0 ? 'On Proccess' : ($modalKey->statusDiterima == 1 ? 'Back to Office' : 'Accepted'); ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="4%">Diterima Oleh</td>
                                                            <td width="1%" align="center">:</td>
                                                            <td width="10%"><?= $modalKey->Diterima; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="4%">Tanggal Diterima</td>
                                                            <td width="1%" align="center">:</td>
                                                            <?php if ($modalKey->statusDiterima == 2) { ?>
                                                            <td width="10%">
                                                                <?= date("d-M-Y", strtotime($modalKey->Tgl_Diterima)); ?>
                                                            </td>
                                                            <?php } else { ?>
                                                            <td></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <td width="4%">Foto</td>
                                                            <td width="1%" align="center">:</td>
                                                            <td width="10%">
                                                                <?php if ($modalKey->picture == "") { ?>
                                                                <img src="https://fastindoweb.digitalindo.co.id/website/assets/img_fastindo/no.jpg"
                                                                    alt="" width="50%">
                                                                <?php } else { ?>
                                                                <div class="row">
                                                                    <div class="col-lg-5">
                                                                        <img src="https://asp.tracks-app.com/uploads/<?= $modalKey->picture; ?>"
                                                                            alt="" width="50%">
                                                                    </div>
                                                                    <div class="col-lg-2" style="align-self: center;">
                                                                        <p>Ttd</p>
                                                                    </div>
                                                                    <div class="col-lg-5">
                                                                        <img src="https://asp.tracks-app.com/uploads/<?= $modalKey->ttd; ?>"
                                                                            alt="" width="50%">
                                                                    </div>
                                                                </div>
                                                                <?php } ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </fieldset>
                                            <br>
                                            <fieldset>
                                                <legend>Tracking</legend>
                                                <table border="1" class="table-modal">
                                                    <thead>
                                                        <tr style="background-color: #00297B; color: white;">
                                                            <th width="20%" style="padding-left: 8px;">Tanggal</th>
                                                            <th style="padding-left: 8px;">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php

                                                                    $curlLog = curl_init();

                                                                    curl_setopt_array($curlLog, array(
                                                                        CURLOPT_URL => 'https://mwx.tracks-app.com/restapi/tracking/detail/android/progi/?key=300dfaa09d3079dbf9af803a6ae42209&awb=' . $modalKey->Konid,
                                                                        CURLOPT_RETURNTRANSFER => true,
                                                                        CURLOPT_ENCODING => '',
                                                                        CURLOPT_MAXREDIRS => 10,
                                                                        CURLOPT_TIMEOUT => 0,
                                                                        CURLOPT_FOLLOWLOCATION => true,
                                                                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                                                        CURLOPT_CUSTOMREQUEST => 'GET',
                                                                        CURLOPT_HTTPHEADER => array(
                                                                            'token_gateway: QDQYzUDndtpvqV3EUQK9kThygEr5j49Z',
                                                                            'token_user: 8w8gnPSh91L4hGMnooAKSdw0Bc3pshrj',
                                                                            'user: mobilev2',
                                                                            'Content-Type: application/json',
                                                                            'puskesmas: 31710002',
                                                                            'Cookie: PHPSESSID=or5eaperl225is9ns40bb0quq6'
                                                                        ),
                                                                    ));

                                                                    $responseLog = curl_exec($curlLog);

                                                                    curl_close($curlLog);
                                                                    $isiLog = json_decode($responseLog);


                                                                    foreach ($isiLog->data as $key) { ?>
                                                        <tr>
                                                            <td style="padding-left: 8px;">
                                                                <?= $key->day . ', ' . $key->tanggal . ' ' . $key->waktu; ?>
                                                            </td>
                                                            <td style="padding-left: 8px;"><?= $key->Status; ?></td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </fieldset>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <?php } ?>
            <?php } else { ?>
            <h3 class="text-center mt-5">Silahkan input No.AWB/No.DO terlebih dahulu</h3>
            <?php } ?>
            <?php } ?>
        </div><!-- /.container -->
    </section>



    <div class="footer_bottom">
        <div class="container">
            <p class="crp">© 2022 <a href="https://tracks-app.com/" target="_blank">Tracks</a> Application | Powered by
                <a href="https://digitalindo.co.id/" target="_blank">Digitalindo</a>
            </p>
        </div>
    </div>
    <!-- JQUERY UI -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />

    <style>
    .ui-autocomplete {
        max-height: 200px;
        overflow-y: auto;
        background-color: #c8ba37;
        /* prevent horizontal scrollbar */
        overflow-x: hidden;
        /* add padding to account for vertical scrollbar */
        padding-right: 20px;
        z-index: 1000;
    }

    .ui-autocomplete {
        position: absolute;
        cursor: default;
    }

    .ui-autocomplete {
        display: none;
        width: 305px;
        background: #FFF;
    }
    </style>


    <script type="text/javascript">
    function showLoaderOngkir() {
        if ($('#hint').val() != "" && $('#hint2').val() != "") {
            $("#loadingOngkir").LoadingOverlay("show");
        } else {
            $("#loadingOngkir").LoadingOverlay("hide", true);
        }
    }

    function showLoaderAwb() {
        if ($('#awb').val() != "") {
            $("#loadingAWB").LoadingOverlay("show");
        } else {
            $("#loadingAWB").LoadingOverlay("hide", true);
        }
    }

    $(document).ready(function() {
        const params = new Proxy(new URLSearchParams(window.location.search), {
            get: (searchParams, prop) => searchParams.get(prop),
        });
        if (params.ongkir) {
            $("#loadingOngkir").LoadingOverlay("hide", true);

            $("#loadingAWB").LoadingOverlay("hide", true);

        };
    });

    $(document).ready(function() {
        base_url = '<?= base_url(); ?>';
        $("#hint").autocomplete({
            source: base_url + "autocomplete/searchMwx/" + $("#hint").val(),
            select: function(event, ui) {
                event.preventDefault();
                $("#hint").val(ui.item.label); // display the selected text
                $("#asal").val(ui.item.value); // save selected id to hidden input
            },
            focus: function(event, ui) {
                event.preventDefault();
                $("#hint").val(ui.item.label);
            },

            minLength: 3
        });


        $("#hint2").autocomplete({
            source: base_url + "autocomplete/searchMwx1/" + $("#hint").val(),
            select: function(event, ui) {
                event.preventDefault();
                $("#hint2").val(ui.item.label); // display the selected text
                $("#tujuan").val(ui.item.value); // save selected id to hidden input
            },
            focus: function(event, ui) {
                event.preventDefault();
                $("#hint2").val(ui.item.label);
            },

            minLength: 3
        });

    });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js">
    </script>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>