@extends('layouts.app')

@section('content')
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="https://assets.exova.id/img/1.png" alt="Exova Indonesia" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Exova Indonesia</span>
    </a>
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column">
          <li class="nav-item">
            <a href="/" class="nav-link">
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
                <a href="/jasaexova" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jasa Exova</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/invitationsexova" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Exova Undangan Online</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column">
                <li class="nav-item">
                    <a href="/users" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Data Users
                    </p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column">
                <li class="nav-item">
                    <a href="/subscriptions" class="nav-link
                    ">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Data Langganan
                    </p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column">
                <li class="nav-item">
                    <a href="/employees" class="nav-link active">
                    <i class="nav-icon fas fa-id-card"></i>
                    <p>
                        Data Karyawan
                    </p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column">
                <li class="nav-item">
                    <a href="/blog" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Blogs
                    </p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column">
                <li class="nav-item">
                    <a href="add/employees" class="nav-link">
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
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
              @foreach($jobs as $j)
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-header bg-danger">
                            {{ $j->level }}
                        </div>
                        <div class="card-body">
                            <div class="card-title float-none">
                                <img class="mb-2 rounded-circle img-profil" width="120px" height="120px" src="{{ $j->picture }}" alt="Profil Picture">
                                <h5 class="text-capitalize">{{ $j->name }}</h5>
                            </div>
                            <p class="card-text">{{ $j->bio }}</p>
                            <a href="#" class="btn btn-danger">View Details</a>
                        </div>
                    </div>
                </div>
              @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
