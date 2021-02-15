
    <!-- Breadcrumb -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="in-breadcrumb">
                <div class="row">
                    <div class="col">
                        <h3>New Traveler Register</h3>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Guide traveler login</li>
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
                                <h4>Become a Traveler</h4>
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
                                <div class="register-form-box">
                                
                                    <div class="form-field">
                                        <label>Full Name <span class="must">*</span></label>
                                        <input tabindex="5" type="text" name="name" require>
                                    </div>
                                    <div class="form-field" id="countryDropdown">
                                        <label>Country <span class="must">*</span></label>
                                        <select name="country">
                                            <option value="">choose...</option>
                                            <option value="0">Afghanistan</option>
                                            <option value="1">Albania</option>
                                            <option value="2">Algeria</option>
                                            <option value="3">Andorra</option>
                                            <option value="4">Angola</option>
                                            <option value="5">Anguilla</option>
                                            <option value="6">Antarctica</option>
                                            <option value="7">Bangladesh</option>
                                        </select>
                                        <select name="country">
                                            <option value="">choose...</option>
                                            <option value="0">Afghanistan</option>
                                            <option value="1">Albania</option>
                                            <option value="2">Algeria</option>
                                            <option value="3">Andorra</option>
                                            <option value="4">Angola</option>
                                            <option value="5">Anguilla</option>
                                            <option value="6">Antarctica</option>
                                            <option value="7">Antigua and Barbuda</option>
                                            <option value="8">Argentina</option>
                                            <option value="9">Armenia</option>
                                            <option value="10">Aruba</option>
                                            <option value="11">Ashmore and Cartier Islands</option>
                                            <option value="12">Australia</option>
                                            <option value="13">Austria</option>
                                            <option value="14">Azerbaijan</option>
                                            <option value="15">Bahamas</option>
                                            <option value="16">Bahrain</option>
                                            <option value="17">Bangladesh</option>
                                            <option value="18">Barbados</option>
                                            <option value="19">Bassas Da India</option>
                                            <option value="20">Belarus</option>
                                            <option value="21">Belgium</option>
                                            <option value="22">Belize</option>
                                            <option value="23">Benin</option>
                                            <option value="24">Bermuda</option>
                                            <option value="25">Bhutan</option>
                                            <option value="26">Bolivia</option>
                                            <option value="27">Bosnia and Herzegovina</option>
                                            <option value="28">Botswana</option>
                                            <option value="29">Bouvet Island</option>
                                            <option value="30">Brazil</option>
                                            <option value="31">British Indian Ocean Territory</option>
                                            <option value="32">British Virgin Islands</option>
                                            <option value="33">Brunei</option>
                                            <option value="34">Bulgaria</option>
                                            <option value="35">Burkina Faso</option>
                                            <option value="36">Burundi</option>
                                            <option value="37">Cambodia</option>
                                            <option value="38">Cameroon</option>
                                            <option value="39">Canada</option>
                                            <option value="40">Canary Islands</option>
                                            <option value="41">Cape Verde</option>
                                            <option value="42">Cayman Islands</option>
                                            <option value="43">Central African Republic</option>
                                            <option value="44">Chad</option>
                                            <option value="45">Chile</option>
                                            <option value="46">China</option>
                                            <option value="47">Christmas Island</option>
                                            <option value="48">Clipperton Island</option>
                                            <option value="49">Cocos Islands</option>
                                            <option value="50">Colombia</option>
                                            <option value="51">Comoros</option>
                                            <option value="52">Congo</option>
                                            <option value="53">Congo Democratic Republic</option>
                                            <option value="54">Cook Islands</option>
                                            <option value="55">Coral Sea Islands</option>
                                            <option value="56">Costa Rica</option>
                                            <option value="57">Côte d'Ivoire</option>
                                            <option value="58">Croatia</option>
                                            <option value="59">Cuba</option>
                                            <option value="60">Curacao</option>
                                            <option value="61">Cyprus</option>
                                            <option value="62">Czech Republic</option>
                                            <option value="63">Denmark</option>
                                            <option value="64">Djibouti</option>
                                            <option value="65">Dominica</option>
                                            <option value="66">Dominican Republic</option>
                                            <option value="67">East Timor</option>
                                            <option value="68">Ecuador</option>
                                            <option value="69">Egypt</option>
                                            <option value="70">El Salvador</option>
                                            <option value="71">Equatorial Guinea</option>
                                            <option value="72">Eritrea</option>
                                            <option value="73">Estonia</option>
                                            <option value="74">Eswatini</option>
                                            <option value="75">Ethiopia</option>
                                            <option value="76">Europa Island</option>
                                            <option value="77">Falkland Islands</option>
                                            <option value="78">Faroe Islands</option>
                                            <option value="79">Fiji</option>
                                            <option value="80">Finland</option>
                                            <option value="81">France</option>
                                            <option value="82">French Guiana</option>
                                            <option value="83">French Polynesia</option>
                                            <option value="84">French Southern and Antarctic Lands</option>
                                            <option value="85">Gabon</option>
                                            <option value="86">Gambia</option>
                                            <option value="87">Gaza Strip</option>
                                            <option value="88">Georgia</option>
                                            <option value="89">Germany</option>
                                            <option value="90">Ghana</option>
                                            <option value="91">Gibraltar</option>
                                            <option value="92">Glorioso Islands</option>
                                            <option value="93">Greece</option>
                                            <option value="94">Greenland</option>
                                            <option value="95">Grenada</option>
                                            <option value="96">Guadeloupe</option>
                                            <option value="97">Guatemala</option>
                                            <option value="98">Guernsey</option>
                                            <option value="99">Guinea</option>
                                            <option value="100">Guinea-Bissau</option>
                                            <option value="101">Guyana</option>
                                            <option value="102">Haiti</option>
                                            <option value="103">Heard Island and Mcdonald Islands</option>
                                            <option value="104">Honduras</option>
                                            <option value="105">Hong Kong</option>
                                            <option value="106">Hungary</option>
                                            <option value="107">Iceland</option>
                                            <option value="108">India</option>
                                            <option value="109">Indonesia</option>
                                            <option value="110">Iran</option>
                                            <option value="111">Iraq</option>
                                            <option value="112">Ireland</option>
                                            <option value="113">Isle of Man</option>
                                            <option value="114">Israel</option>
                                            <option value="115">Italy</option>
                                            <option value="116">Jamaica</option>
                                            <option value="117">Jan Mayen</option>
                                            <option value="118">Japan</option>
                                            <option value="119">Jersey</option>
                                            <option value="120">Jordan</option>
                                            <option value="121">Juan De Nova Island</option>
                                            <option value="122">Kazakhstan</option>
                                            <option value="123">Kenya</option>
                                            <option value="124">Kiribati</option>
                                            <option value="125">Kosovo</option>
                                            <option value="126">Kuwait</option>
                                            <option value="127">Kyrgyzstan</option>
                                            <option value="128">Laos</option>
                                            <option value="129">Latvia</option>
                                            <option value="130">Lebanon</option>
                                            <option value="131">Lesotho</option>
                                            <option value="132">Liberia</option>
                                            <option value="133">Libya</option>
                                            <option value="134">Liechtenstein</option>
                                            <option value="135">Lithuania</option>
                                            <option value="136">Luxembourg</option>
                                            <option value="137">Macau</option>
                                            <option value="138">Macedonia</option>
                                            <option value="139">Madagascar</option>
                                            <option value="140">Malawi</option>
                                            <option value="141">Malaysia</option>
                                            <option value="142">Maldives</option>
                                            <option value="143">Mali</option>
                                            <option value="144">Malta</option>
                                            <option value="145">Marshall Islands</option>
                                            <option value="146">Martinique</option>
                                            <option value="147">Mauritania</option>
                                            <option value="148">Mauritius</option>
                                            <option value="149">Mayotte</option>
                                            <option value="150">Mexico</option>
                                            <option value="151">Micronesia - Federated States of</option>
                                            <option value="152">Moldova</option>
                                            <option value="153">Monaco</option>
                                            <option value="154">Mongolia</option>
                                            <option value="155">Montenegro</option>
                                            <option value="156">Montserrat</option>
                                            <option value="157">Morocco</option>
                                            <option value="158">Mozambique</option>
                                            <option value="159">Myanmar</option>
                                            <option value="160">Namibia</option>
                                            <option value="161">Nauru</option>
                                            <option value="162">Nepal</option>
                                            <option value="163">Netherlands</option>
                                            <option value="164">New Caledonia</option>
                                            <option value="165">New Zealand</option>
                                            <option value="166">Nicaragua</option>
                                            <option value="167">Niger</option>
                                            <option value="168">Nigeria</option>
                                            <option value="169">Niue</option>
                                            <option value="170">Norfolk Island</option>
                                            <option value="171">North Korea</option>
                                            <option value="172">Norway</option>
                                            <option value="173">Oman</option>
                                            <option value="174">Pakistan</option>
                                            <option value="175">Palau</option>
                                            <option value="176">Panama</option>
                                            <option value="177">Papua New Guinea</option>
                                            <option value="178">Paracel Islands</option>
                                            <option value="179">Paraguay</option>
                                            <option value="180">Peru</option>
                                            <option value="181">Philippines</option>
                                            <option value="182">Pitcairn Islands</option>
                                            <option value="183">Poland</option>
                                            <option value="184">Portugal</option>
                                            <option value="185">Qatar</option>
                                            <option value="186">Réunion</option>
                                            <option value="187">Romania</option>
                                            <option value="188">Russia</option>
                                            <option value="189">Rwanda</option>
                                            <option value="190">Saint-Barthélemy</option>
                                            <option value="191">Saint Helena</option>
                                            <option value="192">Saint Kitts and Nevis</option>
                                            <option value="193">Saint Lucia</option>
                                            <option value="194">Saint Martin</option>
                                            <option value="195">Saint Pierre and Miquelon</option>
                                            <option value="196">Saint Vincent and The Grenadines</option>
                                            <option value="197">Samoa</option>
                                            <option value="198">San Marino</option>
                                            <option value="199">Sao Tome and Principe</option>
                                            <option value="200">Saudi Arabia</option>
                                            <option value="201">Senegal</option>
                                            <option value="202">Serbia</option>
                                            <option value="203">Seychelles</option>
                                            <option value="204">Sierra Leone</option>
                                            <option value="205">Singapore</option>
                                            <option value="206">Slovakia</option>
                                            <option value="207">Slovenia</option>
                                            <option value="208">Solomon Islands</option>
                                            <option value="209">Somalia</option>
                                            <option value="210">South Africa</option>
                                            <option value="211">South Georgia and The South Sandwich Islands</option>
                                            <option value="212">South Korea</option>
                                            <option value="213">Spain</option>
                                            <option value="214">Spratly Islands</option>
                                            <option value="215">Sri Lanka</option>
                                            <option value="216">Sudan</option>
                                            <option value="217">Suriname</option>
                                            <option value="218">Svalbard</option>
                                            <option value="219">Sweden</option>
                                            <option value="220">Switzerland</option>
                                            <option value="221">Syria</option>
                                            <option value="222">Taiwan</option>
                                            <option value="223">Tajikistan</option>
                                            <option value="224">Tanzania</option>
                                            <option value="225">Thailand</option>
                                            <option value="226">Togo</option>
                                            <option value="227">Tokelau</option>
                                            <option value="228">Tonga</option>
                                            <option value="229">Trinidad and Tobago</option>
                                            <option value="230">Tromelin Island</option>
                                            <option value="231">Tunisia</option>
                                            <option value="232">Turkey</option>
                                            <option value="233">Turkmenistan</option>
                                            <option value="234">Turks and Caicos Islands</option>
                                            <option value="235">Tuvalu</option>
                                            <option value="236">Uganda</option>
                                            <option value="237">Ukraine</option>
                                            <option value="238">United Arab Emirates</option>
                                            <option value="239">United Kingdom</option>
                                            <option value="240">United States</option>
                                            <option value="241">Uruguay</option>
                                            <option value="242">Uzbekistan</option>
                                            <option value="243">Vanuatu</option>
                                            <option value="244">Vatican City</option>
                                            <option value="245">Venezuela</option>
                                            <option value="246">Vietnam</option>
                                            <option value="247">Wallis and Futuna</option>
                                            <option value="248">West Bank</option>
                                            <option value="249">Western Sahara</option>
                                            <option value="250">Yemen</option>
                                            <option value="251">Zambia</option>
                                            <option value="252">Zimbabwe</option>
                                            </select>
                                        
                                    </div>
                                    <div class="form-field">
                                        <label>Email  <span class="must">*</span></label>
                                        <input tabindex="7" type="email" name="email">
                                    </div>
                                    <!--  <div class="form-field">
                                        <label>Confirm Email</label>
                                        <input tabindex="8" type="text" name="theConfirmEmail">
                                    </div> -->
                                    <ul class="accordion css-accordion">
                                        <li class="accordion-item">
                                            <!-- <input class="accordion-item-input" type="checkbox" name="accordion" id="item1"> -->
                                            <label for="item1" class="accordion-item-hd">Alternate Emails</label>
                                            <div class="accordion-item-bd">Alternate Email 1<div class="form-field"><input tabindex="9" type="text" name="alternate_email_one"></div>
                                            </div>
                                            
                                        </li>
                                    </ul>

                                    <div class="form-field">
                                        <label>Choose a Password <span class="must">*</span></label>
                                        <input type="password" tabindex="12" name="password">
                                    </div>
                                    <div class="form-field">
                                        <label>Re-enter Password <span class="must">*</span></label>
                                        <input type="password" tabindex="13" name="password_confirmation">
                                    </div>
                                    <div class="submit-holder">
                                        <br>
                                        <p>Once you've registered, you can add additional optional contact information such as address and telephone number.</p>
                                        <div class="text-left">
                                            <input tabindex="14" class="button square green" type="submit" value="Register" name="25.3.7.29">
                                        </div>
                                    </div>
                                    <input type="hidden" name="newsletter" value="newsletter">
                                </div>
                            </div>
                            <input type="hidden" name="wosid" value="9E9q7Gsr2zSDm0V6gJe5l0">
                            
                        </form>
                        
                    </div>
                </div>
            
            </div>
            
        </div>
    </div>
    
  