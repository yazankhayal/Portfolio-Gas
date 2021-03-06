<?php

namespace App\Http\Controllers\Dashboard;

use App\ProductsTranslate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ProductsTranslateController extends Controller
{

    function get_data_by_id(Request $request)
    {
        $id = $request->id;
        $language_id = $request->language_id;
        if ($id == null) {
            return response()->json(['error' => __('language.msg.e')]);
        }
        $SubScriptions = ProductsTranslate::
        where('products_id', '=', $id)
            ->where('language_id', '=', $language_id)
            ->first();
        if ($SubScriptions == null) {
            return response()->json(['error' => __('language.msg.e')]);
        }
        return response()->json(['success' => $SubScriptions]);
    }

    public function post_data(Request $request)
    {
        $edit = $request->id;
        $validation = Validator::make($request->all(), $this->rules($edit), $this->languags());
        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()]);
        } else {
            if ($edit != null) {
                $PostTranslate = ProductsTranslate::where('id', '=', Input::get('id'))->first();
                $PostTranslate->name = Input::get('name');
                $PostTranslate->sub_name = Input::get('sub_name');
                $PostTranslate->summary = Input::get('summary');
                $PostTranslate->language_id = Input::get('language_id');
                $PostTranslate->products_id = Input::get('products_id');
                $PostTranslate->update();
                $id_rotue = $PostTranslate->products_id;
                return response()->json(['success' => __('language.msg.m'), 'dashboard' => '1', 'redirect' => route('dashboard_products.index')]);
            } else {
                $check = ProductsTranslate::
                where('products_id', '=', Input::get('products_id'))
                    ->where('language_id', '=', Input::get('language_id'))
                    ->first();
                if ($check != null) {
                    return response()->json(['error' => __('language.msg.already')]);
                }
                $PostTranslate = new ProductsTranslate();
                $PostTranslate->summary = Input::get('summary');
                $PostTranslate->sub_name = Input::get('sub_name');
                $PostTranslate->name = Input::get('name');
                $PostTranslate->language_id = Input::get('language_id');
                $PostTranslate->products_id = Input::get('products_id');
                $PostTranslate->save();
                $id_rotue = $PostTranslate->products_id;
                return response()->json(['success' => __('language.msg.s'), 'dashboard' => '1', 'redirect' => route('dashboard_products.index')]);
            }
        }
    }

    private function rules($edit = null, $pass = null)
    {
        $x = [
            'name' => 'required|min:3|max:191|regex:/^[??-??a-zA-Z0-9]/',
            'sub_name' => 'required|min:3|max:191|regex:/^[??-??a-zA-Z0-9]/',
            'summary' => 'required|string',
            'products_id' => 'required|numeric|min:1',
            'language_id' => 'required|numeric|min:1',
        ];
        if ($edit != null) {
            $x['id'] = 'required|integer|min:1';
        }
        return $x;
    }

    private function languags()
    {
        if (app()->getLocale() == "ar") {
            return [
                'sub_name.max' => '?????? ?????????? ?????????????? ?????????? ?????? ???????????? 191 ??????  .',
                'sub_name.required' => '?????? ?????????? ?????????????? ??????????.',
                'sub_name.regex' => '?????? ?????????? ?????????????? ?????? ???????? .',
                'sub_name.min' => '?????? ?????????? ?????????????? ?????????? ?????? ?????????? 3 ???????? .',
                'paragraph.required' => '?????? ?????????????? ??????????.',
                'name.required' => '?????? ?????????? ??????????.',
                'name.regex' => '?????? ?????????? ?????? ???????? .',
                'name.min' => '?????? ?????????? ?????????? ?????? ?????????? 3 ???????? .',
                'name.max' => '?????? ?????????? ?????????? ?????? ???????????? 191 ??????  .',
                'summary.required' => '?????? ?????????? ??????????.',
                'dir.required' => '?????? ?????? ???????? ??????????.',
                'language_id.required' => '?????? ???????? ??????????.',

            ];
        } else {
            return [];
        }
    }


}
