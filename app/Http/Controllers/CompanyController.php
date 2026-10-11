<?php
namespace App\Http\Controllers;
use Illuminate\View\View;
class CompanyController extends Controller {
    public function home(): View { return view('company.home'); }
    public function about(): View { return view('company.about'); }
    public function services(): View { return view('company.services'); }
    public function contact(): View { return view('company.contact'); }
}
