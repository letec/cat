<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title><?=SITE_NAME?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <?php $this->load->view('templete/link'); ?>
</head>
<!-- END HEAD -->
<body >
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
                    <?php $this->load->view('templete/menu'); // 菜单 ?>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="section grey text-center m-t-60 p-t-40 p-b-40" id="banner-footer">
            <h2 class="normal m-b-10">我们希望听到您的反馈</h2>
            <p>发送一段咨询，我们会尽快给您答复。</p>
        </div>
        <div class="section white">
            <div class="container">
                <div class=" p-b-60">
                    <div class="row p-t-30">
                        <div class="col-md-6 col-sm-6">
						<form id="contact_form">
                            <div class="row form-row">
                                <div class="col-md-10">
                                    <input name="guestName" id="txtLastName" type="text" class="form-control" placeholder="您的称呼">
                                </div>
                            </div>
                            <div class="row form-row">
                                <div class="col-md-10">
                                    <input name="company" id="txtCompany" type="text" class="form-control" placeholder="您代表的公司或组织">
                                </div>
                            </div>
                            <div class="row form-row">
                                <div class="col-md-10">
                                    <input name="emailAddress" id="txtEmailAddress" type="text" class="form-control" placeholder="您的电子邮件地址">
                                </div>
                            </div>
                            <div class="row form-row">
                                <div class="col-md-10">
                                    <textarea id="txtDesc" name="message" type="text" class="form-control" placeholder="编辑消息" rows="8"></textarea>
                                </div>
                            </div>
                            <div class="row form-row">
                                <div class="col-md-10">
                                    <button id="submit_btn" type="button" class="btn btn-primary btn-cons">发送</button>
                                </div>
                            </div>
						</form>
                        </div>
                        <div class="col-md-6 feature-list">
                            <h4 class="title custom-font text-black no-margin p-b-10">业务 & 售后</h4>
                            <p class="no-margin"></p>
                            <h2 class="custom-font text-black no-margin">
                                <?=TEL?>
                            </h2>
                            <section class="p-t-20 p-b-20">
                                <h4 class="title custom-font text-black">ADDRESS</h4>
                                <ul class="address-list">
                                    <li>
                                        <i class="fa fa-map-marker"></i><strong>地址:</strong> 
                                        <?=ADDR?>
                                    </li>
                                    <li><i class="fa fa-wechat"></i><strong>微信:</strong> (九州志)
                                        mixdran
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        <strong>Email:</strong> 
                                        <a href="mailto:<?=EMAIL?>">mail@example.com</a>
                                    </li>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('templete/foot'); ?>
    </div>
    <?php $this->load->view('templete/load'); ?>
    <script>
        $('#submit_btn').click(function(){
            var post = $('#contact_form').serialize();
            $.ajax({
                url: '/message/input',
                type: 'post',
                data: post,
                success: function(ret){
                    alert(ret);
                }
            })
        })
    </script>
</body>
</html>