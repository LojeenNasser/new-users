@extends('layouts.navbars.nav')

<div class="page-container">
    <div class="page-sidebar-wrapper">
        <div class="page-sidebar navbar-collapse collapse">
            <ul class="page-sidebar-menu  page-header-fixed "
                data-keep-expanded="false"
                data-auto-scroll="true"
                data-slide-speed="200"
                style="padding-top: 20px">
                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <!-- END SIDEBAR TOGGLER BUTTON -->
                <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                <li class="sidebar-search-wrapper">
                    <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                    <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                    <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                    <form class="sidebar-search  "
                        action="page_general_search_3.html"
                        method="POST">
                        <a href="javascript:;"
                            class="remove">
                            <i class="icon-close"></i>
                        </a>
                        <div class="input-group">
                            <input type="text"
                                class="form-control"
                                placeholder="Search...">
                            <span class="input-group-btn">
                                <a href="javascript:;"
                                    class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </span>
                        </div>
                    </form>
                    <!-- END RESPONSIVE QUICK SEARCH FORM -->
                </li>
                <li class="nav-item start active open">
                    <a href="javascript:;"
                        class="nav-link nav-toggle">
                        <i class="icon-home"></i>
                        <span class="title">Dashboard</span>
                        <span class="selected"></span>
                        <span class="arrow open"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item start {{ Route::currentRouteName()=='dashboard.index'?'active open':'' }}">
                            <a href="{{ route('dashboard.index') }}"
                                class="nav-link  ">
                                <i class="icon-bulb"></i>
                                <span class="title">Dashboard</span>
                                <span class="badge badge-success"></span>
                            </a>
                        </li>
                        <li class="nav-item start
                         {{ Route::currentRouteName()=='dashboard.users.index'?'active open':'' }} ">
                            <a href="{{ route('dashboard.users.index') }}"
                                class="nav-link ">
                                <i class="icon-bar-chart"></i>
                                <span class="title">Users</span>
                                <span class="selected"></span>
                            </a>
                        </li>


                    </ul>
                </li>
                <li class="heading">
                    <h3 class="uppercase">Features</h3>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;"
                        class="nav-link nav-toggle">
                        <i class="icon-diamond"></i>
                        <span class="title">UI Features</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">

                    </ul>
                </li>

            </ul>
            <!-- END SIDEBAR MENU -->
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
