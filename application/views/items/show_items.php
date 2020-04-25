
<div class="row content">
<div id="items">
      <?php
     echo '<div id="a">' ;
     echo $id ;
echo'</div>';
      foreach ($items as $print){
        echo'<div id="show_0">';
        echo '<div class="col-8 row">';
        echo '<div class="col">';
            echo '<img src="'.base_url('assets/img/'.$print['picture']).'" alt="" style="width:500px">';
            echo '</div>';
        echo '</div>';
        echo '<div class="col-4 row content__detail">';
            echo'<div class="col-10">';
                
                echo '<h1>'.$print['name'].'</h1>';
            echo'</div>';
            echo'<div class="col-2">';
                echo'<p>'.$print['price'].'</p>';
            echo '</div>';
            echo '<div class="content__description">';
                echo'<p>'.$print['description'].'</p>';
                
                echo'<button type="button" class="btn">Favorite <i class="far fa-heart"></i></button>';
           echo'</div>';
        echo'</div>';
        echo'</div>';
        }
        ?>
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