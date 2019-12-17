<?php
$name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["gender"];

$q1=$_POST["q1"];
$q2=$_POST["q2"];
$q3=$_POST["q3"];
$q4=$_POST["q4"];
$q5=$_POST["q5"];
$q6=$_POST["q6"];

$total=$q1+$q2+$q3+$q4+$q5+$q6;




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.2.1/font-awesome-animation.css">
    <link rel="stylesheet" href="../assets/css/php.css">
    <title>Document</title>
</head>

<body>
    <div class="summary-header-php">
        <div>
            <header class="name-php">Hashimoto Toshiki</header>
        </div>
        <ul class="list-php">
            <li class="li-php"><a href="../index.html">Home</a></li>
            <li class="li-php"><a href="https://qiita.com/wangtoshi">Qiita</a></li>
            <li class="li-php"><a href="https://github.com/wangtoshi1030">GitHub</a></li>
            <li class="li-php"><a href="">Portfolio</a></li>
        </ul>
        <div class="block">
            <ul class="res-php">
                <div class="res-pos">
                    <li class="btn"><p>menu</p></li>
                    <li class="res-li-php"><a href="../index.html">Home</a></li>
                    <li class="res-li-php"><a href="https://qiita.com/wangtoshi">Qiita</a></li>
                    <li class="res-li-php"><a href="https://github.com/wangtoshi1030">GitHub</a></li>
                    <li class="res-li-php"><a href="">Portfolio</a></li>
                </div>
            </ul>
        </div>
    </div>

    <main class="Allanswer">
        <h1>本当のあなた</h1>
        <div class="answerType">
            <?php if(1 <=  $total && $total <= 12) :?>
            <p>リーダー型です</p>
            <img src="../php.img/リーダー.jpg" alt="">
            <p>何か信念を持ってやろうと取り組もうとする力が人一倍強いでしょう</p>
            <?php elseif(13<= $total && $total <= 18) :?>
            <p>ピープル型です</p>
            <img src="../php.img/ピープル.jpg" alt="">
            <p>平和主義で自分がどのように立ち回れば上手くいくか、分析できるタイプです。</p>
            <?php elseif(19 <=$total && $total <=24) :?>
            <p>自由型です</p>
            <img src="../php.img/自由形.png" alt="">
            <p>あまり協調性がなく、退屈を嫌い、常に新しいことに刺激を求めるタイプです。</p>
            <?php else :?>
            <p>コツコツ型です</p>
            <img src="../php.img/コツコツ型.jpg" alt="">
            <p>頑固で融通が効かず、一つのことに一生懸命になれるタイプです。</p>
            <?php endif;?>
        </div>
    </main>


    <footer class="footer-php">
        <div class="last-php">Copyright©Toshiki.Hashimoto</div>
        <i class=" arrow-php fas fa-arrow-circle-up"></i>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../js/php.js"></script>
</body>

</html>
