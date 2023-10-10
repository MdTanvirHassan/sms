<div class="container shadow-bg" style="margin: 115px 0 50px; padding: 15px;">
  <div class="col-md-12">
    <div class="class-routine">
      <table class="country-table table-bordered table" style="font-size: 16px; color: #000;">
        <thead>
          <tr class='bg-primary'>
            <th>পিরিয়ড / বার</th>
            <th>শনি</th>
            <th>রবিবার</th>
            <th>সোমবার</th>
            <th>মঙ্গলবার</th>
            <th>বুধবার</th>
            <th>বৃহস্পতিবার</th>
            <th>শুক্রবার</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // An array to map days to columns
          $dayColumns = [
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday',
            'Sunday'
          ];
          // foreach ($timetable as $time) {
          // Define the periods
          $periods = [
            // ['start' => $time->time_from, 'end' => $time->time_to],
            ['start' => '10:00 AM', 'end' => '11:00 PM'],
            ['start' => '11:00 AM', 'end' => '12:00 PM'],
            ['start' => '12:00 PM', 'end' => '01:00 PM'],
            ['start' => '01:00 PM', 'end' => '02:00 PM'],
            ['start' => '02:00 PM', 'end' => '03:00 PM'],
            ['start' => '04:00 PM', 'end' => '05:00 PM'],
            // Add more periods as needed
          ];
          $firstSixPeriods = array_slice($periods, 0, 6);

          foreach ($firstSixPeriods as $period) {
            echo '<tr>';
            echo '<td>' . $period['start'] . ' - ' . $period['end'] . '</td>';

            foreach ($dayColumns as $day) {
              $entryFound = false;
              foreach ($timetable as $item) {
                if ($item->day === $day && $item->time_from === $period['start']) {
                  echo '<td>' . $item->subject_name . '</td>';
                  $entryFound = true;
                  break;
                }
              }

              if (!$entryFound) {
                echo '<td>X</td>';
              }
            }

            echo '</tr>';
          }
          ?>
        </tbody>
      </table>

    </div>
  </div>
</div>