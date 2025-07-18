<!-- edit.blade.php -->

@extends('layout')
@section('content')

      <h2>Edit Product Details</h2><br  />
     <form method="post" action="{{ route('products.update', $id) }}">>
        @csrf
        <input name="_method" type="hidden" value="PATCH">
          <p>
            <label for="code">Product Code: </label>
            <input type="text" name="code" value="{{$product->code}}">
          </p>

        <p>
          <label for="name">Product Name: </label>
          <input type="text" name="name" value="{{$product->name}}">
        </p>
        <p>
          <button type="submit" style="margin-left:38px">Update</button>
        </p>

      </form>
