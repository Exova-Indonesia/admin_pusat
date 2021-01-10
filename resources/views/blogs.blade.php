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
                    <a href="/employees" class="nav-link">
                    <i class="nav-icon fas fa-id-card"></i>
                    <p>
                        Data Karyawan
                    </p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column">
                <li class="nav-item">
                    <a href="/blog" class="nav-link active">
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
        <div class="col-md-12">
          <p class="text-right">
            <a class="btn btn-success" href="blogs/create">Create Blogs</a>
          </p>
        @if($blogs != '')
            {{ 'Nothing to view' }}
          @else
          @foreach($blogs as $d)
            <div class="border mb-1">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand p-0" href="">
                    <img class="border object-fit-cover" width="80" height="60" 
                    src="" alt="Templates Thumbnail">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a href="">
                        <h5 class="nav-link p-1 m-0 active" >{{ $d->blogs_title }}<span class="sr-only">(current)</span></h5>
                        <span class="nav-link p-1">{{ strip_tags($d->blogs_content) }}</span>
                      </a>
                    </li>
                    </ul>
                    <div class="my-2 my-lg-0 col-md-5 h6 text-right nav-link text-muted">
                        <a class="mr-3">0 <i class="fa fa-cart-arrow-down"></i></a>
                        <a class="mr-3">0 <i class="fa fa-envelope"></i></a>
                        <a class="mr-3">0 <i class="fa fa-eye"></i></a>
                        <a class="mr-3" href="blogs/update/{{ $d->blogs_id }}"><i class="fa fa-edit"></i></a>
                        <a class="mr-3 text-danger" href="blogs/delete/{{ $d->blogs_id }}"><i class="fa fa-trash"></i></a>
                    </div>
                    <div class="my-2 my-lg-0">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item text-right">
                            <a class="nav-link p-1 m-0 active"> 
                                {{ $d->blogs_author }}
                              <img width="24" height="24" class="rounded-circle align-top" src="https://assets.exova.id/img/1.png" alt="avatar">
                            </a>
                            <span class="nav-link p-1" href="#">{{ $d->blogs_status }} On <?php echo date('M j, Y H:i a', strtotime($d->updated_at)) ?></span>
                        </li>
                        </ul>
                    </div>
                </div>
              </nav>
          </div>
          @endforeach
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
