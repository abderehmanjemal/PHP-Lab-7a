<!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Lab 7a Q1</title>
  </head>
  <body>

    <?php
        $name = "Abderehman Idris Jemal";
        $matric_number = "AI250032";
        $course = "Bachelor of Software Engineering";
        $year_of_study = "Year 2";
        $address = "Parit Raja, Batu Pahat, Johor, Malaysia";
    ?>

    <table border="1">
      <tr>
        <td>Name</td>
        <td><?php echo "$name"; ?></td>
      </tr>
      <tr>
        <td>Matric Number</td>
        <td><?php echo $matric_number; ?></td>
      </tr>
      <tr>
        <td>Course</td>
        <td><?php echo $course; ?></td>
      </tr>
      <tr>
        <td>Year of Study</td>
        <td><?php echo $year_of_study; ?></td>
      </tr>
      <tr>
        <td>Address</td>
        <td><?php echo $address; ?></td>
      </tr>
    </table>

  </body>
  </html>