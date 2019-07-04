<nav class="side-menu">
    <ul class="side-menu-list">
        <li class="grey {{isActiveRoute('admin.dashboard')}}">
	            <span>
	                <i class="font-icon font-icon-dashboard {{areActiveRoutes(['admin.dashboard'])}}"></i>
                    <span class="lbl"><a href="{{route('admin.dashboard')}}">Dashboard</a></span>
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
        <li class="blue with-sub {{areActiveRoutes(['admin.team','admin.teamSave','admin.football_rewards','admin.football_rewardsSave','admin.football_fixturesSave','admin.football_fixtures','admin.football_fanclub','admin.football_fanclubSave'])}}">
	            <span>
	                <i class="font-icon font-icon font-icon-post {{areActiveRoutes(['admin.team','admin.teamSave','admin.football_rewards','admin.football_rewardsSave','admin.football_fixturesSave','admin.football_fixtures','admin.football_fanclub','admin.football_fanclubSave'])}}"></i>
	                <span class="lbl">Football</span>
	            </span>
            <ul>
                <li class="{{areActiveRoutes(['admin.team','admin.teamSave'])}}">
                    <a href="{{route('admin.team')}}"><span class="lbl">Team</span></a>
                </li>
                <li class="{{areActiveRoutes(['admin.football_fixturesSave','admin.football_fixtures'])}}">
                    <a href="{{route('admin.football_fixtures')}}"><span class="lbl">Football Fixtures</span></a>
                </li>
                <li class="{{areActiveRoutes(['admin.football_rewards','admin.football_rewardsSave'])}}">
                    <a href="{{route('admin.football_rewards')}}"><span class="lbl">Football Rewards</span></a>
                </li>
                <li class="{{areActiveRoutes(['admin.football_fanclubSave','admin.football_fanclub'])}}">
                    <a href="{{route('admin.football_fanclub')}}"><span class="lbl">Football Fanclub</span></a>
                </li>
            </ul>
        </li>

    </ul>
</nav><!--.side-menu-->