<?php 
foreach($invoices as $invoice):
foreach($receipts as $receipt):
  
  $invoice_number = $invoice->id; 
  $receipt_number = $receipt->id; 
  $invoice_date = $invoice->date; 
  $receipt_date = $receipt->date_time; 
  $invoice_amount = $invoice->amount; 
  $biller_img = $this->user_model->get_biller_image($invoice->biller);
  $biller_name = $this->user_model->get_biller_name($invoice->biller);
  $biller_address = $this->user_model->get_biller_address($invoice->biller);
  $biller_city = $this->user_model->get_biller_city($invoice->biller);
  $biller_country = $this->user_model->get_biller_country($invoice->biller);
  $biller_phone = $this->user_model->get_biller_phone($invoice->biller);
  $biller_email = $this->user_model->get_biller_email($invoice->biller);
  $biller_website = $this->user_model->get_biller_website($invoice->biller);
  $customer_name = $this->user_model->get_biller_name($invoice->customer);
  $customer_address = $this->user_model->get_biller_address($invoice->customer);
  $customer_city = $this->user_model->get_biller_city($invoice->customer);
  $customer_country = $this->user_model->get_biller_country($invoice->customer);
  $customer_phone = $this->user_model->get_biller_phone($invoice->customer);
  $customer_email = $this->user_model->get_biller_email($invoice->customer);
  $customer_website = $this->user_model->get_biller_website($invoice->customer);
  $paid = $this->user_model->get_paid_amount($invoice->id); 
  $balance = $invoice->amount - $paid;  
  $notes = $invoice->notes; 
  $details = $this->user_model->get_biller_invoice($invoice->biller);
  $payment_method = ucfirst($receipt->type);

  $products = array(); 
  //form an array from another array 

$products = array();
$prices = array();

foreach($sales as $sale): 
  array_push($products, $this->user_model->get_product_name($sale->product));
  array_push($prices, $sale->price);
endforeach;


$sales_array = array_combine($products, $prices);




$invoice->amount; 
$invoice->notes;


endforeach;
endforeach;
?>

<?php
require('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image(base_url().'img/logos/'.$biller_img,30,20,30);
$pdf->SetFont('Arial','B',16);
// Move to the right
$pdf->Cell(150);
// $pdf->Cell(30,20,'Receipt',1,0,'C'); with borders
$pdf->Cell(30,20,'Receipt');
// Line break
$pdf->Ln(60);
// Move to the right

$pdf->Cell(20);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(1,1,'Biller: '.$biller_name);

$pdf->Cell(100);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(1,1,'Payment Details');

$pdf->SetFont('Arial','',10);

$pdf->Ln(5);

$pdf->Cell(20);
$pdf->MultiCell(0,2,'Address: '.$biller_address);
$pdf->Cell(120);
$pdf->MultiCell(0,1,'Receipt Number: '.$receipt_number);

$pdf->Cell(20);
$pdf->MultiCell(0,3,'Phone: '.$biller_phone);
$pdf->Cell(120);
$pdf->MultiCell(0,2,'For Invoice: '.$invoice_number);


$pdf->Cell(20);
$pdf->MultiCell(0,2,'Email: '.$biller_email);
$pdf->Cell(120);
$pdf->MultiCell(0,2,'Invoice Amount: $'.$invoice_amount);

$pdf->Cell(20);
$pdf->MultiCell(0,2,'Website: '.$biller_website);
$pdf->Cell(120);
$pdf->MultiCell(0,2,'Paid: $'.$paid);
$pdf->Cell(120);
$pdf->MultiCell(0,5,'Balance: $'.$balance);
$pdf->Cell(120);
$pdf->MultiCell(0,5,'Receipt Date: '.$receipt_date);
$pdf->Cell(120);
$pdf->MultiCell(0,5,'Payment Method: '.$payment_method);
$pdf->Ln(10);
// Move to the right

$pdf->Cell(20);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(1,1,'Customer: '.$customer_name);
$pdf->Ln(5);
$pdf->Cell(20);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(0,5,'Address: '.$customer_address);
$pdf->Cell(20);
$pdf->MultiCell(0,5,'Phone: '.$customer_phone);
$pdf->Cell(20);
$pdf->MultiCell(0,5,'Email: '.$customer_email);
$pdf->Cell(20);
$pdf->MultiCell(0,5,'Website: '.$customer_website);
$pdf->Ln(20);



$pdf->Cell(20);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(1,1,'Extra Details');
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(0,20,$notes);
$pdf->Cell(20);
$pdf->MultiCell(0,20,$details);
$pdf->Ln(6);

      

$pdf->Output();