<?php
/**
 * @title ActivityCheckInLogModel
 * @description
 * ActivityCheckInLogModel
 * @author zhangchunsheng
 * @email zhangchunsheng423@gmail.com
 * @version V1.0
 * @date 2015-12-01 23:36
 */
class ActivityCheckInLogModel extends BaseModel {
    private $_table = 'activity_check_in_log';

    public function __construct() {
        parent::__construct();
    }

    public function getRoundDataById($activityId, $roundNum) {
        $data = array();
        $rows = $this->_db->select($this->_table, "*", [
            "AND" => [
                "activity_id" => $activityId,
                "round_num" => $roundNum,
            ]
        ]);
        if($rows) {
            foreach($rows as $value) {
                $data[$value['activity_member_id']] = $value;
            }
        }
        return $data;
    }
}