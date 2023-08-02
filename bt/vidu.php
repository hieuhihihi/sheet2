<?php
$schools = array(
    'students' => array(
        'SV01' => array(
            'name' => 'Phan Van Cuong',
            'birth' => '10/11/1988',
            'gender' => 'Nam',
        ),
        'SV02' => array(
            'name' => 'Nguyen Van Hoang',
            'birth' => '04/12/1990',
            'gender' => 'Nam',
    ),
        'SV03' => array(
            'name' => 'Tran Thi Hang',
            'birth' => '01/07/1992',
            'gender' => 'Nu',
),
        'SV04' => array(
            'name' => 'Khanh Linh',
            'birth' => '01/07/1994',
            'gender' => 'Nu',
        ),
    ),
    'teachers' => array(
        'GV01' => array(
            'name' => 'Tran Thien Thanh',
            'birth' => '04/06/1982',
            'gender' => 'Nam',
        ),
        'GV02' => array(
            'name' => 'Nguyen Van Hieu',
            'birth' => '05/10/1981',
            'gender' => 'Nam',
        ),
        'GV03' => array(
            'name' => 'Nguyen Thi Le',
            'birth' => '04/12/1981',
            'gender' => 'Nu',
        ),
    )
);
?>
<div id='content'>
    <?php
        foreach ($schools as $k => $v){
            ?>
            <h1 class="list_title"><?php echo $k; ?></h1>
            <ul class="list_chools">
                <?php foreach ($v as $k1 => $v1){
                    ?>
                    <li>
                        <p><span>MaSV:</span><?php echo $k1; ?></p>
                        <p><span>Ten:</span><?php echo $v1['name'] ?></p>
                        <p><span>Ngay Sinh:</span><?php echo $v1['birth'] ?></p>
                        <p><span>Gioi Tinh:</span><?php echo $v1['gender'] ?></p>
                </li>
                <?php }
                ?>
                </ul>
        <?php
        }
        ?>
        </div