<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Slider;
use App\Models\Quotation;
use App\Models\QuotationItem;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Mail\QuotationEmail;
use App\Mail\ContactEmailEmail;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Page;
use Mail;
use DB;
use Session;
use PDF;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        $about_us = Page::where('page_tag','about-us')->first();
        return view('front/index',compact('sliders','about_us'));
    }

    public function load_slider(){
        $sliders = Slider::all();
        $html =  view('front/get_sliders',compact('sliders'));
        return response($html);
    }

    public function about_us(){
        $about_us = Page::where('page_tag','about-us')->first();
        return view('front/about_us',compact('about_us'));
    }

    public function ports(){
        $chittagong_port = Page::where('page_tag','chittagong-port')->first();
        $mongla_port = Page::where('page_tag','mongla-port')->first();
        $payra_port = Page::where('page_tag','payra-port')->first();

        return view('front/ports',compact('chittagong_port','mongla_port','payra_port'));
    }

    public function product_list(){
        $category_list = Category::all();
        return view('front/products',compact('category_list'));
    }

    public function product_details($slug){
        $product_info = Product::where('slug',$slug)->first();
        return view('front/product_details',compact('product_info'));
    }

    public function product_quotation(){
        $all_product = Product::select('id','name')->get();
        return view('front/product_quotation',compact('all_product'));
    }

    public function contact(){
        return view('front/contact');
    }

    public function page($page_tag){
        $page_info = Page::where('page_tag',$page_tag)->first();
//        dd($page_info);
        return view('front/page',compact('page_info'));
    }

    public function quotation_request(Request $request){
        DB::beginTransaction();
        try {
              $data = $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'address' => 'required',
                'email' => 'required|email',
                'country_id' => 'required',
                'city' => 'required',
                'postcode' => 'required',
                'phone' => 'required',
                'description' => 'required',
              ]);

              $data['quotation_no'] = 'QT-'.rand('10000','99999');

              $quotation = Quotation::create($data);

              $product_id = $request->product_id;
              $product_qty = $request->product_qty;

              foreach ($product_id as $key => $value){
                  $quotation_item = New QuotationItem;
                  $quotation_item->quotation_id = $quotation->id;
                  $quotation_item->product_id = $value;
                  $quotation_item->product_qty = $product_qty[$key];
                  $quotation_item->save();
              }

              DB::commit();
//              Mail::to('info@workpermitcloud.co.uk')->send(new QuotationEmail($data));
            $quotation_info = Quotation::find($quotation->id);

            $pdf = PDF::loadView('front.email.quotation_email', compact('quotation_info'));
//            return $pdf->stream('document.pdf');

            Mail::send('front.email.quotation_email_body', $data, function($message)use($data, $pdf) {
                $message->to('emran.chowdhury@alliancethree.com', 'emran.chowdhury@alliancethree.com')
                        ->subject('Quotation Query')
                        ->attachData($pdf->output(), "quotation.pdf");
                });
              return response(['status' => 'success', 'msg' => 'Quotation Submit Successfully']);
        } catch (\Exception $e) {
            dd($e);
              DB::rollback();
              return response(['status' => 'error', 'msg' => 'Internal Server Error. Please Try Again', 'data' => $e]);
        }

    }

    public function pdf(){
        $quotation_info = Quotation::find(1);
//        return view('front.pdf',compact('quotation_info'));

        $pdf = PDF::loadView('front.pdf', compact('quotation_info'));
        return $pdf->stream('document.pdf');
    }

    public function get_category_wise_product(Request $request){
        $product_list = Product::where('main_category',$request->category_id)->get();
        $html =  view('front/get_category_wise_product',compact('product_list'));
        return response($html);
    }


    public function contact_details(Request $request){

        $contact = New Contact;

        $data = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        if ($contact->save()) {
           Mail::to('emran.chowdhury@alliancethree.com')->send(new ContactEmail($data));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
