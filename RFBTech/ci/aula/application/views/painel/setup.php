<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/painel.css'); ?>" />
    <title>Document</title>
</head>
<body>
<h2><?php echo $h2; ?></h2>
<?php
if ($msg = get_msg()){
    echo '<div class = "msg-box">' .$msg. '</div>';
}

echo form_open();

echo form_label('Nome para login: ', 'login');
echo form_input('login', set_value('login'), array('autofocus' => 'autofocus'));

echo form_label('Email do administrador do site: ', 'email');
echo form_input('email', set_value('email'));

echo form_label('Senha: ', 'senha');
echo form_password('senha', set_value('senha'));

echo form_label('Repita a senha: ', 'senha2');
echo form_password('senha2', set_value('senha2'));

echo form_submit('envia', 'Salvar dados', array('class' => 'botao'));

echo form_close();
?>
    
</body>
</html>