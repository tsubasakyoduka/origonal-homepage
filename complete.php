<?php
$company="";
    if(array_key_exists("company",$_POST)){
     $company=$_POST["company"];
}

 $name="";
    if(array_key_exists("name",$_POST)){
     $name=$_POST["name"];
}

 $mail="";
    if(array_key_exists("mail",$_POST)){
        $mail=$_POST["mail"];
    }

 $tel="";
    if(array_key_exists("tel",$_POST)){
        $tel=$_POST["tel"];
    }
    
 $content="";
    if(array_key_exists("content",$_POST)){
        $content=$_POST["content"];
    }
 
  

    

?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

        <title>送信完了 | サンプル株式会社</title>
        
    </head>
    <body style="background-color: #f1ece0;">
        <header>
            <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #ecdba8;">
              <a href="index.html" class="navbar-brand">お好み焼き 笑</a>
              
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="collapse navbar-collapse justify-content-end" id="nav-bar">
                  <ul class="navbar-nav">
                      <li class="nav-item active"><a href="index.html" class="nav-link">HOME</a></li>
                      <li class="nav-item"><a href="index.html" class="nav-link">メニュー</a></li>
                      <li class="nav-item"><a href="https://warawaralist.herokuapp.com" class="nav-link">会員限定</a></li>
                  </ul>
              </div>
            </nav>
        </header>
        <div class="container">
            <h1 class="mt-4 pb-4 border-bottom">送信完了</h1>
            <p>ありがとうございました。送信を受け付けました。</p>
            <p>3営業日以内をめどにご返信いたしますので、しばらくお待ちください。</p>
            
            <h3>送信内容</h3>
            <table class="table">
                <tbody>
                    <tr>
                        <th>氏名</th>
                        <td><?php print htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?></td>
                    </tr>
                    <tr>
                        <th>メール</th>
                        <td><?php print htmlspecialchars($mail, ENT_QUOTES, "UTF-8"); ?></td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td><?php print htmlspecialchars($tel, ENT_QUOTES, "UTF-8"); ?></td>
                    </tr>
                    <tr>
                        <th>内容</th>
                        <td><?php print nl2br(htmlspecialchars($content, ENT_QUOTES, "UTF-8")); ?></td>
                    </tr>
                </tbody>
            </table>
            
            <div class="text-center mb-4">
             <a class="btn" href="contact.php" style="background-color: #ecdba8;">戻る</a>   
            </div>
        
        </div>
        <footer class="text-center pt-3 border-top">
            &copy; tubasa kyoduka.
        </footer>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS, then Font Awesome -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>