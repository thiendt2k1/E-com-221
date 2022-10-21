<script type="text/javascript">
  document.title = 'Add store';
</script> 
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <h1>Add store</h1>
        <a href="/admin/stores">Back</a>
      </header>
      <div class="panel-body">
        <?php $form = app\core\Form\Form::begin('', "post") ?>
            <div class="form-group col-md-4">
              <label for="price">Store image</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Img URL">
            </div>
            <div class="form-group col-md-4">
              <label for="price">Store status</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Status">
            </div>
            <div class="form-group col-md-4">
              <label for="price">Store address</label>
              <input type="text" class="form-control" id="price" name="price" placeholder="Address">
            </div>
            <div class="form-group col-md-4">
              <label for="price">Hotline</label>
              <input type="text" class="form-control" id="price" name="price" placeholder="Phone number">
            </div>
            <div class="form-group col-md-4">
              <label for="price">Opening time</label>
              <input type="text" class="form-control" id="image_url" name="image_url" placeholder="Opening time">
            </div>
          <div class="form-row" style="margin-right: 10px;">
            <div class="col-md-4">
              <button type="submit" class="btn btn-primary"><i class="fa fa-cart-plus"></i> Create</button>
            </div>
          </div>
        <?php app\core\form\Form::end() ?>
      </div>
    </section>
  </div>
</div>