@extends('layouts.app')
@section('content')
<style>
footer
{
    display:none;
}
</style>
<div id="main-form-div">
    <div class="col-md-12">
        {{-- id="msform" --}}
        <form id="msform"  action="{{ route("register") }}" method="post">
            @csrf
            <!-- fieldsetss -->
            <fieldset class="first-q13" step-validation='true' id="step_1">
                <h2 class="fs-title">How Many Bedrooms</h2>
                <h3 class="fs-subtitle">Select All That Apply</h3>
                <div>
                    <div class="checkbox-row-custom ">
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/one-bed.png" />
                                <p>Studio</p>
                                <input type="checkbox" name="no_of_bedroom[]" value="1" />

                            </label>
                        </div>
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/one-bed.png" />
                                <p>1 Bed</p>
                                <input type="checkbox" name="no_of_bedroom[]" value="2" />

                            </label>
                        </div>
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/one-bed-den.png" />
                                <p>1 + Den</p>
                                <input type="checkbox" name="no_of_bedroom[]" value="3" />

                            </label>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="checkbox-row-custom ">
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/two-bed.png" />
                                <p>2 Bed</p>
                                <input type="checkbox" name="no_of_bedroom[]" value="4" />

                            </label>
                        </div>
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/two-bedroom-den.png" />
                                <p>2 + Den</p>
                                <input type="checkbox" name="no_of_bedroom[]" value="5" />

                            </label>
                        </div>
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/3-bed.png" />
                                <p>3 Bed</p>
                                <input type="checkbox" name="no_of_bedroom[]" value="6" />
                            </label>
                        </div>
                    </div>
                </div>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                <input onclick="myFunction12()" target-validation="step_1" type="button" name="next" class="next action-button" value="Next" />
            </fieldset>

            <fieldset class="first-q3" step-validation='true' id="step_2">
                <div class="fancy-side-image"><img src="{{ asset("images") }}/Rectangle 5 copy 11.png" /></div>
                <h2 class="fs-title">Price Range</h2>
                <div>
                    <select class="form-select form-select-custom" name="price_range_min" aria-label="Default select example">
                        <option  value="0" selected>Minimum</option>
                        <option value="1500">Under $1,500</option>
                        <option value="2000">$2,000</option>
                        <option value="2500">$2,500</option>
                        <option value="3000">$3,000</option>
                        <option value="3500">$3,500</option>
                        <option value="4000">$4,000</option>
                    </select>
                    <select class="form-select form-select-custom" name="price_range_max" aria-label="Default select example">
                        <option  value="0" selected>Maxmimum</option>
                        <option value="1500">Under $1,500</option>
                        <option value="2000">$2,000</option>
                        <option value="2500">$2,500</option>
                        <option value="3000">$3,000</option>
                        <option value="3500">$3,500</option>
                        <option value="4000">$4,000</option>
                    </select>
                </div>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                <input onclick="myFunction2()" target-validation="step_2" type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <fieldset class="first-q6" step-validation='true'  id="step_3">
                <div class="fancy-side-image"><img src="{{ asset("images") }}/IconBusinessv.png" /></div>
                <h2 class="fs-title">Monthly combined income Before taxes?</h2>
                <h3 class="fs-subtitle">Please include income from all funding sources</h3>
                <div>
                    <select class="form-select form-select-custom" name="monthly_income" aria-label="Default select example">
                        <option  value="0" selected>Please Choose</option>
                        <option value="3000">$3,000</option>
                        <option value="3500">$3,500</option>
                        <option value="4000">$4,000</option>
                        <option value="5000">$5,000</option>
                        <option value="5500">$5,500</option>
                        <option value="6000">$6,000</option>
                        <option value="6500">$6,500</option>
                        <option value="7000">$7,000</option>
                        <option value="7500">$7,500</option>
                        <option value="8000">$8,000</option>
                        <option value="9000">$9,000</option>
                        <option value="10000+">Over $10,000</option>
                    </select>
                </div>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                <input onclick="myFunction5()" target-validation="step_3" type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <fieldset class="first-q8"  step-validation='false'>
                <div class="q8-wrapper d-flex flex-column flex-wrap align-items-center">
                    <div class="q8-image">
                        <img src="{{ asset("images") }}/q8-image.png" />
                    </div>
                    <div class="q8-detail w-50">
                        <h2>You're Rich and we love it!</h2>
                        <h3>FYI- most apartment communities want 3x or more of untaxed income to be approved and you got
                            it!</h3>
                        <p class="mt-5 mb-5">So you know, apartments typically require your monthly income to be 2-3x
                            the rent. Exact income requirements may vary, so always double-check with the apartment.</p>
                    </div>
                </div>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                <input onclick="myFunction7()" type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <fieldset class="first-q15"  step-validation='true' id="step_4">
                <div class="fancy-side-image"><img src="{{ asset("images") }}/4.png" /></div>
                <h2 class="fs-title">Where are you moving?</h2>
                <div class="col-md-auto moving-selection">
                    <select id="places-1" class="progControlSelect2" name="moving_destinations[]" multiple="true">
                        <option value="newyork">New York</option>
                        <option value="newjersy">New Jersy</option>
                        <option value="vancover">Vancover</option>
                        <option value="london">London</option>
                        <option value="paris">Paris</option>
                        <option value="tokoyo">Tokoyo</option>
                    </select>
                </div>
                {{-- <div class="col-md-auto moving-selection-2">
                    <h3 class="fs-subtitle sub-bottom-line">Most Popular Rental Locations</h3>
                    <ul class="ks-cboxtags">
                        <li><input type="checkbox" id="checkboxOne" value="Downtown-Tx"><label
                                for="checkboxOne">Downtown, Tx</label></li>
                        <li><input type="checkbox" id="checkboxTwo" value="Midtown-Tx"><label for="checkboxTwo">Midtown,
                                Tx</label></li>
                        <li><input type="checkbox" id="checkboxThree" value="River-Oaks-Tx"><label
                                for="checkboxThree">River Oaks, Tx</label></li>
                        <li><input type="checkbox" id="checkboxFour" value="Heights-Tx"><label
                                for="checkboxFour">Heights, Tx</label></li>
                        <li><input type="checkbox" id="checkboxFive" value="Montrose-Tx"><label
                                for="checkboxFive">Montrose, Tx</label></li>
                    </ul>
                </div> --}}
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                <input onclick="myFunction14()" target-validation="step_4" type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <fieldset class="first-q14" step-validation='true' id="step_5">
                <h2 class="fs-title">Select the type of building</h2>
                <div>
                    <div class="checkbox-row-custom ">
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/highrise.png" />
                                <p>HighRise</p>
                                <input type="checkbox" name="type_of_building[]" value="1" />
                                <i class="fa fa-check hidden"></i>
                            </label>
                        </div>
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/midrise.png" />
                                <p>Mid Rise</p>
                                <input type="checkbox" name="type_of_building[]" value="2" />
                                <i class="fa fa-check hidden"></i>
                            </label>
                        </div>
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/gardenstyle.png" />
                                <p>Garden Style</p>
                                <input type="checkbox" name="type_of_building[]" value="3" />
                                <i class="fa fa-check hidden"></i>
                            </label>
                        </div>
                    </div>
                </div>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                <input onclick="myFunction13()" target-validation="step_5" type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <fieldset class="first-q5" step-validation='true' id="step_6">
                <div class="fancy-side-image"><img src="{{ asset("images") }}/stars.png" /></div>
                <h2 class="fs-title">Select Features & Amenities</h2>
                <h3 class="fs-subtitle">What amenities are most important to you?</h3>
                <div>
                    <div class="checkbox-row-custom">
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/balcony.png" />
                                <p>Balcony</p>
                                <input id="mycheck" type="checkbox" name="features_amenities[]" value="1" />
                                <i class="fa fa-check hidden"></i>
                            </label>
                        </div>
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/pool.png" />
                                <p>Pool</p>
                                <input type="checkbox" name="features_amenities[]" value="2" />
                                <i class="fa fa-check hidden"></i>
                            </label>
                        </div>
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/gym.png" />
                                <p>Gym</p>
                                <input type="checkbox" name="features_amenities[]" value="3" />
                                <i class="fa fa-check hidden"></i>
                            </label>
                        </div>
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/conclerge.png" />
                                <p>Conclerge</p>
                                <input type="checkbox" name="features_amenities[]" value="4" />
                                <i class="fa fa-check hidden"></i>
                            </label>
                        </div>
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/hot-tub-at-pool.png" />
                                <p>Hot tub at pool</p>
                                <input type="checkbox" name="features_amenities[]" value="5" />
                                <i class="fa fa-check hidden"></i>
                            </label>
                        </div>
                    </div>
                    <div class="checkbox-row-custom">
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/hard-wood-floor.png" />
                                <p>Hard wook floor</p>
                                <input type="checkbox" name="features_amenities[]" value="6" />
                                <i class="fa fa-check hidden"></i>
                            </label>
                        </div>
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/residents-media-room.png" />
                                <p>Residents media room</p>
                                <input type="checkbox" name="features_amenities[]" value="7" />
                                <i class="fa fa-check hidden"></i>
                            </label>
                        </div>
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/heated-pool.png" />
                                <p>Heated pool</p>
                                <input type="checkbox" name="features_amenities[]" value="8" />
                                <i class="fa fa-check hidden"></i>
                            </label>
                        </div>
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/rooftop-pool.png" />
                                <p>Rooftop pool</p>
                                <input type="checkbox" name="features_amenities[]" value="9" />
                                <i class="fa fa-check hidden"></i>
                            </label>
                        </div>
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/valvet-parking.png" />
                                <p>Valet parking</p>
                                <input type="checkbox" name="features_amenities[]" value="10" />
                                <i class="fa fa-check hidden"></i>
                            </label>
                        </div>
                    </div>
                    <div class="checkbox-row-custom">
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/dry-cleaning.png" />
                                <p>Dry cleaning</p>
                                <input type="checkbox" name="features_amenities[]" value="11" />
                                <i class="fa fa-check hidden"></i>
                            </label>
                        </div>
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/pet-spa.png" />
                                <p>Pet spa</p>
                                <input type="checkbox" name="features_amenities[]" value="12" />
                                <i class="fa fa-check hidden"></i>
                            </label>
                        </div>
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/vr-golf.png" />
                                <p>VR golf</p>
                                <input type="checkbox" name="features_amenities[]" value="13" />
                                <i class="fa fa-check hidden"></i>
                            </label>
                        </div>
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/downtown-view.png" />
                                <p>Downtown view</p>
                                <input type="checkbox" name="features_amenities[]" value="14" />
                                <i class="fa fa-check hidden"></i>
                            </label>
                        </div>
                    </div>
                </div>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                <input onclick="myFunction4()" target-validation="step_6" type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <fieldset class="first-q9" step-validation='true' id="step_7">
                <h2 class="fs-title">Shower features</h2>
                <div>
                    <div class="checkbox-row-custom">
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/barthroom1.png" />
                                <p>Hard wook floor</p>
                                <input type="checkbox" name="bathroom_features[]" value="1" />
                                <i class="fa fa-check hidden"></i>
                            </label>
                        </div>
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/bathroom2.png" />
                                <p>Residents media room</p>
                                <input type="checkbox" name="bathroom_features[]" value="2" />
                                <i class="fa fa-check hidden"></i>
                            </label>
                        </div>
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/bathroom3.png" />
                                <p>Heated pool</p>
                                <input type="checkbox" name="bathroom_features[]" value="3" />
                                <i class="fa fa-check hidden"></i>
                            </label>
                        </div>
                    </div>
                </div>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                <input onclick="myFunction8()" target-validation="step_7" type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <fieldset class="first-q11" step-validation='true' id="step_8">
                <div class="fancy-side-image"><img src="{{ asset("images") }}/pet_carrier.png" /></div>
                <h2 class="fs-title">Furry Friends?</h2>
                <div>
                    <div class="checkbox-row-custom ">
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/fury1.png" />
                                <p>Dog</p>
                                <input type="checkbox" name="pets[]" value="1" />
                                <i class="fa fa-check hidden"></i>
                            </label>
                        </div>
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/fury2.png" />
                                <p>cat</p>
                                <input type="checkbox" name="pets[]" value="2" />
                                <i class="fa fa-check hidden"></i>
                            </label>
                        </div>
                    </div>
                </div>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                <input onclick="myFunction10()" target-validation="step_8" type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <fieldset class="first-q"  step-validation='true' id="step_9">
                <h2 class="fs-title">How do you get there?</h2>
                <div>
                    <div class="checkbox-row-custom">
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/Group 43.png" />
                                <input id="mycheck" type="checkbox" name="how_get_there[]" value="1" />
                                <i class="fa fa-check hidden"></i>
                            </label>
                        </div>
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/Group 44.png" />
                                <input type="checkbox" name="how_get_there[]" value="2" />
                                <i class="fa fa-check hidden"></i>
                            </label>
                        </div>
                        <div>
                            <label class="image-checkbox">
                                <img class="img-responsive" src="{{ asset("images") }}/Group 47.png" />
                                <input type="checkbox" name="how_get_there[]" value="3" />
                                <i class="fa fa-check hidden"></i>
                            </label>
                        </div>
                    </div>
                </div>
                <input onclick="myFunction()" target-validation="step_9" type="button" name="next" class="next action-button" value="Next" />
                <input type="button" name="next" class="next    skip-button" value="Skip this question" />
            </fieldset>
            <fieldset class="first-q4" step-validation='true' id="step_10">
                <h2 class="fs-title">Set Maximum Commute time</h2>
                <div>
                    <div id="map-canvas"></div>
                    <div id="debug"></div>

                </div>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                <input onclick="myFunction3()" target-validation="step_10" type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <fieldset class="first-q7" step-validation='true' id="step_11">
                <h2 class="fs-title">I Care Most About</h2>
                <div>
                    <div class="checkbox-row-custom-1">
                        <div>
                            <label class="image-checkbox-1">
                                <img class="img-responsive" src="{{ asset("images") }}/001-features.png" />
                                <p>Best Blend of <br> price, location,<br> & features</p>
                                <input id="mycheck" type="checkbox" name="care_most_about[]" value="1" />

                            </label>
                        </div>
                        <div>
                            <label class="image-checkbox-1">
                                <img class="img-responsive" src="{{ asset("images") }}/002-location.png" />
                                <p>Best<br> Location</p>
                                <input type="checkbox" name="care_most_about[]" value="2" />

                            </label>
                        </div>
                        <div>
                            <label class="image-checkbox-1">
                                <img class="img-responsive" src="{{ asset("images") }}/key-features.png" />
                                <p>Most of my<br> features</p>
                                <input type="checkbox" name="care_most_about[]" value="3" />

                            </label>
                        </div>
                        <div>
                            <label class="image-checkbox-1">
                                <img class="img-responsive" src="{{ asset("images") }}/003-loss.png" />
                                <p>Best <br>Location</p>
                                <input type="checkbox" name="care_most_about[]" value="4" />

                            </label>
                        </div>
                    </div>
                </div>
                <h3 class="fs-subtitle">Don't worry, this won't remove any matches</h3>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                <input onclick="myFunction6()" target-validation="step_11" type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <fieldset class="first-q10" step-validation='true' id="step_12">
                <h2 class="fs-title">Select Move-in Date</h2>
                <div class="container mt-5 mb-5">
                    <div class="col-md-12">
                        <div class="date-picker d-flex flex-column flex-wrap align-items-center">
                            <div id="move_calender" class="move_calender w-50"></div>
                            <input type="hidden" name="move_date" id="move_date" />
                        </div>
                    </div>
                </div>

                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                <input onclick="myFunction9()" target-validation="step_12" type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <fieldset class="first-q12" step-validation='true' id="step_13">
                <h2 class="fs-title">Lease length</h2>
                <h3 class="fs-subtitle mt-5 ">However many months gets me the cheapest rate! – Cheapest rate! <br />
                    (Typically at least 12 month)</h3>
                <div>
                    <select class="form-select form-select-custom" name="looking_lease_leght" aria-label="Default select example">
                        <option value="0" selected>Please Choose</option>
                        <option value="1m">1 month</option>
                        <option value="2m">2 month</option>
                        <option value="3m">3 month</option>
                        <option value="5m">5 month</option>
                        <option value="7m">7 month</option>
                        <option value="9m">9 month</option>
                        <option value="11m">11 month</option>
                    </select>
                </div>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                <input onclick="myFunction11()" target-validation="step_13" type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <fieldset class="first-q20" step-validation='true' id="step_14">
                <h2 class="fs-title">How flexible can your move in be to?</h2>
                <div>
                    <input type="radio" id="oneweek" name="moveindate" class="click-button radio-button-12"
                        value="1" />
                    <label for="oneweek" class="click-button">within 1 week</label>
                    <input type="radio" id="twoweek" name="moveindate" class="click-button radio-button-12"
                        value="2" />
                    <label for="twoweek" class="click-button">within 2 weeks</label>
                    <input type="radio" id="weekmonth" name="moveindate" class="click-button radio-button-12"
                        value="3" />
                    <label for="weekmonth" class="click-button">between 2 weeks and a month</label>
                    <input type="radio" id="norush" name="moveindate" class="click-button radio-button-12" value="4" />
                    <label for="nsorush" class="click-button">No Rush</label>
                </div>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                <input onclick="myFunction1()" target-validation="step_14" type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <fieldset class="first-q1" step-validation='true' id="step_15">
                <h2 class="fs-title">Ever been evicted in the last 7 years?"</h2>
                <div>
                    <input type="radio" id="evicted-yes" class="radio-button-12" name="is_evicted" class="click-button"
                        value="1" />
                    <label for="evicted-yes" class="click-button">Yes</label>
                    <input type="radio" class="radio-button-12" id="evicted-no" name="is_evicted" class="click-button"
                        value="0" />
                    <label for="evicted-no" class="click-button">No</label>
                </div>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                <input onclick="myFunction1()" target-validation="step_15" type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <fieldset class="first-q21" step-validation='true' id="step_16">
                <h2 class="fs-title">Create your account</h2>
                <h3 class="fs-subtitle">Fill in your credentials</h3>
                <input type="text" name="name" placeholder="First Name" />
                <input type="text" name="lastname" placeholder="Last Name" />
                <input type="text" name="phone" placeholder="Phone" />
                <input type="email" name="email" placeholder="Email" />
                <input id="password" type="password" name="password" required autocomplete="new-password">
                <input id="password-confirm" type="password"  name="password_confirmation" required autocomplete="new-password">
                <input type="submit" name="submit" class="submit action-button" value="Submit" />
            </fieldset>
        </form>
    </div>
</div>
@endsection