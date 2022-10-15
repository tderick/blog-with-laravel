<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#signet"></use>
        </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">

        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                </svg> Posts</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ route('new-post') }}"><span class="nav-icon"></span>
                        New</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin-posts-list') }}"><span
                            class="nav-icon"></span>
                        List</a></li>

            </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cursor"></use>
                </svg> Category</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="{{ route('newCategory') }}"><span
                            class="nav-icon"></span>
                        New</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('listing') }}"><span class="nav-icon"></span>
                        List</a></li>

            </ul>
        </li>

        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
                </svg> Forms</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="forms/form-control.html"> Form Control</a></li>
                <li class="nav-item"><a class="nav-link" href="forms/select.html"> Select</a></li>
                <li class="nav-item"><a class="nav-link" href="forms/checks-radios.html"> Checks and radios</a></li>
                <li class="nav-item"><a class="nav-link" href="forms/range.html"> Range</a></li>
                <li class="nav-item"><a class="nav-link" href="forms/input-group.html"> Input group</a></li>
                <li class="nav-item"><a class="nav-link" href="forms/floating-labels.html"> Floating labels</a></li>
                <li class="nav-item"><a class="nav-link" href="forms/layout.html"> Layout</a></li>
                <li class="nav-item"><a class="nav-link" href="forms/validation.html"> Validation</a></li>
            </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
                </svg> Icons</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-free.html"> CoreUI Icons<span
                            class="badge badge-sm bg-success ms-auto">Free</span></a></li>
                <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-brand.html"> CoreUI Icons -
                        Brand</a></li>
                <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-flag.html"> CoreUI Icons - Flag</a>
                </li>
            </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                </svg> Notifications</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="notifications/alerts.html"><span class="nav-icon"></span>
                        Alerts</a></li>
                <li class="nav-item"><a class="nav-link" href="notifications/badge.html"><span
                            class="nav-icon"></span> Badge</a></li>
                <li class="nav-item"><a class="nav-link" href="notifications/modals.html"><span
                            class="nav-icon"></span> Modals</a></li>
                <li class="nav-item"><a class="nav-link" href="notifications/toasts.html"><span
                            class="nav-icon"></span> Toasts</a></li>
            </ul>
        </li>
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
