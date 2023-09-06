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
                    <div class="container-fluid p-h-0">
                        <div class="chat chat-app row">
                            <div class="chat-list">
                                <div class="chat-user-tool">
                                    <i class="anticon anticon-search search-icon p-r-10 font-size-20"></i>
                                    <input placeholder="Search...">
                                </div>
                                <div class="chat-user-list">
                                    <a class="chat-list-item p-h-25" href="javascript:void(0);">
                                        <div class="media align-items-center">
                                            <!-- <div class="avatar avatar-image">
                                                <img src="/assets//images/avatars/thumb-1.jpg" alt="">
                                            </div> -->
                                            <div class="p-l-15">
                                                <h5 class="m-b-0">Erin Gonzales</h5>
                                                <p class="msg-overflow m-b-0 text-muted font-size-13">
                                                    Wow, that was cool!
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="chat-list-item p-h-25" href="javascript:void(0);">
                                        <div class="media align-items-center">
                                            <!-- <div class="avatar avatar-image">
                                                <img src="/assets//images/avatars/thumb-2.jpg" alt="">
                                            </div> -->
                                            <div class="p-l-15">
                                                <h5 class="m-b-0">Darryl Day</h5>
                                                <p class="msg-overflow m-b-0 text-muted font-size-13">
                                                    Okay! Thank you
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="chat-list-item p-h-25" href="javascript:void(0);">
                                        <div class="media align-items-center">
                                            <!-- <div class="avatar avatar-image">
                                                <img src="/assets//images/avatars/thumb-3.jpg" alt="">
                                            </div> -->
                                            <div class="p-l-15">
                                                <h5 class="m-b-0">Marshall Nichols</h5>
                                                <p class="msg-overflow m-b-0 text-muted font-size-13">
                                                    It's me..can you hear me..!!
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="chat-list-item p-h-25" href="javascript:void(0);">
                                        <div class="media align-items-center">
                                            <!-- <div class="avatar avatar-image">
                                                <img src="/assets//images/avatars/thumb-4.jpg" alt="">
                                            </div> -->
                                            <div class="p-l-15">
                                                <h5 class="m-b-0">Virgil Gonzales</h5>
                                                <p class="msg-overflow m-b-0 text-muted font-size-13">
                                                    ...but I wan to party
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="chat-list-item p-h-25" href="javascript:void(0);">
                                        <div class="media align-items-center">
                                            <!-- <div class="avatar avatar-image">
                                                <img src="/assets//images/avatars/thumb-7.jpg" alt="">
                                            </div> -->
                                            <div class="p-l-15">
                                                <h5 class="m-b-0">Pamela Wanda</h5>
                                                <p class="msg-overflow m-b-0 text-muted font-size-13">
                                                    The strongest man in the world is blowing up a hot water bottle.
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>   
                            </div>
                            <div class="chat-content">
                                <div class="conversation">
                                    <div class="conversation-wrapper">
                                        <div class="conversation-header justify-content-between">
                                            <div class="media align-items-center">
                                                <a href="javascript:void(0);" class="chat-close m-r-20 d-md-none d-block text-dark font-size-18 m-t-5" >
                                                    <i class="anticon anticon-left-circle"></i>
                                                </a>
                                                <!-- <div class="avatar avatar-image">
                                                    <img src="/assets//images/avatars/thumb-1.jpg" alt="">
                                                </div> -->
                                                <div class="p-l-15">
                                                    <h6 class="m-b-0">Erin Gonzales</h6>
                                                    <p class="m-b-0 text-muted font-size-13 m-b-0">
                                                        <span class="badge badge-success badge-dot m-r-5"></span>
                                                        <span>Online</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="dropdown dropdown-animated scale-left">
                                                <a class="text-dark font-size-20" href="javascript:void(0);" data-toggle="dropdown">
                                                    <i class="anticon anticon-setting"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <button class="dropdown-item" type="button">Action</button>
                                                    <button class="dropdown-item" type="button">Another action</button>
                                                    <button class="dropdown-item" type="button">Something else here</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="conversation-body">
                                            <div class="msg justify-content-center">
                                                <div class="font-weight-semibold font-size-12"> 7:57PM </div>
                                            </div>
                                            <div class="msg msg-recipient">
                                                <div class="m-r-10">
                                                    <!-- <div class="avatar avatar-image">
                                                        <img src="/assets//images/avatars/thumb-1.jpg" alt="">
                                                    </div> -->
                                                </div>
                                                <div class="bubble">
                                                    <div class="bubble-wrapper">
                                                        <span>Hey, let me show you something nice!</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="msg msg-sent">
                                                <div class="bubble">
                                                    <div class="bubble-wrapper">
                                                        <span>Oh! What is it?</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="msg msg-recipient">
                                                <div class="m-r-10">
                                                    <!-- <div class="avatar avatar-image">
                                                        <img src="/assets//images/avatars/thumb-1.jpg" alt="">
                                                    </div> -->
                                                </div>
                                                <div class="bubble">
                                                    <div class="bubble-wrapper p-5">
                                                        <img src="https://s3.envato.com/files/249796117/preview.__large_preview.png" alt="https://s3.envato.com/files/249796117/preview.__large_preview.png">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="msg msg-recipient">
                                                <div class="bubble m-l-50">
                                                    <div class="bubble-wrapper">
                                                        <span>Applicator - Bootstrap 4 Admin Template</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="msg msg-recipient">
                                                <div class="bubble m-l-50">
                                                    <div class="bubble-wrapper">
                                                        <span>A creative, responsive and highly customizable admin template</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="msg msg-sent">
                                                <div class="bubble">
                                                    <div class="bubble-wrapper">
                                                        <span>Wow, that was cool!</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="conversation-footer">
                                            <input class="chat-input" type="text" placeholder="Type a message...">
                                            <ul class="list-inline d-flex align-items-center m-b-0">
                                                <li class="list-inline-item m-r-15">
                                                    <a class="text-gray font-size-20" href="javascript:void(0);" data-toggle="tooltip" title="Emoji">
                                                        <i class="anticon anticon-smile"></i>
                                                    </a>
                                                </li> 
                                                <li class="list-inline-item m-r-15">
                                                    <a class="text-gray font-size-20" href="javascript:void(0);" data-toggle="tooltip" title="Attachment">
                                                        <i class="anticon anticon-paper-clip"></i>
                                                    </a>
                                                </li>    
                                                <li class="list-inline-item">
                                                    <button class="d-none d-md-block btn btn-primary">
                                                        <span class="m-r-10">Send</span>
                                                        <i class="far fa-paper-plane"></i>
                                                    </button>
                                                    <a href="javascript:void(0);" class="text-gray font-size-20 d-md-none d-block">
                                                        <i class="far fa-paper-plane"></i>
                                                    </a>
                                                </li>
                                            </ul>
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
    <script src="/assets//js/pages/chat.js"></script>

    <!-- Core JS -->
    <script src="/assets//js/app.min.js"></script>

</body>

</html>