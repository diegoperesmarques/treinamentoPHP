<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url('assets/css/principal.css'); ?>" />
    <title>Página de vídeos</title>
</head>
<body>
<table>
    <tbody>
        <tr>
            <td><a href = "<?php echo base_url(); ?>">Home</a></td>
            <td><a href = "<?php echo base_url('fotos'); ?>">Fotos</a></td>
            <td><a href = "<?php echo base_url('videos'); ?>">Videos</a></td>
            <td><a href = "<?php echo base_url('contato'); ?>">Contato</a></td>
        </tr>
    </tbody>
</table>
<h1>Cadastre-se abaixo</h1>
<?php
echo ("<p> {$formerror} </p>");

echo form_open('contato');

echo form_label('Seu nome: ', 'nome');
echo form_input('nome', set_value('nome'));

echo form_label('Seu email: ', 'email');
echo form_input('email', set_value('email'));

echo form_label('Seu Telefone: ', 'telefone');
echo form_input('telefone', set_value('telefone'));

echo form_label('Comentário: ', 'comentario');
echo form_textarea('comentario', set_value('comentario'));

echo form_submit('enviar', 'Enviar mensagem', array('class' => 'botao'));

echo form_close();


?>
</body>
</html>