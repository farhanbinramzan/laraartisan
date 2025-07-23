<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HerosController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ImgSliderController;
use App\Http\Controllers\CallActionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\FooterServiceController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TestimonialController;

Route::get('/', [ViewController::class, 'index'])->name('view');
Route::get('/teams', [ViewController::class, 'team'])->name('teams');
Route::get('/services', [ViewController::class, 'service'])->name('services');
Route::get('/portfolio', [ViewController::class, 'portfolio'])->name('portfolio');
Route::get('/about-us', [ViewController::class, 'about'])->name('about-us');
Route::get('/contact-us', [ViewController::class, 'contact'])->name('contact-us');
Route::post('/contact', [ContactController::class, 'sendContactEmail'])->name('contact.send');

Route::group(['prefix' => 'admin/'], function () {
    Route::group(['middleware' => 'admin.guest'], function () {
        Route::get('login', [AdminController::class, 'index'])->name('admin.login');
        Route::get('register', [AdminController::class, 'register'])->name('admin.register');
        Route::post('login', [AdminController::class, 'authenticate'])->name('admin.authenticate');
    });
    Route::group(['middleware' => 'admin.auth'], function () {
        Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

        //Route for Team section
        Route::get('team/index', [TeamsController::class, 'index'])->name('team.index');
        Route::get('team/create', [TeamsController::class, 'create'])->name('team.create');
        Route::post('team/store', [TeamsController::class, 'store'])->name('team.store');
        Route::get('team/edit/{id}', [TeamsController::class, 'edit'])->name('team.edit');
        Route::post('team/update/{id}', [TeamsController::class, 'update'])->name('team.update');
        Route::get('team/delete/{id}', [TeamsController::class, 'delete'])->name('team.delete');

        //Route for Our Services
        Route::get('service/index', [ServiceController::class, 'index'])->name('service.index');
        Route::get('service/create', [ServiceController::class, 'create'])->name('service.create');
        Route::post('service/store', [ServiceController::class, 'store'])->name('service.store');
        Route::get('service/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
        Route::post('service/update/{id}', [ServiceController::class, 'update'])->name('service.update');
        Route::get('service/delete/{id}', [ServiceController::class, 'delete'])->name('service.delete');

        //Route for Testimonial section
        Route::get('testimonial/index', [TestimonialController::class, 'index'])->name('testimonial.index');
        Route::get('testimonial/create', [TestimonialController::class, 'create'])->name('testimonial.create');
        Route::post('testimonial/store', [TestimonialController::class, 'store'])->name('testimonial.store');
        Route::get('testimonial/edit/{id}', [TestimonialController::class, 'edit'])->name('testimonial.edit');
        Route::post('testimonial/update/{id}', [TestimonialController::class, 'update'])->name('testimonial.update');
        Route::get('testimonial/delete/{id}', [TestimonialController::class, 'delete'])->name('testimonial.delete');

        //Route for Call To Action section
        Route::get('callAction/index', [CallActionController::class, 'index'])->name('callAction.index');
        Route::get('callAction/create', [CallActionController::class, 'create'])->name('callAction.create');
        Route::post('callAction/store', [CallActionController::class, 'store'])->name('callAction.store');
        Route::get('callAction/edit/{id}', [CallActionController::class, 'edit'])->name('callAction.edit');
        Route::post('callAction/update/{id}', [CallActionController::class, 'update'])->name('callAction.update');
        Route::get('callAction/delete/{id}', [CallActionController::class, 'delete'])->name('callAction.delete');

        //Route for About section
        Route::get('about/index', [AboutController::class, 'index'])->name('about.index');
        Route::get('about/create', [AboutController::class, 'create'])->name('about.create');
        Route::post('about/store', [AboutController::class, 'store'])->name('about.store');
        Route::get('about/edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
        Route::post('about/update/{id}', [AboutController::class, 'update'])->name('about.update');
        Route::get('about/delete/{id}', [AboutController::class, 'delete'])->name('about.delete');

        //Route for ImgSlide section
        Route::get('imgSlide/index', [ImgSliderController::class, 'index'])->name('imgSlide.index');
        Route::get('imgSlide/create', [ImgSliderController::class, 'create'])->name('imgSlide.create');
        Route::post('imgSlide/store', [ImgSliderController::class, 'store'])->name('imgSlide.store');
        Route::get('imgSlide/edit/{id}', [ImgSliderController::class, 'edit'])->name('imgSlide.edit');
        Route::post('imgSlide/update/{id}', [ImgSliderController::class, 'update'])->name('imgSlide.update');
        Route::get('imgSlide/delete/{id}', [ImgSliderController::class, 'delete'])->name('imgSlide.delete');

        //Route for Status section
        Route::get('status/index', [StatusController::class, 'index'])->name('status.index');
        Route::get('status/create', [StatusController::class, 'create'])->name('status.create');
        Route::post('status/store', [StatusController::class, 'store'])->name('status.store');
        Route::get('status/edit/{id}', [StatusController::class, 'edit'])->name('status.edit');
        Route::post('status/update/{id}', [StatusController::class, 'update'])->name('status.update');
        Route::get('status/delete/{id}', [StatusController::class, 'delete'])->name('status.delete');

        //Route for Contact section
        Route::get('contact/index', [ContactUsController::class, 'index'])->name('contact.index');
        Route::get('contact/create', [ContactUsController::class, 'create'])->name('contact.create');
        Route::post('contact/store', [ContactUsController::class, 'store'])->name('contact.store');
        Route::get('contact/edit/{id}', [ContactUsController::class, 'edit'])->name('contact.edit');
        Route::post('contact/update/{id}', [ContactUsController::class, 'update'])->name('contact.update');
        Route::get('contact/delete/{id}', [ContactUsController::class, 'delete'])->name('contact.delete');

        //Route for Hero section
        Route::get('hero/index', [HeroSectionController::class, 'index'])->name('hero.index');
        Route::get('hero/create', [HeroSectionController::class, 'create'])->name('hero.create');
        Route::post('hero/store', [HeroSectionController::class, 'store'])->name('hero.store');
        Route::get('hero/edit/{id}', [HeroSectionController::class, 'edit'])->name('hero.edit');
        Route::post('hero/update/{id}', [HeroSectionController::class, 'update'])->name('hero.update');
        Route::get('hero/delete/{id}', [HeroSectionController::class, 'delete'])->name('hero.delete');

        //Route for Hero section
        Route::get('heros/index', [HerosController::class, 'index'])->name('heros.index');
        Route::get('heros/create', [HerosController::class, 'create'])->name('heros.create');
        Route::post('heros/store', [HerosController::class, 'store'])->name('heros.store');
        Route::get('heros/edit/{id}', [HerosController::class, 'edit'])->name('heros.edit');
        Route::post('heros/update/{id}', [HerosController::class, 'update'])->name('heros.update');
        Route::get('heros/delete/{id}', [HerosController::class, 'delete'])->name('heros.delete');

        //Route for Portfolio section
        Route::get('portfolio/index', [PortfolioController::class, 'index'])->name('portfolio.index');
        Route::get('portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
        Route::post('portfolio/store', [PortfolioController::class, 'store'])->name('portfolio.store');
        Route::get('portfolio/edit/{id}', [PortfolioController::class, 'edit'])->name('portfolio.edit');
        Route::post('portfolio/update/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');
        Route::get('portfolio/delete/{id}', [PortfolioController::class, 'delete'])->name('portfolio.delete');

        //Route for Category section
        Route::get('category/index', [CategoryController::class, 'index'])->name('category.index');
        Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::get('category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

        //Route for Footer section
        Route::get('footer/index', [FooterController::class, 'index'])->name('footer.index');
        Route::get('footer/create', [FooterController::class, 'create'])->name('footer.create');
        Route::post('footer/store', [FooterController::class, 'store'])->name('footer.store');
        Route::get('footer/edit/{id}', [FooterController::class, 'edit'])->name('footer.edit');
        Route::post('footer/update/{id}', [FooterController::class, 'update'])->name('footer.update');
        Route::get('footer/delete/{id}', [FooterController::class, 'delete'])->name('footer.delete');


        //Route for Footer service section
        Route::get('footerservice/index', [FooterServiceController::class, 'index'])->name('footerservice.index');
        Route::get('footerservice/create', [FooterServiceController::class, 'create'])->name('footerservice.create');
        Route::post('footerservice/store', [FooterServiceController::class, 'store'])->name('footerservice.store');
        Route::get('footerservice/edit/{id}', [FooterServiceController::class, 'edit'])->name('footerservice.edit');
        Route::post('footerservice/update/{id}', [FooterServiceController::class, 'update'])->name('footerservice.update');
        Route::get('footerservice/delete/{id}', [FooterServiceController::class, 'delete'])->name('footerservice.delete');
    });
});
