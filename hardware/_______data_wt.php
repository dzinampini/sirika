<?php include('opendb.php');
  $wt_query = "SELECT * FROM water_tanks ORDER BY id DESC  LIMIT 1 ";
  $wt_values=mysqli_query($con, $wt_query);
    $row=mysqli_fetch_array($wt_values);
    $wta = $row['a'];
    $wtb = $row['b'];
    $wtc = $row['c'];
    $wtd = $row['d']; ?>

    
<div class="table-responsive">
          <table class="table">
            <tr>
              <th>Tank #</th>
              <th>A</th>
              <th>B</th>
              <th>C</th>
              <th>D</th>
              <th>E</th>
              <th>F</th>
              <th>G</th>
              <th>H</th>
              <th>I</th>
              <th>J</th>
              <th>K</th>
              <th>L</th>
            </tr>
            <tr>
              <th>Status</th>
              <td>Inlet Open</td>
              <td>Inlet Closed</td>
              <td>Inlet Open</td>
              <td>Inlet Closed</td>
              <td>Inlet Open</td>
              <td>Inlet Open</td>
              <td>Inlet Open</td>
              <td>Inlet Closed</td>
              <td>Inlet Open</td>
              <td>Inlet Open</td>
              <td>Inlet Open</td>
              <td>Inlet Open</td>
            </tr>

            <tr>
              <th>Value</th>
              <td><?php echo $wta; ?></td>
              <td><?php echo $wtb; ?></td>
              <td><?php echo $wtc; ?></td>
              <td><?php echo $wtd; ?></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </table>
        </div>