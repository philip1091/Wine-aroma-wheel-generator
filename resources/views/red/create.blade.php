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
    border: 1px solid #b71234;
    color: #b71234;
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
    background-color: #b71234;
    border-color: #b71234;
  }

  .red-btn:hover {
    color: #fff;
    background-color: #d0211c;
    border-color: #c51f1a;
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
          <label for="typeOfWineSelection">The selected the type of wine is</label>
          <div class="selected">
            <span>
              Red Wine
            </span>
          </div>
        </div>
      </div>

    </div>
  </div>


  <form action="/red" method="POST">
    @csrf
    <div class="form-group ">
      <label for="sku">SKU</label>
      <input type="text" class="form-control" name="sku" id="sku" placeholder="add Sku">
        @if($errors->has('sku'))
        <p class="error">{{$errors->first('sku')}}</p>
        @endif
    </div>
    <div class="aroma_selection  ">
        <div class="width">
          <div class="form-group ">
            <label for="redFruit">Red fruit</label>
            <input type="text" class="form-control" name="redFruit" id="redFruit" placeholder="Red fruit">
              @if($errors->has('redFruit'))
              <p class="error">{{$errors->first('redFruit')}}</p>
              @endif
          </div>
          <div class="form-group ">
            <label for="blackFruit">Black fruit</label>
            <input type="text" class="form-control" name="blackFruit" id="blackFruit" placeholder="Black fruit">
            @if($errors->has('blackFruit'))
              <p class="error">{{$errors->first('blackFruit')}}</p>
              @endif
          </div>
           <div class="form-group ">
            <label for="floral">Floral</label>
            <input type="text" class="form-control" name="floral" id="floral" placeholder="Floral">
            @if($errors->has('floral'))
              <p class="error">{{$errors->first('floral')}}</p>
              @endif
          </div>
          <div class="form-group ">
            <label for="herbaceous">Herbaceous</label>
            <input type="text" class="form-control" name="herbaceous" id="herbaceaous" placeholder="Herbaceous">
            @if($errors->has('herbaceous'))
              <p class="error">{{$errors->first('herbaceous')}}</p>
              @endif
          </div>
          <div class="form-group ">
            <label for="pepper">Pepper</label>
            <input type="text" class="form-control" name="pepper" id="pepper" placeholder="Pepper">
            @if($errors->has('pepper'))
              <p class="error">{{$errors->first('pepper')}}</p>
              @endif
          </div>
        </div>
        <div class="width">
          <div class="form-group ">
            <label for="earth">Earth</label>
            <input type="text" class="form-control" name="earth" id="earth" placeholder="Earth">
            @if($errors->has('earth'))
              <p class="error">{{$errors->first('earth')}}</p>
              @endif
          </div>
          <div class="form-group ">
            <label for="sweetSpice">Sweet spice</label>
            <input type="text" class="form-control" name="sweetSpice" id="sweetSpice" placeholder="Sweet spice">
            @if($errors->has('sweetSpice'))
              <p class="error">{{$errors->first('sweetSpice')}}</p>
              @endif
          </div>
          <div class="form-group ">
            <label for="leather">Leather</label>
            <input type="text" class="form-control" name="leather" id="leather" placeholder="Leather">
            @if($errors->has('leather'))
              <p class="error">{{$errors->first('leather')}}</p>
              @endif
          </div>
          <div class="form-group ">
            <label for="tannin">Tannin</label>
            <input type="text" class="form-control" name="tannin" id="tannin" placeholder="Tannin">
            @if($errors->has('tannin'))
              <p class="error">{{$errors->first('tannin')}}</p>
              @endif
          </div>
          <div class="form-group ">
            <label for="body">Body</label>
            <input type="text" class="form-control" name="body" id="body" placeholder="Body">
            @if($errors->has('body'))
              <p class="error">{{$errors->first('body')}}</p>
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
