<?php



/**
 * Setting Name
 * @param $name
 * @return mixed
 */
function getsetting($name)
{
    $setting=\App\Setting::where('name',$name)->first();
    return $setting->value();
}

/**
 * Upload Path
 * @return string
 */
function uploadpath()
{
    return 'photos';
}

/**
 * Get Image
 * @param $filename
 * @return string
 */
function getimg($filename,$web = null)
{
    $base_url = ('/');
        return $base_url.'/storage/'.$filename;
}

/**
 * Upload an image
 * @param $img
 */
function uploader($request,$img_name)
{
    $filename = rand(99999, 99999999) . $request->file($img_name)->getClientOriginalName();
    $path = \Storage::disk('public')->putFile(uploadpath(), $request->file($img_name));
    return $path;
}

function status()
{
    $array = 
    [
        '1' => 'Active', 
    '0' => 'Banned'
    ];
    return $array;
}

function roles()
{
    $array = ['user' => 'User', 'admin' => 'Admin'];
    return $array;
}

/**
 * Make a slug
 * @param $string
 * @return mixed
 */
function make_slug($string = null, $separator = "-") {
    if (is_null($string)) {
        return "";
    }

    // Remove spaces from the beginning and from the end of the string
    $string = trim($string);

    // Lower case everything
    // using mb_strtolower() function is important for non-Latin UTF-8 string | more info: http://goo.gl/QL2tzK
    $string = mb_strtolower($string, "UTF-8");;

    // Make alphanumeric (removes all other characters)
    // this makes the string safe especially when used as a part of a URL
    // this keeps latin characters and arabic charactrs as well
    $string = preg_replace("/[^a-z0-9_\s-ءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويةى]/u", "", $string);

    // Remove multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", " ", $string);

    // Convert whitespaces and underscore to the given separator
    $string = preg_replace("/[\s_]/", $separator, $string);

    return $string . '-' . time();
}


function solution_type()
{
    $array = [
        'software'=>'حلول البرمجيات',
        'testing'=>'اختبار الشبكات',
    ];
    return $array;
}

function solutions()
{
    $categories = App\Solution::all()->mapWithKeys(function ($item) {
        return [$item['id'] => $item['ar_name']];
    });
    return $categories;
}

function categories()
{
    $categories = App\Category::all()->mapWithKeys(function ($item) {
        return [$item['id'] => $item['name']];
    });
    return $categories;
}
function courses()
{
    $courses = App\Course::all()->mapWithKeys(function ($item) {
        return [$item['id'] => $item['title']];
    });
    return $courses;
}