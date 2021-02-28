<div class="main-content">
    <div class="container-fluid">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="card">
            		<div class="card-body">
			        	<table class="table">
			        		<tbody>
			        			<?php foreach ($users as $user) : ?>

			        			<tr>
			        				<td><?= $user['name'] ?></td>
			        				<td><?= $user['username'] ?></td>
			        				<td><?= $user['noTelp'] ?></td>
			        				<td><?= $user['created_at'] ?></td>
			        			</tr>

			        			<?php endforeach; ?>
			        		</tbody>
			        	</table>
			        </div>
			    </div>
			</div>
      	</div>
    </div>
</div>
