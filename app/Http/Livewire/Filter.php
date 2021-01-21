<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Pagination\Paginator;
use App\Models\User;
use Hash;


class Filter extends Component
{
	use WithPagination;




	public $searchTermp;
	public $searchTerm;
    public $currentPage = 1;
 


    public function render()
    {

      
    	$query = $this->searchTermp;
        $query = $this->searchTerm;
    





    	return view('livewire.filter', [
    		'users'		=>	User::where(function($sub_query){
    							$sub_query->where('email', $this->searchTermp)->where('token', $this->searchTerm);
    						})->paginate(10)


    		/*'users'		=>	User::where('id', 'LIKE', '%'.$this->searchTerm.'%') */



    	]);





    }

    public function setPage($url)
    {
        $this->currentPage = explode('page=', $url)[1];
        Paginator::currentPageResolver(function(){
            return $this->currentPage;
        });
    }
}

