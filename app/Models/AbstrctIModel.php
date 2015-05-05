<?php namespace App\Models;
/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 2/13/2015 AD
 * Time: 10:33 AM
 */

use \Vinelab\NeoEloquent\Eloquent\Model as NeoEloquent;

class AbstrctIModel extends NeoEloquent  implements  IModel{

//
//    public static function getDataFilter($colFilter,$filterString = null){
//        if ($filterString != null){
//            $filter = $filterString;
//
//            $dataFilter = [];
//            foreach($colFilter as $key){
//                $dataFilter[$key] = $filter;
//            }
//
//        }else {
//            $dataFilter = [];
//        }
//
//        return $dataFilter;
//    }
//
//    public static function getRelationFilter($relateColFilter,$filterString = null){
//        if ($filterString != null){
//            $filter = $filterString;
//
//            $dataFilter = [];
//
//            foreach($relateColFilter as $key=>$value){
//                $dataFilter[$key] = [];
//                foreach($value as $k){
//                    $dataFilter[$key][$k] = $filter;
//                }
//            }
//
//        }else {
//            $dataFilter = [];
//        }
//
//        return $dataFilter;
//    }

}