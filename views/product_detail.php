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
                            <li> <?php echo $params['product']->getCategory() ?> </li>
                            <li> <?php echo $params['product']->year ?> </li>
                            <li> <?php echo $params['product']->duration ?> min </li>
</ul>    
                    </div>
                        <ul class="auto actions">
                            <li class="chart">
                            <div class="consensus details">
                                <div class="outer_ring">
                                <div class="user_score_chart" data-percent="0" data-track-color="#204529" data-bar-color="#21d07a">
                                    <div class="percent">
                                        <span class="icon"><?php echo $params['product']->rating ?>%</span>
                                    </div>
                                <canvas height="75" width="75" style="height: 60px; width: 60px;"></canvas></div>
                                </div>
                            </div>
                            <div class="text">User<br>Score</div>
                            </li>
                        </ul>
                        <div class="product-detail-footer">
                        <div class="product-detail-description">
                        <div class="text">Overview </div> <br> <?php echo $params['product']->description ?>  
                        </div>
                        <div class="product-detail-description" style="font-weight: bold;">
                           Director: <?php echo $params['product']->director ?>
                        </div>
                        <div class="product-detail-description" style="font-weight: bold;">
                           Stars: <?php echo $params['product']->stars ?>
                        </div>
                        <div><span
                                    class="price"> Price: <?php echo number_format($params['product']->price, 0, ',', '.') ?></span>đ
                            </div>
                        </div>
                        <div class="product-detail-button">
                            <?php   $a = array();
                                    if ($params['user']->getMovieIds() == NULL):
                                        $a = array('5b03966a1acd4d5bbd672373');
                                    endif;
                                    if (array_key_exists($params['product']->id,$a)):      
                            ?>
                            <button type="submit" id="liveToastBtn" href="<?php $params['product']->download_url?>" download>
                                <img class="item-button-image"
                                                        src="\images\Download.svg"
                                                        alt="" />
                            <?php else: ?>
                            <button type="submit" id="liveToastBtn" href="<?php $params['product']->download_url?>" download>
                                <img class="item-button-image"
                                                        src="/images/cart.png"
                                                        alt="" />   
                            <?php endif; ?> 
                            </button>
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

