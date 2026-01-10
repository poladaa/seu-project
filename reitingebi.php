<?php
$standings = [
    ["position"=>1,"driver"=>"Max Verstappen","team"=>"Red Bull","points"=>350],
    ["position"=>2,"driver"=>"Lewis Hamilton","team"=>"Mercedes","points"=>320],
    ["position"=>3,"driver"=>"Lando Norris","team"=>"McLaren","points"=>280],
    ["position"=>4,"driver"=>"Charles Leclerc","team"=>"Ferrari","points"=>260],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formula 1 | Standings</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>FORMULA 1</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="news.php">News</a>
        <a href="reitingebi.php">Standings</a>
    </nav>
</header>

<section class="standings">
    <h2>მიმდინარე სეზონის რეიტინგი</h2>
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
            <?php foreach($standings as $driver): ?>
            <tr>
                <td><?= $driver['position'] ?></td>
                <td><?= $driver['driver'] ?></td>
                <td><?= $driver['team'] ?></td>
                <td><?= $driver['points'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>

<footer>
    <p>© 2026 Formula 1 ფანები საქართველოში</p>
</footer>
</body>
</html>
