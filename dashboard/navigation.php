<?php
  function getActiveLink($page){
    if(basename($_SERVER['PHP_SELF']) == $page)
      return "active";
  }
?>
<!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <a class="navbar-brand" href="index.php">Financial Planning System</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" style="overflow-y: auto">
  <li class="nav-item <?= getActiveLink("index.php") ?>" data-toggle="tooltip" data-placement="right" title="Model Inputs">
        <a class="nav-link" href="index.php">
          <i class="fa fa-fw fa-dashboard"></i>
          <span class="nav-link-text">Dashboard</span>
        </a>
      </li>
      <li class="nav-item <?= getActiveLink("model-inputs.php") ?>" data-toggle="tooltip" data-placement="right" title="Model Inputs">
        <a class="nav-link" href="model-inputs.php">
          <i class="fa fa-fw fa-bar-chart"></i>
          <span class="nav-link-text">Model Inputs</span>
        </a>
      </li>
  <li class="nav-item <?= getActiveLink("profits-and-loss.php") ?>" data-toggle="tooltip" data-placement="right" title="Profits and Loss">
        <a class="nav-link" href="profits-and-loss.php">
          <i class="fa fa-fw fa-area-chart"></i>
          <span class="nav-link-text">Profits and Loss</span>
        </a>
      </li>
  <!-- balance sheet -->
  <li class="nav-item <?= getActiveLink("balance-sheet.php") ?>" data-toggle="tooltip" data-placement="right" title="Balance Sheet">
        <a class="nav-link" href="balance-sheet.php">
          <i class="fa fa-fw fa-list-alt"></i>
          <span class="nav-link-text">Balance Sheet</span>
        </a>
      </li>
  <!--cash flow -->
  <li class="nav-item <?= getActiveLink("cash-flow.php") ?>" data-toggle="tooltip" data-placement="right" title="Cash Flow">
        <a class="nav-link" href="cash-flow.php">
          <i class="fa fa-fw fa-stack-overflow"></i>
          <span class="nav-link-text">Cash Flow</span>
        </a>
      </li>
  <!--loan payment calculator-->
  <li class="nav-item <?= getActiveLink("loan-payment.php") ?>" data-toggle="tooltip" data-placement="right" title="Loan Payment Calculator">
        <a class="nav-link" href="loan-payment.php">
          <i class="fa fa-fw fa-calculator"></i>
          <span class="nav-link-text">Loan Payment Calculator</span>
        </a>
      </li>
  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Settings">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseSettings" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-wrench"></i>
          <span class="nav-link-text">Settings</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseSettings">
          <li>
            <a data-toggle="modal" href="#userModal">Change Username</a>
          </li>
          <li>
            <a data-toggle="modal" href="#passModal">Change Password</a>
          </li>
          <li>
            <a href="../connection/dbExport.php">Backup Database</a>
          </li>
          <li>
            <a data-toggle="modal" href="#restoreDbModal">Restore Database</a>
          </li>
          <li>
            <a data-toggle="modal" href="#readModal">Read-only Mode <?php if(isset($_SESSION['readonly'])){ ?><i style="color: green"class="fa fa-circle"></i> <?php } ?></a>
          </li>
        </ul>
      </li>

    </ul>

    <ul class="navbar-nav ml-auto">
  <li class="nav-item">
        <a class="nav-link" data-toggle="modal" href="#historyModal" title="Recent Activity">
          <i class="fa fa-fw fa-history"></i></a>
     </li>
       <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="fa fa-fw fa-sign-out"></i>Logout</a>
      </li>
    </ul>
  </div>
</nav>
