<?php

/* Template Name: Home page Template */

get_header();
?>
    <!-- content start -->
	<div class="content clearfix">
		<!-- featured section start -->
		<div class="featured">
			<div class="container">
                <?php
                $feature_title = get_field('feature_title');
                $feature_detail = get_field('feature_detail');
                $feature_image = get_field('feature_image');
                echo $feature_title==''?'':'<div class="featured__title"><h1>'.$feature_title.'</h1></div>';
                echo $feature_detail==''?'':'	<div class="featured__detail"><p>'.$feature_detail.'</p></div>';
                echo $feature_image==''?'':'<div class="featured__img"><img src="'.$feature_image.'" alt="feature-img" class="img-fluid"></div>';

                if ( have_rows( 'block' ) ) : ?>
				<div class="row">
                    <?php while ( have_rows( 'block' ) ) : the_row(); ?>
                        <?php
                        $block_icon = get_sub_field( 'block_icon' );
                        $block_title = get_sub_field( 'block_title' );
                        $block_detail = get_sub_field( 'block_detail' );
                        if( $block_icon ||  $block_title || $block_detail)
                        {
                        ?>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="block">
                                <div class="block__icon">
                                    <?php
                                    echo $block_icon==''?'':'<img src="'.$block_icon.'" height="45" width="56">' ?>
                                </div>
                                <?php
                                if($block_title || $block_detail)
                                {
                                ?>
                                <div class="block__detail">
                                    <?php
                                    echo $block_title == ''?'':'<h2>'.$block_title.'</h2>';
                                    echo $block_detail == ''?'':'<p>'.$block_detail.'</p>'; ?>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
			</div>
		</div>
		<!-- featured section end -->

		<!-- creatives section start -->
		<div class="creatives" data-scroll-index="1">
			<div class="row m-0">
                <?php if ( get_field( 'creative_image' ) )
                {?>
				<div class="col-sm-12 col-md-6 p-0">
					<div class="creatives__img">
                        <img src="<?php the_field( 'creative_image' ); ?>" alt="creative-img" class="img-fluid"/>
					</div>
				</div>
                <?php
                }
                ?>
                <?php if ( have_rows( 'creative_slider' ) ) : ?>
				<div class="slider-div">
					<div class="container">
						<div class="row flex-row-reverse">
							<div class="col-sm-12 col-md-6">
								<div class="creative-slider">
                                    <?php while ( have_rows( 'creative_slider' ) ) : the_row(); ?>
                                        <?php $creative_title = get_sub_field( 'creative_title' ); ?>
                                        <?php $creative_detail = get_sub_field( 'creative_detail' ); ?>
                                        <?php $creative_cta = get_sub_field( 'creative_cta' ); ?>
                                        <?php $creative_link = get_sub_field( 'creative_link' ); ?>
                                        <div class="creative-slider__item">
                                            <div class="creative-slider__item--title">
                                                <?php echo $creative_title==''?'':'<h3>'.$creative_title.'</h3>';  ?>
                                            </div>
                                            <div class="creative-slider__item--detail">
                                                <?php echo $creative_detail==''?'':'<p>'.$creative_detail.'</p>';  ?>

                                                <a href="<?php echo $creative_link; ?>">
                                                    <span><?php echo $creative_cta; ?></span>
                                                    <svg width="6px" height="11px">
                                                        <use xlink:href="#btn-arrow"></use>
                                                    </svg>
                                                </a>
                                            </div>
									    </div>
                                    <?php endwhile; ?>
								</div>
							</div>
						</div>
					</div>
                </div>
                <?php endif; ?>
			</div>
		</div>
		<!-- creatives section end -->

		<!-- pricing table start -->
		<div class="pricing" data-scroll-index="2">
			<div class="container">
				<div class="pricing__title">
                    <?php $pricing_title = get_field( 'pricing_title' );
                     echo $pricing_title==''?'':'<h4>'.$pricing_title.'</h4>';  ?>
				</div>
				<div class="pricing__detail">
                    <?php $pricing_detail = get_field( 'pricing_detail' );
                     echo $pricing_detail==''?'':'<p>'.$pricing_detail.'</p>';  ?>
                </div>

                <?php if ( have_rows( 'pricing_block' ) ) : ?>
				<div class="pricing-table-desktop">
					<div class="pricing-table">
						<div class="row m-0">

                            <?php while ( have_rows( 'pricing_block' ) ) : the_row(); ?>
                                <?php $title = get_sub_field( 'title' ); ?>
                                <?php $sub_title = get_sub_field( 'sub_title' ); ?>
                                <?php $fee = get_sub_field( 'fee' ); ?>
                                <?php $fee_schedule = get_sub_field( 'fee_schedule' ); ?>
                                <?php $detail = get_sub_field( 'detail' ); ?>
                                <?php $cta_text = get_sub_field( 'cta_text' ); ?>
                                <?php $cta_link = get_sub_field( 'cta_link' ); ?>

                                <div class="col-sm-12 col-md-4 p-0">
                                    <div class="pricing-table__block <?php if ( get_sub_field( 'premium' ) == 1 ) { echo 'premium'; } ?>">
                                        <div class="pricing-table__block--title <?php if ( get_sub_field( 'premium' ) == 1 ) { echo 'title'; } ?>">
                                            <?php
                                            echo $title==''?'':'<p>'.$title.'</p>';
                                            echo $sub_title==''?'':'<span>'.$sub_title.'</span>'; ?>
                                        </div>
                                        <div class="pricing-table__block--price-box <?php if ( get_sub_field( 'premium' ) == 1 ) { echo 'price-box'; } ?>">
                                            <?php
                                            echo $fee==''?'':'<span>'.$fee.'</span>';
                                            echo $fee_schedule==''?'':'<small>'.$fee_schedule.'</small>';
                                            echo $detail==''?'':'<p>'.$detail.'</p>'; ?>
                                        </div>
                                        <div class="pricing-table__block--feature <?php if ( get_sub_field( 'premium' ) == 1 ) { echo 'feature'; } ?>">
                                            <ul>
                                                <?php if ( have_rows( 'price_features' ) ) : ?>
                                                    <?php while ( have_rows( 'price_features' ) ) : the_row(); ?>
                                                        <?php $feature = get_sub_field( 'feature' ); ?>
                                                        <?php if ( get_sub_field( 'disable' ) == 1 ) { ?>
                                                            <li class="disable-feature"> <?php echo $feature==''?'': $feature; ?></li>
                                                    <?php
                                                        } else { ?>
                                                        <li>
                                                            <svg height="11px" width="16px">
                                                                <use xlink:href="#green-check"></use>
                                                            </svg>
                                                            <?php echo $feature==''?'': $feature; ?>
                                                        </li>
                                                        <?php
                                                            } ?>
                                                    <?php endwhile; ?>
                                                <?php else : ?>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                        <div class="pricing-table__block--btn <?php if ( get_sub_field( 'premium' ) == 1 ) { echo 'btn-pre'; } ?>">
                                        <?php  echo $cta_text==''?'':'<a href="'.$cta_link.'">'.$cta_text.'</a>'; ?>
                                        </div>
                                    </div>
                                </div>

                            <?php endwhile; ?>

						</div>
					</div>
				</div>
                <?php endif; ?>

                <?php if ( have_rows( 'pricing_block' ) ) : ?>
				<div class="pricing-table-mobile">
					<div class="pricing-table">
						<div class="pricing-table-slider">
                            <?php while ( have_rows( 'pricing_block' ) ) : the_row(); ?>
                                <?php $title = get_sub_field( 'title' ); ?>
                                <?php $sub_title = get_sub_field( 'sub_title' ); ?>
                                <?php $fee = get_sub_field( 'fee' ); ?>
                                <?php $fee_schedule = get_sub_field( 'fee_schedule' ); ?>
                                <?php $detail = get_sub_field( 'detail' ); ?>

                                <?php $cta_text = get_sub_field( 'cta_text' ); ?>
                                <?php $cta_link = get_sub_field( 'cta_link' ); ?>

                                <div class="pricing-table__block <?php if ( get_sub_field( 'premium' ) == 1 ) { echo 'premium'; } ?>">
                                    <div class="pricing-table__block--title <?php if ( get_sub_field( 'premium' ) == 1 ) { echo 'title'; } ?>">
                                        <?php 
                                            echo $title==''?'':'<p>'.$title.'</p>';
                                            echo $sub_title==''?'':'<span>'.$sub_title.'</span>'; ?>
                                    </div>
                                    <div class="pricing-table__block--price-box <?php if ( get_sub_field( 'premium' ) == 1 ) { echo 'price-box'; } ?>">
                                        <?php 
                                            echo $fee==''?'':'<span>'.$fee.'</span>';
                                            echo $fee_schedule==''?'':'<small>'.$fee_schedule.'</small>';
                                            echo $detail==''?'':'<p>'.$detail.'</p>'; ?>
                                    </div>
                                    <div class="pricing-table__block--feature <?php if ( get_sub_field( 'premium' ) == 1 ) { echo 'feature'; } ?>">
                                        <ul>
                                            <?php if ( have_rows( 'price_features' ) ) : ?>
                                                <?php while ( have_rows( 'price_features' ) ) : the_row(); ?>
                                                    <?php $feature = get_sub_field( 'feature' ); ?>
                                                    <?php if ( get_sub_field( 'disable' ) == 1 ) { ?>
                                                        <li class="disable-feature"> <?php echo $feature==''?'': $feature; ?></li>
                                                <?php // echo 'true';
                                                    } else { ?>
                                                    <li>
                                                        <svg height="11px" width="16px">
                                                            <use xlink:href="#green-check"></use>
                                                        </svg>
                                                        <?php echo $feature==''?'': $feature; ?>
                                                    </li>

                                                    <?php // echo 'false';
                                                        } ?>
                                                <?php endwhile; ?>
                                            <?php else : ?>
                                                <?php // no rows found ?>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                    <div class="pricing-table__block--btn <?php if ( get_sub_field( 'premium' ) == 1 ) { echo 'btn-pre'; } ?>">
                                         <?php  echo $cta_text==''?'':'<a href="'.$cta_link.'">'.$cta_text.'</a>'; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
						</div>
					</div>
				</div>
                <?php endif; ?>
            </div>
		</div>
		<!-- pricing table end -->

		<!-- ultimate section start -->
		<div class="ultimate">
			<div class="container">
				<div class="ultimate__title">
                     <?php $ultimate_title = get_field( 'ultimate_title' );
                     echo $ultimate_title==''?'':'<h5>'.$ultimate_title.'</h5>';  ?>
				</div>
				<div class="ultimate__detail">
                    <?php $ultimate_detail = get_field( 'ultimate_detail' );
                     echo $ultimate_detail==''?'':'<p>'.$ultimate_detail.'</p>';  ?>
				</div>
				<div class="ultimate__try-free">
                    <?php
                    $ultimate_cta_text = get_field( 'ultimate_cta_text' );
                    $ultimate_cta_link = get_field( 'ultimate_cta_link' );
                    echo $ultimate_cta_text==''?'':'<a href="'.$ultimate_cta_link.'" class="try-btn">'.$ultimate_cta_text.'</a>'; ?>

                </div>

                <?php if ( have_rows( 'client_slider' ) ) : ?>
				<div class="clients">
                     <?php $client_heading = get_field( 'client_heading' );
                     echo $client_heading==''?'':'<p>'.$client_heading.'</p>';  ?>
                    <ul class="client-slider">
                        <?php while ( have_rows( 'client_slider' ) ) : the_row(); ?>
                            <li>
                                <a href="<?php the_sub_field( 'link' ); ?>">
                                    <?php if ( get_sub_field( 'client_logo' ) ) { ?>
                                        <img src="<?php the_sub_field( 'client_logo' ); ?>" />
                                    <?php } ?>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
                <?php endif; ?>

			</div>

		</div>
		<!-- ultimate section end -->

	</div>
    <!-- content end -->
    <?php
   
    ?>
<?php
get_footer();