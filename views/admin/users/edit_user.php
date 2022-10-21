<script type="text/javascript">
  document.title = 'Change User Info';
</script> 
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <h1>Change User Info</h1>
        <div> 
          <a href="/admin/users" class="btn btn-success">Back</a>
        </div><br>
        <div class="changepassword"> 
          <a href="/admin/users/edit/password?id=<?=$userModel->getId()?>">Change password</a>
        </div><br>
      </header>
      <div class="panel-body">
        <?php $form = app\core\Form\Form::begin('', "post") ?>
            <div class="form-group col-md-4">
              <?php echo $form->field($userModel, 'firstname') ?>
            </div>
            <div class="form-group col-md-4">
              <?php echo $form->field($userModel, 'lastname') ?>
            </div>
            <div class="form-group col-md-4">
              <?php echo $form->field($userModel, 'phone_number') ?>
            </div>
            <div class="form-group col-md-4">
              <?php echo $form->field($userModel, 'email') ?>
            </div>
            <div class="form-group col-md-4">
              <?php echo $form->field($userModel, 'role') ?>
            </div>
            <div class="form-row">
                <div class="col-md-4">
                <button type="submit" class="btn btn-primary"><i class="fa fa-cart-plus"></i>Update</button>
                </div>
            </div>
        <?php app\core\form\Form::end() ?>
      </div>
    </section>
  </div>
</div>