<?php

class ProfileController extends BaseController {
    
    public static function create($id){
        $profile = new Profile;
        $profile->id = $id;
        $profile->nama = ' ';
        $profile->alamat = ' ';
        $profile->nohp = ' ';
        $profile->pathfoto = 'blank.jpeg';
        $profile->tagline = ' ';
        $profile->save();
    }
    
    public function postUpdate($id) {
        
    }
}