<?php
/* @var $this InfocontactoController */
/* @var $model Infocontacto */
/* @var $form CActiveForm */
?>

<div class="row" style="margin-left:25%; margin-right:25%;">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'infocontacto-_infocontacto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="col-lg-12">
	<div class="form-group">
		<h4><?php echo $form->labelEx($model,'tipo_identificacion'); ?></h4>
		<?php echo $form->dropDownList($model,'tipo_identificacion',array('CEDULA'=>'CEDULA', 'CEDULA_EXTRANJERIA'=>'CEDULA EXTRANJERIA'),array('class'=>'form-control text-center')); ?>
		<?php echo $form->error($model,'tipo_identificacion'); ?>
	</div>
    </div>
    <div class="col-lg-12">
	<div class="form-group">
		<h4><?php echo $form->labelEx($model,'nombre'); ?></h4>
		<?php echo $form->textField($model,'nombre',array('class'=>'form-control text-center')); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>
    </div>
    <div class="col-lg-12">
	<div class="form-group">
		<h4><?php echo $form->labelEx($model,'identificacion'); ?></h4>
		<?php echo $form->textField($model,'identificacion',array('class'=>'form-control text-center')); ?>
		<?php echo $form->error($model,'identificacion'); ?>
	</div>
    </div>
    <div class="col-lg-12">
	<div class="form-group">
		<?php echo CHtml::submitButton('Siguiente ->',array('class'=>'btn btn-primary btn-block btn-lg')); ?>
	</div>
    </div>
<?php $this->endWidget(); ?>

</div><!-- form -->