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
            <li class="li-php"><a href="../index.php">Home</a></li>
            <li class="li-php"><a href="https://qiita.com/wangtoshi">Qiita</a></li>
            <li class="li-php"><a href="https://github.com/wangtoshi1030">GitHub</a></li>
            <li class="li-php"><a href="">Personality Test</a></li>
        </ul>
        <div class="block">
            <ul class="res-php">
                <div class="res-pos">
                    <li class="btn"><p>menu</p></li>
                    <li class="res-li-php"><a href="../index.html">Home</a></li>
                    <li class="res-li-php"><a href="https://qiita.com/wangtoshi">Qiita</a></li>
                    <li class="res-li-php"><a href="https://github.com/wangtoshi1030">GitHub</a></li>
                    <li class="res-li-php"><a href="">Personality Test</a></li>
                </div>
            </ul>
        </div>
    </div>
    <form action="questions.php" method="POST">
        <div class="container-php">
            <div class="imgPen">
                <p class="parsonality">性格診断</p>
                <div class="separate">
                    <p class="fourH">性格は主に大きく分けて４つある</p>
                </div>
                <div class="toggle">
                    <div class="pearent">
                        <div class="toggleChild">
                            <p class="type">リーダー型</p>
                            <p class="describe">エネルギッシュで周りを引っ張って行ける強さがある人です。</p>
                        </div>
                        <div class="toggleChild">
                            <p class="type">ピープル型</p>
                            <p class="describe">人との関係性を築くことが上手な人です。</p>
                        </div>
                        <div class="toggleChild">
                            <p class="type">自由形</p>
                            <p class="describe">自由奔放で常識にとらわれない人です。</p>
                        </div>
                        <div class="toggleChild">
                            <p class="type">コツコツ型</p>
                            <p class="describe">困難なことに丁寧に立ち向かい、忍耐強く取り組める人です。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-h"></div>
            <div class="push">
                <div class="INPUT">
                    <input class="start" type="submit" value="Let's Start">
                    <div class="enter">
                        <div class="input-box">
                            <div class="input-part">お名前:<input class="required" type="text" type="text" name="name" placeholder="your-name"></div>
                            <div class="input-part">ご年齢:<input class="required" type="number" type="age" name="age" placeholder="your-age"></div>
                        </div>
                        <div class="input-box">
                            <!-- 属性がradioやcheckなどだった場合valueを指定して上げないとチェックした内容が持ってこれない -->
                            <div class="input-part">男性<input class="required"  type="radio" name="gender" value="男"></div>
                            <div class="input-part">女性<input class="required"  type="radio" name="gender" value="女"></div>
                        </div>
                    </div>
                </div>
            </div>
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