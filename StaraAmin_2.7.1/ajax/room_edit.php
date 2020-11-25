<?php 
    include "../php/rooms_model.php";
?>
<div class="modal-header">
    <h3 class="modal-title" id="editModalRoomLabel1">
        แก้ไขห้องพัก <?= $result['r_name'] ?>
    </h3>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<!-- Modal Body Custom -->
<form action="?act=edit" method="post" enctype="multipart/form-data">
    <div class="modal-body pt-0">
        <div class="col-lg-12">
            <img id="blah" src="/assets/img/<?= $result['r_img'] ?>" width="350px" height="500px"  alt="รูปสถานที่ท่องเที่ยว  ขนาด 350 x 500" class="mb-3 mx-auto d-block" />
        </div>
        <div class="col-lg-12">
            <p class="mb-2">รูปห้องพัก : </p>
            <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="customFile" name="r_img" onchange="readURL(this);">
                <label class="custom-file-label" for="customFile">เลือกรูปภาพ</label>
            </div>
            <div class="form-group">
                <label for="TravelName">ชื่อห้อง</label>
                <input type="text" class="form-control" id="TravelName" name="r_name" value="<?= $result['r_name'] ?>" placeholder="ชื่อสถานที่">
            </div>
            <div class="form-group">
                <label for="PlaceTravel">รายละเอียดห้อง</label>
                <input type="text" class="form-control" id="PlaceTravel" name="r_detail" value="<?= $result['r_detail'] ?>" placeholder="รายละเอียดห้อง">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                Close
            </button>
            <input type="hidden" name="id" value="<?= $result['r_id'] ?>">
            <button type="submit" name="act" class="btn btn-primary">
                Save
            </button>
        </div>
    </div>
</form>