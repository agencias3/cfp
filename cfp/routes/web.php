<?php

use AgenciaS3\Entities\Form;
use AgenciaS3\Mail\Site\Contact\PartnerClientMail;
use AgenciaS3\Mail\Site\Contact\PartnerMail;
use Illuminate\Support\Facades\Mail;

include('admin.php');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//LANDING PAGE / CAMPANHA
Route::group(['prefix' => 'campanha', 'as' => 'landing-page.', 'namespace' => 'LandingPage'], function () {
    Route::get('/', 'LandingPageController@index')->name('index');
    Route::get('/{seo_link}', 'LandingPageController@show')->name('show');
    Route::post('/store', 'LandingPageContactController@store')->name('store');
});

Route::group(['namespace' => 'Site'], function () {
    Route::get('/sitemap.xml', 'SiteMapController@index')->name('sitemap');

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/quem-somos', 'AboutController@index')->name('about');

    Route::get('/areas-atuacao', 'ServiceController@index')->name('service');
    Route::get('/areas-atuacao/{seo_link}', 'ServiceController@show')->name('service.show');
    Route::post('/areas-atuacao/store', 'ServiceController@store')->name('service.store');

    Route::get('/segmentos', 'SegmentController@index')->name('segment');
    Route::get('/segmentos/{seo_link}', 'SegmentController@show')->name('segment.show');
    Route::post('/segmentos/store', 'SegmentController@store')->name('segment.store');

    Route::get('/noticias', 'BlogController@index')->name('blog');
    Route::get('/noticias/tag/{tag}', 'BlogController@tag')->name('blog.tag');
    Route::get('/noticias/segmento/{segment}', 'BlogController@segment')->name('blog.segment');
    Route::get('/noticias/area-expertise/{service}', 'BlogController@service')->name('blog.service');
    Route::get('/noticias/{seo_link}', 'BlogController@show')->name('blog.show');

    Route::get('/contato', 'ContactController@index')->name('contact');
    Route::post('/contato/store', 'ContactController@store')->name('contact.store');

    Route::get('/carreiras', 'WorkController@index')->name('work');
    Route::post('/carreiras/store', 'WorkController@store')->name('work.store');

    Route::get('/parceiros', 'PartnerController@index')->name('partner');
    Route::post('/parceiros/store', 'PartnerController@store')->name('partner.store');

    Route::post('/newsletter/store', 'NewsletterController@store')->name('newsletter.store');

    Route::group(['namespace' => 'Ajax', 'prefix' => 'ajax', 'as' => 'ajax.'], function () {
        Route::get('/getAddress/{zip_code}', 'AddressController@getAddress')->name('address.getAddress');
    });

    /*
    Route::get('/test-email', function(){
        $dados = \AgenciaS3\Entities\TechnicalAssistance::find(64);
        $form = Form::with('emails')->find(4);

        //email admin
        if ($form->emails) {
            $emails = [];
            foreach ($form->emails as $row) {
                $emails[] = $row->email;
            }
            Mail::to($emails)->send(new \AgenciaS3\Mail\Site\TechnicalAssistance\TechnicalAssistanceMail($dados));
        }

        //email client
        return Mail::to($dados)->send(new \AgenciaS3\Mail\Site\TechnicalAssistance\TechnicalAssistanceClientMail($dados, $form));
    });
    */

});
