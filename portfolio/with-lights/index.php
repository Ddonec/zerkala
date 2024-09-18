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

    .portfolio-gallery-container {
        display: flex;
        gap: 20px;
        padding: 0;
    }

    .text-area-portfolio {
        width: 50%;
        margin-left: auto;
        font-size: 16px;
    }


    button {
        width: 100px;
        height: 30px;
        display: block;
        font-weight: 500;
        font-size: 12px;
        line-height: 24px;
        color: #eee;
        font-family: 'Roboto', sans-serif;
        text-decoration: none;
        text-transform: uppercase;
        text-align: center;
        float: left;
        user-select: none;
        border: solid 1px #357ebd;
        border-radius: 3px;
        outline: none;
        background: #051A47;
        cursor: pointer;
        transition: all 0.2s;
    }

    button:hover {
        border-color: #285e8e;
        background: #3276b1;
    }

    .photo-box {
        cursor: pointer;
    }

    .viewport-box {
        width: 40%;
    }


    .thumbs {
        overflow: auto;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .thumbs img {
        cursor: pointer;
        width: 50px;
        height: 50px;
    }

    .thumbs img+img {
        margin-top: 2px;
    }

    .control-row {
        padding: 20px 0 30px;
        display: flex;
        justify-content: space-between;
    }

    .discription-portfolio {
        font-size: 18px;
    }

    .none {
        display: none;
    }

    @media(max-width: 900px) {
        .portfolio-gallery-container {
            flex-direction: column;
        }

        .text-area-portfolio,
        .viewport-box {
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        .viewport-box {
            order: -2;
        }

        .thumbs {
            flex-direction: row;
        }

        .viewport {
            order: -1;
        }
    }
</style> <section>
<div class="container">
	<h2 class="portfolio-title">Варианты ванных</h2>
	<div class="portfolio_box">
		<div class="portfolio__item">
 <a href="http://test.zerkala.ru/portfolio/with-lights/collection/collection-1.php" target="">
			<div class="catalog__item-img ">
				<img alt="8ed9a832f6954d7b8d0d0576b3e2140f.jpg" src="/upload/medialibrary/307/n9065l6908ty3nafn5mw1iod4gfnskot/8ed9a832f6954d7b8d0d0576b3e2140f.jpg" title="8ed9a832f6954d7b8d0d0576b3e2140f.jpg"><br>
			</div>
			<h3 class="catalog__item-title">С подсветкой 1</h3>
 </a>
		</div>
		<div class="portfolio__item">
 <a href="http://test.zerkala.ru/portfolio/with-lights/collection/collection-2.php" target="">
			<div class="catalog__item-img">
				<img alt="19dd350e93f43e00fcc5613548817eb0.jpg" src="/upload/medialibrary/682/w0qsbthrq3a6aeohvoece75mt4fhbojk/19dd350e93f43e00fcc5613548817eb0.jpg" title="19dd350e93f43e00fcc5613548817eb0.jpg"><br>
			</div>
			<h3 class="catalog__item-title">С подсветкой 2</h3>
 </a>
		</div>
		<div class="portfolio__item">
 <a href="http://test.zerkala.ru/portfolio/with-lights/collection/collection-3.php" target="">
			<div class="catalog__item-img">
				<img alt="7c4b1d56cd1445c7f16993cfc8cc3cb1.jpg" src="/upload/medialibrary/1bd/zpxkdcqh36jnjnsa0zsa3n1ljvkckwe0/7c4b1d56cd1445c7f16993cfc8cc3cb1.jpg" title="7c4b1d56cd1445c7f16993cfc8cc3cb1.jpg"><br>
			</div>
			<h3 class="catalog__item-title">С подсветкой 3</h3>
 </a>
		</div>
	</div>
</div>
 </section> <section class="ex">
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