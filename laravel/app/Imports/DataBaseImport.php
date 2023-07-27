<?php

namespace App\Imports;

use App\Models\Data;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DataBaseImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function model(array $row)
    {
        return new Data([

            'PGR' => $row['PGR'],
            'Priorité' => $row['Priorité'],
            'Référence complète du lot +' => $row['Référence complète du lot +'],
            'Référence principale +' => $row['Référence principale +'],
            'Plannification' => $row['Plannification'],
            'STATUT' => $row['STATUT'],
            'Date fab tunisie' => $row['Date fab tunisie'],
            'SEMAINE_FAB_TUN' => $row['SEMAINE_FAB_TUN'],
            'Description courte produit' => $row['Description courte produit'],
            'Relance' => $row['Relance'],
            'Note Prod.' => $row['Note Prod.'],
            'Qté en fabrication' => $row['Qté en fabrication'],
            'FAISCEAUXRAI' => $row['FAISCEAUXRAI'],
            'Date livraison Client' => $row['Date livraison Client'],
            'Qté max réceptionnable' => $row['Qté max réceptionnable'],
            'PLANIF' => $row['PLANIF'],
            'Description longue' => $row['Description longue'],
            'Statut lot' => $row['Statut lot'],
            'TEMPS_GLOBAL_RESTANT' => $row['TEMPS_GLOBAL_RESTANT'],
            'Description longue' => $row['Description longue'],
            'SEMAINE_RETOUR_TUN' => $row['SEMAINE_RETOUR_TUN'],
            'Qté totale' => $row['Qté totale'],
            
        ]);
    }
}
