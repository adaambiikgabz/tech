<?php




namespace App\Models;

use CodeIgniter\Model;

class SearchModel extends Model
{
    public function searchMultipleTables($keyword)
    {  var_dump($keyword); 
        $results = [];

        // Search in cropVarieties table
        $builder1 = $this->db->table('cropVarieties');
        if ($keyword !== null) {
            $builder1->groupStart()
                ->like('Technology', $keyword)
                ->orLike('Categories', $keyword)
                ->orLike('Year', $keyword)
                ->orLike('Attributes', $keyword)
                ->orLike('Seedcolour', $keyword)
                ->orLike('Maturity_in_days', $keyword)
                ->orLike('Potential_yield', $keyword)
                ->orLike('Applicability', $keyword)
                ->orLike('Benefits', $keyword)
                ->orLike('Contact', $keyword)
                ->orLike('Telephone', $keyword)
                ->orLike('Email', $keyword)
                ->orLike('WebsiteFax', $keyword)
                ->groupEnd();
        }
        $query1 = $builder1->get();
        $results = $query1->getResult();

        // Search in processedFoods table
        //$builder2 = $this->db->table('processedFoods');
        //if ($keyword !== null) {
        //    $builder2->groupStart()
        //        ->like('Technology', $keyword)
        //        ->orLike('Year', $keyword)
        //        ->orLike('Attributes', $keyword)
        //        ->orLike('Applicability', $keyword)
        //        ->orLike('Benefits', $keyword)
        //        ->groupEnd();
        //}
        //$query2 = $builder2->get();
        //$results = array_merge($results, $query2->getResult());

        return $results;
    }
}
