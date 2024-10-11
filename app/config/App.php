<?php

const SERVERURL = "http://localhost/rutas/"; // URL del proyecto
const COMPANY = "SISTEMA DE RUTAS"; // Nombre de la empresa o aplicacion
const VERSION = "1.0"; // Version de la aplicacion
date_default_timezone_set("America/Lima"); // Zona horaria

// METODOS COMUNES EN TODA LA APLICACION
function renderContentHeader($title = "", $root = "" , $path =""){
  return "
    <div class='content-header'>
    <div class='container-fluid'>
      <div class='row mb-2'>
        <div class='col-sm-6'>
          <h1 class='m-0'>{$title}</h1>
        </div>
        <div class='col-sm-6'>
          <ol class='breadcrumb float-sm-right'>
            <li class='breadcrumb-item'><a href='{$path}'>{$root}</a></li>
            <li class='breadcrumb-item active'>{$title}</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  ";
}

