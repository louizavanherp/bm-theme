<?php get_header();?>


            <?php $intro = get_field('intro');?>
            <section class="intro container">
                <div class="row">
                    <div class="intro__img col">

                        <?php 

                        if( !empty($intro['image']) ): ?>

                            <img src="<?php echo $intro['image']['sizes']['medium']; ?>" alt="<?php echo $intro['image']['alt']; ?>" />

                        <?php endif; ?>

                    </div>

                    <div class="intro__copy col">
                        <h1 class="intro__heading"><?php echo $intro['large_title']; ?></h1>
                        <p class="intro__txt"><?php echo $intro['main_text']; ?></p>
                        <?php if( !empty($intro['signature']) ): ?>
                        <img src="<?php echo $intro['signature']['sizes']['thumbnail']; ?>" alt="<?php echo $intro['signatre']['alt']; ?>" />
                        <?php endif; ?>
                    </div>
                </div>
                <a href="<?php echo $intro['read_more_link'] ?>"><?php echo $intro['read_more_link_text'];?></a>
            </section>

            <?php $services = get_field('services');?>
            <section class="services container" id="services">
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

            <?php $cases = get_field('cases');?>
            <section class="cases container">
                <div class="row">
                    <div class="col">
                    <?php if( !empty($cases['image_1']) ): ?>
                    <img src="<?php echo $cases['image_1'] ?>" alt="<?php echo $cases['image_1']['alt']; ?>" />
                    <?php endif; ?>
                    </div>
                    <div class="col-md-auto">
                        <hr class="line">
                    </div>
                    <div class="col col-lg-2">
                    <?php if( !empty($cases['title_1']) ): ?>
                        <p><?php echo $cases['title_1'] ?></p>
                    <?php endif; ?>
                    <?php if( !empty($cases['link_1']) || !empty($cases['link_text']) ): ?>
                        <a href="<?php echo $cases['link_1'] ?>"><?php echo $cases['link_text'];?></a>
                    <?php endif; ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                    <?php if( !empty($cases['image_2']) ): ?>
                    <img src="<?php echo $cases['image_2'] ?>" alt="<?php echo $cases['image_2']['alt']; ?>" />
                    <?php endif; ?>
                    </div>
                    <div class="col-md-auto">
                        <hr class="line">
                    </div>
                    <div class="col col-lg-2">
                    <?php if( !empty($cases['title_2']) ): ?>
                        <p><?php echo $cases['title_2'] ?></p>
                    <?php endif; ?>
                    <?php if( !empty($cases['link_2']) || !empty($cases['link_text']) ): ?>
                        <a href="<?php echo $cases['link_2'] ?>"><?php echo $cases['link_text'];?></a>
                    <?php endif; ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                    <?php if( !empty($cases['image_3']) ): ?>
                    <img src="<?php echo $cases['image_3'] ?>" alt="<?php echo $cases['image_3']['alt']; ?>" />
                    <?php endif; ?>
                    </div>
                    <div class="col-md-auto">
                        <hr class="line">
                    </div>
                    <div class="col col-lg-2">
                    <?php if( !empty($cases['title_3']) ): ?>
                        <p><?php echo $cases['title_3'] ?></p>
                    <?php endif; ?>
                    <?php if( !empty($cases['link_3']) || !empty($cases['link_text']) ): ?>
                        <a href="<?php echo $cases['link_3'] ?>"><?php echo $cases['link_text'];?></a>
                    <?php endif; ?>
                    </div>
                </div>
            </section>



<?php get_footer();?>