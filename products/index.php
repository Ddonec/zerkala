<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Изготовление зеркал в Москве любой сложности. Изготовление за 1 день! Московская Зеркальная Фабрика на Нагорной, 17. Звоните: +7 (495) 797-53-73 Московская Зеркальная Фабрика крупнейший производитель зеркал. Выполняем художественную обработку, витраж, состаренные зеркала, изготовление разноцветных зеркал, оформление в багет и другие");
$APPLICATION->SetPageProperty("title", "Все изделия мзф");
$APPLICATION->SetTitle("Все изделия мзф Сроки изготовления зеркал в Москве. МЗФ на Нагорной 17. 100% гарантия качества. Звоните: +7 (495) 797-53-73.");
?><style>
    .portfolio_box {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .portfolio__item {
        width: calc(33% - 30px);
    }

    .portfolio__item:hover img {
        scale: 1.1;
    }

    .portfolio-title {
        margin-bottom: 30px;
        color: #051A47;
    }
</style> <section class="banner banner_tw">
<div class="banner__video">
 <video id="videoMain" loop="" autoplay="autoplay" playsinline="" muted="muted" poster="">
	<?= CFile::GetPath($GLOBALS["VIDEOS"]["PRODUCTS"]) ?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>" type="video/mp4"&gt; </video>
</div>
<div class="container">
	<div class="banner__inner">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"main",
	Array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?>
		<div class="banner__bottom">
			<h1><?= $APPLICATION->ShowTitle() ?></h1>
			<div class="banner__btn">
 <a href="#zprsPrice" class="open-modal bt bt-blue bt-bgg">ЗАКАЗАТЬ ЗВОНОК</a> <a href="#ordPrice" class="open-modal bt bt-wh bt-bgg">ЗАЯВКА НА РАСЧЁТ</a>
			</div>
		</div>
	</div>
</div>
 </section> <section>
<div class="container">
	<h2 class="portfolio-title">Portfolio</h2>
	<div class="portfolio_box">
		<div class="portfolio__item">
 <a href="http://test.zerkala.ru/portfolio/bathroom" target="_blank">
			<div class="catalog__item-img ">
				<img alt="ebe68df774eea5a5a227ae1d2aab7125.jpg" src="/upload/medialibrary/894/livmmlqtc80vreqfxmwkp3xq5j7yv50h/ebe68df774eea5a5a227ae1d2aab7125.jpg" title="ebe68df774eea5a5a227ae1d2aab7125.jpg"><br>
			</div>
			<h3 class="catalog__item-title">Ванная</h3>
 </a>
		</div>
		<div class="portfolio__item">
 <a href="http://test.zerkala.ru/portfolio/bedroom" target="_blank">
			<div class="catalog__item-img">
				<img alt="8c7ba1e4b48dcad2906e273c82c53180.jpg" src="/upload/medialibrary/342/5qrvbjisac1mwjo16xp03bd56l0amh7x/8c7ba1e4b48dcad2906e273c82c53180.jpg" title="8c7ba1e4b48dcad2906e273c82c53180.jpg"><br>
			</div>
			<h3 class="catalog__item-title">Спальня</h3>
 </a>
		</div>
		<div class="portfolio__item">
 <a href="http://test.zerkala.ru/portfolio/with-lights" target="_blank">
			<div class="catalog__item-img">
				<img alt="19dd350e93f43e00fcc5613548817eb0.jpg" src="/upload/medialibrary/682/w0qsbthrq3a6aeohvoece75mt4fhbojk/19dd350e93f43e00fcc5613548817eb0.jpg" title="19dd350e93f43e00fcc5613548817eb0.jpg"><br>
			</div>
			<h3 class="catalog__item-title">С подсветкой</h3>
 </a>
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
);?> <section class="ex">
<div class="ex__bg">
 <img src="/local/templates/zerkala/assets/img/layout/img1.jpg" alt="">
</div>
<div class="container">
	<div class="ex__inner">
		<div class="ex__l">
			<h2>эксклюзивный дизайн зеркал</h2>
			<h4 style="max-width: 607px;margin: 1em 0;font-size: 20px;font-weight: 400;">У&nbsp;вас&nbsp;есть&nbsp;полная свобода выбора: размер, форма, стиль оправы, покрытие&nbsp;— все&nbsp;зависит от&nbsp;ваших предпочтений и&nbsp;потребностей. Наша команда опытных мастеров с&nbsp;радостью поможет вам&nbsp;воплотить идеи, которые идеально подойдут под&nbsp;вашу комнату или&nbsp;офис. </h4>
			<div class="ex__btn">
 <a href="https://nagornaya17.ru/zerkala/" class="bt bt-blue bt-bgg" target="_blank">ИНТЕРНЕТ-МАГАЗИН</a> <a href="/zerkala-na-zakaz/" class="bt bt-wh bt-bgg">ЗЕРКАЛА НА ЗАКАЗ</a>
			</div>
		</div>
	</div>
</div>
 </section> <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>