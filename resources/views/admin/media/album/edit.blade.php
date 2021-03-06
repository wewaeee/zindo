@extends('admin.layout')

@section('content')
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h4 class="small">
            <ol class="breadcrumb">
              <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> {{ trans('admin.admin') }}</a></li>
              <li class="active">{{ trans('misc.create_'.$data->type.'_album') }}</li>
            </ol>
          </h4>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="content">
            <div class="row">
          <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">{{ trans('misc.new_'.$data->type.'_album') }}</h3>
                  <div class="pull-right box-tools">
                    <ul class="gal-menu">
                      <li>
                        <a href="{{route($media_type.'s.show', ['id'=>$data->id])}}" class="btn btn-box-tool">
                          <i class="fa fa-arrow-left"> </i>
                          {{ trans('misc.back_to_album') }}
                        </a>
                      </li>
                    </ul>
                  </div>
                </div><!-- /.box-header -->
               
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{route('albums.update', ['id'=>$data->id])}}" enctype="multipart/form-data">
                   {{ method_field('PUT')}} {{ csrf_field() }} 
      
                @include('errors.errors-forms')
                  <input type="hidden" name="media_type" value="{{ $media_type }}">
                 <!-- Start Box Body -->
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">{{ trans('admin.name') }}</label>
                      <div class="col-sm-10">
                        <input type="text" value="{{ $data->name }}" name="name" class="form-control" placeholder="{{ trans('admin.name') }}">
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                  
                  <!-- Start Box Body -->
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">{{ trans('admin.description') }}</label>
                      <div class="col-sm-10">
                        <input type="text" value="{{ $data->description }}" name="description" class="form-control" placeholder="{{ trans('admin.description') }}">
                      </div>
                    </div>

                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <div class="pull-right">
                      <button type="submit" class="btn btn-success">{{ trans('admin.update') }}</button>
                    </div>
                    <button type="reset" class="btn btn-default">{{ trans('admin.reset') }}</button>
                  </div><!-- /.box-footer -->
                </form>
              </div>
                          
            </div><!-- /.row -->
            
          </div><!-- /.content -->
          
          <!-- Your Page Content Here -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
@endsection
