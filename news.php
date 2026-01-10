<?php
$news = [
    [
        "id"    => 1,
        "image" => "fotoebi/ed18878d23e18b89dd9e94f6bd8ace80.jpg",
        "title" => "ნორისი მსოფლიო ჩემპიონი გახდა",
        "text"  => "ვერსტაპენმა ყველაფერი ცადა, მაგრამ ნორისი მაინც ჩემპიონია. სეზონი დაძაბული იყო ბოლო რბოლამდე."
    ],
    [
        "id"    => 2,
        "image" => "fotoebi/262378d8332b6e9a091ecb322a2f00dc.jpg",
        "title" => "Ferrari შემდეგი სეზონისთვის ემზადება",
        "text"  => "Ferrari აქტიურად მუშაობს ახალ ბოლიდზე. გუნდის მიზანია ჩემპიონობისთვის ბრძოლა."
    ],
    [
        "id"    => 3,
        "image" => "fotoebi/f354f62224edc1c763748d73af035822.jpg",
        "title" => "Mercedes-ში ახალი ძრავით კმაყოფილები არიან!",
        "text"  => "გუნდის ინჟინრები ამბობენ, რომ ახალი ძრავი კონკურენტუნარიანია."
    ],
    [
        "id"    => 4,
        "image" => "fotoebi/5a11701c446ac0930f2dc23d63c80ca3.jpg",
        "title" => "დებიუტანტი Cadillac",
        "text"  => "Cadillac ფორმულა 1-ში დებიუტისთვის ემზადება გამოცდილი მრბოლელებით."
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formula 1 | News</title>
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

<section class="news">
    <h2>ყველა სიახლე</h2>

    <?php foreach ($news as $item): ?>
        <div class="news-card">
            <img src="<?= $item['image'] ?>">
            <h3><?= $item['title'] ?></h3>
            <p><?= $item['text'] ?></p>
        </div>
    <?php endforeach; ?>

</section>

<footer>
    <p>© 2026 Formula 1 ფანები საქართველოში</p>
</footer>

</body>
</html>
