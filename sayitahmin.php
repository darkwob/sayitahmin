<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SAYI TAHMİN OYUNU- PHP DERS(BENİM YAPTIM)</title>

</head>
<body>

    <?php
    $rand = rand(1,2);
    $sayi = $_POST['sayi'];
    if (isset($_POST['kontrol'])) {
        if ($sayi> 100) 
        {
            $sonuc = "<span style=\"color: rgb(252, 123, 4);\">*Lütfen 0 ile 100 arası bir değer giriniz</span>";
        }
        else
        {
            if (is_numeric($sayi)) 
            {
                if ($sayi == $rand) 
                {
                    $sonuc = "<span style=\"color: green;\">Tebrikler! Doğru Tahmin Ettiniz.</span>";
                }
                else
                {
                    $sonuc = "<span style=\"color: rgb(252, 123, 4);\">Üzgünüm! Yanlış Tahmin Ettiniz.</span>";
                }
            }
            else
            {
                $sonuc = "<span style=\"color: rgb(252, 123, 4);\">*Lütfen Sayısal bir değer Giriniz!</span>";
            }
            

        }
        
    }
    ?>


    <form action="" method="post">
        <label  for="sayi">Sayınız:</label>
        <input type="text" name="sayi" id="" maxlength="3" placeholder="Bir Sayı Giriniz">
        <button name="kontrol" class="noselect">Tahmin Yap</button>
        <p>*0 ile 100 arası bir sayı giriniz!</p>
        <?= $sonuc ?>  
          

        
    </form>
</body>
</html>