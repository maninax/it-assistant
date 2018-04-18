<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProjectSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'chat_id') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'triggered') ?>

    <?= $form->field($model, 'missed') ?>

    <?php // echo $form->field($model, 'preview') ?>

    <?php // echo $form->field($model, 'history') ?>

    <?php // echo $form->field($model, 'agent_names') ?>

    <?php // echo $form->field($model, 'duration') ?>

    <?php // echo $form->field($model, 'country_code') ?>

    <?php // echo $form->field($model, 'country_name') ?>

    <?php // echo $form->field($model, 'region') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'platform') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'hour') ?>

    <?php // echo $form->field($model, 'min') ?>

    <?php // echo $form->field($model, 'sec') ?>

    <?php // echo $form->field($model, 'started_by') ?>

    <?php // echo $form->field($model, 'visitor_id') ?>

    <?php // echo $form->field($model, 'visitor_name') ?>

    <?php // echo $form->field($model, 'visitor_email') ?>

    <?php // echo $form->field($model, 'visitor_phone') ?>

    <?php // echo $form->field($model, 'visitor_notes') ?>

    <?php // echo $form->field($model, 'session_start_date') ?>

    <?php // echo $form->field($model, 'session_end_date') ?>

    <?php // echo $form->field($model, 'session_ip') ?>

    <?php // echo $form->field($model, 'session_id') ?>

    <?php // echo $form->field($model, 'session_user_agent') ?>

    <?php // echo $form->field($model, 'session_browser') ?>

    <?php // echo $form->field($model, 'visitor_message_count') ?>

    <?php // echo $form->field($model, 'agent_message_count') ?>

    <?php // echo $form->field($model, 'total_message_count') ?>

    <?php // echo $form->field($model, 'is_unread') ?>

    <?php // echo $form->field($model, 'landing_page') ?>

    <?php // echo $form->field($model, 'project') ?>

    <?php // echo $form->field($model, 'referral') ?>

    <?php // echo $form->field($model, 'tags') ?>

    <?php // echo $form->field($model, 'department_name') ?>

    <?php // echo $form->field($model, 'agent_ids') ?>

    <?php // echo $form->field($model, 'rating_score') ?>

    <?php // echo $form->field($model, 'rating_comment') ?>

    <?php // echo $form->field($model, 'max_response_time') ?>

    <?php // echo $form->field($model, 'avg_response_time') ?>

    <?php // echo $form->field($model, 'first_response_time') ?>

    <?php // echo $form->field($model, 'zendesk_ticket_id') ?>

    <?php // echo $form->field($model, 'last_conversion_goal_name') ?>

    <?php // echo $form->field($model, 'last_conversion_goal_id') ?>

    <?php // echo $form->field($model, 'last_conversion_date') ?>

    <?php // echo $form->field($model, 'last_conversion_attribute') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'remark') ?>

    <?php // echo $form->field($model, 'contact_email') ?>

    <?php // echo $form->field($model, 'contact_number') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
