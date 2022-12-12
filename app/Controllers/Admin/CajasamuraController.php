<?php
/*
* =======================================================================
* FILE NAME:        CajasamuraController.php
* DATE CREATED:  	10-10-2022
* FOR TABLE:  		cajas_amura
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
use App\Models\Cajasamura;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Respect\Validation\Validator as v;

	
class CajasamuraController extends Controller
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
        return view($response,'admin/cajasamura/index.twig');
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
        $query = Cajasamura::select('*');
        $primaryKey = 'id';
        $action='<div class="btn-group btn-group-sm" role="group">
				<a href="'.route('cajasamura.show',['id'=>'{rowId}']).'"  class="btn"><i class="bi bi-zoom-in font16"></i></a>
				<a href="'.route('cajasamura.edit',['id'=>'{rowId}']).'"  class="btn"><i class="bi bi-pencil text-dark font16"></i></a>
				<a href="javascript:void(0)"  class="btn" onclick="deleteRecord(\''.route('cajasamura.destroy',['id'=>'{rowId}']).'\')"><i class="bi bi-trash text-danger font16"></i></a>
				</div>';
        json_encode(Datatable::make($query,$primaryKey,$action));
        return $response;
    }
	
    /**
     * This method select cajasamura details
     * @param $id
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function show(Request $request, Response $response,$id){$cajasamura = Cajasamura::findOrFail($id);
          return view($response,'admin/cajasamura/show.twig', compact('cajasamura'));
    }

    /**
     * This method load cajasamura form
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function create(Request $request, Response $response){
        
        return view($response,'admin/cajasamura/create.twig');
    }

     /**
     * Insert into database 
     * @param Request $request
     * @param Response $response
     */
    public function store(Request $request, Response $response){
        /* validate cajasamura data */
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
            redirect()->route('cajasamura.create');
        }
        else {
            /* get post data */
            $data = $request->getParsedBody();
            /* insert post data */
            $data= Cajasamura::create([
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
            
            redirect()->route('cajasamura.index')->with('success',lang('record_created'));
        }
    }

    /**
     * Get form for cajasamura to edit
     * @param $id
     * @param Request $request
     * @param Response $response
     */
    public function edit(Request $request, Response $response,$id){
         
        $cajasamura = Cajasamura::findOrFail($id);
        /* pass cajasamura data to view and load list view */
        
        return view($response,'admin/cajasamura/edit.twig', compact('cajasamura' ));
    }

    /**
     * This method process cajasamura edit form
     * @param $id
     * @param Request $request
     */
    public function update(Request $request, Response $response){
    
       $data = $request->getParsedBody();
       /* validate cajasamura data */
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
            redirect()->route('cajasamura.edit',['id'=>$data['id']]);
        }
        else {
            $cajasamura = Cajasamura::findOrFail($data['id']);
            $cajasamura->cb_barra = $data['cb_barra'];
              $cajasamura->cb_fecha = $data['cb_fecha'];
              $cajasamura->cb_cambio = $data['cb_cambio'];
              $cajasamura->cb_efectivo = $data['cb_efectivo'];
              $cajasamura->cb_tarjeta = $data['cb_tarjeta'];
              $cajasamura->cb_total = $data['cb_total'];
              $cajasamura->cb_efectivoz = $data['cb_efectivoz'];
              $cajasamura->cb_tarjetaz = $data['cb_tarjetaz'];
              $cajasamura->cb_totalz = $data['cb_totalz'];
              $cajasamura->cb_diferencia = $data['cb_diferencia'];
              $cajasamura->cb_anticipada = $data['cb_anticipada'];
              $cajasamura->cb_camareros = $data['cb_camareros'];
              
            
            $cajasamura->save();
            redirect()->route('cajasamura.edit',['id'=>$data['id']])->with('success',lang('record_updated'));
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
            Cajasamura::where('id', $id)->delete();
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
        $cajasamura = Cajasamura::select('cb_barra','cb_fecha','cb_cambio','cb_efectivo','cb_tarjeta','cb_total','cb_efectivoz','cb_tarjetaz','cb_totalz','cb_diferencia','cb_anticipada','cb_camareros')->get()->toArray();
        $filename = 'cajasamura_'.date('ymd').'.'.$type;
        if($type ==='pdf'){
            $message = render('admin/cajasamura/print.twig',compact('cajasamura'));
            Reporting::pdf($message, $filename);
        }else{
            $header = ['cb_barra','cb_fecha','cb_cambio','cb_efectivo','cb_tarjeta','cb_total','cb_efectivoz','cb_tarjetaz','cb_totalz','cb_diferencia','cb_anticipada','cb_camareros'];
            Reporting::excel($cajasamura,$header,$filename);
        }
        return $response;
    }

}
	