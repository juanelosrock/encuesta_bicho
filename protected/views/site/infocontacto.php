<style>
.form-control{
	height: 64px !important;
    padding: 12px 24px;
    font-size: 34px !important;
}
</style>
<div class="row text-center">
	<h3>Informacion de contacto</h3>	
	<?php 
		echo $this->renderPartial('_infocontacto', array('model'=>$model));
	?>
</div>