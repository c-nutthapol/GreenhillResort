
<?php 
    include "../php/travel_model.php";
?>
<div class="modal-header">
    <h3 class="modal-title" id="ModalTravelLabel1">
        <?php echo $result['t_name']; ?>
    </h3>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<!-- Modal Body Custom -->
<form action="?act=edit" method="post" enctype="multipart/form-data">
    <div class="modal-body pt-0">
        <div class="row">
            <div class="col">
                <img id="blah" src="../../../assets/img/<?= $result['t_img']; ?>" width="350px" height="500px" alt="รูปสถานที่ท่องเที่ยว  ขนาด 350 x 500" class="mb-3 mx-auto d-block" />
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
                            <input type="text" class="form-control" id="TravelName" name="t_name" placeholder="<?php echo $result['t_name']; ?>">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="PlaceTravel">ที่ตั้งสถานที่</label>
                            <input type="text" class="form-control" id="PlaceTravel" name="t_address" placeholder="<?php echo $result['t_name']; ?>">
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
        <input type="hidden" name="id" value="<?php echo $result['t_id']; ?>">
        <button type="submit" name="act" class="btn btn-primary">
            Save
        </button>
    </div>
</form>