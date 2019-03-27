<?php
require(APPPATH.'/third_party/KLogger.php');
class Udemy
{
    public function udemyAcc(){
        $log = new KLogger('C:/logs/log', KLogger::INFO);
        $log->LogInfo("Now Excuting".__LINE__.":".__FUNCTION__);

    }
}