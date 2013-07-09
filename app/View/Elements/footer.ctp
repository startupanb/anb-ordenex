<script type="text/javascript">
	URL_BASE = "<?php echo Router::url('/', true); ?>";
</script>

<?php

// Linha comentada criando conflito nas mascaras do formulario
// esta incluindo após o script da mascara ai resolvi comenta e add através do default
// Tb modifiquei o arquivo peguei um atualizado se tiver problema se muda la :D
// $jsList = array('jquery.min','jquery.maskedinput');
$jsList = array();

if (isset($this->viewVars['requestJs']))
	$jsList[] = $this->viewVars['requestJs'];
?>

<?php echo $this->Html->script($jsList) ?>