<?php
class FileUtil
{
    public static function uploadImage($db, $element_name, $folder, $table_name, $foreign_key, $foreign_key_id)
    {
        if (!in_array('', $_FILES[$element_name]['name'], true)) {
            foreach ($_FILES[$element_name]['name'] as $id => $val) {
                $fname = preg_replace('/\s+/', '', $_FILES[$element_name]['name'][$id]);
                $fileName = time() . $fname;
                $tempLocation = $_FILES[$element_name]['tmp_name'][$id];
                move_uploaded_file($tempLocation, "../uploads/" . $folder . "/" . $fileName);
                $check = $db->insert($table_name, [
                    $foreign_key => $foreign_key_id,
                    'image_path' => "uploads/" . $folder . "/" . $fileName,
                ]);
            }
            unset($_FILES[$element_name]['name']);
        } else $check = 1;
        return $check;
    }

    public static function uploadSingleImage($element_name, $folder)
    {
        if ($_FILES[$element_name]['name'] != '') {
            $fname = preg_replace('/\s+/', '', $_FILES[$element_name]['name']);
            $fileName = time() . $fname;
            $tempLocation = $_FILES[$element_name]['tmp_name'];
            $img_path = "uploads/" . $folder . "/" . $fileName;
            move_uploaded_file($tempLocation, '../' . $img_path);
            unset($_FILES[$element_name]['name']);
            return $img_path;
        }
        return '';
    }
}
