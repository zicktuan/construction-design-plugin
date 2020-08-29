<div data-section="sections/special-info.html">
    <section class="border-bottom padding-top-90" id="special-info">
        <div class="container">
            <div class="row vertical-align">
                <div class="col-sm-4 col-lg-4 col-md-4 wow">
                    <div data-group="image">
                        <?php
                            if( !empty( $atts['las_about_image'] ) ) {
                                echo '<img class="img-responsive margin-auto wow fadeIn" src="'.wp_get_attachment_url($atts['las_about_image']).'">';
                            }
                        ?>
                    </div>
                </div>
                <div class="col-sm-7 col-sm-offset-1">
                    <div class="left-content margin-top-30" data-cloneable="" data-group="text-and-icon">
                        <?php if(!empty($listItems)): ?>
                            <?php foreach ($listItems as $item): ?>
                                <div class="col-sm-6">
                                    <div class="iconBox iconBox--left">
                                        <div class="iconBox-icon icon-lg">
                                            <span aria-hidden="true" class="az-icon <?php echo !empty( $item['awe_item_icon'] ) ? $item['awe_item_icon'] : 'icon-gift' ?>"></span>
                                        </div>
                                        <div class="iconBox-content">
                                            <h4 class="iconBox-title hr-after"><?php echo !empty( $item['awe_item_title'] ) ? $item['awe_item_title'] : ''  ?></h4>
                                            <p>
                                                <?php echo !empty( $item['awe_item_desc'] ) ? $item['awe_item_desc'] : '' ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>