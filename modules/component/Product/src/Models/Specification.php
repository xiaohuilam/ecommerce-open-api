<?php

/*
 * This file is part of ibrand/product.
 *
 * (c) iBrand <https://www.ibrand.cc>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace iBrand\Component\Product\Models;

use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    protected $guarded = ['id'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable(config('ibrand.app.database.prefix', 'ibrand_').'goods_spec');
    }

    public function values()
    {
        return $this->hasMany(SpecificationValue::class, 'spec_id', 'id');
    }
}
