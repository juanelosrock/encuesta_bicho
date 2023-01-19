<div class="row text-center" style="margin-left:20%; margin-right:20%;">
	<h3>¿Has tenido alguno de los siguientes síntomas en las últimas 24 horas?</h3>	
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'preguntas-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// See class documentation of CActiveForm for details on this,
		// you need to use the performAjaxValidation()-method described there.
		'enableAjaxValidation'=>false,
	)); ?>
	<table class="table table-striped table-bordered">
	<?php foreach($preguntas as $pregunta){ ?>
	<tr>
		<td><?php echo $pregunta->texto ?></td>					
		<input id="ytPreguntas_respuesta" type="hidden" value="" name="Preguntas[respuesta]">
		<td>
			<input class="form-control" id="Preguntas_respuesta_0_<?php echo $pregunta->id ?>" value="SI" type="radio" name="Preguntas[respuesta_<?php echo $pregunta->id ?>]"> 
			<label for="Preguntas_respuesta_0_<?php echo $pregunta->id ?>">SI</label>
		</td>
		<td>
			<input class="form-control" id="Preguntas_respuesta_1_<?php echo $pregunta->id ?>" checked value="NO" type="radio" name="Preguntas[respuesta_<?php echo $pregunta->id ?>]"> 
			<label for="Preguntas_respuesta_1_<?php echo $pregunta->id ?>">NO</label>
		</td>
		
	</tr>
	
	
	<?php } ?>	
	<tr>
		<td colspan="3">
			<?php echo CHtml::submitButton('Finalizar',array('class'=>'btn btn-primary btn-block btn-lg')); ?>
		</td>
    </tr>
	</table>
	<?php $this->endWidget(); ?>
</div>