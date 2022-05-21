@foreach($children as $subcategory)
    <ul class="w3dropdown-content nav-link">
        @if(count($subcategory->children))
            <li class="dropdown side-dropdown">{{$subcategory->title}}</li>
            <ul class="w3dropbtn">
                @include('home.categorytree',['children'=>$subcategory->children])
            </ul>
            <hr>
        @else
            <li><a href="{{route('categoryservices',['id'=>$subcategory->id, 'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a></li>
        @endif
    </ul>
@endforeach
