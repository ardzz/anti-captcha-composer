<?php

namespace Ardzz\AntiCaptcha;

interface AntiCaptchaTaskProtocol
{
    public function getPostData();
    public function getTaskSolution();
}
