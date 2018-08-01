<?php include('header.php'); ?>

 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Quotations</a>
        </li>
        <li class="breadcrumb-item active">View Quotations</li>
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
                <th>Date</th>
                <th>Biller</th>
                <th>Customer</th>
                <th>Amount</th>
                <th>Reccurence</th>
                <th>Notes</th>
              </tr>

              <?php foreach ($quotations as $quotation): ?>
              <tr>
                <td>
                  <a href="pdfinvoice/quotation/<?php echo $quotation->id; ?>" target="_blank"><i class="fa fa-file-pdf-o"></i></a>
                  <br>
                  <a href="oneinvoice/quotation/<?php echo $quotation->id; ?>" target="_blank"><i class="fa fa-print"></i></a>
                  <br>
                  <a href="delete_quotation/<?php echo $quotation->id; ?>"><i class="fa fa-remove"></i></a>
                </td>
                <td><?php echo $quotation->date; ?></td>
                <td><?php echo $this->user_model->get_customer_name($quotation->biller); ?></td>
                <td><?php echo $this->user_model->get_customer_name($quotation->customer); ?></td>
                <td><?php echo $quotation->amount; ?></td>
                <td><?php echo $quotation->reccurence; ?></td>
                <td><?php echo $quotation->notes; ?></td>
              </tr>
              <?php endforeach; ?>

            </table>
          </div>
        </div>
      </div>



      
      <div style="height: 100px;"></div>
    </div>

<?php include('footer.php'); ?>