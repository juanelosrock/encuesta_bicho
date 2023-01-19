<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<style>
	p{
		font-size:16px !important;
	}
</style>
<br/>
<br/>
<br/>
 <div class="row">
<div class="jumbotron text-center">
	<h2 class="bg-primary">Esta herramienta ayudara a la empresa a comprender que hacer a continuacion con respecto al COVID-19</h2>
	<p>
		Autorizo a Diaz y Restrepo SAS como mi empleador el tratamiento de mis datos personales, incluyendo los de salud que son sensibles, con la finalidad de desarrollar acciones de promoción, prevención, tratamiento para la gestión de riesgo en salud y/o frente a la propagación, contagio y control de COVID-19, acorde con lo normado por el Ministerio de Salud y Protección Social y las demás autoridades competentes, y para las demás finalidades que se encuentran establecidas en la política de privacidad que puede ser consultada con nuestro departamento de recursos humanos y demas canales de contacto, y la forma de ejercer mis derechos a revocar la autorización, conocer, actualizar, rectificar y suprimir mi información.		
	</p>
	<p>
		Será posible compartir información con distintas entidades públicas (del nivel central, descentralizadas y de vigilancia y control, y demás autoridades administrativas y jurisdiccionales), para tomar acciones frente a la propagación, contagio y control de COVID-19.
	</p>
	<p>
		Se entiende por tratamiento de datos, la facultad que tendrá Diaz y Restrepo como empleador de almacenar, compartir, utilizar, procesar, recolectar, divulgar, transferir, transmitir, información relacionada con el estado de salud, en cumplimiento de las disposiciones legales.
	</p>
</div>
	<a href="<?php echo Yii::app()->createUrl('/site/infocontacto') ?>" class="btn btn-primary btn-block btn-lg">Si, Autorizo</a>
</div>