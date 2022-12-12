<?php
/*
* =======================================================================
* FILE NAME:        Cajasatlantico57Controller.php
* DATE CREATED:  	10-10-2022
* FOR TABLE:  		cajas_atlantico57
* AUTHOR:			Hezekiah O. (HT Solutions LTD)
* CONTACT:			http://hezecom.com <info@hezecom.com>
* =======================================================================
*/
namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Auth\Auth;
use App\Lib\Datatable;
use App\Lib\Uploader;
use App\Lib\Reporting;
use App\Models\Cajasatlantico57;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Respect\Validation\Validator as v;

	
class Cajasatlantico57Controller extends Controller
{     
    /**
    * This method initiate the datatable template
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function index(Request $request, Response $response)
    {
        return view($response,'admin/cajasatlantico57/index.twig');
    }    
    /**
     * This method send data to datatable
     * @param $primaryKey is the table primary key
     * @param {rowId} will search and replace with the table primary key
     * @param Request $request
     * @param Response $response
     * @return Response
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function datatable(Request $request, Response $response)
    {
        $query = Cajasatlantico57::select('*');
        $primaryKey = 'id';
        $action='<div class="btn-group btn-group-sm" role="group">
				<a href="'.route('cajasatlantico57.show',['id'=>'{rowId}']).'"  class="btn"><i class="bi bi-zoom-in font16"></i></a>
				<a href="'.route('cajasatlantico57.edit',['id'=>'{rowId}']).'"  class="btn"><i class="bi bi-pencil text-dark font16"></i></a>
				<a href="javascript:void(0)"  class="btn" onclick="deleteRecord(\''.route('cajasatlantico57.destroy',['id'=>'{rowId}']).'\')"><i class="bi bi-trash text-danger font16"></i></a>
				</div>';
        json_encode(Datatable::make($query,$primaryKey,$action));
        return $response;
    }
	
    /**
     * This method select cajasatlantico57 details
     * @param $id
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function show(Request $request, Response $response,$id){$cajasatlantico57 = Cajasatlantico57::findOrFail($id);
          return view($response,'admin/cajasatlantico57/show.twig', compact('cajasatlantico57'));
    }

    /**
     * This method load cajasatlantico57 form
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function create(Request $request, Response $response){
        
        return view($response,'admin/cajasatlantico57/create.twig');
    }

     /**
     * Insert into database 
     * @param Request $request
     * @param Response $response
     */
    public function store(Request $request, Response $response){
        /* validate cajasatlantico57 data */
        $validation = $this->validator->validate($request, [
            'cb_efectivo' => v::notEmpty(),
              'cb_tarjeta' => v::notEmpty(),
              'cb_total' => v::notEmpty(),
              'cb_efectivoz' => v::notEmpty(),
              'cb_tarjetaz' => v::notEmpty(),
              'cb_totalz' => v::notEmpty(),
              'cb_diferencia' => v::notEmpty(),
              'cb_anticipada' => v::notEmpty(),
              'cb_camareros' => v::notEmpty(),
              
        ]);
        if ($validation->failed()) {
            redirect()->route('cajasatlantico57.create');
        }
        else {
            /* get post data */
            $data = $request->getParsedBody();
            /* insert post data */
            $data= Cajasatlantico57::create([
                'cb_barra' => $data['cb_barra'],
              'cb_fecha' => $data['cb_fecha'],
              'cb_cambio' => $data['cb_cambio'],
              'cb_efectivo' => $data['cb_efectivo'],
              'cb_tarjeta' => $data['cb_tarjeta'],
              'cb_total' => $data['cb_total'],
              'cb_efectivoz' => $data['cb_efectivoz'],
              'cb_tarjetaz' => $data['cb_tarjetaz'],
              'cb_totalz' => $data['cb_totalz'],
              'cb_diferencia' => $data['cb_diferencia'],
              'cb_anticipada' => $data['cb_anticipada'],
              'cb_camareros' => $data['cb_camareros'],
              
            ]);
            
            redirect()->route('cajasatlantico57.index')->with('success',lang('record_created'));
        }
    }

