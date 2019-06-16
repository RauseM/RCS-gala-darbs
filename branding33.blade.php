@extends('layout.main-gd')
@section('content')

      <div class="container">
          <h2>BRANDING</h2>
          <div class="row">
              
              <div class="container">
                  <div class="row">
            
                    @foreach ($posts as $postItem)
            
                    @include('partials.blog-post-brand')
                    
                    @endforeach
            
            
                  </div>
                </div>
        
        
</div>
</div>

@endsection

