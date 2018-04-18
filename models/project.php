<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property integer $id
 * @property string $chat_id
 * @property string $type
 * @property integer $triggered
 * @property integer $missed
 * @property string $preview
 * @property string $history
 * @property string $agent_names
 * @property integer $duration
 * @property string $country_code
 * @property string $country_name
 * @property string $region
 * @property string $city
 * @property string $platform
 * @property string $created_at
 * @property string $created_by
 * @property string $date
 * @property integer $hour
 * @property integer $min
 * @property integer $sec
 * @property string $started_by
 * @property string $visitor_id
 * @property string $visitor_name
 * @property string $visitor_email
 * @property string $visitor_phone
 * @property string $visitor_notes
 * @property string $session_start_date
 * @property string $session_end_date
 * @property string $session_ip
 * @property string $session_id
 * @property string $session_user_agent
 * @property string $session_browser
 * @property integer $visitor_message_count
 * @property integer $agent_message_count
 * @property integer $total_message_count
 * @property integer $is_unread
 * @property string $landing_page
 * @property string $project
 * @property string $referral
 * @property string $tags
 * @property string $department_name
 * @property string $agent_ids
 * @property string $rating_score
 * @property string $rating_comment
 * @property integer $max_response_time
 * @property integer $avg_response_time
 * @property integer $first_response_time
 * @property string $zendesk_ticket_id
 * @property string $last_conversion_goal_name
 * @property string $last_conversion_goal_id
 * @property string $last_conversion_date
 * @property string $last_conversion_attribute
 * @property string $status
 * @property string $remark
 * @property string $contact_email
 * @property string $contact_number
 */
class project extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['chat_id', 'type', 'country_code', 'country_name', 'region', 'city', 'platform', 'created_at', 'date', 'hour', 'min', 'sec', 'visitor_id', 'visitor_name', 'visitor_email', 'visitor_phone', 'visitor_notes', 'session_start_date', 'session_end_date', 'session_ip', 'session_id', 'session_user_agent', 'session_browser', 'is_unread'], 'required'],
            [['triggered', 'missed', 'duration', 'hour', 'min', 'sec', 'visitor_message_count', 'agent_message_count', 'total_message_count', 'is_unread', 'max_response_time', 'avg_response_time', 'first_response_time'], 'integer'],
            [['preview', 'history', 'visitor_notes', 'session_user_agent', 'landing_page', 'referral', 'remark', 'contact_number'], 'string'],
            [['created_at', 'date', 'session_start_date', 'session_end_date', 'last_conversion_date'], 'safe'],
            [['chat_id', 'agent_names', 'platform', 'visitor_id', 'visitor_name', 'visitor_email', 'visitor_phone', 'session_id', 'session_browser', 'project', 'tags', 'department_name', 'agent_ids', 'rating_comment', 'zendesk_ticket_id', 'last_conversion_goal_name', 'last_conversion_goal_id', 'last_conversion_attribute', 'contact_email'], 'string', 'max' => 255],
            [['type', 'started_by'], 'string', 'max' => 20],
            [['country_code', 'country_name', 'region', 'city'], 'string', 'max' => 100],
            [['created_by'], 'string', 'max' => 36],
            [['session_ip', 'status'], 'string', 'max' => 50],
            [['rating_score'], 'string', 'max' => 10],
            [['chat_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'chat_id' => 'Chat ID',
            'type' => 'Type',
            'triggered' => 'Triggered',
            'missed' => 'Missed',
            'preview' => 'Preview',
            'history' => 'History',
            'agent_names' => 'Agent Names',
            'duration' => 'Duration',
            'country_code' => 'Country Code',
            'country_name' => 'Country Name',
            'region' => 'Region',
            'city' => 'City',
            'platform' => 'Platform',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'date' => 'Date',
            'hour' => 'Hour',
            'min' => 'Min',
            'sec' => 'Sec',
            'started_by' => 'Started By',
            'visitor_id' => 'Visitor ID',
            'visitor_name' => 'Visitor Name',
            'visitor_email' => 'Visitor Email',
            'visitor_phone' => 'Visitor Phone',
            'visitor_notes' => 'Visitor Notes',
            'session_start_date' => 'Session Start Date',
            'session_end_date' => 'Session End Date',
            'session_ip' => 'Session Ip',
            'session_id' => 'Session ID',
            'session_user_agent' => 'Session User Agent',
            'session_browser' => 'Session Browser',
            'visitor_message_count' => 'Visitor Message Count',
            'agent_message_count' => 'Agent Message Count',
            'total_message_count' => 'Total Message Count',
            'is_unread' => 'Is Unread',
            'landing_page' => 'Landing Page',
            'project' => 'Project',
            'referral' => 'Referral',
            'tags' => 'Tags',
            'department_name' => 'Department Name',
            'agent_ids' => 'Agent Ids',
            'rating_score' => 'Rating Score',
            'rating_comment' => 'Rating Comment',
            'max_response_time' => 'Max Response Time',
            'avg_response_time' => 'Avg Response Time',
            'first_response_time' => 'First Response Time',
            'zendesk_ticket_id' => 'Zendesk Ticket ID',
            'last_conversion_goal_name' => 'Last Conversion Goal Name',
            'last_conversion_goal_id' => 'Last Conversion Goal ID',
            'last_conversion_date' => 'Last Conversion Date',
            'last_conversion_attribute' => 'Last Conversion Attribute',
            'status' => 'Status',
            'remark' => 'Remark',
            'contact_email' => 'Contact Email',
            'contact_number' => 'Contact Number',
        ];
    }
}
