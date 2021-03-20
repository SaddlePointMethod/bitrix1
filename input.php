<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<meta http-equiv="refresh" content="0; url=/index.php">

<?

CModule::IncludeModule('iblock');

$PROP = array();
$PROP[NAME] = htmlspecialchars($_POST['name']);  // свойству с кодом 12 присваиваем значение "Белый"
$PROP[EMAIL] = htmlspecialchars($_POST['email']);       // свойству с кодом 3 присваиваем значение 38
$PROP[COMMENT] = htmlspecialchars($_POST['comment']);

$el = new CIBlockElement;
$arLoadProductArray = Array(
    "MODIFIED_BY"    => $USER->GetID(), // элемент изменен текущим пользователем
    "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
    "IBLOCK_ID"      => 5,
    "PROPERTY_VALUES"=> $PROP,
    "NAME"           => "Элемент",
    "ACTIVE"         => "Y",            // активен
);

if($PRODUCT_ID = $el->Add($arLoadProductArray))
    echo "New ID: ".$PRODUCT_ID;
else
    echo "Error: ".$el->LAST_ERROR;
?>

