<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  
use App\Types\Response; 

class FormsController extends Controller
{
    public function subscribe(Request $request)
    {
        $response = new Response();
        if($request->input("email") == "" || $request->input("email") == null){
            $response->setSuccess(false);
            $response->setMessage("Email is required");
            echo json_encode($response->toMap());
            return;
        }
        try {
            $db_response = DB::insert('insert into subscribers (email) values (?)', [$request->input("email")]);
        
            if($db_response == 1){
                $response->setSuccess(true);
                $response->setMessage("Thank you for joining our mail list.");

                echo json_encode($response->toMap());
                return;
            }
            $response->setSuccess(false);
            $response->setMessage("Sorry, something wrong just happend. Please try again!");

            echo json_encode($response->toMap());
            return;
        } catch (Exception $ex) {
            if($ex->errorInfo[1] = 1062){
                $response->setSuccess(false);
                $response->setMessage("Your email is already subscribed.");
                echo json_encode($response->toMap());
                return;
            }
            $response->setSuccess(false);
            $response->setMessage("Sorry, something wrong just happend.");
            echo json_encode($response->toMap());
            return;
        }
    }

    public function join(Request $request)
    {
        $response = new Response();
        $name = $request->input("name");
        $email = $request->input("email");
        $phone = $request->input("phone");
        $region = $request->input("region");
        $city = $request->input("city");
        $address = $request->input("address");

        if($email == "" || $email == null){
            $response->setSuccess(false);
            $response->setMessage("Email is required");
            echo json_encode($response->toMap());
            return;
        }elseif($phone == "" || $phone == null){
            $response->setSuccess(false);
            $response->setMessage("Phone is required");
            echo json_encode($response->toMap());
            return;
        }
        elseif($name == "" || $name == null){
            $response->setSuccess(false);
            $response->setMessage("Name is required");
            echo json_encode($response->toMap());
            return;
        }elseif($region == "" || $region == null){
            $response->setSuccess(false);
            $response->setMessage("Region is required");
            echo json_encode($response->toMap());
            return;
        }elseif($city == "" || $city == null){
            $response->setSuccess(false);
            $response->setMessage("City is required");
            echo json_encode($response->toMap());
            return;
        }elseif($address == "" || $address == null){
            $response->setSuccess(false);
            $response->setMessage("Address is required");
            echo json_encode($response->toMap());
            return;
        }


        try {
            $db_response = DB::insert('insert into members (name,email,phone,region,city,address) values (?, ?, ?, ?, ?, ?)', [$name,$email,$phone,$region,$city,$address]);
        
            if($db_response == 1){
                $response->setSuccess(true);
                $response->setMessage("Thank you for joining us today. We would contact you shortly.");

                echo json_encode($response->toMap());
                return;
            }
            $response->setSuccess(false);
            $response->setMessage("Sorry, something wrong just happend. Please try again!");

            echo json_encode($response->toMap());
            return;
        } catch (Exception $ex) {
            if($ex->errorInfo[1] = 1062){
                $response->setSuccess(false);
                $response->setMessage("Your email or Phone is already used by another user.");
                echo json_encode($response->toMap());
                return;
            }
            $response->setSuccess(false);
            $response->setMessage("Sorry, something wrong just happend.");
            echo json_encode($response->toMap());
            return;
        }
    }

    public function contact(Request $request)
    {
        $response = new Response();
        if($request->input("name") == "" || $request->input("name") == null){
            $response->setSuccess(false);
            $response->setMessage("Name is required");
            echo json_encode($response->toMap());
            return;
        }elseif($request->input("email") == "" || $request->input("email") == null){
            $response->setSuccess(false);
            $response->setMessage("Email is required");
            echo json_encode($response->toMap());
            return;
        }elseif($request->input("phone") == "" || $request->input("phone") == null){
            $response->setSuccess(false);
            $response->setMessage("Phone is required");
            echo json_encode($response->toMap());
            return;
        }elseif($request->input("message") == "" || $request->input("message") == null){
            $response->setSuccess(false);
            $response->setMessage("Please enter a message");
            echo json_encode($response->toMap());
            return;
        }


        try {
            $db_response = DB::insert(
                'insert into messages (name, email, phone, message) values (?,?,?,?)',
             [$request->input("name"), $request->input("email"), $request->input("phone"), $request->input("message")]
            );
        
            if($db_response == 1){
                $response->setSuccess(true);
                $response->setMessage("Thank you for contacting us");

                echo json_encode($response->toMap());
                return;
            }
            $response->setSuccess(false);
            $response->setMessage("Sorry, something wrong just happend. Please try again!");

            echo json_encode($response->toMap());
            return;
            
        } catch (Exception $ex) {
            $response->setSuccess(false);
            $response->setMessage("Sorry, something wrong just happend. Please try again!");
            echo json_encode($response->toMap());
            return;
        }
    }
}
