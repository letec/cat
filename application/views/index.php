<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title><?=SITE_NAME?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="建站 整站 微信公众号 小程序 API 软件开发 " name="description" />
    <meta content="深圳市智代猫科技有限公司" name="author" />
    <?php $this->load->view('templete/link'); // 头部加载 ?>
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="/static/plugins/slider-plugin/js/slider1.min.js"></script>
    <script type="text/javascript" src="/static/plugins/slider-plugin/js/slider2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/static/plugins/slider-plugin/css/settings.css" media="screen" />
</head>
<!-- END HEAD -->
<body>
    <div class="main-wrapper">
        <header id="ha-header" class="ha-header ha-header-hide ">
            <div class="ha-header-perspective">
                <div class="ha-header-front navbar navbar-default">
                    <div class="compressed">
                        <div class="navbar-header">
                            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle"
                                type="button">
                                <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                                    class="icon-bar"></span><span class="icon-bar"></span>
                            </button>
                        </div>
                        <?php $this->load->view('templete/menu'); // 菜单 ?>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
        </header>
        <div class="section ha-waypoint" data-animate-down="ha-header-hide" data-animate-up="ha-header-hide">
            <div role="navigation" class="navbar navbar-transparent navbar-top">
                <div class="container">
                    <div class="compressed">
                        <div class="navbar-header">
                            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle"
                                type="button">
                                <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                                    class="icon-bar"></span><span class="icon-bar"></span>
                            </button>
                        </div>
                        <?php $this->load->view('templete/menu'); // 菜单 ?>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!--BEGIN SLIDER -->
            <div class="tp-banner-container">
                <div class="tp-banner" id="home">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="5" data-masterspeed="700">
                            <!-- MAIN IMAGE -->
                            <img src="/static/img/bg/4.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center"
                                data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <div class="tp-caption mediumlarge_light_white_center sft tp-resizeme slider" data-x="center"
                                data-hoffset="-20" data-y="25" data-speed="500" data-start="800" data-easing="Power4.easeOut"
                                data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                                <h3 class="text-white custom-font title ">
                                    深圳智代猫网络科技<br>
                                    &nbsp;&nbsp;We do everything right
                                    <br />
                                </h3>
                            </div>
                            <div class="tp-caption sfb slider tp-resizeme slider" data-x="center" data-hoffset="0"
                                data-y="320" data-speed="800" data-start="1000" data-easing="Power4.easeOut"
                                data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                                <a href="/welcome/product" class="btn btn-info btn-lg m-r-10">了解业务</a>
                            </div>
                        </li>
                        <li data-transition="fade" data-slotamount="5" data-masterspeed="700">
                            <!-- MAIN IMAGE -->
                            <img src="/static/img/bg/1.jpg" alt="slidebg2" data-bgfit="cover" data-bgposition="center center"
                                data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <div class="tp-caption mediumlarge_light_white_center sft tp-resizeme slider" data-x="center"
                                data-hoffset="0" data-y="50" data-speed="500" data-start="800" data-easing="Power4.easeOut"
                                data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                                <h2 class="text-white custom-font title ">
                                    我们注重<br>
                                    责任 & 效率 & 灵活性
                                </h2>
                            </div>
                            <div class="tp-caption sfb slider tp-resizeme slider" data-x="center" data-hoffset="0"
                                data-y="320" data-speed="800" data-start="1000" data-easing="Power4.easeOut"
                                data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                                <a href="#" class="btn btn-info btn-lg  btn-large m-r-10">关于智代猫</a>
                            </div>
                            <div class="tp-caption fade slider tp-resizeme slider" data-x="center" data-hoffset="0"
                                data-y="360" data-speed="500" data-start="800" data-easing="Power4.easeOut" data-endspeed="300"
                                data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                                <a href="#" class="text-white m-r-10"></a>
                            </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="5" data-masterspeed="700">
                            <!-- MAIN IMAGE -->
                            <img src="/static/img/bg/7.jpg" alt="slidebg2" data-bgfit="cover" data-bgposition="center center"
                                data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <div class="tp-caption mediumlarge_light_white_center sft tp-resizeme slider" data-x="left"
                                data-hoffset="-110" data-y="0" data-speed="500" data-start="800" data-easing="Power4.easeOut"
                                data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                                <h2 class="text-white custom-font title ">一路同行</h2>
                            </div>
                            <div class="tp-caption sfb slider tp-resizeme slider" data-x="left" data-hoffset="-30"
                                data-y="135" data-speed="800" data-start="1000" data-easing="Power4.easeOut"
                                data-endspeed="300" data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">
                                <a href="#" class="btn btn-info btn-lg  btn-large m-r-10">联系我们</a>
                            </div>
                        </li>
                    </ul>
                    <div class="tp-bannertimer">
                    </div>
                </div>
            </div>
            <!-- END SLIDER -->
        </div>

        <div class="section grey">
            <div class="container">
                <div class="p-t-60 p-b-50">
                    <div id="testomonials" class="owl-carousel row">
                        <div class="item">
                            <div class="col-md-6  col-md-offset-3 text-center">
                                <h3 class="normal text-center">
                                    I have always received good service from the Frittt Templates. Timing and quality
                                    have always met my expectations and everything is communicated in a professional
                                    and timely manner.
                                </h3>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-6   col-md-offset-3 text-center">
                                <h3 class="normal text-center">
                                    We consider the Frittt Templates team a development partner who has proven to be
                                    creative in problem resolution, reliable in time commitments, and overall consistent
                                    in meeting our expectations.
                                </h3>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-6   col-md-offset-3 text-center">
                                <h3 class="semi-bold text-center">
                                    The work was above and beyond what I could have expected. Excellent service all
                                    the way around from start to finish. Keep up the GREAT work! Great job!
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="section white ha-waypoint" data-animate-down="ha-header-color" data-animate-up="ha-header-hide">
            <div class="container">
                <div class="p-t-60">
                    <div class="row">
                        <div class="col-md-12 feature-list ">
                            <div class="col-md-4 " data-ride="animated" data-animation="fadeIn" data-delay="300">
                                <i class="fa fa-archive fa-4x"></i>
                                <h4 class="title">
                                    整站建设
                                </h4>
                                <p>
                                    需求、设计、上线、托管、维护一站式服务
                                </p>
                            </div>
                            <div class="col-md-4" data-ride="animated" data-animation="fadeIn" data-delay="600">
                                <i class="fa fa-cog fa-4x"></i>
                                <h4 class="title">
                                    后期维护
                                </h4>
                                <p>
                                    全面的后期维护服务，出现问题仅需要联系我们。
                                </p>
                            </div>
                            <div class="col-md-4" data-ride="animated" data-animation="fadeIn" data-delay="900">
                                <i class="fa fa-share fa-4x"></i>
                                <h4 class="title">
                                    培训支持</h4>
                                <p>
                                    为您提供员工培训和技术支持。
                                </p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12 feature-list">
                            <div class="col-md-4 " data-ride="animated" data-animation="fadeIn" data-delay="1200">
                                <i class="fa fa-code fa-4x"></i>
                                <h4 class="title">
                                    高质量代码</h4>
                                <p>
                                    程式质量不仅仅体现在功能运作和性能上<br>
                                    它们的内在也是完美的
                                </p>
                            </div>
                            <div class="col-md-4" data-ride="animated" data-animation="fadeIn" data-delay="1500">
                                <i class="fa fa-asterisk fa-4x"></i>
                                <h4 class="title">
                                    兼容更新    
                                </h4>
                                <p>
                                    考虑到客户后期更新和扩展的需求<br>
                                    采用最灵活的方案。
                                </p>
                            </div>
                            <div class="col-md-4" data-ride="animated" data-animation="fadeIn" data-delay="1800">
                                <i class="fa fa-expand  fa-4x"></i>
                                <h4 class="title">
                                    可扩展性
                                </h4>
                                <p>
                                    渐进式的产品和服务，后期可以扩充功能或提高负载能力。
                                </p>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
            </div>
        </div>
        <div class="section gray">
            <div class="container">
                <div class="p-t-40 p-b-40  text-center">
                    <h3 class="text-center">
                        智代猫科技是您的技术合伙人，我们包办线上技术事务，以便于您可以专注于核心业务。
                    </h3>
                </div>
            </div>
        </div>
        <?php $this->load->view('templete/foot'); // 尾部加载 ?>
    </div>
    <?php $this->load->view('templete/load'); // js加载 ?>
</body>
</html>
