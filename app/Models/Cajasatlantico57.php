<?php
/*
* =======================================================================
* FILE NAME:        Cajasatlantico57.php
* DATE CREATED:  	10-10-2022
* FOR TABLE:  		cajas_atlantico57
* AUTHOR:			Hezekiah O. (HT Solutions LTD)
* CONTACT:			http://hezecom.com <info@hezecom.com>
* =======================================================================
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cajasatlantico57 extends Model
{
    /*disable Eloquent timestamps*/
    public $timestamps = false;

    /*database table name*/
    protected $table = 'cajas_atlantico57';
    
    /*get primary key name as in DB*/
    protected $primaryKey = 'id';
    
    /*fillable fields*/
    protected $fillable = ['cb_barra','cb_fecha','cb_cambio','cb_efectivo','cb_tarjeta','cb_total','cb_efectivoz','cb_tarjetaz','cb_totalz','cb_diferencia','cb_anticipada','cb_camareros'];
    
   
}