<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('admin/dashboard')?>" class="brand-link">
      <span class="brand-text font-weight-light">ADITYA NETWORK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url() ?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?php echo base_url('admin/dashboard')?>" class="d-block"><?php echo $this->session->userdata('username') ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">APLIKASI</li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/dashboard')?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Operator Seluler
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/telkomsel')?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Telkomsel</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/indosat')?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Indosat</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/xl')?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>XL</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/three')?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Three</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/axis')?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Axis</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/smartfren')?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Smartfren</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">WEBSITE</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Beranda
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/website/mobil')?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Mobil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/website/keterangan')?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Keterangan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/website/syarat_kunci')?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Syarat Lepas Kunci</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/website/total_pelanggan')?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Total Pelanggan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/website/review')?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Review Pelanggan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>
                Syarat Dan Ketentuan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/website/penyewa_driver')?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Penyewa dengan driver</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/website/syarat_perusahaan')?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Syarat Perusahaan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/website/orang_asing')?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Orang Asing</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/website/tentang_kami')?>" class="nav-link">
                <i class="far fas fa-users"></i>
                <p>Tentang Kami</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/website/kontak')?>" class="nav-link">
                <i class="fas fa-phone nav-icon"></i>
                <p>Kontak</p>
            </a>
          </li>
          <li class="nav-header">BLOG</li>
          <li class="nav-header">KONFIGURASI</li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/website/konfigurasi')?>" class="nav-link">
                <i class="fas fa-wrench nav-icon"></i>
                <p>Konfigurasi</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $title ?></h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    