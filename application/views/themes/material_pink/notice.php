<div class="container shadow-bg " style='margin:10px 0;'>
    <div class="">
        <h2 class="text-center">ভর্তি তথ্য</h2>
        <div style="font-size: 16px; line-height: 1.5em; color: #000; padding: 5%;">

            <table class="table table-bordered table-striped table-hover">

                <thead class=' table-info text-center'> 
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date</th>
                        <th scope="col">Notice</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($banner_notices)) {

                        foreach ($banner_notices as $banner_notice_key => $banner_notice_value) {
                            ?>
                            <tr>
                                <th scope="row"></th>
                                <td>
                                    <a href="<?php echo site_url('read/' . $banner_notice_value['slug']) ?>">
                                        <div class="datenews" style="color:green;">
                                            <?php
                                            echo date('d', strtotime($banner_notice_value['date'])) . " " . $this->lang->line(strtolower(date('F', strtotime($banner_notice_value['date'])))) . " " . date('Y', strtotime($banner_notice_value['date']));
                                            ?>
                                        </div>

                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo site_url('read/' . $banner_notice_value['slug']) ?>">

                                        <?php echo $banner_notice_value['title']; ?>
                                    </a>
                                </td>

                            </tr>
                            <?php
                        }
                    }
                    ?>

                        </tbody>
                    </table>

                  
                    

        </div>
    </div>





</div>