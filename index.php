<?php
require $_SERVER['DOCUMENT_ROOT']."/Act2497/vendor/autoload.php";


?>
<table class="table" border="1">
    <thead>
        <th>#</th>
        <th>เรื่อง</th>
        <th>คำนำ</th>
        <th>ผู้รับสนอง</th>
        <th>ตำแหน่ง</th>
        <th>หมายเหตุ</th>
    </thead>
    <tbody>
    <?php
    use App\Model\Act;

    $actobj=new Act();
    $n=0;
    $acts=$actobj->getAllAct();
        foreach($acts as $act){
            $n++;
            echo "
            <tr>
                <td>{$n}</td>
                <td>{$act['A_title']}</td>
                <td>{$act['A_foreword']}</td>
                <td>{$act['A_receive']}</td>
                <td>{$act['A_position']}</td>
                <td>{$act['A_comment']}</td>
            </tr>
            ";
        }
    ?>
    </tbody>
</table>