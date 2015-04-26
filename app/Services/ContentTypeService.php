<?php namespace App\Services;
/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 2/12/2015 AD
 * Time: 12:21 PM
 */

class ContentTypeService extends BaseService {

    var $types = [
        ["id" => "content", "title" => "ข้อมูลทั่วไป","class"=>"Content"],
        ["id" => "fish", "title" => "พันธุ์ปลา","class"=>"Fish"],
    ];

    public function getAll(){
        return $this->types;
    }

    public function getView($id){
        foreach ($this->types as $type) {
            if (strcmp($id,$type['id'])==0){

                return $type;
            }
        }
        return null;

    }



}