<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title><?=SITE_NAME?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php $this->load->view('templete/link'); ?>
    
    <!-- END CSS TEMPLATE -->
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
                    </div>
                    <?php $this->load->view('templete/menu'); ?>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div id="cbp-so-scroller" class="cbp-so-scroller section white ha-waypoint green-icons"
            data-animate-down="ha-header-color" data-animate-up="ha-header-hide">
            <section class="cbp-so-section">
                <figure class="cbp-so-side cbp-so-side-left">
                    <img src="/static/img/Retina.png" alt="img01">
                </figure>
                <article class="cbp-so-side cbp-so-side-right text-center middle">
                    <div class="row">
                        <div class="col-md-12 p-t-80 col-vlg-8 col-vlg-offset-2">
                            <i class="fa fa-arrows-alt fa-4x"></i>
                            <h1 class="m-b-20">
                                <span class="semi-bold">全</span> 栈</h1>
                            <p>
                                前端页面 后端 API对接 <br>
                                公众号 小程序 <br>
                                后续运维 技术支持 <br>
                            </p>
                            <a href="javascript:" class="bold">Learn More</a>
                        </div>
                    </div>
                </article>
            </section>
            <section class="cbp-so-section">
                <article class="cbp-so-side cbp-so-side-left text-center middle">
                    <div class="row">
                        <div class="col-md-12 p-t-40 col-vlg-8 col-vlg-offset-2">
                            <i class="fa fa-heart-o fa-4x"></i>
                            <h1 class="m-b-20">
                                创 <span class="semi-bold">业</span></h1>
                            <p>根据您的需求，为您推荐合适的技术，使得方案达到最高性价比。</p>
                            <p>
                                我们是如此渴望您获得成功，您的成功就是我们的成功。
                            </p>
                            <a href="javascript:" class="bold">Learn More</a>
                        </div>
                    </div>
                </article>
                <figure class="cbp-so-side cbp-so-side-right">
                    <img src="/static/img/Stressfree.png" alt="img01">
                </figure>
            </section>
            <section class="cbp-so-section">
                <figure class="cbp-so-side cbp-so-side-left">
                    <img src="/static/img/Front.png" alt="img01">
                </figure>
                <article class="cbp-so-side cbp-so-side-right text-center middle">
                    <div class="row">
                        <div class="col-md-12 p-t-80 col-vlg-8 col-vlg-offset-2">
                            <i class="fa fa-thumbs-o-up fa-4x"></i>
                            <h1 class="m-b-20">
                                <span class="semi-bold">技</span> 术</h1>
                            <p>
                                多年经验的开发团队 <br>
                                精通PHP,GOLANG,JAVASCRIPT,HTML5等技术 <br>
                                深刻理解线上运维，服务稳定，高可用。
                            </p>
                            <a href="javascript:" class="bold">Learn More</a>
                        </div>
                    </div>
                </article>
            </section>
            <section class="cbp-so-section">
                <article class="cbp-so-side cbp-so-side-left text-center middle">
                    <div class="row">
                        <div class="col-md-12 p-t-80 col-vlg-8 col-vlg-offset-2">
                            <i class="fa fa-check-circle-o fa-4x"></i>
                            <h1 class="m-b-20">
                                <span class="semi-bold">理</span> 念</h1>
                            <p>
                                我们深信事业的走向取决于人 <br>
                                事情是具体的每个人做出来的 <br>
                                我们始终坚持结果导向
                            </p>
                            <a href="javascript:" class="bold">Learn More</a>
                        </div>
                    </div>
                </article>
                <figure class="cbp-so-side cbp-so-side-right">
                    <img src="/static/img/condensed.png" alt="img01">
                </figure>
            </section>
        </div>
        <?php $this->load->view('templete/foot'); ?>
    </div>
    <?php $this->load->view('templete/load'); ?>
    <script src="/static/plugins/onescroll/js/classie.js"></script>
    <script src="/static/plugins/onescroll/js/cbpScroller.js"></script>
    <script type="text/javascript" src="/static/plugins/jquery-nicescroll/jquery.nicescroll.min.js"></script>
    <script src="/static/plugins/modernizr.custom.js"></script>
    <script>
        new cbpScroller(document.getElementById('cbp-so-scroller')); 
    </script>
</body>
</html>
