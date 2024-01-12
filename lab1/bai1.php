<?php

$course = [
    's1' => 'course1',
    's2' => 'course2',
    's3' => 'course3'
];
// model
function get_course(){
    global $course;
   return array_values($course);
}
function find_by_semester($semester){
    global $course;
    return (array_key_exists($semester,$course) ? $course[$semester]: 'Invalid course');
}

// controller
$list_of_course = get_course();
$semester = (!empty($_GET['semester']) ? $_GET['semester']: ""  );
$course_name = find_by_semester($semester);
$page_content = $course_name;



?>
<!--view-->
<?= $page_content;?>


    <form action="" method="get">
        <select name="semester" id="">
            <?php foreach ($course as $key => $value): ?>
                <option value="<?= $key ?>"><?= $value ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Tìm</button>
    </form>

