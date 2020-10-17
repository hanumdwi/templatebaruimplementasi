<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
        width: 102%;
        height: 70%;
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 12pt "Tahoma";
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 21mm;
        min-height: 29mm;
        padding: 20mm;
        margin: 10mm auto;
        border: 2px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        padding: 1cm;
        border: 5px red solid;
        height: 257mm;
        outline: 1cm #FFEAEA solid;
    }
    
    @page {
        size: A4;
        margin: 0;
    }
    @media print {
        html, body {
            width: 210mm;
            height: 29mm;        
        }
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }

	.Row {
    display: table;
    width: 100%; /*Optional*/
    table-layout: fixed; /*Optional*/
    border-spacing: 3mm;
    margin-top:1mm /*Optional*/
}
.Column {
    display: table-cell;
    table-layout: fixed; /*Optional*/
    border-spacing: 0mm;
    margin-top:0mm /*Optional*/
}
	</style>
</head>
<body>

@php
for ($x = 1; $x <= 8; $x++) { @endphp
      <div class="Row">
      <div class="Column">
       <div class="coba" style="height: 68.031496px; width:128.503937px;"> 
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('$barang_id', 'C128')}}" style="height: 37.795276px; width:128.503937px" alt="barcode" />
            
            <div class="coba1" style="margin-top: 0px; margin-left:37.795276px;">
            <font size="2"><strong>{{$barang_id}}</strong></font>
            </div>

            <div class="coba2" style="margin-top:0px; margin-left:45.354331px;">
                @foreach($barang as $b)
                <font size="2"> {{$b->NAMA_BARANG}} </font>
                @endforeach
            </div>
       </div>
       </div>

       <div class="Column">
       <div class="coba" style="height: 68.031496px; width:128.503937px;"> 
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('$barang_id', 'C128')}}" style="height: 37.795276px; width:128.503937px" alt="barcode" />
            
            <div class="coba1" style="margin-top:0px; margin-left:37.795276px;">
            <font size="2"><strong>{{$barang_id}}</strong></font>
            </div>

            <div class="coba2" style="margin-top:0px; margin-left:45.354331px;">
                @foreach($barang as $b)
                <font size="2"> {{$b->NAMA_BARANG}} </font>
                @endforeach
            </div>
       </div>
       </div>

       <div class="Column">
       <div class="coba" style="height: 68.031496px; width:128.503937px;"> 
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('$barang_id', 'C128')}}" style="height: 37.795276px; width:128.503937px" alt="barcode" />
            
            <div class="coba1" style="margin-top:0px; margin-left:37.795276px;">
            <font size="2"><strong>{{$barang_id}}</strong></font>
            </div>

            <div class="coba2" style="margin-top:0px; margin-left:45.354331px;">
                @foreach($barang as $b)
                <font size="2"> {{$b->NAMA_BARANG}} </font>
                @endforeach
            </div>
       </div>
       </div>

       <div class="Column">
       <div class="coba" style="height: 68.031496px; width:128.503937px;"> 
        <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('$barang_id', 'C128')}}" style="height: 37.795276px; width:128.503937px" alt="barcode" />
            
            <div class="coba1" style="margin-top:0px; margin-left:37.795276px;">
            <font size="2"><strong>{{$barang_id}}</strong></font>
            </div>

            <div class="coba2" style="margin-top:0px; margin-left:45.354331px;">
                @foreach($barang as $b)
                <font size="2"> {{$b->NAMA_BARANG}} </font>
                @endforeach
            </div>
       </div>
       </div>

       <div class="Column">
       <div class="coba" style="height: 68.031496px; width:128.503937px;">
         
         <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('$barang_id', 'C128')}}" style="height: 37.795276px; width:128.503937px" alt="barcode" />
          
          <div class="coba1" style="margin-top:0px; margin-left:37.795276px;">
            <font size="2"><strong>{{$barang_id}}</strong></font>
          </div>
  
          <div class="coba2" style="margin-top:0px; margin-left:45.354331px;">
              @foreach($barang as $b)
              <font size="2"> {{$b->NAMA_BARANG}} </font>
              @endforeach
          </div>
         </div>
         </div>
    </div> 
    @php } @endphp
</body>
</html>

<script type="text/javascript">window.print();</script>