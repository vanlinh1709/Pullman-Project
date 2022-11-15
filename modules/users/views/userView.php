<?php
if(isset($_GET['id'])) {
    $userUpdated = showFormAction($_GET['id']);
//    var_dump($user);
} else {
    $userUpdated = [
        'id' => '',
        'fullname' => '',
        'email' => '',
        'age' => '',
        'earn' => '',
    ];
}

//var_dump($_GET['id']);
//var_dump($user['fullname']);
//show_array($list_users);
?>
<html>
    <head>
        <title>Danh sách thành viên</title>
        <meta charset="utf8"/>

    </head>
    <body>
    <div class="container">
        <div class="list-user">
            <h3>Danh sách thành viên</h3>
            <table class="table">
                <thead>
                <tr>
                    <td>STT</td>
                    <td>Tên</td>
                    <td>Email</td>
                    <td>Tuổi</td>
                    <td>Thu nhập</td>
                    <td>Action</td>
                </tr>
                </thead>
                <tbody>
                <?php
                if (!empty($list_users)) {
                    $t = 0;
                    foreach ($list_users as $user) {
                        $t ++;
                        ?>
                        <tr>
                            <td><?php echo $t; ?></td>
                            <td><?php echo $user['fullname'] ?></td>
                            <td><?php echo $user['email'] ?></td>
                            <td><?php echo $user['age'] ?></td>
                            <td><?php echo currency_format($user['earn'], '$'); ?></td>
                            <td>
                                <a href="http://localhost/pullman.vn/?mod=users&controller=user&action=deleteUser&id=<?php echo $user['id']?>">
                                    <button class="btn btn-danger">Delete</button>
                                </a>
                                <a href="http://localhost/pullman.vn/?mod=users&controller=user&action=showUsers&id=<?php echo $user['id']?>">
                                    <button class="btn btn-info">Update</button>
                                </a>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>

                </tbody>
            </table>
        </div>
        <hr>
        <div class="add-new-user">
            <h3 id="name-action">Thêm mới thành viên</h3>
            <form action="/pullman.vn/?mod=users&controller=user&action=addNewUser" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control"  placeholder="Enter name" value="">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Age</label>
                    <input type="text" name="age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter age">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Earn</label>
                    <input type="text" name="earn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter earn">
                </div>
                <button  type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <hr>
        <div class="update-user">
            <h3 id="name-action">Chỉnh sửa thành viên</h3>
            <form action="/pullman.vn/?mod=users&controller=user&action=updateUser&id=<?php echo $userUpdated['id']?>" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $userUpdated['fullname']?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $userUpdated['email']?>">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Age</label>
                    <input type="text" name="age" class="form-control" value="<?php echo $userUpdated['age']?>">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Earn</label>
                    <input type="text" name="earn" class="form-control"value="<?php echo $userUpdated['earn']?>">

                </div>
                    <button  type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
    <script  type="text/javascript">

    </script>
    </body>

</html>
