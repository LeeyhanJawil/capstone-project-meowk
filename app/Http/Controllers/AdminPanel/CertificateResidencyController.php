<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;

//Models

use App\Models\Certificate_Residency;
use Illuminate\Http\Request;
use PDF;


class CertificateResidencyController extends Controller
{
    public function index()
    {
        if (!session()->has("user")) {
            return redirect("login");
        }

        $certificate_residencies = Certificate_Residency::get();



    return view('pages.AdminPanel.certificate_residency', compact('certificate_residencies'));
    }

    public function store(Request $request){
        $certificate_residencies = new Certificate_Residency();
        $certificate_residencies->name = $request->input('name');
        $certificate_residencies->residency_status = $request->input('residency_status');
        $certificate_residencies->barangay = $request->input('barangay');
        $certificate_residencies->date = $request->input('date');
        $certificate_residencies->purok_number = $request->input('purok_number');
        $certificate_residencies->punongbarangay = $request->input('punongbarangay');
        $certificate_residencies->hon_1 = $request->input('hon_1');
        $certificate_residencies->hon_2 = $request->input('hon_2');
        $certificate_residencies->hon_3 = $request->input('hon_3');
        $certificate_residencies->hon_4 = $request->input('hon_4');
        $certificate_residencies->hon_5 = $request->input('hon_4');
        $certificate_residencies->hon_6 = $request->input('hon_6');
        $certificate_residencies->hon_7 = $request->input('hon_7');
        $certificate_residencies->sk_chairman = $request->input('sk_chairman');
        $certificate_residencies->secretary = $request->input('secretary');
        $certificate_residencies->treasurer = $request->input('treasurer');
        $certificate_residencies->amount_paid = $request->input('amount_paid');
        $certificate_residencies->or_number = $request->input('or_number');
        $certificate_residencies->date_paid = $request->input('date_paid');


        $certificate_residencies->save();


        return redirect()->back()->with('status', 'New Record Added Successfully!');
    }

    public function destroy($id){
        $certificate_residencies = Certificate_Residency::find($id);
        $certificate_residencies->delete();
        return redirect()->back()->with('status', 'Record Deleted Successfully!');
   }

   public function edit(Request $request, $id){

    $certificate_residencies = Certificate_Residency::find($id);

    return view('pages.AdminPanel.edit_certificate_residencies', compact('certificate_residencies'));
   }

   public function update(Request $request, $id){
    $certificate_residencies = Certificate_Residency::find($id);
    $certificate_residencies->name = $request->input('name');
    $certificate_residencies->residency_status = $request->input('residency_status');
    $certificate_residencies->barangay = $request->input('barangay');
    $certificate_residencies->date = $request->input('date');
    $certificate_residencies->purok_number = $request->input('purok_number');
    $certificate_residencies->punongbarangay = $request->input('punongbarangay');
    $certificate_residencies->hon_1 = $request->input('hon_1');
    $certificate_residencies->hon_2 = $request->input('hon_2');
    $certificate_residencies->hon_3 = $request->input('hon_3');
    $certificate_residencies->hon_4 = $request->input('hon_4');
    $certificate_residencies->hon_5 = $request->input('hon_4');
    $certificate_residencies->hon_6 = $request->input('hon_6');
    $certificate_residencies->hon_7 = $request->input('hon_7');
    $certificate_residencies->sk_chairman = $request->input('sk_chairman');
    $certificate_residencies->secretary = $request->input('secretary');
    $certificate_residencies->treasurer = $request->input('treasurer');
    $certificate_residencies->amount_paid = $request->input('amount_paid');
    $certificate_residencies->or_number = $request->input('or_number');
    $certificate_residencies->date_paid = $request->input('date_paid');
    $certificate_residencies->update();
    return redirect("certificate_residency")->with('status', 'Record Updated Successfully!');

 }

    public function downloadFile($id){
         $certificate_residencies = Certificate_Residency::find($id);
        //  dd($certificate_residencies);
         $pdf = PDF::loadView('pdf.certificate_residencies',[
        'certificate_residencies' => $certificate_residencies
          ]);
        return $pdf->download("Certificate of Residency.pdf");
    }
    

}
