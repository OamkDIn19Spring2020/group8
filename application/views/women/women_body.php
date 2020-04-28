<div class="sortby row">
    <div class="col-2">
        <div class="btn-group">
            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sort by &#160;
                <i class="fa fa-chevron-down pull-right"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <button class="dropdown-item" type="button">Featured</button>
                <button class="dropdown-item" type="button">Newest</button>
                <button class="dropdown-item" type="button">Price: Low-High</button>
                <button class="dropdown-item" type="button">Price: High-Low</button>
            </div>
        </div>
    </div>
</div>
<div class="wall row">
    <nav class="col-2 left">
        <ul class="list">
            <li>
                <a data-toggle="collapse" href="#brand-list" aria-expanded="true">
                    Brand &#160;
                    <i class="fas fa-caret-down"></i>
                </a>
                <ul id="brand-list" class="collapse show form-group form-check">
                    <li class="item">
                        <label class="containerbox">Adidas
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="item">
                        <label class="containerbox">Nike
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="item">
                        <label class="containerbox">Puma
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="item">
                        <label class="containerbox">New Balance
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </li>
                </ul>
            </li>
        </ul>
        <hr>
        <ul class="list">
            <li>
                <a data-toggle="collapse" href="#price-list" aria-expanded="true">
                    By price &#160;
                    <i class="fas fa-caret-down"></i>
                </a>
                <ul id="price-list" class="collapse show form-group form-check">
                    <li class="item">
                        <label class="containerbox">0-50
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="item">
                        <label class="containerbox">50-100
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="item">
                        <label class="containerbox">100-150
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="item">
                        <label class="containerbox">150-200
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </li>
                    <li class="item">
                        <label class="containerbox">Over 200
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </li>
                </ul>
            </li>
        </ul>
        <hr>
        <ul class="list">
            <li>
                <a data-toggle="collapse" href="#material-list" aria-expanded="true">
                    Material &#160;
                    <i class="fas fa-caret-down"></i>
                </a>
                <ul id="material-list" class="collapse show form-group form-check">
                    <li class="item">
                        <label class="containerbox">Leather
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </li>
                </ul>
            </li>
        </ul>
        <hr>
        <ul class="list">
            <li>
                <a data-toggle="collapse" href="#color-list" aria-expanded="true">
                    Color &#160;
                    <i class="fas fa-caret-down"></i>
                </a>
                <ul id="color-list" class="collapse show form-group">
                    <label class="containerlabel">
                        <input type="checkbox" checked="checked">
                        <span class="checkmark black"></span>
                        Black
                    </label>
                    <label class="containerlabel">
                        <input type="checkbox" checked="checked">
                        <span class="checkmark grey"></span>
                        Grey
                    </label>
                    <label class="containerlabel">
                        <input type="checkbox" checked="checked">
                        <span class="checkmark yellow"></span>
                        Yellow
                    </label>
                    <label class="containerlabel">
                        <input type="checkbox" checked="checked">
                        <span class="checkmark red"></span>
                        Red
                    </label>
                </ul>
            </li>
        </ul>
        <hr>
    </nav>
    <div class="col-10 mt-3 product">
        <div class="card mb-3" style="width: 100%;">
            <?php
            foreach ($products as $print) {
                echo '<div class="row no-gutters">';
                echo '<div class="col-md-4">';
                echo '<img src="' . base_url('assets/img/' . $print['picture']) . '" class="card-img-top" alt="...">';
                echo '</div>';
                echo '<div class="col-md-8">';
                echo '<div class="card-body">';
                echo '<h4 class="card-title">' . $print['name'] . '</h4>';
                echo '<p class="card-text">' . $print['description'] . '</p>';
                echo '<a href="' . site_url('/index,php/items/show_items/');
                echo $print['product_id'] . '"><button class="btn btn-light">';
                echo 'More...</button></a>';
                echo '</div>';
                echo '</div>';
                echo '</div';
            }
            ?>
        </div>
    </div>
</div>