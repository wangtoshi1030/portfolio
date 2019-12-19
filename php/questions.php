<?php
$name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["gender"];




if ($name == "") {
    header("Location:error.php");
} elseif ($age == "") {
    header("Location:error.php");
} elseif ($gender == "") {
    header("Location:error.php");
} else {
    // あとで調べるこれでなんで飛べるのかを
    header("Location");
}


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
            <li class="li-php"><a href="">Personality Test</a></li>
        </ul>
        <div class="block">
            <ul class="res-php">
                <div class="res-pos">
                    <li class="btn"><p>menu</p></li>
                    <li class="res-li-php"><a href="http://127.0.0.1:5500/index.html">Home</a></li>
                    <li class="res-li-php"><a href="https://qiita.com/wangtoshi">Qiita</a></li>
                    <li class="res-li-php"><a href="https://github.com/wangtoshi1030">GitHub</a></li>
                    <li class="res-li-php"><a href="">Personality Test</a></li>
                </div>
            </ul>
        </div>
    </div>

    <div class="conclusion">
        <div class="yourself">
            <h1>ようこそ<?php echo ($name); ?>さん</h1>
            <p>年齢：<?php echo ($age); ?></p>
            <!-- isset調べる -->
            <p><?php if (isset($_POST['gender'])) {
                    $gender = $_POST['gender'];
                    echo '性別：' . $gender;
                }?></p>
        </div>
    </div>
    <form action="answer.php" method="POST">
        <input type="hidden" name="name" value="<?= $name ?>">
        <input type="hidden" name="age" value="<?= $age ?>">
        <input type="hidden" name="gender" value="<?= $gender ?>">
        <main class="Question">
            <div class="Qes">
                <div class="number">第一問</div>
                <!-- 優しさか優しくない -->
                <div><input type="radio" name="q1" value="1" checked="checked">他人をきびしく批判する</div>
                <div><input type="radio" name="q1" value="2">人の言動や態度について気になる</div>
                <div><input type="radio" name="q1" value="3">自分の考えをとおすより、妥協することが多い</div>
                <div><input type="radio" name="q1" value="4">思っていることを口に出せない性質</div>
                <div><input type="radio" name="q1" value="5">他人に対して思いやりの気持ちが強い</div>
            </div>
            <div class="Qes">
                <div class="number">第二問</div>
                <!-- 真面目か甘えん坊か -->
                <div><input type="radio" name="q2" value="1" checked="checked">自分の考えをとおすより、妥協することが多い</div>
                <div><input type="radio" name="q2" value="2">宿題を後回しにする方</div>
                <div><input type="radio" name="q2" value="3">他人から頼まれたらイヤとは言えない</div>
                <div><input type="radio" name="q2" value="4">理想を持って、その実現に努力する</div>
                <div><input type="radio" name="q2" value="5">待ち合わせ時間を厳守する</div>
            </div>
            <div class="Qes">
                <div class="number">第三門</div>
                <!-- 冷静かアクティブか -->
                <div><input type="radio" name="q3" value="1" checked="checked">家にいることが比較的多い</div>
                <div><input type="radio" name="q3" value="2">感情に左右されやすい</div>
                <div><input type="radio" name="q3" value="3">人との争いを好む</div>
                <div><input type="radio" name="q3" value="4">自分の意見はしっかり持っている</div>
                <div><input type="radio" name="q3" value="5">週末は外にいることが多い</div>
            </div>
            <div class="Qes">
                <div class="number">第四問</div>
                <!-- わがままか自由気まま -->
                <div><input type="radio" name="q4" value="1" checked="checked">生涯は自由気ままに暮らしたい</div>
                <div><input type="radio" name="q4" value="2">交友関係より自分の時間を大切にしたい</div>
                <div><input type="radio" name="q4" value="3">実際将来のことは何も考えてない</div>
                <div><input type="radio" name="q4" value="4">自分の思い通りにならないといやだ</div>
                <div><input type="radio" name="q4" value="5">だれにも言えない大きな夢がある</div>
            </div>
            <div class="Qes">
                <div class="number">第五問</div>
                <!-- 人間関係の構築が上手か否 -->
                <div><input type="radio" name="q5" value="1" checked="checked">お酒はよく飲む</div>
                <div><input type="radio" name="q5" value="2">嫌なことを言われても次の日には忘れてしまう</div>
                <div><input type="radio" name="q5" value="3">いつも友達から遊びを誘われる側だ</div>
                <div><input type="radio" name="q5" value="4">約束したことをよく忘れる</div>
                <div><input type="radio" name="q5" value="5">遅刻をしても平気</div>
            </div>
            <div class="Qes">
                <div class="number">第六問</div>
                <!-- おおらか、おせっかい -->
                <div><input type="radio" name="q6" value="1" checked="checked">人の細かな言動まで気になる</div>
                <div><input type="radio" name="q6" value="2">常識がない人とは一緒にいたくない</div>
                <div><input type="radio" name="q6" value="3">ついつい余計なことをしてしまう</div>
                <div><input type="radio" name="q6" value="4">動物または子供好き</div>
                <div><input type="radio" name="q6" value="5">困っている人を見逃せない</div>
            </div>
        </main>
        <div class="qesAn">
            <button class="ANswer">送信</button>
        </div>
    </form>
    <footer class="footer-php">
        <div class="last-php">Copyright©Toshiki.Hashimoto</div>
        <i class=" arrow-php fas fa-arrow-circle-up"></i>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../js/php.js"></script>
</body>

</html>