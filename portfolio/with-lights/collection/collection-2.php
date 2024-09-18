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
	<div class="wrap">
		<h2 class="portfolio-title">С подсветкой</h2>
		<div class="flex" data-gallery="">
			<div class="container portfolio-gallery-container">
				<div class="viewport">
					<div class="thumbs content-box">
						<br>
						<img alt="4fdd4ee938d3b9931f4eb7c4b2ef9b69.jpg" src="/upload/medialibrary/7b3/ots4316fvi5m7wqzicqujoktqqk5umgs/4fdd4ee938d3b9931f4eb7c4b2ef9b69.jpg" title="4fdd4ee938d3b9931f4eb7c4b2ef9b69.jpg"><img alt="7c4b1d56cd1445c7f16993cfc8cc3cb1.jpg" src="/upload/medialibrary/1bd/zpxkdcqh36jnjnsa0zsa3n1ljvkckwe0/7c4b1d56cd1445c7f16993cfc8cc3cb1.jpg" title="7c4b1d56cd1445c7f16993cfc8cc3cb1.jpg"><img alt="4319a1834407d8822f9a82e12cb3e354.jpg" src="/upload/medialibrary/159/rgs7axda1ismbw2mwvacc3zykgado3tc/4319a1834407d8822f9a82e12cb3e354.jpg" title="4319a1834407d8822f9a82e12cb3e354.jpg"><img alt="8ed9a832f6954d7b8d0d0576b3e2140f.jpg" src="/upload/medialibrary/307/n9065l6908ty3nafn5mw1iod4gfnskot/8ed9a832f6954d7b8d0d0576b3e2140f.jpg" title="8ed9a832f6954d7b8d0d0576b3e2140f.jpg"><img alt="33b6b46f58a6b50806cae3dfbc869b4b.jpg" src="/upload/medialibrary/542/a2bwsnrj0wm9l6ysopex3qad7r1jznn4/33b6b46f58a6b50806cae3dfbc869b4b.jpg" title="33b6b46f58a6b50806cae3dfbc869b4b.jpg"><img alt="273ed121c9e689d8cf397cd24ac2608c.jpg" src="/upload/medialibrary/83b/gnued9834m8m88efwqhw8p41q00e4auq/273ed121c9e689d8cf397cd24ac2608c.jpg" title="273ed121c9e689d8cf397cd24ac2608c.jpg"><br>
						<br>
						<br>
						<br>
					</div>
				</div>
				<div class="viewport-box">
					<div class="photo-box">
						<img width="564" alt="4fdd4ee938d3b9931f4eb7c4b2ef9b69.jpg" src="/upload/medialibrary/7b3/ots4316fvi5m7wqzicqujoktqqk5umgs/4fdd4ee938d3b9931f4eb7c4b2ef9b69.jpg" height="705" title="4fdd4ee938d3b9931f4eb7c4b2ef9b69.jpg"><br>
					</div>
					<div class="control-row">
 <button type="button" class="btn none" data-control="first">Первое</button> <button type="button" class="btn" data-control="prev">
						&lt; </button> <button type="button" class="btn" data-control="next">&gt;</button> <button type="button" class="btn none" data-control="last">Последнее</button>
					</div>
				</div>
				<div class="text-area-portfolio">
					<h4 class="discription-portfolio">
					Установка зеркала с подсветкой в ванной — это отличный способ создать атмосферу уюта и стиля. Современные зеркала, оборудованные встроенной подсветкой, не только выполняют свою основную функцию, но и становятся важным элементом дизайна интерьера. При выборе подходящего места для зеркала следует учитывать, что оно должно хорошо освещаться и быть на уровне глаз. <br>
					<br>
					 Оптимальным вариантом будет расположить зеркало над туалетным столиком или в зоне, где вы утром собираетесь. Подсветка может быть как холодной, так и теплой, что позволит создать необходимую атмосферу — от бодрящего утра до расслабляющего вечера. Во время установки необходимо продумать способ монтажа: зеркала можно прикрепить на стену с помощью кронштейнов или выбрать вариант с навешиванием. <br>
					<br>
					 Выбор материалов также играет значительную роль: лучше отдать предпочтение влагостойкому стеклу, особенно если в спальне присутствует повышенная влажность. Такое зеркало не только визуально расширит пространство, но и станет стильным акцентом, который придаст спальне индивидуальность и шарм. Звоните, мы ответим на ваши вопросы! </h4>
					 Московская Зеркальная Фабрика<br>
					 Нагорная, 17
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
</script> <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>