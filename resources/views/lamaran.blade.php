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
                    <a href="add/employees" class="nav-link active">
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
      <div class="col-md-12">
      <p class="text-right">
        <a href="/notifications/accept/employees" class="btn btn-success text-white">Export Data</a>
      </p>
      <div class="card">
      <div class="card-header bg-danger">
        <h3 class="card-title">Applyer</h3>
      </div>
      <div class="card-body table-responsive">
          <table class="table table-bordered" id="dataapply">
            <thead>
              <tr>
              <th>Apply ID</th>
              <th>Foto Profil</th>
              <th>Name</th>
              <th>Email</th>
              <th>Level</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Moto</th>
              <th>CV</th>
              <th>Portfolio</th>
              <th>Status</th>
              <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($jobs as $u)
            <tr>
              <td>{{ $u->applyer_id }}</td>
              <td><img class="img-profil rounded-circle" width="80px" height="80px" src="{{ $u->applyer_picture }}"></td>
              <td>{{ $u->applyer_name }}</td>
              <td>{{ $u->applyer_email }}</td>
              <td>{{ $u->applyer_level }}</td>
              <td>{{ $u->applyer_phone }}</td>
              <td>{{ $u->applyer_address }}</td>
              <td>{{ $u->applyer_bio }}</td>
              <td>{{ $u->applyer_cv }}</td>
              <td>{{ $u->applyer_portfolio }}</td>
              <td>{{ $u->applyer_status }}</td>
              <td>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#reject"
                  data-id="{{ $u->applyer_id }}" data-name="{{ $u->applyer_name }}">
                    {{ 'Reject' }}
                  </button>
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#accept"
                  data-id="{{ $u->applyer_id }}" data-name="{{ $u->applyer_name }}">
                    {{ 'Accept' }}
                </button>
              </td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        </div>
        </div>
    </div>
  </div>
</div>
</div>

<!-- Modal Accept -->
<div class="modal fade" id="accept" tabindex="-1" role="dialog" aria-labelledby="accept" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="acceptTitle">Accept Verification Proccess</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="{{ url('/add/employees/accept') }}">
        @csrf
        <input type="hidden" name="id" id="id_accept">
      <div class="modal-body accept">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-success">Sure</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Reject -->
<div class="modal fade" id="reject" tabindex="-1" role="dialog" aria-labelledby="reject" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="rejectTitle">Reject Verification Proccess</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="{{ url('/add/employees/reject') }}">
        @csrf
        <input type="hidden" name="id" id="id_reject">
      <div class="modal-body reject">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-success">Sure</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    $('#accept').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var recipient = button.data('id')
      var name = button.data('name')
      var modal = $(this)
      modal.find('.accept').text("Are You Sure Accept "+name+" ?")
      $('#id_accept').val(recipient);
    });

    $('#reject').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var recipient = button.data('id')
      var name = button.data('name')
      var modal = $(this)
      modal.find('.reject').text("Are You Sure Reject "+name+" ?")
      $('#id_reject').val(recipient);
  });
});

$(function() {
    $('#dataapply').DataTable();
})
</script>
@endsection
