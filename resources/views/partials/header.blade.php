<header>
    <div class="container">
        <div class="menu">
            <div class="logo">
                <img src="{{asset("images/dc-logo.png")}}" alt="">
            </div>
            <div>
                <ul>
                    @foreach ($headerLink as $link)
                            <li><a href="{{$link['link']}}">{{$link['name']}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="search">
                <div class="container-search">
                    <input type="text" placeholder="Search">
                </div>
            </div>
        </div>
    </div>
    <div class="jumbo">
    </div>
</header>