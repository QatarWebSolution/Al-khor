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
        <li class="blue with-sub {{areActiveRoutes(['admin.news','admin.newsSave','admin.contacts','admin.contactsSave'])}}">
	            <span>
	                <i class="font-icon font-icon font-icon-post {{areActiveRoutes(['admin.news','admin.newsSave','admin.contacts','admin.contactsSave'])}}"></i>
	                <span class="lbl">Media Center</span>
	            </span>
            <ul>
                <li class="{{areActiveRoutes(['admin.news','admin.newsSave'])}}">
                    <a href="{{route('admin.news')}}"><span class="lbl">News</span></a>
                </li>
                <li class="{{areActiveRoutes(['admin.contacts','admin.contactsSave'])}}">
                    <a href="{{route('admin.contacts')}}"><span class="lbl">Contacts</span></a>
                </li>
            </ul>
        </li>
        <li class="blue with-sub {{areActiveRoutes(['admin.team'])}}">
	            <span>
	                <i class="font-icon font-icon font-icon-post {{areActiveRoutes(['admin.team'])}}"></i>
	                <span class="lbl">Football</span>
	            </span>
            <ul>
                <li class="{{areActiveRoutes(['admin.team'])}}">
                    <a href="{{route('admin.team')}}"><span class="lbl">Team</span></a>
                </li>
            </ul>
        </li>

    </ul>
</nav><!--.side-menu-->