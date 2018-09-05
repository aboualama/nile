@extends('admin.inc.layouts')

@section('title')

{{ $article->title }}

@endsection

@section('content')

 


<!-- Main content -->
<section class="content">
        <div class="product_page"> 
          <div class="thumbnail thumb_pro">
              <img alt="{{ $article->title }}" src="/uploads/{{ $article->photo }}" style="width: 100%; height: 300px;" />
 
              <div class="caption">
                  <h3>
                      {{ $article->title }}
                  </h3>
                  <p>
                      {{ $article->description }}
                  </p>
                   <h3>
                      {{ $article->mobile }}
                  </h3>
                  <p>
                      {{ $article->mail }}
                  </p>                  
                  <h3>
                      {{ $article->address }}
                  </h3>
                  <p>
                      {{ $article->video }}
                  </p> 
              </div>
          </div>
        </div> 
 </section>
   



@endsection