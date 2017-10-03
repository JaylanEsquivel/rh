@extends('index')
 @section('principal')
 <div class="row">
     <div class="col-lg-12">
         <span>Rescisão Calculada</span>
         <form action="" method="post">
             <input class="form-control" name="resc" id="resc" value="{{$decimo}}" disabled="disabled"/>
         </form>
     </div>
 </div>
 
 @endsection