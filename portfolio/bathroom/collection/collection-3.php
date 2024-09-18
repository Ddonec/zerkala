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
</style>
<section>
    <div class="container">
        <div class="wrap">
            <h2 class="portfolio-title">Ванная комната</h2>
            <div class="flex" data-gallery="">
                <div class="container portfolio-gallery-container">
                    <div class="viewport">
                        <div class="thumbs content-box">
                            <img alt="photo_2024-09-17_15-19-49.jpg" src="/upload/medialibrary/48c/3zgd9go3grhr68p3kbo591n7st7stan6/photo_2024_09_17_15_19_49.jpg" title="photo_2024-09-17_15-19-49.jpg"><br>
                            <img alt="photo_2024-09-17_15-19-48.jpg" src="/upload/medialibrary/11a/4cneyc0tfo2e9gc6h4z81ir0krcu3tzc/photo_2024_09_17_15_19_48.jpg" title="photo_2024-09-17_15-19-48.jpg"><br>
                            <img alt="photo_2024-09-17_15-19-50 (2).jpg" src="/upload/medialibrary/276/f073q9gfw3qf240tyy0wx48lkycpguux/photo_2024_09_17_15_19_50-_2_.jpg" title="photo_2024-09-17_15-19-50 (2).jpg"><br>
                            <img alt="photo_2024-09-17_15-19-50.jpg" src="/upload/medialibrary/c48/dceaf0gdbcqnq1ostfl6gbv3fvlg8x4u/photo_2024_09_17_15_19_50.jpg" title="photo_2024-09-17_15-19-50.jpg"><br>
                            <img alt="photo_2024-09-17_15-19-51.jpg" src="/upload/medialibrary/2bf/y27srl8qv3atakx9hnczf3yssg71ayfn/photo_2024_09_17_15_19_51.jpg" title="photo_2024-09-17_15-19-51.jpg"><br>
                        </div>
                    </div>
                    <div class="viewport-box">
                        <div class="photo-box">
                            <img alt="photo_2024-09-17_15-19-49.jpg" src="/upload/medialibrary/48c/3zgd9go3grhr68p3kbo591n7st7stan6/photo_2024_09_17_15_19_49.jpg" title="photo_2024-09-17_15-19-49.jpg">
                        </div>
                        <div class="control-row">
                            <button type="button" class="btn none" data-control="first">Первое</button> <button type="button" class="btn" data-control="prev">
                                &lt; </button> <button type="button" class="btn" data-control="next">&gt;</button> <button type="button" class="btn none" data-control="last">Последнее</button>
                        </div>
                    </div>
                    <div class="text-area-portfolio">
                        <h4 class="discription-portfolio">
                            Установка зеркала с подсветкой в ванной — это отличный способ создать атмосферу уюта и стиля.
                            Современные зеркала, оборудованные встроенной подсветкой, не только выполняют свою основную функцию, но и становятся важным элементом дизайна интерьера.
                            При выборе подходящего места для зеркала следует учитывать, что оно должно хорошо освещаться и быть на уровне глаз.
                            <br><br>
                            Оптимальным вариантом будет расположить зеркало над туалетным столиком или в зоне, где вы утром собираетесь.
                            Подсветка может быть как холодной, так и теплой, что позволит создать необходимую атмосферу — от бодрящего утра до расслабляющего вечера.
                            Во время установки необходимо продумать способ монтажа: зеркала можно прикрепить на стену с помощью кронштейнов или выбрать вариант с навешиванием.
                            <br><br>
                            Выбор материалов также играет значительную роль: лучше отдать предпочтение влагостойкому стеклу, особенно если в спальне присутствует повышенная влажность.
                            Такое зеркало не только визуально расширит пространство, но и станет стильным акцентом, который придаст спальне индивидуальность и шарм. Звоните, мы ответим на ваши вопросы!
                        </h4>
                        Московская Зеркальная Фабрика<br> Нагорная, 17
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
<br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>