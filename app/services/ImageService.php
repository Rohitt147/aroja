<?php

namespace App\Services;
use Illuminate\Support\Facades\Storage;

class ImageService{
    public function imageUploadServices($request, $image_for) {
    try {
        if ($request->hasFile($image_for)) {
            $avatar = $request->file($image_for);
            $avatarName = $image_for . '-' . time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('/images/'.$image_for.'/');
            $avatar->move($avatarPath, $avatarName);                
            return '/images/'.$image_for.'/' . $avatarName;
        } else {
            return null;
        }
    } catch (\Exception $error) {
        return null; // or handle error logging
    }
}


    // FOR S3 UPLOAD
    
    // public function imageUploadS3($request, $image_for) {
    //     try {
    //         if ($request->hasFile($image_for) && $request->file($image_for)) {
    //             $avatar = $request->file($image_for);
    //             $avatarName = $image_for . '-' . time() . '.' . $avatar->getClientOriginalExtension();
    //             $filePath = 'images/' . $image_for . '/' . $avatarName;
                
    //             // Upload to S3
    //             $upload = Storage::disk('s3')->put($filePath, file_get_contents($avatar), 'public');
                
    //             if ($upload) {
    //                 return Storage::disk('s3')->url($filePath);
    //             }
    //             return false;
    //         }
    //         return false;
    //     } catch (\Exception $error) {
    //         return $error->getMessage();
    //     }
    // }
}