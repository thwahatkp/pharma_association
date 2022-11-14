<?php
class FileUtil{
    public static function uploadSingleImage($element_name, $folder)
    {
        if ($_FILES[$element_name]['name'] != '') {
            $fname = preg_replace('/\s+/', '', $_FILES[$element_name]['name']);
            $fileName = time() . $fname;
            $tempLocation = $_FILES[$element_name]['tmp_name'];
            $img_path = "uploads/" . $folder . "/" . $fileName;
            move_uploaded_file($tempLocation, './' . $img_path);
            unset($_FILES[$element_name]['name']);
            return $img_path;
        }
        return '';
    }
}
?>