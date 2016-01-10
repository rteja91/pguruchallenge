
<div class="search-wrapper card">
    <input id="search"  placeholder="Search (by builder) press enter"/><i class="material-icons">search</i>
</div>

<ul id="itemList" class="collection">
    @if($proplist)
    @foreach($proplist as $item)
        <?php   $loc = json_decode($item->location); ?>
    <li class="collection-item avatar" data-id="{{$item->id}}" data-lat="{{$loc->lat}}" data-long="{{$loc->lon}}" data-vale="{{$item}}">
        {{--<img src="" alt="" class="circle">--}}
        <i class="material-icons circle">home</i>
        <span class="title">{{$item->name}}</span>
        <span class="right price">{{$item->price}}</span>
        <p>{{$item->builder}}</p>
        <a href="#!" class="secondary-content"><i class="material-icons">play_arrow</i></a>
    </li>
    @endforeach
        @else
        <li class="collection-item avatar" >
            {{--<img src="" alt="" class="circle">--}}
            <i class="material-icons circle">home</i>
            <span class="title">No Results found</span>
            <a href="#!" class="secondary-content"><i class="material-icons">play_arrow</i></a>
        </li>
        @endif

</ul>