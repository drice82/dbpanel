@extends('dbpanel.dashboard')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
    </section>

    <!-- Main content -->
<div class="box box-primary">
    <form class="search-form">
      <div class="input-group">
        <input type="text" name="name" class="form-control" placeholder="name">

        <div class="input-group-btn">
          <button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>
          </button>
        </div>
      </div>
      <!-- /.input-group -->
    </form>
</div>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">酒店数据</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>姓名</th>
                  <th>身份证</th>
                  <th>性别</th>
                  <th>出生日期</th>
                  <th>地址</th>
                  <th>手机</th>
                  <th>时间</th>
                </tr>
                </thead>

                @if ($data->first())
                @foreach ($data as $element)
                {{-- {{dd($element)}} --}}
                <tbody>
                  <tr>
                  <td>{{$element->Name}}</td>
                  <td>{{$element->CtfId}}</td>
                  <td>{{$element->Gender}}</td>
                  <td>{{$element->Birthday}}</td>
                  <td>{{$element->Address}}</td>
                  <td>{{$element->Mobile}}</td>
                  <td>{{$element->Version}}</td>
                  </tr>
                </tbody>
                @endforeach
              </table>
              <div class="mt-3"> 
                {!! $data->render() !!}
              </div>
              @else
              <tbody>
                <tr><div class="text-center"><h3>没有查到相关数据！</h3></div></tr>
              </tbody>
              </table>
              @endif
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
