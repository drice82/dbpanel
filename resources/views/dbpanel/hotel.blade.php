@extends('dbpanel.dashboard')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

          <form class="search-form">
            <div class="input-group">
              <input type="text" name="search" class="form-control" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>
                </button>
              </div>
            </div>
            <!-- /.input-group -->
          </form>

      <!-- Default box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>姓名</th>
                  <th>身份证</th>
                  <th>性别</th>
                  <th>生日</th>
                  <th>地址</th>
                  <th>手机</th>
                  <th>时间</th>
                </tr>
                </thead>

                @if ($data->first())

                <tbody>
                @foreach ($data as $element)
                {{-- {{dd($element)}} --}}
                <tr>
                  <td>{{$element->Name}}</td>
                  <td>{{$element->CtfId}}</td>
                  <td>{{$element->Gender}}</td>
                  <td>{{$element->Birthday}}</td>
                  <td>{{$element->Address}}</td>
                  <td>{{$element->Mobile}}</td>
                  <td>{{$element->Version}}</td>
                </tr>
                @endforeach
                </tbody>
              </table>
              @else
                <tbody>
                  <tr ><div class="text-center"><h3>没有查到相关数据！</h3></div></td></tr>
                </tbody>
              </table>
              @endif
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection
