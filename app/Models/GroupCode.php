<?php

namespace App\Models;

use App;
use DB;
use eStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\JoinClause;

/**
 * App\Models\GroupCode
 *
 * @property int $GroupCodeID
 * @property string $GroupName
 * @property int $DisplayOrder
 * @property int $StatusID
 * @property int $CreatorUserID
 * @property string $DateCreated
 * @property int $ProcessUserID
 * @property string $ProcessDate
 * @property int $ProcessTypeID
 * @method static \Illuminate\Database\Query\Builder|\App\Models\GroupCode whereGroupCodeID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\GroupCode whereGroupName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\GroupCode whereDisplayOrder($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\GroupCode whereStatusID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\GroupCode whereCreatorUserID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\GroupCode whereDateCreated($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\GroupCode whereProcessUserID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\GroupCode whereProcessDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\GroupCode whereProcessTypeID($value)
 * @mixin \Eloquent
 */
class GroupCode extends Model
{
    public $timestamps = false;
    protected $table = 'GroupCode';
    protected $primaryKey = 'GroupCodeID';

    public function getDisplayName($languageID)
    {
        $gcl = $this->belongsTo(GroupCodeLanguage::class, 'GroupCodeID')->getQuery()->where('LanguageID', '=', $languageID)->first();
        if($gcl) {
            return $gcl->DisplayName;
        }
        return '';
    }

    public static function getGroupCodes() {
        return DB::table('GroupCode AS gc')
            ->join('GroupCodeLanguage AS gcl', function (/** @var JoinClause $join */ $join) {
                $join->on('gcl.GroupCodeID', '=', 'gc.GroupCodeID');
                $join->on('gcl.LanguageID', '=', DB::raw(App::getLocale()));
            })
            ->where('gc.GroupName', '=', 'Currencies')
            ->where('gc.StatusID', '=', eStatus::Active)
            ->orderBy('gc.DisplayOrder', 'ASC')
            ->orderBy('gcl.DisplayName', 'ASC')
            ->get();
    }
}
