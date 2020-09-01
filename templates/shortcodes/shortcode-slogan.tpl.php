<div id="pg-7788-1" class="panel-grid panel-has-style">
    <div class="siteorigin-panels-stretch panel-row-style panel-row-style-for-7788-1"
         data-stretch-type="full"
         style="background-image:url(<?php echo !empty( $atts['awe_slogan_bg'] ) ? wp_get_attachment_url($atts['awe_slogan_bg']) : '' ?>);"
    >
        <div id="pgc-7788-1-0" class="panel-grid-cell">
            <div id="panel-7788-1-0-0" class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child panel-last-child" data-index="4">
                <div class="animate animate-1 panel-widget-style panel-widget-style-for-7788-1-0-0">
                    <div class="textwidget">
                        <?php if(!empty($atts['awe_slogan_title'])): ?>
                        <h2>
                            <span style="color: #f5f5f5;">
                                <strong><?php echo $atts['awe_slogan_title'] ?></strong>
                            </span>
                        </h2>
                        <?php endif ?>
                        <?php echo !empty($atts['awe_slogan_author']) ? '<p><span class="subtitle dash-true style-light text-default">'.$atts['awe_slogan_author'].'</span></p>' : '' ?>
                    </div>
                </div>
            </div>
        </div>
        <?php if(!empty($atts['awe_slogan_desc'])): ?>
        <div id="pgc-7788-1-1" class="panel-grid-cell">
            <div id="panel-7788-1-1-0" class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child panel-last-child" data-index="5">
                <div class="animate animate-2 panel-widget-style panel-widget-style-for-7788-1-1-0">
                    <div class="textwidget">
                        <p><span style="color: #aaaaaa;"><?php echo $atts['awe_slogan_desc'] ?></span></p>
                    </div>
                </div>
            </div>
        </div>
        <?php endif ?>
    </div>
</div>