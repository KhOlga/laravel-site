<header id="header">
        <nav class="left">
            <a href="/" class="logo">your lawyer</a>
        </nav>

        <div>
            <ul id="inl_menu" class="inline_nav">
                <li class="{{Request::path() === '/' ? 'current_page_item' : '' }}"><a href="/" class="inline_nav_link" accesskey="1" title="">HOME</a></li>
                <li class="{{Request::path() === '/about' ? 'current_page_item' : '' }}"><a href="/about" class="inline_nav_link" accesskey="3" title="">ABOUT US</a></li>
                <li class="{{Request::path() === '/services' ? 'current_page_item' : '' }}"><a href="/services" class="inline_nav_link" accesskey="4" title="">Services</a></li>
                <li class="{{Request::is('/news')  ? 'current_page_item' : '' }}"><a href="/news" class="inline_nav_link" accesskey="5" title="">NEWS</a></li>
                <li class="{{Request::path() === '/contact' ? 'current_page_item' : '' }}"><a href="/contact" class="inline_nav_link" accesskey="6" title="">CONTACT</a></li>
            </ul>
        </div>

        {{--<nav class="right">
            <span style="padding-top:10px"><a style="margin-top:15px"href="/login" class="button alt">Log in</a></span>
        </nav>--}}
</header>
