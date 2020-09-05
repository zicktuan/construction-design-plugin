<div id="pg-7788-7" class="panel-grid panel-has-style">
    <div class="siteorigin-panels-stretch panel-row-style panel-row-style-for-7788-7" data-stretch-type="full-stretched">
        <div id="pgc-7788-7-0" class="panel-grid-cell">
            <div id="panel-7788-7-0-0" class="so-panel widget widget_interico_blog_posts_main panel-first-child panel-last-child" data-index="15">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 title-link-box clearfix dark">
                            <?php echo !empty($atts['awe_latest_post_title']) ? '<h2 class="section-title">'.$atts['awe_latest_post_title'].'</h2>' : '' ?>
                            <?php if($atts['awe_latest_post_url']): ?>
                            <a class="btn-read-more" href="<?php echo $atts['awe_latest_post_url'] ?>"><?php _e('All articles', 'bookawesome'); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php $argsPost = !empty(!empty($atts['awe_latest_post'])) ? explode(',', $atts['awe_latest_post']) : [];?>
                    <?php if(!empty($argsPost) && is_array($argsPost)): ?>
                    <div class="divider-light"></div>
                    <div class="row">
                        <div id="news">
                            <?php foreach ($argsPost as $item):
                                $post      = get_post($item);
                                $thumbnail = get_the_post_thumbnail_url($item, 'full');
                                ?>
                                <div class="col-sm-4">
                                    <a href="<?php echo get_the_permalink($item); ?>">
                                        <article class="blog-post-box light">
                                            <div class="image-container">
                                                <img src="<?php echo get_the_post_thumbnail_url( $post, '' ) ?>" sizes="(min-width: 781px) 380px, calc(100vw - 30px)" alt="<?php echo !empty($post->post_title) ? $post->post_title : '' ?>">
                                            </div>
                                            <p class="blog-date"><span><?php echo  date('M d, Y', strtotime($post->post_date)); ?></span></p>
                                            <div class="content-box-info">
                                                <h3 class="box-heading"><?php echo !empty($post->post_title) ? $post->post_title : '' ?></h3>
                                                <p> <?php echo !empty( $post->post_content ) ? wp_trim_words( $post->post_content, 20, '...' ) : '' ?></p>
                                                <div class="btn-read-more"><?php _e('Read More', 'bookawesome');?></div>
                                            </div>
                                        </article>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>