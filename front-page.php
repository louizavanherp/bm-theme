<?php get_header();?>


            <?php $intro = get_field('intro');?>
            <section class="about">
                <div class="container-fluid">
                    <div class="row about__content">
                        <div class="about__image col-12 col-md-6">

                            <?php 

                            if( !empty($intro['image']) ): ?>

                                <img src="<?php echo $intro['image'];?>" alt="<?php echo $intro['image']['alt']; ?>" />
                               

                            <?php endif; ?>

                        </div>

                        <div class="about__text col-12 col-md-6 my-auto">
                            <h1 class="heading-primary about__heading"><?php echo $intro['large_title']; ?></h1>
                            <p class="about__paragraph paragraph"><?php echo $intro['main_text']; ?></p>
                            <a class="btn btn--outline" href="<?php echo $intro['cta_button_link'] ?>"><?php echo $intro['cta_button_text'];?></a>
                        </div>
                    </div>
                    
                    <div class="read-more">
                    <a class="read-more__link read-more__link--start" href="<?php echo $intro['read_more_link'] ?>"><?php echo $intro['read_more_link_text'];?></a>
                    <div class="read-more__outer read-more__outer--start"><div class="read-more__inner"></div></div>
                    
                    </div>
                </div>
            </section>

            <?php $services = get_field('services');?>
            <section class="services" id="services">
                <div class="container">
                    <h1 class="heading-primary services__title"><?php echo $services['title']; ?></h1>

                    <div class="row services__content">
                        <div class="services__service col-12 col-sm-6 col-lg-3">
                            <h2 class="heading-secondary heading-secondary--underline"><?php echo $services['subtitle_1']; ?></h2>
                            <p><?php echo $services['subtext_1']; ?></p>
                            <a class="link" href="<?php echo $services['cta_1'] ?>"><?php echo $services['cta_1_text'] ?><span>></span></a>
                        </div>

                        <div class="services__service col-12 col-sm-6 col-lg-3">
                            <h2 class="heading-secondary heading-secondary--underline"><?php echo $services['subtitle_2']; ?></h2>
                            <p><?php echo $services['subtext_2']; ?></p>
                            <a class="link" href="<?php echo $services['cta_2'] ?>"><?php echo $services['cta_2_text'] ?><span>></span></a>
                        </div>

                        <div class="services__service col-12 col-sm-6 col-lg-3">
                            <h2 class="heading-secondary heading-secondary--underline"><?php echo $services['subtitle_3']; ?></h2>
                            <p><?php echo $services['subtext_3']; ?></p>
                            <a class="link" href="<?php echo $services['cta_3'] ?>"><?php echo $services['cta_3_text'] ?><span>></span></a>
                        </div>

                        <div class="services__service col-12 col-sm-6 col-lg-3 box">
                            <h2 class="heading-secondary"><?php echo $services['subtitle_4']; ?></h2>
                            <p><?php echo $services['subtext_4']; ?></p>
                            <a class="link" href="<?php echo $services['cta_4'] ?>"><?php echo $services['cta_4_text'] ?><span>></span></a>
                        </div>

                    </div>
                </div>
            </section>

            <?php $cases = get_field('cases');?>
            <section class="cases">
                <div class="container">
                    <div class="row case">
                        <div class="col">
                        <?php if( !empty($cases['image_1']) ): ?>
                        <img src="<?php echo $cases['image_1'] ?>" alt="<?php echo $cases['image_1']['alt']; ?>" />
                        <?php endif; ?>
                        </div>
                        <div class="col-md-auto">
                            <hr class="line">
                        </div>
                        <div class="col col-lg-2 cases__content md-pt-10">
                        <?php if( !empty($cases['title_1']) ): ?>
                            <p class="cases__title"><?php echo $cases['title_1'] ?></p>
                        <?php endif; ?>
                        <?php if( !empty($cases['link_1']) || !empty($cases['link_text']) ): ?>
                            <a class="cases__more-link" href="<?php echo $cases['link_1'] ?>"><?php echo $cases['link_text'];?></a>
                        <?php endif; ?>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col cases__content">
                        <?php if( !empty($cases['title_2']) ): ?>
                            <p class="cases__title"><?php echo $cases['title_2'] ?></p>
                        <?php endif; ?>
                        <?php if( !empty($cases['link_2']) || !empty($cases['link_text']) ): ?>
                            <a class="cases__more-link" href="<?php echo $cases['link_2'] ?>"><?php echo $cases['link_text'];?></a>
                        <?php endif; ?>
                        </div>

                        <div class="col-md-auto">
                            <hr class="line">
                        </div>

                        <div class="col">
                        <?php if( !empty($cases['image_2']) ): ?>
                        <img src="<?php echo $cases['image_2'] ?>" alt="<?php echo $cases['image_2']['alt']; ?>" />
                        <?php endif; ?>
                        </div>

    
                    </div>

                    <div class="row">
                        <div class="col">
                        <?php if( !empty($cases['image_3']) ): ?>
                        <img src="<?php echo $cases['image_3']?>" alt="<?php echo $cases['image_3']['alt']; ?>" />
                        <?php endif; ?>
                        </div>
                        <div class="col-md-auto">
                            <hr class="line">
                        </div>
                        <div class="col col-lg-2 cases__content">
                        <?php if( !empty($cases['title_3']) ): ?>
                            <p class="cases__title"><?php echo $cases['title_3'] ?></p>
                        <?php endif; ?>
                        <?php if( !empty($cases['link_3']) || !empty($cases['link_text']) ): ?>
                            <a class="cases__more-link" href="<?php echo $cases['link_3'] ?>"><?php echo $cases['link_text'];?></a>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>

            <?php $quotes = get_field('quotes');?>
            <section class="testimonials">
                <div class="row justify-content-center">

                    <input type="radio" id="i1" name="quotes" checked />
                    <input type="radio" id="i2" name="quotes" />
                    <input type="radio" id="i3" name="quotes" />
                    <input type="radio" id="i4" name="quotes" />
                    <input type="radio" id="i5" name="quotes" />	
                    
                    <div class="slide_quotes" id="one">			
                            
                        <p>"<?php echo $quotes['quote_1'];?>"</p>
                                
                        <label class="prev" for="i5">
                            <p><span>PREV</span></p> 
                        </label>
                        <label class="next" for="i2">
                            <p><span>NXT</span></p> 	
                        </label>
                    </div>
                    
                    <div class="slide_quotes" id="two">
                        
                        <p>"<?php echo $quotes['quote_2'];?>"</p>
                            
                        <label class="prev" for="i1">
                            <p><span>PREV</span></p> 
                        </label>
                        <label class="next" for="i3">
                            <p><span>NXT</span></p> 	
                        </label>
                    </div>
                            
                    <div class="slide_quotes" id="three">

                        <p>"<?php echo $quotes['quote_3'];?>"</p>

                        <label class="prev" for="i2">
                            <p><span>PREV</span></p> 
                        </label>
                        <label class="next" for="i4">
                            <p><span>NXT</span></p> 	
                        </label>

                    </div>

                    <div class="slide_quotes" id="four">

                        <p>"<?php echo $quotes['quote_4'];?>"</p>
                            
                        <label class="prev" for="i3">
                            <p><span>PREV</span></p> 
                        </label>
                        <label class="next" for="i5">
                            <p><span>NXT</span></p> 	
                        </label>

                    </div>

                    <div class="slide_quotes" id="five">

                        <p>"<?php echo $quotes['quote_5'];?>"</p>	
                            
                        <label class="prev" for="i4">
                            <p><span>PREV</span></p> 
                        </label>
                        <label class="next" for="i1">
                            <p><span>NXT</span></p> 	
                        </label>


                    </div>
                </div>
            </section>





<?php get_footer();?>