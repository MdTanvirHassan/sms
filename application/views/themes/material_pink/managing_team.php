<div class="container shadow-bg " style='margin:110px 0; background:#e7e5e5;'>
    <div class="row" style='margin:5px;'>
        <div class="col-md-12">
            <?php
            if (!empty($staff)) {
                foreach ($staff as $teacher) {
                    ?>
                    <div class="col-md-3" style="justify-content:center; margin:4% 0">
                        <div class=" " style="align-items: center; background:#fff!important;">
                            <a href="#" class="">
                                <img src="<?php echo base_url('uploads/staff_images/' . $teacher['image']); ?>" alt=""
                                    style="width:100%; height:195px"><hr>
                                <div class="" style='background:#fff!important; padding: 4% 1% 10% 2%'>
                                    <h3>
                                        <?php echo $teacher['name']; ?>
                                    </h3>
                                    <h5>
                                        <?php echo $teacher['designation']; ?>
                                    </h5>
                                    <ul class="social-icons" style="display: flex; justify-content: start; font-size: 20px; background:#fff;">
                                        <li style="margin: 0% 3%;"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li style="margin: 0% 3%;"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li style="margin: 0% 4%;"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li style="margin: 0% 3%;"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>
