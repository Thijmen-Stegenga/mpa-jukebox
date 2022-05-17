<?php 

    namespace App\Classes;
    
class playlist{
    private $sessionSongs;
    private $request:
    public function __construct(Request $request){
        this->request = $request

        if ($this->request->session()->has('SongQueue')){
            $this->sessionSongs = $this->request->session()->get('songQueue');
        }else{
            $this->sessionSongs = [];
        }


        public function syncsession(){
            $this->request->session()->put('songQueue', $this->sessionSongs);
        }

        public function getAllSongs(){      
            return $this->sessionSongs; 
        }
        
        public function addSong($songId){
            syncsession();
        }
    
        public function deleteSong($songId){
            syncsession();
        }
    }

    
}