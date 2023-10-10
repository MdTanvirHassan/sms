<div class="container shadow-bg " style='margin:110px 0; color:#000; font-size: 16px;'>

<div class="row" style='margin:15px 0'>
        <?php
        if (!empty($students)) {
            foreach ($students as $student) {
                ?>
                <div class="col-md-3">
                    <div class="card mb-3 shadow-bg"  style='border:1px solid #ccc;padding: 5px;'>
                        <div class="row g-0">
                            <div class="col-md-4"  style="justify-content:center; text-align: center;  align-items: center; margin:auto">
                                <i class="fa fa-graduation-cap" aria-hidden="true" style="font-size:50px  "></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title">শ্রেণী</h3>
                                    <h2> <?php echo $student['class']; ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-3  shadow-bg"  style='border:1px solid #ccc;padding: 5px;'>
                        <div class="row g-0">
                            <div class="col-md-4"  style="justify-content:center; text-align: center;  align-items: center; margin:auto">
                                <i class="fa fa-male" aria-hidden="true" style="font-size:50px  "></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title">বালক</h3>
                                    <h2> <?php echo $student['male_count']; ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card mb-3  shadow-bg"  style='border:1px solid #ccc;padding: 5px;'>
                        <div class="row g-0">
                            <div class="col-md-4"  style="justify-content:center; text-align: center;  align-items: center; margin:auto">
                                <i class="fa fa-female" aria-hidden="true" style="font-size:50px  "></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title">বালিকা</h3>
                                    <h2> <?php echo $student['female_count']; ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card mb-3  shadow-bg"  style='border:1px solid #ccc; padding: 5px;'>
                        <div class="row g-0">
                            <div class="col-md-4"  style="justify-content:center; text-align: center;  align-items: center; margin:auto">
                                <i class="fa fa-graduation-cap" aria-hidden="true" style="font-size:50px  "></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3 class="card-title">মোট</h3>
                                    <h2><?php echo $student['total_students']; ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>


    <!-- <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">শ্রেণী</th>
                <th scope="col">বালক</th>
                <th scope="col">বালিকা</th>
                <th scope="col">মোট</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($students)) {
                foreach ($students as $student) {
                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $student['class']; ?>
                        </th>
                        <td>
                            <?php echo $student['male_count']; ?>
                        </td>
                        <td>
                            <?php echo $student['female_count']; ?>
                        </td>
                        <td>
                            <?php echo $student['total_students']; ?>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table> -->


    <table class="table table-striped table-hover table-bordered" style="margin-top:30px;">
        <thead>
            <tr>
                <th scope="col">শ্রেণী</th>
                <th scope="col">বালক</th>
                <th scope="col">বালিকা</th>
                <th scope="col">মোট</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($students_sec)) {
                // $currentClass = ''; // Initialize a variable to keep track of the current class
                foreach ($students_sec as $stu) {
                    // if ($stu['class_name'] !== $currentClass) {
                    //     // Display a row for the new class
                    //     echo '<tr>';
                    //     echo '<th scope="row" colspan="4">' . $stu['class_name'] . '</th>';
                    //     echo '</tr>';
                    //     $currentClass = $stu['class_name'];
                    // }
                    // Display a row for each section within the class
                    echo '<tr>';
                    echo '<th scope="row">' . $stu['class_name'] . '(' . $stu['section_name'] . ')' . '</th>';
                    echo '<td>' . $stu['male_count'] . '</td>';
                    echo '<td>' . $stu['female_count'] . '</td>';
                    echo '<td>' . $stu['total_students'] . '</td>';
                    echo '</tr>';
                }
            }
            ?>
        </tbody>
    </table>

</div>