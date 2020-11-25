<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link mt-3">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="../../../assets/images/faces/face1.jpg"> </div>
          <div class="text-wrapper">
            <p class="profile-name"><?php echo $_SESSION['fname']; ?></p>
            <div>
              <small class="designation text-muted">Manager</small>
              <span class="status-indicator online"></span>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="travel.php?act=all">
      <i class="menu-icon mdi mdi-table"></i>
        <span class="menu-title">จัดการสถานที่ท่องเที่ยว</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="rooms.php?act=all">
      <i class="menu-icon mdi mdi-table"></i>
        <span class="menu-title">จัดการห้องพักทั้งหมด</span>
      </a>
    </li>
</nav>