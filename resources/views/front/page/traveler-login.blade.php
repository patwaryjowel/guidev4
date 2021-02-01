
    <!-- Breadcrumb -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="in-breadcrumb">
                <div class="row">
                    <div class="col">
                        <h3>Guide Traveler Login</h3>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Guide Traveler Login</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb -->
    
    
    <div class="tourist-guide-apply-area section-ptb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <form name="theForm" method="post" class="login-form background-form" action="{{ route('login') }}">
                        @csrf
                        <div class="form-section">
                            <div class="form-field">
                                <label>Email</label>
                                <div class="input-holder">
                                    <input placeholder="e.g., youremail@email.com" tabindex="1"  id="email" type="email" name="email" >
                                </div>
                            </div>
                            <div class="form-field">
                                <label>Password</label>
                                <div class="input-holder">
                                    <input type="password" tabindex="2" id="password" name="password">
                                </div>
                            </div>
                        </div>
                        <input type="checkbox" name="31.11" value="31.11">&nbsp;Remember login on this computer</center>
                        <input type="hidden" name="wosid" value="#">
                        <div class="text-left mt-3">
                            <input tabindex="3" class="button green" type="submit" value="Login" name="31.7">
                        </div>
                        <!-- <br>
                        (<a href="#">forgot password?</a>) -->
                            
                    </form>
                </div>
                <div class="col-lg-6">
                    <h4>I'm a New Tours By Locals Traveler</h4>
                    <p>Register to become a Traveler to:</p>
                    
                    <ul >
                        <li>Record your Tours By Locals purchases</li>
                    </ul>
                    
                    <a href="{{route('front.travelerregister')}}" class="button green mt-3">Register Continue</a>
                    
                </div>
            </div>
            
           
            
        </div>
    </div>
    
  