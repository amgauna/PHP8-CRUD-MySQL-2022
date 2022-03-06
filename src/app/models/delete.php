<?php

require_once '../src/app/config/config.php';
require_once '../src/app/controller/user.php';
require_once '../src/app/models/header.php';

if(isset($_POST['id']))
    deleteUserAction($conn, $_POST['id']);

?>
<div class="container">
    <div class="row">
        <a href="../src/app/index.php"><h1>Users - Delete</h1></a>
        <a class="btn btn-success text-white" href="../src/app/index.php">Prev</a>
    </div>
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="../src/app/models/delete.php" method="POST">
                <label>Do you really want to remove the user?</label>
                <input type="hidden" name="id" value="<?=$_GET['id']?>" required/>

                <button class="btn btn-success text-white" type="submit">Yes</button>
            </form>
        </div>
    </div>
</div>
<?php require_once '../src/app/models/footer.php'; ?>
