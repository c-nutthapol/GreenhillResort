<?php
session_start();


if (isset($_GET['act'])) {
    switch ($_GET['act']) {

        case 'all':
            include "../../../functions.php";
            $db = new DB_con;
            $sql = "SELECT * FROM rooms ORDER BY r_id ASC";
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
                $target_file = 'img_' . uniqid() . basename($_FILES["r_img"]["name"]);
                if (move_uploaded_file($_FILES["r_img"]["tmp_name"], $target_dir . $target_file)) {
                    $sql = "INSERT INTO rooms (r_name,r_detail,r_img) VALUES ('" . $_POST['r_name'] . "', '" . $_POST['r_detail'] . "', '" .  $target_file . "')";
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
            include "../../functions.php";
            $db = new DB_con;
            if ($_GET) {
                $sql = "SELECT * FROM rooms WHERE r_id = '" . $_GET['id'] . "' ";
                $query = mysqli_query($db->dbcon, $sql);

                if (mysqli_num_rows($query) > 0) {
                    $result = mysqli_fetch_array($query);
                    $dir = "../../assets/img/";
                    if (unlink($dir . $result['r_img'])) {

                        $sql = "DELETE FROM rooms WHERE r_id = '" . $_GET['id'] . "';";
                        if (mysqli_query($db->dbcon, $sql)) {
                            // echo "<script>alert('Delete success');</script>";
                            // header('Location:/mini_project/pages/layout/rooms.php');
                        } else {
                            // echo "<script>alert('Delete fail');</script>";
                            // header('Location:/mini_project/pages/layout/rooms.php');
                        }
                    } else {
                        // echo "<script>alert('The file cannot be deleted.');</script>";
                        // header("Refresh:0; url=?act=all");
                    }
                } else {
                    // echo "<script>alert('No data found');</script>";
                    // header("Refresh:0; url=?act=all");
                }
            } else {
                // header("Refresh:0; url=?act=all");
            }

            //echo json_encode($json);

            break;
        case 'edit':
            include "../../../functions.php";
            $db = new DB_con;
            if ($_POST) {
                $target_dir = "../../../assets/img/"; //part เก็บไฟล์รูป
                $target_file = 'img_' . uniqid() . basename($_FILES["r_img"]["name"]);

                if ($_FILES["r_img"]["name"] != null) {
                    if (move_uploaded_file($_FILES["r_img"]["tmp_name"], $target_dir . $target_file)) {
                        $sql = "UPDATE rooms SET r_name = '" . $_POST['r_name'] . "' ,r_detail = '" . $_POST['r_detail'] . "' ,r_img = '" . $target_file . "' WHERE r_id = '" . $_POST['id'] . "'";
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
                } else {
                    $sql = "UPDATE rooms SET r_name = '" . $_POST['r_name'] . "' ,r_detail = '" . $_POST['r_detail'] . "' WHERE r_id = '" . $_POST['id'] . "'";
                    if (mysqli_query($db->dbcon, $sql)) {
                        echo "<script>alert('Insert Success');</script>";
                        header("Refresh:0; url=?act=all");
                    } else {
                        echo "<script>alert('Insert fail');</script>";
                        header("Refresh:0; url=?act=all");
                    }
                }
            }
            // echo json_encode($json);

            break;
        case 'get':
            include "../../functions.php";
            $db = new DB_con;
            if ($_GET) {
                $sql = "SELECT * FROM rooms WHERE r_id = '".$_GET['id']."'";
                $query = mysqli_query($db->dbcon, $sql);
                if (mysqli_num_rows($query) > 0) {
                    $result = mysqli_fetch_array($query);
                } else {
                    $result = "";
                }
            }
            break;
        default:
            /* header('Location:../layout/rooms.php?act=all'); */
            break;
    }
}
