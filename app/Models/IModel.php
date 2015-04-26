<?php namespace App\Models;
/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 2/13/2015 AD
 * Time: 9:09 AM
 */

interface IModel {
    static function getDataFilter($colFilter,$filterString = null);
    static function getRelationFilter($relateColFilter,$filterString = null);
}