<ul>
				<li><a @if ($title == 'Electrolux - elektron mallar mağazası') id="setted-nav" @endif href="{{ route('mainClient') }}">Məssular</a></li>
              <li ><a  @if ($title == 'Haqqımızda') id="setted-nav" @endif href="{{ route('about') }}">Haqqımızda</a></li>
              <li><a  @if ($title == 'Aksiyalar') id="setted-nav" @endif href="{{ route('event') }}">Aksiyalar</a></li>
              <li><a  @if ($title == 'Filiallar') id="setted-nav" @endif href="{{ route('filial') }}">Filiallar</a></li>
              <li><a  @if ($title == 'Mebel') id="setted-nav" @endif href="{{ route('luxhomeMain') }}">{{-- alt="Electro az category menu" --}}<span class="next-side">Mebel</span></a>
              </li>
              {{-- class="active_menu_items" --}}
</ul>
