<?php

require_once("./header.php");
require_once("./db.php");

if($_POST){

    $validate = validateData($_POST);

    if($validate){
        $new_students = $_POST;
        $new_students['id'] = random_int(1000,9999);
        $students[] = $new_students;
    }

   
}

function validateData($datas){
    foreach($datas as $key => $value){
        if(empty($value)){
            echo "Vui long dien du thong tin";
            return false;
        }
    }

    return true;
}

?>

<div class="body">
    <h1 class="page-title">Quản lý sinh viên</h1>
    <div class="study-list flex">
        <form action="" method="post" class="form w-320">
            <h3>Thêm dữ liệu:</h3>
            <div class="form-item">
                <input type="text" placeholder="Họ và tên sinh viên" name="fullname">
            </div>
            <div class="form-item">
                <input type="text" placeholder="Khoa" name="faculty">
            </div>
             <div class="form-item">
                <input type="text" placeholder="Lớp" name="class">
            </div>
            <div class="form-item">
                <input type="text" placeholder="Khoá" name="cohort">
            </div>
            <div class="form-item">
               <input type="submit" value="Cập nhật">
            </div>
        </form>
        <table class="table-list">
            <caption class="left b uppercase">
                Danh sách sinh viên
            </caption>
            <thead>
                <tr class="th-bg">
                    <th>ID</th>
                    <th>Họ và tên</th>
                    <th>Khoa</th>
                    <th>Lớp</th>
                    <th>Khoá</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($students)): ?>
                 <?php  foreach($students as $i => $student): ?>
                        <tr class="<?php if($i%2 == 1){
                            echo "r-bg";
                        } ?>">
                            <th><?php echo $student['id'] ?></th>
                            <td><?php echo $student['fullname'] ?></td>
                            <td class="center"><?php echo $student['faculty'] ?></td>
                            <td class="center"><?php echo $student['class'] ?></td>
                            <td class="center"><?php echo $student['cohort'] ?></td>
                            <td class="center"><form action="" method="post"><input type="submit" value="Delete"></form></td>
                        </tr>
                 <?php endforeach ?>
                 <?php else: ?>
                    <tr>
                        <th colspan="5">Chưa có thông tin sinh viên nào</th>
                    </tr>
                <?php endif ?>
            </tbody>
        </table>
    </div>
</div>