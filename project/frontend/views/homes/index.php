<?php require_once 'views/layouts/slide.php'?>

<div class="container categories">
    <h2 class="introduce-title">Thể loại mặt hàng</h2>
    <?php if (!empty($categories)):?>
    <div class="row categories__block">
    <?php foreach ($categories as $category):?>
        <div class="col-md-3 category" id="category--<?= $category['id']?>">
            <div class="category__image category__link">
                <a href="index.php?controller=product&action=index&category_id=<?= $category['id']?>">
                    <img src="../backend/assets/uploads/<?= $category['avatar']?>" alt="">
                </a>
            </div>
            <h3 class="category__name"><?= $category['name']?></h3>
        </div>
    <?php endforeach;?>
    </div>
    <?php endif;?>
</div>
<hr class="container line"/>
<div class="list--products list--products-laptop container">
    <?php if (!empty($laptop_dell_limit)):?>
        <div class="categories-brands" id="laptop-dell">
            <h2 class="categories-brands__name"><span>Dell</span></h2>
            <div class="row categories-brands__elem">
                <?php foreach ($laptop_dell_limit as $item):?>
                    <div class="col-md-3 col-6 product-item" id="laptop--item-<?= $item['id']?>">
                        <div class="product-item__image product-item__link">
                            <a href="index.php?controller=product&action=detail&category_id=<?= $item['category_id']?>&brand_id=<?= $item['brand_id']?>&product_id=<?= $item['id']?>">
                                <img src="../backend/assets/uploads/<?= $item['avatar']?>" alt="">
                            </a>
                        </div>
                        <h3 class="product-item__name"><?= $item['name']?></h3>
                    </div>
                <?php endforeach;?>
            </div>
            <div class="more-product"><a class="more-product__link" href="index.php?controller=product&action=show&category_id=<?= $item['category_id']?>&brand_id=<?= $item['brand_id']?>">
                Xem toàn bộ
            </a></div>
        </div>
    <?php endif;?>

    <?php if (!empty($laptop_asus_limit)):?>
        <div class="categories-brands" id="laptop-asus">
            <h2 class="categories-brands__name"><span>Asus</span></h2>
            <div class="row categories-brands__elem">
                <?php foreach ($laptop_asus_limit as $item):?>
                    <div class="col-md-3 col-6 product-item" id="laptop--item-<?= $item['id']?>">
                        <div class="product-item__image product-item__link">
                            <a href="index.php?controller=product&action=detail&category_id=<?= $item['category_id']?>&brand_id=<?= $item['brand_id']?>&product_id=<?= $item['id']?>">
                                <img src="../backend/assets/uploads/<?= $item['avatar']?>" alt="">
                            </a>
                        </div>
                        <h3 class="product-item__name"><?= $item['name']?></h3>
                    </div>
                <?php endforeach;?>
            </div>
            <div class="more-product"><a class="more-product__link" href="index.php?controller=product&action=show&category_id=<?= $item['category_id']?>&brand_id=<?= $item['brand_id']?>">
                Xem toàn bộ
            </a></div>
        </div>
    <?php endif;?>

    <?php if (!empty($laptop_lenovo_limit)):?>
        <div class="categories-brands" id="laptop-lenovo">
            <h2 class="categories-brands__name"><span>Lenovo</span></h2>
            <div class="row categories-brands__elem">
                <?php foreach ($laptop_lenovo_limit as $item):?>
                    <div class="col-md-3 col-6 product-item" id="laptop--item-<?= $item['id']?>">
                        <div class="product-item__image product-item__link">
                            <a href="index.php?controller=product&action=detail&category_id=<?= $item['category_id']?>&brand_id=<?= $item['brand_id']?>&product_id=<?= $item['id']?>">
                                <img src="../backend/assets/uploads/<?= $item['avatar']?>" alt="">
                            </a>
                        </div>
                        <h3 class="product-item__name"><?= $item['name']?></h3>
                    </div>
                <?php endforeach;?>
            </div>
            <div class="more-product"><a class="more-product__link" href="index.php?controller=product&action=show&category_id=<?= $item['category_id']?>&brand_id=<?= $item['brand_id']?>">
                Xem toàn bộ
            </a></div>
        </div>
    <?php endif;?>

    <?php if (!empty($laptop_acer_limit)):?>
        <div class="categories-brands" id="laptop-acer">
            <h2 class="categories-brands__name"><span>Acer</span></h2>
            <div class="row categories-brands__elem">
                <?php foreach ($laptop_acer_limit as $item):?>
                    <div class="col-md-3 col-6 product-item" id="laptop--item-<?= $item['id']?>">
                        <div class="product-item__image product-item__link">
                            <a href="index.php?controller=product&action=detail&category_id=<?= $item['category_id']?>&brand_id=<?= $item['brand_id']?>&product_id=<?= $item['id']?>">
                                <img src="../backend/assets/uploads/<?= $item['avatar']?>" alt="">
                            </a>
                        </div>
                        <h3 class="product-item__name"><?= $item['name']?></h3>
                    </div>
                <?php endforeach;?>
            </div>
            <div class="more-product"><a class="more-product__link" href="index.php?controller=product&action=show&category_id=<?= $item['category_id']?>&brand_id=<?= $item['brand_id']?>">
                Xem toàn bộ
            </a></div>
        </div>
    <?php endif;?>
</div>
<hr class="container line"/>

