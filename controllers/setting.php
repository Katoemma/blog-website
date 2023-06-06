<?php
$basePath = dirname(__DIR__);
include $basePath . '/helpers/validateSettings.php';


$table = 'settings';
$settings = selectAll($table, ['id' => 1]);

$title = '';
$description = '';

$errors = array();

if (isset($_POST['change-btn'])) {

    $errors = validateSettings($_POST);

    if (!empty($_FILES['logo']['name'])) {
        $logo_name = time() . '_' . $_FILES['logo']['name'];
        $upload_folder_logo = '../uploads/' . $logo_name;

        $result_logo = move_uploaded_file($_FILES['logo']['tmp_name'], $upload_folder_logo);

        if ($result_logo) {
            $_POST['logo'] = $logo_name;
        } else {
            array_push($errors, "Failed to upload site logo");
        }
    } else {
        array_push($errors, 'Site logo is required!!');
    }

    if (!empty($_FILES['favicon']['name'])) {
        $favicon_name = time() . '_' . $_FILES['favicon']['name'];
        $upload_folder_favicon = '../uploads/' . $favicon_name;

        $result_favicon = move_uploaded_file($_FILES['favicon']['tmp_name'], $upload_folder_favicon);

        if ($result_favicon) {
            $_POST['favicon'] = $favicon_name;
        } else {
            array_push($errors, "Failed to upload site favicon");
        }
    } else {
        array_push($errors, 'Site favicon is required!!');
    }

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['change-btn'], $_POST['id']);

        $post = update($table, $id, $_POST);
        $_SESSION['message'] = 'Settings updated successfully';

        header('location: settings.php');
        exit();
    } else {
        $title = $_POST['title'];
        $description = $_POST['description'];
    }
}
