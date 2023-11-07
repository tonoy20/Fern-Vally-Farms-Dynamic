<footer>
    <div class="down_part d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="down1 col-md-5">
                    <p class="down_h1"><?php the_field('footer_title_1','option') ?></p>
                    <p class="down_p1"><?php the_field('footer_description_1','option') ?></p>
                </div>

                <div class="col-md-7 d-flex align-items-center justify-content-end down2">
                    <div class="name_box"><input class="name_in" type="text" placeholder="name"></div>
                    <div class="email_box"><input class="name_in" type="text" placeholder="email"></div>
                    <button class="down_btn">JOIN</button>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    <div class="footer1 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-5 d-flex align-items-center">
                    <p class="footerP"><?php the_field('footer_text_1','option') ?> | <?php the_field('footer_text_2','option') ?> | <?php the_field('footer_text_3','option') ?> | <?php the_field('footer_text_4','option') ?></p>
                </div>
                <div class="col-md-3 d-flex align-items-center">
                    <img class="footerImg" src="<?php the_field('footer_image_1', 'option');?>">
                    <img class="footerImg" src="<?php the_field('footer_image_2', 'option');?>">
                    <img class="footerImg" src="<?php the_field('footer_image_3', 'option');?>">
                </div>
                <div class="col-md-4 footerC d-flex align-items-center">
                    &copy; <?php the_field('footer_copyright', 'option') ?>
                </div>
            </div>
            <p class="footerline"></p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
    $('.slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        dots: false,
        arrows: false
    });
</script>

<script type="text/javascript">
    $('.slidimg').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
    $('.prod_slid').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
</script>

<script>
    function openModal() {
        document.getElementById("myModal").style.display = "block";
    }

    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>

</body>

</html>