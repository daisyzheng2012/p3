<?php
namespace P3\Http\Controllers;

use P3\Http\Controllers\Controller;
use P3\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use \LoremGenerator;

class LoremController extends Controller {

    /**
    * main page of p3
    */
    public function getLorem() {
        return view('lorem.index');
    }

    public function postLorem(Request $request) {
        // do the validation ---
        $rules    = array('num_paragraphs' => 'required|numeric|min:1|max:100');
        $validator = Validator::make(Input::all(), $rules);

        // check if the validator failed ---
        if ($validator->fails()) {
            $messages = $validator->messages();
            // redirect our user back to the form with the errors
            return Redirect::to('lorem')
            ->withInput()
            ->withErrors($validator);
        }

        // validation passes ---
        $data = $request->all();
        $num_paragraphs = $data['num_paragraphs'];
        $generator = new LoremGenerator();
        $paragraphs = $generator->getParagraphs($num_paragraphs);
        $input = $request->all();
        return view('lorem.index', ['lorem_paragraphs' => $paragraphs, 'input' => $input]);

    }
}

?>
