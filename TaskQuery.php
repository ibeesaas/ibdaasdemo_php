<?php

require_once("TaskUtil.php");

try {

    // 任务号，通过TaskSubmit返回值获取
    $taskNo = '02936fe37f4e4d6fbc915fcfb176f8cf1501345335833';

    $result = TaskUtil::queryTask($taskNo);

    print_r($result);

} catch (Exception $e) {
    return $e;
}
