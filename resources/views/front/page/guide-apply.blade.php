
    
    <!-- Breadcrumb -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="in-breadcrumb">
                <div class="row">
                    <div class="col">
                        <h3>Become a Guide</h3>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{route('front.index')}}">Home</a></li>
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
                  @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block mt-3">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                  @endif

                  @if (count($errors) > 0)
                      <ul class="alert alert-danger pl-5">
                          @foreach($errors->all() as $error)
                              <li>{{ $error }}</li> 
                          @endforeach
                      </ul>
                  @endif
                  <div class="row register-form-box">
                      <form method="POST" action="{{route('register')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-12">
                          
                        <div class="row">
                          <div class="col-lg-6">
                              <p class="form-field">
                                <label>Prefix <small>(Optional)</small></label>
                                <select tabindex="1" name="prefix">
                                    <option value="">choose...</option>
                                    <option value="Miss">Miss</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Ms">Ms</option>
                                    <option value="Dr">Dr</option>
                                    <option value="Rev">Rev</option>
                                </select>
                              </p>
                          </div>
                        
                          <div class="col-lg-6">
                              <p class="form-field">
                                  <label>Given Name <span class="must">*</span></label>
                                  <input type="text" name="name">
                              </p>
                          </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile" name="profile_picture">
                          <label class="custom-file-label" for="customFile">Choose Profile Image<span class="must">*</span></label>
                        </div>
                        <br><br>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile" name="nid">
                          <label class="custom-file-label" for="customFile">Choose NID<span class="must">*</span></label>
                        </div>


                        </div>
                        <div class="col-lg-12">
                            <p class="form-field">
                                <label>Country <span class="must">*</span></label>
                                <select name="country">
                                    <option value="">choose...</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    
                                </select>
                            </p>
                        </div>

                        @php
                          use App\Models\tour;
                          use App\Models\location;
                          $tours = tour::get();
                          
                        @endphp
                         <div class="col-lg-12">
                            <p class="form-field">
                                <label>Choose Your Guide Palace <span class="must">*</span></label>
                                <select name="tour_place_id">
                                    <option value="">choose...</option>
                                    @foreach($tours as $tour)
                                    @php
                                    $locations = location::where('id', $tour->location_id)->get();
                                    @endphp
                                    @foreach($locations as $location)
                                    <option value="{{$tour->id}}">{{$tour->title}} - {{$location->location}} </option>
                                    @endforeach
                                    @endforeach
                                </select>
                            </p>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-field">
                               <label>Date of Birth <span class="must">*</span></label>
                                 <input size="11" type="text" name="birthday">
                            </div>
                        </div>
                        
                        
                        <div class="col-lg-12">
                            <p class="form-field">
                                <label>City (type your closest city to your hometown)</label>
                                <input placeholder="(just enough characters to make it unique)" type="text" name="city">
                            </p>
                        </div>
                        
                        <div class="col-lg-12">
                            <p class="form-field">
                                <label>Address <span class="must">*</span></label>
                                <input tabindex="4" type="text" name="address">
                            </p>
                        </div>
                        
                        <div class="col-lg-12">
                            <p class="form-field">
                                 <label>Zip / Postal <small>(optional)</small></label>
                                <input tabindex="7" type="text" name="zip">
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p class="form-field">
                                <label>Home Phone <span class="must">*</span> <small>(include country code)</small></label>
                                <input tabindex="9" type="text" name="homephone">
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p class="form-field">
                                <label>Cell Phone <span class="must">*</span>  <small>(include country code)</small></label>
                                <input tabindex="10" type="text" name="cellphone">
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p class="form-field">
                                <label>Skype Name <small>(optional)</small></label>
                                <input tabindex="11" type="text" name="skypename">
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p class="form-field">
                                <label>Best Time to Contact</label>
                                <input tabindex="12" type="text" name="contacttime">
                            </p>
                        </div>
                        
                        <!------------------------------->
                        <div class="form-group row">
                            <label for="city" class="col-sm-2 col-form-label">city</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" value="{{old('city')}}" name="city" id="city" placeholder="city">
                            </div>
                          </div>  
                          <div class="form-group row">
                            <label for="country" class="col-sm-2 col-form-label">country</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="country" id="country" placeholder="country">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="biography" class="col-sm-2 col-form-label">biography</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="biography" id="biography" placeholder="biography">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="credentials" class="col-sm-2 col-form-label">credentials</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="credentials" id="credentials" placeholder="credentials">
                            </div>
                          </div>
                          <!-- <div class="form-group row">
                            <label for="guidenumber" class="col-sm-2 col-form-label">guidenumber</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="guidenumber" id="guidenumber" placeholder="guidenumber">
                            </div>
                          </div> -->
                          {{--
                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                  <h2>Languages</h2> 
                              </div>
                        </div>


                  <div class="form-group row">
                 
                      <div class="col-sm-3">
                        <div class="form-check">
                          <label class="form-check-label">Bangla</label>
                        </div>
                      </div>
                      <div class="col-sm-3 d-none">
                        <div class="form-check">
                          <input class="form-check-input" checked="checked" type="radio"  name="bangla">
                          <label class="form-check-label">None</label>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="basic" name="bangla">
                          <label class="form-check-label">Basic</label>
                      </div>
                     </div>
                      <div class="col-sm-3">
                        <div class="form-check">
                          <input class="form-check-input" value="fluent" type="radio" name="bangla">
                          <label class="form-check-label">Fluent</label>
                        </div>
                         </div>
                          <div class="col-sm-3">
                        <div class="form-check">
                          <input class="form-check-input" value="conversational" type="radio" name="english">
                          <label class="form-check-label">conversational</label>
                        </div>
                         
                      </div>
                  </div>

                    <div class="form-group row">
                 
                  <div class="col-sm-3">
                        <div class="form-check">
                          <label class="form-check-label">English</label>
                        </div>
                     </div>
                      <div class="col-sm-3 d-none">
                        <div class="form-check">
                          <input class="form-check-input" checked="checked" type="radio"  name="english">
                          <label class="form-check-label">None</label>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" value="basic" name="english">
                          <label class="form-check-label">Basic</label>
                        </div>
                     </div>
                      <div class="col-sm-3">
                        <div class="form-check">
                          <input class="form-check-input" value="fluent" type="radio" name="english">
                          <label class="form-check-label">Fluent</label>
                        </div>
                         </div>
                          <div class="col-sm-3">
                        <div class="form-check">
                          <input class="form-check-input" value="conversational" type="radio" name="english">
                          <label class="form-check-label">conversational</label>
                        </div>
                         
                      </div>
                    </div>

                    <div class="form-group row">
                 
                  <div class="col-sm-3">
                        <div class="form-check">
                          <label class="form-check-label">Arabic</label>
                        </div>
                     </div>
                     <div class="col-sm-3 d-none">
                        <div class="form-check">
                          <input class="form-check-input" checked="checked" type="radio"  name="arabic">
                          <label class="form-check-label">None</label>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="form-check">
                          <input class="form-check-input"  type="radio" value="basic" name="arabic">
                          <label class="form-check-label">Basic</label>
                        </div>
                     </div>
                      <div class="col-sm-3">
                        <div class="form-check">
                          <input class="form-check-input" value="fluent" type="radio" name="arabic">
                          <label class="form-check-label">Fluent</label>
                        </div>
                         </div>
                          <div class="col-sm-3">
                        <div class="form-check">
                          <input class="form-check-input" value="conversational" type="radio" name="arabic">
                          <label class="form-check-label">conversational</label>
                        </div>
                         
                      </div>
                    </div>

                    <div class="form-group row">
                 
                        <div class="col-sm-3">
                              <div class="form-check">
                                <label class="form-check-label">Hindi</label>
                              </div>
                          </div>
                            <div class="col-sm-3 d-none">
                              <div class="form-check">
                                <input class="form-check-input" checked="checked" type="radio"  name="hindi">
                                <label class="form-check-label">None</label>
                              </div>
                          </div>
                          <div class="col-sm-3">
                              <div class="form-check">
                                <input class="form-check-input" type="radio" value="basic" name="hindi">
                                <label class="form-check-label">Basic</label>
                              </div>
                          </div>
                            <div class="col-sm-3">
                              <div class="form-check">
                                <input class="form-check-input" value="fluent" type="radio" name="hindi">
                                <label class="form-check-label">Fluent</label>
                              </div>
                            </div>
                            <div class="col-sm-3">
                              <div class="form-check">
                                <input class="form-check-input" value="conversational" type="radio" name="hindi">
                                <label class="form-check-label">conversational</label>
                              </div>
                              
                            </div>
                    </div>
              
                    --}} 
                    
                    
                        <!------------------------------->
                        <!------------------------------->

                       
                        <div class="col-lg-12">
                            <div class="text-left">
                                <h4 class="ul-line font-weight-bold">Account Details</h4>
                            </div>
                        </div>

                        {{--
                        <div class="col-lg-12">
                          <div class="mt-4">
                            <label>You are in</label> &nbsp; &nbsp; &nbsp; &nbsp;
                            <input type="radio" id="user" name="utype" value="1" checked="checked">
                            <label for="user">User</label>
                            &nbsp; &nbsp;
                            <input type="radio" id="guide" name="utype"  value="0">
                            <label for="guide">Non User</label>

                          </div>
                        </div>
                        --}}
                        
                        <div class="col-lg-12">
                            <p class="form-field">
                                <label>Email </label>
                                <input tabindex="13" type="text" name="email">
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p class="form-field">
                                <label>Password</label>
                                <input size="40" type="password" tabindex="14" name="password">
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p class="form-field">
                                <label>Re-enter Password</label>
                                <input size="40" type="password" tabindex="15" name="password_confirmation">
                            </p>
                        </div>

                        <div class="col-lg-12 d-none">
                            <p class="form-field">
                                <label>User Type</label>
                                <input tabindex="13" value="guide" type="text" name="utype">
                            </p>
                        </div>
                        
                        <!-------------------------------------------->
                        <div class="col-lg-12">
                          <div class="text-left mt-3">
                              <h4 class="ul-line font-weight-bold">Experience</h4>
                          </div>
                          <label class="font-weight-bold">Are you a licensed tour guide?</label>
                          <p class="textAlignLeft">

                              <input class="d-none" checked="checked" tabindex="16" type="radio"  name="licensed">

                              <input tabindex="16" type="radio" value="Yes, I'm a licensed tour guide" name="licensed">&nbsp;&nbsp;Yes, I'm a licensed tour guide<br>

                              <input tabindex="16" type="radio" value="No, I'm a passionate local" name="licensed">&nbsp;&nbsp;No, I'm a passionate local<br>

                          </p>
                        
                          <div class="form-field">
                              <p class="label textAlignLeft">If you checked yes, please specify in which other guide website(s) you currently advertise your tours (Max 6):</p>
                              <textarea placeholder="Please specify in which other guide website(s) you currently advertise your tours (Max 6)." onkeyup="Contar('eBann2','sBann2','(limit 256 characters - {CHAR} left)',256);" rows="5" cols="80" tabindex="18" id="eBann2" name="licensedetail"></textarea>
                              <span id="sBann2">(limit 256 characters)</span>
                          </div>
                          <textarea placeholder="Tell us why you think we choose you to be part of our network of guides." onkeyup="Contar('eBann','sBann','(limit 9800 characters - {CHAR} left)',9800);" rows="5" cols="80" tabindex="18" id="eBann" name="detail"></textarea>
                          <br><span id="sBann">(limit 9800 characters)</span><br><br>
                        
                        </div>
                        
                        <!-------------------------------------------->
                        
                        <div class="col-lg-12">
                            <p class="single-form-row m-0">
                                <label>Order notes</label>
                                <textarea name="notes" placeholder="Notes about your order, e.g. special notes for delivery." class="checkout-mess" rows="2" cols="5"></textarea>
                            </p>
                        </div>
                        
                        
                        
                        
                        <!----------------------------------->
                         <!----------------------------------->
                        <input type="text" class="d-none" name="alternate_email_one">
                        <input type="text" class="d-none" name="alternate_email_two">
                        <input type="text" class="d-none" name="alternate_email_three">
                        <input type="text" class="d-none" name="newsletter">
                        <input type="text" value="0" class="d-none" name="status">
                        <input  type="text" class="d-none"  name="bangla">
                        <input  type="text" class="d-none"  name="english">
                        <input  type="text" class="d-none"  name="arabic">
                        <input  type="text" class="d-none"  name="hindi">
                        <input type="text" class="d-none" name="location_id">
                        <input type="text" class="d-none" name="location">
                        <input type="text" class="d-none" name="guidenumber">
                         
                        <!----------------------------------->
                        
                       
                        <div class="col-lg-12">
                          <div class="submit-holder">
                              <p>
                                  <input tabindex="20" type="checkbox" name="theAcceptance" value="27.11.73">
                                  I have read and accepted the Tour Guide Agreement and Tour Guide Business Principles
                              </p>
                              <input tabindex="21" class="button pl-5 pr-5 square green" type="submit" value="Submit" name="27.11.75">
                          </div>
                        </div>

                    </form>
                    </div>
                    <input type="hidden" name="wosid" value="4ABMnjQO6VyRLfun0r7quM">
                       
                </div>
                    
            </div>
        </div>
    </div>
    
    
 