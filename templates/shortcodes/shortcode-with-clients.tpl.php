<div id="pg-7788-8" class="panel-grid panel-has-style">
    <div class="siteorigin-panels-stretch panel-row-style panel-row-style-for-7788-8" data-stretch-type="full">
        <div id="pgc-7788-8-0" class="panel-grid-cell">
            <div id="panel-7788-8-0-0" class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child panel-last-child" data-index="16">
                <div class="textwidget">
<!--                    <h2><strong>We work with top <span style="color: #7d6741;">clients</span>.</strong></h2>-->
                    <?php if(!empty($atts['awe_client_title'])): ?>
                    <h2><strong><?php echo $atts['awe_client_title'] ?></strong></h2>
                    <?php endif ?>
                    <?php echo !empty($atts['awe_client_sub_title']) ? '<span class="subtitle dash-true style-dark text-default">'.$atts['awe_client_sub_title'].'</span>' : ''?>
                </div>
            </div>
        </div>
        <?php $i = 0; if(!empty($listItems[0])): ?>
            <?php foreach ($listItems as $item): $i++ ?>
                <div id="pgc-7788-8-<?php echo $i ?>" class="panel-grid-cell">
                    <div id="panel-7788-8-<?php echo $i ?>-0" class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child" data-index="17">
                        <div class="panel-widget-style panel-widget-style-for-7788-8-<?php echo $i ?>-0"
                            style="background: url(<?php echo !empty($atts['logo1']) ? wp_get_attachment_url($atts['logo1']) : ''?>) -10px -164px;"
                        >
                            <div class="textwidget">
                                <p><span style="display: block; width: 122px; height: 57px;" title="<?php echo !empty($atts['title1']) ? $atts['title1'] : ''?>" alt="<?php echo !empty($atts['title1']) ? $atts['title1'] : ''?>" data-toggle="tooltip"></span></p>
                            </div>
                        </div>
                    </div>
                    <div id="panel-7788-8-<?php echo $i ?>-1" class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-last-child" data-index="18">
                        <div class="panel-widget-style panel-widget-style-for-7788-8-<?php echo $i ?>-1"
                             style="background: url(<?php echo !empty($atts['logo2']) ? wp_get_attachment_url($atts['logo2']) : ''?>) -10px -164px;"
                        >
                            <div class="textwidget">
                                <p><span style="display: block; width: 122px; height: 57px;" title="<?php echo !empty($atts['title2']) ? $atts['title2'] : ''?>" alt="<?php echo !empty($atts['title2']) ? $atts['title2'] : ''?>" data-toggle="tooltip"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        <?php endif ?>
<!--        <div id="pgc-7788-8-2" class="panel-grid-cell">-->
<!--            <div id="panel-7788-8-2-0" class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child" data-index="19">-->
<!--                <div class="panel-widget-style panel-widget-style-for-7788-8-2-0">-->
<!--                    <div class="textwidget">-->
<!--                        <p><span style="display: block; width: 122px; height: 57px;" title="Bright Sun Views" alt="" data-toggle="tooltip"></span></p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div id="panel-7788-8-2-1" class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-last-child" data-index="20">-->
<!--                <div class="panel-widget-style panel-widget-style-for-7788-8-2-1">-->
<!--                    <div class="textwidget">-->
<!--                        <p><span style="display: block; width: 122px; height: 57px;" title="Sprinter Brick" alt="" data-toggle="tooltip"></span></p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div id="pgc-7788-8-3" class="panel-grid-cell">-->
<!--            <div id="panel-7788-8-3-0" class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child" data-index="21">-->
<!--                <div class="panel-widget-style panel-widget-style-for-7788-8-3-0">-->
<!--                    <div class="textwidget">-->
<!--                        <p><span style="display: block; width: 122px; height: 57px;" title="Cinerbuild" alt="" data-toggle="tooltip"></span></p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div id="panel-7788-8-3-1" class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-last-child" data-index="22">-->
<!--                <div class="panel-widget-style panel-widget-style-for-7788-8-3-1">-->
<!--                    <div class="textwidget">-->
<!--                        <p><span style="display: block; width: 122px; height: 57px;" title="Superio" alt="" data-toggle="tooltip"></span></p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div id="pgc-7788-8-4" class="panel-grid-cell">-->
<!--            <div id="panel-7788-8-4-0" class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child" data-index="23">-->
<!--                <div class="panel-widget-style panel-widget-style-for-7788-8-4-0">-->
<!--                    <div class="textwidget">-->
<!--                        <p><span style="display: block; width: 122px; height: 57px;" title="Build Origin" alt="" data-toggle="tooltip"></span></p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div id="panel-7788-8-4-1" class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-last-child" data-index="24">-->
<!--                <div class="panel-widget-style panel-widget-style-for-7788-8-4-1">-->
<!--                    <div class="textwidget">-->
<!--                        <p><span style="display: block; width: 122px; height: 57px;" title="Top Shelf" src="https://www.demo.themicart.com/" alt="" data-toggle="tooltip"></span></p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</div>