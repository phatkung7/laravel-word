<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\TemplateProcessorService;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createdocument');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, TemplateProcessorService $templateProcessor)
    {
        $templatePath = public_path('templates/template.docx');

        // Sample dynamic data
        $dataArray = [
            ['name' => 'John Doe', 'score' => '85'],
            ['name' => 'Jane Smith', 'score' => '92'],
            ['name' => 'Jane Wegan', 'score' => '98'],
            ['name' => 'Pat Wegan', 'score' => '100'],
            ['name' => 'Pat Smog', 'score' => '97'],
            ['name' => 'Pong Smog', 'score' => '90'],
            ['name' => 'John Doe', 'score' => '85'],
            ['name' => 'Jane Smith', 'score' => '92'],
            ['name' => 'Jane Wegan', 'score' => '98'],
            ['name' => 'Pat Wegan', 'score' => '100'],
            ['name' => 'Pat Smog', 'score' => '97'],
            ['name' => 'Pong Smog', 'score' => '90'],
            ['name' => 'John Doe', 'score' => '85'],
            ['name' => 'Jane Smith', 'score' => '92'],
            ['name' => 'Jane Wegan', 'score' => '98'],
            ['name' => 'Pat Wegan', 'score' => '100'],
            ['name' => 'Pat Smog', 'score' => '97'],
            ['name' => 'Pong Smog', 'score' => '90'],
            ['name' => 'John Doe', 'score' => '85'],
            ['name' => 'Jane Smith', 'score' => '92'],
            ['name' => 'Jane Wegan', 'score' => '98'],
            ['name' => 'Pat Wegan', 'score' => '100'],
            ['name' => 'Pat Smog', 'score' => '97'],
            ['name' => 'Pong Smog', 'score' => '90'],
            ['name' => 'John Doe', 'score' => '85'],
            ['name' => 'Jane Smith', 'score' => '92'],
            ['name' => 'Jane Wegan', 'score' => '98'],
            ['name' => 'Pat Wegan', 'score' => '100'],
            ['name' => 'Pat Smog', 'score' => '97'],
            ['name' => 'Pong Smog', 'score' => '90'],
            ['name' => 'John Doe', 'score' => '85'],
            ['name' => 'Jane Smith', 'score' => '92'],
            ['name' => 'Jane Wegan', 'score' => '98'],
            ['name' => 'Pat Wegan', 'score' => '100'],
            ['name' => 'Pat Smog', 'score' => '97'],
            ['name' => 'Pong Smog', 'score' => '90'],
            ['name' => 'John Doe', 'score' => '85'],
            ['name' => 'Jane Smith', 'score' => '92'],
            ['name' => 'Jane Wegan', 'score' => '98'],
            ['name' => 'Pat Wegan', 'score' => '100'],
            ['name' => 'Pat Smog', 'score' => '97'],
            ['name' => 'Pong Smog', 'score' => '90'],
            ['name' => 'John Doe', 'score' => '85'],
            ['name' => 'Jane Smith', 'score' => '92'],
            ['name' => 'Jane Wegan', 'score' => '98'],
            ['name' => 'Pat Wegan', 'score' => '100'],
            ['name' => 'Pat Smog', 'score' => '97'],
            ['name' => 'Pong Smog', 'score' => '90'],
            ['name' => 'John Doe', 'score' => '85'],
            ['name' => 'Jane Smith', 'score' => '92'],
            ['name' => 'Jane Wegan', 'score' => '98'],
            ['name' => 'Pat Wegan', 'score' => '100'],
            ['name' => 'Pat Smog', 'score' => '97'],
            ['name' => 'Pong Smog', 'score' => '90'],
            ['name' => 'John Doe', 'score' => '85'],
            ['name' => 'Jane Smith', 'score' => '92'],
            ['name' => 'Jane Wegan', 'score' => '98'],
            ['name' => 'Pat Wegan', 'score' => '100'],
            ['name' => 'Pat Smog', 'score' => '97'],
            ['name' => 'Pong Smog', 'score' => '90'],
            ['name' => 'John Doe', 'score' => '85'],
            ['name' => 'Jane Smith', 'score' => '92'],
            ['name' => 'Jane Wegan', 'score' => '98'],
            ['name' => 'Pat Wegan', 'score' => '100'],
            ['name' => 'Pat Smog', 'score' => '97'],
            ['name' => 'Pong Smog', 'score' => '90'],
            ['name' => 'Pat Smog', 'score' => '97'],
            ['name' => 'Pong Smog', 'score' => '90'],
            ['name' => 'John Doe', 'score' => '85'],
            ['name' => 'Jane Smith', 'score' => '92'],
            ['name' => 'Jane Wegan', 'score' => '98'],
            ['name' => 'Pat Wegan', 'score' => '100'],
            ['name' => 'Pat Smog', 'score' => '97'],
            ['name' => 'Pong Smog', 'score' => '90'],
            ['name' => 'John Doe', 'score' => '85'],
            ['name' => 'Jane Smith', 'score' => '92'],
            ['name' => 'Jane Wegan', 'score' => '98'],
            ['name' => 'Pat Wegan', 'score' => '100'],
            ['name' => 'Pat Smog', 'score' => '97'],
            ['name' => 'Pong Smog', 'score' => '90'],
            ['name' => 'John Doe', 'score' => '85'],
            ['name' => 'Jane Smith', 'score' => '92'],
            ['name' => 'Jane Wegan', 'score' => '98'],
            ['name' => 'Pat Wegan', 'score' => '100'],
            ['name' => 'Pat Smog', 'score' => '97'],
            ['name' => 'Pong Smog', 'score' => '90'],
            ['name' => 'John Doe', 'score' => '85'],
            ['name' => 'Jane Smith', 'score' => '92'],
            ['name' => 'Jane Wegan', 'score' => '98'],
            ['name' => 'Pat Wegan', 'score' => '100'],
            ['name' => 'Pat Smog', 'score' => '97'],
            ['name' => 'Pong Smog', 'score' => '90'],
            ['name' => 'John Doe', 'score' => '85'],
            ['name' => 'Jane Smith', 'score' => '92'],
            ['name' => 'Jane Wegan', 'score' => '98'],
            ['name' => 'Pat Wegan', 'score' => '100'],
            ['name' => 'Pat Smog', 'score' => '97'],
            ['name' => 'Pong Smog', 'score' => '90'],
            ['name' => 'Pat Smog', 'score' => '97'],
            ['name' => 'Pong Smog', 'score' => '90'],
            ['name' => 'John Doe', 'score' => '85'],
            ['name' => 'Jane Smith', 'score' => '92'],
            ['name' => 'Jane Wegan', 'score' => '98'],
            ['name' => 'Pat Wegan', 'score' => '100'],
            ['name' => 'Pat Smog', 'score' => '97'],
            ['name' => 'Pong Smog', 'score' => '90'],
            ['name' => 'John Doe', 'score' => '85'],
            ['name' => 'Jane Smith', 'score' => '92'],
            ['name' => 'Jane Wegan', 'score' => '98'],
            ['name' => 'Pat Wegan', 'score' => '100'],
            ['name' => 'Pat Smog', 'score' => '97'],
            ['name' => 'Pong Smog', 'score' => '90'],
            ['name' => 'John Doe', 'score' => '85'],
            ['name' => 'Jane Smith', 'score' => '92'],
            ['name' => 'Jane Wegan', 'score' => '98'],
            ['name' => 'Pat Wegan', 'score' => '100'],
            ['name' => 'Pat Smog', 'score' => '97'],
            ['name' => 'Pong Smog', 'score' => '90'],
            ['name' => 'John Doe', 'score' => '85'],
            ['name' => 'Jane Smith', 'score' => '92'],
            ['name' => 'Jane Wegan', 'score' => '98'],
            ['name' => 'Pat Wegan', 'score' => '100'],
            ['name' => 'Pat Smog', 'score' => '97'],
            ['name' => 'Pong Smog', 'score' => '90'],
            ['name' => 'John Doe', 'score' => '85'],
            ['name' => 'Jane Smith', 'score' => '92'],
            ['name' => 'Jane Wegan', 'score' => '98'],
            ['name' => 'Pat Wegan', 'score' => '100'],
            ['name' => 'Pat Smog', 'score' => '97'],
            ['name' => 'Pong Smog', 'score' => '90'],
            // Add more data as needed
        ];

        $my_template = new \PhpOffice\PhpWord\TemplateProcessor($templatePath);

        // Clone and populate rows
        $my_template->cloneRow('name', count($dataArray));
        foreach ($dataArray as $index => $data) {
            $my_template->setValue("name#" . ($index + 1), $data['name']);
            $my_template->setValue("score#" . ($index + 1), $data['score']);
        }

        try{
            $my_template->saveAs(storage_path('user_1.docx'));
        }catch (Exception $e){
            //handle exception
        }
        return response()->download(storage_path('user_1.docx'));
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
