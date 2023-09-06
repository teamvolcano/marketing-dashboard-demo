<!-- Side Nav START -->
<div class="side-nav">

    <div style="display: flex; justify-content: center; align-items: center; padding: 20px;">
        <br>
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <span>GreenTech Solutions</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Sunflower Café</a>
                <a class="dropdown-item" href="#">BlueWave Technologies</a>
                <a class="dropdown-item" href="#">UrbanGrowth Ventures</a>
            </div>
        </div>
        <br>
        <br>
    </div>

    <?php
    $url = $_SERVER['REQUEST_URI'];
    ?>

    <div class="side-nav-inner">
        <ul class="side-nav-menu">
            <li class="<?= $url == '/dashboard' ? 'active' : '' ?>">
                <a class="active" href="/dashboard">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li class="<?= $url == '/dashboard/recruitments.php' ? 'active' : '' ?>">
                <a class="active" href="/dashboard/recruitments.php">
                    <span class="icon-holder">
                        <i class="anticon anticon-funnel-plot"></i>
                    </span>
                    <span class="title">Recruitments</span>
                </a>
            </li>

            <li class="<?= $url == '/dashboard/candidates.php' ? 'active' : '' ?>">
                <a class="active" href="/dashboard/candidates.php">
                    <span class="icon-holder">
                        <i class="anticon anticon-contacts"></i>
                    </span>
                    <span class="title">Canidates</span>
                </a>
            </li>

            <li class="<?= $url == '/dashboard/setting.php' ? 'active' : '' ?>">
                <a class="active" href="/dashboard/setting.php">
                    <span class="icon-holder">
                        <i class="anticon anticon-tool"></i>
                    </span>
                    <span class="title">Settings</span>
                </a>
            </li>



        </ul>
    </div>
</div>
<!-- Side Nav END -->