<?php
/**
 * Created by PhpStorm.
 * User: chendong
 * Date: 14-8-19
 * Time: 下午1:19
 */

/**
 * database table name define
 */

define('ONE_DAY_SECONDS', 86400);
define('ONE_WEEK_SECONDS', 604800);
define('REQUEST_TIME', $_SERVER['REQUEST_TIME']);


define('TBL_USER', '{{%user}}');
define('TBL_USER_CONFIG', '{{%user_config}}');
define('TBL_USER_PROFILE', '{{%user_profile}}');
define('TBL_CONFIG_GROUP', '{{%config_group}}');
define('TBL_CONFIG_ITEM', '{{%config_item}}');
define('TBL_QUESTION', '{{%question}}');
define('TBL_QUESTION_COMMENT', '{{%question_comment}}');
define('TBL_QUESTION_TAG', '{{%question_tag}}');
define('TBL_ANSWER', '{{%answer}}');
define('TBL_ANSWER_COMMENT', '{{%answer_comment}}');
define('TBL_ADVERT_SLOT', '{{%advert_slot}}');
define('TBL_ADVERT_DELIVERY', '{{%advert_delivery}}');
define('TBL_TAG', '{{%tag}}');
define('TBL_FRIEND_LINK', '{{%friend_link}}');
define('TBL_FEED_BACK', '{{%feed_back}}');





/**
 * questions list sort define
 */

define('QUESTION_SORT_NEWEST', 'newest');
define('QUESTION_SORT_BOUNTY', 'bounty');
define('QUESTION_SORT_FREQUENT', 'frequent');
define('QUESTION_SORT_VOTES', 'votes');
define('QUESTION_SORT_ACTIVE', 'active');
define('QUESTION_SORT_UNANSWERED', 'unanswered');


/**
 * answers list sort define
 */

define('ANSWER_SORT_ACTIVE', 'active');
define('ANSWER_SORT_OLDEST', 'oldest');
define('ANSWER_SORT_VOTES', 'votes');


/**
 * site home sub tab
 */

define('SITE_TAB_INTERESTING', 'interesting');
define('SITE_TAB_FEATURED', 'featured');
define('SITE_TAB_HOT', 'hot');
define('SITE_TAB_WEEK', 'week');
define('SITE_TAB_MONTH', 'month');