<?php include('header.php'); ?>

 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Quotations</a>
        </li>
        <li class="breadcrumb-item active">Add Quotation</li>
      </ol>
      <h1>Add Quotation</h1>
      <hr>
      

      <div class="card card-register mx-auto mt-5">
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

      <div class="card-body">
        <form action="quotation_add" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <select name="biller" class="form-control" required>
              <option value="">Select Biller</option>
                <?php foreach ($billers as $biller): ?>
                <option value="<?php echo $biller->id; ?>"><?php echo $biller->company; ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="form-group">
            <select name="customer" class="form-control" required>
              <option value="">Select Customer</option>
                <?php foreach ($customers as $customer): ?>
                <option value="<?php echo $customer->id; ?>"><?php echo $customer->company; ?></option>
              <?php endforeach; ?>
            </select>
          </div>


          <div class="form-group">
            <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" name="notes" required  placeholder="Notes">
          </div>
          <br><br><br>

          <div class="form-group table-responsive">
            <table class="table">
              <tr>
                <th width="75%">Product/Service</th>
                <th>Price</th>
              </tr>
              <tr>
                <td>
                  <select name="product1" class="form-control" required>
                    <option value="">Select Product/Service</option>
                      <?php foreach ($products as $product): ?>
                      <option value="<?php echo $product->id; ?>"><?php echo $product->descr; ?></option>
                    <?php endforeach; ?>
                  </select>
                </td>
                <td>
                  <input class="form-control" id="exampleInputName" type="number" aria-describedby="nameHelp" name="price1" required  step="0.01" min="0">
                </td>
              </tr>
              <tr>
                <td>
                  <select name="product2" class="form-control">
                    <option value="">Select Product/Service</option>
                      <?php foreach ($products as $product): ?>
                      <option value="<?php echo $product->id; ?>"><?php echo $product->descr; ?></option>
                    <?php endforeach; ?>
                  </select>
                </td>
                <td>
                  <input class="form-control" id="exampleInputName" type="number" aria-describedby="nameHelp" name="price2"  step="0.01" min="0">
                </td>
              </tr>
              <tr>
                <td>
                  <select name="product3" class="form-control">
                    <option value="">Select Product/Service</option>
                      <?php foreach ($products as $product): ?>
                      <option value="<?php echo $product->id; ?>"><?php echo $product->descr; ?></option>
                    <?php endforeach; ?>
                  </select>
                </td>
                <td>
                  <input class="form-control" id="exampleInputName" type="number" aria-describedby="nameHelp" name="price3"   step="0.01" min="0">
                </td>
              </tr>
              <tr>
                <td>
                  <select name="product4" class="form-control">
                    <option value="">Select Product/Service</option>
                      <?php foreach ($products as $product): ?>
                      <option value="<?php echo $product->id; ?>"><?php echo $product->descr; ?></option>
                    <?php endforeach; ?>
                  </select>
                </td>
                <td>
                  <input class="form-control" id="exampleInputName" type="number" aria-describedby="nameHelp" name="price4" step="0.01" min="0">
                </td>
              </tr>
              <tr>
                <td>
                  <select name="product5" class="form-control">
                    <option value="">Select Product/Service</option>
                      <?php foreach ($products as $product): ?>
                      <option value="<?php echo $product->id; ?>"><?php echo $product->descr; ?></option>
                    <?php endforeach; ?>
                  </select>
                </td>
                <td>
                  <input class="form-control" id="exampleInputName" type="number" aria-describedby="nameHelp" name="price5" step="0.01" min="0">
                </td>
              </tr>
            </table>
          </div>
          
          

          <button class="btn btn-primary btn-block">Add Invoice</button>
        </form>
      </div>
    </div>




      
      <div style="height: 100px;"></div>
    </div>

<?php include('footer.php'); ?>