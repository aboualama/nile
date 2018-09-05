@extends('admin.inc.layouts')

@section('title')
 Slider Image

@endsection


@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Slider Image

        <small>Cpanel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li> 
        <li><a href="#">Slider</a></li> 
      </ol>
    </section>
  
    <!-- Main content -->
  <!-- Main content -->
<section class="content">

   
{{--     <div class="row">
        <div class="col-md-12"> 

            {!! Form::open(['url' => 'admin/slider', 'class' => 'form-group', 'files' => true]) !!}
 
                <div class="form-group">
                    {!! Form::label('New Image') !!}
                    {!! Form::file('photo', ['class' => 'form-control']) !!}
                </div>

                @include('errors.error')

                <div class="form-group">
                    {!! Form::submit('Create New Image!', ['class' => 'form-control btn btn-block btn-success']) !!}
                </div>
                {!! Form::close() !!}
           
        </div>
    </div> --}}


<div class="row">
  <div class="col-md-12">
 
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th>Num</th>
          <th>Image Slider</th>
          <th>Choose Image</th>
          <th>Change Image</th>
        </tr>
      </thead>
      @include('errors.error')
        @foreach($slider as $slid)
        <tbody>
        <td>{{ $num++ }}</td> 
        <td><img src="{{ url('/uploads/slider') }}/{{ $slid->img }}" style="width: 100px; height: 60px;" ></td>
        
        <td>
        {!! Form::open(['url' => ['admin/slider',$slid->id,'edit'], 'class' => 'form-group', 'files' => true]) !!}  
        {!! Form::file('photo' ) !!} 
       
        </td>
        <td>  
          {!! Form::submit('Change', ['class' => 'btn btn-primary']) !!}
         
          {!! Form::close() !!}

            {{-- <a href="/admin/slider/{{ $slid->id }}/edit" class="btn btn-primary">Edit</a> </td>  --}}
        </td>
      {{--    <td> 
              {{ Form::open(['method' => 'DELETE', 'url' => ['admin/slider/delete', $slid->id]]) }}
                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
              {{ Form::close() }}
        </td> --}}
        </tbody>
        @endforeach
      
          
    </table>
 
    </div>
</div>
</section>

    <!-- /.content -->
 

@endsection