<?php get_header();?>



    <div class="container">

        <?php $intro = get_field('intro_');?>
        <section class="intro">
            <div class="intro__img">
                <img src="" alt="">
            </div>

            <div class="intro__copy">
                <h1 class="intro__heading"><?php echo $intro['large_title_']; ?></h1>
                <p class="intro__txt"><?php echo $intro['main_text_']; ?></p>
                <img src="" alt="" class="intro__signature">
            </div>
        </section>

    </div>



<?php get_footer();?>