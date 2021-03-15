@extends('layouts.app')

@section('content')

<style>

  .custom_container{
     /* margin-top: 3%; */
    align-items: center;
    justify-content: space-between;
    display: flex;
    flex-direction: column;
  }
  .selected{
    border: 1px solid #ddb649;
    color: #ddb649;
    padding: 10px;
    border-radius: 5px;
    background: #fff;
    text-align: center;
  }

    .aroma_selection{
    display: flex;
    justify-content: space-around
  }

  .width{
    width: 30%;
  }

  .submit {

    display: flex;
    justify-content: center;

  }

  .red-btn {
    color: #fff;
    background-color: #ddb649;
    border-color: #ddb649;
  }

  .red-btn:hover {
    color: #000;
    background-color: #ddb649;
    border-color: #dbae29;
  }

  .error{
  font-size: 9px;
  text-align: center;
  color: #b71234;
  }

</style>


<div class="custom_container ">
  <div class="wine_selection">
    <div class=" d-flex justify-content-around ">

      <div class="wine_type">
        <div class="form-group ">
          <label for="typeOfWineSelection">The selected the type of wine</label>
          <div class="selected">
            <span>
              White Wine
            </span>
          </div>
        </div>
      </div>

    </div>
  </div>

  <form action="/white" method="POST">
    @csrf
    <div class="form-group ">
      <label for="sku">SKU</label>
      <input type="text" class="form-control" name="sku" id="sku" placeholder="add Sku">
        @if($errors->has('sku'))
        <p class="error">{{$errors->first('sku')}}</p>
        @endif
    </div>
    <div class="aroma_selection">
        <div class="width">
          <div class="form-group ">
            <label for="citrusFruit">Citrus fruit</label>
            <input type="text" class="form-control" name="citrusFruit" id="citrusFruit" placeholder="Citrus fruit">
             @if($errors->has('citrusFruit'))
              <p class="error">{{$errors->first('citrusFruit')}}</p>
              @endif
          </div>
          <div class="form-group ">
            <label for="stoneFruit">Stone fruit</label>
            <input type="text" class="form-control" name="stoneFruit" id="stoneFruit" placeholder="Citrus fruit">
             @if($errors->has('redFruit'))
              <p class="error">{{$errors->first('redFruit')}}</p>
              @endif
          </div>
          <div class="form-group ">
            <label for="tropicalFruit">Tropical fruit</label>
            <input type="text" class="form-control" name="tropicalFruit" id="tropicalFruit" placeholder="Tropical fruit">
             @if($errors->has('tropicalFruit'))
              <p class="error">{{$errors->first('tropicalFruit')}}</p>
              @endif
          </div>
          <div class="form-group ">
            <label for="honey">Honey</label>
            <input type="text" class="form-control" name="honey" id="honey" placeholder="Honey">
             @if($errors->has('honey'))
              <p class="error">{{$errors->first('honey')}}</p>
              @endif
          </div>
          <div class="form-group ">
            <label for="sweetness">Sweetness</label>
            <input type="text" class="form-control" name="sweetness" id="sweetness" placeholder="Sweetness">
             @if($errors->has('sweetness'))
              <p class="error">{{$errors->first('sweetness')}}</p>
              @endif
          </div>
        </div>
        <div class="width">
          <div class="form-group ">
            <label for="body">Body</label>
            <input type="text" class="form-control" name="body" id="body" placeholder="Body">
             @if($errors->has('body'))
              <p class="error">{{$errors->first('body')}}</p>
              @endif
          </div>
          <div class="form-group ">
            <label for="creamness">Creamness</label>
            <input type="text" class="form-control" name="creamness" id="creamness" placeholder="Creamness">
             @if($errors->has('creamness'))
              <p class="error">{{$errors->first('creamness')}}</p>
              @endif
          </div>
          <div class="form-group ">
            <label for="minerality">Minerality</label>
            <input type="text" class="form-control" name="minerality" id="minerality" placeholder="Minerality">
             @if($errors->has('minerality'))
              <p class="error">{{$errors->first('minerality')}}</p>
              @endif
          </div>
          <div class="form-group ">
            <label for="herbalGreen">Herbal/Green</label>
            <input type="text" class="form-control" name="herbalGreen" id="herbalGreen" placeholder="Herbal/Green">
             @if($errors->has('herbalGreen'))
              <p class="error">{{$errors->first('herbalGreen')}}</p>
              @endif
          </div>
          <div class="form-group ">
            <label for="floral">Floral</label>
            <input type="text" class="form-control" name="floral" id="floral" placeholder="Floral">
             @if($errors->has('floral'))
              <p class="error">{{$errors->first('floral')}}</p>
              @endif
          </div>
        </div>


      </div>
      <div class="submit">
        <button type="submit" class="btn red-btn ">Generate</button>
      </div>




    </div>

  </form>


</div>

@endsection
