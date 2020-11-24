<?php 
	session_start();

	if($_SESSION['id'] == ""){
		header("location: pages/signin-signup/signin.php");
	}else{

?>
<?php include "../../partials/_header.php"; ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="mb-4">จัดการห้องพักทั้งหมด</h2>
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
                              <button type="button" class="btn btn-warning">แก้ไข</button>
                              <button type="button" class="btn btn-danger">ลบ</button>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td><img style="width: 100px; height: 100px;" src="/assets/img/room2.jpg"></td>
                            <td>ห้อง Deluxe</td>
                            <td>ราคาปกติ 1,200 บาท รวมอาหารเช้า</td>
                            <td>
                              <button type="button" class="btn btn-warning">แก้ไข</button>
                              <button type="button" class="btn btn-danger">ลบ</button>
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
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="../../../assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- data table -->
  <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <!-- inject:js -->
  <script src="../../../assets/js/shared/off-canvas.js"></script>
  <script src="../../../assets/js/shared/hoverable-collapse.js"></script>
  <script src="../../../assets/js/shared/misc.js"></script>
  <script src="../../../assets/js/shared/settings.js"></script>
  <script src="../../../assets/js/shared/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../../assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();
    });
  </script>
</body>

</html>
  <?php } ?>