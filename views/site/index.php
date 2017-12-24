<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="body-content">

        <div class="row">
            <div class="col-lg-12 text-center profile">
            <?php if ($user->photo) { ?>
                <div class="img">
                    <img src="<?= $user->photo ?>">
                </div>
            <?php } ?>

            <?php if ($user->username) { ?>
                <p><?= $user->username ?></p>
            <?php } ?>

            <?php if ($user->email) { ?>
                <p><?= $user->email ?></p>
            <?php } ?>
            </div>
        </div>

    </div>
</div>
