<script type="text/javascript">
  document.title = 'Store Management';
</script> 
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <h1>Store Management</h1>
          <a href="/admin/stores/add" class="btn btn-success">Add Store</a>
      </header>
      <div class="panel-body">
        <table class="table table-striped table-hover dt-datatable">
          <thead>
            <tr>
              <th>StoreID</th>
              <th>Status</th>
              <th>Address</th>
              <th>Opening time</th>
              <th>Hotline</th>
              <th class="no-sort">Options</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($params['store'] as $storeModel) { 
            ?>
              <tr>
                <td><?=$storeModel->getId()?></td>
                <td><?=$storeModel->getStatus()?></td>
                <td><?=$storeModel->getAddress()?></td>
                <td><?=$storeModel->getOpentime()?></td>
                <td><?=$storeModel->getHotline()?></td>
                <td>
                    <a class="fa fa-eye btn btn-info btn-sm" href="/admin/stores/details?id=<?=$storeModel->getId()?>"></a>
                    <a class="fa fa-pencil btn btn-warning btn-sm" href="/admin/stores/edit?id=<?=$storeModel->getId()?>"></a>
                    <a class="fa fa-trash btn btn-danger btn-sm" href="/admin/stores/delete?id=<?=$storeModel->getId()?>"></a>
                </td>
              </tr>
            <?php 
              }
            ?>
          </tbody>
        </table>
      </div>
    </section>
  </div>
</div>