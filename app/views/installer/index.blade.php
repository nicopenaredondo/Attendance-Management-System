@extends('installer.layout.master')
@section('title')
Installation Wizard - Attendance Management System
@stop
@section('content')
<div class="block-register">
    <div class="block-register-content">
        <div class="block form-wizard" id="form-wizard2">

            <ul class="form-wizard-levels">
                <li class="active"><a href="#valid1" data-toggle="tab"><span>1</span>Company Information</a></li>
                <li><a href="#valid2" data-toggle="tab"><span>2</span> Administrator Information</a></li>
                <li><a href="#valid3" data-toggle="tab"><span>3</span> Review Details</a></li>
            </ul>

            <div class="block-content">
                {{ Form::open(array('route' => 'install.process' ,'id' => 'wizard-validate','autocomplete' => 'off')) }}
                <div class="tab-content">
                    <div class="tab-pane active" id="valid1">
                    <h2><strong>Company</strong> Information</h2>
                        <hr>
                        <div class="row-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company Name</label>
                                    <input type="text" class="form-control" name="company_name" id="company_name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Type of Service</label>
                                <select name="company_service" id="" class="form-control" id="company_service">
                                    <option value="">-</option>
                                    <option value="Agriculture">Agriculture</option>
                                    <option value="Accounting">Accounting</option>
                                    <option value="Advertising">Advertising</option>
                                    <option value="Aerospace">Aerospace</option>
                                    <option value="Aircraft">Aircraft</option>
                                    <option value="Airline">Airline</option>
                                    <option value="Apparel & Accessories">Apparel & Accessories</option>
                                    <option value="Automotive">Automotive</option>
                                    <option value="Banking">Banking</option>
                                    <option value="Broadcasting">Broadcasting</option>
                                    <option value="Brokerage">Brokerage</option>
                                    <option value="Call Centers">Call Centers</option>
                                    <option value="Cargo Handling">Cargo Handling</option>
                                    <option value="Chemical">Chemical</option>
                                    <option value="Computer">Computer</option>
                                    <option value="Consumer Products">Consumer Products</option>
                                    <option value="Cosmetics">Cosmetics</option>
                                    <option value="Defense">Defense</option>
                                    <option value="Deparment Stores">Deparment Stores</option>
                                    <option value="Education">Education</option>
                                    <option value="Electronics">Electronics</option>
                                    <option value="Energy">Energy</option>
                                    <option value="Entertainment & Leisure">Entertainment & Leisure</option>
                                    <option value="Executive Search">Executive Search</option>
                                    <option value="Financial Services">Financial Services</option>
                                    <option value="Food, Beverage & Tobacco">Food, Beverage & Tobacco</option>
                                    <option value="Grocery">Grocery</option>
                                    <option value="Health Care">Health Care</option>
                                    <option value="Internet Publishing">Internet Publishing</option>
                                    <option value="Investment Banking">Investment Banking</option>
                                    <option value="Legal">Legal</option>
                                    <option value="Manufacturing">Manufacturing</option>
                                    <option value="Motion Picture & Video">Motion Picture & Video</option>
                                    <option value="Music">Music</option>
                                    <option value="Newspaper Publishers">Newspaper Publishers</option>
                                    <option value="Online Auctions">Online Auctions</option>
                                    <option value="Pension Funds">Pension Funds</option>
                                    <option value="Pharmaceuticals">Pharmaceuticals</option>
                                    <option value="Private Equity">Private Equity</option>
                                    <option value="Publishing">Publishing</option>
                                    <option value="Real Estate">Real Estate</option>
                                    <option value="Retail & Wholesale">Retail & Wholesale</option>
                                    <option value="Securities & Commodity Exchanges">Securities & Commodity Exchanges</option>
                                    <option value="Service">Service</option>
                                    <option value="Soap & Detergent">Soap & Detergent</option>
                                    <option value="Software">Software</option>
                                    <option value="Sports">Sports</option>
                                    <option value="Technology">Technology</option>
                                    <option value="Telecommunications">Telecommunications</option>
                                    <option value="Television">Television</option>
                                    <option value="Transportation">Transportation</option>
                                    <option value="Trucking">Trucking</option>
                                    <option value="Venture Capital">Venture Capital</option>
                                </select>
                            </div>
                            </div>
                        </div>
                        <div class="row-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company Address</label>
                                    <textarea name="company_address" class="form-control" id="" cols="30" rows="2" id="company_address"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company Description</label>
                                    <textarea name="company_description" class="form-control" id="" cols="30" rows="2" id="company_description"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane" id="valid2">
                        <h2><strong>Administrator</strong> Information</h2>
                        <hr>
                        <div class="row-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" class="form-control" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="row-form">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>First name</label>
                                    <input type="text" class="form-control" name="first_name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Middle name</label>
                                    <input type="text" class="form-control" name="middle_name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Last name</label>
                                    <input type="text" class="form-control" name="last_name">
                                </div>
                            </div>
                        </div>




                    </div>
                     <div class="tab-pane" id="valid3">
                        <h2><strong>Review</strong> Details</h2>
                        <hr>
                        <h3>Company Information</h3>

                        <div class="row-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company Name</label>
                                    <p class="text-muted">Highly Succeed Inc.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Type of Service</label>
                                    <p class="text-muted">Technology</p>
                                </div>
                            </div>
                        </div>
                        <div class="row-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company Description</label>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, dolorem, nisi, eligendi necessitatibus in nobis numquam minima odit perferendis nam illo laboriosam suscipit quibusdam a quae voluptates nostrum nulla quasi!</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company Address</label>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, autem impedit porro et reiciendis nesciunt. Repellendus, iure, esse, pariatur consequuntur nobis minus fugit accusantium deleniti atque dolor magni quisquam sequi!</p>
                                </div>
                            </div>
                        </div>

                        <h3>Administrator Information</h3>
                        <div class="row-form">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <p class="text-muted">Nico</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Middle Name</label>
                                    <p class="text-muted">Romero</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <p class="text-muted">Penaredondo</p>
                                </div>
                            </div>
                        </div>

                        <div class="row-form">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Birthday</label>
                                    <p class="text-muted">January 15,1993</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Contact Number</label>
                                    <p class="text-muted">+63926474658</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Address</label>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, facere quia minus nesciunt blanditiis velit unde deleniti cum harum veniam ad dolore sit sunt est alias libero cupiditate quis asperiores.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <ul class="pager wizard">
                        <li class="previous disabled"><a href="#" class="btn btn-default tabindex=-1">Previous</a></li>
                        <li class="next"><a href="#" class="btn btn-default">Next</a></li>
                        <li class="finish" style="display: none;"><button class="btn btn-success">Submit</button></li>
                    </ul>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@stop