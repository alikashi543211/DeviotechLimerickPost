<div class="sidebar" data-color="green" data-background-color="black" data-image="{{ asset('admin_theme') }}/assets/img/sidebar-3.jpg">
    <div class="logo">
        <a href="#" target="_blank" class="simple-text logo-mini">
            <img src="" width="25px" alt=""></a>
        <a href="#" target="_blank" class="simple-text logo-normal">Limerick</a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="" />
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span> Admin <b class="caret"></b></span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> EP </span>
                                <span class="sidebar-normal"> Edit Profile </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item @routeis('admin.dashboard') active @endrouteis">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>
            <li class="nav-item @routeis('admin.discounType.*') active @endrouteis">
                <a class="nav-link" data-toggle="collapse" href="#discountType">
                    <i class="material-icons">receipt</i>
                    <p> Discount Type <b class="caret"></b></p>
                </a>
                <div class="collapse @routeis('admin.discounType.*') show @endrouteis" id="discountType">
                    <ul class="nav">
                        <li class="nav-item @routeis('admin.discounType.list') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.discounType.list')}}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> list </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.discounType.add') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.discounType.add')}}">
                                <span class="sidebar-mini"> <i class="material-icons">add</i> </span>
                                <span class="sidebar-normal"> Add </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item @routeis('admin.discounRate.*') active @endrouteis">
                <a class="nav-link" data-toggle="collapse" href="#discountRate">
                    <i class="material-icons">explore</i>
                    <p> Discount Rate <b class="caret"></b></p>
                </a>
                <div class="collapse @routeis('admin.discounRate.*') show @endrouteis" id="discountRate">
                    <ul class="nav">
                        <li class="nav-item @routeis('admin.discounRate.list') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.discounRate.list')}}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> list </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.discounRate.add') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.discounRate.add')}}">
                                <span class="sidebar-mini"> <i class="material-icons">add</i> </span>
                                <span class="sidebar-normal"> Add </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item @routeis('admin.library_Verse.*') active @endrouteis">
                <a class="nav-link" data-toggle="collapse" href="#library_verse">
                    <i class="material-icons">verified_user</i>
                    <p> Library Verse <b class="caret"></b></p>
                </a>
                <div class="collapse @routeis('admin.library_Verse.*') show @endrouteis" id="library_verse">
                    <ul class="nav">
                        <li class="nav-item @routeis('admin.library_Verse.list') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.library_Verse.list')}}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> list </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.library_Verse.add') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.library_Verse.add')}}">
                                <span class="sidebar-mini"> <i class="material-icons">add</i> </span>
                                <span class="sidebar-normal"> Add </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{--<li class="nav-item @routeis('admin.payment_method.*') active @endrouteis">
                <a class="nav-link" data-toggle="collapse" href="#payment_method">
                    <i class="material-icons">dashboard</i>
                    <p> Payment Method <b class="caret"></b></p>
                </a>
                <div class="collapse @routeis('admin.payment_method.*') show @endrouteis" id="payment_method">
                    <ul class="nav">
                        <li class="nav-item @routeis('admin.payment_method.list') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.payment_method.list')}}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> list </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.payment_method.add') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.payment_method.add')}}">
                                <span class="sidebar-mini"> <i class="material-icons">add</i> </span>
                                <span class="sidebar-normal"> Add </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>--}}

            <li class="nav-item @routeis('admin.taken_by.*') active @endrouteis">
                <a class="nav-link" data-toggle="collapse" href="#taken_by">
                    <i class="material-icons">account_balance</i>
                    <p> Taken By <b class="caret"></b></p>
                </a>
                <div class="collapse @routeis('admin.taken_by.*') show @endrouteis" id="taken_by">
                    <ul class="nav">
                        <li class="nav-item @routeis('admin.taken_by.list') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.taken_by.list')}}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> list </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.taken_by.add') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.taken_by.add')}}">
                                <span class="sidebar-mini"> <i class="material-icons">add</i> </span>
                                <span class="sidebar-normal"> Add </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item @routeis('admin.by_key.*') active @endrouteis">
                <a class="nav-link" data-toggle="collapse" href="#by_key">
                    <i class="material-icons">list</i>
                    <p> Keyed By <b class="caret"></b></p>
                </a>
                <div class="collapse @routeis('admin.by_key.*') show @endrouteis" id="by_key">
                    <ul class="nav">
                        <li class="nav-item @routeis('admin.by_key.list') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.by_key.list')}}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> list </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.by_key.add') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.by_key.add')}}">
                                <span class="sidebar-mini"> <i class="material-icons">add</i> </span>
                                <span class="sidebar-normal"> Add </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item @routeis('admin.visitor_link.*') active @endrouteis">
                <a class="nav-link" data-toggle="collapse" href="#visitor_links">
                    <i class="material-icons">group_work</i>
                    <p> Staff Link <b class="caret"></b></p>
                </a>
                <div class="collapse @routeis('admin.visitor_link.*') show @endrouteis" id="visitor_links">
                    <ul class="nav">
                        <li class="nav-item @routeis('admin.visitor_link.list') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.visitor_link.list')}}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> list </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.visitor_link.add') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.visitor_link.add')}}">
                                <span class="sidebar-mini"> <i class="material-icons">add</i> </span>
                                <span class="sidebar-normal"> Add </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            {{-- <li class="nav-item @routeis('admin.aniversary.*') active @endrouteis">
                <a class="nav-link" data-toggle="collapse" href="#aniversary">
                    <i class="material-icons">dashboard</i>
                    <p> Anniversary No <b class="caret"></b></p>
                </a>
                <div class="collapse @routeis('admin.aniversary.*') show @endrouteis" id="aniversary">
                    <ul class="nav">
                        <li class="nav-item @routeis('admin.aniversary.list') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.aniversary.list')}}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> list </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.aniversary.add') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.aniversary.add')}}">
                                <span class="sidebar-mini"> <i class="material-icons">add</i> </span>
                                <span class="sidebar-normal"> Add </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}

            <li class="nav-item @routeis('admin.chruch.*') active @endrouteis">
                <a class="nav-link" data-toggle="collapse" href="#chruch">
                    <i class="material-icons">person</i>
                    <p> Church <b class="caret"></b></p>
                </a>
                <div class="collapse @routeis('admin.chruch.*') show @endrouteis" id="chruch">
                    <ul class="nav">
                        <li class="nav-item @routeis('admin.chruch.list') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.chruch.list')}}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> list </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.chruch.add') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.chruch.add')}}">
                                <span class="sidebar-mini"> <i class="material-icons">add</i> </span>
                                <span class="sidebar-normal"> Add </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            {{-- <li class="nav-item @routeis('admin.reporting.*') active @endrouteis">
                <a class="nav-link" data-toggle="collapse" href="#msg_type">
                    <i class="material-icons">store</i>
                    <p> Message Type <b class="caret"></b></p>
                </a>
                <div class="collapse @routeis('admin.msg_type.*') show @endrouteis" id="msg_type">
                    <ul class="nav">
                        <li class="nav-item @routeis('admin.msg_type.list') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.msg_type.list')}}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> list </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.msg_type.add') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.msg_type.add')}}">
                                <span class="sidebar-mini"> <i class="material-icons">add</i> </span>
                                <span class="sidebar-normal"> Add </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}

            <li class="nav-item @routeis('admin.reporting.*') active @endrouteis">
                <a class="nav-link" data-toggle="collapse" href="#reporting">
                    <i class="material-icons">wysiwyg</i>
                    <p> Reporting <b class="caret"></b></p>
                </a>
                <div class="collapse @routeis('admin.reporting.*') show @endrouteis" id="reporting">
                    <ul class="nav">
                        <li class="nav-item @routeis('admin.reporting.acknowledge') active @endrouteis ">
                            <a class="nav-link" href="{{route('admin.reporting.acknowledge')}}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> Acknowledge </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.reporting.mems') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.reporting.mems')}}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> Mems </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item @routeis('admin.setting.*') active @endrouteis">
                <a class="nav-link" data-toggle="collapse" href="#job">
                    <i class="material-icons">settings</i>
                    <p> Setting <b class="caret"></b></p>
                </a>
                <div class="collapse @routeis('admin.setting.*') show @endrouteis" id="job">
                    <ul class="nav">
                        <li class="nav-item @routeis('admin.setting.general') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.setting.general')}}">
                                <span class="sidebar-mini"> <i class="material-icons">add</i> </span>
                                <span class="sidebar-normal"> General </span>
                            </a>
                        </li>
                        <li class="nav-item @routeis('admin.setting.create') active @endrouteis">
                            <a class="nav-link" href="{{route('admin.setting.create')}}">
                                <span class="sidebar-mini"> <i class="material-icons">payment</i> </span>
                                <span class="sidebar-normal"> Price List </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="javascript:;" onclick="document.getElementById('logout-form').submit()">
                    <form id="logout-form" class="d-none" method="post" action="{{ route('logout') }}">@csrf</form>
                    <i class="material-icons">logout</i>
                    <p> Logout </p>
                </a>
            </li>
        </ul>
    </div>
</div>
