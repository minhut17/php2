<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>toDoList</title>
</head>
<body>

<?php
$dslh =get_tasks();

?>
<div class="row">
    <div class="col-md-12 d-flex">
        <div class="card card-table flex-fill">
            <div class="card-header d-flex justify-content-between">
                <?php
                if (!empty($dslh)):
                ?>
                <h3 class="card-title float-left mt-2">Danh sách nhiệm vụ </h3>
                <a href="" class="btn btn-success text-white mb-2">Thêm mới
                    <i class="fas fa-plus-circle"></i>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped text-center">
                        <thead>
                        <tr>
                            <th>Mã Nhiệm vụ</th>
                            <th>Tên Nhiệm vụ</th>
                            <th>Mô Tả Nhiệm vụ</th>
                            <th>Dealine</th>
                            <th>Mức Độ Ưu tiên</th>
                            <th>Tác Vụ</th>
                        </tr>
                        </thead>
                        <tbody class="">
                        <?php foreach ($dslh as $lh): ?>
                            <tr>
                                <td>
                                    <?= $lh['ID'] ?>
                                </td>

                                <td>
                                    <?= $lh['NameTasks'] ?>
                                </td>
                                <td>
                                    <?= $lh['Description'] ?>
                                </td>
                                <td>
                                    <?= $lh['Deadline'] ?>
                                </td>
                                <td>
                                    <?= $lh['Level'] ?>
                                </td>
                                <td>
                                    <button class="btn btn-outline-danger">X
                                    </button>
                                    <a class="btn btn-outline-warning" href=""><i class="fa-solid fa-pen-to-square"></i></a>
                                </td>
                               
                            </tr>
                        <?php
                        endforeach;
                        ?>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
else:
?>
<div class="card-body">
    dang cap nhat du lieu
</div>
<?php
endif;
?>

</body>
</html>