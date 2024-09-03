<?php

namespace App\Http\Controllers;

use App\Models\Claim;
use App\Models\DocumentType;
use App\Models\User;
use Illuminate\Http\Request;

class ClaimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('claim.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'correo' => 'required|email',
            'telefono' => 'required|string|max:15',
            'user_document' => 'required|integer', // ID del tipo de documento
            'number_document' => 'required|string|max:20', // Número de documento
            'cod_compra' => 'required|string|max:20',
            'fecha_compra' => 'required|date',
            'modo_respuesta' => 'required|string|max:1',
            'descripcion' => 'required|string|max:1000',
        ]);

        // Verificar si el usuario ya existe
        $user = User::where('email', $request->correo)->first();

        if (!$user) {
            // Si el usuario no existe, crearlo
            $user = User::create([
                'firstname' => $request->nombres,
                'lastname' => $request->apellidos,
                'email' => $request->correo,
                'status' => 'I', // Estado inactivo
                'phone' => $request->telefono,
                'password' => bcrypt('defaultpassword'), // Contraseña por defecto
            ]);
        }

        // Verificar si el tipo de documento existe
        $documentType = DocumentType::find($request->user_document);
        
        if ($documentType) {
            // Asignar el documento al usuario si no existe en la tabla pivot
            if (!$user->documentTypes()->where('document_type_id', $documentType->id)
                ->where('document_number', $request->number_document)->exists()) {
                $user->documentTypes()->attach($documentType->id, ['document_number' => $request->number_document]);
            }
        }

        // Crear el reclamo
        Claim::create([
            'user_id' => $user->id, // Usar el ID del usuario encontrado o creado
            'cod_compra' => $request->cod_compra,
            'fecha_compra' => $request->fecha_compra,
            'modo_respuesta' => $request->modo_respuesta,
            'descripcion' => $request->descripcion,
        ]);

        // Redirigir con un mensaje de éxito
        return redirect()->route('claims.create')->with('success', 'Reclamo enviado con éxito.');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
