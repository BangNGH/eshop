<?php

namespace App\Helpers;

class Helper
{
    public static function cities($cities)
    {
        $html = "";
        foreach ($cities as $key => $city) {
            $html .= '
            <tr>
                <td>' . $city->id . '</td>
                <td>' . $city->name . '</td>
                <td>
                    <img alt="Không tìm thấy ảnh" style="width: 500px; height: 300px;"
                        src="/eshop/public/uploads/cities/' . $city->id . '/'. $city->image_path . '">
                </td>
                <td>
                <a href="/eshop/public/admin/cities/edit/' . $city->id . '">Sửa</a> |
                <a class="text-danger" href="#" onclick="removeRow('.$city->id.', \'cities/destroy\')">Xóa</a>
                 </td>
        </tr>
            ';
        }
        return $html;
    }
}