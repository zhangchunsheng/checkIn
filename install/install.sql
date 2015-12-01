CREATE DATABASE `luomor_check_in` DEFAULT CHARACTER SET utf8;

use luomor_check_in;

create table activity(
    activity_id int(11) not null auto_increment,
    activity_name varchar(60) not null default '' comment '活动名称',
    activity_description varchar(255) not null default '' comment '活动描述',
    member_num int(11) not null default 0 comment '成员人数',
    round_num int(11) not null default 0 comment '第几轮签到',
    round_check_num int(11) not null default 0 comment '签到人数',
    create_time int(11) not null default 0 comment '创建时间',
    update_time int(11) not null default 0 comment '更新时间',
    status int(11) not null default 0 comment '1 - 正常 2 - 删除',
    operator_name varchar(60) not null default '' comment '',
    operator_time int(11) not null default 0 comment '',
    primary key(activity_id)
);

create table activity_members(
    activity_member_id int(11) not null auto_increment,
    activity_id int(11) not null default 0 comment '活动ID',
    member_name varchar(60) not null default '' comment '成员名称',
    create_time int(11) not null default 0 comment '创建时间',
    update_time int(11) not null default 0 comment '更新时间',
    status int(11) not null default 0 comment '1 - 正常 2 － 删除',
    operator_name varchar(60) not null default '' comment '',
    operator_time int(11) not null default 0 comment '',
    primary key(activity_member_id)
);

create table activity_check_in_log(
    activity_check_in_log_id int(11) not null auto_increment,
    activity_id int(11) not null default 0 comment '活动ID',
    round_num int(11) not null default 0 comment '第几轮签到',
    activity_member_id int(11) not null default 0 comment '成员ID',
    check_time int(11) not null default 0 comment '创建时间',
    primary key(activity_check_in_log_id)
);