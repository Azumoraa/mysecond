<?php  

namespace App\Repositories\Information;

interface InformationRepository
{
	function getAll();
	function create(array $attributes);
	function update($id,array $attributes);
	function delete($id);
}