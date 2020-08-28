

        <!-- Sidebar -->
        <div class="sidebar-fixed position-fixed">

            <a class="logo-wrapper waves-effect">
                <img src="{{ asset('assets/img/logo2.png') }}" width="100% " height="60%" class="img-fluid" alt="">
            </a>

            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item active waves-effect">
                    <i class="fa fa-pie-chart mr-3"></i>Dashboard
                </a>
                <a href="{{ url('/my-profile') }}" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-user mr-3"></i>Profile</a>
                <a href="{{ url('/products') }}" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-table mr-3"></i>Products</a>

                <a href="{{ url('/registered-user') }}" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-users mr-3"></i>Users</a>
                <a href="{{ url('/home') }}" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-globe mr-3 "></i>Frontend-Home</a>
            </div>

        </div>
        <!-- Sidebar -->
