@extends('admin.master')
@section('content')
<script>
  $(function(){
    $('#listUser').DataTable();
  })
</script>
<section class="content-header">
      <h1>
        Danh Sách
        <small>Tài Khoản</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Tài Khoản </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="listUser" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Họ Tên </th>
                  <th>Email</th>
                  <th>Mật Khẩu </th>
                  <th>Level</th>
                  <th>Hành Động </th>
                </tr>
                </thead>
                <tbody>
                  <?php $stt=0; ?>
                @foreach($data_user as $iteam_user)
                  <?php $stt++; ?>
                  <tr>
                    <td>{!! $stt !!}</td>
                    <td>{!! $iteam_user->name !!}</td>
                    <td>{!! $iteam_user->email !!}</td>
                    <td>{!! decrypt($iteam_user->password) !!}</td>
                    <td>{!! $iteam_user->level !!}</td>
                    <td>U</td>
                  </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>STT</th>
                  <th>Họ Tên </th>
                  <th>Email</th>
                  <th>Mật Khẩu </th>
                  <th>Level</th>
                  <th>Hành Động </th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</section>

@endsection





















