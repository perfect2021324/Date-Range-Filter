<?php
/*
* =======================================================================
* FILE NAME:        CajasmyController.php
* DATE CREATED:  	10-10-2022
* FOR TABLE:  		cajas_my
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
use App\Models\Cajasmy;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Respect\Validation\Validator as v;


class CajasmyController extends Controller
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
        return view($response, 'admin/cajasmy/index.twig');
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
        $query = Cajasmy::select('*');
        $primaryKey = 'id';
        $action = '<div class="btn-group btn-group-sm" role="group">
				<a href="' . route('cajasmy.show', ['id' => '{rowId}']) . '"  class="btn"><i class="bi bi-zoom-in font16"></i></a>
				<a href="' . route('cajasmy.edit', ['id' => '{rowId}']) . '"  class="btn"><i class="bi bi-pencil text-dark font16"></i></a>
				<a href="javascript:void(0)"  class="btn" onclick="deleteRecord(\'' . route('cajasmy.destroy', ['id' => '{rowId}']) . '\')"><i class="bi bi-trash text-danger font16"></i></a>
				</div>';
        json_encode(Datatable::make($query, $primaryKey, $action));
        return $response;
    }

    /**
     * This method select cajasmy details
     * @param $id
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function show(Request $request, Response $response, $id)
    {
        $cajasmy = Cajasmy::findOrFail($id);
        return view($response, 'admin/cajasmy/show.twig', compact('cajasmy'));
    }

    /**
     * This method load cajasmy form
     * @param Request $request
     * @param Response $response
     * @return mixed
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function create(Request $request, Response $response)
    {

        return view($response, 'admin/cajasmy/create.twig');
    }

    /**
     * Insert into database 
     * @param Request $request
     * @param Response $response
     */
    public function store(Request $request, Response $response)
    {
        /* validate cajasmy data */
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
            'datafonos' => v::notEmpty(),

        ]);
        if ($validation->failed()) {
            redirect()->route('cajasmy.create');
        } else {
            /* get post data */
            $data = $request->getParsedBody();
            /* insert post data */
            $data = Cajasmy::create([
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
                'datafonos' => $data['datafonos'],

            ]);

            redirect()->route('cajasmy.index')->with('success', lang('record_created'));
        }
    }

    /**
     * Get form for cajasmy to edit
     * @param $id
     * @param Request $request
     * @param Response $response
     */
    public function edit(Request $request, Response $response, $id)
    {

        $cajasmy = Cajasmy::findOrFail($id);
        /* pass cajasmy data to view and load list view */



        return view($response, 'admin/cajasmy/edit.twig', compact('cajasmy'));
    }

    /**
     * This method process cajasmy edit form
     * @param $id
     * @param Request $request
     */
    public function update(Request $request, Response $response)
    {

        $data = $request->getParsedBody();
        /* validate cajasmy data */
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
            'datafonos' => v::notEmpty(),

        ]);
        if ($validation->failed()) {
            redirect()->route('cajasmy.edit', ['id' => $data['id']]);
        } else {
            $cajasmy = Cajasmy::findOrFail($data['id']);
            $cajasmy->cb_barra = $data['cb_barra'];
            $cajasmy->cb_fecha = $data['cb_fecha'];
            $cajasmy->cb_cambio = $data['cb_cambio'];
            $cajasmy->cb_efectivo = $data['cb_efectivo'];
            $cajasmy->cb_tarjeta = $data['cb_tarjeta'];
            $cajasmy->cb_total = $data['cb_total'];
            $cajasmy->cb_efectivoz = $data['cb_efectivoz'];
            $cajasmy->cb_tarjetaz = $data['cb_tarjetaz'];
            $cajasmy->cb_totalz = $data['cb_totalz'];
            $cajasmy->cb_diferencia = $data['cb_diferencia'];
            $cajasmy->cb_anticipada = $data['cb_anticipada'];
            $cajasmy->cb_camareros = $data['cb_camareros'];
            $cajasmy->datafonos = $data['datafonos'];

            $logger = $this->get('logger');
            $logger->info('I just got the logger');
            $logger->error('An error occurred');
            $cajasmy->save();
            redirect()->route('cajasmy.edit', ['id' => $data['id']])->with('success', lang('record_updated'));
        }
    }

    /**
     * This method delete record from database
     * @param Request $request
     * @param Response $response
     * @return Response
     */
    public function destroy(Request $request, Response $response, $id)
    {
        if ($id) {
            Cajasmy::where('id', $id)->delete();
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
    public function deleteFile(Request $request, Response $response, $id)
    {
        if ($id) {
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
    public function export(Request $request, Response $response, $type)
    {
        $cajasmy = Cajasmy::select('cb_barra', 'cb_fecha', 'cb_cambio', 'cb_efectivo', 'cb_tarjeta', 'cb_total', 'cb_efectivoz', 'cb_tarjetaz', 'cb_totalz', 'cb_diferencia', 'cb_anticipada', 'cb_camareros', 'datafonos')->get()->toArray();
        $filename = 'cajasmy_' . date('ymd') . '.' . $type;
        if ($type === 'pdf') {
            $message = render('admin/cajasmy/print.twig', compact('cajasmy'));
            Reporting::pdf($message, $filename);
        } else {
            $header = ['Barra', 'cb_fecha', 'cb_cambio', 'cb_efectivo', 'cb_tarjeta', 'cb_total', 'cb_efectivoz', 'cb_tarjetaz', 'cb_totalz', 'cb_diferencia', 'cb_anticipada', 'cb_camareros', 'datafonos'];
            Reporting::excel($cajasmy, $header, $filename);
        }
        return $response;
    }
}