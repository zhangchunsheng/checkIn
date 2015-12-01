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
        $roundNum = isset($_GET['round_num']) ? $_GET['round_num'] : 0;
        $isAdmin = isset($_GET['is_admin']) ? $_GET['is_admin'] : 0;

        $activity = new ActivityModel();
        $activityData = $activity->getDataById($activityId);

        $activityMembers = new ActivityMembersModel();
        $activityMembersData = $activityMembers->getDataById($activityId);

        if(empty($roundNum)) {
            $roundNum = $activityData['round_num'];
        }

        $activityCheckInLog = new ActivityCheckInLogModel();
        $activityCheckInLogData = $activityCheckInLog->getRoundDataById($activityId, $roundNum);

        $activityData['member_num'] = count($activityMembersData);
        $activityData['round_check_num'] = count($activityCheckInLogData);

        foreach($activityMembersData as &$value) {
            if(isset($activityCheckInLogData[$value['activity_member_id']])) {
                $value['is_checked'] = 1;
            } else {
                $value['is_checked'] = 0;
            }
        }

        $this->getView()->isAdmin = $isAdmin;
        $this->getView()->roundNum = $roundNum;
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
            'round_num[+]' => 1,
            'round_check_num' => 0,
        );
        $result = $activity->updateActivity($activityId, $data);

        $result = array(
            'ret_code' => 200,
            'result' => $result,
        );

        echo json_encode($result);
        exit();
    }

    public function checkInAction() {
        $activityId = isset($_GET['activity_id']) ? $_GET['activity_id'] : 0;
        $roundNum = isset($_GET['round_num']) ? $_GET['round_num'] : 0;
        $activityMemberId = isset($_GET['activity_member_id']) ? $_GET['activity_member_id'] : 0;

        if(empty($activityId) || empty($roundNum) || empty($activityMemberId)) {
            $result = array(
                'ret_code' => 400,
                'ret_msg' => '参数错误',
            );

            echo json_encode($result);
            exit();
        }

        $activityCheckInLog = new ActivityCheckInLogModel();
        $hadChecked = $activityCheckInLog->hadChecked($activityId, $roundNum, $activityMemberId);
        if($hadChecked) {
            $result = array(
                'ret_code' => 406,
                'ret_msg' => '已签到',
            );

            echo json_encode($result);
            exit();
        }

        $activityCheckInLog->checkIn($activityId, $roundNum, $activityMemberId);

        $activity = new ActivityModel();
        $data = array(
            'round_check_num[+]' => 1
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