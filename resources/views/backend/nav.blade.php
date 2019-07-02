<nav class="side-menu">
    <ul class="side-menu-list">
        <li class="grey">
	            <span>
	                <i class="font-icon font-icon-dashboard"></i>
	                <span class="lbl">Dashboard</span>
	            </span>
        </li>

        <li class="purple with-sub {{areActiveRoutes(['admin.slider','admin.about'])}}">
	            <span>
	                <i class="font-icon font-icon-home {{areActiveRoutes(['admin.slider','admin.about'])}}"></i>
	                <span class="lbl">Home</span>
	            </span>
            <ul>
                <li class="{{isActiveRoute('admin.slider')}}">
                    <a href="{{route('admin.slider')}}"><span class="lbl">Slider</span></a>
                </li>
                <li class="{{isActiveRoute('admin.about')}}">
                    <a href="{{route('admin.about')}}"><span class="lbl">About</span></a>
                </li>

                {{--<li><a href="chat.html"><span class="lbl">Messages</span><span class="label label-custom label-pill label-danger">8</span></a></li>--}}
                {{--<li><a href="chat-write.html"><span class="lbl">Write Message</span></a></li>--}}
                {{--<li><a href="chat-index.html"><span class="lbl">Select User</span></a></li>--}}
            </ul>
        </li>
        <li class="blue with-sub {{areActiveRoutes(['admin.news','admin.newsSave'])}}">
	            <span>
	                <i class="font-icon font-icon font-icon-post {{areActiveRoutes(['admin.news','admin.newsSave'])}}"></i>
	                <span class="lbl">Media Center</span>
	            </span>
            <ul>
                <li class="{{isActiveRoute('admin.news')}}">
                    <a href="{{route('admin.news')}}"><span class="lbl">News</span></a>
                </li>
            </ul>
        </li>

    </ul>
</nav><!--.side-menu-->