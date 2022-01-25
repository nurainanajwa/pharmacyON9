<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use App\Models\Pharmacist;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;



class pharmacyON9 extends Controller
{
    public function cus_login() 
    {
        return view ("auth.cus_login");
    }

    public function cus_register() 
    {
        return view("auth.cus_register");
    }

    public function registerCustomer(Request $request)
    {
       $request->validate([
           'name'=>'required',
           'email'=>'required|email|unique:customers',
           'username' => 'required',
           'password'=>'required|min:5|max:12',
           'phoneNo' => 'required',
           'address' => 'required'

       ]); 
       $customer = new Customer();
       $customer->name = $request->name;
       $customer->email = $request->email;
       $customer->username = $request->username;
       $customer->password = Hash::make($request->password);
       $customer->phoneNo = $request->phoneNo;
       $customer->address = $request->address;
       $res = $customer->save();
       if($res) {
           return back()->with('success', 'You have successfully registered.');
       }else {
            return back()->with('fail', 'Something wrong.');
       }
    }

    public function loginCustomer(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);
        $customer = Customer::where('email', '=', $request->email)->first();
        if($customer) {
            if(Hash::check($request->password,$customer->password)) {
                $request->session()->put('loginId',$customer->id);
                return redirect('cus_shop');
            } else {
                return back()->with('fail', 'Password not match.');
            }
        } else {
            return back()->with('fail', 'This email is not registered.');
        }
    }

    public function cus_profile() 
    {
        $data = array();
        if(Session::has('loginId')) {
            $data = Customer::where('id', '=', Session::get('loginId'))->first();
        }
        return view('cus_profile', compact('data'));
    }


    public function home() 
    {
        return view ("home");
    }


    public function logout() 
    {
        if(Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('home');
        }
    }
    //New
    
    public function cus_cart() 
    {
        $cart = Cart::all();
        return view ("cus_cart", compact('cart')); 
    }

    public function addtocart(Request $request, $id) 
    {

        $product = Product::find($id);
        $cart = new cart;

        $cart->product_name=$product->name;
        $cart->price=$product->price;
        $cart->quantity=$request->quantity;

        $cart->save();
        return redirect()->back()->with('success', 'You have successfully add the product to the cart.');  
    }

    public function deleteCart($id)
    {
        $cart = Cart::find($id);

        $cart->delete();
        return redirect()->back()->with('success', 'You have successfully delete the product.');
    }

    public function cus_checkout() 
    {
        $cart = Cart::all();
        return view ("cus_checkout", compact('cart'));
    }

    public function addOrder(Request $request) 
    {
        $order = new Order;
        $order->cus_name = $request->cus_name;
        $order->address = $request->address;
        $order->zip_code = $request->zip_code;
        $order->city = $request->city;
        $order->state = $request->state;
        $order->phoneNo = $request->phoneNo;
  

        $order->save();
        return redirect()->back()->with('success', 'You have successfully place the order.');
    }

    public function cus_history() 
    {
        $cart = Cart::all();
        $order = Order::all();
        return view ("cus_history", compact('order', 'cart'));
    }

    public function cus_order() 
    {
        $cart = Cart::all();
        return view ("cus_order", compact('cart'));
    }

    public function cus_product_details($id) 
    {
        // $products = Product::all();
        // return view ("cus_product_details", compact('products'));
        
        $item = array();
        if(Product::where('id', $id)->exists())
        {
            $products = Product::where('id', $id)->first();
            return view('cus_product_details', compact('products'));
        }
 
    }

    public function cus_shop() 
    {
        $products = Product::all();
        return view ('cus_shop', compact('products'));
    }
}
