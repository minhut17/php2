<?= $page_content;?>
<select name="course" id="">
    <?php
     foreach ($list_of_course as $course_name): ?>
    <option><?= $course_name?> </option>
    <?php endforeach;?>
</select>
