<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header>
        <?php
        NavBar::begin([
            // 'brandLabel' => "Yii::$app->name",
            // 'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
            ],
        ]);

        echo Nav::widget([
            'options' => ['class' => 'navbar-nav'],
            'items' => [
                // ['label' => 'Beranda', 'url' => ['/site/index']],
                [
                    'label' => 'Diklat Struktural',
                    'items' => [
                        ['label' => 'PKN (Pelatihan Kepemimpinan Nasional)', 'url' => '/peserta/index?type=struktural_pkn'],
                        ['label' => 'PKA (Pelatihan Kepemimpinan Administrasi)', 'url' => '/peserta/index?type=struktural_pka'],
                        ['label' => 'PKP (Pelatihan Kepemimpinan Pengawas)', 'url' => '/peserta/index?type=struktural_pkp'],
                    ],
                ],
                [
                    'label' => 'Diklat Fungsional',
                    'items' => [
                        ['label' => 'Diklat Calon Kepala Sekolah', 'url' => '/peserta/index?type=fungsional_kepsek'],
                    ],
                ],
                [
                    'label' => 'Diklat Teknis',
                    'items' => [
                        ['label' => 'Diklat Darurat Bencana', 'url' => '/peserta/index?type=teknis_bencana'],
                        ['label' => 'Diklat Pemadam Kebakaran', 'url' => '/peserta/index?type=teknis_kebakaran'],
                        ['label' => 'Diklat Camat', 'url' => '/peserta/index?type=teknis_camat'],
                    ],
                ],

                Yii::$app->user->isGuest ? (['label' => 'Login', 'url' => ['/site/login']]) : ('<li>'
                    . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>')
            ],
        ]);
        NavBar::end();
        ?>
    </header>

    <main role="main" class="flex-shrink-0">
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <footer class="footer mt-auto py-3 text-muted">
        <div class="container">
            <p class="float-left">&copy; My Company <?= date('Y') ?></p>
            <p class="float-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>