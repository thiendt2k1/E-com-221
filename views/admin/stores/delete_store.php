<script type="text/javascript">
  document.title = 'Delete Store';
</script> 
<div class="row">
  <div class="col-lg-6">
    <section class="panel">
      <header class="panel-heading">
        <h1>Delete Store</h1>
        <a href="/admin/stores">Back</a>
      </header>
      <div class="panel-body">
        <?php $form = app\core\Form\Form::begin('', "post") ?>
          <input type="hidden" name="id" id="id" value="<?= $params['storeModel']->getId() ?>" />
          <dl class="dl-horizontal">
            <dt>Store ID</dt><dd><?= $params['storeModel']->getId() ?></dd>
            <dt>Store status</dt><dd><?= $params['storeModel']->getStatus() ?></dd>
            <dt>Store address</dt><dd><?=$params['storeModel']->getAddress() ?></dd>
            <dt>Opening Time</dt><dd><?= $params['storeModel']->getOpentime() ?></dd>
            <dt>Hotline</dt><dd><?= $params['storeModel']->getHotline() ?></dd>
          </dl>
          <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
        <?php app\core\form\Form::end() ?>
      </div>
    </section>
  </div>
</div>