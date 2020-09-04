<div id="pg-7788-6" class="panel-grid panel-has-style">
    <div class="siteorigin-panels-stretch panel-row-style panel-row-style-for-7788-6"
         data-stretch-type="full"
         style="background-image:url(<?php echo !empty($atts['awe_wa_bg']) ? wp_get_attachment_url($atts['awe_wa_bg']) : ''?>);"
    >
        <div id="pgc-7788-6-0" class="panel-grid-cell">
            <div id="panel-7788-6-0-0" class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child panel-last-child" data-index="11">
                <div class="animate animate-1 panel-widget-style panel-widget-style-for-7788-6-0-0">
                    <div class="textwidget">
                        <?php echo !empty($atts['awe_wa_sub_title']) ? '<p><span class="subtitle dash-true style-light text-default">'.$atts['awe_wa_sub_title'].'</span></p>' : ''?>
                        <?php if(!empty($atts['awe_wa_title'])): ?>
                        <h2>
<!--                            <strong><span style="color: #ffffff;">Milestones that we proudly accomplished &amp; lead us forward.</span><br /> </strong>-->
                            <strong><span style="color: #ffffff;"><?php echo $atts['awe_wa_title'] ?></span><br /> </strong>
                        </h2>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
        <?php if(!empty($listItems[0])): ?>
            <?php $i = 0; foreach ($listItems as $item): $i++?>
            <div id="pgc-7788-6-<?php echo $i ?>" class="panel-grid-cell">
                <div id="panel-7788-6-<?php echo $i ?>-0" class="so-panel widget widget_interico_number_box panel-first-child panel-last-child" data-index="12">
                    <div class="animate animate-2 panel-widget-style panel-widget-style-for-7788-6-<?php echo $i ?>-0">
                        <?php if(!empty($item['title']) || !empty($item['parameter'])) :?>
                        <div class="number-box style-dark">
                            <div class="number-box-number"><?php echo !empty($item['parameter']) ? $item['parameter'] : ''?></div>
                            <div class="content-box">
                                <div class="content-box-info">
                                    <h3><?php echo !empty($item['title']) ? $item['title'] : ''?></h3>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        <?php endif ?>
    </div>
</div>