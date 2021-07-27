<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>test</title>
    <link rel="stylesheet" href="../css/main_style.css">
    <link rel="stylesheet" href="../css/proposal.css">
</head>
<body>
<header>
    <div class="head_main">
        <a href="../backup_210714/home.php" class="head_link">
            <img src="../img/Survay_logo.jpg" class="head_img">
            <span class="head_txtstyle">Survay</span>
        </a>
    </div>
    <div class="head_name">みんなのお題</div>
</header>
<div class="navigation">
    <ul class="navigation_ul">
        <li class="nav_list">
            <div class="nav_div">
                <a href="">
                    <span class="nav_icon"><ion-icon name="planet-outline"></ion-icon></span>
                    <span class="nav_txt">みんなのお題</span>
                </a>
            </div>
        </li>
        <li class="nav_list choice">
            <div class="nav_div">
                <a href="">
                    <span class="nav_icon"><ion-icon name="create-outline"></ion-icon></span>
                    <span class="nav_txt">お題作成</span>
                </a>
            </div>
        </li>
        <li class="nav_list">
            <div class="nav_div">
                <a href="">
                    <span class="nav_icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="nav_txt">ホーム</span>
                </a>
            </div>
        </li>
        <li class="nav_list">
            <div class="nav_div">
                <a href="">
                    <span class="nav_icon"><ion-icon name="notifications-outline"></ion-icon></span>
                    <span class="nav_txt">お知らせ</span>
                </a>
            </div>
        </li>
        <li class="nav_list">
            <div class="nav_div">
                <a href="../backup_210714/mypage.php">
                    <span class="nav_icon"><ion-icon name="person-outline"></ion-icon></span>
                    <span class="nav_txt">マイページ</span>
                </a>
            </div>
        </li>
        <li class="nav_list">
            <div class="nav_div">
                <a href="">
                    <span class="nav_icon"><ion-icon name="log-in-outline"></ion-icon></span>
                    <span class="nav_txt">ログアウト</span>
                </a>
            </div>
        </li>
    </ul>
</div>
<div class="main_area"> <!--ここからメインエリア-->
    <div class="main_area_innner">
        <form action="../php/success.php" method="post" enctype="multipart/form-data">
            <div class="title_area">
                <p>題名</p>
                <input type="text" name="title" required>
            </div>
            <div>
                <p>回答項目作成</p>
                <p class="p_sub">質問の数</p>
                <select class="question_num" name="que" id="question_num" onclick="question_num()">
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
            <div class="question_choice" id="question">
                <div>
                    <input type="text" name="que_name" required>
                    <input type="file" name="image">
                </div>
                <div>
                    <input type="text" name="que_name" required>
                    <input type="file" name="image">
                </div>
                <span id="add_que"></span>
            </div>
            <div>
                <p>多重投票設定</p>
                <span class="multi_span"><input type="radio" name="multi" class="multi" required>ok</span>
                <span class="multi_span"><input type="radio" name="multi" class="multi">no</span>
            </div>
            <div class="submit_btn2">
                <input type="submit" name="upload" value="作成！">
            </div>
        </form>
    </div>
</div>
<script src="../js/proposal.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>