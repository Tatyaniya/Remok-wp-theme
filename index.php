<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package r-group
 */

get_header();
?>

<main class="main">
    <section class="offer">
        <div class="container offer__container">
            <div class="offer__img">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/offer-rg.png" alt="RG">
            </div>
            <h1 class="offer__title">Remok Group</h1>
            <div class="offer__subtitle">...все починається з стяжки</div>
            <div class="offer__btns">                   
                <a href="javascript:void(0);" class="offer__btn offer__btn--contact">Зв’язатися з нами</a>
                <a href="#calc" class="offer__btn offer__btn--cost">Розрахувати вартість</a>
            </div>
        </div>
    </section>
    <section class="calc" id="calc">
        <div class="container calc__container">
            <div class="calc__content">
                <form action="#" class="calc__form" @submit.prevent="showResult()">
                    <div class="calc__item calc__item--small">
                        <h4 class="calc__title">Площа</h4>
                        <div class="calc__values">
                            <input type="number" :readonly="blockedForm" class="calc__input" min="2" max="10000" value="110" v-model="square">
                            <span class="calc__label">м<sup>2</sup></span>
                        </div>
                    </div>
                    <div class="calc__item calc__item--large">
                        <h4 class="calc__title">Середня товщина стяжки</h4>
                        <div class="calc__values">
                            <input type="number" :readonly="blockedForm" class="calc__input" min="6" max="30" v-model="height">
                            <span class="calc__label">см.</span>
                        </div>
                    </div>
                    <div class="calc__item">
                        <h4 class="calc__title">Матеріал</h4>
                        <div class="calc__row">
                            <input type="radio" :readonly="blockedForm" name="material" id="riverSand" value="0" v-model="sand">
                            <label for="riverSand" class="calc__radio">річковий митий пісок (відсів)</label>
                        </div>
                        <div class="calc__row">
                            <input type="radio" :readonly="blockedForm" name="material" id="whiteSand" value="1" v-model="sand">
                            <label for="whiteSand" class="calc__radio">рогатинський білий пісок</label>
                        </div>
                        <div class="calc__row">
                            <input type="radio" :readonly="blockedForm" name="material" id="mixedSand" value="2" v-model="sand">
                            <label for="mixedSand" class="calc__radio">мішаний пісок</label>
                        </div> 
                    </div>
                    <div class="calc__item calc__item--last">
                        <input type="submit" :readonly="blockedForm" class="calc__btn" value="Розрахувати вартість">
                    </div>
                </form>
                <div class="get calc__get">
                    <div class="get__cost">Вартість роботи: 
                        <span>{{ price }} грн</span>
                    </div>
                    <div class="get__receiveByMail">
                        <h4 class="get__title">Отримати розрахунок на пошту</h4>
                        <form action="#" class="get__form">
                            <input type="email" name="email" placeholder="Ваш e-mail">
                            <button type="submit" class="get__btn">Відправити</button>
                        </form>
                    </div>
                </div>
                <div class="calc__text">Вартість робіт за межами м. Івано-Франківськ обговорюється індивідуально</div>
            </div>
        </div>
    </section>
    <section class="services" id="services">
        <div class="container services__container">
            <h2 class="services__title">Послуги від Remok Group</h2>
            <ul class="services__list">
                <li class="services__item services__item--large">
                    <div class="services__icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/screed.svg" alt="screed">
                    </div>
                    <h3 class="services__subtitle">Напівсуха стяжка</h3>
                    <div class="services__desc">для квартир, будинків та комерційних <br>приміщень</div>
                    <a href="#" class="services__link">Детальніше</a>
                </li>
                <li class="services__item services__item--small">
                    <div class="services__icon">
                        
                    </div>
                    <h3 class="services__subtitle"></h3>
                    <a href="#" class="services__link"></a>
                </li>
                <li class="services__item">
                    <div class="services__icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/building.svg" alt="building">
                    </div>
                    <h3 class="services__subtitle">Будівництво котеджів</h3>
                    <a href="#" class="services__link">Детальніше</a>
                </li>
                <li class="services__item">
                    <div class="services__icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/plumbing.svg" alt="plumbing">
                    </div>
                    <h3 class="services__subtitle">Монтаж сантехніки <br>та опалення</h3>
                    <a href="#" class="services__link">Детальніше</a>
                </li>
                <li class="services__item">
                    <div class="services__icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/repairs.svg" alt="repairs">
                    </div>
                    <h3 class="services__subtitle">Ремонт під ключ</h3>
                    <a href="#" class="services__link">Детальніше</a>
                </li>
                <li class="services__item">
                    <div class="services__icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/landscape.svg" alt="landscape">
                    </div>
                    <h3 class="services__subtitle">Ландшафтний дизайн</h3>
                    <a href="#" class="services__link">Детальніше</a>
                </li>
            </ul>
            <div class="services__order">
                <button type="button" class="services__btn">Замовити послугу</button>
            </div>
        </div>
    </section>
    <section class="stages">
        <div class="container stages__container">
            <div class="stages__content">
                <h2 class="stages__title">Етапи виконання роботи</h2>
                <ul class="stages__list">
                    <li class="stages__item">
                        <div class="stages__num">01</div>
                        <div class="stages__text">Виїджаємо на об’єкт</div>
                    </li>
                    <li class="stages__item">
                        <div class="stages__num">02</div>
                        <div class="stages__text">Проводимо заміри</div>
                    </li>
                    <li class="stages__item">
                        <div class="stages__num">03</div>
                        <div class="stages__text">Визначаємо необхідну кількість <br>матеріалу</div>
                    </li>
                    <li class="stages__item">
                        <div class="stages__num">04</div>
                        <div class="stages__text">Погоджуємо дату роботи</div>
                    </li>
                    <li class="stages__item">
                        <div class="stages__num">05</div>
                        <div class="stages__text">Виконуємо роботу та здаємо <br>об’єкт замовнику в той же день</div>
                    </li>
                </ul>
            </div>
    </section>
    <section class="works" id="works">
        <div class="container works__container">
            <h2 class="works__title">Виконані роботи</h2>
            <div class="works__slider">
                <div class="works__slide">
                    <img src="img/slide-work-1.jpg" alt="slide">
                </div>
                <div class="works__slide">
                    <img src="img/slide-work-2.jpg" alt="slide">
                </div>
                <div class="works__slide">
                    <img src="img/slide-work-1.jpg" alt="slide">
                </div>
                <div class="works__slide">
                    <img src="img/slide-work-2.jpg" alt="slide">
                </div>
            </div>
        </div>                
    </section>
    <section class="why">
        <div class="container why__container">
            <h2 class="why__title">Чому з нами вигідно</h2>
            <ul class="why__list">
                <li class="why__item">
                    <div class="why__icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/why-icon.svg" alt="icon">
                    </div>
                    <div class="why__desc">
                        Безкоштовні заміри <br>протягом 12 годин <br>після дзвінка
                    </div>
                </li>
                <li class="why__item">
                    <div class="why__icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/why-icon.svg" alt="icon">
                    </div>
                    <div class="why__desc">
                        Термін виконання <br>роботи (до 200 кв.м) <br>- 1 день
                    </div>
                </li>
                <li class="why__item">
                    <div class="why__icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/why-icon.svg" alt="icon">
                    </div>
                    <div class="why__desc">
                        Акуратність під час <br>роботи
                    </div>
                </li>
                <li class="why__item">
                    <div class="why__icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/why-icon.svg" alt="icon">
                    </div>
                    <div class="why__desc">
                        Висихання стяжки <br>протягом 12 год
                    </div>
                </li>
            </ul>
            <div class="why__text">Обов'язково: наявність води та електроенергії</div>
        </div>
    </section>
    <section class="whatSay" id="whatSay">
        <div class="container whatSay__container">
            <h2 class="whatSay__title">Що говорять клієнти?</h2>
            <div class="whatSay__slider">
                <div class="whatSay__slide">
                    <img src="img/video-1.jpg" alt="video">
                    <div class="whatSay__icon"></div>
                </div>
                <div class="whatSay__slide">
                    <img src="img/video-2.jpg" alt="video">
                    <div class="whatSay__icon"></div>
                </div>
                <div class="whatSay__slide">
                    <img src="img/video-3.jpg" alt="video">
                    <div class="whatSay__icon"></div>
                </div>
                <div class="whatSay__slide">
                    <img src="img/video-1.jpg" alt="video">
                    <div class="whatSay__icon"></div>
                </div>
                <div class="whatSay__slide">
                    <img src="img/video-2.jpg" alt="video">
                    <div class="whatSay__icon"></div>
                </div>
                <div class="whatSay__slide">
                    <img src="img/video-3.jpg" alt="video">
                    <div class="whatSay__icon"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog" id="blog">
        <div class="container blog__container">
            <h2 class="blog__title">Блог</h2>
            <div class="blog__slider">
                <div class="blog__slide">
                    <div class="blog__img">
                        <img src="img/blog-1.jpg" alt="blog image">
                    </div>
                    <h3 class="blog__subtitle">Які послуги ми надаємо?</h3>
                    <div class="blog__excerpt">Стяжка напівсуха - тривалість виконання  - 1 день...</div>
                    <a href="#" class="blog__link">Читати далі</a>
                </div>
                <div class="blog__slide">
                    <div class="blog__img">
                        <img src="img/blog-2.jpg" alt="blog image">
                    </div>
                    <h3 class="blog__subtitle">Я -твій персональний порадник.</h3>
                    <div class="blog__excerpt">Сьогодні хочу розказати тобі про графік роботи...</div>
                    <a href="#" class="blog__link">Читати далі</a>
                </div>
                <div class="blog__slide">
                    <div class="blog__img">
                        <img src="img/blog-1.jpg" alt="blog image">
                    </div>
                    <h3 class="blog__subtitle">Я -твій персональний порадник.</h3>
                    <div class="blog__excerpt">Сьогодні хочу розказати тобі про графік роботи...</div>
                    <a href="#" class="blog__link">Читати далі</a>
                </div>
                <div class="blog__slide">
                    <div class="blog__img">
                        <img src="img/blog-2.jpg" alt="blog image">
                    </div>
                    <h3 class="blog__subtitle">Я -твій персональний порадник.</h3>
                    <div class="blog__excerpt">Сьогодні хочу розказати тобі про графік роботи...</div>
                    <a href="#" class="blog__link">Читати далі</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
