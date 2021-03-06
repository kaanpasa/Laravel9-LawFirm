@foreach($children as $subcategory)
    <ul class="nav-item " style="list-style-type:none">
        @if(count($subcategory->children))
            <li class="dropdown side-dropdown">
                <a class="nav-link dropdown-toggle " href="{{route('categoryservices',['id'=>$category->id, 'slug'=>$category->title])}}" >{{$category->title}}</a>
            </li>
            <ul class="category-list w3dropdown-content" style="list-style-type:none; margin-left:20px">
                <li >
                    @include('home.categorytree',['children'=>$subcategory->children])
                </li>
            </ul>
            <hr>
        @else
            <li class="dropdown side-dropdown" aria-expanded="true">
                <a href="{{route('categoryservices',['id'=>$subcategory->id, 'slug'=>$subcategory->title])}}">>{{$subcategory->title}}</a>
            </li>
        @endif
    </ul>
@endforeach
