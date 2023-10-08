<?php get_header(); ?>

<section class="gallery">
    <div class="container">
        <div class="wrapper">
            <?php if(get_field( 'gallery_items' )):?>
                <?php foreach (get_field( 'gallery_items' ) as $item):?>
                    <div class="item js-item-popup">
                    <div class="preview">
                        <?php if($item['main_image']):?>
                            <div class="image">
                                <img src="<?= $item['main_image']['url']?>" alt="<?= $item['main_image']['alt'] ?>">
                            </div>
                        <?php endif;?>
                        <div class="content">
                            <div class="text">
                                <h3><?= $item['name'] ?></h3>
                                <span><?= $item['text'] ?></b></span>
                            </div>
                            <?php if($item['icon']):?>
                                <div class="icon">
                                    <img src="<?= $item['icon']['url'] ?>" alt="<?= $item['icon']['alt'] ?>">
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="popup">
                        <div class="container-popup">
                            <div class="popup-close js-close-popup"></div>
                            <div class="images">
                                <?php if($item['images']):?>
                                    <div class="main-img">
                                        <?php if($item['images'][0]):?>
                                            <img src="<?= $item['images'][0]['url'] ?>" alt="<?= $item['images'][0]['alt'] ?>">
                                        <?php endif;?>
                                    </div>
                                    <div class="list-img">
                                        <?php foreach ($item['images'] as $image):?>
                                            <div class="list-img-item">
                                                <?php if($image):?>
                                                    <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                                                <?php endif;?>
                                            </div>
                                        <?php endforeach;?>
                                    </div>
                                <?php endif;?>
                            </div>
                            <div class="content">
                                <h2><?= $item['title'] ?></h2>
                                <p><?= $item['description'] ?></p>
                                <?php if($item['list'] ):?>
                                    <ul>
                                        <?php foreach ($item['list'] as $list_item):?>
                                            <li><?= $list_item['li'] ?></li>
                                        <?php endforeach;?>
                                    </ul>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>
</section>
<?php get_footer(); ?>