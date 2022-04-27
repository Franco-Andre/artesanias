function calendar() {
    'use strict';
    var day = ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'];
    var month = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
    var d = new Date();
    setText('calendar-day', day[d.getDay()]);
    setText('calendar-date', d.getDate());
    setText('calendar-month-year', month[d.getMonth()] + ' ' + (1900 + d.getYear()));
    }

    //Esta funcion convierte a texto
    function setText(id, val) {
        'use strict';
        if (val < 10) {
            val = '0' + val;
        }
        document.getElementById(id).innerHTML = val;
    }

    //El calendario es llamado desde la pagina
    window.onload = calendar;