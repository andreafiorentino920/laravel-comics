<footer>
    <div>
        <div class="footer-top">
            <div class="container">
                <div class="left">
                    <ul>
                        <li> <h3>DC COMICS</h3> </li>
                        @foreach ($footerLink['dcComics'] as $link)
                            <li> <a href="{{$link['href']}}">{{$link['name']}}</a> </li>
                        @endforeach
                        <li> <h3>SHOP</h3> </li>
                        @foreach ($footerLink['shop'] as $link)
                            <li> <a href="{{$link['href']}}">{{$link['name']}}</a> </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <ul>
                        <li> <h3>DC</h3> </li>
                        @foreach ($footerLink['dc'] as $link)
                            <li> <a href="{{$link['href']}}">{{$link['name']}}</a> </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <ul>
                        <li> <h3>SITES</h3> </li>
                        @foreach ($footerLink['sites'] as $link)
                            <li> <a href="{{$link['href']}}">{{$link['name']}}</a> </li>
                        @endforeach
                    </ul>
                </div>
                <div class="logo-bg">
                    <img src="" alt="">
                </div>   
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="left">
                    <button>SIGN-UP NOW!</button>
                </div>
                <div class="right">
                    <h3>FOLLOW US</h3>
                    @foreach ($footerLink['social'] as $link)
                        <a href="{{$link['href']}}"><img src="images/{{$link['url']}}" alt="{{$link['name']}}"></a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</footer>