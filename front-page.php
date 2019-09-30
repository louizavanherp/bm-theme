<?php get_header();?>



    <div class="container">

        


        <div class="container">

            <?php $intro = get_field('intro');?>
            <section class="intro row">
                <div class="intro__img col">

                    <?php 

                    if( !empty($intro['image']) ): ?>

                        <img src="<?php echo $intro['image']['sizes']['medium']; ?>" alt="<?php echo $intro['image']['alt']; ?>" />

                    <?php endif; ?>

                </div>

                <div class="intro__copy col">
                    <h1 class="intro__heading"><?php echo $intro['large_title']; ?></h1>
                    <p class="intro__txt"><?php echo $intro['main_text']; ?></p>
                    <?php 

                    if( !empty($intro['signature']) ): ?>

                        <img src="<?php echo $intro['signature']['sizes']['thumbnail']; ?>" alt="<?php echo $intro['signatre']['alt']; ?>" />

                    <?php endif; ?>
                </div>
            </section>

            <?php $services = get_field('services');?>
            <section class="services">
                <h1><?php echo $services['title']; ?></h1>

                <div class="row">
                    <div class="col">
                        <h2><?php echo $services['subtitle_1']; ?></h2>
                        <?php echo $services['subtext_1']; ?>
                    </div>

                    <div class="col">
                        <h2><?php echo $services['subtitle_2']; ?></h2>
                        <?php echo $services['subtext_2']; ?>
                    </div>

                    <div class="col">
                        <h2><?php echo $services['subtitle_3']; ?></h2>
                        <?php echo $services['subtext_3']; ?>
                    </div>

                    <div class="col">
                        <h2><?php echo $services['subtitle_4']; ?></h2>
                        <?php echo $services['subtext_4']; ?>
                        <?php echo $services['subtext_4_cta']; ?>
                    </div>

                </div>
            </section>

        </div>

    </div>



<?php get_footer();?>