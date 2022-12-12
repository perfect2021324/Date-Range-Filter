<?php
/*
* =======================================================================
* FILE NAME:        CajaswayController.php
* DATE CREATED:  	10-10-2022
* FOR TABLE:  		cajas_way
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
use App\Models\Cajasway;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Respect\Validation\Validator as v;

	
class CajaswayController extends Controller
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
        return view($response,'admin/cajasway/index.twig');
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
        $query = Cajasway::select('*');
        $primaryKey = 'id';
        $action='<div class="btn-group btn-group-sm" role="group">
				<a href="'.route('cajasway.show',['id'=>'{rowId}']).'"  class="btn"><i class="bi bi-zoom-in font16"></i></a>
				<a href="'.route('cajasway.edit',['id'=>'{rowId}']).'"  class="btn"><i class="bi bi-pencil text-dark font16"></i></a>
				<a href="javascript:void(0)"  class="btn" onclick="deleteRecord(\''.route('cajasway.destroy',['id'=>'{rowId}']).'\')"><i class="bi bi-trash text-danger font16"></i></a>
				</div>';
        json_encode(Datatable::make($query,$primaryKey,$action));
        return $response;
    }
	
    /**
     * This method select cajasway details
     * @param $id
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function show(Request $request, Response $response,$id){$cajasway = Cajasway::findOrFail($id);
          return view($response,'admin/cajasway/show.twig', compact('cajasway'));
    }

    /**
     * This method load cajasway form
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function create(Request $request, Response $response){
        
        return view($response,'admin/cajasway/create.twig');
    }

     /**
     * Insert into database 
     * @param Request $request
     * @param Response $response
     */
    public function store(Request $request, Response $response){
        /* validate cajasway data */
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
            redirect()->route('cajasway.create');
        }
        else {
            /* get post data */
            $data = $request->getParsedBody();
            /* insert post data */
            $data= Cajasway::create([
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
            
            redirect()->route('cajasway.index')->with('success',lang('record_created'));
        }
    }

    /**
     * Get form for cajasway to edit
     * @param $id
     * @param Request $request
     * @param Response $response
     */
    public function edit(Request $request, Response $response,$id){
         
        $cajasway = Cajasway::findOrFail($id);
        /* pass cajasway data to view and load list view */
        
        return view($response,'admin/cajasway/edit.twig', compact('cajasway' ));
    }

    /**
     * This method process cajasway edit form
     * @param $id
     * @param Request $request
     */
    public function update(Request $request, Response $response){
    
       $data = $request->getParsedBody();
       /* validate cajasway data */
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
            redirect()->route('cajasway.edit',['id'=>$data['id']]);
        }
        else {
            $cajasway = Cajasway::findOrFail($data['id']);
            $cajasway->cb_barra = $data['cb_barra'];
              $cajasway->cb_fecha = $data['cb_fecha'];
              $cajasway->cb_cambio = $data['cb_cambio'];
              $cajasway->cb_efectivo = $data['cb_efectivo'];
              $cajasway->cb_tarjeta = $data['cb_tarjeta'];
              $cajasway->cb_total = $data['cb_total'];
              $cajasway->cb_efectivoz = $data['cb_efectivoz'];
              $cajasway->cb_tarjetaz = $data['cb_tarjetaz'];
              $cajasway->cb_totalz = $data['cb_totalz'];
              $cajasway->cb_diferencia = $data['cb_diferencia'];
              $cajasway->cb_anticipada = $data['cb_anticipada'];
              $cajasway->cb_camareros = $data['cb_camareros'];
              
            
            $cajasway->save();
            redirect()->route('cajasway.edit',['id'=>$data['id']])->with('success',lang('record_updated'));
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
            Cajasway::where('id', $id)->delete();
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
        $cajasway = Cajasway::select('cb_barra','cb_fecha','cb_cambio','cb_efectivo','cb_tarjeta','cb_total','cb_efectivoz','cb_tarjetaz','cb_totalz','cb_diferencia','cb_anticipada','cb_camareros')->get()->toArray();
        $filename = 'cajasway_'.date('ymd').'.'.$type;
        if($type ==='pdf'){
            $message = render('admin/cajasway/print.twig',compact('cajasway'));
            Reporting::pdf($message, $filename);
        }else{
            $header = ['cb_barra','cb_fecha','cb_cambio','cb_efectivo','cb_tarjeta','cb_total','cb_efectivoz','cb_tarjetaz','cb_totalz','cb_diferencia','cb_anticipada','cb_camareros'];
            Reporting::excel($cajasway,$header,$filename);
        }
        return $response;
    }

}
	