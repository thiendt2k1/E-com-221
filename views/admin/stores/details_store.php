<script type="text/javascript">
  document.title = 'Store Detail';
</script> 
<div class="row">
  <div class="col-lg-6">
    <section class="panel">
      <header class="panel-heading">
        <h1>Store Detail</h1>
        <a href="/admin/stores">Back</a>
      </header>
      <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Store ID</dt><dd><?= $params['storeModel']->getId() ?></dd>
            <dt>Store status</dt><dd><?= $params['storeModel']->getStatus() ?></dd>
            <dt>Store address</dt><dd><?=$params['storeModel']->getAddress() ?></dd>
            <dt>Opening Time</dt><dd><?= $params['storeModel']->getOpentime() ?></dd>
            <dt>Hotline</dt><dd><?= $params['storeModel']->getHotline() ?></dd>
        </dl>
      </div>
    </section>
  </div>
</div>