<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Data extends Model
{
    use HasFactory;
    protected $table = 'data';

    protected $fillable = [
        'PGR',
        'Priorité',
        'Référence complète du lot +',
        'Référence principale +',
        'Plannification',
        'STATUT',
        'Date fab tunisie',
        'SEMAINE_FAB_TUN',
        'Description courte produit',
        'Relance',
        'Note Prod.',
        'Qté en fabrication',
        'FAISCEAUXRAI',
        'Date livraison Client',
        'Qté max réceptionnable',
        'PLANIF',
        'Description longue',
        'Statut lot',
        'TEMPS_GLOBAL_RESTANT',
        'Description longue',
        'SEMAINE_RETOUR_TUN',
        'Qté totale',
    ];

  public static function getData()
  {
      $records = DB::table('data')->select('PGR',
      'Priorité',
      'Référence complète du lot +',
      'Référence principale +',
      'Plannification',
      'STATUT',
      'Date fab tunisie',
      'SEMAINE_FAB_TUN',
      'Description courte produit',
      'Relance','Note Prod.',
      'Qté en fabrication',
      'FAISCEAUXRAI',
      'Date livraison Client',
      'Qté max réceptionnable',
      'PLANIF',
      'Description longue',
      'Statut lot',
      'TEMPS_GLOBAL_RESTANT',
      'Description longue',
      'SEMAINE_RETOUR_TUN',
      'Qté totale')
      ->get();
      
         return $records;     
    }

}
