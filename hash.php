<?php
//以下でHash化＝アルゴリズムをかけて読めない文字列にする（もとに戻せない）
//暗号化はロジックが別れば複合可能な点でHash化と異なる。
//PASSWORD_DEFAULTという方式で、Test1のパスワードをHash化
$pw = password_hash("test1", PASSWORD_DEFAULT);
echo $pw 



//Hash化で難読化してもVerifyでPWが一致しているかは判断可能⇓⇓
// var_dump(password_verify("test1", $pw));

?>