    /**
     * Get form for cajasatlantico57 to edit
     * @param $id
     * @param Request $request
     * @param Response $response
     */
    public function edit(Request $request, Response $response,$id){
         
        $cajasatlantico57 = Cajasatlantico57::findOrFail($id);
        /* pass cajasatlantico57 data to view and load list view */
        
        return view($response,'admin/cajasatlantico57/edit.twig', compact('cajasatlantico57' ));
    }

    /**
     * This method process cajasatlantico57 edit form
     * @param $id
     * @param Request $request
     */
    public function update(Request $request, Response $response){
    
       $data = $request->getParsedBody();
       /* validate cajasatlantico57 data */
        $validation = $this->validator->validate($request, [
            'cb_efectivo' => v::notEmpty(),
              'cb_tarjeta' => v::notEmpty(),
              'cb_total' => v::notEmpty(),
              'cb_efectivoz' => v::notEmpty(),
              'cb_tarjetaz' => v::notEmpty(),
              'cb_totalz' => v::notEmpty(),
              'cb_diferencia' => v::notEmpty(),
              'cb_anticipada' => v::notEmpty(),
              'cb_camareros' => v::notEmpty(),
              
        ]);
        if ($validation->failed()) {
            redirect()->route('cajasatlantico57.edit',['id'=>$data['id']]);
        }
        else {
            $cajasatlantico57 = Cajasatlantico57::findOrFail($data['id']);
            $cajasatlantico57->cb_barra = $data['cb_barra'];
              $cajasatlantico57->cb_fecha = $data['cb_fecha'];
              $cajasatlantico57->cb_cambio = $data['cb_cambio'];
              $cajasatlantico57->cb_efectivo = $data['cb_efectivo'];
              $cajasatlantico57->cb_tarjeta = $data['cb_tarjeta'];
              $cajasatlantico57->cb_total = $data['cb_total'];
              $cajasatlantico57->cb_efectivoz = $data['cb_efectivoz'];
              $cajasatlantico57->cb_tarjetaz = $data['cb_tarjetaz'];
              $cajasatlantico57->cb_totalz = $data['cb_totalz'];
              $cajasatlantico57->cb_diferencia = $data['cb_diferencia'];
              $cajasatlantico57->cb_anticipada = $data['cb_anticipada'];
              $cajasatlantico57->cb_camareros = $data['cb_camareros'];
              
            
            $cajasatlantico57->save();
            redirect()->route('cajasatlantico57.edit',['id'=>$data['id']])->with('success',lang('record_updated'));
        }
    }

    /**
    * This method delete record from database
    * @param Request $request
    * @param Response $response
    * @return Response
    */
    public function destroy(Request $request, Response $response, $id){
        if($id) {
            Cajasatlantico57::where('id', $id)->delete();
            echo 1;
        }
        return $response;
    }

    /**
    * Delete file
    * @param Request $request
    * @param Response $response
    * @return Response
    */
    public function deleteFile(Request $request, Response $response, $id){
        if($id) {
            Uploader::deleteFiles($id);
            echo 1;
        }
        return $response;
    }

    /**
     * Export to excel supports  (xlsx, xls, csv)
     * The @header array can be null to dissable header for your export
     * @param Request $request
     * @param Response $response
     * @return Response
     */
    public function export(Request $request, Response $response, $type){
        $cajasatlantico57 = Cajasatlantico57::select('cb_barra','cb_fecha','cb_cambio','cb_efectivo','cb_tarjeta','cb_total','cb_efectivoz','cb_tarjetaz','cb_totalz','cb_diferencia','cb_anticipada','cb_camareros')->get()->toArray();
        $filename = 'cajasatlantico57_'.date('ymd').'.'.$type;
        if($type ==='pdf'){
            $message = render('admin/cajasatlantico57/print.twig',compact('cajasatlantico57'));
            Reporting::pdf($message, $filename);
        }else{
            $header = ['cb_barra','cb_fecha','cb_cambio','cb_efectivo','cb_tarjeta','cb_total','cb_efectivoz','cb_tarjetaz','cb_totalz','cb_diferencia','cb_anticipada','cb_camareros'];
            Reporting::excel($cajasatlantico57,$header,$filename);
        }
        return $response;
    }

}
	