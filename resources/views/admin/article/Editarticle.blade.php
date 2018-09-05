@extends('admin.inc.layouts')

@section('title')
 Edit Article

@endsection


@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Article

        <small>Cpanel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li> 
        <li><a href="#">Edit Article</a></li> 
      </ol>
    </section>
  
    <!-- Main content -->
  <!-- Main content -->
<section class="content">

    
    <div class="row">
        <div class="col-md-12">

            @include('errors.error')

            {!! Form::open(['url' => 'admin/article/'.$article->id, 'class' => 'form-group', 'files' => true]) !!}
            {{ method_field('PUT') }}{{csrf_field()}}
                <div class="form-group">
                    {!! Form::label('Article Title') !!}
                    {!! Form::text('title', $article->title , ['class' => 'form-control']) !!} 
                </div>

                <div class="form-group">
                    {!! Form::label('Article Description') !!}
                    {!! Form::textarea('description', $article->description , ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Article Mobile') !!}
                    {!! Form::text('mobile', $article->mobile , ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('Article Mail') !!}
                    {!! Form::text('mail', $article->mail , ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Article Address') !!}
                    {!! Form::text('address', $article->address , ['class' => 'form-control']) !!}
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
                    {!! Form::text('video', $article->video , ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Edit Article!', ['class' => 'form-control btn btn-block btn-success']) !!}
                </div>
                {!! Form::close() !!}
           
        </div>
    </div>
</section>

    <!-- /.content -->
 

@endsection