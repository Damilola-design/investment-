@extends('customer.layouts.app')


@section('content')
<div class=" row" style="margin-top: 100px">
    <div class="col-md-2 ">
        @component('customer.layouts.menus.sidebar')

        @endcomponent
    </div>
    <div class=" col-md-8 col-sm-12 main_menu_side hidden-print main_menu">
        <div class="mb-5 col-12 col-sm-12 py-lg-5">
            <div class="position-relative">
                <div class="container shadow-lg card h-100">
                    <div class="">
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <div class="">
                                    <div class="mt-5 h2 text-info bold">Gold Plan</div>
                                    <p class="">The Nigerian Government forbids any online transaction above 1 million naira per investor, thus the minimum amount you can do online is N1,000,000
                                    </p>
                                    @if($message= Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                    @endif
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('pay') }}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <div class="form-group row">
                                                <label for="full_name" class=" col-form-label">Full Name <span class="text-danger">*</span></label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input id="full_name" type="text" class=" form-control{{ $errors->has('full_name') ? ' is-invalid' : '' }}" name="full_name" value="" required autofocus>
                                                    @if ($errors->has('full_name'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('full_name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email" class="col-md-4 col-form-label">Email<span class="text-danger">*</span></label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value= "{{ old('email') ?? Auth::user()->email}}" placeholder=""  >
                                                    @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                         <div class="form-group row">
                                                <label for="amount" class="col-md-4 col-form-label">Amount (NGN)<span class="text-danger">*</span></label>
                                                <p>Minimum payable amount <span class="text-primary">NGN 1,000,000</span></p>
                                                <div class="col-md-12 col-sm-12">
                                                    <input id="amount" type="amount" class="form-control" name="amount" placeholder="" value="1,000,000" required>
                                                    @if ($errors->has('amount'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('amount') }}</strong>
                                                    </span>
                                                @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="plan" class="col-md-4 col-form-label">Investment Plan<span class="text-danger">*</span></label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input id="plan" type="text" class="form-control{{ $errors->has('plan') ? ' is-invalid' : '' }}" name="plan" value="Gold Plan"  required autofocus>
                                                    @if ($errors->has('plan'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('plan') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="Period" class="col-md-4 col-form-label">Maturity Period<span class="text-danger">*</span></label>
                                                <div class="col-md-12 col-sm-12">
                                                    <select name="Period" id="" class="form-control" >
                                                        <option value="6 Months - 15%" >6 Months - 15%</option>
                                                        <option value="12 Months - 30%" >12 Months - 30%</option>
                                                        <option value="18 Months - 45%" >18 Months - 45%</option>
                                                        <option value="24 Months - 60%" >24 Months - 60%</option>
                                                    </select>
                                                    @if ($errors->has('Period'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('Period') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div>
                                                <label for="country" class="col-md-4 col-form-label">Country<span class="text-danger">*</span></label>
                                            <select class="form-control" name="country" required="required">
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value=" Albania"> Albania</option>
                                                <option value=" Algeria"> Algeria</option>
                                                <option value=" American Samoa"> American Samoa</option>
                                                <option value=" Andorra"> Andorra</option>
                                                <option value=" Angola"> Angola</option>
                                                <option value=" Anguilla"> Anguilla</option>
                                                <option value=" Antarctica"> Antarctica</option>
                                                <option value=" Antigua and Barbuda"> Antigua and Barbuda</option>
                                                <option value=" Argentina"> Argentina</option>
                                                <option value=" Armenia"> Armenia</option>
                                                <option value=" Aruba"> Aruba</option>
                                                <option value=" Australia"> Australia</option>
                                                <option value=" Austria"> Austria</option>
                                                <option value=" Azerbaijan"> Azerbaijan</option>
                                                <option value=" Bahamas"> Bahamas</option>
                                                <option value=" Bahrain"> Bahrain</option>
                                                <option value=" Bangladesh"> Bangladesh</option>
                                                <option value=" Barbados"> Barbados</option><option value=" Belarus"> Belarus</option><option value=" Belgium"> Belgium</option><option value=" Belize"> Belize</option><option value=" Benin"> Benin</option><option value=" Bermuda"> Bermuda</option><option value=" Bhutan"> Bhutan</option><option value=" Bolivia"> Bolivia</option><option value=" Bosnia and Herzegovina"> Bosnia and Herzegovina</option><option value=" Botswana"> Botswana</option><option value=" Bouvet Island"> Bouvet Island</option><option value=" Brazil"> Brazil</option><option value=" British Indian Ocean Territory"> British Indian Ocean Territory</option><option value=" Brunei Darussalam"> Brunei Darussalam</option><option value=" Bulgaria"> Bulgaria</option><option value=" Burkina Faso"> Burkina Faso</option><option value=" Burundi"> Burundi</option><option value=" Cambodia"> Cambodia</option><option value=" Cameroon"> Cameroon</option><option value=" Canada"> Canada</option><option value=" Cape Verde"> Cape Verde</option><option value=" Cayman Islands"> Cayman Islands</option><option value=" Central African Republic"> Central African Republic</option><option value=" Chad"> Chad</option><option value=" Chile"> Chile</option><option value=" China"> China</option><option value=" Christmas Island"> Christmas Island</option><option value=" Cocos (Keeling) Islands"> Cocos (Keeling) Islands</option><option value=" Colombia"> Colombia</option><option value=" Comoros"> Comoros</option><option value=" Congo"> Congo</option><option value=" Congo"> Congo</option><option value=" The Democratic Republic of The"> The Democratic Republic of The</option><option value=" Cook Islands"> Cook Islands</option><option value=" Costa Rica"> Costa Rica</option><option value=" Cote D’ivoire"> Cote D’ivoire</option><option value=" Croatia"> Croatia</option><option value=" Cuba"> Cuba</option><option value=" Cyprus"> Cyprus</option><option value=" Czech Republic"> Czech Republic</option><option value=" Denmark"> Denmark</option><option value=" Djibouti"> Djibouti</option><option value=" Dominica"> Dominica</option><option value=" Dominican Republic"> Dominican Republic</option><option value=" Ecuador"> Ecuador</option><option value=" Egypt"> Egypt</option><option value=" El Salvador"> El Salvador</option><option value=" Equatorial Guinea"> Equatorial Guinea</option><option value=" Eritrea"> Eritrea</option><option value=" Estonia"> Estonia</option><option value=" Ethiopia"> Ethiopia</option><option value=" Falkland Islands (Malvinas)"> Falkland Islands (Malvinas)</option><option value=" Faroe Islands"> Faroe Islands</option><option value=" Fiji"> Fiji</option><option value=" Finland"> Finland</option><option value=" France"> France</option><option value=" French Guiana"> French Guiana</option><option value=" French Polynesia"> French Polynesia</option><option value=" French Southern Territories"> French Southern Territories</option><option value=" Gabon"> Gabon</option><option value=" Gambia"> Gambia</option><option value=" Georgia"> Georgia</option><option value=" Germany"> Germany</option><option value=" Ghana"> Ghana</option><option value=" Gibraltar"> Gibraltar</option><option value=" Greece"> Greece</option><option value=" Greenland"> Greenland</option><option value=" Grenada"> Grenada</option><option value=" Guadeloupe"> Guadeloupe</option><option value=" Guam"> Guam</option><option value=" Guatemala"> Guatemala</option><option value=" Guinea"> Guinea</option><option value=" Guinea-bissau"> Guinea-bissau</option><option value=" Guyana"> Guyana</option><option value=" Haiti"> Haiti</option><option value=" Heard Island and Mcdonald Islands"> Heard Island and Mcdonald Islands</option><option value=" Holy See (Vatican City State)"> Holy See (Vatican City State)</option><option value=" Honduras"> Honduras</option><option value=" Hong Kong"> Hong Kong</option><option value=" Hungary"> Hungary</option><option value=" Iceland"> Iceland</option><option value=" India"> India</option><option value=" Indonesia"> Indonesia</option><option value=" Iran"> Iran</option><option value=" Islamic Republic of"> Islamic Republic of</option><option value=" Iraq"> Iraq</option><option value=" Ireland"> Ireland</option><option value=" Israel"> Israel</option><option value=" Italy"> Italy</option><option value=" Jamaica"> Jamaica</option><option value=" Japan"> Japan</option><option value=" Jordan"> Jordan</option><option value=" Kazakhstan"> Kazakhstan</option><option value=" Kenya"> Kenya</option><option value=" Kiribati"> Kiribati</option><option value=" Korea"> Korea</option><option value=" Democratic People’s Republic of"> Democratic People’s Republic of</option><option value=" Korea"> Korea</option><option value=" Republic of"> Republic of</option><option value=" Kuwait"> Kuwait</option><option value=" Kyrgyzstan"> Kyrgyzstan</option><option value=" Lao People’s Democratic Republic"> Lao People’s Democratic Republic</option><option value=" Latvia"> Latvia</option><option value=" Lebanon"> Lebanon</option><option value=" Lesotho"> Lesotho</option><option value=" Liberia"> Liberia</option><option value=" Libyan Arab Jamahiriya"> Libyan Arab Jamahiriya</option><option value=" Liechtenstein"> Liechtenstein</option><option value=" Lithuania"> Lithuania</option><option value=" Luxembourg"> Luxembourg</option><option value=" Macao"> Macao</option><option value=" Macedonia"> Macedonia</option><option value=" The Former Yugoslav Republic of"> The Former Yugoslav Republic of</option><option value=" Madagascar"> Madagascar</option><option value=" Malawi"> Malawi</option><option value=" Malaysia"> Malaysia</option><option value=" Maldives"> Maldives</option><option value=" Mali"> Mali</option><option value=" Malta"> Malta</option><option value=" Marshall Islands"> Marshall Islands</option><option value=" Martinique"> Martinique</option><option value=" Mauritania"> Mauritania</option><option value=" Mauritius"> Mauritius</option><option value=" Mayotte"> Mayotte</option><option value=" Mexico"> Mexico</option><option value=" Micronesia"> Micronesia</option><option value=" Federated States of"> Federated States of</option><option value=" Moldova"> Moldova</option><option value=" Republic of"> Republic of</option><option value=" Monaco"> Monaco</option><option value=" Mongolia"> Mongolia</option><option value=" Montserrat"> Montserrat</option><option value=" Morocco"> Morocco</option><option value=" Mozambique"> Mozambique</option><option value=" Myanmar"> Myanmar</option><option value=" Namibia"> Namibia</option><option value=" Nauru"> Nauru</option><option value=" Nepal"> Nepal</option><option value=" Netherlands"> Netherlands</option><option value=" Netherlands Antilles"> Netherlands Antilles</option><option value=" New Caledonia"> New Caledonia</option><option value=" New Zealand"> New Zealand</option><option value=" Nicaragua"> Nicaragua</option><option value=" Niger"> Niger</option><option value=" Nigeria"> Nigeria</option><option value=" Niue"> Niue</option><option value=" Norfolk Island"> Norfolk Island</option><option value=" Northern Mariana Islands"> Northern Mariana Islands</option><option value=" Norway"> Norway</option><option value=" Oman"> Oman</option><option value=" Pakistan"> Pakistan</option><option value=" Palau"> Palau</option><option value=" Palestinian Territory"> Palestinian Territory</option><option value=" Occupied"> Occupied</option><option value=" Panama"> Panama</option><option value=" Papua New Guinea"> Papua New Guinea</option><option value=" Paraguay"> Paraguay</option><option value=" Peru"> Peru</option><option value=" Philippines"> Philippines</option><option value=" Pitcairn"> Pitcairn</option><option value=" Poland"> Poland</option><option value=" Portugal"> Portugal</option><option value=" Puerto Rico"> Puerto Rico</option><option value=" Qatar"> Qatar</option><option value=" Reunion"> Reunion</option><option value=" Romania"> Romania</option><option value=" Russian Federation"> Russian Federation</option><option value=" Rwanda"> Rwanda</option><option value=" Saint Helena"> Saint Helena</option><option value=" Saint Kitts and Nevis"> Saint Kitts and Nevis</option><option value=" Saint Lucia"> Saint Lucia</option><option value=" Saint Pierre and Miquelon"> Saint Pierre and Miquelon</option><option value=" Saint Vincent and The Grenadines"> Saint Vincent and The Grenadines</option><option value=" Samoa"> Samoa</option><option value=" San Marino"> San Marino</option><option value=" Sao Tome and Principe"> Sao Tome and Principe</option><option value=" Saudi Arabia"> Saudi Arabia</option><option value=" Senegal"> Senegal</option><option value=" Serbia and Montenegro"> Serbia and Montenegro</option><option value=" Seychelles"> Seychelles</option><option value=" Sierra Leone"> Sierra Leone</option><option value=" Singapore"> Singapore</option><option value=" Slovakia"> Slovakia</option><option value=" Slovenia"> Slovenia</option><option value=" Solomon Islands"> Solomon Islands</option><option value=" Somalia"> Somalia</option><option value=" South Africa"> South Africa</option><option value=" South Georgia and The South Sandwich Islands"> South Georgia and The South Sandwich Islands</option><option value=" Spain"> Spain</option><option value=" Sri Lanka"> Sri Lanka</option><option value=" Sudan"> Sudan</option><option value=" Suriname"> Suriname</option><option value=" Svalbard and Jan Mayen"> Svalbard and Jan Mayen</option><option value=" Swaziland"> Swaziland</option><option value=" Sweden"> Sweden</option><option value=" Switzerland"> Switzerland</option><option value=" Syrian Arab Republic"> Syrian Arab Republic</option><option value=" Taiwan"> Taiwan</option><option value=" Province of China"> Province of China</option><option value=" Tajikistan"> Tajikistan</option><option value=" Tanzania"> Tanzania</option><option value=" United Republic of"> United Republic of</option><option value=" Thailand"> Thailand</option><option value=" Timor-leste"> Timor-leste</option><option value=" Togo"> Togo</option><option value=" Tokelau"> Tokelau</option><option value=" Tonga"> Tonga</option><option value=" Trinidad and Tobago"> Trinidad and Tobago</option><option value=" Tunisia"> Tunisia</option><option value=" Turkey"> Turkey</option><option value=" Turkmenistan"> Turkmenistan</option><option value=" Turks and Caicos Islands"> Turks and Caicos Islands</option><option value=" Tuvalu"> Tuvalu</option><option value=" Uganda"> Uganda</option><option value=" Ukraine"> Ukraine</option><option value=" United Arab Emirates"> United Arab Emirates</option><option value=" United Kingdom"> United Kingdom</option><option value=" United States"> United States</option><option value=" United States Minor Outlying Islands"> United States Minor Outlying Islands</option><option value=" Uruguay"> Uruguay</option><option value=" Uzbekistan"> Uzbekistan</option><option value=" Vanuatu"> Vanuatu</option><option value=" Venezuela"> Venezuela</option><option value=" Viet Nam"> Viet Nam</option><option value=" Virgin Islands"> Virgin Islands</option><option value=" British"> British</option><option value=" Virgin Islands"> Virgin Islands</option><option value=" U.S."> U.S.</option><option value=" Wallis and Futuna"> Wallis and Futuna</option><option value=" Western Sahara"> Western Sahara</option><option value=" Yemen"> Yemen</option><option value=" Zambia"> Zambia</option><option value=" Zimbabwe"> Zimbabwe</option>" </select>
                                            </div>
                                            <div class="form-group row">
                                                <label for="address" class="col-md-4 col-form-label ">Address<span class="text-danger">*</span></label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" placeholder=" Address" required>
                                                    @if ($errors->has('address'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('address') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="number" class="col-md-4 col-form-label">Mobile Number<span class="text-danger">*</label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input id="number" type="number" class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" name="number" value="{{ old('number') }}" placeholder="Mobile Number" required>
                                                    @if ($errors->has('number'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('number') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="valid_id" class="col-md-4 col-form-label ">Valid ID Card<span class="text-danger">*</span></label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input id="valid_id" type="file" class="form-control{{ $errors->has('valid_id') ? ' is-invalid' : '' }}" name="valid_id" value="{{ old('valid_id') }}" placeholder=" valid_id" required >
                                                    @if ($errors->has('valid_id'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('valid_id') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="passport" class="col-md-4 col-form-label ">Passport Photograph<span class="text-danger">*</span></label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input id="passport" type="file" class="form-control{{ $errors->has('passport') ? ' is-invalid' : '' }}" name="passport" value="{{ old('passport') }}" placeholder=" passport" required >
                                                    @if ($errors->has('passport'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('passport') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                        <div class="form-group row">
                                            <label for="status" class="col-md-4 col-form-label">Insurance Information</label>
                                            <p class="h5">Parental Status Of Health </p>
                                            <div class="col-md-12 col-sm-12">
                                                <input id="status" type="status" class="form-control" name="status" placeholder="Enter Preantal Status Of Health" value="" required>
                                                @if ($errors->has('status'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('status') }}</strong>
                                                </span>
                                            @endif
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="checkbox" class=" col-form-label"><span class="h5">Any Deformity ?</span></label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="deformity" value="Yes">
                                                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="deformity" value="No">
                                                <label class="form-check-label" for="inlineCheckbox2">No</label>
                                              </div>
                                                @if ($errors->has('checkbox'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('checkbox') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                            <div class="form-group row">
                                                <label for="details" class="col-md-4 col-form-label" >If yes state details</label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input id="details" type="text" class="form-control{{ $errors->has('details') ? ' is-invalid' : '' }}" name="details" value="{{ old('details') }}" placeholder="Enter If Yes Details" required>
                                                    @if ($errors->has('details'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('details') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="ill" class="col col-form-label" >Have You Been ill In The Past 5 Years</label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input id="ill" type="text" class="form-control{{ $errors->has('ill') ? ' is-invalid' : '' }}" name="ill" value="{{ old('ill') }}" placeholder="Enter Have You Been ill In The Past 5 Years" required>
                                                    @if ($errors->has('ill'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('country') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label for="checkbox" class=" col-form-label"><span class="h5">Consulted a physician ?</span></label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="physician"  value="Yes">
                                                    <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                                  </div>
                                                  <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="physician" value="No">
                                                    <label class="form-check-label" for="inlineCheckbox2">No</label>
                                                  </div>
                                                    @if ($errors->has('checkbox'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('checkbox') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>
                                            <div class="form-group row">
                                                <label for="bank_name" class=" col-form-label">Bank Name<span class="text-danger">*</span></label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input id="bank_name" type="text" class="form-control{{ $errors->has('bank_name') ? ' is-invalid' : '' }}" name="bank_name" value="{{ old('bank_name') }}" placeholder="Enter Bank Name" required>
                                                    @if ($errors->has('bank_name'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('bank_name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="acc_name" class=" col-form-label">Account Name<span class="text-danger">*</span></label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input id="acc_name" type="text" class="form-control{{ $errors->has('acc_name') ? ' is-invalid' : '' }}" name="acc_name" value="{{ old('acc_name') }}" placeholder="Enter Account Name" required>
                                                    @if ($errors->has('acc_name'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('acc_name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="acc_number" class="col-md-4 col-form-label">Account Number <span class="text-danger">*</span></label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input id="acc_number" type="number" class="form-control{{ $errors->has('acc_number') ? ' is-invalid' : '' }}" name="acc_number" value="{{ old('acc_number') }}" placeholder="Enter Account Number " required>

                                                    @if ($errors->has('acc_number'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('acc_number') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <label for="checkbox" class=" col-form-label"><span class="h5">Interest Payment</span></label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="interest_payment" value="At Maturity">
                                                    <label class="form-check-label" for="inlineCheckbox1">At Maturity</label>
                                                  </div>
                                                  <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="interest_payment" value="Upfront">
                                                    <label class="form-check-label" for="inlineCheckbox2">Upfront</label>
                                                  </div>
                                                    @if ($errors->has('checkbox'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('checkbox') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            <div class="form-group row">
                                                <label for="refer_name" class=" col-form-label">Refer Name</label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input id="refer_name" type="text" class="form-control{{ $errors->has('refer_name') ? ' is-invalid' : '' }}" name="refer_name" value="{{ old('refer_name') }}" placeholder="Enter Refer Name" required>
                                                    @if ($errors->has('refer_name'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('refer_name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="cid_number" class=" col-form-label">Referral CID Number</label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input id="cid_number" type="text" class="form-control{{ $errors->has('cid_number') ? ' is-invalid' : '' }}" name="cid_number" value="{{ old('cid_number') }}" placeholder="Enter Referral CID Number" required>
                                                    @if ($errors->has('cid_number'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('cid_number') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="refer_number" class="col-md-4 col-form-label">Referral Phone Number</label>
                                                <div class="col-md-12 col-sm-12">
                                                    <input id="refer_number" type="refer_number" class="form-control{{ $errors->has('refer_number') ? ' is-invalid' : '' }}" name="refer_number" value="{{ old('refer_number') }}" placeholder="Enter Referral Phone Number" required>
                                                    @if ($errors->has('refer_number'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('refer_number') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="terms" value="terms" required>
                                                    <label class="form-check-label" for="inlineCheckbox1">Accept terms<a href="" class="ml-3 text-primary">Read now</a></label>
                                                  </div>
                                                    @if ($errors->has('checkbox'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('checkbox') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div>
                                                <p><span class="text-danger">*</span> are compulsory</p>
                                            </div>
                                            <div class="inline mb-5 row">
                                                <div class="col-md-6 col-sm-8">
                                                    <img class="brand" src="assets/img/logos@2x.png" alt="Logo" style="max-width: 1000px">
                                                </div>
                                                <div class="mt-2 col-md-6 col-sm-8">
                                                        <script src="https://checkout.flutterwave.com/v3.js"></script>
                                                        <button type="submit" class="row-6 btn btn-info" >Pay Now</button>
                                                </div>
                                            </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@php
$array = array(array('metaname' => 'color', 'metavalue' => 'blue'),
                array('metaname' => 'size', 'metavalue' => 'big'));
@endphp
<h3>Buy Movie Tickets N500.00</h3>
<form method="POST" action="{{ route('pay') }}" id="paymentForm">
    {{ csrf_field() }}
    <input type="hidden" name="amount" value="500" /> <!-- Replace the value with your transaction amount -->
    <input type="hidden" name="payment_method" value="both" /> <!-- Can be card, account, both -->
    <input type="hidden" name="description" value="Beats by Dre. 2017" /> <!-- Replace the value with your transaction description -->
    <input type="hidden" name="country" value="NG" /> <!-- Replace the value with your transaction country -->
    <input type="hidden" name="currency" value="NGN" /> <!-- Replace the value with your transaction currency -->
    <input type="hidden" name="email" value="test@test.com" /> <!-- Replace the value with your customer email -->
    <input type="hidden" name="firstname" value="Oluwole" /> <!-- Replace the value with your customer firstname -->
    <input type="hidden" name="lastname" value="Adebiyi" /> <!-- Replace the value with your customer lastname -->
    <input type="hidden" name="metadata" value="{{ json_encode($array) }}" > <!-- Meta data that might be needed to be passed to the Rave Payment Gateway -->
    <input type="hidden" name="phonenumber" value="090929992892" /> <!-- Replace the value with your customer phonenumber -->
    {{-- <input type="hidden" name="paymentplan" value="362" /> <!-- Ucomment and Replace the value with the payment plan id --> --}}
    {{-- <input type="hidden" name="ref" value="MY_NAME_5uwh2a2a7f270ac98" /> <!-- Ucomment and  Replace the value with your transaction reference. It must be unique per transaction. You can delete this line if you want one to be generated for you. --> --}}
    {{-- <input type="hidden" name="logo" value="https://pbs.twimg.com/profile_images/915859962554929153/jnVxGxVj.jpg" /> <!-- Replace the value with your logo url (Optional, present in .env)--> --}}
    {{-- <input type="hidden" name="title" value="Flamez Co" /> <!-- Replace the value with your transaction title (Optional, present in .env) -->
    <input type="submit" value="Buy"  />
</form>

{{--
  <script>
    function makePayment() {
      FlutterwaveCheckout({
        public_key: "FLWPUBK_TEST-31d61a13026483fc38f15f0e90232374-X",
        tx_ref: "hooli-tx-1920bbtyt",
        amount: 54600,
        currency: "NGN",
        country: "NG",
        payment_options: "card,mobilemoney,ussd",
        customer: {
          email: "user@gmail.com",
          phone_number: "08102909304",
          name: "yemi desola",
        },
        callback: function (data) { // specified callback function
          console.log(data);
        },
        customizations: {
          title: "My store",
          description: "Payment for items in cart",
          logo: "https://assets.piedpiper.com/logo.png",
        },
      });
    }
  </script> --}}
@endsection
