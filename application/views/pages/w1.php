<div class="row content">
    <div class="col-8 row">
        <?php foreach ($products as $product) : ?>
            <li>
                <div class="col">
                    <span><img src="<?= $img_url .  $product['img']; ?>" height="500" width="500"></span>

                </div>
                <h3><?php echo $product['name']; ?></h3>
            </li>
    </div>
    <div class="col-4 row content__detail">
        <div class="col-10">
            <h1><?php echo $product['name']; ?></h1>
        </div>
        <div class="col-2">
            <p><?php echo $product['price']; ?></p>
        </div>
        <div class="content__description">
            <p><?php echo $product['description']; ?></p>
        <?php endforeach; ?>
        <button type="button" class="btn">Favorite <i class="far fa-heart"></i></button>
        </div>
        <div class="content__reviews">
            <hr>
            <a data-toggle="collapse" href="#brand-list" aria-expanded="true">
                Reviews &#160;
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="fas fa-caret-down"></i>
            </a>
            <ul id="brand-list" class="collapse show form-group">
                <li class="item">
                    <button type="button" class="btn">Write a review</button>
                </li>
                <li class="item">
                    <h6>amazing</h6>
                    <div>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="content__reviews__acount">thinhbeouuu123zo - 20 March 2020</p>
                    <p class="content__reviews_review">best cleats i’ve ever owned no doubt about it</p>
                </li>
                <li class="item">
                    <h6>amazing</h6>
                    <div>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="content__reviews__acount">thinhbeouuu123zo - 20 March 2020</p>
                    <p class="content__reviews_review">best cleats i’ve ever owned no doubt about it</p>
                </li>
                <li class="item">
                    <h6>amazing</h6>
                    <div>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="content__reviews__acount">thinhbeouuu123zo - 20 March 2020</p>
                    <p class="content__reviews_review">best cleats i’ve ever owned no doubt about it</p>
                </li>
            </ul>
        </div>
    </div>
</div>