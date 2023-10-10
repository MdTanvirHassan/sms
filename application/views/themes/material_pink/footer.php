<style>
    .text-title{
        font-size: 16px;
        color: #fff;
        
    }
</style>
<section class="footer p-0">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="left">
                    <img src="<?php echo base_url($front_setting->logo); ?>" name="" alt="">
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <!-- <h3 class="fo-title"><?php echo $this->lang->line('follow_us'); ?></h3>
                <ul class="company-social">
                    <?php $this->view('/themes/default/social_media'); ?>        
                </ul> -->

                <p class="text-title ">Address :
                    <?php echo $school_setting->address; ?>
                </p><br>

                <p class="text-title " style=" line-height: 1rem;" >Mobile :
                    <?php echo $school_setting->phone; ?>
                </p><br>

                <p  class="text-title" >Email :<a  class="text-title" href="mailto:<?php echo $school_setting->email; ?>" class="">
                        <?php echo $school_setting->email; ?>
                    </a>
                </p>

            </div>

            <div class="col-md-6">
                <div class="right-center">
                    <!-- <h3 class="fo-title"><?php echo $this->lang->line('links'); ?></h3> -->
                    <ul class="f1-list">
                        <?php
                        foreach ($footer_menus as $footer_menu_key => $footer_menu_value) {

                            $cls_menu_dropdown = "";
                            if (!empty($footer_menu_value['submenus'])) {

                                $cls_menu_dropdown = "dropdown";
                            }
                            ?>
                            <li class="<?php echo $cls_menu_dropdown; ?>">
                                <?php
                                $top_new_tab = '';
                                $url = '#';
                                if ($footer_menu_value['open_new_tab']) {
                                    $top_new_tab = "target='_blank'";
                                }
                                if ($footer_menu_value['ext_url']) {
                                    $url = $footer_menu_value['ext_url_link'];
                                } else {
                                    $url = site_url($footer_menu_value['page_url']);
                                }
                                ?>

                                <a href="<?php echo $url; ?>" <?php echo $top_new_tab; ?>>
                                    <?php echo $footer_menu_value['menu']; ?>
                                </a>

                                <?php
                                ?>


                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>

        </div>
        <!-- <div class="row">
            <div class="col-md-12">
                <div class="infoborderb"></div>   

                <div class="col-md-4">
                    <div class="contacts-item">
                        <div class="cleft"><i class="fa fa-phone"></i></div>
                        <div class="cright">
                            <a href="#" class="content-title"><?php echo $this->lang->line('contact'); ?></a>
                            <p href="#" class="content-title"><?php echo $school_setting->phone; ?></p>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contacts-item">
                        <div class="cleft"><i class="fa fa-envelope"></i></div>
                        <div class="cright">
                            <a href="#" class="content-title"><?php echo $this->lang->line('email_us'); ?></a>
                            <p><a href="mailto:<?php echo $school_setting->email; ?>" class="content-title"><?php echo $school_setting->email; ?></a>
                            </p>   
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contacts-item">
                        <div class="cleft"><i class="fa fa-map-marker"></i></div>
                        <div class="cright">
                            <a href="#" class="content-title"><?php echo $this->lang->line('address'); ?></a>
                            <p class="sub-title"><?php echo $school_setting->address; ?></p>
                        </div>
                    </div>
                </div>                
                
                <div class="col-md-3 col-sm-6">
                    <a class="twitter-timeline" data-tweet-limit="1" href="#"></a>
                </div>  
            </div>
         </div> -->
    </div>
    </div>
    </div>
</section>
<div class="small-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <p>
                    <?php echo $front_setting->footer_text; ?>
                </p>
            </div>
        </div><!--./row-->
    </div><!--./container-->
</div><!--./copy-right-->