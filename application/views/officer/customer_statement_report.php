
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $compdata->comp_name; ?> | CUSTOMER ACCOUNT STATEMENT</title>
</head>
<body>

<div id="container">
  <div style='width: 100%;align-items: center; display: flex;justify-content:space-between;flex-direction: row;'>
 </div>
  <style>
    .pull{
    text-align: center;
   /* margin-top: 100px;
    margin-bottom: 0px;
    margin-right: 150px;
    margin-left: 80px;*/

    }
  </style>
  <style>
    .display{
      display: flex;
      
    }
  </style>

     <style>
             .c {
               text-transform: uppercase;
               }
                
                </style>

     <table  style="border: none">
  <tr style="border: none">
  <td style="border: none">
 <div style="width: 20%;">
  <img src="<?php echo base_url().'assets/img/'.$compdata->comp_logo ?>" style="width: 100px;height: 80px;">
  </div> 

        </td>
        <td style="border: none">
      <div class="pull">
  <p style="font-size:20px;" class="c"> <b><?php echo $compdata->comp_name; ?></b><br>
        <?php echo $compdata->adress; ?> <br>
        <?php $day = date("d-m-Y"); ?>
        </p>
         <p style="font-size:15px;text-align:center;"><b>CUSTOMER ACCOUNT STATEMENT</b> / <?php echo $day; ?></p>

  </div>
        </td>
      </tr>
    </table>


        <table>
          <tr>
            <td>
            <b style="font-size:12px;border: none;">Name</b> : <?php echo $statement->f_name; ?> <?php echo $statement->m_name; ?> <?php echo $statement->l_name; ?>
            <br>
            <b style="font-size:12px;border: none;">Customer ID</b> <?php echo $statement->customer_code; ?>
            <br>
            <b style="font-size:12px;border: none;">Address </b>: <?php echo $statement->region_name; ?>,<?php echo $statement->district; ?>,<?php echo $statement->ward; ?>,<?php echo $statement->street; ?>
             </td>
            <td>
              <b style="font-size:12px;border: none;">Branch</b> : <?php echo $statement->blanch_name; ?>
              <br>
              <b style="font-size:12px;border: none;">Phone number </b>: <?php echo $statement->phone_no; ?>
              <br>
              <br>
            </td>
          </tr>
        </table>
 
  <div id="body">
  <style> 
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 5px;
}

tr:nth-child(even) {
  background-color: ;
}

</style>
</head>
<body>

<hr>

<table>
  <tr>
    <th style="font-size:12px;border: none;">Date</th>
    <th style="font-size:12px;border: none;">Description</th>
    <th style="font-size:12px;border: none;">Deposit</th>
    <th style="font-size:12px;border: none;">Withdrawal</th>
    <th style="font-size:12px;border: none;">Balance</th>
  </tr>


    <?php foreach ($payisnull as $payisnulls): ?>
                                            <tr>
                                              <td class="c"><?php echo $payisnulls->date_data; ?></td>
                                              <td class="c">  <?php echo $payisnulls->emply; ?> <?php echo $payisnulls->description; ?>
                                              <?php if ($payisnulls->p_method == TRUE) {
                                              ?>
                                              /<?php echo $payisnulls->p_method; ?>
                                          <?php }else{ ?>
                                          <?php } ?>
                                               <?php if ($payisnulls->fee_id == TRUE) {
                                              ?>
                                              / <?php echo $payisnulls->fee_desc; ?> <?php echo $payisnulls->fee_percentage; ?> <?php echo $payisnulls->symbol; ?>
                                          <?php }else{ ?>
                                            <?php } ?>
                                               / <?php //echo @$payisnulls->description; ?>  <?php echo @$payisnulls->loan_name ; ?>
                                         <?php if(@$payisnulls->day == 1){
                                           echo "Daily";
                                    }elseif(@$payisnulls->day == 7){
                                         echo "Weekly";
                                    }elseif (@$payisnulls->day == 30 || @$payisnulls->day == 31 || @$payisnulls->day == 29 || @$payisnulls->day == 28) {
                                        echo "Monthly";
                                     ?> 
                                    <?php } ?><?php echo $payisnulls->session; ?>  / AC/No. <?php echo @$payisnulls->loan_code; ?></td>
                                              <td>
                                                <?php if($payisnulls->depost == TRUE){ ?>
                                                <?php echo round(@$payisnulls->depost,2); ?>
                                            <?php }elseif($payisnulls->depost == FALSE){ ?>
                                            0.00
                                                <?php } ?>
                                            </td>
                                              <td>
                                                <?php if (@$payisnulls->withdrow == TRUE) {
                                                 ?>
                                                <?php echo round(@$payisnulls->withdrow,2); ?>
                                                <?php }elseif (@$payisnulls->withdrow == FALSE) {
                                                 ?>
                                                 0.00
                                            <?php } ?>
                                            </td>
                                              <td>
                                                <?php if (@$payisnulls->balance == TRUE) {
                                                 ?>
                                                <?php echo round(@$payisnulls->balance,2); ?>
                                                <?php }elseif (@$payisnulls->balance == FALSE) {
                                                 ?>
                                                 0.00
                                                 <?php } ?>
                                            </td>
                                              </tr>
                                        <?php endforeach; ?>
                                          </tbody>
            
                                    <tbody>
                              </tbody>
                   

</table>
  </div>

</div>

</body>
</html>




