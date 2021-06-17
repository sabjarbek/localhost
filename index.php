<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "🏠 Официальный сайт агентства недвижимости в г. Видное и Ленинском районе");
$realtyModuleIncluded = CModule::IncludeModule("citrus.arealty");

$APPLICATION->SetPageProperty("show_sidebar", "N");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Сайт агентства недвижимости - Агентство недвижимости");
$APPLICATION->SetPageProperty("description", "Агентство недвижимости Агровид оказывает весь спектр услуг по покупке, аренде, продажи и обмену недвижимости в г. Видное и Ленинском районе. Звоните нам +74950884312");
$APPLICATION->SetPageProperty("keywords", "Агентство недвижимости видное, купить квартиру через агентство недвижимости, ленинский район, агентство недвижимости");
?><?$APPLICATION->IncludeComponent(
	"citrus:realty.favourites",
	"block",
	Array(
		"PATH" => "/predlozhenija/izbrannoe/"
	)
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.smart.filter",
	".default",
	Array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"DISPLAY_ELEMENT_COUNT" => "N",
		"FILTER_NAME" => "arrFilter",
		"FILTER_VIEW_MODE" => "vertical",
		"FORM_ACTION_ON_SECTION_PAGE" => "Y",
		"IBLOCK_ID" => $realtyModuleIncluded?Citrus\Arealty\Helper::getIblock("offers"):false,
		"IBLOCK_TYPE" => "realty",
		"INSTANT_RELOAD" => "N",
		"PAGER_PARAMS_NAME" => "arrPager",
		"POPUP_POSITION" => "left",
		"SAVE_IN_SESSION" => "N",
		"SECTION_CODE" => "kvartiry-i-komnaty",
		"SECTION_CODE_PATH" => "",
		"SECTION_DESCRIPTION" => "-",
		"SECTION_ID" => "",
		"SECTION_TITLE" => "-",
		"SEF_MODE" => "N",
		"SEF_RULE" => "",
		"SMART_FILTER_PATH" => "",
		"XML_EXPORT" => "N"
	)
);?>
<div class="section-block offers content-col">
	<div class="h2">
		 Предложения
	</div>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"services",
	Array(
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "services",
		"COUNT_ELEMENTS" => "N",
		"IBLOCK_ID" => $realtyModuleIncluded?\Citrus\Arealty\Helper::getIblock("services"):"",
		"IBLOCK_TYPE" => "realty",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(0=>"PICTURE",1=>"",),
		"SECTION_ID" => "",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "LINE"
	)
);?>
</div>
 <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
	"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_MODE" => "php",
		"EDIT_TEMPLATE" => "page_inc.php",
		"PATH" => SITE_DIR."include/section_help.php"
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "Y"
	)
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_MODE" => "php",
		"EDIT_TEMPLATE" => "page_inc.php",
		"PATH" => SITE_DIR."include/seo_main.php"
	)
);?> <section class="section-block our_team">
<div class="row-ib row-grid">
	<div class="col-dt-6 content-col">
		<div class="h2">
			 Кто мы?
		</div>
		<div class="tag-p">
			 Агентство недвижимости ООО «Фирма Агро-вид», в городе Видное – районном центре Ленинского района Московской области, &nbsp;было создано одним из первых и ведет свою историю начиная с 1994 года. В течение вот уже более 23 лет своей деятельности наше Агенство непрерывно оказывает услуги населению Москвы и Московской области, а также гражданам, прибывшим из других регионов, по всем без исключения вопросам, связанных с Недвижимостью в Москве и Московской области, а также в других регионах РФ.<br>
		</div>
		<div class="tag-p">
 <a href="/kompanija/litsenzii-i-nagrady.php" class="btn btn-secondary btn-big"> <span class="btn-label">Лицензии и сертификаты</span> </a>
		</div>
	</div>
    
	<div class="col-dt-6 content-col">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"staff_slider", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BLOCK_TITLE" => "Наша команда",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "staff_slider",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "company",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "10",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "email",
			1 => "phone",
			2 => "contacts",
			3 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ACTIVE_FROM",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "DESC",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
);?>
	</div>
</div>
 <!-- row --> </section> <section class="block new_objects content-col">
<div class="h2">
	 Наши объекты
</div>
 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"catalog_cards",
	Array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/personal/basket.php",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPATIBLE_MODE" => "Y",
		"COMPONENT_TEMPLATE" => "catalog_cards",
		"DETAIL_URL" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => Citrus\Arealty\SortOrder::getActualField("DATE_CREATE"),
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "DESC",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "",
		"IBLOCK_ID" => $realtyModuleIncluded?\Citrus\Arealty\Helper::getIblock("offers"):"",
		"IBLOCK_TYPE" => "realty",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LABEL_PROP" => "-",
		"LINE_ELEMENT_COUNT" => "",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_LIMIT" => "5",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "10",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"contact",2=>"cost",3=>"address",4=>"district",5=>"rooms",6=>"floor",7=>"floors",8=>"common_area",9=>"living_area",10=>"kitchen_area",11=>"balcony",12=>"wc",13=>"condition",14=>"documents",15=>"house_type",16=>"quick_sale",17=>"text_location",18=>"text_prices",19=>"text_mortage",20=>"",),
		"SECTION_CODE" => "",
		"SECTION_ID" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "Y",
		"SHOW_MAP" => "Y",
		"SHOW_PRICE_COUNT" => "1",
		"TEMPLATE_THEME" => "blue",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N"
	)
);?> </section> <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>