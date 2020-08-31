<div id="pg-7788-0" class="panel-grid panel-has-style">
    <div class="overlapped siteorigin-panels-stretch panel-row-style panel-row-style-for-7788-0" data-stretch-type="full">

        <div id="pgc-7788-0-0" class="panel-grid-cell">
            <div id="panel-7788-0-0-0" class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child panel-last-child" data-index="0">
                <div class="panel-widget-style panel-widget-style-for-7788-0-0-0">
                    <div class="textwidget">
                        <?php if(!empty($atts['awe_project_title'])): ?>
                            <p><span class="subtitle dash-true style-dark text-default">What we do</span></p>
                            <h2>
    <!--                            <strong>Passion Fueled Interior <span style="color: #7d6741;">Services</span></strong>-->
                                <strong><?php echo $atts['awe_project_title'] ?></span></strong>
                            </h2>
                        <?php endif; ?>
                        <?php echo !empty($atts['awe_project_desc']) ? '<p>'.$atts['awe_project_desc'].'</p>' : '' ?>
                        <?php if(!empty($atts['awe_project_btn'])): ?>
                        <p>
                            <a href="<?php echo $atts['awe_project_url'] ?>" class="btn btn-primary arrow-right">
                                <span><?php echo $atts['awe_project_btn'] ?></span>
                            </a>
                        </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <?php $i = 0; $argsPost = !empty(!empty($atts['list_service_vc'])) ? explode(',', $atts['list_service_vc']) : []; ?>

        <?php if(!empty($argsPost) && is_array($argsPost)): ?>
            <?php foreach ($argsPost as $item):
                $i++;
                $post = get_post($item);
                $thumbnail = get_the_post_thumbnail_url($item, 'full');
                ?>

                <div id="pgc-7788-0-<?php echo $i ?>" class="panel-grid-cell">
                    <div id="panel-7788-0-<?php echo $i ?>-0" class="so-panel widget widget_interico_image_box_main panel-first-child panel-last-child" data-index="<?php echo $i ?>">
                        <div class="content-box service-item alignment-centered service-box-dark">
                            <a href="<?php echo get_the_permalink($item); ?>">
                                <div class="image-container">
                                    <div class="vertical-number-box"> <span class="vertical-number"><?php echo ($i <= 9) ? '0'.$i: '' ?></span></div>
                                    <div class="arrow-box"><span class="icon-arrow-right"></span></div>
                                    <img src="<?php echo esc_url($thumbnail); ?>" sizes="(min-width: 781px) 360px, calc(100vw - 30px)" alt="<?php echo !empty($post->post_title) ? $post->post_title : '' ?>">
                                </div>
                                <div class="content-box-info">
                                    <h4 class="box-heading"><?php echo !empty($post->post_title) ? $post->post_title : '' ?></h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        <?php endif ?>

    </div>
</div>