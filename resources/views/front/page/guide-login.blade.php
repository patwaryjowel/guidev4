
    
    
    <!-- Breadcrumb -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="in-breadcrumb">
                <div class="row">
                    <div class="col">
                        <h3>Tour Guide Login</h3>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Become a Guide</li>
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
                <div class="col-lg-7 ml-auto mr-auto">
                    <!-- <p> Travel Agents, please use the <a class="theme-color" href="{{route('front.guidelogin')}}"> TRAVEL AGENT login</a> </p> -->
                    <p> Travelers, please use the  <a class="theme-color" href="{{route('front.travelerlogin')}}"> Traveler login.</a> </p>
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
                        <input type="checkbox" name="31.11" value="31.11">&nbsp;Remember login on this computer
                        <input type="hidden" name="wosid" value="#">
                        <div class="text-center">
                            <input tabindex="3" class="button green" type="submit" value="Login" name="31.7">
                        </div>
                        <br>
                        <!-- <a href="{{ route('password.request') }}">forgot password?</a> -->
                            
                    </form>
                    <p class="join-text">If you are a passionate and enthusiastic person with local knowledge and expertise, <a href="{{route('guide.apply')}}" class="theme-color">join&nbsp;our&nbsp;system</a> and become a Tours By Locals tour guide!</p>
                </div>
            </div>
        </div>
    </div>
    
    
   