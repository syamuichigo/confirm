<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
use App\Models\Categories;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }
    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'category_id', 'datail']);
        $tel = $request->only(['tel1', 'tel2', 'tel3']);
        return view('confirm', compact('contact', 'tel'));
    }
    public function back()
    {
        return redirect('index');
    }
    public function store(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'category_id', 'datail']);
        Contacts::create($contact);
        return redirect('thanks');
    }
    public function thanks()
    {
        return view('thanks');
    }
    public function admin()
    {
        $contents = [];
        $categories = Categories::all();
        return view('admin', compact('contents', 'categories'));
    }
    public function search(Request $request)
    {
        $contents = Contacts::all()->genderSearch($request->gender)->CategorySearch($request->category_id)->dateSearch($request->date)->KeywordSearch($request->keyword)->get();
        $categories = Categories::all();

        return view('admin', compact('contacts', 'categories'));
    }
    public function modal()
    {
        return view('modal');
    }
}
