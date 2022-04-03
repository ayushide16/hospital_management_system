<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style1.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="../../index.html"><img src="../../assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="../../assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Abc Xyz</h5>
                  <span>Admin</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical" style="color: white;"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-lock text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-logout text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Log Out</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../landing.html">
              <span class="menu-icon">
                <i class="mdi mdi-chart-areaspline"></i>
              </span>
              <span class="menu-title">Analytics</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-stethoscope"></i>
              </span>
              <span class="menu-title">Outpatient</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/forms/basic_elements.html">
              <span class="menu-icon">
                <i class="mdi mdi-seat-individual-suite"></i>
              </span>
              <span class="menu-title">Inpatient</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/tables/basic-table.html">
              <span class="menu-icon">
                <i class="mdi mdi-pill"></i>
              </span>
              <span class="menu-title">Pharmacy</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/charts/chartjs.html">
              <span class="menu-icon">
                <i class="mdi mdi-test-tube"></i>
              </span>
              <span class="menu-title">Diagnostics</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../pages/icons/mdi.html">
              <span class="menu-icon">
                <i class="mdi mdi-cash-multiple"></i>
              </span>
              <span class="menu-title">Payroll</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-account-card-details"></i>
              </span>
              <span class="menu-title">Accounts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page-1.html"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-500.html"> 500 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.html"> Register </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
              <span class="menu-icon">
                <i class="mdi mdi-account-settings"></i>
              </span>
              <span class="menu-title">Settings</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
              <span class="menu-icon">
                <i class="mdi mdi-chart-gantt"></i>
              </span>
              <span class="menu-title">User Management</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu" style="color: white;"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">

                <li class="nav-item dropdown d-none d-lg-block">
                    <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="../../pages/samples/new_regn.html">New Registration</a>
                </li>

               

              <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#">Admin Dashboard</a>
              </li>

              
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-home"></i>
                </a>
                </li>

              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="../../assets/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Abc Xyz</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Account Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
				<div class="page-header">
					<h3 class="page-title"> Test Requisition Form </h3>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Forms</a></li>
							<li class="breadcrumb-item active" aria-current="page">Test Requisition Form</li>
						</ol>
					</nav>
				</div>
				<form class="form-sample" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<div class="row">
						<div class="col-12 grid-margin">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Test Requisition Form</h4>
									<br>
									<p class="card-description"> Basic Information </p>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Name</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="p_name"/>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Patient ID </label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="p_id"/>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Mobile No.</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="p_phone"/>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Email ID</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="p_email" />
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Address</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="p_address"/>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">City</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="p_city"/>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Pincode</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="p_pincode"/>
												</div>
											</div>
										</div>
									</div>
									<br><br>
									<p class="card-description"> Medical Details </p>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Date of Birth</label>
												<div class="col-sm-9">
													<input class="form-control" placeholder="yyyy-mm-dd" name="p_dob"/>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Age</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="p_age" />
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Gender</label>
												<div class="col-sm-9">
													<select class="form-control" name="p_gender">
														<option>Male</option>
														<option>Female</option>
														<option>Other</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Height</label>
												<div class="col-sm-9">
													<input class="form-control" placeholder="in ft-inches" name="p_height"/>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Weight</label>
												<div class="col-sm-9">
													<input class="form-control" placeholder="in kgs" name="p_weight"/>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Blood Pressure</label>
												<div class="col-sm-4">
													<div class="form-check">
														<label class="form-check-label">
														<input type="radio" class="form-check-input" name="p_bp"  value="Yes" checked> Yes </label>
													</div>
												</div>
												<div class="col-sm-5">
													<div class="form-check">
														<label class="form-check-label">
														<input type="radio" class="form-check-input" name="p_bp"  value="No"> No </label>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">On Medication?</label>
												<div class="col-sm-4">
													<div class="form-check">
														<label class="form-check-label">
														<input type="radio" class="form-check-input" name="p_medication" value="Yes" checked> Yes </label>
													</div>
												</div>
												<div class="col-sm-5">
													<div class="form-check">
														<label class="form-check-label">
														<input type="radio" class="form-check-input" name="p_medication" value="No"> No </label>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Diabetes</label>
												<div class="col-sm-4">
													<div class="form-check">
														<label class="form-check-label">
														<input type="radio" class="form-check-input" name="p_diabetes"  value="Yes" checked> Yes </label>
													</div>
												</div>
												<div class="col-sm-5">
													<div class="form-check">
														<label class="form-check-label">
														<input type="radio" class="form-check-input" name="p_diabetes"  value="No"> No </label>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Family History</label>
												<div class="col-sm-2">
													<div class="form-check">
														<label class="form-check-label">
														<input type="checkbox" name="p_history" value="Diabetes" class="form-check-input"> Diabetes </label>
													</div>
												</div>
												<div class="col-sm-2">
													<div class="form-check">
														<label class="form-check-label">
														<input type="checkbox" name="p_history" value="High BP" class="form-check-input"> High BP </label>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-check">
														<label class="form-check-label">
														<input type="checkbox" name="p_history" value="Heart Attack/Stroke" class="form-check-input"> Heart Attack/Stroke </label>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Habit Of Smoking</label>
												<div class="col-sm-4">
													<div class="form-check">
														<label class="form-check-label">
														<input type="radio" class="form-check-input" name="p-smoking" value="Yes" checked> Yes </label>
													</div>
												</div>
												<div class="col-sm-5">
													<div class="form-check">
														<label class="form-check-label">
														<input type="radio" class="form-check-input" name="p_smoking" value="No"> No </label>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">LMP</label>
												<div class="col-sm-9">
													<input class="form-control" name="lmp"  placeholder="yyyy-mm-dd" />
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Others (Disease)</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="p_others"/>
												</div>
											</div>
										</div>
									</div>
									<br><br>
									<p class="card-description"> Referring Doctor/Hospital </p>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Name</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" name="d_name"/>
													</div>
												</div>
											</div>
										</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">City</label>
												<div class="col-sm-9">
													<select class="form-control" name="d_city">
														<option value="Kolkata">Kolkata</option>
														<option value="Others">Other</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Pin Code</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="d_pincode"/>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Phone/Mobile</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="d_phone"/>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group row">
												<label class="col-sm-3 col-form-label">Email ID</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" name="d_email"/>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 grid-margin">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Test Requirements</h4>
									<br> 
										<div class="add-items">
											<div class="row">
												<div class="col-md-2">
													<div class="form-group row">
														<div class="col-sm-6">
															<select name="testid" class="form-control" style="border: 1.5px solid #0091d5;">
																<option>Test ID</option>
																<option value="T001">T001</option>
																<option value="T002">T002</option>
																<option value="T003">T003</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group row">
														<div class="col-sm-8">
															<select id="testname" name="testname" class="form-control" style="border: 1.5px solid #0091d5;">
																<option>Test Name</option>
																<option value="Test 1">Test 1</option>
																<option value="Test 2">Test 2</option>
																<option value="Test 3">Test 3</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-md-1">
													<div class="form-group row">
														<div class="col-sm-3">
															<button onclick="output()" type="submit" name="add" class="btn btn-primary">Add</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th> Sl. No. </th>
													<th> Test Code </th>
													<th> Test Name </th>
												</tr>
											</thead>
                      <?php
										function output()
										{
											if(isset($_POST['add']))
											{
											$testid = $_POST["testid"];
											$testname = $_POST["testname"];
											$conn = new mysqli('localhost', 'ayushide', '1234', 'sem6_project');
											if ($conn->connect_error)
											{
												die("Connection failed: " . $conn->connect_error);
											}
											$sql_insert= "INSERT INTO try VALUES ('$testid', '$testname');";
											?>
											<table>
												<?php
                        if ($conn->query($sql_insert) === TRUE) 
                        {
                          
                          $sql_display="SELECT * FROM try;";
                          $result=$conn->query($sql_display);
                        }
													$num=1;
													if($result->num_rows>0)
													{
														while($row=$result->fetch_assoc())
														{ ?>
															<tr>
																<td style="color: black;"> <?php echo $num++;?> </td>
																<td style="color: black;"> <?php echo $row["testid"];?> </td>
																<td style="color: black;"> <?php echo $row["testname"];?> </td>
															</tr>
															<?php
														}
													}
												?>
											<?php
											}
										}
                    output();
									?>
										</table>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 grid-margin">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Specimen Details</h4>
									
										<br>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Collection Date</label>
													<div class="col-sm-9">
														<input class="form-control" placeholder="dd/mm/yyyy" name="collect_date"/>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Collection Time</label>
													<div class="col-sm-9">
														<input class="form-control" placeholder="hh:mm"  name="collect_time"/>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Fasting ?</label>
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="fasting" value="Yes" class="form-check-input"> Yes </label>
														</div>
													</div>
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="fasting" value="No" class="form-check-input"> No </label>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="fasting" value="Not Applicable" class="form-check-input"> Not Applicable </label>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Hours  (If Fasting)</label>
													<div class="col-sm-9">
														<input type="text" name="hour_fasting" class="form-control" />
													</div>
												</div>
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Specimen Temperature</label>
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="temp" value="Ambient" class="form-check-input"> Ambient </label>
														</div>
													</div>
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="temp" value="Cold" class="form-check-input"> Cold </label>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="temp" value="Frozen" class="form-check-input"> Frozen </label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<br>
										<p class="card-description"> Specimen Type </p>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group row">
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="specimen" value="Serum" class="form-check-input"> Serum </label>
														</div>
													</div>
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="specimen" value="WB Herapin" class="form-check-input"> WB Herapin </label>
														</div>
													</div>
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="specimen" value="Bone Marrow Herapin" class="form-check-input"> Bone Marrow Herapin </label>
														</div>
													</div>
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="specimen" value="Slide (H&E)" class="form-check-input"> Slide (H&E) </label>
														</div>
													</div>
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="specimen" value="Swab" class="form-check-input"> Swab </label>
														</div>
													</div>
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="specimen" value="Plasma EDTA" class="form-check-input"> Plasma EDTA </label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group row">
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="specimen" value="WB Na-Citrate" class="form-check-input"> WB Na-Citrate </label>
														</div>
													</div>
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="specimen" value="Paraffin Block" class="form-check-input"> Paraffin Block </label>
														</div>
													</div>
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="specimen" value="Fluid" class="form-check-input"> Fluid </label>
														</div>
													</div>
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="specimen" value="CSF" class="form-check-input"> CSF </label>
														</div>
													</div>
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="specimen" value="Plasma Fluoride" class="form-check-input"> Plasma Fluoride </label>
														</div>
													</div>
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="specimen" value="WB Fluoride" class="form-check-input"> WB Fluoride </label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group row">
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="specimen" value="FN Aspirate" class="form-check-input"> FN Aspirate </label>
														</div>
													</div>
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="specimen" value="BAL" class="form-check-input"> BAL </label>
														</div>
													</div>
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="specimen" value="Filter Paper" class="form-check-input"> Filter Paper </label>
														</div>
													</div>
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="specimen" value="Plasma Citrate" class="form-check-input"> Plasma Citrate </label>
														</div>
													</div>
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="specimen" value="Urine" class="form-check-input"> Urine </label>
														</div>
													</div>
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="specimen" value="Pus" class="form-check-input"> Pus </label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group row">
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="specimen" value="Sputum" class="form-check-input"> Sputum </label>
														</div>
													</div>
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="specimen" value="WB EDTA" class="form-check-input"> WB EDTA </label>
														</div>
													</div>
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="specimen" value="Stool" class="form-check-input"> Stool </label>
														</div>
													</div>
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="specimen" value="Smear" class="form-check-input"> Smear </label>
														</div>
													</div>
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="specimen" value="WD ACD" class="form-check-input"> WD ACD </label>
														</div>
													</div>
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" name="specimen" value="Bone Marrow EDTA" class="form-check-input"> Bone Marrow EDTA </label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Tissue</label>
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" class="form-check-input"> Small </label>
														</div>
													</div>
													<div class="col-sm-2">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" class="form-check-input"> Medium </label>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="form-check">
															<label class="form-check-label">
															<input type="checkbox" class="form-check-input"> Large </label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Site Of Collection</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" />
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-sm-3 col-form-label">Volume (24H Urine)</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" />
													</div>
												</div>
											</div>
										</div>
										<br><br>
										<button type="submit" class="btn btn-primary mr-2">Submit</button>
										<button class="btn btn-dark"><a href="diagnostics_landing.html" style="text-decoration: none; color: white;">Cancel</a></button>
								</div>
							</div>
						</div>
					</div>
				</form>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <!-- partial -->
        </div>

        
        <!-- main-panel ends -->
    </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>