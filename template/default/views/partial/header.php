<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="OXyj9TMKJKnBpSONrquIijXL7dnVr8ofcx9xaGKysJY"/>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title><?= $this->load->get_var('title') ?></title>
    <meta name="google-site-verification" content="5-fC8EeC_1gqsok3CneADtweHcnmDZWpksaveAPb8Bg"/>
    <meta name="description" content="<?= $this->load->get_var('seo_description') ?>"/>
    <meta name="keywords" content="<?= $this->load->get_var('seo_keyword') ?>"/>
    <link rel="canonical" href="<?= ($this->load->get_var('seo_url')) ? $this->load->get_var('seo_url') : current_url() ?>"/>
    <!--This meta only for Facebook-->
    <meta property="og:image" content="<?= $this->load->get_var('seo_image') ?>"/>
    <meta property="og:url" content="<?= ($this->load->get_var('seo_url')) ? $this->load->get_var('seo_url') : current_url() ?>"/>
    <meta property="og:title" content="<?= $this->load->get_var('title') ?>"/>
    <meta property="og:description" content="<?= $this->load->get_var('seo_description') ?>"/>
    <meta property="og:site_name" content="<?= $this->load->get_var('site_name') ?>"/>
    <meta property="fb:app_id" content="872365952794421">
    <!--End Meta for Facebook-->

    <!--Meta for Twitter-->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="<?= $this->load->get_var('site_name') ?>"/>
    <meta name="twitter:title" content="<?= $this->load->get_var('title') ?>"/>
    <meta name="twitter:description" content="<?= $this->load->get_var('seo_description') ?>"/>
    <meta name="twitter:creator" content="@Tâm Điểm">
    <meta name="twitter:image" content="<?= $this->load->get_var('seo_image') ?>"/>

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="<?= $this->load->get_var('title') ?>"/>
    <meta itemprop="description" content="<?= $this->load->get_var('seo_description') ?>"/>
    <meta itemprop="image" content="<?= $this->load->get_var('seo_image') ?>"/>

    <!-- Bootstrap -->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400,700&subset=latin,vietnamese" rel='stylesheet' type='text/css'>

    <link href="<?= base_url() ?>assets/front/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/front/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>assets/front/css/responsive.css">
    <!--Slider-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/front/plugin/flexisel/css/style.css">

    <style type="text/css">
        .carousel-fade .carousel-inner.subpage .item img {
            min-height: 240px;
            max-height: 240px;
        }
    </style>

    <!--Font Awesome-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        var site_url = '<?=base_url()?>';
    </script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-75148480-1', 'auto');
        ga('send', 'pageview');

    </script>

</head>
<body>
<div class="block-header">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center">
                <a href="<?php echo base_url() ?>" class="logo"><img src="<?= base_url() ?>assets/front/images/logo.png" class="img-responsive"/></a>

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="main-nav">
                            <?php echo modules::run('widget/general_main_nav'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php if ($this->router->fetch_class() == 'welcome') : ?>
    <?php
    $this->db->where(array('published' => 1, 'subPage' => 0));
    $this->db->order_by('order', 'asc');
    $banners = $this->db->get('bigbanner')->result();
    ?>
    <div class="container-fluid" style="padding:0">
        <div class="row">
            <div class="col-xs-12">
                <div id="banner">
                    <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <?php foreach ($banners as $row) : ?>
                                <div class="item">
                                    <a href="<?= $row->linkTo ?>"><img src="<?= cover_image_path($row->image) ?>" alt=""></a>
                                </div>
                            <?php endforeach ?>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="background: #191919">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="slider-feature">
                        <ul id="flexiselDemo3" style="display:none">
                            <?php
                            $this->db->select('alias, title, intro, image, content_type');
                            $this->db->where(array('is_hot' => 1, 'published' => 1));
                            $hots = $this->db->get('resource')->result();
                            ?>
                            <?php if (count($hots) > 0) : ?>
                                <?php foreach ($hots as $row) : ?>
                                    <?php
                                    if ($row->content_type == 'news_item') {
                                        $url = site_url('tin-tuc/' . $row->alias);
                                    } elseif ($row->content_type == 'cate_service') {
                                        $url = site_url('dich-vu/' . $row->alias);
                                    } elseif ($row->content_type == 'product_item') {
                                        $url = site_url('san-pham/' . $row->alias);
                                    }

                                    if (empty($row->image)) {
                                        $image = 'http://dummyimage.com/130x70/4d494d/686a82.gif&text=No Image';
                                    } else {
                                        $image = $row->image;
                                    }
                                    ?>
                                    <li><a href="<?= $url ?>" data-toggle="tooltip" title="<?= word_limiter($row->intro, 50) ?>">
                                            <img src="<?= $image ?>"/></a>
                                    </li>
                                <?php endforeach; endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php else : ?>
    <?php
    $route = $this->router->fetch_class();
    $method = $this->router->fetch_method();
    $segment = $this->uri->segment(2);

    if ($route == 'page' && $segment == 'ly-do-chon-trung-dung-media') {
        $belongToPage = 'ly-do-chon-td';
    } elseif ($route == 'page' && $method == 'contact') {
        $belongToPage = 'contact';
    } elseif ($route == 'page' && ($method == 'faq' || $segment == 'dien-thoai-ho-tro' || $segment == 'so-do-duong-di')) {
        $belongToPage = 'support';
    } else if ($route == 'service' && $method == 'index') {
        $belongToPage = 'san-pham';
    } else if ($route == 'service' && $method == 'item') {
        $belongToPage = $segment ? $segment : 'gioi-thieu';
    } elseif ($route == 'news') {
        $belongToPage = 'tin-tuc';
    } else {
        $belongToPage = 'gioi-thieu';
    }

    $this->db->where(array('published' => 1, 'subPage' => 1, 'belongToPage' => $belongToPage));
    $this->db->order_by('order', 'asc');
    $this->db->limit(1);
    $banners = $this->db->get('bigbanner')->result();
    ?>
    <div class="container-fluid" style="padding:0">
        <div class="row">
            <div class="col-xs-12">
                <div id="banner">
                    <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner subpage" role="listbox">
                            <?php foreach ($banners as $row) : ?>
                                <div class="item">
                                    <a href="<?= $row->linkTo ?>"><img src="<?= cover_image_path($row->image) ?>" alt=""></a>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php endif ?>
