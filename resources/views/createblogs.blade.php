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
            <div class="m-3 text-right">
                <form action="/blogs/upload" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Option
                    </button>
                    <div class="dropdown-menu">
                    <div class="form-check m-2">
                        <input class="form-check-input" type="checkbox" name="comments_section" value="No" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                        Jangan Tampilkan Kolom Komentar
                        </label>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/blogs/preview/{id}">Preview</a>
                    </div>
                </div>
                <select name="status" onchange="this.form.submit()" class="btn btn-success">Save
                    <option selected disabled hidden value="Only Save">Publish & Save</option>
                    <option value="Only Save">Only Save</option>
                    <option value="Published">Publish & Save</option>
                </select>
            </div>

            <section class="content">
                <div>
                <div class="col-md-12">
                    <div class="card">
                    <div class="card-body pad">
                        <div class="mb-3 row">
                        <div class="col-md-4">
                            <input type="hidden" name="id" value="{{ $blogs->blogs_id }}">
                            <input type="text" name="title" class="form-control mb-3" placeholder="Judul" value="{{ $blogs->blogs_title }}">
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="meta" class="form-control mb-3" placeholder="Deskripsi Penelusuran" value="{{ $blogs->blogs_meta }}">
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="author" class="form-control mb-3" placeholder="Penulis" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="col-md-12">
                            <textarea class="textarea" placeholder="Place some text here" name="content"
                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                    {{ $blogs->blogs_content }}
                            </textarea>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </section>
            </form>
            </div>
        </div>
      </div>
   </div>
</div>
</div>
<script>
$(document).ready(function() {
    $(function () {
      $('.textarea').summernote()
    })
});
</script>
@endsection
