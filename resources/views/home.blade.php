@extends('layouts.app')

@section('content')
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="https://assets.exova.id/img/1.png" alt="Exova Indonesia" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Exova Indonesia</span>
    </a>
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column">
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>
                Layanan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jasa Exova</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Exova Undangan Online</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Data Users
                    </p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-id-card"></i>
                    <p>
                        Data Karyawan
                    </p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Blogs
                    </p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user-plus"></i>
                    <p>
                        Tambah Karyawan
                    </p>
                    </a>
                </li>
            </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-white">
  <!-- Content Header (Page header) -->
  <div class="content-header">
  <div class="container-fluid">
  <div class="row">
  <div class="col-md-3 col-sm-6">
  <div class="small-box bg-success">
    <div class="inner">
      <h3>{{ number_format(565345, 0) }}</h3>
        <p>Pendapatan Total (IDR)</p>
          </div>
            <div class="icon">
              <i class="fa">&#xf200;</i>
          </div>
        </div>
      </div>
  <div class="col-md-3 col-sm-6">
  <div class="small-box bg-danger">
    <div class="inner">
      <h3>53</h3>
        <p>Users</p>
          </div>
            <div class="icon">
              <i class="fas fa-user-plus"></i>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
  <div class="small-box bg-primary">
    <div class="inner">
      <h3>53</h3>
        <p>Langganan</p>
          </div>
            <div class="icon">
              <i class="fas fa-id-card"></i>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
  <div class="small-box bg-info">
    <div class="inner">
      <h3>53<sup style="font-size: 20px">%</sup></h3>
        <p>Orderan Total</p>
          </div>
            <div class="icon">
              <i class="fa fa-cart-plus"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
