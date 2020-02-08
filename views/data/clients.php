<?php

/* @var $this yii\web\View */
/* @var $clients app\models\Clients[] */

use \yii\helpers\Html;

$this->title = 'All clients';
?>

<style>
    td {
        border: 1px solid green;
        width: 10%;
        text-align: center;
    }

    th {
        text-align: center;
    }
</style>

<?php if (!empty($clients)): ?>
    <table>
        <thead>
            <th> ID </th>
            <th> FIRST NAME </th>
            <th> LAST NAME </th>
            <th> PHONE </th>
            <th> EMAIL </th>
        </thead>
        <tbody>
        <?php foreach ($clients as $client): ?>
            <tr>
                <td> <?= $client->id; ?> </td>
                <td> <?= $client->first_name; ?> </td>
                <td> <?= $client->last_name; ?> </td>
                <td> <?= $client->phone; ?> </td>
                <td> <?= $client->email; ?> </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <?=Html::img('https://i.pinimg.com/originals/31/73/35/317335a0040f29071219a78392946fb7.jpg',
        [
            'class' => 'img-thumbnail',
            'style' => 'margin: 0 auto; display: block;',
        ]
    ); ?>
<?php endif; ?>
