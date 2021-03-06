<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asm1/app/views/user/css/style.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- gg font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title></title>
</head>
<body>
    <div class="container">
        <header>
            <div class="header1">
                <a href="<?=BASE_URL . 'dashboard-user' ?>"><img src="../asm1/app/views/upload/logo.png" alt=""></a>
            </div>
            <div class="header2">
                <a class="btn btn-primary" href="<?= BASE_URL . 'login'?>">Đăng nhập</a>
                <a class="btn btn-primary" href="<?= BASE_URL . 'dang-ky'?>">Đăng ký</a>
            </div>
        </header>
        <hr>
        <main>
            <article class="">
                    <h4 class="ms-3 mt-2">
                        <?php
                            for ($i=0; $i < 1; $i++) {      
                                echo 'Danh sách quiz chủ đề '.$quizs[0]->subject()->name.'';
                            }
                        ?>
                    </h4>
                    <table class="table bg-light">
                <thead>
                    <th>Mã quiz</th>
                    <th>Tên quiz</th>
                    <th>Tên chủ đề</th>
                    <th>Thời gian</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php foreach($quizs as $quiz): ?>
                        <tr>
                            <td><?= $quiz->id ?></td>
                            <td>
                                <p><?= $quiz->name?></p>
                            </td>
                            <td><?= $quiz->subject()->name?></td>
                            <td><?= $quiz->duration_minutes ?> Phút</td>
                            <td>
                                <a class="btn btn-primary" href="<?= BASE_URL . 'question-user_QuizId' . $quiz->id ?>">Làm</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>                                                                                                  
            </table>
            </article>
            <aside class="">
                <div class="box_aside">
                    <h3>Xin chào <?=$_SESSION['user']->name?></h3>
                    <h5>Chào mừng đến với QuizQuiz</h5>
                </div>
                <div class="box_aside">
                    <h3>Chào mừng đến với Quiz Quiz</h3>
                    <a class="btn btn-primary" href="<?= BASE_URL . 'dang-ky'?>">Tạo tài khoản</a>
                </div>
                <div>
                    <a class="btn btn-light ms-3" style="width: 87%;"  href="<?=BASE_URL . 'dashboard-user' ?>">Về trang chủ</a>
                </div>
            </aside>
        </main>
    </div>
</body>
</html>