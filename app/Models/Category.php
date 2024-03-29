<?php

namespace App\Models;

use App\Scopes\CategoryScope;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Category
 *
 * @property int $CategoryID
 * @property int $ApplicationID
 * @property string $Name
 * @property int $StatusID
 * @property int $CreatorUserID
 * @property string $DateCreated
 * @property int $ProcessUserID
 * @property string $ProcessDate
 * @property int $ProcessTypeID
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Category whereApplicationID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Category whereCategoryID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Category whereCreatorUserID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Category whereDateCreated($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Category whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Category whereProcessDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Category whereProcessTypeID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Category whereProcessUserID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Category whereStatusID($value)
 * @mixin \Eloquent
 */
class Category extends Model
{
    public $timestamps = false;
    protected $table = 'Category';
    protected $primaryKey = 'CategoryID';
    public static $key = 'CategoryID';


    protected static function boot()
    {
        parent::boot();
        self::addGlobalScope(new CategoryScope);
    }
}
