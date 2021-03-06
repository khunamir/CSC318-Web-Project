<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../home/home.php">
        <div class="sidebar-brand-text mx-3">UiTM Voting System</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <?php if($user_type == "candidate" || $user_type == "voter") { ?>
    <li class="nav-item active">
        <a class="nav-link" href="../home/home.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span></a>
    </li>
    <?php } else { ?>
        <li class="nav-item active">
        <a class="nav-link" href="../home/adminhome.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span></a>
        </li>
    <?php } ?>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <?php if($user_type == "candidate") { ?>
    <li class="nav-item">
        <a class="nav-link" href="../user/candidate.php">
            <i class="fas fa-fw fa-user"></i>
            <span>Profile</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../user/manifesto.php">
            <i class="fas fa-fw fa-file"></i>
            <span>Manifesto</span></a>
    </li>
    <?php } else if($user_type == "voter") { ?>
        <li class="nav-item">
        <a class="nav-link" href="../vote/castvote.php">
            <i class="fas fa-fw fa-check"></i>
            <span>Cast Vote</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../user/viewcandidate.php">
            <i class="fas fa-fw fa-users"></i>
            <span>View Candidates</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../user/voter.php">
            <i class="fas fa-fw fa-user"></i>
            <span>Profile</span></a>
        </li>
    <?php } else { ?>
        <li class="nav-item">
        <a class="nav-link" href="../../views/admin/managecandidate.php">
            <i class="fas fa-fw fa-check"></i>
            <span>Manage Candidate</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../../views/admin/managevoter.php">
            <i class="fas fa-fw fa-users"></i>
            <span>Manage Voter</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../../views/admin/viewresult.php">
            <i class="fas fa-fw fa-user"></i>
            <span>View Result</span></a>
        </li>
    <?php } ?>
    <!-- TODO: else-statement for Admin. Copy <li> Manage Candidate, Manage voter and View Result. Path files, ada dekat Admin folder</li> -->


    <!-- <li class="nav-item">fa fa-usersfa-users fa-external-link-square
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li> -->
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>