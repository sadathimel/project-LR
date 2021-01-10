<?php
include 'inc/header.php';
?>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>User Profile <sapn class="pull-right"><a class="btn btn-primary" href="index.php">Back</a></sapn></h2>
        </div>

        <div class="panel-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" class="form-control" value="Sadat Himel"/>
                </div>

                <div class="form-group">
                    <label for="username">User Name</label>
                    <input type="text" id="username" name="username" class="form-control" value="Himel"/>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" id="email" name="email" class="form-control" value="sadat.himel@gamil.com"/>
                </div>

                <button type="submit" name="update" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>

<?php
include 'inc/footer.php';
?>