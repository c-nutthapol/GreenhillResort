<?php
session_start();

if ($_SESSION['id'] == "") {
    header("location: pages/signin-signup/signin.php");
} ?>
<?php include "../../partials/_header.php"; ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <h2 class="mb-4">จัดการห้องพักทั้งหมด</h2>
                            <button type="button" class="btn btn-primary ml-auto" style="height:48px;" data-toggle="modal" data-target="#ModalRoom">
                                เพิ่มสถานที่ท่องเที่ยว
                            </button>
                        </div>
                        <div class="fluid-container">
                            <div class="table-responsive">
                                <table id="table_id" class="table">
                                    <thead>
                                        <tr>
                                            <th>ลำดับที่</th>
                                            <th>รูป</th>
                                            <th>ชื่อห้อง</th>
                                            <th>รายละเอียดห้อง</th>
                                            <th>จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><img style="width: 100px; height: 100px;" src="/assets/img/room1.jpg"></td>
                                            <td>ห้อง Superior</td>
                                            <td>ราคาปกติ 800 บาท รวมอาหารเช้า</td>
                                            <td>
                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModalRoom">แก้ไข</button>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dlModalRoom">ลบ</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><img style="width: 100px; height: 100px;" src="/assets/img/room2.jpg"></td>
                                            <td>ห้อง Deluxe</td>
                                            <td>ราคาปกติ 1,200 บาท รวมอาหารเช้า</td>
                                            <td>
                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModalRoom">แก้ไข</button>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dlModalRoom">ลบ</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->

    <!-- Modal -->
    <div class="modal fade" id="ModalRoom" tabindex="-1" aria-labelledby="ModalRoomLabel1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content mx-auto" style="width: 50%;">
                <div class="modal-header">
                    <h3 class="modal-title" id="ModalRoomLabel1">
                        เพิ่มห้องพัก
                    </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Modal Body Custom -->
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="modal-body pt-0">
                        <div class="col-lg-12">
                            <img id="blah" src="#" alt="รูปสถานที่ท่องเที่ยว  ขนาด 350 x 500" class="mb-3 mx-auto d-block" />
                        </div>
                        <div class="col-lg-12">
                            <p class="mb-2">รูปสถานที่ท่องเที่ยว : </p>
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="customFile" name="t_img" onchange="readURL(this);">
                                <label class="custom-file-label" for="customFile">เลือกรูปภาพ</label>
                            </div>
                            <div class="form-group">
                                <label for="TravelName">ชื่อสถานที่</label>
                                <input type="text" class="form-control" id="TravelName" name="t_name" placeholder="ชื่อสถานที่">
                            </div>
                            <div class="form-group">
                                <label for="PlaceTravel">ที่ตั้งสถานที่</label>
                                <input type="text" class="form-control" id="PlaceTravel" name="t_address" placeholder="ที่ตั้งสถานที่">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" name="act" class="btn btn-primary">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Edit -->
    <div class="modal fade" id="editModalRoom" tabindex="-1" aria-labelledby="editModalRoomLabel1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content mx-auto" style="width: 50%;">
                <div class="modal-header">
                    <h3 class="modal-title" id="editModalRoomLabel1">
                        แก้ไขห้องพัก
                    </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Modal Body Custom -->
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="modal-body pt-0">
                        <div class="col-lg-12">
                            <img id="blah" src="#" alt="รูปสถานที่ท่องเที่ยว  ขนาด 350 x 500" class="mb-3 mx-auto d-block" />
                        </div>
                        <div class="col-lg-12">
                            <p class="mb-2">รูปสถานที่ท่องเที่ยว : </p>
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="customFile" name="t_img" onchange="readURL(this);">
                                <label class="custom-file-label" for="customFile">เลือกรูปภาพ</label>
                            </div>
                            <div class="form-group">
                                <label for="TravelName">ชื่อสถานที่</label>
                                <input type="text" class="form-control" id="TravelName" name="t_name" placeholder="ชื่อสถานที่">
                            </div>
                            <div class="form-group">
                                <label for="PlaceTravel">ที่ตั้งสถานที่</label>
                                <input type="text" class="form-control" id="PlaceTravel" name="t_address" placeholder="ที่ตั้งสถานที่">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" name="act" class="btn btn-primary">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Delete -->
    <div class="modal fade" id="dlModalRoom" tabindex="-1" aria-labelledby="dlModalRoomLabel1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content mx-auto" style="width: 50%;">
                <div class="modal-header">
                    <h3 class="modal-title" id="dlModalRoomLabel1">
                        คุณต้องการลบห้องพักใช่ไหม?
                    </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Modal Body Custom -->
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="modal-body pt-0">
                        คุณแน่ใจที่จะลบห้องพักนี้ใช่ไหม ถ้าใช่กดยืนยัน
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary " data-dismiss="modal">
                                ปิด
                            </button>
                            <button type="submit" name="act" class="btn btn-primary">
                                ยืนยัน
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // START CUSTOM IMAGE
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(350)
                        .height(500);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var t_img = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(t_img);
        }); //END CUSTOM IMAGE

        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    <?php include "../../partials/_footer.php"; ?>
</div>