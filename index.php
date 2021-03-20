<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>

<?php
$APPLICATION->IncludeComponent(
    "qq:comments",
    ".default",
    array(
        'name'=>$_POST['name'],
        'email'=>$_POST['email'],
        'comment'=>$_POST['comment']
    )
);
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>