<?php

namespace App\Http\Service;

use App\Models\Cities;

class CityService
{
    public function getAll()
    {
        return Cities::orderByDesc("id")->paginate(10);
    }
    public function update($city, $request)
    {
        try {
            // Kiểm tra xem người dùng có tải lên hình ảnh mới không
            if ($request->hasFile('image_path')) {
                // Di chuyển hình ảnh mới vào thư mục lưu trữ
                $imagePath = 'uploads/cities/';
                $request->image_path->move($imagePath, $request->image_path->getClientOriginalName());
                
                // Cập nhật trường image_path trong cơ sở dữ liệu
                $city->update([
                    'image_path' => (string)$request->image_path->getClientOriginalName()
                ]);
            }
    
            // Cập nhật các trường khác nếu cần thiết
            $city->update($request->except('image_path'));
            
            session()->flash('success', 'Cập nhật thành phố thành công');
        } catch (\Throwable $th) {
            session()->flash('error', $th->getMessage());
            return false;
        }
        return true;
    }
        
    public function destroy($request)
    {
        $foundCity = Cities::find($request->id);
        if ($foundCity) {
            $foundCity->delete();
            return true;
        }
        return false;
    }
    public function create($request)
{
    try {
        // Tạo thành phố mới và lưu vào cơ sở dữ liệu
        $city = Cities::create([
            'name' => (string) $request->input('name'),
            'image_path' => (string)$request->image_path->getClientOriginalName()
        ]);
        $cityId = $city->id;
        $imagePath = 'uploads/cities/' . $cityId; 
        $request->image_path->move($imagePath, $request->image_path->getClientOriginalName());
        session()->flash('success', 'Thêm thành phố thành công');
    } catch (\Throwable $th) {
        session()->flash('error', $th->getMessage());
        return false;
    }
    return true;
}

}
