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
                        <?php echo $params['product']->year ?> <?php echo $params['product']->duration ?> min
                        </div>
                        <div class="product-detail-footer">
                        <div class="product-detail-description" >
                           Genre: <?php echo $params['product']->getCategory() ?>
                        </div>
                        <div class="product-detail-description">
                            <?php echo $params['product']->description ?>  
                        </div>
                        <div class="product-detail-description" style="font-weight: bold;">
                           Director: <?php echo $params['product']->director ?>
                        </div>
                        <div class="product-detail-description" style="font-weight: bold;">
                           Stars: <?php echo $params['product']->stars ?>
                        </div>
                        <div class="product-detail-description">
                           Rating: <?php echo $params['product']->rating ?>/5
                        </div>
                        <div><span
                                    class="price"> Price: <?php echo number_format($params['product']->price, 0, ',', '.') ?></span>đ
                            </div>
                        </div>
                        <div class="product-detail-button">
                            <button type="submit" id="liveToastBtn">
                                <img class="item-button-image"
                                                        src="\images\Download.svg"
                                                        alt="" />
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