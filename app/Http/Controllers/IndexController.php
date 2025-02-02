<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * front of site
     */
    public function siteIndex()
    {
        return view('site');
    }

    /**
     * Upload of Image  
     * @param FILES
     * @return images (compression)
     */
    public function upload(Request $request)
    {
        if($request->has('file'))
        {
            $json_data =[
                'status'=>'error',
                'message' => 'Technical error'
            ];

            $file = $request->file;
            $sizeInBytes = $file->getSize(); // Get size in bytes
            $sizeInKB = $sizeInBytes / 1024; // Convert to KB
            $imageDimensions = getimagesize($file->getRealPath());
            $width = $imageDimensions[0]; // Width of the image
            $height = $imageDimensions[1]; // Height of the image

            // Check if the file is less than 1MB (1024KB)
            if ($sizeInKB < 1024) {
                $data = ignitedCompressAndResizeImage($file, 900, 99);
                $json_data['data'] = $data;
                if($data['status'])
                {
                    $json_data['status'] = 'success';
                }
                else{
                    $json_data['message'] = $data['message'];
                }
            }
            else{
                $json_data['status'] = 'success';
                $data = ignitedCompressAndResizeImage($file, 900, 99);
                $json_data['data'] = $data;
                if($data['status'])
                {
                    $json_data['status'] = 'success';
                }
                else{
                    $json_data['message'] = $data['message'];
                }
            }

            return response()->json($json_data);
        }
    }
}
