<div class="box">

	<div class="box-header">

    

    	<!------CONTROL TABS START------->

		<ul class="nav nav-tabs nav-tabs-left">

			<li class="active">

            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 

					<?php echo ('Invoice List');?>

                    	</a></li>

		</ul>

    	<!------CONTROL TABS END------->

        

	</div>

	<div class="box-content padded">

		<div class="tab-content">

            <!----TABLE LISTING STARTS--->

            <div class="tab-pane box active" id="list">

				

                <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive table-hover">

                	<thead>

                		<tr>

                    		<th><div>#</div></th>

                    		<th><div><?php echo ('Invoice Id');?></div></th>

                    		<th><div><?php echo ('Amount');?></div></th>

                    		<th><div><?php echo ('Accountant');?></div></th>

                    		<th><div><?php echo ('Title');?></div></th>

                    		<th><div><?php echo ('Description');?></div></th>

                    		<th><div><?php echo ('Creation Timestamp');?></div></th>

                    		<th><div><?php echo ('Status');?></div></th>

                    		<th><div><?php echo ('Option');?></div></th>

						</tr>

					</thead>

                    <tbody>

                    	<?php $count = 1;foreach($invoices as $row):?>

                        <tr>

                            <td><?php echo $count++;?></td>

							<td><?php echo $row['invoice_id'];?></td>

							<td><?php echo '$'.$row['amount'];?></td>

							<td><?php echo $this->crud_model->get_type_name_by_id('accountant',$row['accountant_id'],name);?></td>

							<td><?php echo $row['title'];?></td>

							<td><?php echo $row['description'];?></td>

                            <td><?php echo date('d M,Y', $row['creation_timestamp']);?></td>

							<td><?php echo $row['status'];?></td>

							<td align="center">

        					</td>

                        </tr>

                        <?php endforeach;?>

                    </tbody>

                </table>

			</div>

            <!----TABLE LISTING ENDS--->

		</div>

	</div>

</div>