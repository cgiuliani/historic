<?php
namespace Pragma\Historic;

use Pragma\ORM\Model;

class HistoricAction extends Model{
	const TABLE_NAME = 'historic_actions';

	public function __construct(){
		parent::__construct(self::TABLE_NAME);
	}
}
