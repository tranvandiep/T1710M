<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller {
	public function showAbc(Request $request) {
		// echo "123";
		return view('test');
	}

	public function showTitle(Request $request, $title) {
		# code...
		echo $title;
	}

	public function showStudent(Request $request) {
		# code...
		$students = [];
		for ($i = 0; $i < 10; $i++) {
			$students[] = [
				'name'    => "A - ".$i,
				'address' => 'ADR-'.$i,
				'old'     => $i
			];
		}

		return view('student')->with([
				'students' => $students
			]);
	}
}
