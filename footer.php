<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package r-group
 */

?>

<footer class="footer" id="footer">
    <div class="container footer__container">
        <div class="footer__items">
            <div class="footer__item footer__item--contacts">
                <h2 class="footer__title">Контакти</h2>
                <div class="data footer__data">
                    <address class="data__item">
                        <div class="data__icon">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/marker.svg" alt="marker">
                        </div>
                        <div class="data__text">м.Івано-Франківськ</div>               
                    </address>
                    <div class="data__item">
                        <div class="data__icon">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/mail.svg" alt="mail">
                        </div>
                        <a href="mailto:mail@mail.com" class="data__mail">mail@mail.com</a>
                    </div>
                    <div class="data__item data__item--clock">
                        <div class="data__icon">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/clock.svg" alt="clock">
                        </div>
                        <div class="data__text">08:00-20:00</div>
                    </div>
                    <div class="data__item">
                        <div class="data__icon">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/phone.svg" alt="phone">
                        </div>
                        <div class="data__phones">
                            <a href="tel:+380507000117" class="data__phone">050 7 000 117</a>
                            <a href="tel:+380684101552" class="data__phone">068 4 101 552</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="whatDoing footer__item footer__item--middle">
                <div class="whatDoing__items">
                    <div class="whatDoing__item"><a href="<?php echo home_url('/services/dry-screed/'); ?>" class="whatDoing__link">напівсуха стяжка</a></div>
                    <div class="whatDoing__item"><a href="<?php echo home_url('/services/plumbing-and-burning/'); ?>" class="whatDoing__link">монтаж сантехніки <br>та опалення</a></div>
                </div>
                <div class="whatDoing__items">
                    <div class="whatDoing__item"><a href="<?php echo home_url('/services/repair-key/'); ?>" class="whatDoing__link">ремонт під ключ</a></div>
                    <div class="whatDoing__item"><a href="<?php echo home_url('/services/budivnycztvo-kotedzhiv/'); ?>" class="whatDoing__link">будівництво котеджів</a></div>
                    <div class="whatDoing__item"><a href="<?php echo home_url('/services/landscape-design/'); ?>" class="whatDoing__link">ландшафтний дизайн</a></div>
                </div>
            </div>
            <div class="footer__item footer__item--last">
                <h3 class="footer__title">Запишіть контакти і ми Вам передзвонимо</h3>
                <form action="#" class="footer__form">
                    <input type="text" name="phoneFeedback" placeholder="Ваш телефон">
                    <button type="submit" class="footer__btn">Відправити</button>                
                </form>
            </div>
        </div>
    </div>
    </footer>
    <div id="loader">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/ripple.svg" alt="ripple">
    </div>
    <div class="modal-overlay d-none">
        <div class="modal" id="modalSend">
            <div class="modal__window">
                <h3 class="modal__title">Запишіть контакти і ми Вам передзвонимо</h3>
                <form action="#" class="modal__form">
                    <input type="text" name="phoneModal" placeholder="Ваш телефон">
                    <button type="submit" class="modal__btn">Відправити</button>                
                </form>
            </div>
        </div>
    </div>
    
    <div class="modal-overlay-thanks d-none">
        <div class="modal-thanks" id="modalThanks">
            <div class="modal-thanks__window">
                <h3 class="modal-thanks__title">Дякуємо!</h3>
            </div>
        </div>
    </div>
    
</div> 

<?php wp_footer(); ?>
</body>
</html>

	