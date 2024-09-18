<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Изготовление зеркал в Москве любой сложности. Изготовление за 1 день! Московская Зеркальная Фабрика на Нагорной, 17. Звоните: +7 (495) 797-53-73 Московская Зеркальная Фабрика крупнейший производитель зеркал. Выполняем художественную обработку, витраж, состаренные зеркала, изготовление разноцветных зеркал, оформление в багет и другие");
$APPLICATION->SetPageProperty("title", "Все изделия мзф");
$APPLICATION->SetTitle("Все изделия мзф Сроки изготовления зеркал в Москве. МЗФ на Нагорной 17. 100% гарантия качества. Звоните: +7 (495) 797-53-73.");
?>

<style>
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
        background: #428bca;
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


    .viewport {}

    .content-box {}

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

    .none {
        display: none;
    }
</style>


<section>
    <div class="container">
        <div class="wrap">
            <h2 class="portfolio-title">Ванная комната</h2>
            <div class="flex" data-gallery>
                <div class="container portfolio-gallery-container">
                    <div class="viewport">
                        <div class="thumbs content-box">
                            <img src="/upload/iblock/d2e/umwn2d1wem83h682yp3gyeseshoc41f4.jpg">
                            <img src="/upload/iblock/c97/qotxlsqkctoy98ualjwb3s9kgsmhejm0.jpg">
                            <img src="/upload/iblock/147/wlzjso1gc8ru9s69bzlzyj6ffeo87xp5.jpg">
                            <img src="/upload/iblock/115/1hlc0a1l1ampp80870l23fxlxkpe3xsp.jpg">
                            <img src="/upload/iblock/d2e/umwn2d1wem83h682yp3gyeseshoc41f4.jpg">
                        </div>
                    </div>

                    <div>
                        <div class="photo-box">
                            <img src="/upload/iblock/d2e/umwn2d1wem83h682yp3gyeseshoc41f4.jpg">
                        </div>

                        <div class="control-row">
                            <button type="button" class="btn none" data-control="first">Первое</button>
                            <button type="button" class="btn" data-control="prev">
                                < </button>
                                    <button type="button" class="btn" data-control="next">></button>
                                    <button type="button" class="btn none" data-control="last">Последнее</button>
                        </div>
                    </div>
                    <div class="text-area-portfolio">
                        <h4>Установка зеркала с подсветкой в спальне — это отличный способ создать атмосферу уюта и стиля. Современные зеркала, оборудованные встроенной подсветкой, не только выполняют свою основную функцию, но и становятся важным элементом дизайна интерьера.

                            При выборе подходящего места для зеркала следует учитывать, что оно должно хорошо освещаться и быть на уровне глаз. Оптимальным вариантом будет расположить зеркало над туалетным столиком или в зоне, где вы утром собираетесь. Подсветка может быть как холодной, так и теплой, что позволит создать необходимую атмосферу — от бодрящего утра до расслабляющего вечера.

                            Во время установки необходимо продумать способ монтажа: зеркала можно прикрепить на стену с помощью кронштейнов или выбрать вариант с навешиванием. Выбор материалов также играет значительную роль: лучше отдать предпочтение влагостойкому стеклу, особенно если в спальне присутствует повышенная влажность.

                            Такое зеркало не только визуально расширит пространство, но и станет стильным акцентом, который придаст спальне индивидуальность и шарм.



                            Звоните, мы ответим на ваши вопросы!
                            Московская Зеркальная Фабрика
                            Нагорная, 17</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    (function() {
        'use strict';

        class Gallery {
            constructor(gallery) {
                this.thumbsBox = gallery.querySelector('.thumbs');
                this.thumbs = this.thumbsBox.querySelectorAll('img');
                this.image = gallery.querySelector('.photo-box img');
                this.control = gallery.querySelector('.control-row');
                this.count = this.thumbs.length;
                this.current = 0;
                this.registerEventsHandler();
            }

            registerEventsHandler() {
                this.control.addEventListener('click', this.buttonControl.bind(this));
                this.image.addEventListener('click', this.imageControl.bind(this));
                // this.image.addEventListener('wheel', this.wheelControl.bind(this));
                document.addEventListener('keydown', this.keyControl.bind(this));
                this.thumbsBox.addEventListener('click', this.thumbControl.bind(this));
            }

            showPhoto(i) {
                const src = this.thumbs[i].getAttribute('src');
                this.image.setAttribute('src', src);
                this.current = i;
            }

            buttonControl(e) {
                if (e.target.tagName != 'BUTTON') return;
                const ctrl = e.target.dataset.control;
                let argControl = {
                    first: 0,
                    last: this.count - 1,
                    prev: (this.count + this.current - 1) % this.count,
                    next: (this.current + 1) % this.count
                };
                const i = argControl[ctrl];
                this.showPhoto(i);
            }

            imageControl() {
                this.showPhoto((this.current + 1) % this.count);
            }

            keyControl(e) {
                e.preventDefault();
                const code = e.which;
                if (code != 37 && code != 39) return;
                let argControl = {
                    37: (this.count + this.current - 1) % this.count,
                    39: (this.current + 1) % this.count
                }
                this.showPhoto(argControl[code]);
            }

            wheelControl(e) {
                e.preventDefault();
                let i = (e.deltaY > 0) ? (this.current + 1) % this.count : (this.count + this.current - 1) % this.count;
                this.showPhoto(i);
            }

            thumbControl(e) {
                const target = e.target;
                if (target.tagName != 'IMG') return;
                const i = [].indexOf.call(this.thumbs, target);
                this.showPhoto(i);
            }
        }

        const galleries = document.querySelectorAll('[data-gallery]');
        for (let gallery of galleries) {
            new Gallery(gallery);
        }
    })();
</script>


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
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>