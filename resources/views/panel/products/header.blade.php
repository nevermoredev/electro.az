@section('header')
    <div class="botom-head">
      <nav class="navbar navbar-expand-lg " id="navbthead">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav nav-tabs noborder">

            @foreach ($menucat as $cat)
            <li class="nav-item btm">
            <a class="nav-link pvs"
            @if ($cat->name === $category_set) {!! 'id="seted"'!!} @endif href="{{ route('viewProduct',['category'=>$cat->name,'type'=>$cat->default]) }}">{{ $cat->title }}</a>
              </li>
            @endforeach
          </ul>  
        </div>
      </nav>

</div>
@endsection