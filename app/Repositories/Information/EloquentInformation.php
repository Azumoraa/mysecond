<?php 
namespace App\Repositories\Information;

use App\Model\information;


class EloquentInformation implements InformationRepository{

	private $information;

	public function __contruct(information $information)
	{
		$this->information=$information;
	}


	function getAll()
	{

		return $this->information->all();

	}
	function create(array $attributes)
	{
		//return $attributes;
	   
		return $this->information->create($attributes);
		//return 'heello';

	}
	function update($id,array $attributes){
		return $this->information->find($id)->update($attributes);

	}
	function delete($id){
		return $this->information->find($id)->delete($id);

	}
}