<?php

if(!empty($to) && !empty($comment)){

    mb_language("Japanese");
    mb_internal_encoding("UTF-8");

    $from = 'メールアドレス';

    $result = mb_send_mail($from, "wip.tokyoからお問い合わせ", "from: ".$to."\n".$comment);

    if($result){
        unset($_POST);
        $msg = 'メールが送信されました';
    } else{
        $msg = 'メールの送信に失敗しました';
    }
}else{
    $msg = '全て入力してください';
}