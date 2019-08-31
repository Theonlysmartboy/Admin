<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li class="active"><a href="{{url('home')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Bookings</span></a>
            <ul>
                <li><a href="{{url('client/add_booking')}}"><i class="icon icon-plus-sign"></i> <span>Book A session</span></a></li>
                <li><a href="{{url('client/view_bookings')}}"><i class="icon icon-th-list"></i><span>My sessions</span></a></li>
            </ul>
        </li>
        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Payments</span></a>
            <ul>
                <li><a href="{{url('client/invoices')}}"><i class="icon icon-th-list"></i> <span>Invoices</span></a></li>
            </ul>
        </li>
    </ul>
</div>
<!--sidebar-menu-->