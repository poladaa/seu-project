<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1 Drivers statistics</title>

    <link rel="stylesheet" href="driver.css">
    <?php
    include "db.php";

        $result = $conn->query("SELECT * FROM standings");
    ?>
</head>
<body>
    <header class="site-header">
  <nav class="navbar">
    <div class="nav-inner">

      <a href="index.php" class="nav-logo">
        <img src="fotoebi/52d5598a7c1b5ee04954924c6be828b2.jpg" alt="">
      </a>

      <ul class="nav-links">
        <li><a href="#">Schedule</a></li>
        <li><a href="news.php">News</a></li>
        <li class="active"><a href="#">Drivers</a></li>
        <li><a href="#">Teams</a></li>
        <li class="registration">
          <a href="registration1.php">Registration</a>
        </li>
      </ul>

    </div>
  </nav>
  </header>

  <section class="standings">
    <h1>მიმდინარე სეზონის რეიტინგი</h1>
    <table>
        <thead>
            <tr>
                <th>მდგომარეობა</th>
                <th>მრბოლელი</th>
                <th>კომპანია</th>
                <th>ქულები</th>
            </tr>
        </thead>
        <tbody>
          <?php while ($row = $result->fetch_assoc()) { ?>
          <tr>
            <td><?= $row['standing'] ?></td>
            <td><?= $row['driver'] ?></td>
            <td><?= $row['constructor'] ?></td>
            <td><?= $row['score'] ?></td>
          </tr>
          <?php } ?>
        </tbody>

    </table>
</section>
</body>
</html>