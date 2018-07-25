<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Add Deduction</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="empdeduct_add.php">
          		  <div class="form-group">
                  	<label for="employee" class="col-sm-3 control-label">Employee ID</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="employee" name="employee" required>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="datepicker_add" class="col-sm-3 control-label">Date</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="datepicker_add" name="date" required>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="deduction" class="col-sm-3 control-label">Deduction</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="deduction" id="deduction" required>
                        <option value="" selected>- Select -</option>
                        <?php
                          $sql = "SELECT * FROM deductiontype";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['id']."'>".$srow['deductiondesc']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
				</div>
                <div class="form-group">
                  	<label for="amount" class="col-sm-3 control-label">Amount</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="amount" name="amount">
                  	</div>
                </div>
                 
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span class="employee_name"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="empdeduct_edit.php">
            		<input type="hidden" class="otid" name="id">
                <div class="form-group">
                    <label for="datepicker_add" class="col-sm-3 control-label">Date</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="datepicker_add" name="date" required>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="deduction" class="col-sm-3 control-label">Deduction</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="deduction" id="deduction" required>
                        <option value="" selected>- Select -</option>
                        <?php
                          $sql = "SELECT * FROM deductiontype";
                          $query = $conn->query($sql);
                          while($trow = $query->fetch_assoc()){
                            echo "
                              <option value='".$trow['id']."'>".$trow['deductiondesc']."</option>
                            ";
                          }
                        ?>
                      </select>
                    </div>
				</div>
                <div class="form-group">
                  	<label for="amount" class="col-sm-3 control-label">Amount</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="amount" name="amount">
                  	</div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span id="overtime_date"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="empdeduct_delete.php">
            		<input type="hidden" class="otid" name="id">
            		<div class="text-center">
	                	<p>DELETE DEDUCTION</p>
	                	<h2 class="employee_name bold"></h2>
	            	</div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
            	</form>
          	</div>
        </div>
    </div>
</div>


     