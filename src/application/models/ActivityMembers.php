<?php
/**
 * @title ActivityMembersModel
 * @description
 * ActivityMembersModel
 * @author zhangchunsheng
 * @email zhangchunsheng423@gmail.com
 * @version V1.0
 * @date 2015-12-01 23:36
 */
class ActivityMembersModel extends BaseModel {
    private $_table = 'activity_members';

    public function __construct() {
        parent::__construct();
    }

    public function getDataById($activityId) {
        $data = $this->_db->select($this->_table, "*", [
            "activity_id" => $activityId
        ]);
        return $data;
    }
}