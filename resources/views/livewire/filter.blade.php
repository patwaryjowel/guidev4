

                    <div class="so_right tab-pane fade active show">
                        <div class="search_area lab-btn mr-0 d-block">

                            <div class=" show" id="login">
                                <div class="col-lg-6" style="display: none;">
                                    
                                        <div class="form-section">
                                            <div class="form-field">
                                                <label>Email</label>
                                                <div class="input-holder">
                                                    <input type="email"  class="form-control" placeholder="" wire:model="searchTermp" />
                            
                                                </div>
                                            </div>
                                            <div class="form-field">
                                                <label>Password</label>
                                                <div class="input-holder">
                                                    <input type="password"  class="form-control" placeholder="" wire:model="searchTerm" />
                                                </div>
                                            </div>
                                        </div>

                                        @php
                                        $x = '';
                                        @endphp  
                                        @foreach($users as $user)
                                        <p id="foo" class="displaynone"> Wellcome, {{$user->name}} </p> 

                                        <input type="text" class="d-none" value="{{ $user->id }}" name="user_id" placeholder="From"/>
                                        @php
                                            $x = $user->id;
                                        @endphp 
                                        <script>
                                        $('.action-button').click();
                                        </script>
                                        @endforeach

                                        @if(empty($x))
                                        <p id="foo" class="displaynone">These credentials do not match our records.</p>
                                        @endif 

                                        <div class="text-center">
                                            <a class="button" onclick="myFunction()">Login</a>
                                        </div>
                                        <br>

                                        <input type="text" value="{{$x}}" class="d-none"  name="user_id">                          

                                        <script>
                                            function myFunction() {
                                            document.getElementById('foo').style.cssText = 'display: block !important';
                                            }
                                            function continueFunction() {
                                            var element = document.getElementById("login");
                                            element.classList.remove("show");
                                            element.classList.add("hide");
                                            var element = document.getElementById("register");
                                            element.classList.remove("hide");
                                            element.classList.add("show");
                                            }

                                        </script>
                                    </div>



                                    <div class="col-lg-6">
                                        <div class="form-section multiform--login-form">
                                            <div class="form-field text-left">
                                                <label>Email</label>
                                                <div class="input-holder">
                                                    <input type="email"  class="form-control" placeholder="" id="login-form-email" />
                            
                                                </div>
                                            </div>
                                            <div class="form-field text-left">
                                                <label>Password</label>
                                                <div class="input-holder">
                                                    <input type="password"  class="form-control" placeholder="" id="login-form-password" />
                                                </div>
                                            </div>
                                            <p id="login_message" style="display: none;">Login fail please try again.</p>
                                            <button type="button" class="button btn-success" id='login-form-btn'>Login</button>
                                        </div>
                                    </div>

                                    @section('loginformscript')
                                    <script>
                                    $( document ).ready(function() {
                                        $('#login-form-btn').click(function(e) {
                                                e.preventDefault();
                                                var email = $('#login-form-email').val();
                                                var password = $('#login-form-password').val();
                                                
                                                $.ajax('/custom/login/get', {
                                                type: 'GET',  // http method
                                                data: { email: email, password: password },  // data to submit
                                                success: function (data, status, xhr) {
                                                    console.log(data);
                                                    if(data == 'success') {
                                                        $('#authentiaction_form').find('.next').click();
                                                        $('#login_message').hide();
                                                    }else {
                                                        $('#login_message').show();
                                                    }
                                                    
                                                },
                                                error: function (jqXhr, textStatus, errorMessage) {
                                                        
                                                }
                                            });
                                        });
                                    });

                                    </script>
                                    @endsection
                                    <div class="col-lg-6">
                                        <br>
                                        <h4>I'm a New Traveler</h4>
                                        <p>Register to become a Traveler to:</p>
                                        <ul>
                                            <li>Record your Tours Locals purchases</li>
                                        </ul>
                                        <br>
                                        <a class="button text-white" onclick="continueFunction()">Continue</a>
                                    </div>
                                </div>




                                <div class="row hide" id="register">
                                    <div class="col-lg-12 text-left column-center column-reset">
                                        
                                        <div class="form-field">
                                            <label>Family  Name</label>
                                            <input tabindex="5" type="text" name="name" id="family_name">
                                        </div>
                                        <div class="form-field" id="countryDropdown">
                                            <label>Country</label>
                                            <select name="country" class="w-100 single-input-box" id="register_country">
                                                <option value="">choose...</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                            </select>
                                            
                                        </div>
                                            <div class="form-field">
                                            <label>Email</label>
                                            <input tabindex="5" type="email" name="email" id="register_email">
                                        </div>
                                        <!--  <div class="form-field">
                                            <label>Confirm Email</label>
                                            <input  type="text" name="ConfirmEmail">
                                        </div> -->
                                        <ul class="accordion css-accordion">
                                            <li class="accordion-item">
                                                <label for="item1" class="accordion-item-hd font-weight-bold">Alternate Emails</label>
                                                <div class="accordion-item-bd">Alternate Email 1<div class="form-field"><input tabindex="9" type="text" name="alternate_email_one"></div>
                                                </div>
                                                
                                            </li>
                                        </ul>
        
                                        <div class="form-field">
                                            <label>Choose a Password</label>
                                            <input type="password" tabindex="12" name="password" id="register_password">
                                        </div>
                                        <div class="form-field">
                                            <label>Re-enter Password</label>
                                            <input type="password" tabindex="13" name="password_confirmation">
                                        </div>
                                        <div>Receive Newsletter: &nbsp;<input type="checkbox" name="newsletter" value="yes" checked="checked">&nbsp;(occasional, no more than once per month)</div>
                                        <div class="submit-holder">
                                            <br>
                                            <p>Once you've registered, you can add additional optional contact information such as address and telephone number.</p>
                                            <p>Your privacy is important to us. Your email address will only be used for ToursByLocals business and will not be rented, sold or otherwise distributed. See our <a target="instructionsviewer" onclick="var w=window.open('https://www.toursbylocals.com/privacy','instructionsviewer','toolbar=no,location=no,status=no,menubar=no,resizable=yes,scrollbars=yes,width=700,height=600'); w.focus(); return false" href="https://www.toursbylocals.com/privacy">Privacy&nbsp;Policy</a></p>
                                            <!-- <div class="text-center">
                                                <input tabindex="14" class="button square green" type="submit" value="Register" name="25.3.7.29">
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                           
                            </div>
                           

                        </div>




                </div>
                <br>
                <br>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>

                <input type="button" name="next"   class="next action-button" id="register_button" value="Next"/>  

    @section('signupformscript')
    <script>
    $( document ).ready(function() {
        $('#register_button').click(function(e) {
                e.preventDefault();
                var name = $('#family_name').val();
                var country = $('#register_country').val();
                var email = $('#register_email').val();
                var emailone = $('#alternate_email_one').val();
                var password = $('#register_password').val();
                
                
                $.ajax('/custom/signup/get', {
                type: 'GET',  // http method
                data: { name: name, country: country, email: email, emailone: emailone, password: password },  // data to submit
                success: function (data, status, xhr) {
                    console.log(data);
                    if(data == 'success') {
                        $('#authentiaction_form').find('.next').click();
                        $('#login_message').hide();
                    }else {
                        $('#login_message').show();
                    }
                    
                },
                error: function (jqXhr, textStatus, errorMessage) {
                        
                }
            });
        });
    });

    </script>
    @endsection 


