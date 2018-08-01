<?php include('header.php'); ?>

 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Suppliers</a>
        </li>
        <li class="breadcrumb-item active">View Suppliers</li>
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


      <div class="container">
        <div class="row">
          <div class="col-md-12 table-responsive">
            <table class="table">
              <tr>
                <th></th>
                <th>Supplier</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Website</th>
              </tr>

              <?php foreach ($suppliers as $supplier): ?>
              <tr>
                <td>
                  <a href=""><i class="fa fa-edit"></i></a>
                  <br>
                  <a href="delete_customer/<?php echo $supplier->id; ?>"><i class="fa fa-remove"></i></a>
                </td>
                <td><?php echo $supplier->company; ?></td>
                <td><?php echo $supplier->address; ?><br><?php echo $supplier->city; ?><br><?php echo $supplier->country; ?></td>
                <td><?php echo $supplier->phone; ?></td>
                <td><?php echo $supplier->email; ?></td>
                <td><?php echo $supplier->website; ?></td>
              </tr>
              <?php endforeach; ?>

            </table>
          </div>
        </div>
      </div>



      
      <div style="height: 100px;"></div>
    </div>

<?php include('footer.php'); ?>