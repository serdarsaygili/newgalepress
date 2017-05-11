<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ContentPassword
 *
 * @property int $ContentPasswordID
 * @property int $ContentID
 * @property string $Name
 * @property string $Password
 * @property int $Qty
 * @property int $StatusID
 * @property int $CreatorUserID
 * @property string $DateCreated
 * @property int $ProcessUserID
 * @property string $ProcessDate
 * @property int $ProcessTypeID
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ContentPassword whereContentID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ContentPassword whereContentPasswordID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ContentPassword whereCreatorUserID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ContentPassword whereDateCreated($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ContentPassword whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ContentPassword wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ContentPassword whereProcessDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ContentPassword whereProcessTypeID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ContentPassword whereProcessUserID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ContentPassword whereQty($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\ContentPassword whereStatusID($value)
 * @mixin \Eloquent
 */
class ContentPassword extends Model
{
    public $timestamps = false;
    protected $table = 'ContentPassword';
    protected $primaryKey = 'ContentPasswordID';

}
