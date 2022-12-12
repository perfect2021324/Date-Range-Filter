<?php
/*
* =======================================================================
* FILE NAME:        CajasduxController.php
* DATE CREATED:  	10-10-2022
* FOR TABLE:  		cajas_dux
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
use App\Models\Cajasdux;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Respect\Validation\Validator as v;

	
class CajasduxController extends Controller
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
        return view($response,'admin/cajasdux/index.twig');
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
        $query = Cajasdux::select('*');
        $primaryKey = 'id';
        $action='<div class="btn-group btn-group-sm" role="group">
				<a href="'.route('cajasdux.show',['id'=>'{rowId}']).'"  class="btn"><i class="bi bi-zoom-in font16"></i></a>
				<a href="'.route('cajasdux.edit',['id'=>'{rowId}']).'"  class="btn"><i class="bi bi-pencil text-dark font16"></i></a>
				<a href="javascript:void(0)"  class="btn" onclick="deleteRecord(\''.route('cajasdux.destroy',['id'=>'{rowId}']).'\')"><i class="bi bi-trash text-danger font16"></i></a>
				</div>';
        json_encode(Datatable::make($query,$primaryKey,$action));
        return $response;
    }
	
    /**
     * This method select cajasdux details
     * @param $id
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function show(Request $request, Response $response,$id){$cajasdux = Cajasdux::findOrFail($id);
          return view($response,'admin/cajasdux/show.twig', compact('cajasdux'));
    }

    /**
     * This method load cajasdux form
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function create(Request $request, Response $response){
        
        return view($response,'admin/cajasdux/create.twig');
    }

     /**
     * Insert into database 
     * @param Request $request
     * @param Response $response
     */
    public function store(Request $request, Response $response){
        /* validate cajasdux data */
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
            redirect()->route('cajasdux.create');
        }
        else {
            /* get post data */
            $data = $request->getParsedBody();
            /* insert post data */
            $data= Cajasdux::create([
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
            
            redirect()->route('cajasdux.index')->with('success',lang('record_created'));
        }
    }

    /**
     * Get form for cajasdux to edit
     * @param $id
     * @param Request $request
     * @param Response $response
     */
    public function edit(Request $request, Response $response,$id){
         
        $cajasdux = Cajasdux::findOrFail($id);
        /* pass cajasdux data to view and load list view */
        
        return view($response,'admin/cajasdux/edit.twig', compact('cajasdux' ));
    }

    /**
     * This method process cajasdux edit form
     * @param $id
     * @param Request $request
     */
    public function update(Request $request, Response $response){
    
       $data = $request->getParsedBody();
       /* validate cajasdux data */
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
            redirect()->route('cajasdux.edit',['id'=>$data['id']]);
        }
        else {
            $cajasdux = Cajasdux::findOrFail($data['id']);
            $cajasdux->cb_barra = $data['cb_barra'];
              $cajasdux->cb_fecha = $data['cb_fecha'];
              $cajasdux->cb_cambio = $data['cb_cambio'];
              $cajasdux->cb_efectivo = $data['cb_efectivo'];
              $cajasdux->cb_tarjeta = $data['cb_tarjeta'];
              $cajasdux->cb_total = $data['cb_total'];
              $cajasdux->cb_efectivoz = $data['cb_efectivoz'];
              $cajasdux->cb_tarjetaz = $data['cb_tarjetaz'];
              $cajasdux->cb_totalz = $data['cb_totalz'];
              $cajasdux->cb_diferencia = $data['cb_diferencia'];
              $cajasdux->cb_anticipada = $data['cb_anticipada'];
              $cajasdux->cb_camareros = $data['cb_camareros'];
              
            
            $cajasdux->save();
            redirect()->route('cajasdux.edit',['id'=>$data['id']])->with('success',lang('record_updated'));
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
            Cajasdux::where('id', $id)->delete();
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
        $cajasdux = Cajasdux::select('cb_barra','cb_fecha','cb_cambio','cb_efectivo','cb_tarjeta','cb_total','cb_efectivoz','cb_tarjetaz','cb_totalz','cb_diferencia','cb_anticipada','cb_camareros')->get()->toArray();
        $filename = 'cajasdux_'.date('ymd').'.'.$type;
        if($type ==='pdf'){
            $message = render('admin/cajasdux/print.twig',compact('cajasdux'));
            Reporting::pdf($message, $filename);
        }else{
            $header = ['cb_barra','cb_fecha','cb_cambio','cb_efectivo','cb_tarjeta','cb_total','cb_efectivoz','cb_tarjetaz','cb_totalz','cb_diferencia','cb_anticipada','cb_camareros'];
            Reporting::excel($cajasdux,$header,$filename);
        }
        return $response;
    }

}
	