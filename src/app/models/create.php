<?php

require_once '../src/app/config/config.php';
require_once '../src/app/controllers/user.php';
require_once '../src/app/models/header.php';

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]))
    createUserAction($conn, $_POST["name"], $_POST["email"], $_POST["phone"]);

?>
<div class="container">
    <div class="row">
        <a href="../src/app/index.php"><h1>Users - Create</h1></a>
        <a class="btn btn-success text-white" href="../src/app/index.php">Prev</a>
    </div>
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="../src/app/models/create.php" method="POST">
                <label>Name</label>
                <input type="text" name="name" required/>
                <label>E-mail</label>
                <input type="email" name="email" required/>
                <label>Phone</label>
                <input type="text" name="phone" required/>

                <button class="btn btn-success text-white" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
<?php require_once '../src/app/models/footer.php'; ?>
