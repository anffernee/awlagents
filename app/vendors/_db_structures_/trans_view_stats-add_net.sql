DROP VIEW `trans_view_stats`;
CREATE VIEW `trans_view_stats` AS 
select `a`.`trxtime` AS `trxtime`,`b`.`companyid` AS `companyid`,`c`.`officename` AS `officename`,`a`.`agentid` AS `agentid`,
    `d`.`username` AS `username`,`d`.`username4m` AS `username4m`,`a`.`siteid` AS `siteid`,`e`.`sitename` AS `sitename`,
    `a`.`typeid` AS `typeid`,`f`.`typename` AS `typename`,`g`.`price` AS `price`,`g`.`earning` AS `earning`,`a`.`raws` AS `raws`,
    `a`.`uniques` AS `uniques`,`a`.`chargebacks` AS `chargebacks`,`a`.`signups` AS `signups`,`a`.`frauds` AS `frauds`,
    `a`.`sales_number` AS `sales_number`, `a`.`sales_number` - `a`.`chargebacks` - `a`.`frauds` as `net`,
    ((`a`.`sales_number` - `a`.`chargebacks` - `a`.`frauds`) * `h`.`ownprice`) AS `payouts`,
    ((`a`.`sales_number` - `a`.`chargebacks` - `a`.`frauds`) * `g`.`earning`) AS `earnings` 
from (((((((`trans_stats` `a` join `trans_agents` `b`) join `trans_companies` `c`) join `trans_accounts` `d`) join `trans_sites` `e`) join `trans_types` `f`) join `trans_fees` `g`) join `tmp_com_fees` `h`) 
where ((`a`.`agentid` = `b`.`id`) and (`b`.`companyid` = `c`.`id`) and (`a`.`agentid` = `d`.`id`) and (`a`.`siteid` = `e`.`id`) and (`a`.`typeid` = `f`.`id`) and (`f`.`id` = `g`.`typeid`) and (`a`.`trxtime` >= `g`.`start`) and (`a`.`trxtime` <= `g`.`end`) and (`g`.`id` = `h`.`feeid`) and (`c`.`id` = `h`.`companyid`));
