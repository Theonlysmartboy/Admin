<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li class="active"><a href="{{url('admin/dashboard')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Services</span></a>
            <ul>
                <li><a href="{{url('admin/view_services')}}"><i class="icon icon-th-list"></i> <span>View Services</span></a></li>
                <li><a href="{{url('admin/add_service')}}"><i class="icon icon-plus-sign"></i><span>Add Service</span></a></li>
            </ul>
        </li>
        <li> <a href="{{url('admin/clients')}}"><i class="icon icon-user"></i> <span>Clients</span></a>
        </li>
        <li class="submenu"><a href="" ><i class="icon icon-tint"></i> <span>Accounts</span></a>
            <ul>
                <li><a href="{{url('admin/invoices')}}"><i class="icon icon-th-list"></i> <span>Invoices</span></a></li>
                <li><a href="{{url('admin/accounts')}}"><i class="icon icon-plus-sign"></i><span>Bank Accounts</span></a></li>
            <li><a href="{{url('admin/payments')}}"><i class="icon icon-plus-sign"></i><span>Payments</span></a></li>
            
            </ul>
        </li>
        <li><a href="{{url('admin/company_settings')}}"><i class="icon icon-cog"></i> <span>Settings</span></a></li>
    </ul>
</div>
<!--sidebar-menu-->