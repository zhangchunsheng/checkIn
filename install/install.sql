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
    cellphone varchar(32) not null default '' comment '手机号',
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

insert into activity(activity_name,activity_description,member_num,round_num,round_check_num,create_time,status)
values
('2015年网站组团建-滑雪','2015年网站组团建-滑雪',11,1,0,unix_timestamp(now()),1);

alter table activity_members add column cellphone varchar(32) not null default '' comment '手机号';

insert into activity_members(activity_id,member_name,create_time,status)
values
(1,'张春生',unix_timestamp(now()),1);

insert into activity_members(activity_id,member_name,create_time,status)
values
(1,'郭晓东',unix_timestamp(now()),1);

insert into activity_members(activity_id,member_name,create_time,status)
values
(1,'晓东家属',unix_timestamp(now()),1);

insert into activity_members(activity_id,member_name,create_time,status)
values
(1,'张重',unix_timestamp(now()),1);

insert into activity_members(activity_id,member_name,create_time,status)
values
(1,'何霄鹏',unix_timestamp(now()),1);

insert into activity_members(activity_id,member_name,create_time,status)
values
(1,'征安全',unix_timestamp(now()),1);

insert into activity_members(activity_id,member_name,create_time,status)
values
(1,'征安全家属',unix_timestamp(now()),1);

insert into activity_members(activity_id,member_name,create_time,status)
values
(1,'鑫昌',unix_timestamp(now()),1);

insert into activity_members(activity_id,member_name,create_time,status)
values
(1,'吴建飞',unix_timestamp(now()),1);

insert into activity_members(activity_id,member_name,create_time,status)
values
(1,'肖昊',unix_timestamp(now()),1);

insert into activity_members(activity_id,member_name,create_time,status)
values
(1,'宋新凯',unix_timestamp(now()),1);

insert into activity_check_in_log(activity_id,round_num,activity_member_id,check_time)
values
(1,1,1,unix_timestamp(now()));

update activity_members set cellphone='13439174818' where activity_member_id=1;
update activity_members set cellphone='13911168500' where activity_member_id=2;
update activity_members set cellphone='15650727463' where activity_member_id=4;
update activity_members set cellphone='13521718910' where activity_member_id=5;
update activity_members set cellphone='13810664119' where activity_member_id=6;
update activity_members set cellphone='18518407512' where activity_member_id=8;
update activity_members set cellphone='15010195133' where activity_member_id=9;
update activity_members set cellphone='15210365263' where activity_member_id=10;
update activity_members set cellphone='18210189805' where activity_member_id=11;
