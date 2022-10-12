<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php foreach ($this->db->query("SELECT * FROM tbl_navigationtrack WHERE status = 1")->result() as $n) { ?>
    <?php if ($this->uri->segment(1) == $n->slug) {
            $segment1 = $n->title . ' | ' . $n->metaTitle;
            $metaKey = $n->metaKeywords;
            $metaDes = $n->metaDescription;
        } ?>
    <?php } ?>
    <!-- Site Metas -->
    <?php if ($this->uri->segment(2) != 'baca') { ?>
    <title><?= $segment1; ?> </title>
    <meta name="keywords" content="<?= $metaKey; ?>">
    <meta name="description" content="<?= $metaDes; ?>">
    <?php } ?>

    <?php
    if ($this->uri->segment(2) == 'baca') {
        $meta = $this->db->get_where('tbl_posts', array('slug' => $this->uri->segment(3)))->row();
        echo '<title>' . $website->metaTitle . ' | ' . strtoupper($meta->metaTitle) . '</title>
        <meta name="keywords" content="' . $meta->metaKeywords . $website->metaKeywords . '">
        <meta name="description" content="' . $meta->metaDescription . $website->metaDescription . '">
        <meta property="og:title" content="' . $meta->metaTitle . '" />
        <meta property="og:description" content="' . $meta->metaDescription . $website->metaDescription . '" />
        <meta property="og:image" content="https://digitalindo.co.id/admin/upload/news_post/' . $meta->image . '" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="300" />
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="' . base_url() . 'Berita/baca/' . $meta->slug . '">
        <meta name="twitter:title" content="' . $meta->metaTitle . '">
        <meta name="twitter:description" content="' . $meta->metaDescription . $website->metaDescription . '">
        <meta name="twitter:image" content="https://digitalindo.co.id/admin/upload/news_post/' . $meta->image . '">';
    }
    ?>

    <!-- <link rel="manifest" href="<?= base_url(); ?>assets/site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/img/icon_track_new.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/gijgo.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/slicknav.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>assets/css/responsive.css"> -->

    <!-- Aos Animation -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/aos/aos.css">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<?= base_url(); ?>assets/https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
    <!-- header-start -->

    <?php if ($header) echo $header; ?>
    <?php if ($middle) echo $middle; ?>
    <?php if ($footer) echo $footer; ?>

</body>

</html>