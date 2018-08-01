<?php include('header.php'); ?>

 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Payments</a>
        </li>
        <li class="breadcrumb-item active">View Payments</li>
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
                <th>Biller</th>
                <th>Supplier</th>
                <th>Product</th>
                <th>Amount</th>
                <th>Receipt</th>
              </tr>

              <?php foreach ($payments as $payment): ?>
              <tr>
                <td>
                  <a href=""><i class="fa fa-edit"></i></a>
                  <br>
                  <a href="delete_payment/<?php echo $payment->id; ?>"><i class="fa fa-remove"></i></a>
                </td>
                <td><?php echo $this->user_model->get_customer_name($payment->biller); ?></td>
                <td><?php echo $this->user_model->get_customer_name($payment->supplier); ?></td>
                <td><?php echo $payment->product; ?></td>
                <td><?php echo $payment->amount; ?></td>
                <td><?php echo $payment->receipt; ?></td>
              </tr>
              <?php endforeach; ?>

            </table>
          </div>
        </div>
      </div>



      
      <div style="height: 100px;"></div>
    </div>

<?php include('footer.php'); ?>