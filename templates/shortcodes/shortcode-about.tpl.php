<div id="pg-7788-5" class="panel-grid panel-has-style">
    <div class="siteorigin-panels-stretch panel-row-style panel-row-style-for-7788-5" data-stretch-type="full">
        <div id="pgc-7788-5-0" class="panel-grid-cell">
            <div id="panel-7788-5-0-0" class="so-panel widget widget_siteorigin-panels-builder panel-first-child panel-last-child" data-index="10">
                <div id="pl-w5b026f4f9e057" class="panel-layout">
                    <div id="pg-w5b026f4f9e057-0" class="panel-grid panel-has-style">
                        <div class="panel-row-style panel-row-style-for-w5b026f4f9e057-0">
                            <div id="pgc-w5b026f4f9e057-0-0" class="panel-grid-cell">
                                <div id="panel-w5b026f4f9e057-0-0-0" class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child panel-last-child" data-index="0">
                                    <div class="animate animate-1 panel-widget-style panel-widget-style-for-w5b026f4f9e057-0-0-0">
                                        <div class="textwidget">
                                            <?php echo !empty($atts['awe_about_sub_title']) ? '<p style="text-align: center;"><span class="subtitle dash-false style-light text-default">'.$atts['awe_about_sub_title'].'</span></p>' : ''?>
                                            <?php if(!empty($atts['awe_about_title'])): ?>
                                                <h2 style="text-align: center;">
    <!--                                                <span style="color: #ffffff;"><strong>Amazing team </strong><strong>with international recognition.</strong></span>-->
                                                    <span style="color: #ffffff;"><strong><?php echo $atts['awe_about_title'] ?></strong></span>
                                                </h2>
                                                <div class="dash centered style-light"></div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(!empty($listItems[0])): ?>
                    <div id="pg-w5b026f4f9e057-1" class="panel-grid panel-no-style">
                        <?php $i = 0; foreach ($listItems as $item): $i++ ?>
                        <div id="pgc-w5b026f4f9e057-1-<?php echo $i - 1 ?>" class="panel-grid-cell">
                            <div id="panel-w5b026f4f9e057-1-0-0" class="so-panel widget widget_interico_team_member panel-first-child panel-last-child" data-index="<?php echo $i ?>">
                                <div class="animate animate-<?php echo $i ?> panel-widget-style panel-widget-style-for-w5b026f4f9e057-1-0-0">
                                    <div class="team-member light">
                                        <div class="content-box">
                                            <div class="image-container">
                                                <div class="member-details">
                                                    <hr>
                                                    <?php echo !empty($item['phone']) ? '<span class="small">Phone:</span><br> <span class="member-info">'.$item['phone'].'</span><hr>' : '' ?>
                                                    <?php echo !empty($item['email']) ? '<span class="small">Email:</span><br> <span class="member-info">'.$item['email'].'</span><hr>' : '' ?>
                                                    <?php if(!empty(vc_param_group_parse_atts($item['items_social']))): ?>
                                                        <ul class="social">
                                                            <?php foreach (vc_param_group_parse_atts($item['items_social']) as $v): ?>
                                                                <li>
                                                                    <a target="_blank" href="<?php echo !empty($v['url']) ? $v['url'] : '#'?>">
                                                                        <i class="fa fa-<?php echo $v['icon'] ?>" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    <?php endif;?>
                                                </div>
                                                <?php if($item['specialized']): ?>
                                                    <div class="side-overlay"></div>
                                                    <div class="vertical-number-box"> <span class="vertical-number"><?php echo $item['specialized'] ?></span></div>
                                                <?php endif ?>
                                                <?php if(!empty($item['bg'])): ?>
                                                    <img src="<?php echo wp_get_attachment_url($item['bg']) ?>" alt="<?php echo !empty($item['name']) ? $item['name'] : ''?>">
                                                <?php endif; ?>
                                            </div>
                                            <?php echo !empty($item['name']) ? '<div class="content-box-info"><h4>'.$item['name'].'</h4></div>' : ''?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div>