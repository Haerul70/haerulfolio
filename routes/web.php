<?php

use App\Models\Education;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ExperienceController;

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

Route::get('/index', [IndexController::class, 'showHome'])->name('index');

Route::middleware('only_guest')->group(
    function () {
        Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AuthController::class, 'authenticating']);
    }
);

Route::middleware('auth')->group(function () {

    Route::post('logout', [AuthController::class, 'logOut'])->name('logout');

    Route::middleware(['only_admin', 'check.timeout'])->group(function () {

        Route::prefix('admin')->group(function () {
            Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        });

        //About Routes
        Route::prefix('about')->group(function () {
            Route::get('/data-about', [AboutController::class, 'showDataAbout'])->name('about.data-about');
            Route::get('/create-data-about', [AboutController::class, 'showAboutFormCreate'])->name('about.create-data-about');
            Route::post('/store-data-about', [AboutController::class, 'saveAddDataAbout'])->name('about.store-data-about');
            Route::get('/{id}/edit-data-about', [AboutController::class, 'showAboutFormEdit'])->name('about.edit-data-about');
            Route::post('/{id}/update-data-about', [AboutController::class, 'updateAboutData'])->name('about.update-data-about');
            Route::post('/{id}/delete-data-about', [AboutController::class, 'deleteDataAbout'])->name('about.delete-data-about');
            Route::get('/{id}/confirm-delete-data-about', [AboutController::class, 'confirmDeleteDataAbout'])->name('about.confirm-delete-data-about');
            Route::get('/data-softdelete-about', [AboutController::class, 'dataSoftDeleteAbout'])->name('about.data-softdelete-about');
            Route::get('/{id}/restore-data-softdelete-about', [AboutController::class, 'restoreDataSoftDeleteAbout'])->name('about.restore-data-softdelete-about');
        });

        //Skill Routes
        Route::prefix('skill')->group(function () {
            Route::get('/data-skills', [SkillController::class, 'showDataSkills'])->name('skill.data-skills');
            Route::get('/create-data-skill', [SkillController::class, 'showSkillFormCreate'])->name('skill.create-data-skill');
            Route::post('/store-data-skill', [SkillController::class, 'saveAddDataSkill'])->name('skill.store-data-skill');
            Route::get('/{id}/edit-data-skill', [SkillController::class, 'showSkillFormEdit'])->name('skill.edit-data-skill');
            Route::post('/{id}/update-data-skill', [SkillController::class, 'updateSkillData'])->name('skill.update-data-skill');
            Route::post('/{id}/delete-data-skill', [SkillController::class, 'deleteDataSkill'])->name('skill.delete-data-skill');
            Route::get('/{id}/confirm-delete-data-skill', [SkillController::class, 'confirmDeleteDataSkill'])->name('skill.confirm-delete-data-skill');
            Route::get('/data-softdelete-skill', [SkillController::class, 'dataSoftDeleteSkills'])->name('skill.data-softdelete-skill');
            Route::get('/{id}/restore-data-softdelete-skill', [SkillController::class, 'restoreDataSoftDeleteSkill'])->name('skill.restore-data-softdelete-skill');
        });

        Route::prefix('services')->group(function () {
            Route::get('/data-services', [ServiceController::class, 'showDataServices'])->name('service.data-services');
            Route::get('/create-data-services', [ServiceController::class, 'showServicesFormCreate'])->name('service.create-data-services');
            Route::post('/store-data-services', [ServiceController::class, 'saveAddDataServices'])->name('service.store-data-services');
            Route::get('/{id}/edit-data-services', [ServiceController::class, 'showServicesFormEdit'])->name('service.edit-data-services');
            Route::post('/{id}/update-data-services', [ServiceController::class, 'updateDataServices'])->name('service.update-data-services');
            Route::post('/{id}/delete-data-service', [ServiceController::class, 'deleteDataService'])->name('service.delete-data-service');
            Route::get('/{id}/confirm-delete-data-service', [ServiceController::class, 'confirmDeleteDataService'])->name('service.confirm-delete-data-service');
            Route::get('/data-softdelete-services', [ServiceController::class, 'dataSoftDeleteServices'])->name('service.data-softdelete-services');
            Route::get('/{id}/restore-data-softdelete-service', [ServiceController::class, 'restoreDataSoftDeleteService'])->name('service.restore-data-softdelete-service');
        });

        Route::prefix('experience')->group(function () {
            Route::get('/data-experiences', [ExperienceController::class, 'showDataExperiences'])->name('experience.data-experiences');
            Route::get('/create-data-experience', [ExperienceController::class, 'showExperienceFormCreate'])->name('experience.create-data-experience');
            Route::post('/store-data-experience', [ExperienceController::class, 'saveAddDataExperience'])->name('experience.store-data-experience');
            Route::get('/{id}/edit-data-experience', [ExperienceController::class, 'showExperienceFormEdit'])->name('experience.edit-data-experience');
            Route::post('/{id}/update-data-experience', [ExperienceController::class, 'updateDataExperience'])->name('experience.update-data-experience');
            Route::get('/{id}/delete-data-experience', [ExperienceController::class, 'deleteDataExperience'])->name('experience.delete-data-experience');
            Route::get('/{id}/confirm-delete-data-experience', [ExperienceController::class, 'confirmDeleteDataExperience'])->name('experience.confirm-delete-data-experience');
            Route::get('/data-softdelete-experience', [ExperienceController::class, 'dataSoftDeleteExperience'])->name('experience.data-softdelete-experience');
            Route::get('/{id}/restore-data-softdelete-experience', [ExperienceController::class, 'restoreDataSoftDeleteExperience'])->name('experience.restore-data-softdelete-experience');
        });

        Route::prefix('education')->group(function () {
            Route::get('/data-education', [EducationController::class, 'showDataEducation'])->name('education.data-education');
            Route::get('/create-data-education', [EducationController::class, 'showEducationFormCreate'])->name('education.create-data-education');
            Route::post('/store-data-education', [EducationController::class, 'saveAddDataEducation'])->name('education.store-data-education');
            Route::get('/{id}/edit-data-education', [EducationController::class, 'showEducationFormEdit'])->name('education.edit-data-education');
            Route::post('/{id}/update-data-education', [EducationController::class, 'updateDataEducation'])->name('education.update-data-education');
            Route::get('/{id}/delete-data-education', [EducationController::class, 'deleteDataEducation'])->name('education.delete-data-education');
            Route::get('/{id}/confirm-delete-data-education', [EducationController::class, 'confirmDeleteDataEducation'])->name('education.confirm-delete-data-education');
            Route::get('/data-softdelete-education', [EducationController::class, 'dataSoftDeleteEducation'])->name('education.data-softdelete-education');
            Route::get('/{id}/restore-data-softdelete-education', [EducationController::class, 'restoreDataSoftDeleteEducation'])->name('education.restore-data-softdelete-education');
        });

        Route::prefix('portfolios')->group(function () {
            Route::get('/data-portfolios', [PortfolioController::class, 'showDataPortfolios'])->name('portfolio.data-portfolios');
            Route::get('/create-data-portfolo', [PortfolioController::class, 'showPorfolioFormCreate'])->name('portfolio.create-data-portfolio');
            Route::post('/store-data-portfolio', [PortfolioController::class, 'saveAddDataPortfolio'])->name('portfolio.store-data-portfolio');
            Route::get('/{id}/edit-data-portfolio', [PortfolioController::class, 'showPortfolioFormEdit'])->name('portfolio.edit-data-portfolio');
            Route::post('/{id}/update-data-portfolio', [PortfolioController::class, 'updateDataPortfolio'])->name('portfolio.update-data-portfolio');
            Route::get('/{id}/delete-data-portfolio', [PortfolioController::class, 'deleteDataPortfolio'])->name('portfolio.delete-data-portfolio');
            Route::get('/{id}/confirm-delete-data-portfolio', [PortfolioController::class, 'confirmDeleteDataPortfolio'])->name('portfolio.confirm-delete-data-portfolio');
            Route::get('/data-softdelete-portfolio', [PortfolioController::class, 'dataSoftDeletePortfolio'])->name('portfolio.data-softdelete-portfolio');
            Route::get('/{id}/restore-data-softdelete-portfolio', [PortfolioController::class, 'restoreDataSoftDeletePortfolio'])->name('portfolio.restore-data-softdelete-portfolio');
        });
        Route::prefix('contact')->group(function () {
            Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.contact.send');
        });
    });
});
