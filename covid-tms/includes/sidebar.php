<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background: linear-gradient(45deg, #283593,#2c3e50); transition: all 0.3s ease;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#" style="padding: 15px 0; text-decoration: none; color: #fff;">
        <div class="sidebar-brand-icon rotate-n-15" style="animation: rotateLogo 2s infinite linear;">
            <i class="fas fa-virus" style="font-size: 30px;"></i>
        </div>
        <img src="hos.png" alt="Logo" style="width: 30px; height: 30px; margin-bottom: 6px;>Care 
        <span style="color: rgb(255, 0, 0); font-size: 20px;">Care-X</span>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0" style="border-color: rgba(255, 255, 255, 0.3);">

    <?php if($_SESSION['aid']): ?>

    <!-- Dashboard -->
    <li class="nav-item" style="margin: 10px 0;">
        <a class="nav-link" href="dashboard.php" style="display: flex; align-items: center; padding: 10px; transition: all 0.3s; color: #fff;">
            <i class="fas fa-fw fa-tachometer-alt" style="margin-right: 10px; font-size: 18px;"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Doctors Section -->
    <li class="nav-item" style="margin: 10px 0;">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="display: flex; align-items: center; padding: 10px; transition: all 0.3s; color: #fff;">
            <i class="fas fa-fw fa-users" style="margin-right: 10px; font-size: 18px;"></i>
            <span>Doctors</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded" style="background: #e3f2fd; box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.2); border-radius: 8px;">
                <a class="collapse-item" href="add-phlebotomist.php" style="color: #1565c0;">Add</a>
                <a class="collapse-item" href="manage-phlebotomist.php" style="color: #1565c0;">Manage</a>
            </div>
        </div>
    </li>

    <!-- Testing Section -->
    <li class="nav-item" style="margin: 10px 0;">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="display: flex; align-items: center; padding: 10px; transition: all 0.3s; color: #fff;">
            <i class="fas fa-fw fa-virus" style="margin-right: 10px; font-size: 18px;"></i>
            <span>Testing</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded" style="background: #e3f2fd; box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.2); border-radius: 8px;">
                <a class="collapse-item" href="new-test.php" style="color: #1565c0;">New</a>
                <a class="collapse-item" href="assigned-test.php" style="color: #1565c0;">Assigned</a>
                <a class="collapse-item" href="ontheway-samplecollection-test.php" style="color: #1565c0;">On the Way</a>
                <a class="collapse-item" href="sample-collected-test.php" style="color: #1565c0;">Sample Collected</a>
                <a class="collapse-item" href="samplesent-lab-test.php" style="color: #1565c0;">Sent to Lab</a>
                <a class="collapse-item" href="reportdelivered-test.php" style="color: #1565c0;">Report Delivered</a>
                <a class="collapse-item" href="all-test.php" style="color: #1565c0;">All Tests</a>
            </div>
        </div>
    </li>

    <!-- Report Section -->
    <li class="nav-item" style="margin: 10px 0;">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" style="display: flex; align-items: center; padding: 10px; transition: all 0.3s; color: #fff;">
            <i class="fas fa-fw fa-file" style="margin-right: 10px; font-size: 18px;"></i>
            <span>Report</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded" style="background: #e3f2fd; box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.2); border-radius: 8px;">
                <a class="collapse-item" href="bwdates-report-ds.php" style="color: #1565c0;">B/w Dates Report</a>
                <a class="collapse-item" href="search-report.php" style="color: #1565c0;">Search Report</a>
            </div>
        </div>
    </li>


    <?php else: ?>

    <!-- Non-admin Sections -->
    <li class="nav-item" style="margin: 10px 0;">
        <a class="nav-link" href="index.php" style="display: flex; align-items: center; padding: 10px; transition: all 0.3s; color: #fff;">
            <i class="fas fa-fw fa-file" style="margin-right: 10px; font-size: 18px;"></i>
            <span>Home</span>
        </a>
    </li>
    <li class="nav-item" style="margin: 10px 0;">
        <a class="nav-link" href="live-test-updates.php" style="display: flex; align-items: center; padding: 10px; transition: all 0.3s; color: #fff;">
            <i class="fas fa-fw fa-tachometer-alt" style="margin-right: 10px; font-size: 18px;"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item" style="margin: 10px 0;">
        <a class="nav-link" href="patient-search-report.php" style="display: flex; align-items: center; padding: 10px; transition: all 0.3s; color: #fff;">
            <i class="fas fa-fw fa-file" style="margin-right: 10px; font-size: 18px;"></i>
            <span>Test Report</span>
        </a>
    </li>
    <li class="nav-item active" style="margin: 10px 0;">
        <a class="nav-link" href="login.php" style="display: flex; align-items: center; padding: 10px; transition: all 0.3s; color: #fff;">
            <i class="fas fa-fw fa-user" style="margin-right: 10px; font-size: 18px;"></i>
            <span>Admin</span>
        </a>
    </li>

    <?php endif; ?>

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle" style="background: #bbdefb; border: none; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);"></button>
    </div>

</ul>
<!-- End of Sidebar -->

<style>
@keyframes rotateLogo {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}

.nav-link:hover {
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 5px;
    transform: scale(1.05);
}
</style>
