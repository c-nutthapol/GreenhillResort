<?php
include "../../php/travel_model.php";

if ($_SESSION['id'] == "") {
    header("location: pages/signin-signup/signin.php");
} ?>
<!-- partial:partials/_header.php -->
<?php include "../../partials/_header.php"; ?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-header pb-3">
                        <div class="row">
                            <h2>จัดการสถานที่ท่องเที่ยว</h2>
                            <button type="button" class="btn btn-primary ml-auto" data-toggle="modal" data-target="#ModalTralvel">
                                เพิ่มสถานที่ท่องเที่ยว
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <div class="fluid-container">
                            <div class="row">
                                <?php if ( !empty($result) &&$result != null) { ?>
                                    <?php foreach ($result as $travel) { ?>
                                        <div class="col-sm-3 mb-3">
                                            <div class="card">
                                                <img class="card-img-top" src="../../../assets/img/<?= $travel['t_img']; ?>" alt="Card image">
                                                <div class="card-img-overlay text-white d-flex flex-column justify-content-end">
                                                    <h4 class="card-title" style="color: #fff;"><?php echo $travel['t_name']; ?></h4>
                                                    <p class="card-text"><?php echo $travel['t_address']; ?></p>
                                                    <div class="row">
                                                        <a class="mx-3" onclick="editFrom(<?php echo $travel['t_id']; ?>)">edit</a>
                                                        <a name="act" href="#">delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php } else { ?>
                                    <p class="mx-auto">คุณยังไม่มีข้อมูล</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->


    <!-- Modal -->
    <div class="modal fade" id="ModalTralvel" tabindex="-1" aria-labelledby="ModalTravelLabel1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content mx-auto" style="width: 50%;">
                <div class="modal-header">
                    <h3 class="modal-title" id="ModalTravelLabel1">
                        เพิ่มสถานที่ท่องเที่ยว
                    </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- Modal Body Custom -->
                <form action="?act=add" method="post" enctype="multipart/form-data">
                    <div class="modal-body pt-0">
                        <div class="row">
                            <div class="col">
                                <img id="blah" src="#" alt="รูปสถานที่ท่องเที่ยว  ขนาด 350 x 500" class="mb-3 mx-auto d-block" />
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-12">
                                        <p class="mb-2">รูปสถานที่ท่องเที่ยว :
                                        </p>
                                    </div>

                                    <div class="col-12">
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="customFile" name="t_img" onchange="readURL(this);">
                                            <label class="custom-file-label" for="customFile">เลือกรูปภาพ</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="TravelName">ชื่อสถานที่</label>
                                            <input type="text" class="form-control" id="TravelName" name="t_name" placeholder="ชื่อสถานที่">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="PlaceTravel">ที่ตั้งสถานที่</label>
                                            <input type="text" class="form-control" id="PlaceTravel" name="t_address" placeholder="ที่ตั้งสถานที่">
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Edit -->
    <div class="modal fade" id="ModalTralvel_Edit" tabindex="-1" aria-labelledby="ModalTravelLabel1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content mx-auto" style="width: 50%;" id="editContent">

            </div>
        </div>
    </div>
    <!-- END Modal Custom -->
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
            $("#myTable").DataTable();
        });

        function editFrom(id) {
            $.ajax({
                type: "GET",
                url: "../../ajax/travel_edit.php",
                data: "act=get" + "&id=" + id,
                success: function(text) {
                    document.getElementById('editContent').innerHTML = text
                    $('#ModalTralvel_Edit').modal('show')
                }
            })
        }
    </script>
    <!-- partial:partials/_footer.php -->
    <?php include "../../partials/_footer.php"; ?>
    <!-- partial -->
</div>