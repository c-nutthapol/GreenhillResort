<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
    <a class="navbar-brand brand-logo" href="travel.php?act=all">
      <img src="../../../assets/img/logoGreenhill.png" style="height: 100px; width: 100px;" alt="logo" /> </a>
    <a class="navbar-brand brand-logo-mini" href="travel.php?act=all">
      <img src="../../../assets/img/logoGreenhill.png" style="height: 50px; width: 50px;" alt="logo" /> </a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown d-none d-xl-inline-block">
        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <span class="profile-text"><?php echo $_SESSION['fname']; ?></span>
          <img class="img-xs rounded-circle" src="../../../assets/images/faces/face1.jpg" alt="Profile image"> </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
          <a class="dropdown-item"> Manage Accounts </a>
          <a class="dropdown-item"> Change Password </a>
          <a class="dropdown-item" href="../signin-signup/signout.php"> Sign Out </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>

<div class="container-fluid page-body-wrapper">