@extends('master')
@section('content')
@extends('master')
@section('content')
<div class="container-fluid">
    <div class="animated fadeIn">
    <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <i class="fa fa-sign-in"></i> Absensi Hari ini ({{ date("j F Y") }})
                </div>
                <div class="card-body">
                  <table class="table table-responsive-sm table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>jabatan</th>
                        <th>Waktu Kedatangan</th>
                        <th>Waktu Pulang</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Vishnu Serghei</td>
                        <td>2012/01/01</td>
                        <td>Member</td>
                        <td>
                          <span class="badge badge-success">Active</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Zbyněk Phoibos</td>
                        <td>2012/02/01</td>
                        <td>Staff</td>
                        <td>
                          <span class="badge badge-danger">Banned</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Einar Randall</td>
                        <td>2012/02/01</td>
                        <td>Admin</td>
                        <td>
                          <span class="badge badge-secondary">Inactive</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Félix Troels</td>
                        <td>2012/03/01</td>
                        <td>Member</td>
                        <td>
                          <span class="badge badge-warning">Pending</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Aulus Agmundr</td>
                        <td>2012/01/21</td>
                        <td>Staff</td>
                        <td>
                          <span class="badge badge-success">Active</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <nav>
                    <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                      <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
            <!--/.col-->
          </div>
          <!--/.row-->
    </div>
</div>
@endsection

@section('myscript')
    <script src="{{ asset('js/views/main.js') }}"></script>
@endsection

