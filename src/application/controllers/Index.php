<?php
/**
 * @title IndexController
 * @description
 * 首页
 * @author zhangchunsheng
 * @email zhangchunsheng423@gmail.com
 * @version V1.0
 * @date 2015-12-01 23:36
 */
class IndexController extends Yaf_Controller_Abstract {
    // default action name
    public function indexAction() {
        $activityId = isset($_GET['activity_id']) ? $_GET['activity_id'] : 1;
        $isAdmin = isset($_GET['is_admin']) ? $_GET['is_admin'] : 0;

        $activity = new ActivityModel();
        $activityData = $activity->getDataById($activityId);

        $activityMembers = new ActivityMembersModel();
        $activityMembersData = $activityMembers->getDataById($activityId);

        $roundNum = $activityData['round_num'];
        $activityCheckInLog = new ActivityCheckInLogModel();
        $activityCheckInLogData = $activityCheckInLog->getRoundDataById($activityId, $roundNum);

        foreach($activityMembersData as &$value) {
            if(isset($activityCheckInLogData[$value['activity_member_id']])) {
                $value['is_checked'] = 1;
            } else {
                $value['is_checked'] = 0;
            }
        }

        $this->getView()->isAdmin = $isAdmin;
        $this->getView()->activityData = $activityData;
        $this->getView()->activityMembersData = $activityMembersData;
    }

    public function updateActivityAction() {
        $activityId = isset($_GET['activity_id']) ? $_GET['activity_id'] : 0;
        if(empty($activityId)) {
            $result = array(
                'ret_code' => 400,
                'ret_msg' => '参数错误',
            );

            echo json_encode($result);
            exit();
        }

        $activity = new ActivityModel();
        $data = array(
            'round_num[+]' => 1
        );
        $result = $activity->updateActivity($activityId, $data);

        $result = array(
            'ret_code' => 200,
            'result' => $result,
        );

        echo json_encode($result);
        exit();
    }
}