
<div class="row content">
   
    <?php
    echo '<div id="a">' ;
        echo $id ;
    echo'</div>';
      foreach ($items as $print){
        
    echo'<div class="col-8 row">';
         echo '<div class="col">';
            echo '<img src="'.base_url('assets/img/'.$print['picture']).'" alt="" style="width:500px">';
        echo '</div>';
    echo'</div>';
        echo '<div class="col-4 row content__detail">';
            echo'<div class="col-10">';
                echo '<h1>'.$print['name'].'</h1>';
            echo'</div>';
            echo'<div class="col-2">';
                echo'<h3>'.$print['price'].'</h3>';
            echo '</div>';
            echo '<div class="content__description">';
                echo'<p>'.$print['description'].'</p>';
            echo'</div>';
                echo'<button type="button" class="btn">Favorite <i class="far fa-heart"></i></button>';
                echo'<div class="content__reviews">';
                echo'<hr>';
                echo'<a data-toggle="collapse" href="#brand-list" aria-expanded="true">';
                    echo'Reviews &#160;';
                    echo'<i class="fas fa-star"></i>';
                    echo'<i class="fas fa-star"></i>';
                    echo'<i class="fas fa-star"></i>';
                    echo'<i class="fas fa-star"></i>';
                    echo'<i class="fas fa-star"></i>';
                    echo'<i class="fas fa-star"></i>';
                echo'</a>';
                echo'<ul id="brand-list" class="collapse show form-group">';
                    echo'<li class="item">';
                        echo'<button type="button" class="btn">Write a review</button>';
                    echo'</li>';
        echo'<li class="item">';
        echo'<h6>amazing</h6>';
        echo'<div>';
            echo'<i class="fas fa-star"></i>';
            echo'<i class="fas fa-star"></i>';
            echo'<i class="fas fa-star"></i>';
            echo'<i class="fas fa-star"></i>';
            echo'<i class="fas fa-star"></i>';
        echo'</div>';
        echo'<p class="content__reviews__acount">thinhbeouuu123zo - 20 March 2020</p>';
        echo'<p class="content__reviews_review">best cleats i’ve ever owned no doubt about it</p>';
    echo'</li>';
    echo'<li class="item">';
        echo'<h6>amazing</h6>';
        echo'<div>';
            echo'<i class="fas fa-star"></i>';
            echo'<i class="fas fa-star"></i>';
            echo'<i class="fas fa-star"></i>';
            echo'<i class="fas fa-star"></i>';
            echo'<i class="fas fa-star"></i>';
        echo'</div>';
        echo'<p class="content__reviews__acount">thinhbeouuu123zo - 20 March 2020</p>';
        echo'<p class="content__reviews_review">best cleats i’ve ever owned no doubt about it</p>';
    echo'</li>';
    echo'<li class="item">';
        echo'<h6>amazing</h6>';
        echo'<div>';
            echo'<i class="fas fa-star"></i>';
            echo'<i class="fas fa-star"></i>';
            echo'<i class="fas fa-star"></i>';
            echo'<i class="fas fa-star"></i>';
            echo'<i class="fas fa-star"></i>';
        echo'</div>';
        echo'<p class="content__reviews__acount">thinhbeouuu123zo - 20 March 2020</p>';
        echo'<p class="content__reviews_review">best cleats i’ve ever owned no doubt about it</p>';
    echo'</li>';
    echo'</ul>';
    echo'</div>';
    echo'</div>';
    
    
            }
        ?>
   
   </div>