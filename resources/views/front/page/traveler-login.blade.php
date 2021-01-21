
    <!-- Breadcrumb -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="in-breadcrumb">
                <div class="row">
                    <div class="col">
                        <h3>Guide traveler login</h3>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">guide traveler login</li>
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
            <div class="row">
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
                        <div class="text-center">
                            <input tabindex="3" class="button green" type="submit" value="Login" name="31.7">
                        </div>
                        <br>
                        (<a href="#">forgot password?</a>)
                            <br><br>
                            <input type="checkbox" name="31.11" value="31.11">&nbsp;Remember login on this computer</center>
                        <input type="hidden" name="wosid" value="#">
                    </form>
                    <p>If you are a passionate and enthusiastic person with local knowledge and expertise, <a href="#">join&nbsp;our&nbsp;system</a> and become a ToursByLocals tour guide!</p>
                </div>
                <div class="col-lg-6">
                    
                    <h4>I'm a New ToursByLocals Traveler</h4>
                    
                    <p>Register to become a Traveler to:</p>
                    
                    <ul>
                        <li>add tours to your 'wish list' with a single click</li>
                        <li>rate tours and add testimonials about the tours you've taken</li>
                        <li>record your ToursByLocals purchases</li>
                        <li>send PDF or image files to ToursByLocals guides, and more!</li>
                    </ul>
                    
                    <a href="{{route('front.travelerregister')}}" class="button green">Continue</a>
                    
                </div>
            </div>
            
           
            
        </div>
    </div>
    
  