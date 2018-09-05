@extends('admin.inc.layouts')

@section('title')

All Articles

@endsection

@section('content')

  
<!-- Main content -->
<section class="content">

   
    <div class="row">
        <div class="col-md-12">


          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Article Name</th>
                <th>Article Content</th>
                <th>Article Photo</th>
                <th>Edit</th>
                {{-- <th>Delete</th> --}}
              </tr>
            </thead>
            <tbody>

            @foreach ($articles as $article)
           
              <tr>
                <th scope="row"> {{ $article->id }}</th>
                <td> <a href="/admin/article/{{ $article->id }}">{{ $article->title }}</a> </td> 
                <td>{!! str_limit( strip_tags($article->description)   , 100 , $end = '   ..... ') !!}  </td> 
                <td> <img src="/uploads/{{ $article->photo }}" width="50" height="50" class="center-block"> </td>
                <td> <a href="/admin/article/{{ $article->id }}/edit" class="btn btn-primary">Edit</a> </td> 
       {{--          <td> 
                    {{ Form::open(['method' => 'DELETE', 'route' => ['article.destroy', $article->id]]) }}
                      {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}
                </td> --}}
              </tr>
            @endforeach


           

            </tbody>
          </table>
    
        {!! $articles->render() !!}
           
        </div>
    </div>
</section>



@endsection