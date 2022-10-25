<?php

use app\core\Application;

if (Application::isGuest()) {
    Application::$app->response->redirect('/login');
}
?>

<div class="page-container">
    <form accept-charset="utf-8" action="" method="post">
        <div class="product-detail">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-md-12 col-lg-6">
                        <div class="main-image">
                            <img src="<?php echo $params['product']->image_url ?>" alt="image-1" />
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 product-detail-right">
                        <div class="product-detail-name"><?php echo $params['product']->name ?></div>
                        <div class="product-detail-name-footer" >
                        <ul class="auto actions" > 
                            <li class="nodot"> <?php echo $params['product']->getCategory() ?> </li>
                            <li> <?php echo $params['product']->year ?> </li>
                            <li> <?php echo $params['product']->duration ?> min </li>
                            <li> <?php echo number_format($params['product']->price, 0, ',', '.') ?>đ</li>
</ul>    
                    </div>
                        <ul class="auto actions">
                            <li class="chart">
                            <div class="bar-container">
                            <div class="circular-progress" style="background: conic-gradient(#21d07a <?php echo $params['product']->rating * 3.6; ?>deg, #204529 5deg);">
                                <div class="value-container"><?php echo $params['product']->rating; ?>%</div>
                                </div>
                            </div>
                            <div class="text">User<br>Score</div>
                            </li>
                        </ul>
                        <div class="product-detail-footer">
                        <div class="product-detail-description">
                        <div class="text">Overview </div> <?php echo $params['product']->description ?>  
                        </div>
                        <ol class="people no_image">
                        
                      <?php foreach($params['product']->getDirector() as $dir){
                        echo '
                        <li class="profile">
                        <p><span>'.$dir.'</span></p>
                        <p class="character">Director</p>
                        </li>
                        ';    
                      } 
                      ?>
                    
                        </ol>
                        <ol class="people no_image">
                    
                      <?php foreach($params['product']->getStars() as $star){
                        echo '
                        <li class="profile">
                        <p><span>'.$star.'</span></p>
                        <p class="character">Actor</p>
                        </li>';    
                      } 
                      ?>
                    
                        </ol>
                        </div>
                        <div class="product-detail-button">
                            <?php   $a = array();
                                    if ($params['user']->getMovieIds() == NULL):
                                        print_r("HELLO");
                                        $a = array('');
                                    else:
                                        $a = $params['user']->getMovieIds();
                                    endif;
                                    if (in_array($params['product']->id,$a)):      
                            ?>
                            <a href="<?php echo $params['product']->download_url ?>">
                                <img class="item-button-image"
                                                        src="\images\Download.svg"
                                                        alt="" />
                            </a>
                            <?php else: ?>
                            <button type="submit" id="liveToastBtn" href="<?php echo $params['product']->download_url?>" download>
                                <img class="item-button-image"
                                                        src="/images/cart.png"
                                                        alt="" />   
                            </button>
                            <?php endif; ?> 
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                            
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="/images/logo/logo-2.png" width="30px" class="rounded me-2" alt="logo-2">
                <strong class="me-auto">Filmware
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Successfully added to Cart.
            </div>
        </div>
    </div>

</div>

<script src="/js/product_detail.js"></script>
<script>

<?php
    if ($params['addToCart']) {
        echo "var toastTrigger = document.getElementById('liveToastBtn')
            var toastLiveExample = document.getElementById('liveToast')
            var toast = new bootstrap.Toast(toastLiveExample)
            toast.show()";
    }
    ?>
</script>

