<?php

/* @var $this yii\web\View */
/* @var $bookings app\models\Bookings[] */

use \yii\helpers\Html;

$this->title = 'All bookings';
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

<?php if (!empty($bookings)): ?>
    <table>
        <thead>
            <tr>
                <th> ID </th>
                <th> CLIENT ID </th>
                <th> TOTAL </th>
                <th> CREATE TIME </th>
                <th> DATE FROM </th>
                <th> DATE TO </th>
                <th> TOWN </th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($bookings as $booking): ?>
            <tr>
                <td> <?= $booking->id; ?> </td>
                <td> <?= $booking->client_id; ?> </td>
                <td> <?= $booking->total; ?> </td>
                <td> <?= $booking->create_time; ?> </td>
                <td> <?= $booking->date_from; ?> </td>
                <td> <?= $booking->date_to; ?> </td>
                <td> <?= $booking->town; ?> </td>
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
