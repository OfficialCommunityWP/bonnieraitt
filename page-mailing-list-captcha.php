<?php

/*
    Template Name: Mailing List Captcha
*/

get_header();  ?>

<!--ATTN: THEME NAME NEEDS TO BE EDITED HERE -->
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="/wp-content/themes/bonnieraitt/js/working-js/jquery.validate.js"></script>

<script type="text/javascript">
    SubmittingForm=function() {
        VerifyRequiredFields()
    }

    $(document).ready(function() {
        $("#newsletterForm").validate({
            submitHandler:function(form) {
                SubmittingForm();
            },
            rules: {
                name: "required",       // simple rule, converted to {required:true}
                email: {                // compound rule
                    required: true,
                    email: true
                },
                campo1:{
                    required: true,
                    },
                campo2:{
                    required: true,
                    },
                campo4:{
                    required: true,
                    },
                campo5:{
                    required: true,
                    },
                country:{
                    required: true,
                    }
            },
            messages: {
                email: "Please enter your email address.",
                campo1: "Please enter your first name.",
                campo2:"Please enter your last name.",
                campo4:"Please enter your city.",
                campo5:"Please enter your State/Region.",
                country:"Please select your country."
            }
        });
    });
</script>

<main class="main general-page" id="main" role="main">
    <div class="container">
        <h2 class="content-title"><?php the_title(); ?></h2>
        <div class="mailing-list-section">

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <div class="clearfix">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>

            <form action="https://occ.emailsp.com/Frontend/subscribe.aspx" id="newsletterForm">
                <div class="mailing-list">
                    <div class="mailing-list-left">
                        <input value="101" name="list" type="hidden">
                        <!-- MANDATORY INPUT -->
                        <!-- this value must equal your list ID from mailup -->

                        <input value="" name="group" type="hidden">
                        <!--OPTIONAL INPUT -->
                        <!-- in addition to <input name="list"> we can also include a group within the mailup list 
                            
                        remove this <input name="group"> if not used
                        -->
     

                        <div class="inputs clearfix">
                            <label for="email">Email</label>
                            <input id="email" name="email">
                        </div>
                        <!-- inputs -->

                        <div class="inputs clearfix">
                            <label for="Campo1">First Name</label>
                            <input id="Campo1" maxlength="100" name="campo1"> 
                        </div>
                        <!-- inputs -->

                        <div class="inputs clearfix">
                            <label for="Campo2">Last Name</label>
                            <input id="Campo2" maxlength="100" name="campo2"> 
                        </div>
                        <!-- inputs -->

                        <div class="inputs clearfix">
                            <label for="Campo4">City</label>
                            <input id="Campo4" maxlength="100" name="campo4">
                        </div>
                        <!-- inputs -->

                        <div class="inputs clearfix">
                            <label for="Campo5">State/Region</label>
                            <input id="Campo5" name="campo5" maxlength="100">
                        </div>
                        <!-- inputs -->

                        <div class="inputs clearfix">
                            <label for="country">Country</label>
                            <select id="country" name="country"> 
                                <option selected="">Select Country</option>
                                <option value="Canada">Canada</option> 
                                <option value="United States">United States</option> 
                                <option value="United Kingdom">United Kingdom</option> 
                                <option value="Afghanistan">Afghanistan</option> 
                                <option value="Albania">Albania</option> 
                                <option value="Algeria">Algeria</option> 
                                <option value="American Samoa">American Samoa</option> 
                                <option value="Andorra">Andorra</option> 
                                <option value="Angola">Angola</option> 
                                <option value="Anguilla">Anguilla</option> 
                                <option value="Antarctica">Antarctica</option> 
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
                                <option value="Argentina">Argentina</option> 
                                <option value="Armenia">Armenia</option> 
                                <option value="Aruba">Aruba</option> 
                                <option value="Australia">Australia</option> 
                                <option value="Austria">Austria</option> 
                                <option value="Azerbaijan">Azerbaijan</option> 
                                <option value="Bahamas">Bahamas</option> 
                                <option value="Bahrain">Bahrain</option> 
                                <option value="Bangladesh">Bangladesh</option> 
                                <option value="Barbados">Barbados</option> 
                                <option value="Belarus">Belarus</option> 
                                <option value="Belgium">Belgium</option> 
                                <option value="Belize">Belize</option> 
                                <option value="Benin">Benin</option> 
                                <option value="Bermuda">Bermuda</option> 
                                <option value="Bhutan">Bhutan</option> 
                                <option value="Bolivia">Bolivia</option> 
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
                                <option value="Botswana">Botswana</option> 
                                <option value="Bouvet Island">Bouvet Island</option> 
                                <option value="Brazil">Brazil</option> 
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
                                <option value="Brunei Darussalam">Brunei Darussalam</option> 
                                <option value="Bulgaria">Bulgaria</option> 
                                <option value="Burkina Faso">Burkina Faso</option> 
                                <option value="Burundi">Burundi</option> 
                                <option value="Cambodia">Cambodia</option> 
                                <option value="Cameroon">Cameroon</option>  
                                <option value="Cape Verde">Cape Verde</option> 
                                <option value="Cayman Islands">Cayman Islands</option> 
                                <option value="Central African Republic">Central African Republic</option> 
                                <option value="Chad">Chad</option> 
                                <option value="Chile">Chile</option> 
                                <option value="China">China</option> 
                                <option value="Christmas Island">Christmas Island</option> 
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
                                <option value="Colombia">Colombia</option> 
                                <option value="Comoros">Comoros</option> 
                                <option value="Congo">Congo</option> 
                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
                                <option value="Cook Islands">Cook Islands</option> 
                                <option value="Costa Rica">Costa Rica</option> 
                                <option value="Cote D'ivoire">Cote D'ivoire</option> 
                                <option value="Croatia">Croatia</option> 
                                <option value="Cuba">Cuba</option> 
                                <option value="Cyprus">Cyprus</option> 
                                <option value="Czech Republic">Czech Republic</option> 
                                <option value="Denmark">Denmark</option> 
                                <option value="Djibouti">Djibouti</option> 
                                <option value="Dominica">Dominica</option> 
                                <option value="Dominican Republic">Dominican Republic</option> 
                                <option value="Ecuador">Ecuador</option> 
                                <option value="Egypt">Egypt</option> 
                                \<option value="El Salvador">El Salvador</option> 
                                <option value="Equatorial Guinea">Equatorial Guinea</option> 
                                <option value="Eritrea">Eritrea</option> 
                                <option value="Estonia">Estonia</option> 
                                <option value="Ethiopia">Ethiopia</option> 
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
                                <option value="Faroe Islands">Faroe Islands</option> 
                                <option value="Fiji">Fiji</option> <option value="Finland">Finland</option> 
                                <option value="France">France</option> 
                                <option value="French Guiana">French Guiana</option> 
                                <option value="French Polynesia">French Polynesia</option> 
                                <option value="French Southern Territories">French Southern Territories</option> 
                                <option value="Gabon">Gabon</option> 
                                <option value="Gambia">Gambia</option> 
                                <option value="Georgia">Georgia</option> 
                                <option value="Germany">Germany</option> 
                                <option value="Ghana">Ghana</option> 
                                <option value="Gibraltar">Gibraltar</option> 
                                <option value="Greece">Greece</option> 
                                <option value="Greenland">Greenland</option> 
                                <option value="Grenada">Grenada</option> 
                                <option value="Guadeloupe">Guadeloupe</option> 
                                <option value="Guam">Guam</option> 
                                <option value="Guatemala">Guatemala</option> 
                                <option value="Guinea">Guinea</option> 
                                <option value="Guinea-bissau">Guinea-bissau</option> 
                                <option value="Guyana">Guyana</option> 
                                <option value="Haiti">Haiti</option> 
                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
                                <option value="Honduras">Honduras</option> 
                                <option value="Hong Kong">Hong Kong</option> 
                                <option value="Hungary">Hungary</option> 
                                <option value="Iceland">Iceland</option> 
                                <option value="India">India</option> 
                                <option value="Indonesia">Indonesia</option> 
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
                                <option value="Iraq">Iraq</option> 
                                <option value="Ireland">Ireland</option> 
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italia</option> 
                                <option value="Jamaica">Jamaica</option> 
                                <option value="Japan">Japan</option> 
                                <option value="Jordan">Jordan</option> 
                                <option value="Kazakhstan">Kazakhstan</option> 
                                <option value="Kenya">Kenya</option> 
                                <option value="Kiribati">Kiribati</option> 
                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
                                <option value="Korea, Republic of">Korea, Republic of</option> 
                                <option value="Kuwait">Kuwait</option> 
                                <option value="Kyrgyzstan">Kyrgyzstan</option> 
                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
                                <option value="Latvia">Latvia</option> 
                                <option value="Lebanon">Lebanon</option> 
                                <option value="Lesotho">Lesotho</option> 
                                <option value="Liberia">Liberia</option> 
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                                <option value="Liechtenstein">Liechtenstein</option> 
                                <option value="Lithuania">Lithuania</option> 
                                <option value="Luxembourg">Luxembourg</option> 
                                <option value="Macao">Macao</option> 
                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> <option value="Madagascar">Madagascar</option> 
                                <option value="Malawi">Malawi</option> 
                                <option value="Malaysia">Malaysia</option> 
                                <option value="Maldives">Maldives</option> 
                                <option value="Mali">Mali</option> 
                                <option value="Malta">Malta</option> 
                                <option value="Marshall Islands">Marshall Islands</option> 
                                <option value="Martinique">Martinique</option> 
                                <option value="Mauritania">Mauritania</option> 
                                <option value="Mauritius">Mauritius</option> 
                                <option value="Mayotte">Mayotte</option> 
                                <option value="Mexico">Mexico</option> 
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                                <option value="Moldova, Republic of">Moldova, Republic of</option> 
                                <option value="Monaco">Monaco</option> 
                                <option value="Mongolia">Mongolia</option> 
                                <option value="Montserrat">Montserrat</option> 
                                <option value="Morocco">Morocco</option> 
                                <option value="Mozambique">Mozambique</option> 
                                <option value="Myanmar">Myanmar</option> 
                                <option value="Namibia">Namibia</option> 
                                <option value="Nauru">Nauru</option> 
                                <option value="Nepal">Nepal</option> 
                                <option value="Netherlands">Netherlands</option> 
                                <option value="Netherlands Antilles">Netherlands Antilles</option> 
                                <option value="New Caledonia">New Caledonia</option> 
                                <option value="New Zealand">New Zealand</option> 
                                <option value="Nicaragua">Nicaragua</option> 
                                <option value="Niger">Niger</option> 
                                <option value="Nigeria">Nigeria</option> 
                                <option value="Niue">Niue</option> 
                                <option value="Norfolk Island">Norfolk Island</option> 
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
                                <option value="Norway">Norway</option> 
                                <option value="Oman">Oman</option> 
                                <option value="Pakistan">Pakistan</option> 
                                <option value="Palau">Palau</option> 
                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
                                <option value="Panama">Panama</option> 
                                <option value="Papua New Guinea">Papua New Guinea</option> 
                                <option value="Paraguay">Paraguay</option> 
                                <option value="Peru">Peru</option> 
                                <option value="Philippines">Philippines</option> 
                                <option value="Pitcairn">Pitcairn</option> 
                                <option value="Poland">Poland</option> 
                                <option value="Portugal">Portugal</option> 
                                <option value="Puerto Rico">Puerto Rico</option> 
                                <option value="Qatar">Qatar</option> 
                                <option value="Reunion">Reunion</option> 
                                <option value="Romania">Romania</option> 
                                <option value="Russian Federation">Russian Federation</option> 
                                <option value="Rwanda">Rwanda</option> 
                                <option value="Saint Helena">Saint Helena</option> 
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                <option value="Saint Lucia">Saint Lucia</option> 
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                                <option value="Samoa">Samoa</option> 
                                <option value="San Marino">San Marino</option> 
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                <option value="Saudi Arabia">Saudi Arabia</option> 
                                <option value="Senegal">Senegal</option> 
                                <option value="Serbia and Montenegro">Serbia and Montenegro</option> 
                                <option value="Seychelles">Seychelles</option> 
                                <option value="Sierra Leone">Sierra Leone</option> 
                                <option value="Singapore">Singapore</option> 
                                <option value="Slovakia">Slovakia</option> 
                                <option value="Slovenia">Slovenia</option> 
                                <option value="Solomon Islands">Solomon Islands</option> 
                                <option value="Somalia">Somalia</option> 
                                <option value="South Africa">South Africa</option> 
                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
                                <option value="Spain">Spain</option> 
                                <option value="Sri Lanka">Sri Lanka</option> 
                                <option value="Sudan">Sudan</option> 
                                <option value="Suriname">Suriname</option> 
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                                <option value="Swaziland">Swaziland</option> 
                                <option value="Sweden">Sweden</option> 
                                <option value="Switzerland">Switzerland</option> 
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                                <option value="Taiwan, Province of China">Taiwan, Province of China</option> 
                                <option value="Tajikistan">Tajikistan</option> 
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
                                <option value="Thailand">Thailand</option> 
                                <option value="Timor-leste">Timor-leste</option> 
                                <option value="Togo">Togo</option> 
                                <option value="Tokelau">Tokelau</option> 
                                <option value="Tonga">Tonga</option> 
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                                <option value="Tunisia">Tunisia</option> 
                                <option value="Turkey">Turkey</option> 
                                <option value="Turkmenistan">Turkmenistan</option> 
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                                <option value="Tuvalu">Tuvalu</option> 
                                <option value="Uganda">Uganda</option> 
                                <option value="Ukraine">Ukraine</option> 
                                <option value="United Arab Emirates">United Arab Emirates</option> 
                                <option value="United Kingdom">United Kingdom</option> 
                                <option value="United States">United States</option> 
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
                                <option value="Uruguay">Uruguay</option> 
                                <option value="Uzbekistan">Uzbekistan</option> 
                                <option value="Vanuatu">Vanuatu</option> 
                                <option value="Venezuela">Venezuela</option> 
                                <option value="Viet Nam">Viet Nam</option> 
                                <option value="Virgin Islands, British">Virgin Islands, British</option> 
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                                <option value="Wallis and Futuna">Wallis and Futuna</option> 
                                <option value="Western Sahara">Western Sahara</option> 
                                <option value="Yemen">Yemen</option> 
                                <option value="Zambia">Zambia</option> 
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                        <!-- inputs -->
                    </div> 
                    <!-- mailing-list-left -->

                    
                </div>   
                <!-- mailing-list -->
               
                <div class="mailing-list-submit">
                    <p>By joining the BonnieRaitt.com mailing list, I agree to the BonnieRaitt.com <a href="/terms-of-use">Terms of Use</a>, <a href="/privacy-policy">Privacy</a> and <a href="/cookies">Cookies</a> Policies.</p>
                    <div class="inputs clearfix submitButton">
                        <input 
                            class="g-recaptcha" 
                            data-sitekey="6LdAxh0oAAAAAE1lFFX9Tfqz2BfZ-qNpRNM5kZ_m" 
                            data-callback='onSubmit' 
                            data-action='submit' 
                            onClick="return VerifyRequiredFields();" 
                            value="Submit" 
                            name="Submit" 
                            type="submit" /> 
                    </div>
                    <!-- inputs -->
                </div>
                <!-- mailing-list-submit -->
            </form>
        </div>
        <!-- mailing-list-section -->
    </div>
    <!-- container -->
</main>

<script>
    console.log('working');
   function onSubmit(token) {
     document.getElementById("newsletterForm").submit();
   }
 </script>

<?php get_footer(); ?>