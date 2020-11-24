<?php
session_start();


if (isset($_GET['act'])) {
    switch ($_GET['act']) {

        case 'all':
            include "../../../functions.php";
            $db = new DB_con;
            $sql = "SELECT * FROM travel ORDER BY t_id ASC";
            $query = mysqli_query($db->dbcon, $sql);

            if (mysqli_num_rows($query) > 0) {
                while ($data = mysqli_fetch_array($query)) {
                    $result[] = $data;
                }
            } else {
                $result = "";
            }

            //echo json_encode($result);
            break;
        case 'add':
            include "../../../functions.php";
            $db = new DB_con;
            if ($_POST) {
                $target_dir = "../../../assets/img/"; //part เก็บไฟล์รูป
                $target_file = 'img_' . uniqid() . basename($_FILES["t_img"]["name"]);
                if (move_uploaded_file($_FILES["t_img"]["tmp_name"], $target_dir . $target_file)) {
                    $sql = "INSERT INTO travel (t_name,t_address,t_img) VALUES ('" . $_POST['t_name'] . "', '" . $_POST['t_address'] . "', '" .  $target_file . "')";
                    if (mysqli_query($db->dbcon, $sql)) {
                        echo "<script>alert('Insert Success');</script>";
                        header("Refresh:0; url=?act=all");
                    } else {
                        echo "<script>alert('Insert fail');</script>";
                        header("Refresh:0; url=?act=all");
                    }
                } else {
                    echo "<script>alert('Add fail');</script>";
                    header("Refresh:0; url=?act=all");
                }
            }

            // echo json_encode($json);

            break;
        case 'del':
            include "../../../functions.php";
            $db = new DB_con;
            if ($_POST) {
                $sql = "SELECT * FROM travel WHERE t_id = '" . $_POST['t_id'] . "' ";
                $query = $con->query($sql);

                if (mysqli_num_rows($query) > 0) {
                    $result = mysqli_fetch_array($query);
                    $dir = "../../assets/img/";
                    if (unlink($dir . $result['t_img'])) {

                        $sql = "DELETE FROM product WHERE t_id = '" . $_POST['t_id'] . "';";
                        if ($con->query($sql)) {
                            echo "<script>alert('Delete success');</script>";
                            header('Location:/mini_project/pages/layout/travel.php');
                        } else {
                            echo "<script>alert('Delete fail');</script>";
                            header('Location:/mini_project/pages/layout/travel.php');
                        }
                    } else {
                        echo "<script>alert('The file cannot be deleted.');</script>";
                        header('Location:/mini_project/pages/layout/travel.php');
                    }
                } else {
                    echo "<script>alert('No data found');</script>";
                    header('Location:/mini_project/pages/layout/travel.php');
                }
            } else {
                header('Location:/mini_project/pages/layout/travel.php');
            }

            //echo json_encode($json);

            break;
        case 'edit':
            include "../../functions.php";
            $db = new DB_con;
            if ($_GET) {
                $sql = "SELECT * FROM travel WHERE t_id = {$_GET['id']}";
                $query = mysqli_query($db->dbcon, $sql);
                if (mysqli_num_rows($query) > 0) {
                    $result = mysqli_fetch_array($query);
                } else {
                    $result = "";
                }
            }

            if ($_POST) {
                $target_dir = "../../../assets/img/"; //part เก็บไฟล์รูป
                $target_file = 'img_' . uniqid() . basename($_FILES["t_img"]["name"]);
                if (move_uploaded_file($_FILES["t_img"]["tmp_name"], $target_dir . $target_file)) {
                    $sql = "UPDATE travel SET t_name = {$_POST['t_name']} ,t_address = {$_POST['t_address']} ";
                    if (mysqli_query($db->dbcon, $sql)) {
                        echo "<script>console.log('Insert Success');</script>";
                        header("Refresh:0; url=?act=all");
                        
                    } else {
                        echo "<script>console.log('Insert fail');</script>";
                        header("Refresh:0; url=?act=all");
                    }
                } else {
                    echo "<script>console.log('Add fail');</script>";
                    header("Refresh:0; url=?act=all");
                   
                }
            }// echo json_encode($json);

            break;

        default:
            /* header('Location:../layout/travel.php?act=all'); */
            break;
    }
}
