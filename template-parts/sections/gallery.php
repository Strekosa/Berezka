<script type="text/javascript">

    jQuery(document).ready(function () {
        jQuery('.gallery-slider').slick({
            dots: false,
            arrows: true,
            infinite: true,
             autoplay: true,
            autoplaySpeed: 0,
            speed: 6000,
            cssEase: 'linear',
            easing: 'easy',
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,

                    }
                },
                {
                    breakpoint: 850,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1

                    }
                },
                {
                    breakpoint: 550,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },
            ]
        });
    });
</script>

<section class="gallery">
    <div class="container-boxed flex column ">

        <?php
        $images = get_sub_field('gallery');
        if ($images): ?>
            <div class="gallery-slider">

                <?php foreach ($images as $image): ?>
                    <div class="gallery__item slick-slid flex align-center justify-center">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <p><?php echo esc_html($image['caption']); ?></p>
                    </div>
                <?php endforeach; ?>

            </div>

        <?php endif; ?>

        <?php
        $link = get_sub_field('link');
        if ($link):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="button gallery__button"
               href="<?php echo esc_url($link_url); ?>"
               target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        <?php endif; ?>


    </div>
</section>