<div class="container shadow-bg " style='margin:110px 0; background:#f9f9f9;'>
    
            
    <div class="row" >
        <div class="col-md-12">
            <?php
            if (!empty($staff)) {
                foreach ($staff as $teacher) {
                    ?>
                    <div class="col-md-2" style="justify-content:center; margin:15px 0">
                        <div class="teachers-img " style="align-items: center; background:#fff!important;">
                            <a href="#" class="">
                                <img src="<?php echo base_url('uploads/staff_images/' . $teacher['image']); ?>" alt=""
                                    style="width:100%; height:250px"><hr>
                                <div class="" style='background:#fff!important; text-align:center; align-items: center; padding: 0% 2% 0% 0%' >
                                    <h3>
                                        <?php echo $teacher['name']; ?>
                                    </h3>
                                    <h5>
                                        <?php echo $teacher['designation']; ?>
                                    </h5>
                                   
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
