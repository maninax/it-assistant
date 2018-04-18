<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Project */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'chat_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'triggered')->textInput() ?>

    <?= $form->field($model, 'missed')->textInput() ?>

    <?= $form->field($model, 'preview')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'history')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'agent_names')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duration')->textInput() ?>

    <?= $form->field($model, 'country_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'platform')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'hour')->textInput() ?>

    <?= $form->field($model, 'min')->textInput() ?>

    <?= $form->field($model, 'sec')->textInput() ?>

    <?= $form->field($model, 'started_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'visitor_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'visitor_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'visitor_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'visitor_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'visitor_notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'session_start_date')->textInput() ?>

    <?= $form->field($model, 'session_end_date')->textInput() ?>

    <?= $form->field($model, 'session_ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'session_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'session_user_agent')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'session_browser')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'visitor_message_count')->textInput() ?>

    <?= $form->field($model, 'agent_message_count')->textInput() ?>

    <?= $form->field($model, 'total_message_count')->textInput() ?>

    <?= $form->field($model, 'is_unread')->textInput() ?>

    <?= $form->field($model, 'landing_page')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'project')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'referral')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tags')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agent_ids')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rating_score')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rating_comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'max_response_time')->textInput() ?>

    <?= $form->field($model, 'avg_response_time')->textInput() ?>

    <?= $form->field($model, 'first_response_time')->textInput() ?>

    <?= $form->field($model, 'zendesk_ticket_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_conversion_goal_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_conversion_goal_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_conversion_date')->textInput() ?>

    <?= $form->field($model, 'last_conversion_attribute')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remark')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'contact_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_number')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
