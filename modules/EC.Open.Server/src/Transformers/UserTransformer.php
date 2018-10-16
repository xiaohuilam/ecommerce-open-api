<?php

/*
 * This file is part of ibrand/EC-Open-Server.
 *
 * (c) iBrand <https://www.ibrand.cc>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace iBrand\EC\Open\Server\Transformers;

class UserTransformer extends BaseTransformer
{
    public static $excludeable = [
        'password',
        'confirmation_code',
        'remember_token',
    ];

    public function transformData($model)
    {
        return $model->toArray();
    }
}
