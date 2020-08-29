<div data-section="sections/tabs.html">
    <div class="container space-md">
        <div id="filters-portfolio-3" class="cbp-l-filters-work">
            <div data-group="tabs-title">
                <div class="cbp-l-filters-text-sort">
                    <?php _e('Sort by:', 'bookawesome') ?>
                </div>
                <div data-cloneable-inline="" data-isotope-filters="" style="display: inline-block;">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                        All
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <?php foreach ($listItems as $key => $item): ?>
                    <div data-filter=".<?php echo sanitize_title($item['title']) ?>-<?php echo $key ?>" class="cbp-filter-item">
                        <?php echo $item['title'] ?>
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>


        <div id="portfolio-3" class="cbp-l-grid-gallery" data-cloneable-inline="" data-group="tab-content" data-isotope-items="">
            <?php
            foreach ($listItems as $key => $item):

                $argsImageId = explode(',', $item['awe_projects_item_bg']);
                foreach ($argsImageId as $img) :
                    $imageUrl = wp_get_attachment_image_src($img, 'full');
                ?>
                <div class="cbp-item print <?php echo sanitize_title($item['title']) ?>-<?php echo $key ?>">
                    <a href="<?php echo $imageUrl[0] ?>" class="cbp-caption cbp-lightbox">
                        <div class="cbp-caption-defaultWrap">
                            <img src="<?php echo $imageUrl[0] ?>" alt=""/>
                        </div>
<!--                        <div class="cbp-caption-activeWrap">-->
<!--                            <div class="cbp-l-caption-alignLeft">-->
<!--                                <div class="cbp-l-caption-body">-->
<!--                                    <div class="cbp-l-caption-title">-->
<!--                                        World Clock Widget-->
<!--                                    </div>-->
<!--                                    <div class="cbp-l-caption-desc">-->
<!--                                        by Paul Flavius Nechita-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </a>
                </div>
            <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    </div>

</div>