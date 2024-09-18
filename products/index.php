<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Изготовление зеркал в Москве любой сложности. Изготовление за 1 день! Московская Зеркальная Фабрика на Нагорной, 17. Звоните: +7 (495) 797-53-73 Московская Зеркальная Фабрика крупнейший производитель зеркал. Выполняем художественную обработку, витраж, состаренные зеркала, изготовление разноцветных зеркал, оформление в багет и другие");
$APPLICATION->SetPageProperty("title", "Все изделия мзф");
$APPLICATION->SetTitle("Все изделия мзф Сроки изготовления зеркал в Москве. МЗФ на Нагорной 17. 100% гарантия качества. Звоните: +7 (495) 797-53-73.");
?>

    <section class="banner banner_tw">
        <div class="banner__video">
            <video id="videoMain" loop autoplay="autoplay" playsinline muted="muted" poster="">
                <source id="videoMainSource"  src="<?= CFile::GetPath($GLOBALS["VIDEOS"]["PRODUCTS"]) ?>" type="video/mp4">
            </video>
        </div>
        <div class="container">
            <div class="banner__inner">
                <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "main", Array(
                    "PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
                    "SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
                    "START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
                ),
                    false
                );?>
                <div class="banner__bottom" >
                    <h1><?= $APPLICATION->ShowTitle() ?></h1>
                    <div class="banner__btn">
                        <a href="#zprsPrice" class="open-modal bt bt-blue bt-bgg">ЗАКАЗАТЬ ЗВОНОК</a>
                        <a href="#ordPrice" class="open-modal bt bt-wh bt-bgg">ЗАЯВКА НА РАСЧЁТ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "products_catalog",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "N",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("NAME","PREVIEW_PICTURE",""),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "10",
        "IBLOCK_TYPE" => "Content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "N",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "8",
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
        "PROPERTY_CODE" => array("LINK",""),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "ID",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
);?>
    <section class="ex">
        <div class="ex__bg">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/layout/img1.jpg" alt="">
        </div>
        <div class="container">
            <div class="ex__inner">
                <div class="ex__l">
                    <h2>эксклюзивный дизайн зеркал</h2>
                    <h4 style="max-width: 607px;margin: 1em 0;font-size: 20px;font-weight: 400;">У вас есть полная свобода выбора: размер, форма, стиль оправы, покрытие — все зависит от ваших предпочтений и потребностей. Наша команда опытных мастеров с радостью поможет вам воплотить идеи, которые идеально подойдут под вашу комнату или офис. </h4>
                    <div class="ex__btn">
                        <a href="https://nagornaya17.ru/zerkala/" class="bt bt-blue bt-bgg" target="_blank">ИНТЕРНЕТ-МАГАЗИН</a>
                        <a href="/zerkala-na-zakaz/" class="bt bt-wh bt-bgg">ЗЕРКАЛА НА ЗАКАЗ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>