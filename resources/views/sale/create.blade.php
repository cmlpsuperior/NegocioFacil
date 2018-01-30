@extends  ('layout')

@section('body')

<!--Cuerpo-->
<div class="container">
  <div class="row">

    <!-- 1.A Col -->
    <div class="col-md-9">
      <div class="panel panel-primary">
        <div class="panel-heading">1. Lista de articulos</div>

        <div class="panel-body">             
          <div class="row">
            <div class="form-group col-sm-8">
              <input type="text" class="form-control input-sm" id="searchItem" name="searchItem" placeholder="Buscar articulo ...">
            </div>
            <div class="form-group col-sm-2">
              <input type="number" class="form-control input-sm" id="quantity" name="quantity"  step="1" placeholder="Cant...">
            </div>
            <div class="form-group col-sm-2">
              <button type="button" class="btn btn-primary input-sm">Agregar</button>
            </div>
          </div>   

          <table class="table">
            <thead>
              <tr>
                <th class="col-xs-1">Cantidad</th>
                <th class="col-xs-6">Articulo</th>
                <th class="col-xs-2 text-center">Precio</th>
                <th class="col-xs-2 text-right">Subtotal</th>
                <th class="col-xs-1 ">Accion</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td >
                    <input class="form-control input-sm text-right" type="number" step="0.01" min="0" value="35000" />
                  </td>
                  <td >
                    bol Cemento andino
                  </td>
                  <td>
                      <input class="form-control input-sm text-right" type="number" step="0.01" min="0" value="35000.00" />
                  </td>
                  <td class="text-right">
                      35'000.15
                  </td>
                  <td >                          
                  </td>
                </tr>

                <tr>
                  <td >
                    <input class="form-control input-sm text-right" type="number" step="0.01" min="0" value="6000" />
                  </td>
                  <td >
                    uni Fierro arequipa
                  </td>
                  <td>
                      <input class="form-control input-sm text-right" type="number" step="0.01" min="0" value="1000.00" />
                  </td>
                  <td class="text-right">
                      6'000.35
                  </td>
                  <td >                          
                  </td>
                </tr>

                <tr>
                  <td >
                    <input class="form-control input-sm text-right" type="number" step="0.001" min="0" value="3000"/>
                  </td>
                  <td >
                    uni Ladrillo pandereta
                  </td>
                  <td>
                      <input class="form-control input-sm text-right" type="number" step="0.01" min="0" value="36000.00" />
                  </td>
                  <td class="text-right">
                      36'000.94
                  </td>
                  <td >                          
                  </td>
                </tr>
            </tbody>

          </table>              

        </div>

      </div>
    </div><!-- 1.A Col -->

