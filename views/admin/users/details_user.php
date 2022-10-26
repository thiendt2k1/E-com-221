<script type="text/javascript">
  document.title = 'User Info';
</script> 
<div class="row">
  <div class="col-lg-6">
    <section class="panel">
      <header class="panel-heading">
        <h1>User Info</h1>
        <a href="/admin/users" class="btn btn-success">Back</a>
      </header>
      <div class="panel-body">
        <dl class="dl-horizontal">
          <dt>UserID</dt><dd><?= $params['userModel']->getId() ?></dd>
          <dt>Name</dt><dd><?= $params['userModel']->getName() ?></dd>
          <dt>Email</dt><dd><?= $params['userModel']->getEmail() ?></dd>
          <dt>Phone No.</dt><dd><?= $params['userModel']->getPhoneNumer() ?></dd>
          <dt>Role</dt><dd><?= $params['userModel']->getRole() ?></dd>
          <dt>Owned</dt><dd><?=join(',<br>',$userModel->getMovieIds())?></dd>
        </dl>
      </div>
    </section>
  </div>
</div>