<div class="list--products list--products-phone container">
    <?php if (!empty($phone_iphone_limit)):?>
        <div class="categories-brands" id="iphone">
            <h2 class="categories-brands__name"><span>Điện thoại IPhone</span></h2>
            <div class="row categories-brands__elem">
                <?php foreach ($phone_iphone_limit as $item):?>
                    <div class="col-md-3 col-6 product-item" id="laptop--item-<?= $item['id']?>">
                        <div class="product-item__image product-item__link">
                            <a href="index.php?controller=product&action=detail&category_id=<?= $item['category_id']?>&brand_id=<?= $item['brand_id']?>&product_id=<?= $item['id']?>">
                                <img src="../backend/assets/uploads/<?= $item['avatar']?>" alt="">
                            </a>
                        </div>
                        <h3 class="product-item__name"><?= $item['name']?></h3>
                    </div>
                <?php endforeach;?>
            </div>
            <div class="more-product"><a class="more-product__link" href="index.php?controller=product&action=show&category_id=<?= $item['category_id']?>&brand_id=<?= $item['brand_id']?>">
                Xem toàn bộ
            </a></div>
        </div>
    <?php endif;?>

    <?php if (!empty($phone_samsung_limit)):?>
        <div class="categories-brands" id="samsung">
            <h2 class="categories-brands__name"><span>Điện thoại Samsung</span></h2>
            <div class="row categories-brands__elem">
                <?php foreach ($phone_samsung_limit as $item):?>
                    <div class="col-md-3 col-6 product-item" id="laptop--item-<?= $item['id']?>">
                        <div class="product-item__image product-item__link">
                            <a href="index.php?controller=product&action=detail&category_id=<?= $item['category_id']?>&brand_id=<?= $item['brand_id']?>&product_id=<?= $item['id']?>">
                                <img src="../backend/assets/uploads/<?= $item['avatar']?>" alt="">
                            </a>
                        </div>
                        <h3 class="product-item__name"><?= $item['name']?></h3>
                    </div>
                <?php endforeach;?>
            </div>
            <div class="more-product"><a class="more-product__link" href="index.php?controller=product&action=show&category_id=<?= $item['category_id']?>&brand_id=<?= $item['brand_id']?>">
                Xem toàn bộ
            </a></div>
        </div>
    <?php endif;?>

    <?php if (!empty($phone_vsmart_limit)):?>
        <div class="categories-brands" id="vsmart">
            <h2 class="categories-brands__name"><span>Điện thoại Vsmart</span></h2>
            <div class="row categories-brands__elem">
                <?php foreach ($phone_vsmart_limit as $item):?>
                    <div class="col-md-3 col-6 product-item" id="laptop--item-<?= $item['id']?>">
                        <div class="product-item__image product-item__link">
                            <a href="index.php?controller=product&action=detail&category_id=<?= $item['category_id']?>&brand_id=<?= $item['brand_id']?>&product_id=<?= $item['id']?>">
                                <img src="../backend/assets/uploads/<?= $item['avatar']?>" alt="">
                            </a>
                        </div>
                        <h3 class="product-item__name"><?= $item['name']?></h3>
                    </div>
                <?php endforeach;?>
            </div>
            <div class="more-product"><a class="more-product__link" href="index.php?controller=product&action=show&category_id=<?= $item['category_id']?>&brand_id=<?= $item['brand_id']?>">
                Xem toàn bộ
            </a></div>
        </div>
    <?php endif;?>

    <?php if (!empty($phone_realme_limit)):?>
        <div class="categories-brands" id="realme">
            <h2 class="categories-brands__name"><span>Điện thoại Realme</span></h2>
            <div class="row categories-brands__elem">
                <?php foreach ($phone_realme_limit as $item):?>
                    <div class="col-md-3 col-6 product-item" id="laptop--item-<?= $item['id']?>">
                        <div class="product-item__image product-item__link">
                            <a href="index.php?controller=product&action=detail&category_id=<?= $item['category_id']?>&brand_id=<?= $item['brand_id']?>&product_id=<?= $item['id']?>">
                                <img src="../backend/assets/uploads/<?= $item['avatar']?>" alt="">
                            </a>
                        </div>
                        <h3 class="product-item__name"><?= $item['name']?></h3>
                    </div>
                <?php endforeach;?>
            </div>
            <div class="more-product"><a class="more-product__link" href="index.php?controller=product&action=show&category_id=<?= $item['category_id']?>&brand_id=<?= $item['brand_id']?>">
                Xem toàn bộ
            </a></div>
        </div>
    <?php endif;?>

    <?php if (!empty($phone_oppo_limit)):?>
        <div class="categories-brands" id="oppo">
            <h2 class="categories-brands__name"><span>Điện thoại Oppo</span></h2>
            <div class="row categories-brands__elem">
                <?php foreach ($phone_oppo_limit as $item):?>
                    <div class="col-md-3 col-6 product-item" id="laptop--item-<?= $item['id']?>">
                        <div class="product-item__image product-item__link">
                            <a href="index.php?controller=product&action=detail&category_id=<?= $item['category_id']?>&brand_id=<?= $item['brand_id']?>&product_id=<?= $item['id']?>">
                                <img src="../backend/assets/uploads/<?= $item['avatar']?>" alt="">
                            </a>
                        </div>
                        <h3 class="product-item__name"><?= $item['name']?></h3>
                    </div>
                <?php endforeach;?>
            </div>
            <div class="more-product"><a class="more-product__link" href="index.php?controller=product&action=show&category_id=<?= $item['category_id']?>&brand_id=<?= $item['brand_id']?>">
                Xem toàn bộ
            </a></div>
        </div>
    <?php endif;?>
</div>
