<x-layouts.layout-template0-home>

<title>Techno Wave Ltd. || {{''}}Sale Statistics</title>	


<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{ route('dashboard') }}" class="link">Dashboard</a></li>
                <li class="item-link"><span>Sale Statistics</span></li>
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

                <div class="wrap-shop-control">

                    <h1 class="shop-title">Sale Statistics</h1>

                </div><!--end wrap shop control-->


                    <div class="content">   
                        <style>
                            .content {
                            padding-top: 40px;
                            padding-bottom: 40px;
                            }
                            .icon-stat {
                                display: block;
                                overflow: hidden;
                                position: relative;
                                padding: 15px;
                                margin-bottom: 1em;
                                background-color: #fff;
                                border-radius: 4px;
                                border: 1px solid #ddd;
                            }
                            .icon-stat-label {
                                display: block;
                                color: #999;
                                font-size: 13px;
                            }
                            .icon-stat-value {
                                display: block;
                                font-size: 28px;
                                font-weight: 600;
                            }
                            .icon-stat-visual {
                                position: relative;
                                top: 22px;
                                display: inline-block;
                                width: 32px;
                                height: 32px;
                                border-radius: 4px;
                                text-align: center;
                                font-size: 16px;
                                line-height: 30px;
                            }
                            .bg-primary {
                                color: #fff;
                                background: #d74b4b;
                            }
                            .bg-secondary {
                                color: #fff;
                                background: #6685a4;
                            }
                            
                            .icon-stat-footer {
                                padding: 10px 0 0;
                                margin-top: 10px;
                                color: #aaa;
                                font-size: 12px;
                                border-top: 1px solid #eee;
                            }
                        </style>
                        

                            <div class="row">

                                <div class="col-md-3 col-sm-6">    
                                    <div class="icon-stat">    
                                        <div class="row">
                                            <div class="col-xs-8 text-left">
                                                <span class="">Total Revenue</span>
                                                <span class="icon-stat-value">${{$total_revenue}}</span>
                                            </div>   
                                            <div class="col-xs-4 text-center">
                                                
                                            </div>
                                        </div>    
                                        <div class="icon-stat-footer">
                                        <i class="fa fa-clock-o"></i> Updated Now
                                        </div>    
                                    </div>    
                                </div>    
                                
                                <div class="col-md-3 col-sm-6">    
                                    <div class="icon-stat">    
                                        <div class="row">
                                            <div class="col-xs-8 text-left">
                                                <span class="">Products Sold</span>
                                                <span class="icon-stat-value">{{$total_sales}}</span>
                                            </div>    
                                            <div class="col-xs-4 text-center">
                                                
                                            </div>
                                        </div>    
                                        <div class="icon-stat-footer">
                                        <i class="fa fa-clock-o"></i> Updated Now
                                        </div>   
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">    
                                    <div class="icon-stat">    
                                        <div class="row">
                                            <div class="col-xs-8 text-left">
                                                <span class="">Today Revenue</span>
                                                <span class="icon-stat-value">$0.00</span>
                                            </div>    
                                            <div class="col-xs-4 text-center">
                                                
                                            </div>
                                        </div>    
                                        <div class="icon-stat-footer">
                                        <i class="fa fa-clock-o"></i> Updated Now
                                        </div>
                                    </div>    
                                </div>    

                                <div class="col-md-3 col-sm-6">    
                                    <div class="icon-stat">    
                                        <div class="row">
                                            <div class="col-xs-8 text-left">
                                                <span class="">Today Sales</span>
                                                <span class="icon-stat-value">0</span>
                                            </div>    
                                            <div class="col-xs-4 text-center">
                                                
                                            </div>
                                        </div>    
                                        <div class="icon-stat-footer">
                                        <i class="fa fa-clock-o"></i> Updated Now
                                        </div>    
                                    </div>    
                                </div> 
                            </div>        
                    </div>
            </div><!--end main products area-->

                <!-- side bar start -->
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="account-settings">
                                <div class="user-profile">
                                    <div class="user-avatar">
                                        <img src="{{ asset('storage/images/user/' . $user_details->user_image) }}" alt="Maxwell Admin" width="175" height="175" >
                                    </div>
                                    <h5 class="user-name" >{{ $user_details->first_name}} {{ $user_details->last_name}}</h5>
                                    <h6 class="user-email" >{{ $user_details->email}}</h6>
                                    
                                    <div class="widget mercado-widget filter-widget brand-widget">
                                    <a class="widget-title"></a>
                                </div>
                                </div>

                                <div class="widget mercado-widget filter-widget brand-widget">
                                    <a class="widget-title" href="{{ route('registered.userslist') }}"><i class="fa-solid fa-user"></i> Registered Users</a>
                                </div>

                                <div class="widget mercado-widget filter-widget brand-widget">
                                    <a class="widget-title" href="{{ route('customer.orders') }}"><i class="fa-solid fa-box-open"></i> Customer Order</a>
                                </div>

                                <div class="widget mercado-widget filter-widget brand-widget">
                                    <a class="widget-title" href="{{ route('sales.statistics') }}"><i class="fa-solid fa-chart-line"></i> Sale Statistics</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- side bar end -->


        </div><!--end row-->

    </div><!--end container-->

    </br>
    </br>          
    </br>

</main>
<!--main area-->


</x-layouts.layout-template0-home>