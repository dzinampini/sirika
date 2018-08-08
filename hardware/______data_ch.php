<?php include('opendb.php'); 

    $ch_query = "SELECT * FROM chillers ORDER BY id DESC  LIMIT 1 ";
    $ch_values=mysqli_query($con, $ch_query);
    $row=mysqli_fetch_array($ch_values);
    $ca = $row['a'];
    $cb = $row['b'];
    $cc = $row['c'];
    $cd = $row['d']; ?>



    
        <div class="table-responsive">
          <table class="table">
            <tr>
              <th>Chiller #</th>
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
              <td><?php echo $ca; ?></td>
              <td><?php echo $cb; ?></td>
              <td><?php echo $cc; ?></td>
              <td><?php echo $cd; ?></td>
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
        