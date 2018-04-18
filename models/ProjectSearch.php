<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Project;

/**
 * ProjectSearch represents the model behind the search form about `app\models\Project`.
 */
class ProjectSearch extends Project
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'triggered', 'missed', 'duration', 'hour', 'min', 'sec', 'visitor_message_count', 'agent_message_count', 'total_message_count', 'is_unread', 'max_response_time', 'avg_response_time', 'first_response_time'], 'integer'],
            [['chat_id', 'type', 'preview', 'history', 'agent_names', 'country_code', 'country_name', 'region', 'city', 'platform', 'created_at', 'created_by', 'date', 'started_by', 'visitor_id', 'visitor_name', 'visitor_email', 'visitor_phone', 'visitor_notes', 'session_start_date', 'session_end_date', 'session_ip', 'session_id', 'session_user_agent', 'session_browser', 'landing_page', 'project', 'referral', 'tags', 'department_name', 'agent_ids', 'rating_score', 'rating_comment', 'zendesk_ticket_id', 'last_conversion_goal_name', 'last_conversion_goal_id', 'last_conversion_date', 'last_conversion_attribute', 'status', 'remark', 'contact_email', 'contact_number'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Project::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'triggered' => $this->triggered,
            'missed' => $this->missed,
            'duration' => $this->duration,
            'created_at' => $this->created_at,
            'date' => $this->date,
            'hour' => $this->hour,
            'min' => $this->min,
            'sec' => $this->sec,
            'session_start_date' => $this->session_start_date,
            'session_end_date' => $this->session_end_date,
            'visitor_message_count' => $this->visitor_message_count,
            'agent_message_count' => $this->agent_message_count,
            'total_message_count' => $this->total_message_count,
            'is_unread' => $this->is_unread,
            'max_response_time' => $this->max_response_time,
            'avg_response_time' => $this->avg_response_time,
            'first_response_time' => $this->first_response_time,
            'last_conversion_date' => $this->last_conversion_date,
        ]);

        $query->andFilterWhere(['like', 'chat_id', $this->chat_id])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'preview', $this->preview])
            ->andFilterWhere(['like', 'history', $this->history])
            ->andFilterWhere(['like', 'agent_names', $this->agent_names])
            ->andFilterWhere(['like', 'country_code', $this->country_code])
            ->andFilterWhere(['like', 'country_name', $this->country_name])
            ->andFilterWhere(['like', 'region', $this->region])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'platform', $this->platform])
            ->andFilterWhere(['like', 'created_by', $this->created_by])
            ->andFilterWhere(['like', 'started_by', $this->started_by])
            ->andFilterWhere(['like', 'visitor_id', $this->visitor_id])
            ->andFilterWhere(['like', 'visitor_name', $this->visitor_name])
            ->andFilterWhere(['like', 'visitor_email', $this->visitor_email])
            ->andFilterWhere(['like', 'visitor_phone', $this->visitor_phone])
            ->andFilterWhere(['like', 'visitor_notes', $this->visitor_notes])
            ->andFilterWhere(['like', 'session_ip', $this->session_ip])
            ->andFilterWhere(['like', 'session_id', $this->session_id])
            ->andFilterWhere(['like', 'session_user_agent', $this->session_user_agent])
            ->andFilterWhere(['like', 'session_browser', $this->session_browser])
            ->andFilterWhere(['like', 'landing_page', $this->landing_page])
            ->andFilterWhere(['like', 'project', $this->project])
            ->andFilterWhere(['like', 'referral', $this->referral])
            ->andFilterWhere(['like', 'tags', $this->tags])
            ->andFilterWhere(['like', 'department_name', $this->department_name])
            ->andFilterWhere(['like', 'agent_ids', $this->agent_ids])
            ->andFilterWhere(['like', 'rating_score', $this->rating_score])
            ->andFilterWhere(['like', 'rating_comment', $this->rating_comment])
            ->andFilterWhere(['like', 'zendesk_ticket_id', $this->zendesk_ticket_id])
            ->andFilterWhere(['like', 'last_conversion_goal_name', $this->last_conversion_goal_name])
            ->andFilterWhere(['like', 'last_conversion_goal_id', $this->last_conversion_goal_id])
            ->andFilterWhere(['like', 'last_conversion_attribute', $this->last_conversion_attribute])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'contact_email', $this->contact_email])
            ->andFilterWhere(['like', 'contact_number', $this->contact_number]);

        return $dataProvider;
    }
}
