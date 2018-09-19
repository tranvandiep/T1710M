<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class StudentController extends Controller {
	public function showStudent(Request $request) {
		# code...
		$students = DB::table('student')
			->orderBy('id', 'desc')
			->get();

		return view('student')->with([
				'students' => $students
			]);
	}

	public function addStudent(Request $request) {
		// var_dump($request->all());
		$today = date('Y-m-d H:i:s');
		DB::table('student')->insert([
				'roll_no'    => $request->roll_no,
				'fullname'   => $request->fullname,
				'old'        => $request->old,
				'email'      => $request->email,
				'address'    => $request->address,
				'gender'     => $request->gender,
				'created_at' => $today,
				'updated_at' => $today
			]);

		return redirect('students');
	}
}
