<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function postSignUp(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'first_name' => 'required|max:120',
            'password' => 'required|min:4'
        ]);
        $email = $request['email'];
        $first_name = $request['first_name'];
        $password = bcrypt($request['password']);
        $user = new User();
        $user->email = $email;
        $user->first_name = $first_name;
        $user->password = $password;
        $user->save();
        Auth::login($user);
        return redirect()->route('dashboard');
    }
    public function postSignIn(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect()->route('dashboard');
        }
        return redirect()->back();
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
    public function getAccount()
    {
        return view('account', ['user' => Auth::user()]);
    }
    public function postSaveAccount(request $request)
    {
        //validation
        $this->validate($request, [
           'first_name' => 'required|max:120'
        ]);
        $user = Auth::user();
        //what is entered in the form
        $user->first_name = $request['first_name'];
        $user->update();
        $file = $request->file('image');

        if($request->hasFile('image')){
            $ext = $file->guessClientExtension();
            //creating a unique file name using the user's ID and name
            $filename = $user->first_name. '-' . $user->id .'.jpg';
            //storing the file in the local disk in the public folder
            $request->image->storeAs('public', $filename);
        }
        return redirect()->route('account');
    }
    public function getUserImage($filename)
    {
        $file = Storage::get($filename);
        //shows the image, does not redirect to another page
        //return response()->file($filename);
        //return Storage::disk('local')->exists($filename);
        return $file;
    }
}