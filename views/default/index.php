<?php

use ravesoft\helpers\Html;
use ravesoft\settings\assets\SettingsAsset;
use ravesoft\settings\models\GeneralSettings;
use ravesoft\widgets\ActiveForm;
use ravesoft\widgets\LanguagePills;

/* @var $this yii\web\View */
/* @var $model ravesoft\models\Setting */
/* @var $form ravesoft\widgets\ActiveForm */

$this->title = Yii::t('rave/settings', 'General Settings');
$this->params['breadcrumbs'][] = $this->title;

SettingsAsset::register($this);
?>
<div class="setting-index">

    <div class="row">
        <div class="col-lg-8"><h3 class="lte-hide-title page-title"><?= Html::encode($this->title) ?></h3></div>
        <div class="col-lg-4"><?= LanguagePills::widget() ?></div>
    </div>

    <div class="setting-form">
        <?php
        $form = ActiveForm::begin([
            'id' => 'setting-form',
            'validateOnBlur' => false,
            'fieldConfig' => [
                'template' => "<div class=\"settings-group\"><div class=\"settings-label\">{label}</div>\n<div class=\"settings-field\">{input}\n{hint}\n{error}</div></div>"
            ],
        ])
        ?>



        <?= $form->field($model, 'title', ['multilingual' => true])->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'description', ['multilingual' => true])->textInput(['maxlength' => true])/*->hint($model->getDescription('description'))*/ ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true])->hint($model->getDescription('email')) ?>

        <?= $form->field($model, 'timezone', ['options' => ['class' => 'form-group select-field']])
            ->dropDownList(GeneralSettings::getTimezones())->hint($model->getDescription('timezone')) ?>

        <?= $form->field($model, 'dateformat', ['options' => ['class' => 'form-group select-field']])
            ->dropDownList(GeneralSettings::getDateFormats())->hint($model->getDescription('dateformat')) ?>

        <?= $form->field($model, 'timeformat', ['options' => ['class' => 'form-group select-field']])
            ->dropDownList(GeneralSettings::getTimeFormats())->hint($model->getDescription('timeformat')) ?>

        <div class="form-group">
            <?= Html::submitButton(Yii::t('rave', 'Save'), ['class' => 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>


