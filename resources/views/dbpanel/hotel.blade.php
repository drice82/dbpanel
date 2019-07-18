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
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
            {{-- 表格内容 --}}
            <div class="ibox-content">
                <table class="table table-hover table-bordered table-condensed">
                    <thead>
                        <tr class="success">
                            <th class="text-center">姓名</th>
                            <th class="text-center">身份证</th>
                            <th class="text-center">性别</th>
                            <th class="text-center">生日</th>
                            <th class="text-center">地址</th>
                            <th class="text-center">手机</th>
                            <th class="text-center">时间</th>
                        </tr>
                    </thead>

                    @if ($data->first())
                    <tbody>
                        @foreach ($data as $element)
                        {{-- {{dd($element)}} --}}
                        <tr class="gradeU ">
                            <td>{{$element->Name}}</td>
                            <td class="center">{{$element->CtfId}}</td>
                            <td>{{$element->Gender}}</td>
                            <td>{{$element->Birthday}}</td>
                            <td>{{$element->Address}}</td>
                            <td>{{$element->Mobile}}</td>
                            <td>{{$element->Version}}</td>
                            <td>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center"></div>
                @else
                <tbody>
                    <tr ><td colspan="7"><div class="text-center"><h3>没有查到相关数据！</h3></div></td></tr>
                </tbody>
            </table>
            @endif



        </div>
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
