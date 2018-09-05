@extends('admin.inc.layouts')

@section('title')
 Create New Article

@endsection


@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        New Article

        <small>Cpanel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li> 
        <li><a href="#">Article</a></li> 
      </ol>
    </section>
  
    <!-- Main content -->
  <!-- Main content -->
<section class="content">

    
    <div class="row">
        <div class="col-md-12">

            @include('errors.error')

            {!! Form::open(['url' => 'admin/article', 'class' => 'form-group', 'files' => true]) !!}

                <div class="form-group">
                    {!! Form::label('Article Title') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!} 
                </div>

                <div class="form-group">
                    {!! Form::label('Article Description') !!}
                    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Article Mobile') !!}
                    {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('Article Mail') !!}
                    {!! Form::text('mail', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Article Address') !!}
                    {!! Form::text('address', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6"> 
                            {!! Form::label('Article slid-1') !!}
                            {!! Form::file('slid1', ['class' => 'form-control']) !!}
                        </div>
                        <div class="col-md-6"> 
                            {!! Form::label('Article slid-2') !!}
                            {!! Form::file('slid2', ['class' => 'form-control']) !!}
                        </div>
                        <div class="col-md-6"> 
                            {!! Form::label('Article slid-3') !!}
                            {!! Form::file('slid3', ['class' => 'form-control']) !!}
                        </div>
                        <div class="col-md-6"> 
                            {!! Form::label('Article slid-4') !!}
                            {!! Form::file('slid4', ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
                                
                <div class="form-group">
                    {!! Form::label('Article Image') !!}
                    {!! Form::file('photo', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Article Video Link') !!}
                    {!! Form::text('video', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Create New Article!', ['class' => 'form-control btn btn-block btn-success']) !!}
                </div>
                {!! Form::close() !!}
           
        </div>
    </div>
</section>

    <!-- /.content -->
 

@endsection