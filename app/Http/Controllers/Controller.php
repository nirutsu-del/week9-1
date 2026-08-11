<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

abstract class Controller
{
    public function insert(Request $request)
{
    // ตรวจสอบและกำหนด Validation Rules
    $request->validate([
        'serial_number' => 'required|string|max:50',
        'email'         => 'required|email',
        'description'   => 'required|string|min:10',
        'urgency'       => 'required|in:low,medium,high',
    ], [
        // กำหนดข้อความแจ้งเตือนภาษาไทย (Custom Messages)
        'serial_number.required' => 'กรุณากรอกรหัสสินค้า (Serial Number)',
        'email.required'         => 'กรุณากรอกอีเมลผู้ติดต่อ',
        'email.email'            => 'รูปแบบอีเมลไม่ถูกต้อง',
        'description.required'   => 'กรุณาระบุอาการชำรุด',
        'description.min'        => 'รายละเอียดอาการชำรุดต้องมีความยาวอย่างน้อย 10 ตัวอักษร',
        'urgency.required'       => 'กรุณาเลือกระดับความเร่งด่วน',
    ]);
    

}
}
