<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class HomeController extends Controller
{

  public function index(Request $request){
    //  $products=Product::all();
    $id=1;
    //  $products =Product::find($id);
    $products=Product:: where('id','>',1)->get();
    //  dd($products);
    return $products;
  }
  // public function show(){
    
 
  // return view ('home');
    
  // }
  public function insertOperation() {
    // DB::table('products')->insert([
    //   'id'=>7,
    //   'name'=>'kabul',
    //   'price'=>400,
    //   'quantity'=>6
    //  ]

    //  );
    //  return "insert successfully";
    // DB::insert('insert into products (id, name, price, quantity) values (?, ?, ?, ?)', [6, 'abul', 400, 6]);
    DB::insert('insert into products (id, name, price, quantity) values(?, ?, ?, ?)',[8,'kabul',599,45]);

    return "insert successfully";
  }
  public function readOperation(){
    // db table query:
    // $product= DB::table('products')->select('id', 'name', 'price', 'quantity')->where('id','=',2)->get();
    // direct query: 
    $product= DB::select('select * from products where id =6');
    return $product;
  }
}

