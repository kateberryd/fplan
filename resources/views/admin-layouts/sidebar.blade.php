
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">{{Sentinel::getUser()->first_name}}</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                                
                                <form action="{{route('auth.logout')}}" method="post" id="logout-form">
                                  {{ csrf_field() }}
                                  
                                
                                  
                                  <a href="#" onclick="document.getElementById('logout-form').submit()"><i class="fa fa-power-off"></i> Logout</a>


                                </form>
                             
                            </ul>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="index.html"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                     
                        </li>
                        <li><a href="{{route('users.index')}}"><i class="fas fa-users"></i>Users</a></li>
                        
                        <li><a href="{{route('categories.all')}}"><i class="fas fa-book"></i>Categories</a></li>


                        <li><a href="{{route('businessplan.all')}}"><i class="fas fa-book"></i>Business Plan</a></li>
                            
                        <li> <a href="{{route('order.all')}}" ><i class="fas fa-shopping-cart"></i><span>Orders</span></a>

                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fab fa-cc-mastercard"></i><span class="hide-menu">Transactions</span></a>
                          
                        </li>
                        
                        <li><a href="{{route('businessplan.all')}}"><i class="fab fa-cc-mastercard"></i>Payment Plans</a></li>

                           

                    
                        <li> <a class="waves-effect waves-dark" href="pages-faq.html" aria-expanded="false"><i class="far fa-circle text-info"></i><span class="hide-menu">FAQs</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->