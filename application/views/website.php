<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title><?=SITE_NAME?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php $this->load->view('templete/link'); // 头部加载 ?>
</head>
<!-- END HEAD -->
<body>
    <div class="main-wrapper">
        <div role="navigation" class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="compressed">
                    <div class="navbar-header">
                        <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle"
                            type="button">
                            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                                class="icon-bar"></span><span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand compressed">
                            <img src="assets/img/logo_condensed.png" alt="" data-src="assets/img/logo_condensed.png"
                                data-src-retina="assets/img/logo2x.png" width="119" height="22" /></a>
                    </div>
                    <?php $this->load->view('templete/menu'); // 菜单 ?>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="section first white">
            <div class=" p-b-60">
                <div class="section grey p-t-20  p-b-20 m-b-50">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>Portfolio</h2>
                            </div>
                            <div class="col-md-6 p-t-20 xs-no-padding xs-p-l-20">
                                <div class="portfolio-filter">
                                    <ul id="portfolio-nav">
                                        <li class="current"><a href="#" data-filter="*">All</a></li>
                                        <li><a data-filter=".web" href="#">Web design</a></li>
                                        <li><a data-filter=".logo-design" href="#">Logo</a></li>
                                        <li><a data-filter=".branding" href="#">Branding</a></li>
                                        <li><a data-filter=".video" href="#">Video</a></li>
                                        <li><a data-filter=".photo" href="#">Photography</a></li>
                                    </ul>
                                    <!--END PORTFOLIO-NAV-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
                <div class="container">
                    <div class="portfolio-grid portfolioContainer ">
                        <ul id="thumbs" class="col3">
                            <li class="item web">
                                <div class="portfolio-image-wrapper">
                                    <img src="/static/img/gallery/1.jpg" alt="" />
                                    <div class="item-info-overlay">
                                        <div>
                                            <h3 class="text-white semi-bold p-t-60 project-title ">
                                                Web design</h3>
                                            <p class="project-description">
                                                One Pager</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <h4 class="text-dark no-margin p-t-10 title semi-bold">
                                        Web design</h4>
                                    <p>
                                        April 18</p>
                                </div>
                                <!--END ITEM-INFO-->
                                <div class="clearfix">
                                </div>
                            </li>
                            <li class="item branding">
                                <div class="portfolio-image-wrapper">
                                    <img src="/static/img/gallery/2.jpg" alt="" />
                                    <div class="item-info-overlay">
                                        <div>
                                            <a href="#" class="overlay-link"></a>
                                            <h3 class="text-white semi-bold p-t-60 project-title ">
                                                Profile Card</h3>
                                            <p class="project-description">
                                                Creative</p>
                                        </div>
                                    </div>
                                    <!--END ITEM-INFO-OVERLAY-->
                                </div>
                                <div class="item-info">
                                    <h4 class="text-dark no-margin p-t-10 title semi-bold">
                                        Profile Card</h4>
                                    <p>
                                        April 20</p>
                                </div>
                                <!--END ITEM-INFO-->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('templete/foot'); ?>
    </div>
    <?php $this->load->view('templete/load'); // js加载 ?>
    <script type="text/javascript" src="/static/plugins/jquery-isotope/jquery.isotope.js"></script>
</body>
</html>
