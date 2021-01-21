 <!-- START: Main Menu-->
        <div class="sidebar">
            <a href="#" class="sidebarCollapse float-right h6 dropdown-menu-right mr-2 mt-2 position-absolute d-block d-lg-none">
                <i class="icon-close"></i>
            </a>
            <!-- START: Logo-->
            <a href="index.html" class="sidebar-logo d-flex">
                <img src="{{asset('dist/images/logo.png')}}" alt="logo" width="25" class="img-fluid mr-2"/>
                <span class="h5 align-self-center mb-0">{{__('global.agroni')}}</span>        
            </a>
            <!-- END: Logo-->

            <!-- START: Menu-->
            <ul id="side-menu" class="sidebar-menu">
                <li class="dropdown active"><a href="#"><i class="icon-speedometer"></i>{{__('global.dashboard')}}</a> 
                    <div>
                        <ul>
                            <li class="active"><a href="index.html"><i class="icon-rocket"></i> eCommerce</a></li>
                            <li><a href="index-cryptocurrency.html"><i class="icon-shuffle"></i> Cryptocurrency</a></li>
                            <li><a href="index-analytic.html"><i class="icon-chart"></i> Analytic</a></li>
                        </ul>
                    </div>
                </li>

                <li class="dropdown active"><a href="#"><i class="icon-user-follow"></i>{{__('global.member')}}</a> 
                    <div>
                        <ul>
                            
                            <li class="active"><a href="#"> {{__('global.admission_form')}}</a></li>

                            <li><a href="#"> {{__('global.member_list')}}</a></li>


                            <li><a href="index-cryptocurrency.html"><i class="icon-shuffle"></i> Cryptocurrency</a></li>
                            <li><a href="index-analytic.html"><i class="icon-chart"></i> Analytic</a></li>
                        </ul>
                    </div>
                </li>


                 <li class="dropdown active"><a href="#"><i class="icon-user-follow"></i>{{__('global.nominee')}}</a> 
                    <div>
                        <ul>
                            
                            <li class="active"><a href="#"> {{__('global.addnominee')}}</a></li>

                         


                          
                        </ul>
                    </div>
                </li>
                <li class="dropdown active"><a href="#"><i class="icon-user-follow"></i>{{__('global.guarantor')}}</a> 
                    <div>
                        <ul>
                            
                            <li class="active"><a href="#"> {{__('global.createguarantor')}}</a></li>

                         


                          
                        </ul>
                    </div>
                </li>











                <li class="dropdown"><a href="#" class="text-danger"><i class="icon-cursor-move"></i>New<span class="ml-2 badge badge-danger">New</span></a>
                    <div>
                        <ul>
                            <li><a href="app-timeline.html"><i class="icon-calendar"></i> Time LIne</a></li>
                            <li><a href="app-task-board.html"><i class="icon-speech"></i> Todo</a></li>
                            <li><a href="app-tickets.html"><i class="icon-support"></i> Tickets</a></li>   
                            <li><a href="app-multi-input.html"><i class="icon-support"></i> Multi Input</a></li>   
                        </ul>
                    </div>
                </li>
                <li class="dropdown"><a href="#"><i class="icon-support"></i>Apps</a>
                    <div>
                        <ul>
                            <li><a href="app-calendar.html"><i class="icon-calendar"></i> Calendar</a></li>
                            <li><a href="app-chat.html"><i class="icon-speech"></i> Chats</a></li>
                            <li><a href="app-to-do.html"><i class="icon-support"></i> Todo</a></li>                        
                        </ul>
                    </div>
                </li>
                <li class="dropdown"><a href="#"><i class="icon-chart"></i>Charts</a>
                    <div> 
                        <ul>
                            <li class="dropdown"><a href="#" class="d-flex align-items-center"><i class="icon-chart"></i> amCharts Charts <small class="float-right ml-auto d-block icon-arrow-right"></small></a>
                                <div> 
                                    <ul>
                                        <li><a href="amcharts-bar.html"><i class="icon-energy"></i> Column & Bar</a></li>
                                        <li><a href="amcharts-line.html"><i class="icon-disc"></i> Line & Area</a></li>
                                        <li><a href="amcharts-pie.html"><i class="icon-frame"></i> Pie & Donut</a></li>
                                        <li><a href="amcharts-xy-bubble.html"><i class="icon-fire"></i> XY & Bubble</a></li>
                                        <li><a href="amcharts-stock.html"><i class="icon-shuffle"></i> Stock</a></li> 
                                        <li><a href="amcharts-timeline.html"><i class="icon-graph"></i> TimeLine</a></li> 
                                        <li><a href="amcharts-radar.html"><i class="icon-pie-chart"></i> Radar & Polar</a></li> 
                                        <li><a href="amcharts-treemap.html"><i class="icon-drawer"></i> Treemap</a></li> 
                                        <li><a href="amcharts-funnel.html"><i class="icon-energy"></i> Funnel & Pyramid</a></li> 
                                    </ul>
                                </div>
                            </li>
                            <li><a href="chart-morris.html"><i class="icon-energy"></i> Morris Chart</a></li>
                            <li><a href="chart-chartist.html"><i class="icon-disc"></i> Chartist js</a></li>
                            <li><a href="chart-echart.html"><i class="icon-frame"></i> eCharts</a></li>
                            <li><a href="chart-flot.html"><i class="icon-fire"></i> Flot Chart</a></li>
                            <li><a href="chart-knob.html"><i class="icon-shuffle"></i> Knob Chart</a></li>
                            <li class="dropdown"><a href="#" class="d-flex align-items-center"><i class="icon-control-pause"></i> Charts js <small class="float-right ml-auto d-block icon-arrow-right"></small></a>
                                <div> 
                                    <ul>
                                        <li><a href="chartjs-bar.html"><i class="icon-energy"></i> Bar charts</a></li>
                                        <li><a href="chartjs-line.html"><i class="icon-disc"></i> Line charts</a></li>
                                        <li><a href="chartjs-area.html"><i class="icon-frame"></i> Area charts</a></li>
                                        <li><a href="chartjs-other.html"><i class="icon-fire"></i> Doughnut, Pie, Polar charts</a></li>
                                        <li><a href="chartjs-linear.html"><i class="icon-shuffle"></i> Linear scale</a></li>                                                                        
                                    </ul>
                                </div>
                            </li>
                            <li><a href="chart-sparkline.html"><i class="icon-graph"></i> Sparkline Chart</a></li>                            
                            <li><a href="chart-peity.html"><i class="icon-pie-chart"></i> Peity Chart</a></li>   
                            <li><a href="chart-google.html"><i class="icon-drawer"></i> Google Charts</a></li>
                            <li><a href="chart-apex.html"><i class="icon-magnet"></i> Apex Charts</a></li>
                            <li><a href="chart-c3.html"><i class="icon-hourglass"></i> C3 Charts</a></li>
                        </ul>
                    </div>
                </li>
                <li class="dropdown"><a href="#"><i class="icon-envelope"></i>Mailbox</a>
                    <div> 
                        <ul>
                            <li><a href="app-mail.html"><i class="icon-envelope"></i> Inbox</a></li>
                            <li><a href="app-view-email.html"><i class="icon-eye"></i> View Email</a></li>
                            <li><a href="app-mail-compose.html"><i class="icon-compass"></i> Compose Email</a></li>                        
                        </ul> 
                    </div>

                </li>

                <li class="dropdown"><a href="#"><i class="icon-film"></i>Form</a>
                    <div> 
                        <ul>
                            <li><a href="form-basic.html"><i class="icon-disc"></i> Basic Form</a></li>
                            <li><a href="form-layout.html"><i class="icon-cursor-move"></i> Form Layout</a></li>
                            <li><a href="form-validation.html"><i class="icon-star"></i> Form Validation</a></li>
                            <li class="dropdown"><a href="#" class="d-flex align-items-center"><i class="icon-film"></i> Form Elements <small class="float-right ml-auto d-block icon-arrow-right"></small></a>
                                <div> 
                                    <ul>
                                        <li><a href="form-elements-switch.html"><i class="icon-energy"></i> Switch</a></li>
                                        <li><a href="form-elements-checkbox.html"><i class="icon-disc"></i> Checkbox</a></li>
                                        <li><a href="form-elements-radiobutton.html"><i class="icon-frame"></i> Radio</a></li>
                                        <li><a href="form-elements-input.html"><i class="icon-fire"></i> Input</a></li>                                       
                                    </ul>
                                </div>
                            </li>
                            <li><a href="form-float-input.html"><i class="icon-symbol-male"></i> Float Input</a></li>
                            <li><a href="form-wizard.html"><i class="icon-loop"></i> Form Wizards</a></li>
                            <li><a href="form-upload.html"><i class="icon-pin"></i> Form Uploads</a></li>
                            <li><a href="form-mask.html"><i class="icon-check"></i> Form Mask</a></li>                            
                            <li><a href="form-dropzone.html"><i class="icon-present"></i> Form Dropzone</a></li>
                            <li><a href="form-icheck.html"><i class="icon-briefcase"></i> Icheck Controls</a></li>
                            <li><a href="form-cropper.html"><i class="icon-hourglass"></i> Image Cropper</a></li>
                            <li><a href="form-htmleditor.html"><i class="icon-graduation"></i> HTML5 Editor</a></li>
                            <li><a href="form-typehead.html"><i class="icon-puzzle"></i> Form Typehead</a></li>                            
                            <li><a href="form-xeditable.html"><i class="icon-cloud-upload"></i> Xeditable</a></li>
                            <li><a href="form-summernote.html"><i class="icon-ghost"></i> Summernote</a></li>
                        </ul> 
                    </div>

                </li>
                <li class="dropdown"><a href="#"><i class="icon-menu"></i>Tables</a>
                    <div> 
                        <ul>
                            <li><a href="table-basic.html"><i class="icon-grid"></i> Table Basic</a></li>
                            <li><a href="table-layout.html"><i class="icon-layers"></i> Table Layout</a></li>
                            <li><a href="table-datatable.html"><i class="icon-docs"></i> Datatable</a></li>
                            <li><a href="table-footable.html"><i class="icon-wallet"></i> Footable</a></li>
                            <li><a href="table-jsgrid.html"><i class="icon-folder"></i> Jsgrid</a></li>
                            <li><a href="table-responsive.html"><i class="icon-control-pause"></i> Table Responsive</a></li>                            
                            <li><a href="table-editable.html"><i class="icon-pencil"></i> Editable Table</a></li>
                        </ul> 
                    </div>

                </li>
                <li class="dropdown"><a href="#"><i class="icon-screen-desktop"></i>UI</a>
                    <div> 
                        <ul>
                            <li><a href="ui-alert.html"><i class="icon-bell"></i> Alerts</a></li>
                            <li><a href="ui-badges.html"><i class="icon-badge"></i> Badges</a></li>
                            <li><a href="ui-buttons.html"><i class="icon-control-play"></i> Buttons</a></li>
                            <li><a href="ui-cards.html"><i class="icon-layers"></i> Cards</a></li>
                            <li><a href="ui-carousel.html"><i class="icon-picture"></i> Carousel</a></li>                           
                            <li><a href="ui-collapse.html"><i class="icon-arrow-up"></i> Collapse</a></li>
                            <li><a href="ui-dropdowns.html"><i class="icon-arrow-down"></i> Dropdowns</a></li>                          
                            <li><a href="ui-jumbotron.html"><i class="icon-screen-desktop"></i> Jumbotron</a></li>
                            <li><a href="ui-modals.html"><i class="icon-frame"></i> Modal</a></li> 
                            <li><a href="ui-pagination.html"><i class="icon-docs"></i> Pagination</a></li>  
                            <li><a href="ui-popoverandtooltip.html"><i class="icon-pin"></i> Popover &amp; Tooltip</a></li>
                            <li><a href="ui-progress.html"><i class="icon-graph"></i> Progress</a></li>
                            <li><a href="ui-scrollspy.html"><i class="icon-shuffle"></i> Scrollspy</a></li>
                            <li><a href="ui-select2.html"><i class="icon-wallet"></i> Select2</a></li>
                            <li><a href="ui-sweetalert.html"><i class="icon-fire"></i> Sweet Alert</a></li>
                            <li><a href="ui-timeline.html"><i class="icon-graduation"></i> Timeline</a></li>
                            <li><a href="ui-toastr.html"><i class="icon-layers"></i> Toastr</a></li>
                        </ul>
                    </div>
                </li> 
                <li class="dropdown"><a href="#"><i class="icon-book-open"></i>Pages</a>
                    <div> 
                        <ul>
                            <li><a href="page-lockscreen.html"><i class="icon-lock"></i> Lockscreen</a></li>
                            <li><a href="page-login.html"><i class="icon-login"></i> login</a></li>
                            <li><a href="page-register.html"><i class="icon-direction"></i> Register</a></li>
                            <li><a href="page-404.html"><i class="icon-crop"></i> 404 Page</a></li>
                            <li><a href="page-404-menu.html"><i class="icon-layers"></i> 404 Page With Menu</a></li>
                            <li><a href="page-blank.html"><i class="icon-frame"></i> Blank Page</a></li>
                            <li><a href="page-gallery.html"><i class="icon-layers"></i> Gallery</a></li>
                            <li><a href="page-pricing.html"><i class="icon-wallet"></i> Pricing</a></li>
                            <li><a href="page-contact-us.html"><i class="icon-wrench"></i> Contact us</a></li>
                        </ul>
                    </div>
                </li>     
                
                <li class="dropdown"><a href="#"><i class="icon-badge"></i>Icons</a>
                    <div> 
                        <ul>
                            <li><a href="icon-materialdesign.html"><i class="icon-star"></i> Material Icon</a></li>
                            <li><a href="icon-font-awesome.html"><i class="icon-screen-tablet"></i> Font-awesome</a></li>
                            <li><a href="icon-themify.html"><i class="icon-plane"></i> Themify Icon</a></li>
                            <li><a href="icon-weather.html"><i class="icon-drawer"></i> Weather Icon</a></li>
                            <li><a href="icon-simple-line.html"><i class="icon-map"></i> Simple Line Icon</a></li>
                            <li><a href="icon-flag.html"><i class="icon-flag"></i> Flag Icon</a></li>
                            <li><a href="icon-ionicons.html"><i class="icon-rocket"></i> Ionicons Icon</a></li>
                            <li><a href="icon-icofont.html"><i class="icon-fire"></i> Icofont Icon</a></li>    
                            <li><a href="icon-linearicons.html"><i class="icon-list"></i> Linear</a></li>
                            <li><a href="icon-crypto.html"><i class="icon-diamond"></i> Crypto</a></li>
                        </ul> 
                    </div>

                </li>
                <li class="dropdown"><a href="#"><i class="icon-user"></i>Profile</a>
                    <div> 
                        <ul>
                            <li><a href="user-contact-list.html"><i class="icon-people"></i> Contact List</a></li>
                            <li><a href="user-contact-grid.html"><i class="icon-cursor-move"></i> Contact Grid</a></li>
                            <li><a href="user-profile.html"><i class="icon-user"></i> User Profile</a></li>

                        </ul>
                    </div>
                </li>

                <li class="dropdown"><a href="#"><i class="icon-map"></i>Map</a>
                    <div> 
                        <ul>
                            <li><a href="map-google.html"><i class="icon-map"></i> Google Map</a></li>
                            <li><a href="map-vector.html"><i class="icon-vector"></i> Vector Map</a></li>

                        </ul>
                    </div>
                </li>

                <li class="dropdown"><a href="#"><i class="icon-pencil"></i>Blog</a>
                    <div> 
                        <ul>
                            <li><a href="blog-list.html"><i class="icon-plus"></i> Blog List</a></li>
                            <li><a href="blog-single.html"><i class="icon-tag"></i> Blog Post</a></li>                            
                        </ul>
                    </div>
                </li>                

                <li><a href="calendar.html"><i class="icon-calendar"></i>Calendar</a></li>
                <li class="dropdown"><a href="#"><i class="icon-bag"></i>Ecommerce</a>
                    <div> 
                        <ul>
                            <li><a href="ecommerce-product-list.html"><i class="icon-grid"></i> Products List</a></li>
                            <li><a href="ecommerce-product-detail.html"><i class="icon-plus"></i> Product Detail</a></li>
                            <li><a href="ecommerce-cart.html"><i class="icon-badge"></i> Cart</a></li>
                            <li><a href="ecommerce-checkout.html"><i class="icon-plus"></i> Checkout</a></li>
                            <li><a href="ecommerce-orders.html"><i class="icon-basket"></i> Orders</a></li>
                            <li><a href="ecommerce-order-view.html"><i class="icon-equalizer"></i> Order View</a></li>                           
                            <li><a href="ecommerce-order-invoice.html"><i class="icon-notebook"></i> Invoice</a></li>                            
                        </ul>
                    </div>
                </li>
                

            </ul>
            <!-- END: Menu-->
        </div>
        <!-- END: Main Menu-->