<?php require_once 'app/views/components/auth/header.php'; ?>
<?php require_once 'app/views/components/auth/sidebar.php'; ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 mt-2">
    <h1>Settings</h1>
    <div class="card m-2 my-3 shadow">
        <div class="card-header h4">
            Google Sheet Id
        </div>
        <div class="card-body">
            <?php
                $gSheetId = $this->db->fetchRow('settings', ["id" => 1])['google_sheet_id'];
                if(isset($error)) {
                     echo '<div class="alert alert-danger">'.$error.'</div>';
                } else if(isset($message)) {
                    echo '<div class="alert alert-success">'.$message.'</div>';
               }
            ?>

            <form action="" method="post" id="changeGSheetIdForm">
                <div class="form-group">
                    <label for="currentSheetId">Current GSheet Id</label>
                    <input type="text" class="form-control" id="currentSheetId" aria-describedby="newPassword" disabled value="<?= $gSheetId != null ? $gSheetId : 'Unknown error. Try again later!' ?>">
                    <small id="currentSheetId" class="form-text text-muted">This is the Google Sheet Id where all your form inputs are saved.</small>
                </div>
                <div class="form-group">
                    <label for="newGSheetId">New GSheet Id</label>
                    <input type="text" class="form-control" name="newGSheetId" id="newGSheetId" aria-describedby="newGSheetId" >
                    <small id="currentSheetId" class="form-text text-muted">This is the Google Sheet Id where all your form inputs are saved.</small>
                </div>
                <button class="btn btn-primary my-2" type="submit" >Change GSheet Id</button>
            </form>
        </div>
    </div>
</main>


<script src="/assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</html>