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
            $builder1->groupStart()
                ->like('Technology', $keyword)
                ->orLike('Year', $keyword)
                ->orLike('Attributes', $keyword)
                ->orLike('Contact', $keyword)
                ->orLike('Telephone', $keyword)
                ->groupEnd();
        }
        $query1 = $builder1->get();
        $results = $query1->getResult();

        // Search in processedFoods table
        $builder2 = $this->db->table('processedFoods');
        if ($keyword !== null) {
            $builder2->groupStart()
                ->like('Technology', $keyword)
                ->orLike('Year', $keyword)
                ->orLike('Attributes', $keyword)
                ->orLike('Contact', $keyword)
                ->orLike('Telephone', $keyword)
                ->groupEnd();
        }
        $query2 = $builder2->get();
        $results = array_merge($results, $query2->getResult());

        // Search in otherTechnologies
        $builder3 = $this->db->table('otherTechnologies');
        if ($keyword !== null) {
            $builder3->groupStart()
                ->like('Technology', $keyword)
                ->orLike('Year', $keyword)
                ->orLike('Attributes', $keyword)
                ->orLike('Contact', $keyword)
                ->orLike('Telephone', $keyword)
                ->groupEnd();
        }
        $query3 = $builder3->get();
        //merge and put the results in the various tables and pass the results 
        $results = array_merge($results, $query3->getResult());

        return $results;
    }
}

