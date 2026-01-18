<?php
require_once '../vendor/autoload.php';
require_once '../db.php';
require_once '../app/models/Student.php';
require_once '../app/controllers/StudentController.php';

// Use the official Illuminate Blade classes instead of BladeOne
use Illuminate\Container\Container;
use Illuminate\Events\Dispatcher;
use Illuminate\Filesystem\Filesystem;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\View\Engines\CompilerEngine;
use Illuminate\View\Engines\EngineResolver;
use Illuminate\View\Factory;
use Illuminate\View\FileViewFinder;

// Setup Blade paths 
$views = ['../app/views'];
$cache = '../cache/views';

// Standard boilerplate to start the official Blade engine
$filesystem = new Filesystem;
$eventDispatcher = new Dispatcher(new Container);
$viewResolver = new EngineResolver;
$bladeCompiler = new BladeCompiler($filesystem, $cache);

$viewResolver->register('blade', function () use ($bladeCompiler) {
    return new CompilerEngine($bladeCompiler);
});

$viewFinder = new FileViewFinder($filesystem, $views);
$blade = new Factory($viewResolver, $viewFinder, $eventDispatcher);

// Initialize your MVC components 
$model = new Student($conn);
$controller = new StudentController($model, $blade);

// Simple Router 
$page = $_GET['page'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($page) {
    case 'create': $controller->create(); break;
    case 'store': $controller->store(); break;
    case 'edit': $controller->edit($id); break;
    case 'update': $controller->update($id); break;
    case 'delete': $controller->delete($id); break;
    default: $controller->index(); break;
}