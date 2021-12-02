@extends('layouts.app')

@section('content')
<section class="panel">
									<header class="panel-heading">
						
										<h2 class="panel-title"> Register Members</h2>
									</header>
									<div class="panel-body">
										<form class="form-horizontal form-bordered" method="POST" action="{{ route('registerMembers.store') }}">
                        {{ csrf_field() }}
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">First Name:</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="inputDefault" name="fname" value="{{ old('fname') }}" required>

													@if ($errors->has('fname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
												</div>
											</div>

											<!-- <div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Middle Name:</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="inputDefault" name="Mname" value="{{ old('Mname') }}" placeholder="optional">

													@if ($errors->has('Mname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Mname') }}</strong>
                                    </span>
                                @endif
												</div>
											</div> -->
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Last Name:</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="inputDefault" name="lname" value="{{ old('lname') }}" required>

													@if ($errors->has('lname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
												</div>
											</div>

											<div class="form-group" style="display:none !important;">
												<label class="col-md-3 control-label" for="inputDefault">Member Id:</label>
												<div class="col-md-6">
													<input type="text" class="form-control" id="inputDefault" name="member_id" value="NO ID">
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="inputSuccess">Gender:</label>
												<div class="col-md-6">
													<div class="radio">
														<label>
															<input type="radio" name="gender" id="optionsRadios1" value="male" >Male
														</label>
													</div>
													<div class="radio">
														<label>
															<input type="radio" name="gender" id="optionsRadios2" value="female">Female
														</label>
													</div>
						                        @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Voter's ID:</label>
												<div class="col-md-6">
													<input type="number" class="form-control"  name="voterID"  required>
													@if ($errors->has('voterID'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('voterID') }}</strong>
                                    </span>
                                @endif
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label">Date Of Birth:</label>
												<div class="col-md-6">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
														<input type="text" data-plugin-datepicker="" class="form-control" name="birthDate" value="{{ old('birthDate') }}" required>
														@if ($errors->has('birthDate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthDate') }}</strong>
                                    </span>
                                @endif
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">County:</label>
												<div class="col-md-6">
													<select name="county" class="form-control" value="{{ old('county') }}">
                        <option value="">Select your County</option>
                        <option value="Bomi">Bomi</option>
                        <option value="Bong">Bong</option>
                        <option value="Gbarpolu">Gbarpolu</option>
                        <option value="Grand-Bassa">Grand Bassa</option>
                        <option value="Grand-Cape-Mount">Grand Cape Mount</option>
                        <option value="Grand-Gedeh">Grand Gedeh</option>
                        <option value="Grand-Kru">Grand Kru</option>
                        <option value="Lofa">Lofa</option>
                        <option value="Margibi">Margibi</option>
                        <option value="Maryland">Maryland</option>
                        <option value="Montserrado">Montserrado</option>
                        <option value="Nimba">Nimba</option>
                        <option value="River-Cess">River Cess</option>
                        <option value="River-Gee">River Gee</option>
                        <option value="Sinoe">Sinoe</option>
                    </select>
                    @if ($errors->has('county'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('county') }}</strong>
                                    </span>
                                @endif
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">District:</label>
												<div class="col-md-6">
													<input type="number" class="form-control" id="inputDefault" name="district" value="{{ old('district') }}">
													@if ($errors->has('district'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('district') }}</strong>
                                    </span>
                                @endif
												</div>
											</div>
											<div class="form-group">
													<label class="col-md-3 control-label">Phone:</label>
													<div class="col-md-6 control-label">
														<div class="input-group">
															<span class="input-group-addon">
																<i class="fa fa-phone"></i>
															</span>
															<input id="phone" data-plugin-masked-input="" data-input-mask="(999) 999-9999" placeholder="000-000-0000" class="form-control" name="cell" value="{{ old('cell') }}">
															@if ($errors->has('cell'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cell') }}</strong>
                                    </span>
                                @endif
														</div>
													</div>
												</div>
												<div class="form-group">
												<label class="col-md-3 control-label" for="inputDefault">Email:</label>
												<div class="col-md-6">
													<input type="email" class="form-control" id="inputDefault" name="email" placeholder="optional">
												</div>
											</div>
												<div class="form-group">
												<label class="col-md-3 control-label">Upload Photo</label>
												<div class="col-md-6">
													<div class="fileupload fileupload-new" data-provides="fileupload">
														<div class="input-append">
															<div class="uneditable-input">
																<i class="fa fa-file fileupload-exists"></i>
																<span class="fileupload-preview"></span>
															</div>
															<span class="btn btn-default btn-file">
																<span class="fileupload-exists">Change</span>
																<span class="fileupload-new">Select file</span>
																<input type="file" placeholder="optional" name="photo">
															</span>
															<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
								<div class="col-sm-8" style="float:right !important;">
									<button type="submit" class="btn btn-primary hidden-xs">Register</button>
									<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Register</button>
								</div> 
							</div>
										</form>
									</div>
								</section>
@endsection
