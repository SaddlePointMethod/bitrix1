d<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>


<?php
CModule::IncludeModule('iblock');
$arFilter=array('IBLOCK_CODE' => 'COMMENTS_BD');
$res = CIBlockElement::GetList(Array(), $arFilter);

while($ob=$res->GetNextElement())
{
$arProp=$ob->GetProperties();
print("<div class='container'>
       <p><span>".$arProp[NAME][VALUE]."</span></p>
       <p>".$arProp[COMMENT][VALUE]."</p>
       </div>");
};

?>

    <form name="test" method="post" action="input.php">
        <label style="margin-left: 2.5%;" for="name">Ваше имя</label>
        <input type="text" id="name" name="name" size="40">
        <label style="margin-left: 2.5%;" for="email">Ваш email:</label>
        <input type="text" id="email" name="email" size="40">
        <label style="margin-left: 2.5%;" for="comment">Комментарий</label>
        <textarea name="comment" id="comment" cols="40" rows="3" style="width:90%; margin-left: 2.5%; resize: none; border: 1px solid #ccc; border-radius: 4px;"></textarea>
        <input type="submit" value="Отправить" style="margin-left: 2.5%">
        <input type="reset" value="Очистить" style="margin-left: 2.5%">
    </form>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>