<!doctype html>
<html lang="en">

<head>
    <title>TERBANG</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        #line_top:before {
            position: absolute;
            width: 100%;
            left: 0px;
            top: 0px;
            bottom: 0px;
            background: #00297B;
            z-index: 0;
            content: '';
            height: 15%;
        }

        /* #line_top:after {
            position: absolute;
            width: 31%;
            right: 0px;
            top: 0;
            bottom: 0px;
            background: #00297B;
            z-index: 0;
            content: '';
        } */

        .card_grey {
            background: #cfcfcf;
            padding-top: 20px;
            padding-bottom: 20px;
            border: 3px solid #b6b6b6;
            border-radius: 10px;
        }


        .control-label {
            margin-bottom: 0;
        }

        div.scrollmenu {
            overflow: auto;
            white-space: nowrap;
        }

        .asp {
            position: absolute;
            width: 10%;
            border: 1px solid #fff;
            border-radius: 10px;
            top: 12%;
            left: 30%;
            z-index: -1;
        }

        .tracks {
            position: absolute;
            color: #ffffff;
            left: 22%;
            top: 36px;
            font-weight: 600;
        }

        .icon_tracks {
            position: absolute;
            width: 6%;
            border: 1px solid #fff;
            border-radius: 10px;
            top: 10px;
            left: 15%;
        }

        @media only screen and (max-width: 768px) {
            #line_top:before {
                height: 10% !important;
            }

            .icon_tracks {
                width: 11% !important;
                top: 8px !important;

            }

            .tracks {
                left: 27% !important;
                top: 14px !important;
            }

            .asp {
                width: 25% !important;
                top: 7% !important;
                left: 38% !important;
            }

            .section-heading {
                padding-top: 35% !important;
            }

            table {
                width: 90% !important;
            }
        }

        /* Desktop */
        @media only screen and (min-width: 992px) {
            .asp {
                top: 16% !important;
                left: 44% !important;
            }
        }
    </style>
</head>

<body>


    <div id="line_top"></div>
    <div>
        <!-- <img src="https://tracks-app.com/assets/img/icon_track_new.png" class="icon_tracks"> -->
        <!-- <h2 class="tracks">TRACKS</h2> -->
        <img src="https://terbangexp.tracks-app.com/modul/company/foto/foto_terbang.png" class="asp">
    </div>

    <?php
    $tracking = $this->uri->segment(4);


    $curlLog = curl_init();

    curl_setopt_array($curlLog, array(
        CURLOPT_URL => 'https://terbangexp.tracks-app.com/restapi/tracking/detail/android/progi/?key=753453551d67646fb16eaf3c43457405&awb=' . $tracking,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Cookie: PHPSESSID=cssu0374oscj9vi0i4di2ic7l5'
        ),
    ));

    $responseLog = curl_exec($curlLog);

    curl_close($curlLog);
    $isiLog = json_decode($responseLog);




    // TRACKING
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://terbangexp.tracks-app.com/restapi/tracking/android/progi/?key=753453551d67646fb16eaf3c43457405&awb=" . $tracking,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => "",
        CURLOPT_HTTPHEADER => array(
            "Postman-Token: 3d65553e-934a-41fa-9a3b-0b7a4df6aad7",
            "cache-control: no-cache",
            "key: 753453551d67646fb16eaf3c4a6a7405"
        ),
    ));


    $response = curl_exec($curl);
    curl_close($curl);
    $isi = json_decode($response);

    ?>

    <style>
        .section-heading {
            padding-top: 25%;
            padding-bottom: 100px;
            text-align: center;
        }

        legend {
            border-bottom: 1px solid #e5e5e5;
        }
    </style>

    <div class="container">
        <div class="section-heading">
            <h2>TRACKING</h2>
            <br><br>
            <?php foreach ($isi->data as $key) { ?>

                <center>
                    <h3>Tracking AWB No: <?= $key->Konid; ?></h3>
                    <fieldset>
                        <legend>Keterangan Pengirim</legend>
                        <table style="width: 50%;">
                            <tbody>
                                <tr>
                                    <td width="3%">No. Resi</td>
                                    <td width="1%">:</td>
                                    <td width="10%"><?= $key->Konid; ?></td>
                                </tr>
                                <tr>
                                    <td width="3%">Nama Pengirim</td>
                                    <td width="1%">:</td>
                                    <td width="10%"><?= $key->namaPengirim; ?></td>
                                </tr>
                                <tr>
                                    <td width="3%">Kota Asal</td>
                                    <td width="1%">:</td>
                                    <td width="10%"><?= $key->asal; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </fieldset>
                    <br>
                    <fieldset>
                        <legend>Keterangan Penerima</legend>
                        <table style="width: 50%;">
                            <tbody>
                                <tr>
                                    <td width="3%">Nama Penerima</td>
                                    <td width="1%">:</td>
                                    <td width="10%"><?= $key->namaPenerima; ?></td>
                                </tr>
                                <tr>
                                    <td width="3%">Kota Tujuan</td>
                                    <td width="1%">:</td>
                                    <td width="10%"><?= $key->tujuan; ?></td>
                                </tr>
                                <tr>
                                    <td width="3%">Jumlah Barang</td>
                                    <td width="1%">:</td>
                                    <td width="10%"><?= $key->Koli; ?></td>
                                </tr>
                                <tr>
                                    <td width="3%">Berat</td>
                                    <td width="1%">:</td>
                                    <td width="10%"><?= $key->Kilo; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </fieldset>
                    <br>
                    <fieldset>
                        <legend>Informasi Penerima Barang</legend>
                        <table style="width: 50%;">
                            <tbody>
                                <tr>
                                    <td width="3%">Status</td>
                                    <td width="1%">:</td>
                                    <td width="10%"><?= $key->statusDiterima == 0 ? 'On Proccess' : ($key->statusDiterima == 1 ? 'Back to Office' : 'Accepted'); ?></td>
                                </tr>
                                <tr>
                                    <td width="3%">Diterima Oleh</td>
                                    <td width="1%">:</td>
                                    <td width="10%"><?= $key->Diterima; ?></td>
                                </tr>
                                <tr>
                                    <td width="3%">Tanggal</td>
                                    <td width="1%">:</td>
                                    <td width="10%"><?= $key->Tgl_Diterima; ?></td>
                                </tr>
                                <tr>
                                    <td width="3%">Foto</td>
                                    <td width="1%">:</td>
                                    <td width="10%"></td>
                                </tr>
                            </tbody>
                        </table>
                    </fieldset>
                    <br>
                    <fieldset>
                        <legend>Tracking</legend>
                        <div class="scrollmenu">
                            <table style="width: 100%;" border="1">
                                <thead>
                                    <tr style="background-color: #00297B; color: white;">
                                        <th width="20%" style="padding-left: 8px;">Tanggal</th>
                                        <th style="padding-left: 8px;">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($isiLog->data as $key) { ?>
                                        <tr>
                                            <td style="padding-left: 8px;"><?= $key->day . ', ' . $key->tanggal . ' ' . $key->waktu; ?></td>
                                            <td style="padding-left: 8px;"><?= $key->Status; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </fieldset>
                    <br><br>
                    <a href="<?= base_url(); ?>wbs/terbang">Back</a>
                </center>
            <?php } ?>
        </div>
    </div>


    <div class="footer_bottom" style="margin-left: 19%">
        <div class="container">
            <p class="crp">© 2022 <a href="https://tracks-app.com/" target="_blank">Tracks</a> Application | Powered by <a href="https://digitalindo.co.id/" target="_blank">Digitalindo</a> </p>
        </div>
    </div>






    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>