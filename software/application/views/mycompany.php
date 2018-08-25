<?php include('header.php'); ?>

 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Company</li>
      </ol>

      <p>
        <?php $success_msg= $this->session->flashdata('success_msg');
        $error_msg= $this->session->flashdata('error_msg');
        if($success_msg){ ?>
          <div class="alert alert-success">
            <?php echo $success_msg; ?>
          </div>
        <?php }

        if($error_msg){ ?>
          <div class="alert alert-danger">
            <?php echo $error_msg; ?>
          </div>
        <?php } ?>
      </p>


      <?php foreach ($companies as $company): ?>
      <div class="row">
        <div class="table-responsive">
          <table class="table">
            <tr>
              <td>
                <b>Company Name</b><br>
                <?php echo $company->company; ?>
              </td>
            </tr>
            <tr>
              <td>
                <b>Contact Person</b><br>
                <?php echo $company->contact_person; ?><br>
                <a href="">Update Contact Person</a>
              </td>
            </tr>
            <tr>
              <td>
                <b>Contact Details</b><br>
                <i class="fa fa-envelope"></i> <?php echo $company->email; ?><br>
                <i class="fa fa-phone"></i> <?php echo $company->phone; ?><br>
                <i class="fa fa-map-marker"></i> <?php echo $company->address; ?><br>
                <a href="">Update Contact Details</a>
              </td>
            </tr>
            <tr>
              <td>
                <b>Company Staff</b><br>
                <?php foreach ($staff as $member): ?>
                  <?php echo $member->fullname; ?> <a href="">Remove</a><br>
                <?php endforeach; ?>

                <a href="">Add More Staff</a>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <?php endforeach; ?>
          


      
      <!-- <div style="height: 1000px;"></div> -->
    </div>

<?php include('footer.php'); ?>
