<?php
sleep(2);
/*
echo'<pre>';
print_r($_POST);
echo'</pre>';
*/

if($_POST['eposta'] == 'ali' && $_POST['sifre'] == '123'){
    echo 'Giriş başarılı';
}else{
    //echo '<script>window.location.href = "404.php";</script>';
    echo 'başarısız';
}
