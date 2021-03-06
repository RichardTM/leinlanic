<?php


Route::get('/', function () {

    return view('welcome');
});
    
Route::get('user/editar/{users}', 'UsersController@edit');
Route::get('user/lista', 'UsersController@list');
Route::get('user/crear', 'UsersController@create');
Route::get('user', 'UsersController@index');
Route::get('user/{users}', 'UsersController@show');
Route::post('user', 'UsersController@store');
Route::patch('user/{users}', 'UsersController@update');
Route::delete('user/{users}', 'UsersController@destroy');


//Autentificacion rutas
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
//Registracion rutas
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
//Reseteo de contraseña rutas
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::group(
    ['middleware' => ['auth']],
    function () {


        //L E N G U A S
        Route::get('lenguas/editar/{lengua}', 'LenguaController@edit');
        Route::get('lenguas/lista', 'LenguaController@list');
        Route::get('lenguas/crear', 'LenguaController@create');
        Route::get('lenguas', 'LenguaController@index');
        Route::get('lenguas/{lengua}', 'LenguaController@show');
        Route::post('lenguas', 'LenguaController@store');
        Route::patch('lenguas/{lengua}', 'LenguaController@update');
        Route::delete('lenguas/{lengua}', 'LenguaController@destroy');

        //D E S A R R O L L A D O R E S
        Route::get('desarrolladores/editar/{desarrollador}', 'DesarrolladorController@edit');
        Route::get('desarrolladores/lista', 'DesarrolladorController@list');
        Route::get('desarrolladores/crear', 'DesarrolladorController@create');
        Route::get('desarrolladores', 'DesarrolladorController@index');
        Route::get('desarrolladores/{desarrollador}', 'DesarrolladorController@show');
        Route::post('desarrolladores', 'DesarrolladorController@store');
        Route::patch('desarrolladores/{desarrollador}', 'DesarrolladorController@update');
        Route::delete('desarrolladores/{desarrollador}', 'DesarrolladorController@destroy');

        // C U R S O S

        Route::get('cursos/editar/{curso}', 'CursoController@edit');
        Route::get('cursos/lista', 'CursoController@list');
        Route::get('cursos/crear', 'CursoController@create');
        Route::get('cursos', 'CursoController@index');
        Route::get('cursos/show/{curso}', 'CursoController@show');
        Route::post('cursos', 'CursoController@store');
        Route::patch('cursos/{curso}', 'CursoController@update');
        Route::delete('cursos/{curso}', 'CursoController@destroy');


        Route::get('sexos/edit/{sexo}', 'SexoController@edit');
        Route::get('sexos/list', 'SexoController@list');
        Route::get('sexos/create', 'SexoController@create');
        Route::delete('sexos/{sexo}', 'SexoController@destroy');
        Route::get('sexos', 'SexoController@index');
        Route::get('sexos/{sexo}', 'SexoController@show');
        Route::post('sexos', 'SexoController@store');
        Route::patch('sexos/list{sexo}', 'SexoController@update');


        Route::get('recintos/edit/{recinto}', 'RecintoController@edit');
        Route::get('recintos/list', 'RecintoController@list');
        Route::get('recintos/create', 'RecintoController@create');
        Route::get('recintos', 'RecintoController@index');
        Route::get('recintos/{recinto}', 'RecintoController@show');
        Route::post('recintos', 'RecintoController@store');
        Route::patch('recintos/{recinto}', 'RecintoController@update');
        Route::delete('recintos/{recinto}', 'RecintoController@destroy');


        Route::get('modalidades/edit/{modalidad}', 'ModalidadController@edit');
        Route::get('modalidades/list', 'ModalidadController@list');
        Route::get('modalidades/create', 'ModalidadController@create');
        Route::get('modalidades', 'ModalidadController@index');
        Route::get('modalidades/{modalidad}', 'ModalidadController@show');
        Route::post('modalidades', 'ModalidadController@store');
        Route::patch('modalidades/{modalidad}', 'ModalidadController@update');
        Route::delete('modalidades/{modalidad}', 'ModalidadController@destroy');


        Route::get('nacionalidades/edit/{nacionalidad}', 'NacionalidadController@edit');
        Route::get('nacionalidades/list', 'NacionalidadController@list');
        Route::get('nacionalidades/create', 'NacionalidadController@create');
        Route::get('nacionalidades', 'NacionalidadController@index');
        Route::get('nacionalidades/{nacionalidad}', 'NacionalidadController@show');
        Route::post('nacionalidades', 'NacionalidadController@store');
        Route::patch('nacionalidades/{nacionalidad}', 'NacionalidadController@update');
        Route::delete('nacionalidades/{nacionalidad}', 'NacionalidadController@destroy');


        Route::get('carreras/edit/{carrera}', 'CarreraController@edit');
        Route::get('carreras/list', 'CarreraController@list');
        Route::get('carreras/create', 'CarreraController@create');
        Route::get('carreras', 'CarreraController@index');
        Route::get('carreras/{carrera}', 'CarreraController@show');
        Route::post('carreras', 'CarreraController@store');
        Route::patch('carreras/{carrera}', 'CarreraController@update');
        Route::delete('carreras/{carrera}', 'CarreraController@destroy');

        Route::get('areas/edit/{area}', 'AreaController@edit');
        Route::get('areas/list', 'AreaController@list');
        Route::get('areas/create', 'AreaController@create');
        Route::get('areas', 'AreaController@index');
        Route::get('areas/{area}', 'AreaController@show');
        Route::post('areas', 'AreaController@store');
        Route::patch('areas/{area}', 'AreaController@update');
        Route::delete('areas/{area}', 'AreaController@destroy');

        Route::get('domicilios/edit/{domicilio}', 'DomicilioController@edit');
        Route::get('domicilios/list', 'DomicilioController@list');
        Route::get('domicilios/create', 'DomicilioController@create');
        Route::get('domicilios', 'DomicilioController@index');
        Route::get('domicilios/{domicilio}', 'DomicilioController@show');
        Route::post('domicilios', 'DomicilioController@store');
        Route::patch('domicilios/{domicilio}', 'DomicilioController@update');
        Route::delete('domicilios/{domicilio}', 'DomicilioController@destroy');


        Route::get('etnias/edit/{etnia}', 'EtniaController@edit');
        Route::get('etnias/list', 'EtniaController@list');
        Route::get('etnias/create', 'EtniaController@create');
        Route::get('etnias', 'EtniaController@index');
        Route::get('etnias/{etnia}', 'EtniaController@show');
        Route::post('etnias', 'EtniaController@store');
        Route::patch('etnias/{etnia}', 'EtniaController@update');
        Route::delete('etnias/{etnia}', 'EtniaController@destroy');


        Route::get('cursos', 'CursoController@index');
        Route::get('cursos/crear', 'CursoController@create');
        Route::post('cursos', 'CursoController@store');
        // NIVELES.

        Route::get('niveles/editar/{nivel}', 'NivelController@edit');
        Route::get('niveles/lista', 'NivelController@list');
        Route::get('niveles', 'NivelController@index');
        Route::get('niveles/crear', 'NivelController@create');
        Route::get('niveles/{nivel}', 'NivelController@show');
        Route::post('niveles', 'NivelController@store');
        Route::patch('niveles/{nivel}', 'NivelController@update');
        Route::delete('niveles/{nivel}', 'NivelController@destroy');

        // lECCIONES.

        Route::get('lecciones/editar/{leccion}', 'LeccionController@edit');
        Route::get('lecciones/lista', 'LeccionController@list');
        Route::get('lecciones', 'LeccionController@index');
        Route::get('lecciones/crear', 'LeccionController@create');
        Route::get('lecciones/{leccion}', 'LeccionController@show');
        Route::post('lecciones', 'LeccionController@store');
        Route::patch('lecciones/{leccion}', 'LeccionController@update');
        Route::delete('lecciones/{leccion}', 'LeccionController@destroy');

        // ACTIVIDADES.

        Route::get('actividades/editar/{actividad}', 'ActividadController@edit');
        Route::get('actividades/lista', 'ActividadController@list');
        Route::get('actividades', 'ActividadController@index');
        Route::get('actividades/crear', 'ActividadController@create');
        Route::get('actividades/{actividad}', 'ActividadController@show');
        Route::post('actividades', 'ActividadController@store');
        Route::patch('actividades/{actividad}', 'ActividadController@update');
        Route::delete('actividades/{actividad}', 'ActividadController@destroy');





        //   P R E G U N T A S
        Route::get('preguntas/editar/{pregunta}', 'PreguntaController@edit');
        Route::get('preguntas/lista', 'PreguntaController@list');
        Route::get('preguntas/crear', 'PreguntaController@create');

        Route::get('preguntas', 'PreguntaController@index');
        Route::get('preguntas/{pregunta}', 'PreguntaController@show');
        Route::post('preguntas', 'PreguntaController@store');
        Route::patch('preguntas/{pregunta}', 'PreguntaController@update');
        Route::delete('preguntas/{pregunta}', 'PreguntaController@destroy');


        // R E S P U E S T A S
        Route::get('respuestas/editar/{respuesta}', 'RespuestaController@edit');
        Route::get('respuestas/lista', 'RespuestaController@list');
        Route::get('respuestas/crear', 'RespuestaController@create');

        Route::get('respuestas', 'RespuestaController@index');
        Route::get('respuestas/{respuesta}', 'RespuestaController@show');
        Route::post('respuestas', 'RespuestaController@store');
        Route::patch('respuestas/{respuesta}', 'RespuestaController@update');
        Route::delete('respuestas/{respuesta}', 'RespuestaController@destroy');

        //T I P O   P R E G U N T A S
        Route::get('tipopreguntas/editar/{tipoPregunta}', 'TipoPreguntaController@edit');
        Route::get('tipopreguntas/lista', 'TipoPreguntaController@list');
        Route::get('tipopreguntas/crear', 'TipoPreguntaController@create');

        Route::get('tipopreguntas', 'TipoPreguntaController@index');
        Route::get('tipopreguntas/{tipoPregunta}', 'TipoPreguntaController@show');
        Route::post('tipopreguntas', 'TipoPreguntaController@store');
        Route::patch('tipopreguntas/{tipoPregunta}', 'TipoPreguntaController@update');
        Route::delete('tipopreguntas/{tipoPregunta}', 'TipoPreguntaController@destroy');


        // P E R F I L E S
        Route::get('perfiles/editar/{perfil}', 'PerfilController@edit');
        Route::get('perfiles/list', 'PerfilController@list');
        Route::get('perfiles/crear', 'PerfilController@create');

        Route::get('perfiles', 'PerfilController@index');
        Route::get('perfiles/{perfil}', 'PerfilController@show');
        Route::post('perfiles', 'PerfilController@store');
        Route::patch('perfiles/{perfil}', 'PerfilController@update');
        Route::delete('perfiles/{perfil}', 'PerfilController@destroy');
    });

    Route::get('/home', 'HomeController@index')->name('home');

