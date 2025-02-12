<?php require_once 'app/views/components/auth/header.php'; ?>
<?php require_once 'app/views/components/auth/sidebar.php';
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 mt-2">
    <h4><span class="et"></span> new enquires today</h4>
    <div class="row">
        <div class="col-12">
        <table id="enquiries" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
        <th>Details</th>
      </tr>
    </thead>
    <tbody>
      <?php
          $sort = array("created_at" => "DESC");
          $records = $this->db->fetchAll('enquires', $sort);
          $index = 1;
          $entries_today = 0;
          foreach ($records as $record) { 
            if(explode(" ",$record['created_at'])[0] == (string)date("Y-m-d")) {
              $entries_today++;
            }
            ?>
            <tr>
              <td><?= $index ?></td>
              <td><?= $record['name'] ?></td>
              <td><?= $record['email'] ?></td>
              <td><?= $record['phone'] ?></td>
              <td><?= $record['message'] ?></td>
              <td><?= $record['form'].', '.$record['created_at'] ?></td>
         <?php 
            $index++;
          }
        ?>
        <script>
          document.querySelector(".et").innerHTML = "<?= $entries_today ?>"
        </script>
    </tbody>
  </table>
        </div>
    </div>
</main>
</div>
</div>
<script src="assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function() {
    $('#enquiries').DataTable();
});
</script>
</html>