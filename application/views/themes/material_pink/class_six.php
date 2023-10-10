<div class="container shadow-bg " style='margin:110px 0; color:#000; font-size: 16px;'>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Class</th>
            <th scope="col">Boys</th>
            <th scope="col">Girls</th>
            <th scope="col">Total</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (!empty($students)) {
            foreach ($students as $student) {
        ?>
                <tr>
                    <th scope="row"><?php echo $student['class']; ?></th>
                    <td><?php echo $student['male_count']; ?></td>
                    <td><?php echo $student['female_count']; ?></td>
                    <td><?php echo $student['total_students']; ?></td>
                </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>


    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">sl</th>
                <th scope="col">Name</th>
                <th scope="col">Father</th>
                <th scope="col">address</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($students)) {

                foreach ($students as $student) {
                    ?>
                    <tr>
                        <th scope="row"> <?php echo $student['id']; ?></th>
                        <td><?php echo $student['firstname'] ; echo ' ';echo $student['lastname']; ?></td>
                        <td><?php echo $student['father_name']; ?></td>
                        <td><?php echo $student['permanent_address']; ?></td>
                    </tr>

                    <?php
                }
            }
            ?>

        </tbody>
    </table>
</div>