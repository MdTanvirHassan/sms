<header>
	<link href="<?php echo base_url(); ?>backend/toast-alert/toastr.css" rel="stylesheet"/>
    <script src="<?php echo base_url(); ?>backend/toast-alert/toastr.js"></script>
    <link href="font/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

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

.titles{
    font-size: 30px;
}

body {
    font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen-Sans, Ubuntu, Cantarell, Helvetica Neue, sans-serif;
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
.dropdown-menu{
    width: 200px;
    border-radius: 0;
}
.dropdown-menu li a.dropdown-item:hover{
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

@media screen and (max-width: 480px) {
    .titles{
    font-size: 12px;
    font-weight: bold;
    }
    .contents{
        display: flex;
    }
    .sub-title{
        font-size: 10px;
    }
}
}
</style>

    <?php $currency_symbol = $this->customlib->getSchoolCurrencyFormat();?>
    <div class="container">
            <div class="row contents" style="justify-content: space-between;">
                <div class="col-md-3 col-sm-3">
                    <a class="logo" href="<?php echo base_url(); ?>"><img src="<?php echo base_url($front_setting->logo); ?>" alt=""></a>
                </div><!--./col-md-4-->

                <div class="col-md-6 col-sm-3" style="text-align: center;">
                <h2 class='titles'>ফেমাস ইন্সটিটিউট হাই স্কুল</h2>
                <span class='sub-title'>ব্রাহ্মন্দী,নরসিংদী</span><br>
                <span class='sub-title'>স্থাপিত: 2003 , ইন নং ১৩৮৪৩৩</span>
                </div>
                <div class="col-md-3 col-sm-3" style="text-align: right;">

                
                    
                
                    
                    <a class="logo logo-hide" href="<?php echo base_url(); ?>"><img src="<?php echo base_url($front_setting->logo); ?>" alt=""></a>
               
                    
                </div><!--./col-md-8-->
            </div><!--./row-->
        </div><!--./container-->
    
                        <d<section class="header">
        <div class="container">
            <div class="row header-bg">
                
                
                
                <div class="col-md-12 my-3">
                    <div class="navbar-wrapper">
                        <nav class="navbar navbar-expand-lg navbar-dark bg-color">
                            <div class="container-fluid">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="http://localhost/school/index.php">প্রচ্ছদ</a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                প্রশাসন
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="http://localhost/school/principle.php">প্রধান শিক্ষক</a></li>
                                                <li><a class="dropdown-item" href="http://localhost/school/teachers.php">শিক্ষকবৃন্দ</a></li>
                                                <li><a class="dropdown-item" href="#">পরিচালনা পরিষদ</a></li>
                                                <li><a class="dropdown-item" href="#">ম্যানেজিং কমিটি</a></li>
                                                <li><a class="dropdown-item" href="#">কর্মকর্তা কর্মচারী</a></li>
                                                <li><a class="dropdown-item" href="#">প্রাক্তন প্রধান শিক্ষক</a></li>
                                                <li><a class="dropdown-item" href="#">কৃতি শিক্ষার্থী</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">শিক্ষার্থীদের তথ্য</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="http://localhost/school/studentInfo_classSix.php">৬ষ্ঠ শ্রেণী</a></li>
                                                <li><a class="dropdown-item" href="#">৭ম শ্রেণী</a></li>
                                                <li><a class="dropdown-item" href="#">৮ম শ্রেণী</a></li>
                                                <li><a class="dropdown-item" href="#">৯ম শ্রেণী</a></li>
                                                <li><a class="dropdown-item" href="#">১০ম শ্রেণী</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">ভর্তি</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">ভর্তি তথ্য</a></li>
                                                <li><a class="dropdown-item" href="#">ভর্তি ফরম</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">ডাউনলোড</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">রুটিন</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">ফলাফল</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">নোটিশ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">ব্লগ</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">গ্যালারী</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">ফটোগ্যালারী</a></li>
                                                <li><a class="dropdown-item" href="#">ভিডিও গ্যালারী</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">বিভিন্ন তথ্য</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">ছুটির তালিকা</a></li>
                                                <li><a class="dropdown-item" href="#">কক্ষ সংখ্যা</a></li>
                                                <li><a class="dropdown-item" href="#">ছাত্রছাত্রীর আসন সংখ্যা</a></li>
                                                <li><a class="dropdown-item" href="#">কম্পিউটার ব্যবহার</a></li>
                                                <li><a class="dropdown-item" href="#">ভৌতকাঠমো</a></li>
                                                <li><a class="dropdown-item" href="#">মাল্টিমিডিয়া ক্লাসরুম</a></li>
                                                <li><a class="dropdown-item" href="#">সহপাঠ</a></li>
                                                <li><a class="dropdown-item" href="#">সার্কুলার</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">যোগাযোগ</a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

</header>
</div>

<!---   Guest Signup  --->
<div id="myModal" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-header-small">
                <button type="button" class="close closebtnmodal" data-dismiss="modal">&times;</button>
                <h4 ><?php echo $this->lang->line('guest_registration') ?></h4>
            </div>
            <form action="<?php echo base_url() . 'course/guestsignup' ?>" method="post" class="signupform" id="signupform">
                <div class="modal-body">
                    <div class="form-group">
                        <label><?php echo $this->lang->line('name'); ?></label><small class="req"> *</small>
                        <input type="text" class="form-control reg_name" name="name" id="name" autocomplete="off">
                        <span class="text-danger" id="error_refno"></span>
                    </div>
                    <div class="form-group mb10">
                        <label><?php echo $this->lang->line('email_id'); ?></label><small class="req"> *</small>
                        <input type="text"  class="form-control reg_email"  name="email" id="email" autocomplete="off" >
                        <span class="text-danger" id="error_dob"></span>
                    </div>
                    <div class="form-group mb10">
                        <label><?php echo $this->lang->line('password'); ?></label><small class="req"> *</small>
                        <input type="password"  class="form-control reg_password"  name="password" id="password" autocomplete="off" >
                        <span class="text-danger" id="error_dob"></span>
                    </div>
                    <div id="load_signup_captcha"></div>
                </div>
                <div class="modal-footer">
                    <button type="button"  class="modalclosebtn btn  mdbtn" onclick="openmodal()"><?php echo $this->lang->line('login'); ?></button>
                    <button type="submit" id="signupformbtn" class="onlineformbtn mdbtn" ><?php echo $this->lang->line('signup'); ?> </button>
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
                        <label><?php echo $this->lang->line('email_id'); ?></label><small class="req"> *</small>
                        <input type="text"  class="form-control login_email"  name="username" id="username" autocomplete="off">
                        <span class="text-danger" id="error_dob"></span>
                    </div>
                    <div class="form-group mb10">
                        <label><?php echo $this->lang->line('password'); ?></label><small class="req"> *</small>
                        <input type="password"  class="form-control login_password"  name="password" id="password" autocomplete="off">
                        <input type="hidden"  class="form-control"  name="checkout_status" id="checkout_status"  autocomplete="off" >
                        <span class="text-danger" id="error_dob"></span>
                    </div>
                    <div id="load_login_captcha"></div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="pull-left forgotbtn" data-toggle="modal" data-target="#forgotmodal"><i class="fa fa-key"></i> <?php echo $this->lang->line('forgot_password'); ?></a>

                    <button type="button" class="signup modalclosebtn btn mdbtn" data-dismiss="modal"><?php echo $this->lang->line('signup'); ?> </button>
                    <button type="submit" id="loginformbtn" class="onlineformbtn mdbtn" ><?php echo $this->lang->line('submit'); ?></button>
                </div>
            </form>
            <form action="<?php echo site_url('course/user_submit_login') ?>" method="post" class="gauthenticate-form" id="gauthenticate-form">
                <div class="modal-body">
                   
                  <div class="form-group mb10">
                        <label>Verification Code</label><small class="req"> *</small>
                        <input type="text"  class="form-control gauth_code"  name="gauth_code" id="gauth_code" autocomplete="off" >
                       
                        <span class="text-danger" id="error_gauth_code"></span>
                    </div>
                    
                </div>
                <div class="modal-footer">

                    <a href="#" class="pull-left forgotbtn" data-toggle="modal" data-target="#forgotmodal"><i class="fa fa-key"></i> <?php echo $this->lang->line('forgot_password'); ?></a>

                    <button type="button" class="signup modalclosebtn btn mdbtn" data-dismiss="modal"><?php echo $this->lang->line('signup'); ?> </button>
                    <button type="submit" id="loginformbtn" class="onlineformbtn mdbtn" data-loading-text="<i class='fa fa-spinner fa-spin '></i> wait..."><?php echo $this->lang->line('submit'); ?></button>



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
                        <label><?php echo $this->lang->line('email_id'); ?></label><small class="req"> *</small>
                        <input type="email" class="form-control" name="username" id="email" autocomplete="off">
                        <span class="text-danger" id="error_email"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button"  class="modalclosebtn btn  mdbtn" onclick="openmodal()"><?php echo $this->lang->line('login'); ?></button>
                    
                    <button type="submit" id="forgotformbtn" class="onlineformbtn mdbtn" ><?php echo $this->lang->line('submit'); ?></button>
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

$(document).on('change','.currency_list',function(e){ 
    let currency_id=$(this).val();
    $.ajax({
        type: 'POST',
        url: base_url+'welcome/changeCurrencyFormat',
        data: {'currency_id':currency_id},
        dataType: 'json',
        beforeSend: function() {
             
        },
        success: function(data) {          
            window.location.reload();
        },
        error: function(xhr) { // if error occured
    
        },
        complete: function() {
            
        }
     
    });
});
</script>


<script>
    $(document).ready(function(){
  
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="font/slick/slick.min.js" integrity="" crossorigin="anonymous"></script>
    <script src="js/custom.js" integrity="" crossorigin="anonymous"></script>