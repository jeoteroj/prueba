<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Datos Peliculas</title>
</head>
<body>

<br>

<table border="1" >
    <tr>
        <td>Codigo</td>
        <td>Titulo</td>
        <td>Autor</td>
    </tr>

    <?php
    foreach ($this->con as $row) {
        ?>

        <tr>
            <td><?php echo $row->Codigo; ?></td>
            <td><?php echo $row->Titulo; ?></td>
            <td><?php echo $row->Autor; ?></td>
        </tr>
        <?php
    }
    ?>
</table>

</body>
</html>