@extends('layouts.app')

@section('content')

<style>

  .custom_container{
     margin-top: 3%;
    align-items: center;
    justify-content: space-between;
    display: flex;
    flex-direction: column;
  }

  .label{
    text-align: center;
  }


  .selection{
    width: 50%;
    display: flex;
    justify-content: space-around;
  }

  .red-btn {
    color: #fff;
    background-color: #b71234;
    border-color: #b71234;
  }

  .red-btn:hover {
    color: #000;
    background-color: #d0211c;
    border-color: #c51f1a;
  }

  .white-btn{
    color: #fff;
    background-color: #dbae29;
    border-color: #dbae29;
  }
  .white-btn:hover{
    color: #000;
    background-color: #ddb649;
    border-color: #dbae29;
  }

  .aroma_index{
    position: relative;
    height: 100vh;
  }

  .image-w .position{
    position: absolute;
    left: 0;
  }
  .image-r .position{
    position: absolute;
    top: 100%;
    left: 0;
  }

  .white{
    display: flex;
    justify-content: space-around;
  }
  .red{
    display: flex;
    justify-content: space-around;
  }

  .button-white{
    margin-top: 30%;
  }

  .button-red{
    margin-top: 30%;
  }


  .disable{
    display:none;
  }

</style>

<div class="custom_container ">
{{-- <canvasW></canvasW> --}}
  <div class=" selection ">
    <form action="/red/create" >
      <div class="submit ">
        <button type="submit" class="btn red-btn ">Red wine</button>
      </div>
    </form>
    <form action="/white/create" >
      <div class="submit ">
        <button type="submit" class="btn white-btn ">White wine</button>
      </div>
    </form>
  </div>

</div>

<div class="aroma_index mt-5 ">

  <h3 class="label col-md-12">Aroma Image created</h3>

  @if ($lastWhiteWine)

    <div class="white">
      <img id="mainImgW" src="#" class="">
      <div id="image_w" class="disable image-w ">
        <img id="w1" name ="{{$lastWhiteWine->sku}}_{{$lastWhiteWine->citrusFruit}}" class="position " src='{{URL::asset('images/aroma/white/citrus_fruit/001_white_'.$lastWhiteWine->citrusFruit.'.png')}}'/>


        <img id="w2" name ="{{$lastWhiteWine->stoneFruit}}" class="position " src='{{URL::asset('images/aroma/white/stone_fruit/002_white_'.$lastWhiteWine->stoneFruit.'.png')}}'/>


        <img id="w3" name ="{{$lastWhiteWine->tropicalFruit}}" class="position " src='{{URL::asset('images/aroma/white/tropical_fruit/003_white_'.$lastWhiteWine->tropicalFruit.'.png')}}'/>


        <img id="w4" name ="{{$lastWhiteWine->honey}}" class="position " src='{{URL::asset('images/aroma/white/honey/004_white_'.$lastWhiteWine->honey.'.png')}}'/>


        <img id="w5" name ="{{$lastWhiteWine->sweetness}}" class="position " src='{{URL::asset('images/aroma/white/sweetness/005_white_'.$lastWhiteWine->sweetness.'.png')}}'/>


        <img id="w6" name ="{{$lastWhiteWine->body}}" class="position " src='{{URL::asset('images/aroma/white/body/006_white_'.$lastWhiteWine->body.'.png')}}'/>


        <img id="w7" name ="{{$lastWhiteWine->creamness}}" class="position " src='{{URL::asset('images/aroma/white/creamness/007_white_'.$lastWhiteWine->creamness.'.png')}}'/>


        <img id="w8" name ="{{$lastWhiteWine->minerality}}" class="position " src='{{URL::asset('images/aroma/white/minerality/008_white_'.$lastWhiteWine->minerality.'.png')}}'/>


        <img id="w9" name ="{{$lastWhiteWine->herbalGreen}}" class="position " src='{{URL::asset('images/aroma/white/herbal_green/009_white_'.$lastWhiteWine->herbalGreen.'.png')}}'/>


        <img id="w10" name ="{{$lastWhiteWine->floral}}" class="position " src='{{URL::asset('images/aroma/white/floral/010_white_'.$lastWhiteWine->floral.'.png')}}'/>

      </div>
      <div class="button-white">
        <button id="download_w" class="btn white-btn ">Download</button>
      </div>
    </div>
    @elseif($lastWhiteWine == null)
    <div class="white">
      <p>no White wine aroma yet image</p>
      </div>

  @endif

  @if ($lastRedWine)
    <div class="red">
      <img  id="mainImgR" src="#" class="">
      <div id="image_r" class="disable image-r">
        <img id="r1" name="{{$lastRedWine->sku}}_{{$lastRedWine->redFruit}}" src='{{URL::asset('images/aroma/red/red_fruit/001_red_'.$lastRedWine->redFruit.'.png')}}'/>


        <img id="r2" name="{{$lastRedWine->blackFruit}}" src='{{URL::asset('images/aroma/red/black_fruit/002_red_'.$lastRedWine->blackFruit.'.png')}}'/>


        <img id="r3" name="{{$lastRedWine->floral}}" src='{{URL::asset('images/aroma/red/floral/003_red_'.$lastRedWine->floral.'.png')}}'/>


        <img id="r4" name="{{$lastRedWine->herbaceous}}" src='{{URL::asset('images/aroma/red/herbaceous/004_red_'.$lastRedWine->herbaceous.'.png')}}'/>


        <img id="r5" name="{{$lastRedWine->pepper}}" src='{{URL::asset('images/aroma/red/pepper/005_red_'.$lastRedWine->pepper.'.png')}}'/>


        <img id="r6" name="{{$lastRedWine->earth}}" src='{{URL::asset('images/aroma/red/earth/006_red_'.$lastRedWine->earth.'.png')}}'/>


        <img id="r7" name="{{$lastRedWine->sweetSpice}}" src='{{URL::asset('images/aroma/red/sweet_spice/007_red_'.$lastRedWine->sweetSpice.'.png')}}'/>


        <img id="r8" name="{{$lastRedWine->leather}}" src='{{URL::asset('images/aroma/red/leather/008_red_'.$lastRedWine->leather.'.png')}}'/>


        <img id="r9" name="{{$lastRedWine->tannin}}" src='{{URL::asset('images/aroma/red/tannin/009_red_'.$lastRedWine->tannin.'.png')}}'/>


        <img id="r10" name="{{$lastRedWine->body}}" src='{{URL::asset('images/aroma/red/body/010_red_'.$lastRedWine->body.'.png')}}'/>

      </div>
      <div class="button-red">
        <button id="download_r" class="btn red-btn ">Download</button>
      </div>
    </div>
    @elseif($lastRedWine == null)
    <div class="red">
      <p>no red wine aroma yet image</p>
    </div>
  @endif
 </div>


