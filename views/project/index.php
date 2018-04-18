<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Project', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'chat_id',
            'type',
            'triggered',
            'missed',
            // 'preview:ntext',
            // 'history:ntext',
            // 'agent_names',
            // 'duration',
            // 'country_code',
            // 'country_name',
            // 'region',
            // 'city',
            // 'platform',
            // 'created_at',
            // 'created_by',
            // 'date',
            // 'hour',
            // 'min',
            // 'sec',
            // 'started_by',
            // 'visitor_id',
            // 'visitor_name',
            // 'visitor_email:email',
            // 'visitor_phone',
            // 'visitor_notes:ntext',
            // 'session_start_date',
            // 'session_end_date',
            // 'session_ip',
            // 'session_id',
            // 'session_user_agent:ntext',
            // 'session_browser',
            // 'visitor_message_count',
            // 'agent_message_count',
            // 'total_message_count',
            // 'is_unread',
            // 'landing_page:ntext',
            // 'project',
            // 'referral:ntext',
            // 'tags',
            // 'department_name',
            // 'agent_ids',
            // 'rating_score',
            // 'rating_comment',
            // 'max_response_time:datetime',
            // 'avg_response_time:datetime',
            // 'first_response_time:datetime',
            // 'zendesk_ticket_id',
            // 'last_conversion_goal_name',
            // 'last_conversion_goal_id',
            // 'last_conversion_date',
            // 'last_conversion_attribute',
            // 'status',
            // 'remark:ntext',
            // 'contact_email:email',
            // 'contact_number:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
