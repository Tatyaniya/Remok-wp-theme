<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package r-group
 */

get_header( 'inner' );
?>

<main class="main">

    <section class="screedFloor">
        <div class="container screedFloor__container">
            <h2 class="screedFloor__title"><?php the_title(); ?></h2>
            <div class="screedFloor__desc">

                <?php the_content(); ?>

                <!-- <div class="screedFloor__text">
                    <p>
                        Підлогове покриття - надзвичайно важлива і невід'ємна частина інтер'єру, затишку і дизайну приміщення. Але для того, щоб будь-яке покриття ефективно виконувало свою роль, необхідна ідеально рівна поверхня підлоги, якої вручну домогтися не так-то просто.
                    </p>
                    <p>
                        Наша фірма пропонує свої послуги по напівсухій стяжці підлоги, і ми гарантуємо приголомшливі результати, тому що в своїй роботі завжди дотримуємося три основних критерії:
                    </p>
                </div>
                <ul class="screedFloor__list">
                    <li class="screedFloor__item">
                        <div class="screedFloor__img">
                            <img src="img/speed.svg" alt="speed">
                        </div>
                        <div class="screedFloor__text">швидкість</div>
                    </li>
                    <li class="screedFloor__item">
                        <div class="screedFloor__img">
                            <img src="img/accuracy.svg" alt="accuracy">
                        </div>
                        <div class="screedFloor__text">акуратність</div>
                    </li>
                    <li class="screedFloor__item">
                        <div class="screedFloor__img">
                            <img src="img/profy.svg" alt="professionalism">
                        </div>
                        <div class="screedFloor__text">професіоналізм</div>
                    </li>
                </ul>
                <div class="screedFloor__text">
                    <p>
                        Спираючись на ці якості, ми створюємо ідеально рівні поверхні підлоги, які в майбутньому стають Вашим кімнатним фундаментом домашнього затишку і умиротворення.
                    </p>
                    <p>
                        Стяжка підлоги в квартирі - це складне, трудомістке, досить «запорошене» завдання, який вимагає спеціальних знань і особливої ​​підготовки. 
                    </p>
                    <p>
                        Наша бригада робітників професійно створить у Вашій квартирі рівну підлогу, адже синонім нашої фірми - слово «Ідеально»: рівна поверхня підлоги, пунктуальність, акуратність - ідеальний результат.
                    </p>
                </div> -->
            </div>
        </div>
    </section>
    <section class="popularity">
        <div class="container popularity__container">
            <h3 class="popularity__title">Ви запитаєте, чому наша фірма так популярна і має так багато клієнтів? Ми відповімо - тому що ми виконуємо свої послуги так, як того хочете Ви, замовники:
            </h3>
            <ul class="popularity__list">
                <li class="popularity__item">
                    <img class="popularity__icon" src="img/why-icon.svg" alt="icon">
                    <div class="popularity__desc">
                        Ми робимо підлогу рівною і затверділою до обумовленого часу;
                    </div>
                </li>
                <li class="popularity__item">
                    <img class="popularity__icon" src="img/why-icon.svg" alt="icon">
                    <div class="popularity__desc">
                        Ми допомагаємо підібрати варіанти, які підходять Вам за вартістю;
                    </div>
                </li>
                <li class="popularity__item">
                    <img class="popularity__icon" src="img/why-icon.svg" alt="icon">
                    <div class="popularity__desc">
                        У нас найнижча на стяжку підлоги ціна за метр роботи;
                    </div>
                </li>
                <li class="popularity__item">
                    <img class="popularity__icon" src="img/why-icon.svg" alt="icon">
                    <div class="popularity__desc">
                        Ми робимо все чисто, швидко і акуратно;
                    </div>
                </li>
                <li class="popularity__item">
                    <img class="popularity__icon" src="img/why-icon.svg" alt="icon">
                    <div class="popularity__desc">
                        Ми можемо виконати стяжку по всій квартирі або тільки однієї кімнати за Вашим бажанням;
                    </div>
                </li>
                <li class="popularity__item">
                    <img class="popularity__icon" src="img/why-icon.svg" alt="icon">
                    <div class="popularity__desc">
                        Ми завжди раді новим клієнтам і у нас завжди є, що Вам запропонувати;
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="screedOrder">
        <div class="container screedOrder__container">
            <h3 class="screedOrder__title">
                Перш, ніж замовити стяжку підлоги в квартирі, Ви обов'язково повинні ознайомитися з усіма можливими варіантами.
            </h3>
            <div class="screedOrder__info">
                <div class="screedOrder__cont">
                    <div class="screedOrder__desc">
                        <p>
                            Ми запропонуємо кілька альтернативних і допоможемо підібрати більш бюджетний варіант або навпаки, більш якісний, за Вашим бажанням.
                        </p>
                        <p>
                            Більш низька вартість зовсім не впливає на якість результату: в такі комплекти послуг входять інші матеріали, які вимагають більше часу на розрівнювання і застигання. Тому, вибираючи відповідний для себе варіант, відштовхуйтесь не тільки від цін на послуги, а й від термінів виконання.
                        </p>
                        <p>
                            Якщо Ви все ще сумніваєтеся, можете замовити «пробний» варіант і оцінити якість стяжки підлоги на прикладі однієї невеликої кімнати, а потім вирівняти підлогу і у всій квартирі.
                        </p>
                        <p>
                            Ми чекаємо на Ваші дзвінки та замовлення і завжди раді Вам допомогти.
                        </p>
                        <div class="screedOrder__phones">
                            <p>Номери телефонів:</p>
                            <div class="screedOrder__item">
                                <a href="tel:+38050 7 000 117" class="screedOrder__phone">050 7 000 117</a>
                            </div>
                            <div class="screedOrder__item">
                                <a href="tel:+38068 4 101 552" class="screedOrder__phone">068 4 101 552</a>
                            </div>
                        </div>
                        <div class="screedOrder__links">
                            <a href="javascript:void(0);" class="screedOrder__link-order">Замовити послугу</a>
                            <a href="index.html#calc" class="screedOrder__link-calc">Розрахувати вартість</a>
                        </div>
                    </div>
                </div>
                <div class="screedOrder__img">
                    <img src="img/screed-order.jpg" alt="screed">
                </div>
            </div>
        </div>
    </section>
    <section class="installation">
        <div class="container installation__container">
            <h2 class="installation__title">Процес установки стяжки</h2>
            <div class="installation__img">
                <img src="img/install.jpg" alt="installation">
            </div>
            <div class="installation__gallery">

            </div>
        </div>
    </section>

</main>

<?php

get_footer();
