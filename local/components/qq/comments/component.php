<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
CModule::IncludeModule('iblock');

$PROP = array();
$PROP[NAME] = htmlspecialchars($arParams['name']);
$PROP[EMAIL] = htmlspecialchars($arParams['email']);
$PROP[COMMENT] = htmlspecialchars($arParams['comment']);

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
$PRODUCT_ID = $el->Add($arLoadProductArray);
$this->IncludeComponentTemplate();
?>