</div>
<div class="newImage disable">
  <canvas class="canvas" id="myCanvasW" width="750" height="750"></canvas>
  <canvas class="canvas" id="myCanvasR" width="750" height="750"></canvas>
  <img src="" id="imgConverted">
</div>


@endsection

@push('scripts')
    <script>

      window.onload  = function (){
        const canvasW = document.getElementById("myCanvasW");
        const mainImgW = document.getElementById("mainImgW");

        const ctxW = myCanvasW.getContext("2d");
        const w1 = document.getElementById('w1');
        const w2 = document.getElementById('w2');
        const w3 = document.getElementById('w3');
        const w4 = document.getElementById('w4');
        const w5 = document.getElementById('w5');
        const w6 = document.getElementById('w6');
        const w7 = document.getElementById('w7');
        const w8 = document.getElementById('w8');
        const w9 = document.getElementById('w9');
        const w10 = document.getElementById('w10');

        // console.log(w1);
        if(w1){
          console.log("w1 is not null")

          ctxW.drawImage(w1, 10, 10);
          ctxW.drawImage(w2, 10, 10);
          ctxW.drawImage(w3, 10, 10);
          ctxW.drawImage(w4, 10, 10);
          ctxW.drawImage(w5, 10, 10);
          ctxW.drawImage(w6, 10, 10);
          ctxW.drawImage(w7, 10, 10);
          ctxW.drawImage(w8, 10, 10);
          ctxW.drawImage(w9, 10, 10);
          ctxW.drawImage(w10, 10, 10);

          const newSrcW = canvasW.toDataURL();
          mainImgW.src = newSrcW

          const downloadW = document.getElementById("download_w");

          downloadW.onclick = function (){

            const a = document.createElement("a");
            document.body.appendChild(a);
            a.href = newSrcW;
            a.download = `${w1.name}_${w2.name}_${w3.name}_${w4.name}_${w5.name}_${w6.name}_${w7.name}_${w8.name}_${w9.name}_${w10.name}_.png`;
            a.click();
            document.body.removeChild(a);

          }
        }else {
          console.log("w1 is null")
        }



        const canvasR = document.getElementById("myCanvasR");
        const mainImgR = document.getElementById("mainImgR");

        const ctxR = myCanvasR.getContext("2d");
        const r1 = document.getElementById('r1');
        const r2 = document.getElementById('r2');
        const r3 = document.getElementById('r3');
        const r4 = document.getElementById('r4');
        const r5 = document.getElementById('r5');
        const r6 = document.getElementById('r6');
        const r7 = document.getElementById('r7');
        const r8 = document.getElementById('r8');
        const r9 = document.getElementById('r9');
        const r10 = document.getElementById('r10');

        if(r1){

          ctxR.drawImage(r1, 10, 10);
          ctxR.drawImage(r2, 10, 10);
          ctxR.drawImage(r3, 10, 10);
          ctxR.drawImage(r4, 10, 10);
          ctxR.drawImage(r5, 10, 10);
          ctxR.drawImage(r6, 10, 10);
          ctxR.drawImage(r7, 10, 10);
          ctxR.drawImage(r8, 10, 10);
          ctxR.drawImage(r9, 10, 10);
          ctxR.drawImage(r10, 10, 10);


          const newSrcR = canvasR.toDataURL();


          mainImgR.src = newSrcR

          const downloadR = document.getElementById("download_r");

          downloadR.onclick = function (){

            const a = document.createElement("a");
            document.body.appendChild(a);
            a.href = newSrcR;
            a.download = `${r1.name}_${r2.name}_${r3.name}_${r4.name}_${r5.name}_${r6.name}_${r7.name}_${r8.name}_${r9.name}_${r10.name}_.png`;
            a.click();
            document.body.removeChild(a);

          }
        }else{
          console.log("r1 is empty")
        }



      }




</script>
@endpush
