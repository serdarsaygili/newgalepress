<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PageComponent
 *
 * @property int $PageComponentID
 * @property int $ContentFilePageID
 * @property int $ComponentID
 * @property int $No
 * @property int $StatusID
 * @property int $CreatorUserID
 * @property string $DateCreated
 * @property int $ProcessUserID
 * @property string $ProcessDate
 * @property int $ProcessTypeID
 * @method static \Illuminate\Database\Query\Builder|\App\Models\PageComponent wherePageComponentID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\PageComponent whereContentFilePageID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\PageComponent whereComponentID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\PageComponent whereNo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\PageComponent whereStatusID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\PageComponent whereCreatorUserID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\PageComponent whereDateCreated($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\PageComponent whereProcessUserID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\PageComponent whereProcessDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\PageComponent whereProcessTypeID($value)
 * @mixin \Eloquent
 */
class PageComponent extends Model
{
    public $timestamps = false;
    protected $table = 'PageComponent';
    protected $primaryKey = 'PageComponentID';
    public static $key = 'PageComponentID';

    public static $ignoredProperties = array('id', 'process', 'fileselected', 'posterimageselected', 'modaliconselected');
}
