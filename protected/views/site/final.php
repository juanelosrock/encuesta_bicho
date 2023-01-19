<?php 
$info = Infocontacto::model()->findByPk($_GET['contacto']);
?>
<style>
	body{
	font-size:20px !important;}
</style>
<h1><?php echo $info->nombre ?>, gracias por tus respuestas.</h1>
<b><?php echo $info->fecha ?></b>

<p>Nuestra principal invitación es a que mantengas la calma.</p>

<i>Ten en cuenta que la información a continuación no sustituye un diagnóstico ni una prescripción médica.</i>
<?php if($alerta == 0) { ?>
<div class="jumbotron">
	<h3 style="color:green;">Puedes asistir a tu sitio de trabajo</h3>. Hoy no has reportado síntomas de Covid-19. Si estás trabajando de manera remota, continúa con tus actividades normalmente y recuerda que debes diligenciar la encuesta de síntomas diariamente y cumplir las medidas de prevención para disminuir la posibilidad de contagio:
	<ul>
		<li>Utiliza siempre el tapabocas.</li>
		<li>Evita tocar el tapabocas.</li>
		<li>Evita comer alimentos en la calle.</li>
		<li>Evita tocarte la cara.</li>
		<li>Recuerda lavarte las manos con agua y jabón con frecuencia en especial al llegar a tu trabajo y al llegar a casa, antes de comer o tomar algo y antes colocarte y después de retirar el tapabocas.</li>
		<li>El tapabocas de tela debes lavarlo con agua y jabón después de usarlo.</li>
		<li>Si has tenido resultado positivo de pruebas COVID19 en los últimos 15 días, debes informar el resultado y la conducta médica a tu empleador, y debes cumplir el aislamiento que te han indicado</li>
	<ul>
</div>
<?php } else{ ?>
<div class="jumbotron">
	<h3 style="color:red;">NO puedes asistir a tu sitio de trabajo</h3>. Hoy has reportado síntomas de Covid-19. Debes solicitar tu prueba inmediatamente a tu EPS, Si estás trabajando de manera remota, continúa con tus actividades normalmente y recuerda que debes diligenciar la encuesta de síntomas diariamente y cumplir las medidas de prevención para disminuir la posibilidad de contagio:
	<ul>
		<li>Utiliza siempre el tapabocas.</li>
		<li>Evita tocar el tapabocas.</li>
		<li>Evita comer alimentos en la calle.</li>
		<li>Evita tocarte la cara.</li>
		<li>Recuerda lavarte las manos con agua y jabón con frecuencia en especial al llegar a tu trabajo y al llegar a casa, antes de comer o tomar algo y antes colocarte y después de retirar el tapabocas.</li>
		<li>El tapabocas de tela debes lavarlo con agua y jabón después de usarlo.</li>
		<li>Si has tenido resultado positivo de pruebas COVID19 en los últimos 15 días, debes informar el resultado y la conducta médica a tu empleador, y debes cumplir el aislamiento que te han indicado</li>
	<ul>
</div>
<?php } ?>

