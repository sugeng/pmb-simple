<?php namespace App\Libraries\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $recid
 * @property string $useid
 * @property string $useup
 * @property string $tgent
 * @property string $tgtup
 * @property string $kdfak
 * @property string $kdjur
 * @property string $nmjur
 * @property string $nmjui
 * @property string $notel
 * @property string $nofak
 * @property string $kajur
 * @property string $sejur
 * @property string $skopr
 * @property string $tgopr
 * @property string $skban
 * @property string $tgban
 * @property string $nlban
 * @property boolean $skstt
 * @property string $kdpti
 * @property string $kdpst
 * @property string $kdjen
 * @property string $gelar
 * @property string $sigel
 * @property string $noacc
 * @property string $kdkur
 * @property string $nmjen_ina
 * @property string $nmjen_eng
 * @property string $disip_ina
 * @property string $disip_eng
 * @property string $gelar_ina
 * @property string $gelar_eng
 * @property string $id_sms
 * @property string $id_reg_ptk
 * @property string $id_sdm
 */
class Departement extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbjur';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'recid';

    /**
     * @var array
     */
    protected $fillable = ['useid', 'useup', 'tgent', 'tgtup', 'kdfak', 'kdjur', 'nmjur', 'nmjui', 'notel', 'nofak', 'kajur', 'sejur', 'skopr', 'tgopr', 'skban', 'tgban', 'nlban', 'skstt', 'kdpti', 'kdpst', 'kdjen', 'gelar', 'sigel', 'noacc', 'kdkur', 'nmjen_ina', 'nmjen_eng', 'disip_ina', 'disip_eng', 'gelar_ina', 'gelar_eng', 'id_sms', 'id_reg_ptk', 'id_sdm'];

}
