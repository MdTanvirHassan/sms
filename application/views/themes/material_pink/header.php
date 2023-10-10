<header>
    <link href="<?php echo base_url(); ?>backend/toast-alert/toastr.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>backend/" rel="stylesheet" />
    <script src="<?php echo base_url(); ?>backend/toast-alert/toastr.js"></script>
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">

    <link href="font/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <style type="text/css">
        form .form-bottom button.btn {
            min-width: 105px;
        }

        form .form-bottom .input-error {
            border-color: #d03e3e;
            color: #d03e3e;
        }

        form.gauthenticate-form {
            display: none;
        }

        .titles {
            font-size: 30px;
        }

        body {
            font-family: 'SolaimanLipi', Arial, sans-serif !important;
            font-weight: 400;
            font-size: 16px;
            font-size: 1rem;
            line-height: 1.6em;
            color: #999999;
            box-sizing: border-box;
            padding: 0;
            margin: 0px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #000 !important;
            font-family: "SolaimanLipi";
        }

        p {
            line-height: 1.5rem;
            font-family: "SolaimanLipi";
        }

        ul {
            list-style: none;
            float: left;
            width: 100%;
            padding: 0;
            padding-left: 0px !important;
        }

        ul li {
            /* display: inline-block; */
        }

        .dropdown-menu {
            animation: 0.5s slideup;
        }

        @keyframes slideup {
            from {
                transform: translateY(10%);
            }

            to {
                transform: translateY(0);
            }
        }

        .dropdown-menu {
            width: 200px;
            border-radius: 0;
        }

        .dropdown-menu li a.dropdown-item:hover {
            color: #fff;
        }

        .header {
            padding: 15px 0;

            text-align: center;
        }

        /* .header-bg{
    box-shadow: 0px -2px 6px 0px rgba(0,0,0,0.5);
  } */
        .bg-color {
            background-color: #034F72;
            padding: 0px !important;
        }

        .navbar-wrapper .navbar ul li {
            border-right: 1px solid #fff;
        }

        .navbar-wrapper .navbar ul li a:hover {
            background-color: #74010D;
        }

        .nav-item .nav-link.active {
            background-color: #74010D;
        }

        .header img {
            width: 130px;
        }

        .school-name h1 {
            font-size: 30px;
            font-weight: 600;
        }

        .school-name h3 {
            font-size: 22px;
        }

        .school-name h4 {
            font-size: 20px;
        }

        ul li a.nav-link {
            padding: 8px 23px !important;
            color: #fff;
        }

        .title-section .top-marquee {
            background-color: #ededed;
            height: 45px;
        }

        .carousel-inner {
            background-repeat: no-repeat;
            background-position: 50%;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            margin: auto;
        }

        .carousel-item {
            height: 430px;
        }

        .carousel-item img {
            background-size: cover;
            background-position: 100%;
            background-repeat: no-repeat;
            min-width: 100%;
            min-height: 100%;
        }

        .marquee-title {
            position: absolute;
            background-color: #005de7;
            padding: 10px 10px;
            color: #fff;
            z-index: 1;
        }

        .title-section .top-marquee ul li a {
            padding: 10px 50px !important;
            text-decoration: none;
            color: #FA0000;
            display: inline-block;
            font-size: 14px;
        }

        .title-section .top-marquee ul li a:hover {
            color: #087C04;
        }

        .title-section .top-marquee ul li {
            display: inline-block;
        }

        .content-section {
            margin: 50px 0;
        }

        .history-school h3 {
            font-size: 18px;
            font-weight: 600;
            margin: 0px 0 15px;
            background-image: linear-gradient(120deg, #0245AF 0%, #138CDC 100%);
            display: inline-block;
            width: 100%;
            padding: 15px 5px;
            color: #fff !important;
        }

        .title-info h5,
        .title-info-two h5,
        .title-info-three h5,
        .title-info-fore h5 {
            font-size: 15px;
            color: #fff !important;
            padding-top: 6px;
            font-weight: 500;
        }

        .title-info {
            padding: 7px 7px 7px 8px;
            background-color: transparent;
            background-image: linear-gradient(120deg, #A63247 0%, #DA526A 100%);
        }

        .title-info-two {
            padding: 7px 7px 7px 7px;
            background-color: transparent;
            background-image: linear-gradient(120deg, #07894C 0%, #38CE86 100%);
        }

        .title-info-three {
            padding: 7px 7px 7px 8px;
            background-color: transparent;
            background-image: linear-gradient(118deg, #985E04 0%, #D5901D 100%);
        }

        .title-info-fore {
            padding: 7px 7px 7px 7px;
            background-color: transparent;
            background-image: linear-gradient(120deg, #1D77B2 0%, #4CA7E2 100%);
        }

        .clearfix-card .float-start img {
            width: 100px;
            padding: 10px;
            margin: 18px;
        }

        .image-size {
            width: 100%;
            height: 250px !important;
        }

        .card-wrapper {
            margin: 15px 0;
            text-align: center;
            border-radius: 5px;
            border: 1px solid #ccc;
            display: inline-block;
            width: 100%;
        }

        .card-wrapper h5 {
            background-color: #0bd3de;
            color: #fff !important;
            padding: 15px 0;
        }

        .card-wrapper ul {
            padding: 15px;
        }

        .card-wrapper ul li a {
            display: inline-block;
            width: 100%;
            text-decoration: none;
            border-top: 1px solid #ccc;
            padding: 10px 0;
            color: #000;
        }

        .card-wrapper ul li a:hover {
            background: #0bd3de;
            color: #fff;
        }

        .footer {
            background-color: #034F72;
            padding: 4% 0%!important;
        }

        .footer .left img {
            width: 150px;
            margin: auto;
        }

        .footer .left-center h3 {
            color: #fff !important;
            text-transform: uppercase;
            font-size: 18px;
            font-weight: 700;
        }

        .footer .left-center {
            color: #fff;
        }

        .footer .left-center ul,
        .footer .right ul {
            padding-left: 0px !important;
        }

        .footer .right-center,
        .footer .right {
            padding-left: 0px !important;

        }

        .footer .right-center ul li,
        .footer .right ul li {
            list-style: inside;
            color: #fff;
        }

        .footer .right-center ul li a,
        .footer .right ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 15px;
            padding: 12px 0;
        }

        .footer .right-center ul li a:hover,
        .footer .right ul li a:hover {
            color: #ffe601;
        }

        .small-footer {
            background-color: #036390;
            padding: 15px 0px;
            color: #fff;
        }

        .list-button ul li a {
            text-decoration: none;
            padding: 10px 10px;
            display: inline-block;
            width: 100%;
            background-color: #D4172A;
            margin: 0 0 15px;
            color: #fff;
            font-weight: 500;
            font-size: 15px;
        }

        .list-button ul li a:hover {
            background-color: #087c04;
        }

        .list-button ul li a i {
            margin-right: 15px;
            font-size: 25px;
        }

        .notice-board h3,
        .official-link h3 {
            font-size: 20px;
            font-weight: 600;
            margin: 10px 0;
            background-image: linear-gradient(120deg, #0245AF 0%, #138CDC 100%);
            display: inline-block;
            width: 100%;
            padding: 15px 5px;
            color: #fff !important;
        }

        .official-link ul {
            background-color: #EBEBEB;
            margin: -20px 0px 20px 0px;
            padding: 21px 17px 23px 17px;
        }

        .official-link ul li a i {
            font-size: 20px;
            margin-right: 15px;
        }

        .official-link ul li a {
            text-decoration: none;
            color: #54595f;
            margin-left: 15px;
            font-size: 14px;
            padding: 7px 0;
            display: inline-block;
        }

        .content-notice {
            display: inline-block;
            height: 400px;
        }

        .content-notice {
            height: 400px;
        }

        .content-notice ul li a {
            text-decoration: none;
            padding: 15px 0;
            display: inline-block;
            border-bottom: 1px solid #ccc;
            width: 100%;
        }

        /*managing comate start*/
        .testimonial-item {
            background-image: linear-gradient(120deg, #0245AF 0%, #138CDC 100%);
            padding: 70px 30px;
            margin: 30px 15px;
            float: left;
        }

        .testimonial-item h4 {
            color: #fff !important;
        }

        .testimonial-clients,
        .teachers-sliders {
            overflow: hidden;
        }

        .testimonial-clients .testimonial-item .clearfix .float-start img,
        .teachers-sliders .testimonial-item .clearfix .float-start img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }

        .testimonial-clients .testimonial-item .clearfix .float-end p,
        .teachers-sliders .testimonial-item .clearfix .float-end p {
            font-size: 13px;
            text-transform: uppercase;
            color: #fff;
            font-weight: 500;
        }

        .testimonial-clients .testimonial-item .clearfix .float-start i,
        .teachers-sliders .testimonial-item .clearfix .float-start i {
            position: relative;
            bottom: 0px;
            font-size: 20px;
            font-weight: 500;
            color: #fff;
            background-color: #0779e4;
            padding: 7px;
            border-radius: 25px;
            left: -25px;
            top: 25px;
        }

        .testimonial-clients .testimonial-item .clearfix .float-end,
        .teachers-sliders .testimonial-item .clearfix .float-end {
            margin-top: 20px;
        }

        .testimonial-item .testimonial-p {
            margin-top: 30px;
            color: #fff !important;
        }

        .slick-center {
            background-color: #0779e4;
            color: #fff;
        }

        .slick-center .float-end p,
        .slick-center .float-end h4 {
            color: #fff !important;
        }

        .slick-center.testimonial-item .clearfix .float-start i {
            background-color: #fff !important;
            color: #0779e4;
        }

        .testimonial-clients .slick-prev,
        .teachers-sliders .slick-prev {
            margin-top: 27.9%;
            position: absolute;
            left: 45%;
            width: 80px;
            background-color: #0779e4;
            border: 0;
            border-radius: 25px;
            color: #fff;
            font-size: 12px;
        }

        .testimonial-clients .slick-next {
            left: 52%;
            position: relative;
            width: 80px;
            background-color: #0779e4;
            border: 0;
            border-radius: 25px;
            color: #fff;
            font-size: 12px;
            margin-top: 6px;
        }

        .achievements-wrapper {
            margin: 100px 0;
        }

        .achievements-items img {
            width: 100%;
        }

        .achievements-items {
            border: 1px solid #ccc;
            margin: 10px 0px !important;
            padding: 10px 0;
        }

        .teachers-bg {
            border-radius: 5px;
            padding: 15px 0;
        }

        .teachers-sliders .slick-center {
            background-color: #0779e4;
            color: #000;
        }

        .techers-wrap {
            height: auto;
            width: 100%;
            border: 1px solid #ccc;
            text-align: center;
            padding: 0;
        }

        .techers-wrap img {
            width: 100%;
            height: 300px;
        }

        .teachers-dig p {
            color: #fff !important;
        }

        .teachers-sliders .testimonial-item {
            background-color: transparent;
            padding: 0;
            margin: 15px;
            float: left;
        }

        .techers-wrap .teachers-dig h4 {
            color: #fff !important;
        }

        .teachers-sliders .slick-next {
            left: 52%;
            position: relative;
            width: 80px;
            background-color: #0779e4;
            border: 0;
            border-radius: 25px;
            color: #fff;
            font-size: 12px;
            margin-top: 15px;
        }

        .content-principle h1 {
            text-transform: uppercase;
            font-weight: 600;
        }

        .content-principle h3,
        .content-principle h4 {
            text-transform: uppercase;
            font-weight: 600;
            font-size: 16px;
            color: #9A462D !important;
        }

        .priciple-images ul li {
            float: left;
            list-style: none;
        }

        .priciple-images ul li a {
            width: 50px;
            height: 50px;
            display: inline-block;
            margin: 13px;
            text-align: center;
            padding: 9px 0px;
            background-color: #034f72;
            color: #fff;
            font-size: 20px;
            border-radius: 7px;
        }

        .teachers-item .card-body strong {
            text-align: center;
            text-decoration: none;
            font-size: 20px;
            font-weight: 600;
            display: inline-block;
            width: 100%;
        }

        .teachers-item .card-body span {
            text-align: center;
            text-decoration: none;
            font-size: 15px;
            display: inline-block;
            width: 100%;
            color: #ccc;
        }

        .teachers-images ul {
            display: inline-block;
            width: 100%;
        }

        .teachers-images ul li {
            float: left;
            list-style: none;
        }

        .teachers-images ul li a {
            width: 40px;
            height: 40px;
            display: inline-block;
            margin: 13px 18px;
            text-align: center;
            padding: 6px 0px;
            background-color: #034f72;
            color: #fff;
            font-size: 17px;
            border-radius: 50%;
        }

        .teachers-images ul li a:hover {
            background-color: #b0aeae;
            color: #000;
        }

        .clearfix-card .float-end {
            width: 280px;
        }

        .clearfix-card ul li {
            margin: 7px 0;
        }

        .clearfix-card ul li a {
            text-decoration: none;
            color: #000;
            font-size: 14px;
            padding: 5px;
        }

        .clearfix-card ul li a:hover {
            color: #087c04;
        }

        .navbar {

            min-height: 35px;
            margin-bottom: 1px;
            border: 1px solid transparent;
            border-radius: 0%;
        }

        @media screen and (max-width: 480px) {
            .titles {
                font-size: 12px;
                font-weight: bold;
            }

            .contents {
                display: flex !important;
            }

            .sub-title {
                font-size: 10px;
            }
        }
        }
    </style>

    <?php $currency_symbol = $this->customlib->getSchoolCurrencyFormat(); ?>
    <div class="container" style="box-shadow: 5px 10px 25px #ccc;  ">
        <div class="contents " style="justify-content: space-between;  ">
            <div class="col-3 col-sm-3">
                <a class="logo" href="<?php echo base_url(); ?>"><img
                        src="<?php echo base_url($front_setting->logo); ?>" alt=""></a>
            </div><!--./col-md-4-->

            <div class="col-6 col-sm-6" style="text-align: center;">
                <h2 class='titles'>ফেমাস ইন্সটিটিউট হাই স্কুল</h2>
                <span class='sub-title'>ব্রাহ্মন্দী,নরসিংদী</span><br>
                <span class='sub-title'>স্থাপিত: 2003 , ইন নং ১৩৮৪৩৩</span>
            </div>
            <div class="col-3 col-sm-3" style="text-align: right;">

                <a class="logo logo-hide" href="<?php echo base_url(); ?>"><img
                        src="<?php echo base_url(); ?>uploads/images/Board_of_Intermediate_and_Secondary_Education_Dhaka_Monogram.svg.png"
                        alt=""></a>


            </div><!--./col-md-8-->
        </div><!--./row-->
    </div><!--./container-->

    <div class="navborder">
        <div class="container">
            <div class="row">
                <nav class="navbar">
                    <div class="navbar-header" >
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3" style="margin-top: -10px!important;">
                            <span class="sr-only"><?php echo $this->lang->line('toggle_navigation'); ?></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="navbar-collapse-3">
                        <?php 
if($layout_type){
?>
  <ul class="nav navbar-nav" style='font-size: 14px;'>
                            <?php
                            foreach ($main_menus as $menu_key => $menu_value) {
                            
                                $submenus = false;
                                $cls_menu_dropdown = "";
                                $menu_selected = "";             
                                
                                if ($menu_value['page_slug'] == $active_menu) {
                                    $menu_selected = "active";
                                }
                                if (!empty($menu_value['submenus'])) {
                                    $submenus = true;
                                    $cls_menu_dropdown = "dropdown";
                                }
                                ?>

                                <li class="<?php echo $menu_selected . " " . $cls_menu_dropdown; ?>" >
                                    <?php
                                    if (!$submenus) {
                                        $top_new_tab = '';
                                        $url = '#';
                                        if ($menu_value['open_new_tab']) {
                                            $top_new_tab = "target='_blank'";
                                        }
                                        if ($menu_value['ext_url']) {
                                            $url = $menu_value['ext_url_link'];
                                        } else {
                                            $url = site_url($menu_value['page_url']);
                                        }
                                        ?>

                                        <a href="<?php echo $url; ?>" <?php echo $top_new_tab; ?>><?php echo $menu_value['menu']; ?></a>

                                        <?php
                                    } else {
                                        $child_new_tab = '';
                                        $url = '#';
                                        ?>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $menu_value['menu']; ?> <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <?php
                                            foreach ($menu_value['submenus'] as $submenu_key => $submenu_value) {
                                                if ($submenu_value['open_new_tab']) {
                                                    $child_new_tab = "target='_blank'";
                                                }
                                                if ($submenu_value['ext_url']) {
                                                    $url = $submenu_value['ext_url_link'];
                                                } else {
                                                    $url = site_url($submenu_value['page_url']);
                                                }
                                                ?>
                                                <li><a href="<?php echo $url; ?>" <?php echo $child_new_tab; ?> ><?php echo $submenu_value['menu'] ?></a></li>
                                                <?php
                                            }
                                            ?>

                                        </ul>
                                        <?php
                                    }
                                    ?>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
<?php
}else{
    ?>
    <ul class="nav navbar-nav">
        <li class="active" >
            <a href="<?php echo site_url('online_admission'); ?>" ><?php echo $this->lang->line('online_admission'); ?></a>
        </li>
    </ul>
<?php
}
 ?>
                      
                    </div><!-- /.navbar-collapse -->
                </nav><!-- /.navbar -->
            </div>
        </div>   
    </div> 

</header>
</div>

<!---   Guest Signup  --->
<div id="myModal" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-header-small">
                <button type="button" class="close closebtnmodal" data-dismiss="modal">&times;</button>
                <h4>
                    <?php echo $this->lang->line('guest_registration') ?>
                </h4>
            </div>
            <form action="<?php echo base_url() . 'course/guestsignup' ?>" method="post" class="signupform"
                id="signupform">
                <div class="modal-body">
                    <div class="form-group">
                        <label>
                            <?php echo $this->lang->line('name'); ?>
                        </label><small class="req"> *</small>
                        <input type="text" class="form-control reg_name" name="name" id="name" autocomplete="off">
                        <span class="text-danger" id="error_refno"></span>
                    </div>
                    <div class="form-group mb10">
                        <label>
                            <?php echo $this->lang->line('email_id'); ?>
                        </label><small class="req"> *</small>
                        <input type="text" class="form-control reg_email" name="email" id="email" autocomplete="off">
                        <span class="text-danger" id="error_dob"></span>
                    </div>
                    <div class="form-group mb10">
                        <label>
                            <?php echo $this->lang->line('password'); ?>
                        </label><small class="req"> *</small>
                        <input type="password" class="form-control reg_password" name="password" id="password"
                            autocomplete="off">
                        <span class="text-danger" id="error_dob"></span>
                    </div>
                    <div id="load_signup_captcha"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modalclosebtn btn  mdbtn" onclick="openmodal()">
                        <?php echo $this->lang->line('login'); ?>
                    </button>
                    <button type="submit" id="signupformbtn" class="onlineformbtn mdbtn">
                        <?php echo $this->lang->line('signup'); ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!---   Guest Login  --->
<div id="loginmodal" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header modal-header-small">
                <button type="button" class="close closebtnmodal" data-dismiss="modal">&times;</button>
                <h4 class=><?php echo $this->lang->line('login') ?> </h4>
            </div>
            <form action="<?php echo site_url('course/guestlogin') ?>" method="post" class="loginform" id="loginform">
                <div class="modal-body">
                    <div class="form-group mb10">
                        <label>
                            <?php echo $this->lang->line('email_id'); ?>
                        </label><small class="req"> *</small>
                        <input type="text" class="form-control login_email" name="username" id="username"
                            autocomplete="off">
                        <span class="text-danger" id="error_dob"></span>
                    </div>
                    <div class="form-group mb10">
                        <label>
                            <?php echo $this->lang->line('password'); ?>
                        </label><small class="req"> *</small>
                        <input type="password" class="form-control login_password" name="password" id="password"
                            autocomplete="off">
                        <input type="hidden" class="form-control" name="checkout_status" id="checkout_status"
                            autocomplete="off">
                        <span class="text-danger" id="error_dob"></span>
                    </div>
                    <div id="load_login_captcha"></div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="pull-left forgotbtn" data-toggle="modal" data-target="#forgotmodal"><i
                            class="fa fa-key"></i>
                        <?php echo $this->lang->line('forgot_password'); ?>
                    </a>

                    <button type="button" class="signup modalclosebtn btn mdbtn" data-dismiss="modal">
                        <?php echo $this->lang->line('signup'); ?>
                    </button>
                    <button type="submit" id="loginformbtn" class="onlineformbtn mdbtn">
                        <?php echo $this->lang->line('submit'); ?>
                    </button>
                </div>
            </form>
            <form action="<?php echo site_url('course/user_submit_login') ?>" method="post" class="gauthenticate-form"
                id="gauthenticate-form">
                <div class="modal-body">

                    <div class="form-group mb10">
                        <label>Verification Code</label><small class="req"> *</small>
                        <input type="text" class="form-control gauth_code" name="gauth_code" id="gauth_code"
                            autocomplete="off">

                        <span class="text-danger" id="error_gauth_code"></span>
                    </div>

                </div>
                <div class="modal-footer">

                    <a href="#" class="pull-left forgotbtn" data-toggle="modal" data-target="#forgotmodal"><i
                            class="fa fa-key"></i>
                        <?php echo $this->lang->line('forgot_password'); ?>
                    </a>

                    <button type="button" class="signup modalclosebtn btn mdbtn" data-dismiss="modal">
                        <?php echo $this->lang->line('signup'); ?>
                    </button>
                    <button type="submit" id="loginformbtn" class="onlineformbtn mdbtn"
                        data-loading-text="<i class='fa fa-spinner fa-spin '></i> wait...">
                        <?php echo $this->lang->line('submit'); ?>
                    </button>



                </div>
            </form>
        </div>
    </div>
</div>

<div id="forgotmodal" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header modal-header-small">
                <button type="button" class="close closebtnmodal" data-dismiss="modal">&times;</button>
                <h4 class=><?php echo $this->lang->line('forgot_password'); ?></h4>
            </div>
            <form action="#" method="post" class="loginform" id="forgotform">
                <div class="modal-body">
                    <div class="form-group mb10">
                        <label>
                            <?php echo $this->lang->line('email_id'); ?>
                        </label><small class="req"> *</small>
                        <input type="email" class="form-control" name="username" id="email" autocomplete="off">
                        <span class="text-danger" id="error_email"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modalclosebtn btn  mdbtn" onclick="openmodal()">
                        <?php echo $this->lang->line('login'); ?>
                    </button>

                    <button type="submit" id="forgotformbtn" class="onlineformbtn mdbtn">
                        <?php echo $this->lang->line('submit'); ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#myModal,#forgotmodal,#loginmodal').modal({
            backdrop: 'static',
            keyboard: false,
            show: false
        });
    });
</script>
<script>

    $(document).on('change', '.currency_list', function (e) {
        let currency_id = $(this).val();
        $.ajax({
            type: 'POST',
            url: base_url + 'welcome/changeCurrencyFormat',
            data: { 'currency_id': currency_id },
            dataType: 'json',
            beforeSend: function () {

            },
            success: function (data) {
                window.location.reload();
            },
            error: function (xhr) { // if error occured

            },
            complete: function () {

            }

        });
    });
</script>


<script>
    $(document).ready(function () {

        $('.testimonial-clients').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 3,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });

        $('.teachers-sliders').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 4,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    });


</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
<script src="font/slick/slick.min.js" integrity="" crossorigin="anonymous"></script>
<script src="js/custom.js" integrity="" crossorigin="anonymous"></script>