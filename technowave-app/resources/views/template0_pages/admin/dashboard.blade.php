<x-layouts.layout-template0-home>

<title>Techno Wave Ltd. || {{''}}Admin Dashboard</title>	


<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><span>Dashboard</span></li>
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

                <div class="wrap-shop-control">

                    <h1 class="shop-title">Admin Dashboard</h1>

                    <!-- <div class="wrap-right">

                        <div class="change-display-mode">
                            <a href="{{ route('allproducts') }}" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
                            <a href="{{ route('allproductslist') }}" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>
                        </div>

                    </div> -->

                </div><!--end wrap shop control-->

                <div class="row">


                </div>

            </div><!--end main products area-->

            <!-- sidebar -->
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                
                <div class="widget mercado-widget filter-widget brand-widget">
                    <a class="widget-title" href="{{ route('registered.userslist') }}"><i class="fa-solid fa-user"></i> User Information</a>
                </div>

                <div class="widget mercado-widget filter-widget brand-widget">
                    <a class="widget-title" href="{{ route('dashboard') }}"><i class="fa-solid fa-user"></i> Add Admin</a>
                </div>

                <div class="widget mercado-widget filter-widget brand-widget">
                    <a class="widget-title" href="{{ route('dashboard') }}">Filter By Brand</a>
                </div>

                <div class="widget mercado-widget filter-widget brand-widget">
                    <a class="widget-title" href="{{ route('dashboard') }}">Filter By Brand</a>
                </div>

                <div class="widget mercado-widget filter-widget brand-widget">
                    <a class="widget-title" href="{{ route('dashboard') }}">Filter By Brand</a>
                </div>

            </div><!--end sidebar-->

        </div><!--end row-->

    </div><!--end container-->

</main>
<!--main area-->

</x-layouts.layout-template0-home>