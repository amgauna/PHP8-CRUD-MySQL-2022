<?php

require_once '../src/app/config/config.php';
require_once '../src/app/controllers/user.php';
require_once '../src/app/models/messages.php';
require_once '../src/app/models/header.php';

$users = readUserAction($conn);

?>
<div class="container">
    <div class="row">
        <a href="../../../"><h1>Users - Read</h1></a>
        <a class="btn btn-success text-white" href="../src/app/models/create.php">New</a>
    </div>
    <div class="row flex-center">
        <?php if(isset($_GET['message'])) echo(printMessage($_GET['message'])); ?>
    </div>

    <table class="table-users">
        <tr>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PHONE</th>
        </tr>
        <?php foreach($users as $row): ?>
        <tr>
            <td class="user-name"><?=htmlspecialchars($row['name'])?></td>
            <td class="user-email"><?=htmlspecialchars($row['email'])?></td>
            <td class="user-phone"><?=htmlspecialchars($row['phone'])?></td>
            <td>
                <a class="btn btn-primary text-white" href="../src/app/models/edit.php?id=<?=$row['id']?>">Edit</a>
            </td>
            <td>
                <a class="btn btn-danger text-white" href="../src/app/models/delete.php?id=<?=$row['id']?>">Remove</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
<?php require_once '../src/app/models/footer.php'; ?>
