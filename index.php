<?php

  include('./config/db_connect.php');

  $sql = 'SELECT name, salary, profession FROM employees';

  $result = mysqli_query($conn, $sql);

  $employees = mysqli_fetch_all($result, MYSQLI_ASSOC);

  mysqli_free_result($result);

  mysqli_close($conn);

  
?>

<!DOCTYPE html>
<html>
  <?php include('templates/header.php') ?>
    <h2 style="color: chocolate; text-align:center;">Employees:
    </h2>
      <?php foreach($employees as $employee): ?>
        <div style="font-size: 30px;">
          <div style="color: chocolate; text-align:center;">
            <h3>
              <?php echo htmlspecialchars($employee['name']);?>
            </h3>
            <p><?php echo 'Salary: '. htmlspecialchars($employee['salary']);?></p>
            <p><?php echo 'Profession: '. htmlspecialchars($employee['profession']);?></p>
          </div>
        </div>
      <?php endforeach; ?>
  
  <?php include('templates/footer.php') ?>
</html>
