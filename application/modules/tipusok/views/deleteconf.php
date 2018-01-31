<h1><?=$headline ?></h1><br/>
<?= validation_errors("<p style='color:red;'>", "</p>");?>

<?php

	if(isset($flash))
	{
		echo $flash;
	}
	?>

<div class="row-fluid sortable">
				<div class="box box-default">
					<div class="box-header with-border" data-original-title>
						<h3 class="box-title"><i class="fa fa-fw fa-gear"></i> Törlés Megerősítése</h3>
						<div class="box-tools pull-right">
				            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
			          </div>
					</div>
					<div class="box-body">
		<h4>Biztos benne, hogy eltávolítja a típusat?</h4>
		


		<?php
		$attributes = array('class' => 'form-horizontal');
		echo form_open_multipart('Tipusok/delete/'.$update_id, $attributes);
		?>

		
		  <fieldset>

			<div class="control-group" style="height:200px;">
				<button type="submit" name="submit" value="Yes - Delete Collection" class="btn btn-danger margin" >Igen - Típus Eltávolítása</button>
				<button type="submit" name="submit" value="Cancel" class="btn btn-secondary margin">Mégse</button>
			</div>    

		  </fieldset>
		</form>  





		</div>
	</div><!--/span-->
</div><!--/row-->