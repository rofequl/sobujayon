<?php
namespace App\Http\Controllers\Auth;
use App\nursery;
use App\user;
use App\admin;
use App\nursary;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Auth;
class RegisterController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:user');
        $this->middleware('guest:nursary');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    public function showAdminRegisterForm()
    {
        return view('admin.register');
    }

    protected function createAdmin(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6',
        ]);
        $admin = admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::guard('admin')->login($admin);

        return redirect()->intended('/admin');
    }

    public function showUserRegisterForm()
    {
        return view('frontend.register');
    }

    protected function createUser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:191',
            'username' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users',
            'phone' => 'required|string|max:191|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = user::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        Auth::guard('user')->login($user);

        return redirect()->intended('/');
    }

    public function showNurseryForm()
    {
        return view('nursery.register');
    }

    protected function createNursery(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:nurseries',
            'password' => 'required|string|min:6',
        ]);
        $admin = nursery::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //Auth::guard('nursery')->login($admin);

        return redirect('admin-nursery')->with('message','Nursery user add successfully');
    }

    protected function create(array $data)
    {
        return user::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

}
