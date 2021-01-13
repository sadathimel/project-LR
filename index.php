<?php
    include 'inc/header.php';
    include 'lib/User.php';
    $user = new User();
?>

<?php
    $loginmsg = Session::get("loginmsg");
    if (isset($loginmsg)) {
        echo $loginmsg;
    }
?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>User list <sapn class="pull-right" ><strong>Welcome!</strong>
                        <?php
                            $username = Session::get("username");
                            if (isset($username)){
                                echo $username;

                            }
                        ?>
                    </sapn>
                </h2>
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                   <tr>
                       <th width="20%">Serial</th>
                       <th width="20%">Name</th>
                       <th width="20%">Username</th>
                       <th width="20%">Email</th>
                       <th width="20%">Action</th>
                   </tr>

                    <tr>
                        <td>01</td>
                        <td>Sadat Himel</td>
                        <td>Himel</td>
                        <td>sadat.himel@gmail.com</td>
                        <td>
                            <a class="btn btn-primary" href="profile.php?id=1">View</a>
                        </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Tanvir ahmed opel</td>
                        <td>opel</td>
                        <td>tanvir@gmail.com</td>
                        <td>
                            <a class="btn btn-primary" href="profile.php?id=1">View</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <?php
            include 'inc/footer.php';
        ?>