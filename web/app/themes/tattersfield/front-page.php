<?php
/*
Template Name: Front-page
*/
?>
<?php wp_head(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <title>Home</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">
</head>
<body>
<div class="g-wrap">
    <main class="g-main">
        <div class="section-hero">
            <div class="s-bg">
                <div style="background-image: url('<?= get_field( 'top_banner_image' ) ?>')" class="s-bg__image hidden-xs-max"></div>
                <div style="background-image: url('<?= get_field( 'top_banner_image_mob' ) ?>')" class="s-bg__image hidden-sm-min"></div>
            </div>
            <div class="s-wrap">
                <div class="s-content container">
                    <div class="s-logo"><img src="<?= get_field( 'logo' ) ?>"></div>
                    <div class="s-title"><?= get_field( 'headline' ) ?></div>
                    <div class="s-buttons"><a href="<?= get_field( 'link_3' ) ?>" class="btn">Contact Us</a><a href="<?= get_field( 'link_4' ) ?>" class="btn btn-index">Register Your Product</a></div>
                </div>
            </div>
        </div>
        <div class="section-about">
            <div class="container">
                <div class="s-wrap">
                    <div class="s-part part-content">
                        <?php if(!empty(get_field( 'title_1' ))){ ?>
                        <div class="content-line">
                            <div class="h2"><?= get_field( 'title_1' ) ?></div>
                            <p><?= get_field( 'description_1' ) ?></p>
                        </div>
                        <?php } ?>
                        <?php if(!empty(get_field( 'title_2' ))){ ?>
                            <div class="content-line">
                                <div class="h2"><?= get_field( 'title_2' ) ?></div>
                                <p><?= get_field( 'description_2' ) ?></p>
                            </div>
                        <?php } ?>
                        <?php if(!empty(get_field( 'title_3' ))){ ?>
                            <div class="content-line">
                                <div class="h2"><?= get_field( 'title_3' ) ?></div>
                                <p><?= get_field( 'description_3' ) ?></p>
                            </div>
                        <?php } ?>
                        <div class="content-line content-buttons"><a href="<?= get_field( 'link_3' ) ?>" class="btn btn-index">CONTACT US</a><a href="<?= get_field( 'link_4' ) ?>" class="btn btn-index">REGISTER YOUR PRODUCT</a></div>
                    </div>
                    <div class="s-part part-image">
                        <div style="background-image: url('<?= get_field( 'content_image' ) ?>');" class="s-image"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-retailer">
            <div class="container">
                <div class="s-wrap">
                    <div class="h2 s-title"><?= get_field( 'retailers_title' ) ?></div>
                    <div class="s-list">
                        <?php if(!empty(get_field( 'retailer_logo_1' ))){ ?>
                            <a href="<?= get_field( 'retailer_link_1' ) ?>" class="list-item"><img src="<?= get_field( 'retailer_logo_1' ) ?>"></a>
                        <?php } ?>
                        <?php if(!empty(get_field( 'retailer_logo_2' ))){ ?>
                            <a href="<?= get_field( 'retailer_link_2' ) ?>" class="list-item"><img src="<?= get_field( 'retailer_logo_2' ) ?>"></a>
                        <?php } ?>
                        <?php if(!empty(get_field( 'retailer_logo_3' ))){ ?>
                            <a href="<?= get_field( 'retailer_link_3' ) ?>" class="list-item"><img src="<?= get_field( 'retailer_logo_3' ) ?>"></a>
                        <?php } ?>
                        <?php if(!empty(get_field( 'retailer_logo_4' ))){ ?>
                            <a href="<?= get_field( 'retailer_link_4' ) ?>" class="list-item"><img src="<?= get_field( 'retailer_logo_4' ) ?>"></a>
                        <?php } ?>
                        <?php if(!empty(get_field( 'retailer_logo_5' ))){ ?>
                        <a href="<?= get_field( 'retailer_link_5' ) ?>" class="list-item"><img src="<?= get_field( 'retailer_logo_5' ) ?>"></a>
                        <?php } ?>

                </div>
            </div>
        </div>
    </main>
    <footer class="g-footer">
        <div class="container">
            <div class="f-wrap">
                <div class="f-logo"><img src="<?= get_field( 'logo_bottom' ) ?>"></div>
                <div class="f-menu">
                    <div class="menu-item"><a href="<?= get_field( 'link_1' ) ?>">TERMS & CONDITIONS</a></div>
                    <div class="menu-item"><a href="<?= get_field( 'link_2' ) ?>">PRIVACY POLICY</a></div>
                    <div class="menu-item"><a href="<?= get_field( 'link_3' ) ?>">CONTACT US</a></div>
                    <div class="menu-item"><a href="<?= get_field( 'link_4' ) ?>">PRODUCT REGISTRATION</a></div>
                </div>
            </div>
        </div>
    </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>