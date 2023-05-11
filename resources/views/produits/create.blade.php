@extends('layouts.app')
@section('content')
<div class="col- bg-white p-5">
    <form method="POST" action="{{route('storept')}}">
        <input type="text" 
         name="lib"
         placeholder="entrez un nom de produit"
         class="form-control"><br> 
         <input type="text" 
         name="code"
         placeholder="entrez le code du produit"
         class="form-control"><br>
         <input type="date" 
         name="dateexp"
         placeholder="entrez la date d'expiration"
         class="form-control"><br>
         <input type="number" 
         name="prix"
         placeholder="entrez le prix"
         class="form-control"><br>
        <button type="submit" class="btn bg-primary">Enreigistrer</button>
    </form>
</div>
    </form>
</div>




@endsection