<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<meta http-equiv="refresh" content="0; url=/index.php">

<?

CModule::IncludeModule('iblock');

$PROP = array();
$PROP[NAME] = htmlspecialchars($_POST['name']);
$PROP[EMAIL] = htmlspecialchars($_POST['email']);
$PROP[COMMENT] = htmlspecialchars($_POST['comment']);

$arFilter=array('IBLOCK_CODE' => 'COMMENTS_BD');
$res = CIBlockElement::GetList(Array(), $arFilter);
$iblock_id = $res->Fetch()['IBLOCK_ID'];

$el = new CIBlockElement;
$arLoadProductArray = Array(
    "MODIFIED_BY"    => $USER->GetID(),
    "IBLOCK_SECTION_ID" => false,
    "IBLOCK_ID" => $iblock_id,
    "PROPERTY_VALUES"=> $PROP,
    "NAME"           => "Элемент",
    "ACTIVE"         => "Y",            
);

/*if($PRODUCT_ID = $el->Add($arLoadProductArray))
    echo "New ID: ".$PRODUCT_ID;
else
    echo "Error: ".$el->LAST_ERROR;*/
?>

