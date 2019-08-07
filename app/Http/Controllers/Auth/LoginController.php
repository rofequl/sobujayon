<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Config;
class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = '/home';



    public function showAdminLoginForm()
    {
        return view('admin.login');
    }

    public function adminLogin(Request $request)
    {

        $messages = [
            "username.required" => "Username is required",
            "password.required" => "Password is required",
            "password.min" => "Password must be at least 6 characters"
        ];

        $this->validate($request, [
            'username'   => 'required',
            'password' => 'required|min:6'
        ],$messages);

        if (Auth::guard('admin')->attempt(['name' => $request->username, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/admin');
        }

        return back()->withInput($request->only('username', 'remember'))->withErrors([
            'message' => 'Wrong information or this account not login.',
        ]);
    }

    public function showUserLoginForm()
    {
        return view('frontend.login');
    }

    public function userLogin(Request $request)
    {
        $messages = [
            "phone.required" => "Please enter your phone number",
            "password.required" => "Please enter your password",
            "password.min" => "Password must be at least 6 characters"
        ];

        $this->validate($request, [
            'phone'   => 'required',
            'password' => 'required|min:6'
        ],$messages);

        if (Auth::guard('user')->attempt(['phone' => $request->phone, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/');
        }
        return back()->withInput($request->only('phone', 'remember'))->withErrors([
            'message' => 'Wrong information or this account not login.',
        ]);
    }



    public function showNurseryLoginForm()
    {
        return view('nursery.login');
    }

    public function nurseryLogin(Request $request)
    {
        $messages = [
            "username.required" => "Please enter your Username",
            "password.required" => "Please enter your password",
            "password.min" => "Password must be at least 6 characters"
        ];

        $this->validate($request, [
            'username'   => 'required',
            'password' => 'required|min:6'
        ],$messages);

        if (Auth::guard('nursery')->attempt(['name' => $request->username, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/nursery');
        }
        return back()->withInput($request->only('username', 'remember'))->withErrors([
            'message' => 'Wrong information or this account not login.',
        ]);
    }

    protected function validator(Request $request)
    {
        return $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
    }

    protected function guardLogin(Request $request, $guard)
    {
        $this->validator($request);
        return Auth::guard($guard)->attempt(
            [
                'email' => $request->email,
                'password' => $request->password
            ],
            $request->get('remember')
        );
    }

    public function logout(Request $request)
    {
        auth($request->type)->logout();
        if ($request->type == 'admin'){
            return redirect('admin');
        }elseif ($request->type == 'user'){
            return redirect('/');
        }else{
            return redirect('/');
        }
    }
}
