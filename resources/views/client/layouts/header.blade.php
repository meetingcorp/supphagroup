<header id="header" data-transparent="true" style="position: absolute;" class="white" data-fullwidth="true">
    <div class="header-inner">
        <div class="container" style="background-color: #5b5b5b">
            <div id="logo">
                <a href="{{ url('/') }}">
                    <span class="logo-default "><img src="{{ asset(setting('logonav')) }}" height="60"
                            style="margin-top:-20px;"></span>
                    <span class="logo-dark "><img src="{{ asset(setting('logonav')) }}" height="60"
                            style="margin-top:-20px;"></span>
                    <span class="logo-responsive"><img src="{{ asset(setting('logonav')) }}" height="40"></span>
                </a>
            </div>
            <div id="mainMenu-trigger" style="float: left">
                <a class="lines-button x"><span class="lines"></span> </a>
            </div>
            <div class="header-extras" style="float: right; margin-top: -5px;">
                <div class="d-none d-sm-block header-extras mt-3 social-icons social-icons-large social-icons-border social-icons-rounded social-icons-colored-hover"
                    style="padding: 5px;">
                    <ul>
                        <li class="social-facebook">
                            <a target="_blank" href="{{ setting('facebook_info') }}">
                                <i class="fab fa-facebook-f" style="color:white;"></i>
                            </a>
                        </li>
                        {{-- <li class="social-instagram">
                            <a target="_blank" href="{{ setting('line_info') }}">
                                <i class="fab fa-line" style="color:white;"></i>
                            </a>
                        </li>
                        <li class="social-digg">
                            <a target="_blank" href="tel:{{ setting('telle') }}">
                                <i class="fas fa-phone" style="color:white;"></i>
                            </a>
                        </li> --}}
                        <li class="social-twitter">
                            <a href="#">
                                <i class="fab fa-twitter" style="color:white;"></i>
                            </a>
                        </li>
                        <li class="social-flickr">
                            <a href="#">
                                <i class="fab fa-instagram" style="color:white;"></i>
                            </a>
                        </li>
                        <li class="social-lastfm">
                            <a href="#">
                                <i class="fab fa-google-plus-g" style="color:white;"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="mainMenu" class="menu-right menu-rounded" style="margin-left:20px;">
                <div class="container">
                    <nav style="margin-right:40px;">
                        <ul>
                            <li>
                                <a style="font-size: 20px;" href="{{ url('/') }}">HOME</a>
                            </li>
							<li class="dropdown">
                                <a style="font-size: 20px;" href="#">OUR BUSINESS</a>
								<ul class="dropdown-menu">
									<li>
										<a href="https://www.supphapruksa.com/" target="_blank">SUPPHA PRUKSA Co.,Ltd</a>
									</li>
									<li>
										<a href="https://www.chansugroup.com/" target="_blank">CHAN –SU CONSTRUCTION Co.,Ltd</a>
									</li>
									<li>
										<a href="https://www.boonrawee.com/" target="_blank">BOONRAWEE Co.,Ltd.</a>
									</li>
									<li>
										<a href="https://www.dna-architect.com/" target="_blank">ARCHITECT DNA Co.,Ltd.</a>
									</li>
								</ul>
                            </li>
                            <li>
                                <a style="font-size: 20px;" href="{{ route('client.news.index') }}">NEWS</a>
                            </li>
                            <li>
                                <a style="font-size: 20px;" href="{{ route('client.contact.index') }}">CONTACT</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
