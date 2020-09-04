<div id="pg-7788-3" class="panel-grid panel-has-style">
    <div class="panel-row-style panel-row-style-for-7788-3">
        <?php if(!empty($atts['awe_procedure_bg'])): ?>
        <div id="pgc-7788-3-0" class="panel-grid-cell">
            <div id="panel-7788-3-0-0" class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child panel-last-child" data-index="7">
                <div class="animate animate-1 panel-widget-style panel-widget-style-for-7788-3-0-0">
                    <div class="textwidget">
                        <a href="https://www.demo.themicart.com/interico-wp/wp-content/uploads/2018/05/image-portfolio-3.jpg">
                            <img class="alignnone wp-image-11439 size-full" src="<?php echo wp_get_attachment_url($atts['awe_procedure_bg']) ?>" alt="" width="555" height="740" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php endif ?>
        <div id="pgc-7788-3-1" class="panel-grid-cell">
            <div id="panel-7788-3-1-0" class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child panel-last-child" data-index="8">
                <div class="shadow-box overlap-left animate animate-2 panel-widget-style panel-widget-style-for-7788-3-1-0">
                    <div class="textwidget">
                        <?php echo !empty($atts['awe_procedure_sub_title']) ? '<span class="subtitle dash-true style-dark text-default">'.$atts['awe_procedure_sub_title'].'</span>' : '' ?>
                        <?php if (!empty($atts['awe_procedure_title'])): ?>
                        <h2>
<!--                            <strong>With <span style="color: #7d6741;">design </span>&amp; <span style="color: #7d6741;">conceptual</span> decisions, we create value for the objects.</strong>-->
                            <strong><?php echo $atts['awe_procedure_title'] ?></strong>
                        </h2>
                        <?php endif ?>
                        <?php echo !empty($atts['awe_procedure_desc']) ? '<p>'.$atts['awe_procedure_desc'].'</p>' : '' ?>

                        <?php if(!empty($listItems)): ?>
                        <ul class="nav nav-tabs style-accent light" id="custom-tabs-44">
                            <?php $i = 0; foreach ($listItems as $item): $i++?>
                                <li class="<?php echo (1 === $i) ? 'active' : '' ?>"><a href="#custom-tab-0-<?php echo $item['title'] ?>" data-toggle="tab"><?php echo $item['title'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>

                        <div class="tab-content style-accent">
                            <?php $i = 0; foreach ($listItems as $item): $i++ ?>
                            <div id="custom-tab-0-<?php echo $item['title'] ?>" class="tab-pane animated fadeIn <?php echo (1 === $i) ? 'active' : '' ?>">
                                <?php echo !empty($item['desc']) ? '<p>'.$item['desc'].'</p>' : '' ?>
                                <?php if(!empty(vc_param_group_parse_atts($item['items_content']))): ?>
                                    <ul>
                                        <?php foreach (vc_param_group_parse_atts($item['items_content']) as $v ): ?>
                                            <?php echo !empty($v['title_content']) ? '<li>'.$v['title_content'].'</li>' : '' ?>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>