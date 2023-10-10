<div class="container shadow-bg" style="margin: 110px 0;">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">


                    <div class="box-body">
                        <div class="box-header ptbnull"></div>
                        <h4 class="box-title box-title">
                            <?php echo $this->lang->line('exam_schedule'); ?>
                        </h4>
                        <div class="box-header ptbnull">
                        </div>
                        <div class="table-responsive mailbox-messages">
                            <div class="download_label">
                                <?php echo $this->lang->line('exam_schedule'); ?>
                            </div>
                            <table class="table table-hover table-striped table-bordered example" id="subjects_table" style='color:#000; font-size: 16px;'>
                                <thead class="bg-info ">
                                    <tr>
                                        <th>
                                            <?php echo $this->lang->line('subject') ?>
                                        </th>
                                        <th>
                                            <?php echo $this->lang->line('date_from'); ?>
                                        </th>
                                        <th>
                                            <?php echo $this->lang->line('start_time'); ?>
                                        </th>
                                        <th>
                                            <?php echo $this->lang->line('duration') ?>
                                        </th>
                                        <th>
                                            <?php echo $this->lang->line('room_no'); ?>
                                        </th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //  echo '<pre>'; print_r($exam_subjects);exit;
                                    if(!empty($exam_subjects)) {
                                         
                                        foreach($exam_subjects as $exam) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $exam->subject_name; ?>
                                                    <?php if ($exam->subject_code) {
                                                        echo '(' . $exam->subject_code . ')';
                                                    } ?>
                                                </td>
                                                <td>
                                                    <?php echo date($this->customlib->getSchoolDateFormat(), strtotime($exam->date_from)); ?>
                                                </td>
                                                <td>
                                                    <?php echo $exam->time_from; ?>
                                                </td>
                                                <td>
                                                    <?php echo $exam->duration; ?>
                                                </td>
                                                <td>
                                                    <?php echo $exam->room_no; ?>
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
            </div>
        </div>
    </section>
</div>