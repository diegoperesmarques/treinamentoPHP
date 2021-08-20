<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url('assets/pagina.css'); ?>" />
    <title><?php echo $titulo ?></title>
</head>
<body>
    <h1>Página contatos</h1>
<a href = "<?php echo base_url(); ?>">Home</a>
<a href = "<?php echo base_url('fotos'); ?>">Fotos</a>
<a href = "<?php echo base_url('videos'); ?>">Videos</a>
<a href = "<?php echo base_url('contato'); ?>">Contato</a>

<h2>Envie uma mensagem</h2>
<?php
if($formerror){
    echo "<p> {$formerror} </p>";
}

echo form_open('primeiro/contato');

echo form_label('Seu nome: ', 'nome');
echo form_input('nome', set_value('nome'));

echo form_label('Seu email: ', 'email');
echo form_input('email', set_value('email'));

echo form_label('Assunto: ', 'assunto');
echo form_input('assunto', set_value('assunto'));

echo form_label('Mensagem: ', 'mensagem');
echo form_textarea('mensagem', set_value('mensagem'));

echo form_submit('enviar', 'Enviar mensagem', array('class' => 'botao'));

echo form_close();
?>
</body>
</html>