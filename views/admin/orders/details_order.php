<script type="text/javascript">
document.title = 'Order Details';
</script>
<?php

use app\core\Application;
?>
<div class="row">
    <div class="col-lg-6">
        <section class="panel">
            <header class="panel-heading">
                <h1>Order Details</h1>
                <?php
        $path = Application::$app->request->getPath();
        if (strpos($path, 'reject')) {
          echo '<a href="/admin/orders/rejected">Back</a>';
        } else echo '<a href="/admin/orders/accepted">Back</a>';
        ?>
            </header>
            <div class="panel-body">
                <dl class="dl-horizontal">
                    <dt>OrderID</dt>
                    <dd><?= $params['orders']->getId() ?></dd>
                    <dt>UserID</dt>
                    <dd><?= $params['orders']->getUserId() ?></dd>
                    <dt>Payment Method</dt>
                    <dd><?= $params['orders']->getPaymentMethod() ?></dd>
                    <dt>Status</dt>
                    <dd><?= $params['orders']->getStatus() ?></dd>
                    <dt>Date</dt>
                    <dd><?= $params['orders']->getDateTime() ?></dd>
                </dl>
            </div>
        </section>
    </div>
</div>