<?php
## FILE GENERATED BY MAGRATHEA.
## This file was automatically generated and changes can be overwritten through the admin
## -- date of creation: [2023-10-25 12:31:27]

namespace MagratheaImages3\Apikey\Base;

use Magrathea2\iMagratheaModel;
use Magrathea2\MagratheaModel;

class ApikeyBase extends MagratheaModel implements iMagratheaModel {

	public $id, $val, $folder, $uses, $usage_limit, $expiration, $active;
	public $created_at, $updated_at;
	protected $autoload = null;

	public function __construct(  $id=0  ){ 
		$this->MagratheaStart();
		if( !empty($id) ){
			$pk = $this->dbPk;
			$this->$pk = $id;
			$this->GetById($id);
		}
	}
	public function MagratheaStart(){
		$this->dbTable = "apikey";
		$this->dbPk = "id";
		$this->dbValues["id"] = "int";
		$this->dbValues["val"] = "string";
		$this->dbValues["folder"] = "string";
		$this->dbValues["uses"] = "int";
		$this->dbValues["usage_limit"] = "int";
		$this->dbValues["expiration"] = "datetime";
		$this->dbValues["active"] = "boolean";

		$this->relations["properties"]["Images"] = null;
		$this->relations["methods"]["Images"] = "GetImages";
		$this->relations["lazyload"]["Images"] = "true";
		$this->dbValues["created_at"] =  "datetime";
		$this->dbValues["updated_at"] =  "datetime";

	}

	// >>> relations:
	public function GetImages(){
		if($this->relations["properties"]["Images"] != null) return $this->relations["properties"]["Images"];
		$pk = $this->dbPk;
		$this->relations["properties"]["Images"] = \MagratheaImages3\Images\Base\ImagesControlBase::GetWhere(array("upload_key" => $this->$pk));
		return $this->relations["properties"]["Images"];
	}

}