<?php

namespace App\Services;

use App\Models\Embedding;
use App\Models\File;
use App\Services\QueenbeeGateway;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Spatie\PdfToText\Pdf;

class Parser
{
    public function parsePdf($path)
    {
        // Given a PDF, extract the text
        $fileText = Pdf::getText(
            storage_path("app/" . $path),
            config('services.pdftotext.path')
        );

        // First create a new File
        $file = File::query()->create([
          'path' => $path,
        ]);

        // Clean up and convert into chunks
        $chunks = Str::of($fileText)
            ->split("/\f/") // Splitting the text into pages based on the form feed character
            ->transform(function ($page) {
                return (string) Str::of($page)
                    ->replace("\n", " ") // Replacing newline characters with spaces
                    ->trim(); // Trimming leading and trailing whitespace
            })
            ->toArray();

        // Create embeddings for each chunk
        $gateway = new QueenbeeGateway();
        $result = $gateway->createEmbedding($chunks);

        // Store the embeddings in a database
        foreach ($chunks as $key=>$chunk) {
            Embedding::query()->create([
                'file_id' => $file->id,
                'embedding' => $result[$key]["embedding"],
                'metadata' => [
                    'text' => $chunk,
                ]
            ]);
        }

        return [
            'file_id' => $file->id,
            'chunks' => $chunks,
            'embeddings' => $result,
        ];
    }
}