<div id="pg-7788-4" class="panel-grid panel-has-style">
    <div class="siteorigin-panels-stretch panel-row-style panel-row-style-for-7788-4"
         data-stretch-type="full"
         style="background-image:url(<?php echo !empty($atts['awe_process_bg']) ? wp_get_attachment_url($atts['awe_process_bg']) : ''?>);"
    >
        <div id="pgc-7788-4-0" class="panel-grid-cell">
            <div id="panel-7788-4-0-0" class="so-panel widget widget_siteorigin-panels-builder panel-first-child panel-last-child" data-index="9">
                <div id="pl-w5c2dc995b68f4" class="panel-layout">
                    <div id="pg-w5c2dc995b68f4-0" class="panel-grid panel-no-style">
                        <div id="pgc-w5c2dc995b68f4-0-0" class="panel-grid-cell">
                            <div id="panel-w5c2dc995b68f4-0-0-0" class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child panel-last-child" data-index="0">
                                <div class="textwidget">
                                    <?php echo !empty($atts['awe_process_sub_title']) ? '<p style="text-align: center;"><span class="subtitle dash-false style-dark text-default">'.$atts['awe_process_sub_title'].'</span></p>' : ''?>
                                    <?php if(!empty($atts['awe_process_title'])):?>
<!--                                        <h2 style="text-align: center;"><strong><span style="color: #7d6741;">Proven Process</span> for the best result</strong></h2>-->
                                        <h2 style="text-align: center;"><strong><?php echo $atts['awe_process_title'] ?></strong></h2>
                                        <div class="dash centered style-dark"></div>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(!empty($listItems[0])): ?>
                        <div id="pg-w5c2dc995b68f4-1" class="panel-grid panel-no-style">
                            <?php $i = 0; foreach ($listItems as $item): $i++?>
                                <div id="pgc-w5c2dc995b68f4-1-<?php echo $i-1?>" class="panel-grid-cell">
                                    <div id="panel-w5c2dc995b68f4-1-0-<?php echo $i-1?>" class="so-panel widget widget_interico_number_box panel-first-child panel-last-child" data-index="<?php echo $i?>">
                                        <div class="number-box style-default">
                                            <a href="#">
                                                <div class="number-box-number">0<?php echo $i?></div>
                                                <div class="content-box">
                                                    <div class="content-box-info">
                                                        <h3><?php echo !empty($item['title']) ? $item['title'] : '' ?></h3>
                                                        <p class="number-box-content"><?php echo !empty($item['desc']) ? $item['desc'] : '' ?></p>
<!--                                                        <div class="btn-read-more">Read More</div>-->
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>