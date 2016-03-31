<?php
namespace P3\Http\Controllers;

use P3\Http\Controllers\Controller;
use P3\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Faker\Factory as FakerFactory;
use \Debugbar;

class RandomController extends Controller {

    /**
    * main page of p3
    */
    public function getRandomUser() {
        return view('random.index');
    }

    public function postRandomUser(Request $request) {
        // do the validation ---
        $rules    = array('number_of_rusers' => 'required|numeric|min:1|max:100');
        $validator = Validator::make(Input::all(), $rules);

        // check if the validator failed ---
        if ($validator->fails()) {
            $messages = $validator->messages();
            // redirect our user back to the form with the errors
            return Redirect::to('randomuser')
                ->withInput()
                ->withErrors($validator);
        }
        // grab the $request object which contains all the form data
        $data = $request->all();
        // dd($request->all());
        
        $number_of_rusers = $data['number_of_rusers'];
        if (isset($data['add_birthdate'])) {
            $add_birthdate    = $data['add_birthdate'];
        }
        if (isset($data['add_location'])) {
            $add_location     = $data['add_location'];
        }
        if (isset($data['add_profile'])) {
            $add_profile      = $data['add_profile'];
        }

        //use the factory to create a Faker instance
        $faker = FakerFactory::create();

        $random_users = array();
        // generate data by accessing properties
        for($i=0; $i < $number_of_rusers; $i++) {
            $full_name = $faker->name;
            $random_user = array();
            $random_user['full_name'] = $full_name;
            if (isset($add_birthdate)) {
                $birthdate = $faker->dayOfMonth().' '.$faker->monthName().' '.$faker->year($max = '1996');
                $random_user['birthdate'] = $birthdate;
            }
            if (isset($add_location)) {
                $address = $faker->address;
                $random_user['address'] = $address;
            }
            if (isset($add_profile)) {
                $profile   = "Email: ".$faker->email.'
                        '."Phone: ".$faker->phoneNumber.'
                        '."Company: ".$faker->company;
                $random_user['profile'] = $profile;
            }
            array_push($random_users, $random_user);
        }
        // dd($random_users);

        $input = $request->all();
        return view('random.index', ['random_users' => $random_users, 'input' => $input]);

    }
}

?>
