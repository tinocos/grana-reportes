<footer class="footer">
  © 2021 Software-Adhoc.com
  <a href="https://software-adhoc.com/">Diseñado por Software-Adhoc.com para Grana</a>
</footer>

</div>

<!--<script src="https://cdn.ckeditor.com/4.16.2/full-all/ckeditor.js"></script> -->
<script src="<?php echo base_url(); ?>/assets/ckeditor/ckeditor.js"></script>


<script src="<?php echo base_url(); ?>/assets/node_modules/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>/dist/js/perfect-scrollbar.jquery.min.js"></script>
<script src="<?php echo base_url(); ?>/dist/js/waves.js"></script>
<script src="<?php echo base_url(); ?>/dist/js/sidebarmenu.js"></script>
<script src="<?php echo base_url(); ?>/assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/node_modules/sparkline/jquery.sparkline.min.js"></script>

<script src="<?php echo base_url(); ?>/assets/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

<script src="<?php echo base_url(); ?>/assets/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/node_modules/sweetalert2/sweet-alert.init.js"></script>

<script src="<?php echo base_url(); ?>/dist/js/custom.min.js"></script>


<script>

  $(function () {
    $('#myTable').DataTable();
    var table = $('#example').DataTable({
      "columnDefs": [{
          "visible": false,
          "targets": 2
        }],
      "order": [
        [2, 'asc']
      ],
      "displayLength": 25,
      "drawCallback": function (settings) {
        var api = this.api();
        var rows = api.rows({
          page: 'current'
        }).nodes();
        var last = null;
        api.column(2, {
          page: 'current'
        }).data().each(function (group, i) {
          if (last !== group) {
            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
            last = group;
          }
        });
      }
    });
    // Order by the grouping
    $('#example tbody').on('click', 'tr.group', function () {
      var currentOrder = table.order()[0];
      if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
        table.order([2, 'desc']).draw();
      } else {
        table.order([2, 'asc']).draw();
      }
    });
    // responsive table
    $('#config-table').DataTable({
      responsive: true
    });
    $('#example23').DataTable({
      dom: 'Bfrtip',
      buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
      ]
    });
    $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary me-1');
  });


  function updateDiv(nombre_div) {
    $("#" + nombre_div).load(window.location.href + " #" + nombre_div);
  }


  CKEDITOR.replace('institucion', {

    allowedContent: true,

    removeButtons: 'Paste,PasteText,PasteFromWord,Scayt,ExportPdf,Save,Styles,Language,Smiley,Link,Unlink,Form,Reference,Checkbox,Radio,TextField,Select,Textarea,Button,ImageButton,HiddenField,NewPage,CreateDiv,Flash,Iframe,About,ShowBlocks,Maximize',

    contentsCss: [
      //'https://cdn.ckeditor.com/4.16.2/full-all/contents.css',
      'https://grana.enlineasistemas.com/css/style.css'
    ],

    // This is optional, but will let us define multiple different styles for multiple editors using the same CSS file.
    bodyClass: 'document-editor'
  });


<?php
for ($i = 1; $i <= 18; $i++) {
  printf("
      CKEDITOR.replace('indice_{$i}', {
      allowedContent: true,
        customConfig: '../ckeditor/config.js',
      //removeButtons: 'Paste,PasteText,PasteFromWord,Scayt,ExportPdf,Save,Styles,Language,Smiley,Link,Unlink,Form,Reference,Checkbox,Radio,TextField,Select,Textarea,Button,ImageButton,HiddenField,NewPage,CreateDiv,Flash,Iframe,About,ShowBlocks,Maximize',

      contentsCss: [
        //'https://cdn.ckeditor.com/4.16.2/full-all/contents.css',
        'https://grana.enlineasistemas.com/css/style.css'
      ],

      bodyClass: 'document-editor'
    });
    ");
    
    
}
?>
/*
echo "CKEDITOR.instances['indice_".$i."'].on('blur', function() {
       enviarParcial({$datos['id']}, indice_{$i});
   });";
*/


  document.getElementById('pasteArea').onpaste = function (event) {
    // use event.originalEvent.clipboard for newer chrome versions
    var items = (event.clipboardData || event.originalEvent.clipboardData).items;
    console.log(JSON.stringify(items)); // will give you the mime types
    // find pasted image among pasted items
    var blob = null;
    for (var i = 0; i < items.length; i++) {
      if (items[i].type.indexOf("image") === 0) {
        blob = items[i].getAsFile();
      }
    }
    // load image if there is a pasted image
    if (blob !== null) {
      var reader = new FileReader();
      reader.onload = function (event) {
        console.log(event.target.result); // data url!
        document.getElementById("pastedImage").src = event.target.result;
      };
      reader.readAsDataURL(blob);
    }
  }

  function clearIMG() {
    document.getElementById('pastedImage').removeAttribute('src');
  }


  function enviarParcial(id, capitulo) {

    var contenido = CKEDITOR.instances[capitulo].getData();
    //console.log(contenido.replaceAll("'", "&apos;"));

    Swal.fire(contenido);
    $.ajax({
      type: 'post',
      cache: false,
      url: '/home/guardarCapitulo',
      data: {
        "id": id,
        "capitulo": capitulo,
        "contenido": contenido
      },
      dataType: "json",
      beforeSend: function () {
        Swal.fire({
                title: "Por favor espera!",
                text: "Se esta guardando la informacion.",
                timer: 20000,
                showConfirmButton: false
            });
      },
      success: function (respuesta) {
        if (respuesta.guardado == true) {
          Swal.fire("Capitulo guardado!");
        } else {
          Swal.fire("Ocurrio un error, intenta mas tarde");
        }
      },
      error: function () {
        Swal.fire("No se pudo contactar con el backend");
      }

    });
  }
  
  
  function grabarNoDictamen(){
        var cert_no  = document.getElementById('cert_no').value;
        var id  = document.getElementById('id').value;
        var programa_academico  = document.getElementById('programa_academico').value;
      $.ajax({
      type: 'post',
      cache: false,
      url: '/home/guardarNombreDictamen',
      data: {
        "id": id,
        "cert_no": cert_no,
        "programa_academico": programa_academico
      },
      dataType: "json",
      beforeSend: function () {
        Swal.fire({
                title: "Por favor espera!",
                text: "Se esta guardando la informacion.",
                timer: 20000,
                showConfirmButton: false
            });
      },
      success: function (respuesta) {
        if (respuesta.guardado == true) {
          Swal.fire("No. Dictamen guardado!");
        } else {
          Swal.fire("Ocurrio un error, intenta mas tarde");
        }
      },
      error: function () {
        Swal.fire("No se pudo contactar con el backend");
      }

    });
  }
  
  
  function generarContenido(id, tipo){
      
      $.ajax({
      type: 'post',
      cache: false,
      url: '/home/crearPDF/' + id + '/' + tipo + '',
      dataType: "json",
      beforeSend: function () {
        Swal.fire("Por favor espera!");
      },
      success: function (respuesta) {
        if (respuesta.guardado == true) {
          Swal.fire("Archivo generado!");
        } else {
          Swal.fire("Ocurrio un error, intenta mas tarde");
        }
      },
      error: function () {
        Swal.fire("No se pudo contactar con el backend");
      }

    });
      
  }


</script>



</body>

</html>