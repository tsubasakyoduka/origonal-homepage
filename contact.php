<!DOCTYPE html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

        <title>お問い合わせ | お好み焼き 笑</title>
        
        <style>
            #map {
                  height: 400px;
                  width: 100%;
                }
        </style>
    </head>
    <body style="background-color: #f1ece0;">
        <header>
          <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #ecdba8;">
              <a href="complete.html" class="navbar-brand">お好み焼き 笑</a>
              
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="collapse navbar-collapse justify-content-end" id="nav-bar">
                  <ul class="navbar-nav">
                      <li class="nav-item"><a href="index.html" class="nav-link">HOME</a></li>
                      <li class="nav-item"><a href="index.html" class="nav-link">メニュー</a></li>
                      <li class="nav-item"><a href="https://warawaralist.herokuapp.com"></a></li>
                  </ul>
              </div>
          </nav>
        </header>
        <div class="container">
            <h1 class="mt-4 pb-4 border-bottom">お問い合わせ</h1>
            <div class="mt-4 row">
                <div class="col-md-2">
                    <strong><i class="fas fa-phone"></i>お電話：</strong>
                </div>
                <div class="col-md-10">
                    <p>該当する内容の電話番号におかけください。</p>
                    <table class="mt-4 table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>内容</th>
                                <th>電話番号</th>
                                <th>担当</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>サービスに関するお問い合わせ</td>
                                <td>01-0000-0001</td>
                                <td>経塚</td>
                            </tr>
                            <tr>
                                <td>予約に関するお問い合わせ</td>
                                <td>02-0000-0002</td>
                                <td>経塚</td>
                            </tr>
                            <tr>
                                <td>アルバイトに関するお問い合わせ</td>
                                <td>03-0000-0003</td>
                                <td>経塚</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="offset-md-2 col-md-10">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="table-active" style="background-color: #ecdba8;"><i class="fas fa-info-circle"></i>営業時間</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>平日：17時〜24時 </br>土日・祝日：11時〜24時</br> ＊年中無休</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
                <div class="offset-md-2 col-md-10">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="table-active" style="background-color: #ecdba8;"><i class="fas fa-info-circle"></i>店舗住所</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><div id="map"></div>大阪府八尾市中田３丁目２８−１</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
           
            <div class="mt-4 row">
                <div class="col-md-2">
                    <strong><i class="far fa-envelope"></i>メール：</strong>
                </div>
                <div class="col-md-10">
                    <p>
                        プライバシーポリシーをご確認いただき、ご同意の上で、送信ボタンをクリックしてください。<br />
                        お問い合わせの内容は、受付日から3営業日以内をめどにご返信いたします。
                    </p>
                    <form action="complete.php" method="POST">
                        <div class="row form-group">
                            <label class="col-md-2 col-form-label">氏名：</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="name" placeholder="例）笑　太郎"　required>
                            </div>
                        </div>
                        
                        <div class="row form-group">
                            <label class="col-md-2 col-form-label">メール：</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="mail" placeholder="例）taro.warai@docomo.com" required>
                            </div>
                        </div>
                        
                        <div class="row form-group">
                            <label class="col-md-2 col-form-label">電話番号：</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="tel" placeholder="例）0312345678" required>
                            </div>
                        </div>
                        
                        <div class="row form-group">
                            <label class="col-md-2 col-form-label">内容：</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="content" placeholder="具体的にお書きください" required></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group">
                          <div class="col-md-offset-2 col-md-10">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> プライバシーポリシーに同意
                              </label>
                            </div>
                          </div>
                        </div>
                        
                        <div class="row form-group">
                            <div class="offset-md-2 col-md-10">
                                <button type="submit" class="form-control btn btn-block" style="background-color: #ecdba8;">お問い合わせ内容を送信する</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="text-center pt-3 pb-3 border-top">
            &copy; tubasa.kyoduka
        </footer>
        
        <script>   
      var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), { 
                center: { // 地図の中心を指定
                            lat: 34.6170563, 
                            lng: 135.6089362 
                        },
                 zoom: 16
            });
            
            var marker = new google.maps.Marker({
                position: map.getCenter(),
                map: map,
                label: {
                        text: "笑" ,
                        color: "#000000" ,
                        fontSize: "18px" ,
                        fontWeight: "bold"
                        }
             });

        }
        
        
    </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyAjVd0OVb0KIQr57Z3qWmrEmrxe4dTqSKo&callback=initMap" async defer></script>
    </body>