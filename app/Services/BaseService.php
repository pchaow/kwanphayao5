<?php namespace App\Services;
/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 2/12/2015 AD
 * Time: 12:21 PM
 */
use App\Models\Content;
use App\Models\MainCategory;
use App\Models\Category;
use App\Models\User;
use App\Models\Role as Role;
use Illuminate\Http\Request;


//use App\Content;
//use App\MainCategory;

class BaseService {

    protected function myDataTable($class,$page=1,$take=10,$with=[],$filter=[],$relateFilter=[],$order = []){

        $skip = $page-1;
        $class1 = $class;
        $query = $class1::with($with);
//        $query = User::with($with);
//        $query = Role::with($with);


        if($relateFilter != null){
            foreach($relateFilter as $key=>$value){
                $query->orWhereHas($key,function($q) use ($value){
                    foreach($value as $k => $v){
                        $q->orWhere($k,'=~',"(?i).*$v.*");
                    }
                });
            }
        }

        if($filter != null){
            foreach($filter as $key => $value){
                $query->orWhere($key,'=~',"(?i).*$value.*");
            }
        }

        $total = $query->count();
         foreach($order as $key =>$value){
            $query->orderBy($key,$value);
        }

        if($take == -1){
            $list = $query->get();
        }else {
            $list = $query->skip($skip)->take($take)->get();
        }



        $data = [
            "data" => $list,
            "skip" => $skip,
            "take" => $take,
            "count" => $list->count(),
            "total" => $total
        ];

        return $data;
    }

    protected function getOrderByArray($input){
        if(isset($input['orderBy'])){
            $orderBy = $input['orderBy'];
            if(isset($input['orderType'])){
                $orderType = $input['orderType'];
            }else {
                $orderType = "ASC";
            }

            $orderFilter = [
                $orderBy => $orderType
            ];
        }else {
            $orderFilter = [];
        }

        return $orderFilter;
    }

    public function getPagination($model,$input,$colFilter=null,$relateColFilter=null,$with=null){

        if(isset($input['page'])){
            $page = $input['page'];
        }else {
            $page = 1;
        }
        if(isset($input['take'])){
            $take = $input['take'];
        }else {
            $take = 20;
        }
        if(isset($input['filter'])){
            $filter = $model::getDataFilter($colFilter,$input['filter']);
            $relateFilter = $model::getRelationFilter($relateColFilter,$input['filter']);
//            $filter = User::getDataFilter($colFilter,$input['filter']);
//            $relateFilter = User::getRelationFilter($relateColFilter,$input['filter']);
        }else {
            $filter = null;
            $relateFilter = null;
        }

        $order = $this->getOrderByArray($input);

        return $datatable = $this->myDataTable($model, $page, $take,$with, $filter,$relateFilter, $order);

    }
    
}