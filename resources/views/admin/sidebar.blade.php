<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        @include("admin.header")
        <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
            <a href="#" class="btn btn-danger square-btn-adjust">Logout</a>
        </div>
    </nav>

    <nav class="navbar-default navbar-side col-lg-3" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">

                <li>
                    <a  href="/#"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                </li>

                <li>
                    <a  href="/admin/category"><i class="fa fa-desktop fa-3x"></i>Categories</a>
                </li>

                <li>
                    <a  href="/TEMP/admin/tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
                </li>

                <li>
                    <a  href="/TEMP/admin/chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
                </li>

                <li>
                    <a  href="/TEMP/admin/table.html"><i class="fa fa-table fa-3x"></i> Table Examples</a>
                </li>

                <li>
                    <a  href="/TEMP/admin/form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Second Level Link</a>
                        </li>

                        <li>
                            <a href="#">Second Level Link</a>
                        </li>

                        <li>
                            <a href="#">Second Level Link<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Third Level Link</a>
                                </li>

                                <li>
                                    <a href="#">Third Level Link</a>
                                </li>

                                <li>
                                    <a href="#">Third Level Link</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="active-menu"  href="/TEMP/admin/blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
