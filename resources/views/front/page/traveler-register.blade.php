
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
           
            @include('alert')
           
            
                <div class="row ">
                    <div class="col-lg-6 ml-auto mr-auto">
                        <div class="columns-6 column-center column-reset" id="register">
                            <div class="page-title">
                                <h4>Become a ToursByLocals Traveler</h4>
                            </div>
                        </div>
                        
                        <form name="registrationForm" method="post" class="register-form ul-form" action="{{ route('register') }}">
                            <div class="columns-8 column-center column-reset">
                                @csrf


                            <!--------------->
                            <input type="text" class="d-none" name="prefix">
                            <input type="text" value="user" class="d-none" name="utype">
                            <input type="text" class="d-none" name="country">
                            <input type="text" class="d-none" name="birthday">
                            <input type="text" class="d-none" name="city">
                            <input type="text" class="d-none" name="address">
                            <input type="text" class="d-none" name="zip">
                            <input type="text" class="d-none" name="homephone">
                            <input type="text" class="d-none" name="cellphone">
                            <input type="text" class="d-none" name="skypename">
                            <input type="text" class="d-none" name="contacttime">
                            <input type="text" class="d-none" name="licensed">
                            <input type="text" class="d-none" name="licensedetail">
                            <input type="text" class="d-none" name="detail">
                            <input type="text" class="d-none" name="notes">
                            <input type="text" class="d-none" name="biography">
                            <input type="text" class="d-none" name="credentials">
                            <input type="text" class="d-none" name="bangla">
                            <input type="text" class="d-none" name="english">
                            <input type="text" class="d-none" name="arabic">
                            <input type="text" class="d-none" name="hindi">
                            <input type="text" class="d-none" name="status">
                            <input type="text" class="d-none" name="location_id">
                            <input type="text" class="d-none" name="location">
                            <input type="text" class="d-none" name="guidenumber">
                            <input type="text" class="d-none" name="tour_place_id">
                            
                           
                            <!--------------->
                               
                                <div class="form-field">
                                    <label>Name</label>
                                    <input tabindex="5" type="text" name="name">
                                </div>
                                <div class="form-field" id="countryDropdown">
                                    <label>Country</label>
                                    <select name="country">
                                        <option value="">choose...</option>
                                        <option value="0">Afghanistan</option>
                                        <option value="1">Albania</option>
                                        <option value="2">Algeria</option>
                                        <option value="3">Andorra</option>
                                        <option value="4">Angola</option>
                                        <option value="5">Anguilla</option>
                                        <option value="6">Antarctica</option>
                                    </select>
                                    
                                </div>
                                <div class="form-field">
                                    <label>Email</label>
                                    <input tabindex="7" type="email" name="email">
                                </div>
                               <!--  <div class="form-field">
                                    <label>Confirm Email</label>
                                    <input tabindex="8" type="text" name="theConfirmEmail">
                                </div> -->
                                <ul class="accordion css-accordion">
                                    <li class="accordion-item">
                                        <input class="accordion-item-input" type="checkbox" name="accordion" id="item1">
                                        <label for="item1" class="accordion-item-hd">Alternate Emails <span class="accordion-item-hd-cta">▲</span></label>
                                        <div class="accordion-item-bd">Alternate Email 1<div class="form-field"><input tabindex="9" type="text" name="alternate_email_one"></div>
                                        </div>
                                        <div class="accordion-item-bd">Alternate Email 2<div class="form-field"><input tabindex="10" type="text" name="alternate_email_two"></div>
                                        </div>
                                        <div class="accordion-item-bd">Alternate Email 3<div class="form-field"><input tabindex="11" type="text" name="alternate_email_three"></div>
                                        </div>
                                    </li>
                                </ul>

                                <div class="form-field">
                                    <label>Choose a Password</label>
                                    <input type="password" tabindex="12" name="password">
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
                                    <div class="text-center">
                                        <input tabindex="14" class="button square green" type="submit" value="Register" name="25.3.7.29">
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="wosid" value="9E9q7Gsr2zSDm0V6gJe5l0">
                        </form>
                        
                    </div>
                </div>
            
            </div>
            
        </div>
    </div>
    
  