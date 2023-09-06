<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php'; ?>

<body>
    <div class="app">
        <div class="layout">
            <?php  include_once('includes/header.php');  ?>
            <?php  include_once('includes/nav.php');  ?>

            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header no-gutters has-tab">
                        <h2 class="font-weight-normal">Setting</h2>
                        <ul class="nav nav-tabs" >
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab-account">Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-network">Network</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-notification">Notification</a>
                            </li>
                        </ul>
                    </div>
                    <div class="container">
                        <div class="tab-content m-t-15">
                            <div class="tab-pane fade show active" id="tab-account" >
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Basic Infomation</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="media align-items-center">
                                            <div class="avatar avatar-image  m-h-10 m-r-15" style="height: 80px; width: 80px">
                                                <img src="/assets//images/avatars/thumb-3.jpg" alt="">
                                            </div>
                                            <div class="m-l-20 m-r-20">
                                                <h5 class="m-b-5 font-size-18">Change Avatar</h5>
                                                <p class="opacity-07 font-size-13 m-b-0">
                                                    Recommended Dimensions: <br>
                                                    120x120 Max fil size: 5MB
                                                </p>
                                            </div>
                                            <div>
                                                <button class="btn btn-tone btn-primary">Upload</button>
                                            </div>
                                        </div>
                                        <hr class="m-v-25">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="font-weight-semibold" for="userName">User Name:</label>
                                                    <input type="text" class="form-control" id="userName" placeholder="User Name" value="Marshall Nichols">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="font-weight-semibold" for="email">Email:</label>
                                                    <input type="password" class="form-control" id="email" placeholder="email" value="@marshallnich">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="phoneNumber">Phone Number:</label>
                                                    <input type="text" class="form-control" id="phoneNumber" placeholder="Phone Number">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="dob">Date of Birth:</label>
                                                    <input type="text" class="form-control" id="dob" placeholder="Date of Birth">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="font-weight-semibold" for="language">Language</label>
                                                    <select id="language" class="form-control" placeholder="Language">
                                                        <option>English</option>
                                                        <option>France</option>
                                                        <option>German</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Change Password</h4>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <label class="font-weight-semibold" for="oldPassword">Old Password:</label>
                                                    <input type="password" class="form-control" id="oldPassword" placeholder="Old Password">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="font-weight-semibold" for="newPassword">New Password:</label>
                                                    <input type="password" class="form-control" id="newPassword" placeholder="New Password">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="font-weight-semibold" for="confirmPassword">Confirm Password:</label>
                                                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <button class="btn btn-primary m-t-30">Change</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Address Details</h4>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label class="font-weight-semibold" for="fullAddress">Full Address:</label>
                                                    <input type="text" class="form-control" id="fullAddress" placeholder="Full Address">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="font-weight-semibold" for="stateCity">State & City:</label>
                                                    <input type="text" class="form-control" id="stateCity" placeholder="State & City">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="font-weight-semibold" for="language">Language</label>
                                                    <select id="language" class="form-control" placeholder="Language">
                                                        <option>United State</option>
                                                        <option>United Kingdom</option>
                                                        <option>France</option>
                                                        <option>German</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-network">
                                <div class="row">
                                    <div class="col-md-8 mx-auto">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Network Integration</h4>
                                            </div>
                                            <div class="card-body">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon" style="color: #4267b1; background: rgba(66, 103, 177, 0.1)">
                                                                    <i class="anticon anticon-facebook"></i>
                                                                </div>
                                                                <div class="font-size-15 font-weight-semibold m-l-15">Facebook</div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <label class="m-b-0">https://facebook.com</label>
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-fb" checked="">
                                                                    <label for="switch-fb"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon" style="color: #fff; background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%)">
                                                                    <i class="anticon anticon-instagram"></i>
                                                                </div>
                                                                <div class="font-size-15 font-weight-semibold m-l-15">Instagram</div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-inst">
                                                                    <label for="switch-inst"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon" style="color: #1ca1f2; background: rgba(28, 161, 242, 0.1)">
                                                                    <i class="anticon anticon-twitter"></i>
                                                                </div>
                                                                <div class="font-size-15 font-weight-semibold m-l-15">Twitter</div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <label class="m-b-0">https://twitter.com</label>
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-tw" checked="">
                                                                    <label for="switch-tw"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon" style="color: #d8487e; background: rgba(216, 72, 126, 0.1)">
                                                                    <i class="anticon anticon-dribbble"></i>
                                                                </div>
                                                                <div class="font-size-15 font-weight-semibold m-l-15">Dribbble</div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-dr">
                                                                    <label for="switch-dr"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon" style="color: #323131; background: rgba(50, 49, 49, 0.1)">
                                                                    <i class="anticon anticon-github"></i>
                                                                </div>
                                                                <div class="font-size-15 font-weight-semibold m-l-15">Github</div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <label class="m-b-0">https://github.com</label>
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-gh" checked="">
                                                                    <label for="switch-gh"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon" style="color: #0174af; background: rgba(1, 116, 175, 0.1)">
                                                                    <i class="anticon anticon-linkedin"></i>
                                                                </div>
                                                                <div class="font-size-15 font-weight-semibold m-l-15">Linkedin</div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <label class="m-b-0">https://linkedin.com</label>
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-ln" checked="">
                                                                    <label for="switch-ln"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon" style="color: #005ef7; background: rgba(0, 94, 247, 0.1)">
                                                                    <i class="anticon anticon-dropbox"></i>
                                                                </div>
                                                                <div class="font-size-15 font-weight-semibold m-l-15">Dropbox</div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-db">
                                                                    <label for="switch-db"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-notification">
                                <div class="row">
                                    <div class="col-md-8 mx-auto">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Notification Config</h4>
                                            </div>
                                            <div class="card-body">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon avatar-blue">
                                                                    <i class="anticon anticon-user"></i>
                                                                </div>
                                                                <div class="m-l-15">
                                                                    <h5 class="font-weight-semibold m-b-0">Everyone can look me up</h5>
                                                                    <p class="m-b-0 font-weight-normal">Allow people found on your public.</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-config-1" checked>
                                                                    <label for="switch-config-1"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon avatar-cyan">
                                                                    <i class="anticon anticon-mobile"></i>
                                                                </div>
                                                                <div class="m-l-15">
                                                                    <h5 class="font-weight-semibold m-b-0">Everyone can contact me</h5>
                                                                    <p class="m-b-0 font-weight-normal">Allow any peole to contact.</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-config-2" checked> 
                                                                    <label for="switch-config-2"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon avatar-gold">
                                                                    <i class="anticon anticon-environment"></i>
                                                                </div>
                                                                <div class="m-l-15">
                                                                    <h5 class="font-weight-semibold m-b-0">Show my location</h5>
                                                                    <p class="m-b-0 font-weight-normal">Turning on Location lets you explore what's around you.</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-config-3">
                                                                    <label for="switch-config-3"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon avatar-purple">
                                                                    <i class="anticon anticon-mail"></i>
                                                                </div>
                                                                <div class="m-l-15">
                                                                    <h5 class="font-weight-semibold m-b-0">Email Notifications</h5>
                                                                    <p class="m-b-0 font-weight-normal">Receive daily email notifications.</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-config-4" checked>
                                                                    <label for="switch-config-4"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon avatar-red">
                                                                    <i class="anticon anticon-question"></i>
                                                                </div>
                                                                <div class="m-l-15">
                                                                    <h5 class="font-weight-semibold m-b-0">Unknow Source</h5>
                                                                    <p class="m-b-0 font-weight-normal">Allow all downloads from unknow source.</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-config-5">
                                                                    <label for="switch-config-5"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon avatar-green">
                                                                    <i class="anticon anticon-swap"></i>
                                                                </div>
                                                                <div class="m-l-15">
                                                                    <h5 class="font-weight-semibold m-b-0">Data Synchronization</h5>
                                                                    <p class="m-b-0 font-weight-normal">Allow data synchronize with cloud server.</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-config-6" checked>
                                                                    <label for="switch-config-6"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item p-h-0">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-icon avatar-orange">
                                                                    <i class="anticon anticon-usergroup-add"></i>
                                                                </div>
                                                                <div class="m-l-15">
                                                                    <h5 class="font-weight-semibold m-b-0">Groups Invitation</h5>
                                                                    <p class="m-b-0 font-weight-normal">Allow any groups invitation</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="switch m-t-5 m-l-10">
                                                                    <input type="checkbox" id="switch-config-7" checked>
                                                                    <label for="switch-config-7"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Wrapper END -->

            </div>
            <!-- Page Container END -->

            <!-- Search Start-->
            <div class="modal modal-left fade search" id="search-drawer">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header justify-content-between align-items-center">
                            <h5 class="modal-title">Search</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <i class="anticon anticon-close"></i>
                            </button>
                        </div>
                        <div class="modal-body scrollable">
                            <div class="input-affix">
                                <i class="prefix-icon anticon anticon-search"></i>
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <div class="m-t-30">
                                <h5 class="m-b-20">Files</h5>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-cyan avatar-icon">
                                        <i class="anticon anticon-file-excel"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Quater Report.exl</a>
                                        <p class="m-b-0 text-muted font-size-13">by Finance</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-blue avatar-icon">
                                        <i class="anticon anticon-file-word"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Documentaion.docx</a>
                                        <p class="m-b-0 text-muted font-size-13">by Developers</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-purple avatar-icon">
                                        <i class="anticon anticon-file-text"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Recipe.txt</a>
                                        <p class="m-b-0 text-muted font-size-13">by The Chef</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-red avatar-icon">
                                        <i class="anticon anticon-file-pdf"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Project Requirement.pdf</a>
                                        <p class="m-b-0 text-muted font-size-13">by Project Manager</p>
                                    </div>
                                </div>
                            </div>
                            <div class="m-t-30">
                                <h5 class="m-b-20">Members</h5>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="/assets//images/avatars/thumb-1.jpg" alt="">
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Erin Gonzales</a>
                                        <p class="m-b-0 text-muted font-size-13">UI/UX Designer</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="/assets//images/avatars/thumb-2.jpg" alt="">
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Darryl Day</a>
                                        <p class="m-b-0 text-muted font-size-13">Software Engineer</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="/assets//images/avatars/thumb-3.jpg" alt="">
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Marshall Nichols</a>
                                        <p class="m-b-0 text-muted font-size-13">Data Analyst</p>
                                    </div>
                                </div>
                            </div>   
                            <div class="m-t-30">
                                <h5 class="m-b-20">News</h5> 
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="/assets//images/others/img-1.jpg" alt="">
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">5 Best Handwriting Fonts</a>
                                        <p class="m-b-0 text-muted font-size-13">
                                            <i class="anticon anticon-clock-circle"></i>
                                            <span class="m-l-5">25 Nov 2018</span>
                                        </p>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
            <!-- Search End-->

            <!-- Quick View START -->
            <div class="modal modal-right fade quick-view" id="quick-view">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header justify-content-between align-items-center">
                            <h5 class="modal-title">Theme Config</h5>
                        </div>
                        <div class="modal-body scrollable">
                            <div class="m-b-30">
                                <h5 class="m-b-0">Header Color</h5>
                                <p>Config header background color</p>
                                <div class="theme-configurator d-flex m-t-10">
                                    <div class="radio">
                                        <input id="header-default" name="header-theme" type="radio" checked value="default">
                                        <label for="header-default"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-primary" name="header-theme" type="radio" value="primary">
                                        <label for="header-primary"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-success" name="header-theme" type="radio" value="success">
                                        <label for="header-success"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-secondary" name="header-theme" type="radio" value="secondary">
                                        <label for="header-secondary"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-danger" name="header-theme" type="radio" value="danger">
                                        <label for="header-danger"></label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h5 class="m-b-0">Side Nav Dark</h5>
                                <p>Change Side Nav to dark</p>
                                <div class="switch d-inline">
                                    <input type="checkbox" name="side-nav-theme-toogle" id="side-nav-theme-toogle">
                                    <label for="side-nav-theme-toogle"></label>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h5 class="m-b-0">Folded Menu</h5>
                                <p>Toggle Folded Menu</p>
                                <div class="switch d-inline">
                                    <input type="checkbox" name="side-nav-fold-toogle" id="side-nav-fold-toogle">
                                    <label for="side-nav-fold-toogle"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
            <!-- Quick View END -->
        </div>
    </div>

    
    <!-- Core Vendors JS -->
    <script src="/assets//js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="/assets//js/app.min.js"></script>

</body>

</html>