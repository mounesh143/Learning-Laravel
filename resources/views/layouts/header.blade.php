 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ asset('css/navbar.css')}}" rel="stylesheet">

    
    <body>
        <style>
            body {
                padding-top: 50px;
            }
            .navbar-template {
                padding: 40px 15px;
            }

        </style>

        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Vendor Project</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <b class="caret"></b></a>

                            <ul class="dropdown-menu">
                            
                                <li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Vendor Master <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="./add_vender">Add Vendor</a></li>                         
                                        <li><a href="./vender">View Vendor</a></li>
                                    </ul>
                                </li>
								<li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employee Master <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Add Employee</a></li>                         
                                        <li><a href="#">Edit Employee</a></li>
                                        <li><a href="#">View Employee</a></li>
                                    </ul>
                                </li>
								<li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Customer Master <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Add Customer</a></li>                         
                                        <li><a href="#">Edit Customer</a></li>
                                        <li><a href="#">View Customer</a></li>
                                    </ul>
                                </li>
								<li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product Master <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Operations</a></li>                         
                                        
                                    </ul>
                                </li>
								<li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Agent Master <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Add Agent</a></li>                         
                                        <li><a href="#">Edit Agent</a></li>
                                        <li><a href="#">View Agent</a></li>
                                    </ul>
                                </li>
								<li><a href="#">Stock Benchmark</a></li>
								<li><a href="#">Calendar</a></li>
								<li><a href="#">Expense Entry</a></li>
								<li><a href="#">Payment Entry</a></li>
								<li><a href="#">Attendance Entry</a></li>
								<li><a href="#">PO Details</a></li>
								<li><a href="#">LR & Invoice Details</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Billing <b class="caret"></b></a>

                            <ul class="dropdown-menu">
                                <li><a href="#">Billing Screen</a></li>                                
                                <li><a href="#">New Thread</a></li>                                
                            </ul>
							
                        </li>
						<li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Inventory <b class="caret"></b></a>

                            <ul class="dropdown-menu">
                                <li><a href="#">Stock Entry</a></li>
                                <li><a href="#">Stock Transfer</a></li>
                                <li><a href="#">Stock Search</a></li>
                                <li><a href="#">Stock Write Off</a></li>
                            </ul>
                        </li>
						<li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bank Book </a>
                        </li>
						<li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports <b class="caret"></b></a>

                            <ul class="dropdown-menu">
                                  <li><a href="#">Stock Report</a></li>
                                  <li><a href="#">Stock Requirement Report</a></li>
                                  <li><a href="#">Payment Exception Report</a></li>
                                  <li><a href="#">Expenses Report</a></li>
								  <li><a href="#">Day Book</a></li>
								  <li><a href="#">ESI & PF Report</a></li>
								  <li><a href="#">Commission Report</a></li>
								  <li><a href="#">Sales Report</a></li>
								  <li><a href="#">Salary Report</a></li>
								  <li><a href="#">Sales Tax</a></li>
								  <li><a href="#">Balance Sheet</a></li>
								  <li><a href="#">Income Tax</a></li>
								  <li><a href="#">Purchase Report</a></li>
								  <li><a href="#">Payment Report</a></li>
                            </ul>
                        </li>
						<li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Offers <b class="caret"></b></a>

                            <ul class="dropdown-menu">
                                <li><a href="#">Festival offer</a></li>
                                <li><a href="#">Occasion Offer</a></li>
                                <li><a href="#">Clearance Offer</a></li>
                            </ul>
                        </li>
						<li>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Customer Loyalty</a>
						</li>	
                        
                        <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
					</ul>
                    
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <div class="container">

				

        </div>
<script
          src="https://code.jquery.com/jquery-3.1.1.js"
          integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
          crossorigin="anonymous"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script src="{{ asset('js/navbar.js')}}"></script>