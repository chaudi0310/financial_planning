<?php
include '../connection/dbConfig.php';
$gethistory = mysqli_query($db, "SELECT * FROM other_expenses ORDER by id DESC");
$countgethistory = mysqli_num_rows($gethistory);

?>
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-history"></i> Other Expenses</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Expenses</th>
                  <th>Year 1</th>
				  <th>Year 2 </th>
                  <th>Year 3</th>
				  <th>Year 4</th>
				  <th>Year 5<th>
				  
                </tr>
              </thead>
              <tfoot>
                <tr>
                 <th>Expenses</th>
                  <th>Year 1</th>
				  <th>Year 2 </th>
                  <th>Year 3</th>
				  <th>Year 4</th>
				  <th>Year 5<th>
                </tr>
              </tfoot>
              <tbody>
			  <?php
				if($countgethistory > 0){
					while($row = mysqli_fetch_assoc($gethistory)){
			  ?>
                <tr>
                  <td><?php echo $row['target']; ?></td>
                  <td><?php echo $row['year1']; ?></td>
				  <td><?php echo $row['year2']; ?></td>
				  <td><?php echo $row['year3']; ?></td>
				  <td><?php echo $row['year4']; ?></td>
				  <td><?php echo $row['year5']; ?></td>
                  <td><a class="btn btn-danger" href="other-misc/delete.php?id=<?php echo $row['id'] ?>"><i class="fa fa-trash"></i></a></td>
                </tr>
                <?php } } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>