<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        @include("admin.header")
        <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
            <a class="btn btn-danger square-btn-adjust" href="/logoutuser">Logout</a>
        </div>
    </nav>

    <nav class="navbar-default navbar-side col-lg-3" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu" style="margin-bottom: 10px">
                <li>
                    <a href="#"><ion-icon name="briefcase" size="large"></ion-icon>  Appointments<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">  New Appointments</a>
                        </li>

                        <li>
                            <a href="#">  Completed Appointments</a>
                        </li>
                    </ul>
                </li>

                <li>
                <a  href="/admin/category"><ion-icon name="albums" size="large"></ion-icon>  Categories</a>
                </li>

                <li>
                    <a  href="/admin/service"><ion-icon name="apps" size="large"></ion-icon>  Services</a>
                </li>

                <li>
                    <a  href="/admin/user"><ion-icon name="person" size="large"></ion-icon>  Users</a>
                </li>

                <li>
                    <a  href="{{route('admin.comment.index')}}"><ion-icon name="chatbox" size="large"></ion-icon></i>  Comments</a>
                </li>

                <li>
                    <a  href="/admin/faq"><ion-icon name="help" size="large"></ion-icon>  FAQ</a>
                </li>

                <li>
                    <a  href="{{route('admin.message.index')}}"><ion-icon name="chatbubble" size="large"></ion-icon></i>  Messages</a>
                </li>

                <li>
                    <a href="/admin/setting"><ion-icon name="settings" size="large"></ion-icon>  Settings</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
