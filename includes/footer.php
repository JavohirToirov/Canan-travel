
    <footer class="footer-box">
        <div class="container">
            <div class="footer-box-img">
                <a href="http://cannan"><img src="image/canaan-logo-white.png" alt=""></a>  
            </div>
            <div class="footer-box-menu">
                <div class="footer-box-menu-ph">
                    <a href="tel:998781480740">
                        <span class="footer-box-menu-ph-call">Call us</span>
                        <br>
                        <div class="footer-box-menu-ph-icon d-flex align-items-center">
                            <i class="fas fa-phone-alt"></i>
                            <span>+998781480740</span>
                        </div>
                    </a>
                    <br>
                    <a href="mailto:info@canaan.travel">
                        <span class="footer-box-menu-ph-call">E-mail</span>
                        <br>
                        <div class="footer-box-menu-ph-icon d-flex align-items-center">
                            <i class="fas fa-phone-alt"></i>
                            <span>info@canaan.travel</span>
                        </div>
                    </a>
                </div>
                <div class="footer-box-menu-link">
                    <ul>
                    <? foreach($arrayPagesFotter as $link => $pageInfo):?>
                        <li><a href="/?route=<?=$link?>"><?=$pageInfo['page_title']?></a></li>
                    <?endforeach;?>
                    </ul>
                </div>
                <div class="footer-box-menu-link">
                    <ul>
                    <? foreach($arrayPagesFotterSecond as $link => $pageInfo):?>
                        <li><a href="/?route=<?=$link?>"><?=$pageInfo['page_title']?></a></li>
                    <?endforeach;?>
                    </ul>
                </div>
                <div class="footer-box-menu-text">
                    <p>Our company has all the necessary licenses and quality certificates. Read independent reviews about us at TripAdvisor</p>
                </div>
            </div>
            <p class="footer-box-p">&copy; 2021 Canaan Travel. All rights reserved</p>
        </div>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
        var swiper = new Swiper(".swiper-container", {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: ".swipper-pagin-second",
                clickable: true,
            },
        });
    </script>
</body>

</html>