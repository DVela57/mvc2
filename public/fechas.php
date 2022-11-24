<?php

    //horas
    print "la hora es " . time();

    print "<br>La hora en un mes es " . strtotime("+1 month");

    //fechas : date, DateTime

    print "<br>La fecha es: " . date("d/M/y");
    print "<br><br>";
    $fecha = new DateTime("now");
    var_dump($fecha);

    print "<br><br>";
    $fecha = new DateTime("+11 weeks");
    var_dump($fecha);

    print "<br><br>";
    $fecha = new DateTime("now");
    print "<br>Intento de fecha: " . $fecha->format("d@@M@@Y@H:i:sa");

    print "<br><br>";
    $mifecha = DateTime::createFromFormat("d/m/Y", "12/10/2018");
    print "<br>fecha custom: ";
    var_dump($mifecha);

    print "<br><br>";
    $mifecha = DateTime::createFromFormat("d/m/Y", "09/07/2018");
    print "<br>fecha custom2: " . $mifecha->format("d/n/Y  H:i:sa");