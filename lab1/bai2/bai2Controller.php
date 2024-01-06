<?php
include "bai2Model.php";
// controller

$list_of_course = get_course();
$semester = (!empty($_GET['semester']) ? $_GET['semester']: ""  );
$course_name = find_by_semester($semester);
$page_content = $course_name;

include "bai2View.php";

?>