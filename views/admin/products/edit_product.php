<script type="text/javascript">
  document.title = 'Sửa đổi sản phẩm';
</script> 
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <h1>Sửa đổi sản phẩm</h1>
        <a href="/admin/products">Trở về</a>
      </header>
      <div class="panel-body">
        <?php $form = app\core\Form\Form::begin('', "post") ?>
          <div class="form-row">
            <div class="form-group col-md-3">
              <?php echo $form->field($productModel, 'name') ?>
            </div>
            <div class="form-group col-md-3">
              <div class="mb-3">
                <label class="form-label">Category</label>
                <select name='category_id' class="form-control">
                  <?php
                  foreach ($categories as $category) { 
                  ?>
                    <option <?php if ($categoryModel->getId() == $category->getId()) echo "selected=\"selected\"";  ?> value=<?=$category->getId()?> ><?=$category->getName()?></option>
                  <?php 
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="form-group col-md-3">
              <?php echo $form->field($productModel, 'price') ?>
            </div>
            <div class="form-group col-md-3">
              <?php echo $form->field($productModel, 'image_url') ?>
            </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <?php echo $form->field($productModel, 'description') ?>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4">
              <button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i> Chỉnh sửa sản phẩm</button>
            </div>
          </div>
        <?php app\core\form\Form::end() ?>
      </div>
    </section>
  </div>
</div>