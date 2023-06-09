<?php
namespace App\Models;

use CodeIgniter\Model;

class SearchModel extends Model
{
    public function searchMultipleTables($keyword)
    {
        $results = [];

        // Search in cropVarieties table
        $builder1 = $this->db->table('cropVarieties');
        if ($keyword !== null) {
            $builder1->like('Categories', $keyword);
            $builder1->orLike('Technology', $keyword);
            $builder1->orLike('Year', $keyword);
            $builder1->orLike('Attributes', $keyword);
            $builder1->orLike('Seedcolour', $keyword);
            $builder1->orLike('Maturity_in_days', $keyword);
            $builder1->orLike('Potential_yield', $keyword);
            $builder1->orLike('Application', $keyword);
            $builder1->orLike('Benefits', $keyword); 
            $builder1->orLike('Contact', $keyword);
            $builder1->orLike('Telephone', $keyword);
            $builder1->orLike('Email', $keyword);
            $builder1->orLike('WebsiteFax', $keyword);
        }
        $query1 = $builder1->get();
        $results['cropVarieties'] = $query1->getResult();

        // Search in processedFoods table
        $builder2 = $this->db->table('processedFoods');
        if ($keyword !== null) {
            $builder2->like('Categories', $keyword);
            $builder2->orLike('Technology', $keyword);
            $builder2->orLike('Year', $keyword);
            $builder1->orLike('Attributes', $keyword);
            $builder2->orLike('Application', $keyword);
            $builder2->orLike('Benefits', $keyword);
            $builder1->orLike('Contact', $keyword);
            $builder1->orLike('Telephone', $keyword);
            $builder1->orLike('Email', $keyword);
            $builder1->orLike('Website', $keyword);
        }
        $query2 = $builder2->get();
        $results['processedFoods'] = $query2->getResult();

        // var_dump($results);

        return $results;
    }
}
