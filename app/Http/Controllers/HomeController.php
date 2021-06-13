<?php

namespace App\Http\Controllers;

use App\Cuenta;
use App\Cuenta_descripcion;
use App\Http\Requests\v_registro_cliente;
use App\User;
use App\Clientes;
use Illuminate\Http\Request;
use Auth;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $datosUser =Auth::User()->id;
        $usuario = User::find($datosUser);
        $cuenta = Cuenta::where('id_users',$datosUser)->get();
        $cuenta = $cuenta->map(function ($item, $key) {
            $item->rel_cuenta_des;
            return $item;
        });



        return view('home')->with([
            'cuenta' => $cuenta,
            'usuario' => $usuario
        ]);
    }

    public function cuentas_propia()
    {


        return view('cuentas_propia');
    }

    public function cuentas_terceros()
    {
        $datosUser =Auth::User()->id;
        $clientes = Clientes::where('id_users',$datosUser)

            ->get();


        $cuenta = Cuenta::where('id_users',$datosUser)

            ->get();



        if(!empty($clientes->id_cliente))
        {
            toastr()->warning('No tiene registrada cuentas de terceros');
        }



        return view('cuentas_terceros')->with([
            'clientes' => $clientes,
            'cuenta' => $cuenta
        ]);
    }

    public function cuentas_asociadas()
    {
        return view('cuentas_terceros_registro');
    }

    public function registro_clientes(v_registro_cliente $request)
    {
         Clientes::create([
            'nombre_cliente' => $request['nombre_cliente'],
            'identificador_cliente' => $request['identificador_cliente'],
            'cuenta' => $request['cuenta'],
            'id_users' => Auth::User()->id

        ]);
        toastr()->success('El registro de la cuenta Clientes fue creado');

        return back();

    }

    public function registro_tranferencia(Request $request)
    {

        $device = Cuenta::find($request->id_cuenta);
        $valor_restante = $device->saldo_cuenta - $request->valor_tranferir ;

        if ($valor_restante < 0) {
            toastr()->error('El saldo de su cuenta no puede ser menor al valor a tranferir');
        } else {
            $registro = new Cuenta_descripcion();
            $registro->retiro = $request->valor_tranferir;
            $registro->id_cuenta = $request->id_cuenta;
            $registro->save();

            $device = Cuenta::find($request->id_cuenta);
            $valor_restante = $device->saldo_cuenta - $registro->retiro;
            DB::table('cuenta')
                ->where('id_cuenta', $request->id_cuenta)
                ->update(['saldo_cuenta' => $valor_restante]);

            toastr()->success('La tranferencia entre cuentas se pudo realizar de manera satisfactoria');
        }
        return back();

    }
}
