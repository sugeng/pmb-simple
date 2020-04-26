<?php namespace App\Libraries\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $recid
 * @property string $useid
 * @property string $tgent
 * @property string $tgtup
 * @property string $nimhs
 * @property string $nonik
 * @property string $nmmhs
 * @property string $kdbyk
 * @property string $tplhr
 * @property string $tglhr
 * @property string $kdkel
 * @property string $kdagm
 * @property string $kdtus
 * @property string $kdkwn
 * @property string $kdsuk
 * @property string $kdneg
 * @property string $kddrh
 * @property string $stwan
 * @property string $stkes
 * @property string $email
 * @property string $hpage
 * @property string $alper
 * @property string $rtper
 * @property string $rwper
 * @property string $prper
 * @property string $kbper
 * @property string $klper
 * @property string $kcper
 * @property string $kpper
 * @property string $tlper
 * @property string $alsur
 * @property string $rtsur
 * @property string $rwsur
 * @property string $prsur
 * @property string $kbsur
 * @property string $klsur
 * @property string $kcsur
 * @property string $kpsur
 * @property string $tlsur
 * @property string $stpho
 * @property string $stala
 * @property string $stija
 * @property string $stnem
 * @property string $sdlls
 * @property string $kdsma
 * @property string $kjsma
 * @property string $nmsma
 * @property string $nisn
 * @property string $alsma
 * @property string $prsma
 * @property string $kbsma
 * @property string $kpsma
 * @property int $nesma
 * @property string $tlsma
 * @property string $jrsma
 * @property string $ijsma
 * @property string $nmpti
 * @property string $alpti
 * @property string $prpti
 * @property string $kbpti
 * @property string $tlpti
 * @property string $jrpti
 * @property string $nimti
 * @property string $nmaya
 * @property string $agaya
 * @property string $pkaya
 * @property string $pdaya
 * @property string $staya
 * @property string $nmibu
 * @property string $agibu
 * @property string $pkibu
 * @property string $pdibu
 * @property string $stibu
 * @property string $alort
 * @property string $rtort
 * @property string $rwort
 * @property string $prort
 * @property string $kbort
 * @property string $klort
 * @property string $kcort
 * @property string $kport
 * @property string $tlort
 * @property string $nmins
 * @property string $alins
 * @property string $prins
 * @property string $kbins
 * @property string $klins
 * @property string $kcins
 * @property string $kpins
 * @property string $tlins
 * @property string $fxins
 * @property string $emins
 * @property string $hpins
 * @property string $thusm
 * @property string $thsms
 * @property string $kdgel
 * @property string $norol
 * @property string $nospc
 * @property string $tgspc
 * @property string $stpid
 * @property string $noreg
 * @property string $kdreg
 * @property string $kdtry
 * @property string $nokwi
 * @property string $kdju1
 * @property string $kdju2
 * @property string $kdju3
 * @property string $kdjur
 * @property string $notes
 * @property string $kdru1
 * @property string $kdru2
 * @property string $kdru3
 * @property string $kdru4
 * @property string $kdru5
 * @property string $shift
 * @property string $kdwil
 * @property string $stakl
 * @property string $regak
 * @property float $nlusm
 * @property int $ranki
 * @property string $grusm
 * @property string $sttes
 * @property string $sttmp
 * @property string $kdjfu
 * @property string $nmbuy
 * @property string $jaket
 * @property string $rekom
 * @property string $bbtes
 * @property string $tgbyr
 * @property string $nmbnk
 * @property int $nlbyr
 * @property string $nobnk
 * @property string $norec
 * @property string $anbnk
 * @property string $stbyr
 * @property string $nmsel
 * @property string $kdage
 * @property string $tgtes
 * @property string $quizz
 * @property string $ipbuy
 * @property string $stsur
 * @property string $stort
 * @property string $stsma
 * @property string $noreg_old
 * @property string $hpper
 * @property string $jnsma
 * @property string $phaya
 * @property string $phibu
 */
class Registrant extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'msmhb';

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'recid';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    protected $dates = [
        "tglhr", "tgtes"
    ];

    /**
     * @var array
     */
    protected $fillable = ['useid', 'tgent', 'tgtup', 'nimhs', 'nonik', 'nmmhs', 'kdbyk', 'tplhr', 'tglhr', 'kdkel', 'kdagm', 'kdtus', 'kdkwn', 'kdsuk', 'kdneg', 'kddrh', 'stwan', 'stkes', 'email', 'hpage', 'alper', 'rtper', 'rwper', 'prper', 'kbper', 'klper', 'kcper', 'kpper', 'tlper', 'alsur', 'rtsur', 'rwsur', 'prsur', 'kbsur', 'klsur', 'kcsur', 'kpsur', 'tlsur', 'stpho', 'stala', 'stija', 'stnem', 'sdlls', 'kdsma', 'kjsma', 'nmsma', 'nisn', 'alsma', 'prsma', 'kbsma', 'kpsma', 'nesma', 'tlsma', 'jrsma', 'ijsma', 'nmpti', 'alpti', 'prpti', 'kbpti', 'tlpti', 'jrpti', 'nimti', 'nmaya', 'agaya', 'pkaya', 'pdaya', 'staya', 'nmibu', 'agibu', 'pkibu', 'pdibu', 'stibu', 'alort', 'rtort', 'rwort', 'prort', 'kbort', 'klort', 'kcort', 'kport', 'tlort', 'nmins', 'alins', 'prins', 'kbins', 'klins', 'kcins', 'kpins', 'tlins', 'fxins', 'emins', 'hpins', 'thusm', 'thsms', 'kdgel', 'norol', 'nospc', 'tgspc', 'stpid', 'noreg', 'kdreg', 'kdtry', 'nokwi', 'kdju1', 'kdju2', 'kdju3', 'kdjur', 'notes', 'kdru1', 'kdru2', 'kdru3', 'kdru4', 'kdru5', 'shift', 'kdwil', 'stakl', 'regak', 'nlusm', 'ranki', 'grusm', 'sttes', 'sttmp', 'kdjfu', 'nmbuy', 'jaket', 'rekom', 'bbtes', 'tgbyr', 'nmbnk', 'nlbyr', 'nobnk', 'norec', 'anbnk', 'stbyr', 'nmsel', 'kdage', 'tgtes', 'quizz', 'ipbuy', 'stsur', 'stort', 'stsma', 'noreg_old', 'hpper', 'jnsma', 'phaya', 'phibu'];

    public function departement()
    {
        return $this->belongsTo(Departement::class, 'kdju1', 'kdjur');
    }


}
