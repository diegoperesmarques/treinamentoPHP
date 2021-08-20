<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/principal.css'); ?>" />
    <title>Página de Fotos</title>
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
<h1>Página de fotos</h1>
</body>
</html>