@extends('admin.master')
@section('content')

<section class="content-header">
      <h1>
        
        <small></small>
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
              <h3 class="box-title">Thêm Mới Tài Khoản</h3>
            </div>
            <form action="#" method="POST">
            <!-- /.box-header -->
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Họ Tên </label>
                            <input type="text" class="form-control" id="diachi" name="txtdiachi" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Chức Vụ</label>
                            <select class="form-control">
                                <option >Chọn Chức Vụ</option>
                                <option value="0">User</option>
                                <option value="1">ADMIN</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email </label>
                            <input type="text" class="form-control" id="diachi" name="txtdiachi" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>PassWord </label>
                            <input type="text" class="form-control" id="diachi" name="txtdiachi" >
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix group-btn-footer text-center">
                    
                        <input type="submit" class="btn btn-success"  value="Thêm Mới Tài Khoản" >

                </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</section>

@endsection





















