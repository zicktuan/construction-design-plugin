<div id="pg-7788-2" class="panel-grid panel-has-style">
    <div class="siteorigin-panels-stretch panel-row-style panel-row-style-for-7788-2" data-stretch-type="full-stretched">
        <div id="pgc-7788-2-0" class="panel-grid-cell">
            <div id="panel-7788-2-0-0" class="so-panel widget widget_interico_projects_slider_main panel-first-child panel-last-child" data-index="6">
                <section class="section-gallery gallery-layout-vertical grid-fluid captions-bottom">
                    <div class="wow fadeInUp">
                        <div class="container-fluid">
                            <div class="row no-gutter">
                                <div id="gallery-slider">
                                    <?php $i = 0; $argsPost = !empty(!empty($atts['list_projects_vc'])) ? explode(',', $atts['list_projects_vc']) : []; ?>
                                    <?php if(!empty($argsPost) && is_array($argsPost)): ?>
                                        <?php foreach ($argsPost as $item): $i++;
                                            $post = get_post($item);
                                            $thumbnail = get_the_post_thumbnail_url($item, 'full');
                                        ?>
                                            <div class="item">
                                                <a href="<?php echo get_the_permalink($item); ?>" class="portfolio-box image-container">
                                                    <img src="<?php echo esc_url($thumbnail); ?>" sizes="(min-width: 781px) 480px, calc(100vw - 30px)" alt="<?php echo !empty($post->post_title) ? $post->post_title : '' ?>">
                                                    <div class="portfolio-box-caption">
                                                        <div class="portfolio-box-caption-content">
                                                            <span class="vertical-number"><?php echo ($i <= 9) ? '0'.$i : $i ?></span>
<!--                                                            <div class="project-category text-faded"> industrial</div>-->
                                                            <div class="project-name"> <?php echo !empty($post->post_title) ? $post->post_title : '' ?></div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php endforeach;?>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>