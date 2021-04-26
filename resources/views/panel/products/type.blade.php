<ul class="nav" id="type-menu">
  @foreach ($types as $type)
  <li class="nav-item">
   <a class="nav-link" href="#">{{$type}}</a>
 </li>
  @endforeach
 </ul>