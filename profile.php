<?php
include 'lib/User.php';
include 'inc/header.php';
Session::checkSession();
?>

<?php
    if (isset($_GET['id'])){
        $userId = (int)$_GET['id'];
    }
    $user = new User();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
        $updateusr = $user->updateUserData($userId, $_POST);
    }
?>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>User Profile <sapn class="pull-right"><a class="btn btn-primary" href="index.php">Back</a></sapn></h2>
        </div>

        <div class="panel-body">
            <div style="max-width: 600px; margin: 0 auto ">

                <?php
                    if (isset($updateusr)) {
                        echo $updateusr;
                    }
                ?>

            <?php
                $userData = $user->getUserById($userId);
                if ($userId) {

            ?>

            <form action="" method="POST">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" class="form-control" value="<?php echo $userData->name; ?>"/>
                </div>

                <div class="form-group">
                    <label for="username">User Name</label>
                    <input type="text" id="username" name="username" class="form-control" value="<?php echo $userData->username?>"/>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" id="email" name="email" class="form-control" value="<?php echo $userData->email; ?>"/>
                </div>
                <?php
                    $sesId = Session::get("id");
                    if ($userId == $sesId) {

                ?>
                <button type="submit" name="update" class="btn btn-success">Update</button>
                    <a class="btn btn-info" href="changepass.php?id=<?php echo $userId; ?>">change password</a>
                <?php } ?>
            </form>

            <?php
                }
            ?>

            </div>
        </div>
    </div>

<?php
include 'inc/footer.php';
?>