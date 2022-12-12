<?php
/*
* =======================================================================
* FILE NAME:        CajasandenController.php
* DATE CREATED:  	10-10-2022
* FOR TABLE:  		cajas_anden
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
use App\Models\Cajasanden;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Respect\Validation\Validator as v;

	
class CajasandenController extends Controller
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
        return view($response,'admin/cajasanden/index.twig');
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
        $query = Cajasanden::select('*');
        $primaryKey = 'id';
        $action='<div class="btn-group btn-group-sm" role="group">
				<a href="'.route('cajasanden.show',['id'=>'{rowId}']).'"  class="btn"><i class="bi bi-zoom-in font16"></i></a>
				<a href="'.route('cajasanden.edit',['id'=>'{rowId}']).'"  class="btn"><i class="bi bi-pencil text-dark font16"></i></a>
				<a href="javascript:void(0)"  class="btn" onclick="deleteRecord(\''.route('cajasanden.destroy',['id'=>'{rowId}']).'\')"><i class="bi bi-trash text-danger font16"></i></a>
				</div>';
        json_encode(Datatable::make($query,$primaryKey,$action));
        return $response;
    }
	
    /**
     * This method select cajasanden details
     * @param $id
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function show(Request $request, Response $response,$id){$cajasanden = Cajasanden::findOrFail($id);
          return view($response,'admin/cajasanden/show.twig', compact('cajasanden'));
    }

    /**
     * This method load cajasanden form
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function create(Request $request, Response $response){
        
        return view($response,'admin/cajasanden/create.twig');
    }

     /**
     * Insert into database 
     * @param Request $request
     * @param Response $response
     */
    public function store(Request $request, Response $response){
        /* validate cajasanden data */
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
            redirect()->route('cajasanden.create');
        }
        else {
            /* get post data */
            $data = $request->getParsedBody();
            /* insert post data */
            $data= Cajasanden::create([
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
            
            redirect()->route('cajasanden.index')->with('success',lang('record_created'));
        }
    }

    /**
     * Get form for cajasanden to edit
     * @param $id
     * @param Request $request
     * @param Response $response
     */
    public function edit(Request $request, Response $response,$id){
         
        $cajasanden = Cajasanden::findOrFail($id);
        /* pass cajasanden data to view and load list view */
        
        return view($response,'admin/cajasanden/edit.twig', compact('cajasanden' ));
    }

    /**
     * This method process cajasanden edit form
     * @param $id
     * @param Request $request
     */
    public function update(Request $request, Response $response){
    
       $data = $request->getParsedBody();
       /* validate cajasanden data */
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
            redirect()->route('cajasanden.edit',['id'=>$data['id']]);
        }
        else {
            $cajasanden = Cajasanden::findOrFail($data['id']);
            $cajasanden->cb_barra = $data['cb_barra'];
              $cajasanden->cb_fecha = $data['cb_fecha'];
              $cajasanden->cb_cambio = $data['cb_cambio'];
              $cajasanden->cb_efectivo = $data['cb_efectivo'];
              $cajasanden->cb_tarjeta = $data['cb_tarjeta'];
              $cajasanden->cb_total = $data['cb_total'];
              $cajasanden->cb_efectivoz = $data['cb_efectivoz'];
              $cajasanden->cb_tarjetaz = $data['cb_tarjetaz'];
              $cajasanden->cb_totalz = $data['cb_totalz'];
              $cajasanden->cb_diferencia = $data['cb_diferencia'];
              $cajasanden->cb_anticipada = $data['cb_anticipada'];
              $cajasanden->cb_camareros = $data['cb_camareros'];
              
            
            $cajasanden->save();
            redirect()->route('cajasanden.edit',['id'=>$data['id']])->with('success',lang('record_updated'));
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
            Cajasanden::where('id', $id)->delete();
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
        $cajasanden = Cajasanden::select('cb_barra','cb_fecha','cb_cambio','cb_efectivo','cb_tarjeta','cb_total','cb_efectivoz','cb_tarjetaz','cb_totalz','cb_diferencia','cb_anticipada','cb_camareros')->get()->toArray();
        $filename = 'cajasanden_'.date('ymd').'.'.$type;
        if($type ==='pdf'){
            $message = render('admin/cajasanden/print.twig',compact('cajasanden'));
            Reporting::pdf($message, $filename);
        }else{
            $header = ['cb_barra','cb_fecha','cb_cambio','cb_efectivo','cb_tarjeta','cb_total','cb_efectivoz','cb_tarjetaz','cb_totalz','cb_diferencia','cb_anticipada','cb_camareros'];
            Reporting::excel($cajasanden,$header,$filename);
        }
        return $response;
    }

}
	