<form role="form" id="billForm" action="{{ action('SaleController@store') }}" method="POST">
<input type="hidden" name="_method" value="POST">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

    <!-- 1.B Col -->
    <div class="col-md-3">

      <div class="panel panel-primary"  id=""> 
        <div class="panel-body">

          <div class="form-group">                           
            <h2 class="text-right">S/ 11'000.00</h2>    
            <h6 class="text-right">(S/ 1'000.00 IGV)</h6>             
          </div>

        </div>
      </div>
     
      <div class="panel panel-primary"  id="divPanelBillType"> 
        <div class="panel-heading">2. Comprobante</div>
        <div class="panel-body">
          <div class="form-group" id="divBillType">
            <label for="billType">Comprobante <span style="color:red">*</span></label>
            <select class="form-control input-sm" name="billType" id="billType">
              <option value="">Seleccionar</option>
              <option value="1">Proforma</option>
              <option value="2">Recibo</option>
              <option value="3">Boleta electronica</option>
              <option value="4">Factura electronica</option>
            </select>
          </div>

          <br>
          <div class="form-group hidden" id="divDocumentTypeJS">
            <label for="idDocumentType">Documento</label> 
            <select class="form-control input-sm" name="idDocumentType" id="idDocumentType">
            @foreach( $documentTypes as $documentType )
              <option value="{{$documentType->idDocumentType}}">{{$documentType->smallName}}</option>
            @endforeach
            </select>
          </div>

          <div class="form-inline hidden" id="divDocumentNumberJS" >
            <div class="form-group">
              <input type="number" class="form-control input-sm" name="documentNumber" id="documentNumber" placeholder="Num. Documento">
            </div>
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">+</button>
          </div>

          <br><br>
          <div class="form-group hidden" id="divPanelPaymentJS"> 
            <label for="payment">Monto pagado S/ <span style="color:red">*</span></label>
            <input type="number" class="form-control input-sm text-right" id="payment" name="payment" step="0.01" min="0"  />    
          </div>

          <br>
          <div class="form-group text-center hidden" id="divPanelSubmitJS">
            <button type="submit" class="btn btn-success">Registrar</button>
          </div>
         
        </div>
      </div>

    </div><!-- 1.B Col --> 
</form>

  </div>
</div>


<!--MODAL-->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Nuevo Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="form-group row">
          <div class="col-sm-6">
            <label for="mIdDocumentType">Documento</label> 
            <select class="input-sm form-control" name="mIdDocumentType" id="mIdDocumentType">
            @foreach( $documentTypes as $documentType )
              <option value="{{$documentType->idDocumentType}}">{{$documentType->smallName}}</option>
            @endforeach
            </select>
          </div>
          <div class="col-sm-6">
            <label for="mDocumentNumber">Numero doc.</label>
            <input type="text" class="input-sm form-control" id="mDocumentNumber" name="mDocumentNumber"/>
          </div>
        </div>

        <br>
        <div class="form-group row">
          <div class="col-sm-6">
            <label for="mFatherLastName">Ap. Paterno</label> 
            <input type="text" class="input-sm form-control" id="mFatherLastName" name="mFatherLastName"/>
          </div>
          <div class="col-sm-6">
            <label for="mMotherLastName">Ap. Materno</label> 
            <input type="text" class="input-sm form-control" id="mMotherLastName" name="mMotherLastName"/>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-6">
            <label for="mFirstNames">Nombres</label> 
            <input type="text" class="input-sm form-control" id="mFirstNames" name="mFirstNames"/>
          </div>
        </div>

        <br>
        <div class="form-group row">
          <div class="col-sm-6">
            <label for="mPhoneType">Tipo </label> 
            <select class="input-sm form-control" name="mPhoneType" id="mPhoneType">
              <option value="1">Celular</option>
              <option value="2">Fijo</option>
            </select>
          </div>
          <div class="col-sm-6">
            <label for="mPhoneNumber">Nùmero Telf.</label> 
            <input type="text" class="input-sm form-control" id="mPhoneNumber" name="mPhoneNumber"/>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Crear</button>
      </div>
    </div>
  </div>
</div>


@endsection

@section('script')
<script type="text/javascript" src="{!! asset('js/jquery.validate.min.js') !!}"></script>

<script >
  $(document).ready(function(){

    $("#billType").change(function(){
      changeDivBillType($( "#billType option:selected" ).text());
    });

    $( "#billForm" ).validate( {
      //ignore: [], //esto es para no validar input ocultos
      rules: {
        billType: "required",
        idDocumentType: "required",
        documentNumber: "required",
        payment: "required"
      },
      messages: {
        billType: "llenar campo",
        idDocumentType: "llenar campo",
        documentNumber: "llenar campo",
        payment: "llenar campo" 
      },
      errorElement: "em",
      highlight: function ( element, errorClass, validClass ) {
        $( element ).parents( ".form-group" ).addClass( "has-error" ).removeClass( "has-success" );
        
      },
      unhighlight: function (element, errorClass, validClass) {
        $( element ).parents( ".form-group" ).addClass( "has-success" ).removeClass( "has-error" );
      },
      errorPlacement: function() {
        // Don't show errors
      }
    } );

  });

  function changeDivBillType(selected){
    $("#divDocumentTypeJS").addClass('hidden'); 
    $("#divDocumentNumberJS").addClass('hidden'); 
    $("#divPanelPaymentJS").addClass('hidden');
    $("#divPanelSubmitJS").addClass('hidden');


    if ( selected.match(/proforma/gi)  ){
      $("#divDocumentTypeJS").removeClass('hidden'); 
      $("#divDocumentNumberJS").removeClass('hidden');
      $("#divPanelSubmitJS").removeClass('hidden');
    }
    else if ( selected.match(/recibo/gi) ){
      //updateBillTypeSelect(selected);
      $("#divDocumentTypeJS").removeClass('hidden'); 
      $("#divDocumentNumberJS").removeClass('hidden');
      $("#divPanelPaymentJS").removeClass('hidden');
      $("#divPanelSubmitJS").removeClass('hidden');
    }
    else if ( selected.match(/boleta/gi) ){
      //updateBillTypeSelect(selected);
      $("#divDocumentTypeJS").removeClass('hidden'); 
      $("#divDocumentNumberJS").removeClass('hidden');
      $("#divPanelPaymentJS").removeClass('hidden');
      $("#divPanelSubmitJS").removeClass('hidden');
    }
    else if ( selected.match(/factura/gi) ){
      //updateBillTypeSelect(selected);
      $("#divDocumentTypeJS").removeClass('hidden'); 
      $("#divDocumentNumberJS").removeClass('hidden');
      $("#divPanelPaymentJS").removeClass('hidden');
      $("#divPanelSubmitJS").removeClass('hidden');
    }
  }      
</script>
@endsection