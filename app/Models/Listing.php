<?php 
namespace App\Models;

class Listing {
    public static function all(){
        return   [
            [
                'id'=> 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                 Perspiciatis, iste. Dolorum cumque eveniet id similique soluta consequuntur
                  tempora sint, eius optio. Dolorum explicabo vero nemo recusandae, officiis 
                  temporibus autem maxime!'
    
            ],
            [
                'id'=> 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                 Perspiciatis, iste. Dolorum cumque eveniet id similique soluta consequuntur
                  tempora sint, eius optio. Dolorum explicabo vero nemo recusandae, officiis 
                  temporibus autem maxime!'
    
            ]
        ];
        
    }
    public static function find($id){
        $listings = self::all();

        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }
}