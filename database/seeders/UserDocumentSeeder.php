<?php

namespace Database\Seeders;

use App\Models\DocumentType;
use App\Models\User;
use App\Models\UserDocument;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $documents = [
            ['user_id' => 1, 'document_type_id' => 1, 'document_number' => '87452106'], // DNI
            ['user_id' => 1, 'document_type_id' => 2, 'document_number' => '12345678901'], // RUC
            ['user_id' => 2, 'document_type_id' => 1, 'document_number' => '87654321'], // DNI
            ['user_id' => 2, 'document_type_id' => 3, 'document_number' => '12345678901234567890'], // Pasaporte
            ['user_id' => 3, 'document_type_id' => 2, 'document_number' => '23456789012'], // RUC
            ['user_id' => 4, 'document_type_id' => 1, 'document_number' => '34567890'], // DNI
            ['user_id' => 5, 'document_type_id' => 3, 'document_number' => '23456789012345678901'], // Pasaporte
            ['user_id' => 6, 'document_type_id' => 2, 'document_number' => '45678901234'], // RUC
            ['user_id' => 7, 'document_type_id' => 1, 'document_number' => '56789012'], // DNI
            ['user_id' => 8, 'document_type_id' => 3, 'document_number' => '34567890123456789012'], // Pasaporte
            ['user_id' => 9, 'document_type_id' => 2, 'document_number' => '67890123456'], // RUC
            ['user_id' => 10, 'document_type_id' => 1, 'document_number' => '78901234'], // DNI
        ];

        foreach ($documents as $document) {
            UserDocument::create($document);
        }
    }

}
