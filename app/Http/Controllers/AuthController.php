<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Trả về view SignIn
    public function signIn()
    {
        return view('auth.signin');
    }

    // Kiểm tra dữ liệu form
    public function checkSignIn(Request $request)
    {
        $data = $request->all();

        // Dữ liệu sinh viên mẫu
        $student = [
            'username' => 'AnNK',
            'password' => 'an123',
            'mssv' => '4005867',
            'lopmonhoc' => '67PM1',
            'gioitinh' => 'nam'
        ];

        if (
            $data['password'] !== $data['repass']
        ) {
            return "Đăng ký thất bại";
        }

        if (
            $data['username'] === $student['username'] &&
            $data['password'] === $student['password'] &&
            $data['mssv'] === $student['mssv'] &&
            $data['lopmonhoc'] === $student['lopmonhoc'] &&
            $data['gioitinh'] === $student['gioitinh']
        ) {
            return "Đăng ký thành công!";
        }

        return "Đăng ký thất bại";
    }
}
