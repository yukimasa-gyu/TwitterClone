<!DOCTYPE html>
<html lang="ja">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/TwitterClone/vies/img/logo-twitterblue.svg">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="/TwitterClone/vies/css/style.css" rel="stylesheet">
 
    <title>ログイン画面 / Twitterクローン</title>
    <meta name="description" content="ログイン画面です">
</head>
 
<body class="signup text-center">
    <main class="form-signup">
        <form action="sign-in.php" method="post">
            <img src="/TwitterClone/vies/img/logo-white.svg" alt="" class="logo-white">
            <h1>Twitterクローンにログイン</h1>

            <?php if (isset($view_try_login_result) && $view_try_login_result === false) : ?>
                <div class="alert alert-warning text-sm" role="alert">
                    ログインに失敗しました。メールアドレス、パスワードが正しいかご確認ください。
                </div>
            <?php endif; ?>

            <input type="email" class="form-control" name="email" placeholder="メールアドレス" required autofocus>
            <input type="password" class="form-control" name="password" placeholder="パスワード" required>
            <button class="w-100 btn btn-lg" type="submit">ログイン</button>
            <p class="mt-3 mb-2"><a href="sign-up.php">会員登録する</a></p>
            <p class="mt-2 mb-3 text-muted">&copy; 2021</p>
        </form>
    </main>
    <?php include_once('../vies/common/foot.php'); ?>
</body>
 
</html>