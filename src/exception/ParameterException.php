<?php
/**
 * Created by PhpStorm.
 * User: 沁塵
 * Date: 2017/5/3
 * Time: 23:57
 */

namespace LinCmsTp5\exception;


class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = '参数错误';
    public $error_code = 10030;
}