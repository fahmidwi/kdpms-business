<style type="text/css">
.menu:hover{
	background:#00becc;
	border-radius:100%;
	transition:0.1s;
}
</style>
<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
    <a class="navbar-brand">
      <img src="<?php echo base_url('assets/images/bussines.png'); ?>" alt="logo" style="width: 80%; height:80%;"/>
    </a>
    <a class="navbar-brand brand-logo-mini">
      <img src="<?php echo base_url('assets/images/logo1.png'); ?>" alt="logo" />
    </a>
  </div>
  <input type="hidden" id="session_jabatan" value="<?php echo $this->session->userdata('jabatan'); ?>">
  <div class="navbar-menu-wrapper d-flex align-items-center">
    <span class="profile-text" style="font-weight:bold;color:#ffff32;"><?php if ($this->session->userdata('kantor') == '01'){echo "Kantor Pusat";}else{echo "Cabang Cilodong";} ?></span>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown d-none d-xl-inline-block">
        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <span class="profile-text">Hello, <?php echo $this->session->userdata('username'); ?> !</span>
          <img class="img-xs rounded-circle" src="<?php echo $this->session->userdata('foto'); ?>" alt="Profile image">
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
          <a class="dropdown-item p-0">
            <div class="d-flex border-bottom">
              <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
              </div>
              <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                <i class="mdi mdi-account-outline mr-0 text-gray"></i>
              </div>
              <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
              </div>
            </div>
          </a>
          <a href="<?php echo base_url('User/Account/'.$this->session->userdata('id')) ?>" class="dropdown-item mt-2">
            Manage Accounts
          </a>
          <a href="javascript:void(0)" onClick="alert('Fitur Belum ada')" class="dropdown-item">
            Check Inbox
          </a>
          <a class="dropdown-item" href="<?php echo base_url('Login/Logout'); ?>">
            Logout
          </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>
