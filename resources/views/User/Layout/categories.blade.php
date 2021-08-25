<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="has_megamenu">
            <a href="#" style="font-weight: bold;">All Categories <i
                    class="fa fa-arrow-down" aria-hidden="true"></i></a>
            <div class="dropdown_megamenu">
                <div class="megamnu_module">
                    <div class="menu_items">
                    @foreach ($category as $item)
                        <div class="menu_column">
                        
                            <ul>
                                
                                <li class="title" style="font-weight: bold;"><a href="/cat_pro/{{$item->id}}">{{$item->cat_name}}</a></li>
                                @foreach ($item->subcategory as $sub)
                                <li>
                                    <a href="/subcat_pro/{{$sub->id}}">{{$sub->subcat_name}}</a>
                                </li>
                                @endforeach

                                
                               

                            </ul>
                            
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </li>

        @foreach ($category->take(5) as $item)
        <li class="has_dropdown">
            <a href="/cat_pro/{{$item->id}}">{{$item->cat_name}}</a>

        </li>
        @endforeach

        
    </ul>
</div>