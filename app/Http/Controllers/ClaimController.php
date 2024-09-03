<?php

namespace App\Http\Controllers;

use App\Models\Claim;
use App\Models\DocumentType;
use App\Models\Purchase;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

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
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'document_type_id' => 'required|integer',
            'document_number' => 'required|integer',
            'purchase_code' => 'required|string|max:20',
            'purchase_date' => 'required|date',
            'response_mode' => 'required|string|max:1',
            'description' => 'required|string|max:1000',
        ]);
    
        // Verificar si el código de compra existe
        $purchase = Purchase::where('purchase_code', $request->purchase_code)->first();
        
        if (!$purchase) {
            return response()->json(['success' => false, 'message' => 'El código de compra no existe.'], 404);
        }
    
        // Verificar si el usuario ya existe
        $user = User::where('email', $request->email)->first();
    
        if (!$user) {
            // Si el usuario no existe, crearlo
            $user = User::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'status' => 'I', // Estado inactivo
                'phone' => $request->phone,
                'password' => bcrypt('defaultpassword'), // Contraseña por defecto
            ]);
        }
    
        // Verificar el tipo de documento
        $documentType = DocumentType::find($request->document_type_id);
    
        if (!$documentType) {
            return response()->json(['success' => false, 'message' => 'Tipo de documento no encontrado.'], 404);
        }
    
        // Asignar el documento al usuario si no existe en la tabla pivot
        if (!$user->documentTypes()->where('document_type_id', $documentType->id)
            ->where('document_number', $request->document_number)
            ->exists()) {
            $user->documentTypes()->attach($documentType->id, ['document_number' => $request->document_number]);
        }
    
        // Crear el reclamo
        $claim = Claim::create([
            'user_id' => $user->id,
            'purchase_code' => $request->purchase_code,
            'response_date' => $request->purchase_date,
            'response_mode' => $request->response_mode,
            'description' => $request->description,
            // 'document' => $request->document_number, // Descomenta si es necesario
        ]);
    
        // Verificar si el reclamo se ha creado correctamente
        if ($claim) {
            return response()->json(['success' => true, 'message' => 'Reclamo enviado con éxito.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Error al enviar el reclamo.'], 500);
        }
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
