<section class="counter wrapper ">
    <div class="counter__main w-100 text-center container-boxed column">
        <?php
        $title = get_sub_field('title');
        if ($title) : ?>
            <h2 class="counter__title"> <?php echo $title; ?></h2>
        <?php endif; ?>

        <?php if (have_rows('counter')) : ?>
            <div class="counter__list ">
                <?php while (have_rows('counter')) : the_row(); ?>
                    <div class="counter__item flex column align-center">
                        <h3 class="counter__value">
                        <?php if ($count_value = get_sub_field('count_value')) : ?>
                            <span><?php echo $count_value; ?></span>
                        <?php endif; ?>
                        <?php if ($count_sign = get_sub_field('count_sign')) : ?>
                            <span><?php echo $count_sign; ?></span>
                        <?php endif; ?>
                        </h3>
                        <?php if ($count_title = get_sub_field('count_title')) : ?>
                            <h6 class="counter__title"><?php echo $count_title; ?></h6>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <?php
        $text = get_sub_field('text');
        if ($text) : ?>
            <div class="counter__text">   <?php echo $text; ?></div>
        <?php endif; ?>
    </div>
</section>
